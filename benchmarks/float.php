<?php
function floatAdd(){
  for($i=0.00001;$i<1;$i+=0.00001){
    for($j=0.00001;$j<1;$j+=0.00001){
      $i+$j;
    }
  }
}

function floatSub(){
  for($i=0.99999;$i>0;$i-=0.00001){
    for($j=0.99999;$j>0;$j-=0.00001){
      $i-$j;
    }
  }
}

function floatMulti(){
  for($i=1.0001;$i<10;$i+=0.0001){
    for($j=1.0001;$j<10;$j+=0.0001){
      $i*$j;
    }
  }
}

function floatDive(){
  for($i=9.9999;$i>1;$i-=0.0001){
    for($j=9.9999;$j>1;$j-=0.0001){
      $i/$j;
    }
  }
}
?>
