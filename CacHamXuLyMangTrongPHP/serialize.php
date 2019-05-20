//Hàm có tác dụng chuyển đổi một chuỗi, số, mảng, object thành một chuỗi được mã hóa
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r($a = serialize($array));

?>

