<?php
/**
 * @copyright Copyright (c) 2015 by Joachim Doerr
 * @author mail[at]joachim-doerr[dot]com Joachim Doerr
 *
 * @package redaxo5
 * @version 4.0.0
 * @license MIT
 */

if (rex_addon::isInstalled('mform') !== true) {
    $strPageContent = '
        <h3>MForm</h3>
        <p>Dieses Addon erleichtert das Erstellen von Modul Input Formularen.</p>
    ';
} else {
    $strInfoHeadline = '<h2 class="rex-hl2">'. $this->i18n('help_headline') .'</h2>';
    $strPageContent = '
        <h3>'. $this->i18n('help_subheadline_1') .'</h3>
        <p>'.  $this->i18n('help_infotext_1') .'</p>
        <p>'.  $this->i18n('help_infotext_2') .'</p>
        <h3>'. $this->i18n('help_subheadline_2') .'</h3>
        <p>'.  $this->i18n('help_infotext_3') .'</p>
        <p>'.  $this->i18n('help_infotext_4') .'</p>
    ';
}

if (rex_be_controller::getCurrentPagePart(2) == 'info') {
    echo rex_view::content('block', $strInfoHeadline.$strPageContent);
}
