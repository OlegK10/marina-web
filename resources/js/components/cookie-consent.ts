interface CookiePreferences {
    necessary: boolean;
    analytics: boolean;
    marketing: boolean;
    timestamp: string;
}

const COOKIE_CONSENT_KEY = 'cookie_consent';
const GA_MEASUREMENT_ID = ''; // Set your GA ID here when ready

function getConsent(): CookiePreferences | null {
    const stored = localStorage.getItem(COOKIE_CONSENT_KEY);
    if (!stored) return null;
    try {
        return JSON.parse(stored) as CookiePreferences;
    } catch {
        return null;
    }
}

function setConsent(preferences: CookiePreferences): void {
    localStorage.setItem(COOKIE_CONSENT_KEY, JSON.stringify(preferences));
    applyConsent(preferences);
}

function applyConsent(preferences: CookiePreferences): void {
    if (preferences.analytics && GA_MEASUREMENT_ID) {
        loadGoogleAnalytics();
    }
    if (preferences.marketing) {
        // Prepared for marketing scripts (Facebook Pixel, etc.)
        // loadMarketingScripts();
    }
}

function loadGoogleAnalytics(): void {
    if (document.querySelector(`script[src*="googletagmanager"]`)) return;

    const script = document.createElement('script');
    script.async = true;
    script.src = `https://www.googletagmanager.com/gtag/js?id=${GA_MEASUREMENT_ID}`;
    document.head.appendChild(script);

    window.dataLayer = window.dataLayer || [];
    window.gtag = function(...args: unknown[]) {
        window.dataLayer.push(Object.assign({}, ...args.map((a, i) => ({ [i]: a }))));
    };
    window.gtag('js', new Date());
    window.gtag('config', GA_MEASUREMENT_ID, {
        anonymize_ip: true,
    });
}

function showBanner(): void {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.remove('hidden');
    }
}

function hideBanner(): void {
    const banner = document.getElementById('cookie-banner');
    if (banner) {
        banner.classList.add('hidden');
    }
}

export function initCookieConsent(): void {
    const existing = getConsent();
    if (existing) {
        applyConsent(existing);
        return;
    }

    showBanner();

    document.getElementById('cookie-accept-all')?.addEventListener('click', () => {
        setConsent({
            necessary: true,
            analytics: true,
            marketing: true,
            timestamp: new Date().toISOString(),
        });
        hideBanner();
    });

    document.getElementById('cookie-accept-necessary')?.addEventListener('click', () => {
        setConsent({
            necessary: true,
            analytics: false,
            marketing: false,
            timestamp: new Date().toISOString(),
        });
        hideBanner();
    });

    document.getElementById('cookie-customize')?.addEventListener('click', () => {
        const settings = document.getElementById('cookie-settings');
        if (settings) {
            settings.classList.toggle('hidden');
        }
    });

    document.getElementById('cookie-save-preferences')?.addEventListener('click', () => {
        const analyticsCheckbox = document.getElementById('cookie-analytics') as HTMLInputElement | null;
        const marketingCheckbox = document.getElementById('cookie-marketing') as HTMLInputElement | null;

        setConsent({
            necessary: true,
            analytics: analyticsCheckbox?.checked ?? false,
            marketing: marketingCheckbox?.checked ?? false,
            timestamp: new Date().toISOString(),
        });
        hideBanner();
    });
}
