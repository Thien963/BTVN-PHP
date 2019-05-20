//Hàm có tác dụng xóa phần tử đầu tiên của mảng và trả về phần tử vừa xóa
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(array_shift($array));
?>
