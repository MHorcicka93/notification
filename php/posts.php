
<?php include "notification.php" ?>
<?php include "notificationObj.php";
      
      function listPosts($posts){
                  
        foreach ($posts as $key => $value) {
            $post = new Post($key, $value["name"], $value["message"], $value["urlImg"], $value["time"]);
            $post->getPost();
        }
    }
    
 ?>