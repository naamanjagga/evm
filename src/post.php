<?php
 class evm{
     public $count1;
     public $count2;
     public $count3;
     public $count4;
     public $count5;
     public $count6;
     public $count7;

     function __construct($a, $b, $c, $d, $e, $f, $g )
     {
         $this->count1 = $a;
         $this->count2 = $b;
         $this->count3 = $c;
         $this->count4 = $d;
         $this->count5 = $e;
         $this->count6 = $f;
         $this->count7 = $g;
     }
     function count(){
         $count_array = array($this->count1 , $this->count2 , $this->count3 , $this->count4 , $this->count5 , $this->count6 , $this->count7);
         echo json_encode($count_array);
        }
 } 

if(isset($_POST['action']) && $_POST['action']){
     $obj = new evm($_POST['count1'] ,$_POST['count2'] ,$_POST['count3'] ,$_POST['count4'] ,$_POST['count5'] ,$_POST['count6'] ,$_POST['count7']);
     $obj->count();
    }
?>