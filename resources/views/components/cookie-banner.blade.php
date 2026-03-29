<div id="cookie-banner" class="hidden fixed bottom-0 inset-x-0 z-50 p-4">
    <div class="max-w-4xl mx-auto bg-white rounded-2xl shadow-2xl border border-gray-100 p-6">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4">
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900 mb-1">🍪 Cookie Preferences</h3>
                <p class="text-sm text-gray-600">
                    We use cookies to enhance your experience. By continuing to visit this site you agree to our use of necessary cookies. You can customize your preferences below.
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="cookie-accept-all" class="px-5 py-2.5 bg-rose-600 text-white text-sm font-medium rounded-lg hover:bg-rose-700 transition-colors">
                    Accept All
                </button>
                <button id="cookie-accept-necessary" class="px-5 py-2.5 bg-gray-200 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-300 transition-colors">
                    Necessary Only
                </button>
                <button id="cookie-customize" class="px-5 py-2.5 border border-gray-300 text-gray-700 text-sm font-medium rounded-lg hover:bg-gray-50 transition-colors">
                    Customize
                </button>
            </div>
        </div>

        <!-- Customization Panel -->
        <div id="cookie-settings" class="hidden mt-4 pt-4 border-t border-gray-200">
            <div class="space-y-3">
                <label class="flex items-center justify-between">
                    <div>
                        <span class="text-sm font-medium text-gray-900">Necessary Cookies</span>
                        <p class="text-xs text-gray-500">Required for the website to function properly</p>
                    </div>
                    <input type="checkbox" checked disabled class="rounded text-rose-600 cursor-not-allowed">
                </label>
                <label class="flex items-center justify-between">
                    <div>
                        <span class="text-sm font-medium text-gray-900">Analytics Cookies</span>
                        <p class="text-xs text-gray-500">Help us understand how visitors interact with our website</p>
                    </div>
                    <input type="checkbox" id="cookie-analytics" class="rounded text-rose-600 focus:ring-rose-500">
                </label>
                <label class="flex items-center justify-between">
                    <div>
                        <span class="text-sm font-medium text-gray-900">Marketing Cookies</span>
                        <p class="text-xs text-gray-500">Used to deliver personalized advertisements</p>
                    </div>
                    <input type="checkbox" id="cookie-marketing" class="rounded text-rose-600 focus:ring-rose-500">
                </label>
            </div>
            <div class="mt-4 flex justify-end">
                <button id="cookie-save-preferences" class="px-5 py-2.5 bg-rose-600 text-white text-sm font-medium rounded-lg hover:bg-rose-700 transition-colors">
                    Save Preferences
                </button>
            </div>
        </div>
    </div>
</div>
