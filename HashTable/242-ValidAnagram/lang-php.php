<?php

class Solution {

    public function validAnagram($s,$t){

            if(strlen($s)!=strlen($t)){
                return false;
            }

            $counter = [];

            for ($i=0; $i < strlen($s) ; $i++) { 

                if(!array_key_exists($s[$i],$counter)){
                    $counter[$s[$i]] = 0;
                }

                $counter[$s[$i]]++;
            }

            for ($i=0; $i < strlen($t) ; $i++) { 

                if(!array_key_exists($t[$i],$counter) or $counter[$t[$i]]==0 ){
                    return false;
                }
                $counter[$t[$i]]--;
            }

        return true;

    }

}

// Given two strings s and t, return true if t is an anagram of s, and false otherwise.
// Example 1:
// Input: s = "anagram", t = "nagaram"
// Output: true

$s = "anagram";
$t = "nagaram";

$c = new Solution;
var_dump($c->validAnagram($s,$t));