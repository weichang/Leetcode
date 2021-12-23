<?php

use Solution as GlobalSolution;

class Solution {

    public function removeElement(&$nums,$val){
        foreach ($nums as $k => $v){
            if ($val == $v){
                unset($nums[$k]);
            }
        }
        return count($nums);
    }

    public function removeElement2(&$nums,$val){
        
        $count = count($nums);

        for($i=0;$i<$count;$i++){
           
            if($nums[$i]==$val){
                echo "i-val===>". $nums[$i];
                unset($nums[$i]);
            }
        }
         
         return count($nums);
    }
    
}
$nums = [3,2,2,3];
$val = 3;
$c = new Solution;
echo $c->removeElement2($nums,$val);