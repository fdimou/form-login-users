<?php
$amount=12222;
$coins=[500,200,100,50,20,10,5,2,1];
foreach ($coins as $coins){
	$d=(int)($amount/$coins);
	$amount=$amount%$coins;
	if($d>0) echo "$d x $coins euro <br/>";
}
	?>