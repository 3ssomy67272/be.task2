<?php 

// 1. give an array and find the largest and the smallest number in the array
// example: [10, 33, 1222, 4444, 0, -1111]

$Group = array(10, 33, 1222, 4444, 0, -1111);

echo "the largest number of the array is ", max ($Group);
echo "<br>";
echo "the smallest number of the array is ", min($Group);

// 2. Write a program to find the sum of all numbers from 1 to 1000 that meet all of the following conditions:
// The number must be a multiple of 3 or 5.
// The number must not be a multiple of 7.
// The number must be greater than 50 and less than 500.

$sum = 1;

// while($i <=1000){
//     $i /= 3;
//     echo $i, "<br>";
//     $i /= 3;
// };

// for($i=1;$i <=500; $i /= 3){
//     echo $i;
//     echo "<br>"
// };