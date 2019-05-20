//Hàm có tác dụng lấy ra $lenght phần tử bắt đầu từ $begin trong mảng
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(array_slice($array, 0));

print_r(array_slice($array, 0, 1));

?>