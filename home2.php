<?php
$m=1; $n=9; $z=9;
for($i=1; $i<=$n; $i++){
 for($j=$i; $j<=$n-1; $j++){
   echo "&nbsp;&nbsp;&nbsp;";
  }
 for($k=1; $k<=$m; $k++){
   if($k==1){
     echo $k ."&nbsp";
    }
   else{
     echo "&nbsp;&nbsp;&nbsp;";
    }
  }
 for($c=$m; $c>1; $c--){
   if($c-1 == 1){
     echo $c-1 ."&nbsp";
    }
   else{
     echo "&nbsp;&nbsp;&nbsp;";
    }
  }
  echo "<br>";
  $m++;
}
for($i=1; $i<=$n; $i++){
 for($j=1; $j<=$i; $j++){
   echo "&nbsp;&nbsp;&nbsp;";
  }
 for($k=1; $k<$z; $k++){
   if($k==1){
     echo $k ."&nbsp";
    }
   else{
     echo "&nbsp;&nbsp;&nbsp;";
    }
  }
for($c=$z-2; $c>=1; $c--){
  if($c==1){
    echo $c ."&nbsp";
   }
  else{
    echo "&nbsp;&nbsp;&nbsp;";
   }
 }
 echo "<br>";
 $z--;
}

 ?>