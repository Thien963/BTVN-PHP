//Hàm có tác dụng trả về mảng chứa các phần tử có trong mảng $aray1
//nhưng không có trong mảng $array2,..,$arrayn

<?php
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
$array2 = [
    'domain' => 'toidicode.com',
    'description' => 'sWebsite học lập trình online'
];
print_r(array_diff($array1, $array2));

?>

