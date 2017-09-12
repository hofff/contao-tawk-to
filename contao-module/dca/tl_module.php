<?php

$GLOBALS['TL_DCA']['tl_module']['palettes']['hofff_tawk-to']
	= '{title_legend},type'
	. ';{tawk-to_legend},hofff_tawkToPageId,hofff_tawkToUserJs' //hofff_tawkToWidgetId,
	. ';{expert_legend:hide},guests,cssID,space'
	. ';{invisible_legend:hide},invisible,start,stop';

$GLOBALS['TL_DCA']['tl_module']['fields']['hofff_tawkToPageId'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['hofff_tawkToPageId'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array(
        'mandatory'=>false,
        'tl_class' => 'w50',
    ),
    'sql' => "varchar(128) NOT NULL default ''",
);
/*
$GLOBALS['TL_DCA']['tl_module']['fields']['hofff_tawkToWidgetId'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['hofff_tawkToWidgetId'],
    'exclude' => true,
    'inputType' => 'text',
    'eval' => array(
        'mandatory'=>false,
        'tl_class' => 'w50',
    ),
    'sql' => "varchar(128) NOT NULL default 'default'",
);*/
$GLOBALS['TL_DCA']['tl_module']['fields']['hofff_tawkToUserJs'] = array
(
    'label' => &$GLOBALS['TL_LANG']['tl_module']['hofff_tawkToUserJs'],
    'exclude' => true,
    'inputType' => 'textarea',
    'eval' => array(
        'allowHtml'=>true,
        'class'=>'monospace',
        'rte'=>'ace|html',
        'helpwizard'=>true
    ),
    'explanation' => 'insertTags',
    'sql' => "text NOT NULL",
);