<?php
/**
 * Created by PhpStorm.
 * User: Ujwala
 * Date: 30-07-2015
 * Time: 16:08
 */
class Arty_Demo_Block_demoblock extends Mage_Tag_Block_Product_List
{
   public function getCount()
    {
        return count($this->getTags());
    }
}