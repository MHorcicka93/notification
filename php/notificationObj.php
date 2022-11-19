<?php 

$name = array(
    "Mark Webber",
    "Angela Gray",
    "Angela Gray",
    "Jacob Thompson",
    "Rizky Hasanuddin",
    "Kimberly Smith",
    "Nathan Peterson",
    "Anna Kim"
);
$urlImg = array(
    "assets/images/avatar-mark-webber.webp",
    "assets/images/avatar-angela-gray.webp",
    "assets/images/avatar-jacob-thompson.webp",
    "assets/images/avatar-rizky-hasanuddin.webp",
    "assets/images/avatar-kimberly-smith.webp",
    "assets/images/avatar-nathan-peterson.webp",
    "assets/images/avatar-anna-kim.webp"
);

$post = array(
    "reacted to your recent post <a href='#' class='post__name--link in_react--link'>My first tournament today!</a>",
    "followed you",
    "has joined your group <a href='#' class='post__name--link in_react--link'>Chess Club</a>",
    "sent you a private message",
    "commented on your picture",
    "reacted to your recent post <strong class='out_react--link' >5 end-game strategies to increase your win rate</strong>",
    "left the group  <a href='#' class='post__name--link out_react--link'>Chess Club</a>"
);

$time = array("1m", "5m", "1 day", "5 days", "1 week", "2 weeks", "2 weeks");

$message = array("","","","Hello, thanks for setting up the Chess Club. I've been a member for a few weeks now and 
I'm already having lots of fun and improving my game.","","","");

for ($i = 0; $i < 7; $i++) {
    
    if (strlen($message[$i]) > 0) {
        $posts[$i] = array("id" => $i + 1, "name" => $name[$i],"post" => $post[$i],"message" => $message[$i], "urlImg" => $urlImg[$i], "time" => $time[$i]);
       
    }else{
        $posts[$i] = array("id" => $i + 1, "name" => $name[$i], "post" => $post[$i],"message" => $message[$i], "urlImg" => $urlImg[$i], "time" => $time[$i]);
        
    }
} 
        
            /*
                // $post1 = array("name" => $name[0], "message" => $message[0], "urlImg"=>$urlImg[0] ,"time" => $time[0]);
                // $post2 = array("name" => $name[1], "message" => $message[1], "urlImg"=>$urlImg[1] ,"time" => $time[1]);
                // $post3 = array("name" => $name[2], "message" => $message[2], "urlImg"=>$urlImg[2] ,"time" => $time[2]);
                // $post4 = array("name" => $name[3], "message" => $message[3], "urlImg"=>$urlImg[3] ,"time" => $time[3]);
                // $post5 = array("name" => $name[4], "message" => $message[4], "urlImg"=>$urlImg[4] ,"time" => $time[4]);
                // $post6 = array("name" => $name[5], "message" => $message[5], "urlImg"=>$urlImg[5] ,"time" => $time[5]);
                // $post7 = array("name" => $name[6], "message" => $message[6], "urlImg"=>$urlImg[6] ,"time" => $time[6]);
    
                // $posts = array($post1, $post2, $post3, $post4, $post5, $post6, $post7);
           */
