<?php
    // biến cục bộ

    $x = 10;

    function number(){
        $x = 20;
        echo $x;
    }


    number();
    echo "</br>";
    echo $x;
?>


<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Thu thập dữ liệu từ input
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Trường tên không được bỏ trống";
        } else {
            echo $name;
        }
    }
    ?>
</body>

</html>

</br>

<!-- biến tĩnh -->
<?php
   function ham_demo() {
      STATIC $count = 3.14;
      $count++;
      print $count;
      print "<br />";
   }
   
   ham_demo();
   ham_demo();
   ham_demo();
?>


<!-- Hàm array_key_exists() -->
<?php
$search_array = array(1,2,3,4,5);
if (array_key_exists(2, $search_array)) { 
    echo "Giá trị 2 tồn tại trong mảng";
}
?>


</br>

<!-- Hàm array_search() -->
<?php
$a = array("cuong" => "duong", "dat" => "giap", "kien" => "van");
echo array_search("duong", $a);
?>


</br>


<!-- array_count_values() -->
<?php
$a=array(1,2,1,"cuong","cuong");
$d = array_push($a, "kien");
echo $d;
echo "</br>";
print_r(array_count_values($a));
echo "</br>";
print_r(array_pop($a));
echo "</br>";
print_r(count($a));
?>



