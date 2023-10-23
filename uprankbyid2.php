<?php 

require_once("config.php");

$aidi = $_GET['aidi'];
$aidi2 = $_GET['aidiafter'];


  $data2 = [
        'aidi' => $aidi,
        'aidi2' => $aidi2
       
        
];

 $sql2 = "UPDATE topics SET id=:aidi2 WHERE id=:aidi";
      
     $stmt2 = $db->prepare($sql2);
    
$saved2 = $stmt2->execute($data2);

if($saved2){
    echo $aidi;
       echo $aidi2;
      echo '<script type="text/javascript">'; 
echo 'alert("Delete Berhasil.");'; 
echo 'window.location.href = "topics.php"';
echo '</script>';
}
?>