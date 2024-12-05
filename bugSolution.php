function foo(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'a';
  });
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

//Alternatively, iterate over a copy:

function foo2(array $arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo2($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )