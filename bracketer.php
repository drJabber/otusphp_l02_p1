<?php
/**
 * Created by PhpStorm.
 * User: djabber
 * Date: 21.12.20
 * Time: 23:25
 */

namespace djabber;


class bracketer
{
  public function check($source){
      $counter = 0;
      foreach ($source as $ch){
            if ($ch == '('){
                $counter++;
            }
            elseif ($ch == ')'){
                $counter--;
            }
            if ($counter<0){
                return false;
            }
      }
      if ($counter!=0){
          return false;
      }

      return true;

  }
}