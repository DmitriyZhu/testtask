<?php 

function sumStrings($str1, $str2){
	preg_match_all('|\d|', $str1, $arr1);
	preg_match_all('|\d|', $str2, $arr2);

	$smallArr 	= [];
	$bigArr 	= [];

	#Getting small and big array
	if(count($arr1[0]) > count($arr2[0])){
		$bigArr 	= $arr1[0];
		$smallArr 	= $arr2[0];
	}else{
		$bigArr 	= $arr2[0];
		$smallArr 	= $arr1[0];
	}

	#Running through small array
	for($i = (count($smallArr) - 1); $i > 0; $i--){
		#Getting new val
		$newval = 
				$bigArr[(count($bigArr) - 1) - ((count($smallArr) - 1) - $i)] 
				+ $smallArr[$i];

		if($newval >= 10){ # Increment next val in case summ > 10
			$newval %= 10; 
			$bigArr[((count($bigArr) - 1) - ((count($smallArr) - 1) - $i) - 1)] ++;
		}
		$bigArr[(count($bigArr) - 1) - ((count($smallArr) - 1) - $i)] = $newval;
	}

	#Returning a string
	return join('',$bigArr);

}#sumStrings


print sumStrings('11111111','11119');