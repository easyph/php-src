--TEST--
Test rsort() function : usage variations - mixed array
--FILE--
<?php
/* Prototype  : bool rsort(array &$array_arg [, int $sort_flags])
 * Description: Sort an array in reverse order 
 * Source code: ext/standard/array.c
 */

/*
 * Pass rsort() an array of different data types to test behaviour
 */

echo "*** Testing rsort() : variation ***\n";

// mixed value array
$mixed_values = array (
  array(), 
  array( array(33, -5, 6), 
         array(11), 
         array(22, -55), 
         array() 
        ),
  -4, "4", 4.00, "b", "5", -2, -2.0, -2.98989, "-.9", "True", "",
  NULL, "ab", "abcd", 0.0, -0, "abcd\x00abcd\x00abcd", '', true, false
);

echo "\n-- Sort flag = default --\n";
$temp_array = $mixed_values;
var_dump(rsort($temp_array) );
var_dump($temp_array);

echo "\n-- Sort flag = SORT_REGULAR --\n";
$temp_array = $mixed_values;
var_dump(rsort($temp_array, SORT_REGULAR) );
var_dump($temp_array);

echo "Done";
?>
--EXPECTF--
*** Testing rsort() : variation ***

-- Sort flag = default --
bool(true)
array(22) {
  [0]=>
  array(4) {
    [0]=>
    array(3) {
      [0]=>
      int(33)
      [1]=>
      int(-5)
      [2]=>
      int(6)
    }
    [1]=>
    array(1) {
      [0]=>
      int(11)
    }
    [2]=>
    array(2) {
      [0]=>
      int(22)
      [1]=>
      int(-55)
    }
    [3]=>
    array(0) {
    }
  }
  [1]=>
  bool(true)
  [2]=>
  array(0) {
  }
  [3]=>
  float(4)
  [4]=>
  string(1) "b"
  [5]=>
  string(14) "abcd abcd abcd"
  [6]=>
  int(0)
  [7]=>
  float(0)
  [8]=>
  string(4) "abcd"
  [9]=>
  string(2) "ab"
  [10]=>
  string(4) "True"
  [11]=>
  string(1) "5"
  [12]=>
  string(1) "4"
  [13]=>
  string(3) "-.9"
  [14]=>
  string(0) ""
  [15]=>
  float(-2)
  [16]=>
  int(-2)
  [17]=>
  float(-2.98989)
  [18]=>
  NULL
  [19]=>
  string(0) ""
  [20]=>
  int(-4)
  [21]=>
  bool(false)
}

-- Sort flag = SORT_REGULAR --
bool(true)
array(22) {
  [0]=>
  array(4) {
    [0]=>
    array(3) {
      [0]=>
      int(33)
      [1]=>
      int(-5)
      [2]=>
      int(6)
    }
    [1]=>
    array(1) {
      [0]=>
      int(11)
    }
    [2]=>
    array(2) {
      [0]=>
      int(22)
      [1]=>
      int(-55)
    }
    [3]=>
    array(0) {
    }
  }
  [1]=>
  bool(true)
  [2]=>
  array(0) {
  }
  [3]=>
  float(4)
  [4]=>
  string(1) "b"
  [5]=>
  string(14) "abcd abcd abcd"
  [6]=>
  int(0)
  [7]=>
  float(0)
  [8]=>
  string(4) "abcd"
  [9]=>
  string(2) "ab"
  [10]=>
  string(4) "True"
  [11]=>
  string(1) "5"
  [12]=>
  string(1) "4"
  [13]=>
  string(3) "-.9"
  [14]=>
  string(0) ""
  [15]=>
  float(-2)
  [16]=>
  int(-2)
  [17]=>
  float(-2.98989)
  [18]=>
  NULL
  [19]=>
  string(0) ""
  [20]=>
  int(-4)
  [21]=>
  bool(false)
}
Done
