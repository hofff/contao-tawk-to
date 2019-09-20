<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Hofff_tawk-to
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Hofff\Contao\TawkTo\ContentElement;


/**
 * Class ContentRecursiveDownloadFolder
 *
 * Front end content element "hofff_tawk-to".
 * @copyright  Hofff.com 2017
 * @author     Mathias Arzberger <develop@pdir.de>
 * @package    Hofff_tawk-to
 */
class TawkToPlugin extends \Contao\ContentElement
{

	/**
	 * Files object
	 * @var \FilesModel
	 */
	protected $objFolder;

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_tawk_to';


	/**
	 * Return if there are no files
	 * @return string
	 */
	public function generate()
	{

        if (TL_MODE == 'BE') {
            $objTemplate = new \BackendTemplate('be_wildcard');
            $objTemplate->wildcard = '### Tawk.to Plugin ###';
            $objTemplate->title = $this->headline;
            $objTemplate->id = $this->id;
            $objTemplate->link = $this->name;
            $objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;
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
	protected function compile()
	{
	    // set params
		$this->Template->tawkToPageId   = $this->hofff_tawkToPageId;
		$this->Template->tawkToWidgetId = $this->hofff_tawkToWidgetId;
		$this->Template->tawkToUserJs   = $this->hofff_tawkToUserJs;
	}
}
