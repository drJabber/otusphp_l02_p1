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
      $src = str_split($source);
      foreach ($src as $ch){
            if ($ch == '('){
                $counter++;
            }
            elseif ($ch == ')'){
                $counter--;
            }elseif (!($ch == '\n' or $ch == ' ' or $ch == '\t' or $ch == '\r')){
                throw new InvalidArgumentException('very bar character - '.$ch);
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