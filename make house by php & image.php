<!DOCTYPE html>
<html>
<head>
<title>House Drawing By AL EMRAN </title>

<style>

.piramit{
width:1480px;
float:left;
text-align:center;
}
.piramit>.wn{
	box-shadow: 1px 4px 0px 1px rgba(207,221,171,.8);
}
</style>
</head>
<body style="height:3000px">

 <div class="piramit">
 <?php 
 
// echo '<img src="brick.png"/><br>' ;
 for($i=9;$i<=30;$i++){
	 	if($i==19){
		echo '<p style="margin-left: 101px;margin-right: 101px;padding: 0px;margin-top: -13px;box-shadow: 1px 16px 9px 2px #0e0d0d;"> </p>';
	}
	echo '<img src="img/brick.png"/>' ;
	
	if($i>18){
		$k=16;
	}else{
		$k=$i;
		}
 

	for($j=1;$j<=$k;$j++){
	
		if($i>21 && $i<26 ){
			if($j>1 && $j<4 || $j>6 && $j<10 || $j>12 && $j<15 ){// widnow & door(4 column)
				echo '<img src="img/brick2.png" class="wn"/>' ;
			}else{
				echo '<img src="img/brick.png"/>' ;
			}
			
		}elseif($i>25 && $i<29 ){// door
			
		if( $j>6 && $j<10 ){
				echo '<img src="img/brick2.png" class="wn" />' ;
			}else{
				echo '<img src="img/brick.png"/>' ;
			}
			
		}else{
			echo '<img src="img/brick.png"/>' ;
		}
		
		
	}
	echo '<br/>';
 }
 
 ?> 


</div>

</body>
</html>
