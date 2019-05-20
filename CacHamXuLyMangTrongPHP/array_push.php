//Hàm này có tác dụng thêm một hoặc nhiều phần tử vào cuối mảng và trả về số lượng phần tử của mảng sau khi thêm.
<?php
$array = [
    'domain' => 'toidicode.com',
    'description' => 'Website học lập trình online'
];
print_r(array_push($array,'Miễn phí nhé'));
?>
