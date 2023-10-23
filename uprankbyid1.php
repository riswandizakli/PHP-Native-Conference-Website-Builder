<?php 

require_once("config.php");

$aidi = $_GET['aidi'];
$aidi2 = $_GET['aidiafter'];
$cate = $_GET['cate'];

  $data2 = [
        'aidi' => $aidi,
        'aidi2' => $aidi2
       
        
];

 $sql = "UPDATE $cate SET pos=:aidi WHERE id=:aidi2";
      
     $stmt = $db->prepare($sql);
    
$saved = $stmt->execute($data2);

echo $aidi;
echo $aidi2;
if($cate == "publication"){
    $cate = 'publication-output';
}
if($cate == "comite"){
    $cate = 'committee';
}


if($saved){
        echo '<script type="text/javascript">'; 
echo 'window.location.href = "'.$cate.'.php"';
echo '</script>';


}
?>