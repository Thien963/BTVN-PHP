//Hàm có tác dụng kiểm tra xem mảng $array có tồn tại khóa $key không
//Trả về TRUE nếu tồn tại và ngược lại
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(array_key_exists('domain', $array));

?>

