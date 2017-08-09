<?php

function hexToStr($hex)
{
    $string='';
    for ($i=0; $i < strlen($hex)-1; $i+=2)
    {
        $string .= chr(hexdec($hex[$i].$hex[$i+1]));
    }
    return $string;
}

echo hexToStr("687474703A2F2F6772616E6470612D6368616C6C656E67652E6769746875622E696F2F");
echo "<br>";

#grandpa-challenge.appspot.com
#http://hash.online-convert.com/sha1-generator
#f4d8d7f97ffa63e4309320c45b5e6166a784cfaa





$datos =file('small-practice.in');
$datos =file('large-practice.in');

echo "<br>";
$case=1;
foreach ($datos as $key => $value) {
	# code...
	if ($key==0){
		continue;
	}
	if (($key % 3)==0){
		$elementos=explode(" ", $datos[$key]);
		$total = $datos[$key-2];
		for ($i=0,$sum=count($elementos); $i < $sum; $i++){
			for ($j=$i+1;$j<$sum;$j++){
				if (($elementos[$i] + $elementos[$j])==$total) {
					$pos1=$i+1;
					$pos2=$j+1;
					echo "Case #$case: $pos1 $pos2";
					
				}
			}
		}
		echo "<br>";
		$case++;
	}
	
}

?>
