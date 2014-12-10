<?php


//Constructor 
  class A{
      function __construct(){
          echo "I am happy";
         $this->label="Arun";
      }
      /////
     public function __destruct(){
         $this->label="";
      }
      /////
      function myadd($a,$b){
          //echo "#".$a+$b;
          $c=$a+$b;
         echo $this->label.$c;
      }
  }
  
  $obj=new A();
  $obj->myadd(2,3);

/*

  class A{
      
      public $var="Welcome";
      
      public function myop(){
          
//we can not use $this(i.e object) in Scope Resolution ::          
          //echo $this->var;
          echo "Hi";
      }
      
  }
  
  //$objA=new A();
  //without converting to object we can use 
  A::myop();

*/


/*
// Class with public variable as object
  class A{
      
      public $var="Welcome";
      
      public function myop(){
          echo $this->var;
      }
      
  }
  
  $objA=new A();
  
  echo $objA->myop();
*/

// Object in array
  /* $info=(object)array(
       "name"=>"Arun",
       "password"=>"1234"
       );
   echo $info->name;
   */
   echo "\n";
?>
