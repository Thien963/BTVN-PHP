//Hàm có tác dụng trả về mảng chứa các phần tử giống nhau cả key và value trong mảng $array...
<?php
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
$array2 = [
    'domain' => 'toidicode.com',
    'description' => 'sWebsite học lập trình online'
];
print_r(array_intersect_assoc($array1, $array2));

?>
