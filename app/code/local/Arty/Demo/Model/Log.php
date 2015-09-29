<?php
/**
 * Created by PhpStorm.
 * User: Ujwala
 * Date: 30-07-2015
 * Time: 17:19
 */
class Arty_Demo_Model_Log extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init(demo/log);
    }
}