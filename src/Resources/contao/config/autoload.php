<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Hofff',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_tawk_to' => 'system/modules/hofff_tawk-to/templates/elements',
));
