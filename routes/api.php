<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

// Checkout
Route::post('/checkout/create-invoice', [CheckoutController::class, 'createInvoice'])->name('api.checkout.create-invoice');

// Newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('api.newsletter.subscribe');
