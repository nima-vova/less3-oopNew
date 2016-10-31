<?php

namespace Vendor\Moduls;

interface FormInputInterbase
{
    /**
    * @param $var
    */
   public function emailValidator();

   /**
    * @param $var
    */
   public function sqlInject();
}
