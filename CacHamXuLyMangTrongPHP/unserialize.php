//Hàm có tác dụng decode chuỗi được mã hóa bằng serialize
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r($a = serialize($array));

print_r(unserialize($a));

?>

