//Hàm này có tác dụng tìm kiếm giá trị của mảng và trả về key của phần tứ đó nếu có
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(array_seach('toidicode.com', $array));

?>