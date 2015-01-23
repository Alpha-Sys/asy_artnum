<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2015
 * @version     OXID eShop PE, EE
 * @version     22.01.2015  1.0
 */

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_artnum',
    'title'        => '<img src="../modules/asy/module_logo.png" alt="Alpha-Sys" title="Alpha-Sys"> Artikelaufruf per Artikelnummer/EAN',
    'description'  => 'Mit diesem Modul können Sie eine Artikeldetailseite per Artikelnummer in der URL aufrufen.',
    'thumbnail'    => 'module_logo.png',
    'version'      => '1.0',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'extend'       => array(
        'details' => 'asy/asy_artnum/controllers/asy_artnum__details',
        'oxarticle' => 'asy/asy_artnum/models/asy_artnum__oxarticle',
    ),
    'files'        => array(
    ),
    'templates' => array(
    )
);