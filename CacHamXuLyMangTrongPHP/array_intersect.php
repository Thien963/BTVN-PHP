//Hàm có tác dụng trả về mảng các phần tử giống nhau $value giữa các mảng
<?php
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
$array2 = [
    'domain' => 'toidicode.com',
    'description' => 'sWebsite học lập trình online'
];
print_r(array_intersect($array1, $array2));

?>

