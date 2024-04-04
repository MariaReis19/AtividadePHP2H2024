<?php 
	$a=5;
	$b=7;
	$c=27;


	if($a > $b && $b > $c){

		echo("$a $b $c");

	}elseif($b > $a && $a > $c){
		echo(" $b $a $c");
	}elseif($c > $a && $a > $b){
		echo(" $c $a $b");
	}elseif($b > $a && $a > $c){
		echo("$c $a $b");
	}elseif($a > $c && $c > $b){
		echo("$a $c $b");
	}elseif($b > $c && $c > $a){
		echo("$b $c $a");
	}elseif($c > $b && $b > $a){
		echo("$c $b $a");
	}


 ?>