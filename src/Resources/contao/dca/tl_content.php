<?php

declare(strict_types=1);

/**
 * Hofff Contao Tawk To Plugin
 *
 * @package    contao-tawk-to
 * @author     Mathias Arzberger <develop@pdir.de>
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017-2019 netzmacht David Molineus.
 * @license    LGPL-3.0-or-later https://github.com/hofff/contao-tawk-to/blob/master/LICENSE
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['hofff_tawk-to']
    = '{type_legend},type'
    . ';{tawk-to_legend},hofff_tawkToPageId,hofff_tawkToUserJs' //hofff_tawkToWidgetId,
    . ';{expert_legend:hide},guests,cssID,space'
    . ';{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_content']['fields']['hofff_tawkToPageId'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['hofff_tawkToPageId'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => [
        'mandatory'=>false,
        'tl_class' => 'w50',
    ],
    'sql' => "varchar(128) NOT NULL default ''",
];
/*
$GLOBALS['TL_DCA']['tl_content']['fields']['hofff_tawkToWidgetId'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['hofff_tawkToWidgetId'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array(
        'mandatory'=>false,
        'tl_class' => 'w50',
    ),
    'sql' => "varchar(128) NOT NULL default ''",
);
*/
$GLOBALS['TL_DCA']['tl_content']['fields']['hofff_tawkToUserJs'] = [
    'label' => &$GLOBALS['TL_LANG']['tl_content']['hofff_tawkToUserJs'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => [
        'allowHtml'=>true,
        'class'=>'monospace',
        'rte'=>'ace|html',
        'helpwizard'=>true,
        'tl_class' => 'clr',
    ],
    'explanation' => 'insertTags',
    'sql' => 'text default NULL',
];
