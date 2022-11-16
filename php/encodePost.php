<?php include "notificationObj.php" ;

foreach($posts as $key => $value) {
   
    $postIDAndStatus[$key]=array('id'=>$value['id'],'status'=>false);
}


echo json_encode($postIDAndStatus);
?>