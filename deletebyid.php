<?php



 $aidi = filter_input(INPUT_POST, 'aidi', FILTER_SANITIZE_STRING);
$cate = filter_input(INPUT_POST, 'cate', FILTER_SANITIZE_STRING);



$datenow = date("Y-m-d");
include "koneksi.php"; // Using database connection file here
     
     if($cate == 'topics')     {
$records = mysqli_query($db, "DELETE FROM topics where id='$aidi'");
}

     if($cate == 'pages')     {
$records = mysqli_query($db, "DELETE FROM pages where id='$aidi'");
}

 if($cate == 'publication-output')     {
$records = mysqli_query($db, "DELETE FROM publication where id='$aidi'");
}
 if($cate == 'speakers')     {
$records = mysqli_query($db, "DELETE FROM speakers where id='$aidi'");
}
if($cate == 'committee')     {
$records = mysqli_query($db, "DELETE FROM comite where id='$aidi'");
}
if($cate == 'pricing')     {
$records = mysqli_query($db, "DELETE FROM price where id='$aidi'");
}
if($cate == 'footer')     {
$records = mysqli_query($db, "DELETE FROM footer where id='$aidi'");
}
   if($cate == 'schedule')     {
$records = mysqli_query($db, "DELETE FROM schedule where id='$aidi'");
$cate = "conference-room";
}


if($cate == 'speakers'){
     $idmap = filter_input(INPUT_POST, 'idmap', FILTER_SANITIZE_STRING); 
     echo '<script type="text/javascript">'; 
echo 'alert("Delete Berhasil.");'; 
echo 'window.location.href = "'.$cate.'.php?type='.$idmap.'";';
echo '</script>';
}
else if($cate == 'pages'){
    $cate = 'create-page';
     echo '<script type="text/javascript">'; 
echo 'alert("Delete Berhasil.");'; 
echo 'window.location.href = "'.$cate.'.php";';
echo '</script>';
}

else {
    

echo '<script type="text/javascript">'; 
echo 'alert("Delete Berhasil.");'; 
echo 'window.location.href = "'.$cate.'.php";';
echo '</script>';
}
?>