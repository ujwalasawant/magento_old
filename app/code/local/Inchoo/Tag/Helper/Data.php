<?php

class Inchoo_Tag_Helper_Data extends Mage_Tag_Helper_Data
{
// some code
	  public function cleanTags(array $tagNamesArr)
    {
        foreach ($tagNamesArr as $key => $tagName) {
            $tagNamesArr[$key] = trim($tagNamesArr[$key], '\'');
            $tagNamesArr[$key] = trim($tagNamesArr[$key]);
            if ($tagNamesArr[$key] == '') {
                unset($tagNamesArr[$key]);
            }
        }
		echo $tagNamesArr;
        return $tagNamesArr ;
    }

}
