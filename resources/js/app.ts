import './bootstrap';
import { initCookieConsent } from './components/cookie-consent';
import { initCheckoutForms } from './components/checkout';
import { initNewsletterForms } from './components/newsletter';
import { initFaqAccordion } from './components/faq-accordion';

document.addEventListener('DOMContentLoaded', () => {
    initCookieConsent();
    initCheckoutForms();
    initNewsletterForms();
    initFaqAccordion();
});
