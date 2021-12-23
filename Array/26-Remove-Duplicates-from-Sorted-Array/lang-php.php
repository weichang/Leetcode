<?php
class Solution{

    function removeDuplicates(&$nums) {

        $len = $count = count($nums);

        if($count < 2 ){
            return $count;
        }

        for ($i=1,$j=0; $i < $count ; $i++) { 
            if($nums[$i]==$nums[$j]){
                unset($nums[$i]);
                $len -- ;
            }else{
                $j = $i;
            }
        }
        return $len;
    }

    function removeDuplicates2(&$nums){
        
        $i = 0;
        for ($j=1; $j < count($nums) ; $j++) { 
            
            if ($nums[$j]!= $nums[$i]){
                $i++;
                $nums[$i] = $nums[$j];
            }
        }

        return $i + 1;
    }
}

$nums = [0,0,1,1,1,2,2,3,3,4];

$c = new Solution;
echo $c->removeDuplicates2($nums);