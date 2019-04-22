<?php
$salaries=array("Karthik" =>10000,"Meera" =>50000,"Zara"=>150000);
echo "1.Zara salary:",$salaries["Zara"];
echo "<br>";
$s= max($salaries);
echo "2.maximum salary:",$s;
echo "<br>";

foreach ($salaries as $key => $value) {
if($s==$value)
{ 

   echo " 3.The array in largest number :".$key."<br/>";
}
}



foreach ($salaries as $key => $value) {
if($value>17000)
{
	echo "4.",$key;
	echo "<br>";
	echo "<br>";
}
}
?> 




<?php
$marks=["Kartik" =>[100,90],"Janani" =>[70,99],"Naga" =>[80,90]];
foreach ($marks as $key => $value) {
	echo $key ."=". max($value);
	echo "<br>";
}
	
?>