function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

//The issue is that the foreach loop modifies the array during iteration.
//This can lead to unexpected results, as some elements might be skipped.
//A better approach is to use a filter or iterate over a copy of the array.