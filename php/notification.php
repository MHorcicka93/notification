<?php
class Post
{
  private $id;
  private $name;
  private $post;
  private $urlUserImg;
  private $time;
  private $message;
  public function __construct($id,$name,$post,$urlUserImg,$time,$message)
  {
    $this->id=$id;
    $this->name=$name;
    $this->post=$post;
    $this->message=$message;
    $this->urlUserImg=$urlUserImg;
    $this->time=$time;
  }
  public function getPost()
  {
    
    echo  "<figure class='post__item post__item--" . ($this->id + 1) . "'>
    <div class='post__item--info '>
    <img class='post__img' src=" . $this->urlUserImg . " alt=" . $this->name . ">
    <figcaption class='post__content'>
    <a href='#' class='post__name--link user--link'><span >" . $this->name . " </span></a><span>" . $this->post . "</span><span class='signal'> </span></br>
    <span>" . $this->time . "</span></figcaption></div>". $this->setMessage()."</figure>";
  }
  public function setMessage(){
    if (strlen($this->message)>0) {
      
      echo "<p class='post__message'>".$this->message."</p>";
    }
  }

}
