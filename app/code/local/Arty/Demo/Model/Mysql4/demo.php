<?php
class Arty_Demo_Model_Mysql4_demo extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {

        $this-> _init('demo/demo','id_demo');
    }
}
?>