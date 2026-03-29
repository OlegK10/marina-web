export function initNewsletterForms(): void {
    const forms = document.querySelectorAll<HTMLFormElement>('[data-newsletter]');

    forms.forEach(form => {
        form.addEventListener('submit', async (e: Event) => {
            e.preventDefault();

            const emailInput = form.querySelector<HTMLInputElement>('input[type="email"]');
            const submitButton = form.querySelector<HTMLButtonElement>('button[type="submit"]');
            const messageDiv = form.querySelector<HTMLElement>('[data-newsletter-message]');

            if (!emailInput?.value) return;

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Subscribing...';
            }

            try {
                const response = await window.axios.post('/api/newsletter/subscribe', {
                    email: emailInput.value,
                });

                if (messageDiv) {
                    messageDiv.classList.remove('hidden', 'text-red-600');
                    messageDiv.classList.add('text-green-600');
                    messageDiv.textContent = response.data.message || 'Successfully subscribed!';
                }
                emailInput.value = '';
            } catch (error: unknown) {
                if (messageDiv) {
                    messageDiv.classList.remove('hidden', 'text-green-600');
                    messageDiv.classList.add('text-red-600');
                    const axiosError = error as { response?: { data?: { message?: string } } };
                    messageDiv.textContent = axiosError?.response?.data?.message || 'Something went wrong.';
                }
            } finally {
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.textContent = 'Subscribe';
                }
            }
        });
    });
}
