<?php
class Inchoo_Tag_Block_Product_List extends Mage_Tag_Block_Product_List
{
// some code
 public function getProductId()
    {
        if ($product = Mage::registry('current_product')) {
            return $product->getId();
        }
        echo $product ."hieee";
        return false;
		
    }

}