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
 * @module      asy_artnum
 * @version     22.01.2015  1.0
 */

class asy_artnum__details extends asy_artnum__details_parent {

    /**
     * Returns current product
     * checks if artnum (article number) is given in the url
     *
     * @return oxArticle
     */
    public function getProduct()
    {
        if ($this->_oProduct === null) {
            $oConfig = $this->getConfig();
            $oUtils = oxRegistry::getUtils();
            $sArtNum = $oConfig->getRequestParameter('artnum');
            $sEan = $oConfig->getRequestParameter('ean');
            // object is not yet loaded
            $this->_oProduct = oxNew('oxarticle');
                
            if(!empty($sArtNum)){
                $this->_oProduct->loadArticleByField('oxartnum', $sArtNum);
            } elseif(!empty($sEan)){
                $this->_oProduct->loadArticleByField('oxean', $sEan);
            }
        }
        
        $ret = parent::getProduct();
        return $ret;
    }
}
