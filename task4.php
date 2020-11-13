<?php
function recuAdd($a)
{ 


	if($a>=5)//condition for recurtion
   {
  echo $a."";
 return $a;//find the number

   }

   else{
   	echo $a."+";
	return recuAdd(1+$a)+$a;// get the number and add with the number 
	 }
}
$a=1;

echo"=".(recuAdd($a));
?>