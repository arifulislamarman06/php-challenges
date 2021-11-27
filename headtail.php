<h3 style="font-size: 30px; display: flex; align-items: center; justify-content: center; padding: 40px 0;">
<?php


	$heads = 0;
	$tails = 0;



	for ($i=1; $i <= 100 ; $i++) { 

			$randomNumber = rand(1,2);
		
			if ($randomNumber == 1) {
				$heads++ ."<br>";
			 
			}else{
				$tails++ ."<br>";
			
			}
	}

	echo "There were {$heads} heads and {$tails} tails. <br>";
	?>
<h1 style="font-size: 70px; display: flex; align-items: center; justify-content: center;">
	<?php 
	if ($heads > $tails) {
		echo 'Heads, I WIN' ."<br>";
	}elseif ($tails == $heads) {
		echo "Match Draw";
	}else{
		echo 'Tails, You Win' ."<br>";
	}
	?>
</h1>
</h3>