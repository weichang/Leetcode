<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {

        $total_sum = $nums[0];
        $total_max = $nums[0];

        for ($i=1; $i < count($nums) ; $i++) { 
            $total_sum = max($total_sum + $nums[$i],$nums[$i]);
            $total_max = max($total_max,$total_sum);
        }
        return $total_max;
    }


}
$nums = [-2,1,-3,4,-1,2,1,-5,4];
$c = new Solution;
echo $c->maxSubArray($nums);