<?php
/**
 * @copyright Copyright (c) 2015 by Joachim Doerr
 * @author mail[at]joachim-doerr[dot]com Joachim Doerr
 *
 * @package redaxo5
 * @version 4.0.0
 * @license MIT
 */

echo rex_view::title(rex_i18n::msg('mform_title') . ' ' . rex_i18n::msg('mform_'.rex_be_controller::getCurrentPagePart(2)));

include rex_be_controller::getCurrentPageObject()->getSubPath();
