//Hàm có tác dụng trả về một mảng có key trong mảng $array1 mà $array2,..,$arrayn không có
<?php
$array1 = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
$array2 = [
    'domain' => 'toidicode.com',
    'description' => 'sWebsite học lập trình online'
];
print_r(array_diff_assoc($array1, $array2));

?>

