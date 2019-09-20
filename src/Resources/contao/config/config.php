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

use Hofff\Contao\TawkTo\Frontend\ContentElement\TawkToPluginElement;
use Hofff\Contao\TawkTo\Frontend\FrontendModule\TawkToPluginFrontendModule;

$GLOBALS['TL_CTE']['includes']['hofff_tawk_to'] = TawkToPluginElement::class;

/**
 * Front end modules
 */
array_insert(
    $GLOBALS['FE_MOD'],
    2,
    [
        'miscellaneous' => [
            'hofff_tawk_to' => TawkToPluginFrontendModule::class,
        ],
    ]
);
