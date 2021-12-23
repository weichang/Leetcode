<?php


class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {

        $low = 0;
        $high = count($nums)-1;

        while ($low <= $high){
            $mid = ceil(($low+$high)/2);
            if($nums[$mid]==$target){
                return $mid;
            }elseif($nums[$mid]>$target){
                $high = $mid-1;
            }else{
                $low = $mid+1;
            }
        }
        return $low;
    }
}

$nums = [1,2,3,4,5];
$target = 3;

$c = new Solution();
echo $c->searchInsert($nums,$target);