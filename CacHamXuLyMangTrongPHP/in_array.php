//Hàm có tác dụng kiểm tra xem mảng $array có tông tại giá trị $value không?
//Trả về TRUE nếu  có và ngược lại
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(in_array('toidicode.com', $array));

?>

