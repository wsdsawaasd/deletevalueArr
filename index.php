<?php
function fakeSplice($array,$index)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        if ($index === $i) {
            $a = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $a;
            $index++;
        }
    }

    return $array;
}
    $arr1 = [ 1 ,2 ,3 ,4 ,6];

        print_r(array_splice(fakeSplice($arr1,1),0,count($arr1)-1));

