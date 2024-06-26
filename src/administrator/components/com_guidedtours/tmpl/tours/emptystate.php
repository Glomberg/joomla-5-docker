<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_guidedtours
 *
 * @copyright   (C) 2023 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;

/** @var \Joomla\Component\Guidedtours\Administrator\View\Tours\HtmlView $this */

$displayData = [
    'textPrefix' => 'COM_GUIDEDTOURS_TOURS_LIST',
    'formURL'    => 'index.php?option=com_guidedtours&view=tours',
    'helpURL'    => 'https://docs.joomla.org/Special:MyLanguage/Help5.x:Guided_Tours',
    'icon'       => 'icon-map-signs',
];

$user = $this->getCurrentUser();

if ($user->authorise('core.create', 'com_guidedtours')) {
    $displayData['createURL'] = 'index.php?option=com_guidedtours&task=tour.add';
}

echo LayoutHelper::render('joomla.content.emptystate', $displayData);
