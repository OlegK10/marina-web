<?php

namespace App\Services;

use Stripe\StripeClient;

class StripeInvoiceService
{
    private StripeClient $stripe;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('services.stripe.secret'));
    }

    /**
     * Create a Stripe invoice for a customer.
     *
     * @param  string  $customerEmail  The customer's email address.
     * @param  string  $customerName  The customer's full name.
     * @param  string  $description  Description for the invoice line item.
     * @param  int  $amountInCents  The amount to charge in cents.
     * @param  string  $currency  The currency code (default: usd).
     * @return array{invoice_id: string, invoice_url: string, invoice_pdf: string, status: string}
     */
    public function createInvoice(string $customerEmail, string $customerName, string $description, int $amountInCents, string $currency = 'usd'): array
    {
        // 1. Create or retrieve Stripe customer by email
        $customers = $this->stripe->customers->search(['query' => "email:'{$customerEmail}'"]);

        if (count($customers->data) > 0) {
            $customer = $customers->data[0];
        } else {
            $customer = $this->stripe->customers->create([
                'email' => $customerEmail,
                'name' => $customerName,
            ]);
        }

        // 2. Create invoice
        $invoice = $this->stripe->invoices->create([
            'customer' => $customer->id,
            'collection_method' => 'send_invoice',
            'days_until_due' => 7,
            'auto_advance' => true,
        ]);

        // 3. Add invoice item
        $this->stripe->invoiceItems->create([
            'customer' => $customer->id,
            'invoice' => $invoice->id,
            'description' => $description,
            'amount' => $amountInCents,
            'currency' => $currency,
        ]);

        // 4. Finalize invoice
        $invoice = $this->stripe->invoices->finalizeInvoice($invoice->id);

        return [
            'invoice_id' => $invoice->id,
            'invoice_url' => $invoice->hosted_invoice_url,
            'invoice_pdf' => $invoice->invoice_pdf,
            'status' => $invoice->status,
        ];
    }
}
