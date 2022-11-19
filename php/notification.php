<?php
class Post
{
  private $id;
  private $name;
  private $post;
  private $urlUserImg;
  private $time;
  private $message;
  public function __construct($id, $name, $post, $urlUserImg, $time, $message)
  {
    $this->id = $id;
    $this->name = $name;
    $this->post = $post;
    $this->message = $message;
    $this->urlUserImg = $urlUserImg;
    $this->time = $time;
  }
  private function addMessageElement()
  {
    echo  "<figure class='post__item post__item--" . ($this->id + 1) . "'>
    <div class='post__item--info '>
    <img class='user__img' src=" . $this->urlUserImg . " alt=" . $this->name . ">
    <figcaption class='post__content'>";
  }
  private function isPostImg($condition)
  {
    if ($condition) {
      echo "<div class='post__container'>
      <div>
      <a href='#' class='post__name--link user--link'><span >" . $this->name . " </span></a><span>" . $this->post . "</span><span class='signal'> </span></br><span>" . $this->time . " ago</span></div><img class='post__img' src='assets/images/image-chess.webp'></div>";
    } else {
      echo "<a href='#' class='post__name--link user--link'><span >" . $this->name . " </span></a><span>" . $this->post . "</span><span class='signal'> </span></br>
      <span>" . $this->time . " ago</span>";
    }
  }
  private function isPostMessage()
  {
    if (strlen($this->message) > 0) {
      echo "<p class='post__message'>" . $this->message . "</p></figcaption></div></figure>";
    } else {
      echo "</figcaption></div></figure>";
    }
  }
  public function getPost()
  {
    $this->addMessageElement();
    $this->isPostImg($this->id + 1 == 5);
    $this->isPostMessage();
  }
}
