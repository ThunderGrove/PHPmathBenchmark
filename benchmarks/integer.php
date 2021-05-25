<?php
function intAdd(){
  for($i=1;$i<100000;$i++){
    for($j=1;$j<100000;$j++){
      $i+$j;
    }
  }
}

function intSub(){
  for($i=99999;$i>0;$i--){
    for($j=99999;$j>0;$j--){
      $i-$j;
    }
  }
}

function intMulti(){
  for($i=1;$i<100000;$i++){
    for($j=1;$j<100000;$j++){
      $i*$j;
    }
  }
}

function intDive(){
  for($i=99999;$i>0;$i--){
    for($j=99999;$j>0;$j--){
      $i%$j;
    }
  }
}
?>
