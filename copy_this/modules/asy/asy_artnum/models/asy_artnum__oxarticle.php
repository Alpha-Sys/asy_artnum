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

class asy_artnum__oxarticle extends asy_artnum__oxarticle_parent {

    /**
     * Loads oxarticle object by article number
     * @param string $sFieldname
     * @param string $sValue
     * @return boolean
     */
    public function loadArticleByField($sFieldname, $sValue) {
        $sSelect = $this->buildSelectString(array($this->getViewName() . ".$sFieldname" => $sValue));
        $aData = oxDb::getDb(oxDb::FETCH_MODE_ASSOC)->getRow($sSelect);
        if ($aData) {
            $this->assign($aData);
            return true;
        }
        return false;
    }
}
