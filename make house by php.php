<!DOCTYPE html>
<html>
<head>
<title>Piramit </title>
<style>

.piramit{
width:1500px;
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
  class drawimage 
    {
        public $image;
		
	public function  rectangleborder() {
			// create image
			$this->image = imagecreatetruecolor(75, 38);
			$white = imagecolorallocate($this->image, 255, 255, 255);

			// Draw a white rectangle
			imagefilledrectangle($this->image, 1, 1, 73, 36, $white);

		
					   
			// Begin capturing the byte stream
			ob_start();

			// generate the byte stream
			imagejpeg($this->image, NULL, 100);

			// and finally retrieve the byte stream
			$rawImageBytes = ob_get_clean();

			echo "<img src='data:image/jpeg;base64," . base64_encode( $rawImageBytes ) . "' />";

    }
		public function  rectangle() {
			$this->image = imagecreatetruecolor(75,38);
			
           $bg = imagecolorallocate($this->image,200,50,100);
           imagefilledrectangle($this->image,0,0,75,38,$bg);
		  // ps_set_border_color ($bg ,22,44,255 );
			// Begin capturing the byte stream
			ob_start();

			// generate the byte stream
			imagejpeg($this->image, NULL, 100);

			// and finally retrieve the byte stream
			$rawImageBytes = ob_get_clean();

			echo "<img src='data:image/jpeg;base64," . base64_encode( $rawImageBytes ) . "' />";

		}
        
    }
	$draw = new drawimage;

// echo '<img src="brick.png"/><br>' ;
 for($i=9;$i<=30;$i++){
	 	if($i==19){
		echo '<p style="margin-left: 101px;margin-right: 101px;padding: 0px;margin-top: -13px;box-shadow: 1px 16px 9px 2px #0e0d0d;"> </p>';
	}
	
	$draw->rectangleborder() ;
	
	if($i>18){
		$k=16;
	}else{
		$k=$i;
		}
 

	for($j=1;$j<=$k;$j++){
	
		if($i>21 && $i<26 ){
			if($j>1 && $j<4 || $j>6 && $j<10 || $j>12 && $j<15 ){// widnow & door(4 column)
					$draw->rectangle() ;
			}else{
					$draw->rectangleborder() ;
			}
			
		}elseif($i>25 && $i<29 ){// door
			
		if( $j>6 && $j<10 ){
				$draw->rectangle() ;
			}else{
					$draw->rectangleborder() ;
			}
			
		}else{
				$draw->rectangleborder() ;
		}
		
		
	}
	echo '<br/>';
 }
 
 ?> 


</div>

</body>
</html>
