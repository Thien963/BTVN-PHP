//hàm có tác dụng lấy ra key ngẫu nhiên trong mảng với number là số lượng muốn lấy
<?php
$array = [
'domain' => 'toidicode.com',
'description' => 'Website học lập trình online'
];
print_r(array_rand($array));

print_r(array_rand($array, 2));
?>