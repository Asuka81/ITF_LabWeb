<?php
require('connect.php');
$id=$_GET['id'];
$sql="DELETE FROM datainsert WHERE id='$id'";
if (mysqli_query($conn, $sql)) {
    echo "ลบข้อมูลสำเร็จ";
    echo "<a href='index.php'>กลับไปหน้าแรก</a>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>
