<?php
/**
 * Created by PhpStorm.
 * User: Ujwala
 * Date: 31-07-2015
 * Time: 19:21
 */
 class Arty_result_IndexController extends Mage_Core_Controller_Front_Action
 {
      public function indexAction()
      {

          $this->loadLayout();
          $this->renderLayout();
        echo "Hello Sneha!!";
      }
      /**  public function mamethodeAction()
              {
                  echo "test mamethode";
              }**/
 }