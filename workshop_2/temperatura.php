<?php
$temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73,
68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";

//$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73,
//68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
//$temp2=array_unique($temp);
//print_r(array_unique($temp2));


$temp_array = explode(',', $temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);

foreach($temp_array as $temp)
{
    $tot_temp += $temp;
}
$avg_high_temp = $tot_temp/$temp_array_length;
echo "Average Temperature is : ".$avg_high_temp."
 ";
echo "<br>";
echo "<br>";
sort($temp_array);
echo "List of five lowest temperaturas :";
echo "<br>";

for($i=0; $i< 5; $i++)
{
    echo $temp_array[$i]. ", ";
}
    echo "<br>";
    echo "<br>";
    echo "List of five highest temperatures :";
    echo "<br>";
    for($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
    echo $temp_array[$i].", ";
}

?>

