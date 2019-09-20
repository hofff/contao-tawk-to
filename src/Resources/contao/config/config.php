<?php

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['includes']['hofff_tawk-to'] = 'Hofff\\Contao\\Frontend\\TawkToPlugin';

/**
 * Front end modules
 */
array_insert($GLOBALS['FE_MOD'], 2, array
(
    'miscellaneous' => array
    (
        'hofff_tawk-to'   => 'Hofff\\Contao\\Frontend\\TawkToPlugin'
    )
));