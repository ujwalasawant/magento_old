<?php
/**
 * Created by PhpStorm.
 * User: Ujwala
 * Date: 31-07-2015
 * Time: 19:21
 */
 require_once(Mage::getModuleDir('controllers','Mage_Tag').DS.'TagController.php');
 class Arty_Demo_IndexController extends Mage_Core_Controller_Front_Action
 {
      public function indexAction()
      {
        echo "Hiii";
      }
public function mamethodeAction ()
   {
     echo 'test mymethod';
    }
 }