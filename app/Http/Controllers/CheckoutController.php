<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Order;
use App\Models\Product;
use App\Models\Service;
use App\Services\StripeInvoiceService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Create a Stripe invoice for a product, course, or service.
     */
    public function createInvoice(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'type' => 'required|in:product,course,service',
            'item_id' => 'required|integer',
            'customer_email' => 'required|email|max:255',
            'customer_name' => 'required|string|max:255',
        ]);

        // Resolve the item model based on type
        $item = match ($validated['type']) {
            'product' => Product::active()->findOrFail($validated['item_id']),
            'course' => Course::active()->findOrFail($validated['item_id']),
            'service' => Service::active()->findOrFail($validated['item_id']),
        };

        $description = ucfirst($validated['type']) . ': ' . $item->name;
        $amountInCents = (int) round($item->price * 100);

        // Create Stripe invoice
        $stripeService = new StripeInvoiceService();
        $invoiceData = $stripeService->createInvoice(
            customerEmail: $validated['customer_email'],
            customerName: $validated['customer_name'],
            description: $description,
            amountInCents: $amountInCents,
        );

        // Create an Order record
        $order = Order::create([
            'user_email' => $validated['customer_email'],
            'user_name' => $validated['customer_name'],
            'orderable_type' => get_class($item),
            'orderable_id' => $item->id,
            'amount' => $item->price,
            'currency' => 'usd',
            'stripe_invoice_id' => $invoiceData['invoice_id'],
            'stripe_invoice_url' => $invoiceData['invoice_url'],
            'status' => $invoiceData['status'],
        ]);

        return response()->json([
            'success' => true,
            'invoice_url' => $invoiceData['invoice_url'],
            'order_id' => $order->id,
        ]);
    }
}
