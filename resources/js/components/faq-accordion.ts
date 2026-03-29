export function initFaqAccordion(): void {
    const accordionItems = document.querySelectorAll<HTMLElement>('[data-faq-item]');

    accordionItems.forEach(item => {
        const trigger = item.querySelector<HTMLElement>('[data-faq-trigger]');
        const content = item.querySelector<HTMLElement>('[data-faq-content]');
        const icon = item.querySelector<HTMLElement>('[data-faq-icon]');

        if (!trigger || !content) return;

        trigger.addEventListener('click', () => {
            const isOpen = !content.classList.contains('hidden');

            // Close all others
            accordionItems.forEach(otherItem => {
                const otherContent = otherItem.querySelector<HTMLElement>('[data-faq-content]');
                const otherIcon = otherItem.querySelector<HTMLElement>('[data-faq-icon]');
                if (otherContent && otherItem !== item) {
                    otherContent.classList.add('hidden');
                    if (otherIcon) otherIcon.classList.remove('rotate-180');
                }
            });

            // Toggle current
            if (isOpen) {
                content.classList.add('hidden');
                if (icon) icon.classList.remove('rotate-180');
            } else {
                content.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180');
            }
        });
    });
}
