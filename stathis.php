<?php 
function getApples($trees,$alice,$bob) 
{
    
	// evalution code 
    
	$maxApples = 0;
   //echo sizeof($trees);
   //echo $alice;
   $count1 = $alice;
   // echo $bob;
	//echo $count1;
	
	if ($alice + $bob > sizeof($trees)){
		
		return -1;
	}
	else {
	$alicearray = array();
	$bobarray = array();
	
	
for ($x=0; $x<$count1; $x++){

	$randIndexAlice = array_rand($trees);
	$alicearray[] = $randIndexAlice;
	unset($trees[$randIndexAlice]);
	
	echo "h random timh gia thn alice einai:</br>" .  $randIndexAlice;
	
}

for ($y=0; $y<$bob; $y++){

	$randIndexBob = array_rand($trees);
	$bobarray[] = $randIndexBob;
	unset($trees[$randIndexBob ]);
	
	echo "h random timh einai gia ton bob einai :</br>" .  $randIndexBob;
	
}
/*foreach ($alicearray as $value){
	
	echo $value;
	
}
foreach ($bobarray as $value){
	
	echo $value;
	
}
*/
$sum1= array_sum($alicearray); 
$sum2 = array_sum($bobarray);
	$maxApples = $sum1+ $sum2;
return $maxApples;
}
}
echo getApples(array (3,5,1,6,3,1,7,4,2), 2 , 3); // Result 22





?>