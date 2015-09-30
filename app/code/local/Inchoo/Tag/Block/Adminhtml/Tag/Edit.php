<?php

class Inchoo_Tag_Block_Adminhtml_Tag_Edit extends Mage_Adminhtml_Block_Tag_Edit
{
// some code
 public function getHeaderText()
    {
        if (Mage::registry('current_tag')->getId())
		{
            return Mage::helper('tag')->__("Edit Tag '%s'", $this->escapeHtml(Mage::registry('current_tag')->getName()));
        }
        return Mage::helper('tag')->__('New Tag')."hiieeeAdminHtml";
    }



}