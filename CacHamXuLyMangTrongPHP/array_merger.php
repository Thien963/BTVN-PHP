//Hàm có tác dụng gộp 2 hay nhiều mảng thành 1 mảng
<?php
$array = [
'domain' => 'toidicode.com',
'description' => 'Website học lập trình online'
];
$array1 = [5, 4, 3, 2, 1];
print_r(array_merge($array, $array1));
?>