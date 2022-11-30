<!-- Bài 1 -->

<?php
echo "<h4>Bài 1: Tìm phần tử lớn nhất: 1,4,2,6,9,100,45,8,20</h4>";
$arr = array(1, 4, 2, 6, 9, 100, 45, 8, 20);

$max = null;

for ($i = 0; $i < count($arr); $i++) {
    if ($max < $arr[$i]) {
        $max = $arr[$i];
    }
}

echo "Số lớn nhất là: $max"
?>



<!-- Bài 3 -->

<?php
echo "<h4>Bài 3: Sắp xếp và in ra mảng theo thứ tự tăng dần: 1,4,2,6,9,100,4</h4>";
$arr = array(1, 4, 2, 6, 9, 100, 4);

$trungGian = null;
for ($i = 0; $i < count($arr); $i++) {
    for ($j = $i + 1; $j < count($arr); $j++) {
        if ($arr[$i] > $arr[$j]) {
            $trungGian = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $trungGian;
        }
    }
}


echo "</br> \nMang da sap xep la: ";
for ($i = 0; $i < count($arr); $i++) {
    echo "    $arr[$i]";
}
?>


<!-- Bài 5 -->
<?php
echo "<h4>Bài 3: Tách họ, tên đệm, tên: Duong Van Cuong</h4>";

$hoTen = "Duong Van Cuong";
$hoTenn = trim($hoTen);

$tach = explode(" ", $hoTenn);

$ho = $tach[0];
$n = count($tach);
$ten = $tach[$n - 1];
for ($i = 1; $i < $n - 1; $i++) {
    $tendem = $tach[$i];
}
echo "</br>Họ: $ho";
echo "</br>Tên đệm: $tendem";
echo "</br>Tên: $ten";
?>



<!-- Bai 2 -->
<?php
echo "<h4>Bài 3: Đảo ngược mảng: 1,4,2,6,9,100,4</h4>";

$arr = array(1, 4, 2, 6, 9, 100, 4);
$trungGian = null;
for ($i = 0; $i < count($arr) / 2; $i++) {

    $trungGian = $arr[$i];
    $arr[$i] = $arr[count($arr) - 1 - $i];
    $arr[count($arr) - 1 - $i] = $trungGian;
}
echo "</br> \nMang dao nguoc la: ";
for ($i = 0; $i < count($arr); $i++) {
    echo "  $arr[$i]";
}

?>

<!-- Bai 4 -->
<?php
echo "<h4>Bài 4</h4>";
$hoVaTen = '  DuonG vAn CuONg          ';
$hoVaTen_boKhoangTrang = trim($hoVaTen);
$hoVaTen_veChuThuong = strtolower($hoVaTen_boKhoangTrang);
$hoVaTen_chuanHoa = ucwords($hoVaTen_veChuThuong);
echo "</br>Chuoi sau khi duoc chuan hoa: " . $hoVaTen_chuanHoa;
?>



<!-- Bai6 -->
<?php

echo "<h4>Bài 6</h4>";

function chuoi($ten)
{
    $number = 0;

    for ($i = 0; $i < strlen($ten) / 2; $i++) {
        if ($ten[$i] != $ten[strlen($ten) - 1 - $i]) {
            $number = 1;
            break;
        }
    }
    if ($number == 0) {
        echo "</br>" . $ten . " la chuoi Palindrome";
    } else {
        echo "</br>" . $ten . " khong phai chuoi Palindrome";
    }
}

chuoi("cuonggnouc");
chuoi("kienn");

?>