<?php
class Post
{
  private $id;
  private $name;
  private $message;
  private $urlUserImg;
  private $time;
  public function __construct($id,$name,$message,$urlUserImg,$time)
  {
    $this->id=$id;
    $this->name=$name;
    $this->message=$message;
    $this->urlUserImg=$urlUserImg;
    $this->time=$time;
  }
  public function getPost()
  {

    echo  "<figure class='post__item post__item--" . ($this->id + 1) . "'>
        <img class='post__img' src=" . $this->urlUserImg . " alt=" . $this->name . ">
        <figcaption class='post__content'>
         <a href='#' class='post__name--link user--link'><span >" . $this->name . " </span></a><span>" . $this->message . "</span><span class='signal'> </span></br>
        <span>" . $this->time . "</span>
        </figcaption>
      </figure>";
  }

}
