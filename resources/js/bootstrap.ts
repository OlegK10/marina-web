import axios from 'axios';

declare global {
    interface Window {
        axios: typeof axios;
        dataLayer: Record<string, unknown>[];
        gtag: (...args: unknown[]) => void;
    }
}

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token;
}
