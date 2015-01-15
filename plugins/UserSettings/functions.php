<?php
/**
 * Piwik - free/libre analytics platform
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 */

namespace Piwik\Plugins\UserSettings;

use Piwik\Piwik;
use Piwik\Tracker\Request;

/**
 * Returns the given language code to translated language name
 *
 * @param $label
 *
 * @return string
 */
function languageTranslate($label)
{
    if ($label == '' || $label == 'xx') {
        return Piwik::translate('General_Unknown');
    }

    $key = 'UserSettings_Language_' . $label;

    $translation = Piwik::translate($key);

    // Show language code if unknown code
    if ($translation == $key) {
        $translation = Piwik::translate('UserSettings_LanguageCode') . ' ' . $label;
    }

    return $translation;
}

/**
 * @param $label
 * @return string
 */
function languageTranslateWithCode($label)
{
    $ex = explode('-', $label);
    $lang = languageTranslate($ex[0]);

    if (count($ex) == 2 && $ex[0] != $ex[1]) {
        $countryKey = 'UserCountry_country_' . $ex[1];
        $country = Piwik::translate($countryKey);

        if ($country == $countryKey) {
            return sprintf("%s (%s)", $lang, $ex[0]);
        }

        return sprintf("%s - %s (%s)", $lang, $country, $label);

    } else {
        return sprintf("%s (%s)", $lang, $ex[0]);
    }

}

/**
 * @param $lang
 * @return mixed
 */
function groupByLangCallback($lang)
{
    $ex = explode('-', $lang);
    return $ex[0];
}