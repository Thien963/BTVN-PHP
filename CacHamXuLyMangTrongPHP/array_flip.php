//Hàm này có tác dụng chuyển đổi key của mảng thành value và ngược lại
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(array_flip($array));
?>
