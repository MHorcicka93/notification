
<?php include "./php/posts.php" ?>
<?php include "./php/Header/header.php" ?>


<!-- Header -->
<header class="nav">
    <ul>
        <li>
            <h3 class="title">
          Notification <span id="counter"></span>
            </h3>
        </li>
        <li id="allRead--link">
         <h5>
               Mark all as read
            </h5>
        </li>
    </ul>
</header>

<main>
    <section id="posts__section">
        <div class="posts">
            <?php include "./php/notificationObj.php";
             listPosts($posts);
             ?>
        </div>
    </section>
</main>

<div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
    Coded by <a href="#">Michal Horčička</a>.
</div>
<!-- Footer -->
<script type="text/javascript" src="./js/ajax.js"></script>
<script type="text/javascript" src="./js/function.js"></script>
<script type="text/javascript" src="index.js"></script>
<?php include "./php/Footer/footer.php" ?>
