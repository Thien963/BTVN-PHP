//hàm có tác dụng loại bỏ các phần tử trùng nhau trong mảng và trả về một mảng mới sau khi đã loại bỏ
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online',
    'description' => 'Website học lập trình online'
];
print_r(array_unique($array, 0));

?>