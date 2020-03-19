<?php

/**
 * Hofff Contao Tawk To Plugin
 *
 * @package    contao-tawk-to
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017-2020 netzmacht David Molineus.
 * @license    LGPL-3.0-or-later https://github.com/hofff/contao-tawk-to/blob/master/LICENSE
 * @filesource
 */

declare(strict_types=1);

namespace Hofff\Contao\TawkTo\ConsentBridge;

use Hofff\Contao\Consent\Bridge\Plugin\BasePlugin;

final class Plugin extends BasePlugin
{
    /** @inheritDoc */
    public function supportedContentElements() : array
    {
        return ['hofff_tawk_to'];
    }

    /** @inheritDoc */
    public function supportedFrontendModules() : array
    {
        return ['hofff_tawk_to'];
    }
}
