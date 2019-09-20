<?php

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

declare(strict_types=1);

namespace Hofff\Contao\TawkTo\Frontend\FrontendModule;

use Contao\ContentElement;
use Hofff\Contao\TawkTo\Frontend\TawkToPlugin;

/**
 * Class ContentRecursiveDownloadFolder
 *
 * @property string $name
 * @property string $hofff_tawkToPageId
 * @property string $hofff_tawkToWidgetId
 * @property string $hofff_tawkToUserJs
 */
final class TawkToPluginFrontendModule extends ContentElement
{
    use TawkToPlugin;

    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'mod_hofff_tawk_to';
}
