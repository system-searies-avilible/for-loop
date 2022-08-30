<?php

//For loop 

for($a=1; $a<=10; $a++){
	echo $a.") hello world"."<br/>";
	
}
echo"<br><br>";

for($a=10; $a>=1; $a--){
	echo$a.") hello world"."<br>";
}

echo"<br><br>";

for($a=1; $a<=10; $a=$a+2){
	echo$a.") hello world"."<br>";	
}

echo"<br><br>";

for($a=0; $a<=10; $a=$a+2){
	echo$a."hello world";
}
?>