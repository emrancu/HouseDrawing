<div style="width:100%;text-align:center">
<?php 
$col=11;
$row=($col*2)+1;
 $start=(($row)/2);
$amountofstar=1;
for($i=1;$i<=$col;$i++){
 
 
	for($z=1;$z<=$row;$z++){
		if($z>$start && $z<$start+$amountofstar ){
		 echo '<span style="color:red">*</span>';	
		}else{
			echo '*';
		}
	//$start--;
	 //$amountofstar++;
	
	}
 echo '<br>';
$amountofstar+=2;
	 $start--;
}
?>

</div>
