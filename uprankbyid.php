<?php

require_once("config.php");

 $aidi = filter_input(INPUT_POST, 'aidi', FILTER_SANITIZE_STRING);
$aidi2 = filter_input(INPUT_POST, 'aidi2', FILTER_SANITIZE_STRING); 

 $pos1 = filter_input(INPUT_POST, 'pos1', FILTER_SANITIZE_STRING);
$pos2 = filter_input(INPUT_POST, 'pos2', FILTER_SANITIZE_STRING); 

$cate = filter_input(INPUT_POST, 'cate', FILTER_SANITIZE_STRING);
   
     $data = [
        'aidi' => $aidi,
        'pos2' => $pos2
       
        
];

      $sql = "UPDATE $cate SET pos=:pos2 WHERE id=:aidi";
      
     $stmt = $db->prepare($sql);
    
$saved = $stmt->execute($data);

if($saved){
    echo '<script type="text/javascript">'; 
echo 'window.location.href = "uprankbyid1.php?aidi='.$pos1.'&aidiafter='.$aidi2.'&cate='.$cate.'"';
echo '</script>';

}



/*

$datenow = date("Y-m-d");
include "koneksi.php"; // Using database connection file here
     
     if($cate == 'topics')     {
$records = mysqli_query($db, "DELETE FROM topics where id='$aidi'");
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



if($cate == 'speakers'){
     $idmap = filter_input(INPUT_POST, 'idmap', FILTER_SANITIZE_STRING); 
     echo '<script type="text/javascript">'; 
echo 'alert("Delete Berhasil.");'; 
echo 'window.location.href = "'.$cate.'.php?type='.$idmap.'";';
echo '</script>';
}
else {
    

echo '<script type="text/javascript">'; 
echo 'alert("Delete Berhasil.");'; 
echo 'window.location.href = "'.$cate.'.php";';
echo '</script>';

}*/
?>