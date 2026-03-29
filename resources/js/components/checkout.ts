interface CheckoutResponse {
    success: boolean;
    invoice_url?: string;
    message?: string;
}

export function initCheckoutForms(): void {
    const forms = document.querySelectorAll<HTMLFormElement>('[data-checkout]');

    forms.forEach(form => {
        form.addEventListener('submit', async (e: Event) => {
            e.preventDefault();

            const submitButton = form.querySelector<HTMLButtonElement>('button[type="submit"]');
            const messageDiv = form.querySelector<HTMLElement>('#checkout-message');

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Processing...';
            }

            const formData = new FormData(form);
            const data = {
                type: formData.get('type') as string,
                item_id: formData.get('item_id') as string,
                customer_name: formData.get('customer_name') as string,
                customer_email: formData.get('customer_email') as string,
            };

            try {
                const response = await window.axios.post<CheckoutResponse>('/api/checkout/create-invoice', data);

                if (response.data.success && response.data.invoice_url) {
                    if (messageDiv) {
                        messageDiv.classList.remove('hidden', 'text-red-600');
                        messageDiv.classList.add('text-green-600');
                        messageDiv.textContent = 'Redirecting to payment...';
                    }
                    window.location.href = response.data.invoice_url;
                } else {
                    throw new Error(response.data.message || 'Failed to create invoice');
                }
            } catch (error: unknown) {
                if (messageDiv) {
                    messageDiv.classList.remove('hidden', 'text-green-600');
                    messageDiv.classList.add('text-red-600');
                    const axiosError = error as { response?: { data?: { message?: string } } };
                    messageDiv.textContent = axiosError?.response?.data?.message || 'Something went wrong. Please try again.';
                }
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.textContent = 'Try Again';
                }
            }
        });
    });
}
