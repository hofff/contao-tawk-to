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

namespace Hofff\Contao\TawkTo\ContentElement;

use Contao\BackendTemplate;
use Contao\ContentElement;

/**
 * Class ContentRecursiveDownloadFolder
 */
final class TawkToPluginElement extends ContentElement
{
    /**
     * Template
     *
     * @var string
     */
    protected $strTemplate = 'ce_tawk_to';

    /**
     * Return if there are no files
     *
     * @return string
     */
    public function generate() : string
    {
        if (TL_MODE === 'BE') {
            $objTemplate           = new BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### Tawk.to Plugin ###';
            $objTemplate->title    = $this->headline;
            $objTemplate->id       = $this->id;
            $objTemplate->link     = $this->name;
            $objTemplate->href     = 'contao?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

            return $objTemplate->parse();
        }

        // Return if there is no page id
        if (!$this->hofff_tawkToPageId) {
            return 'Tawk.to Plugin - No PageID is set!';
        }

        return parent::generate();
    }

    /**
     * Generate the content element
     */
    protected function compile() : void
    {
        // set params
        $this->Template->tawkToPageId   = $this->hofff_tawkToPageId;
        $this->Template->tawkToWidgetId = $this->hofff_tawkToWidgetId;
        $this->Template->tawkToUserJs   = $this->hofff_tawkToUserJs;
    }
}
