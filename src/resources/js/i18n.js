/**
 * Vue-i18n Configuration
 *
 * Setup internationalization for the Vue.js frontend with support for
 * English, German, Spanish, and Polish languages.
 */

import { createI18n } from 'vue-i18n';
import en from './locales/en.json';
import de from './locales/de.json';
import es from './locales/es.json';
import pl from './locales/pl.json';
import pt_BR from './locales/pt_BR.json';

/**
 * Create and configure vue-i18n instance
 *
 * @param {string} locale - Initial locale code (en, de, es, pl, pt_BR)
 * @returns {I18n} Configured i18n instance
 */
export function setupI18n(locale = 'en') {
    // Normalize locale code (e.g., convert 'pt_BR' to 'pt-BR')
    const normalizedLocale = locale.replace('_', '-');

    return createI18n({
        legacy: false,
        locale: normalizedLocale,
        fallbackLocale: 'en',
        messages: {
            en,
            de,
            es,
            pl,
            'pt-BR': pt_BR,
        },
        missingWarn: import.meta.env.DEV,
        fallbackWarn: import.meta.env.DEV,
    });
}

export default setupI18n;
