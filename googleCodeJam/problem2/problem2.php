<?php

$input=file('input');

//print_r($input);
//echo gettype($input[4]);
//$arr=explode(" ",$input[4]);
//print_r($arr);

$T=$input[0];

for($j=1;$j<=$T;$j++){
    $arr=explode(" ",trim($input[$j]));

    $C=(double)$arr[0];
    $F=(double)$arr[1];
    $X=(double)$arr[2];


    $a=0;
    $b=2;
    $d=$C/2*$F;


    $res=array();
    $res[0]=$X/2;
    $i=1;
    while(true){
        if ($i>1){
            $d=$d+$F*$C/(2+($i-1)*$F);
        }
        else{ 
            $d=$d;
        }
        $a=$a+$d+$C+$X;
        //echo $a;
        $b=$b+$F;
        $res[$i]=$a/$b;
        if($res[$i]>$res[$i-1]){
            echo "Case #$j: ".$res[$i-1]."\n";
            break;
        }
        //echo "$i: ".($a/$b)."\n";
        $a=$a-$X;
        $i++;
    }


}


