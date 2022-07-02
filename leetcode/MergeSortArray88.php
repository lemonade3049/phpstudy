<?php

class MergeSortArray88
{
    function merge(&$nums1, $m, $nums2, $n): void
    {
        $len1 = count($nums1) - 1;
        $m--;
        $n--;
        while($m >= 0 && $n >= 0){
            if($nums1[$m] > $nums2[$n]){
                $nums1[$len1--] = $nums1[$m--];
            }else{
                $nums1[$len1--] = $nums2[$n--];
            }
        }
        while($n >= 0){
            $nums1[$len1--] = $nums2[$n--];
        }
    }
}
