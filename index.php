
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
        <li>
            <h5>
                <a id="allRead--link">Mark all as read</a>
            </h5>
        </li>
    </ul>
</header>

<main>
    <section>
        <div>
            <?php include "./php/notificationObj.php";
             listPosts($posts);
             ?>
        </div>
    </section>
</main>

<div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
    Coded by <a href="#">Your Name Here</a>.
</div>


<script type="text/javascript" src="index.js"></script>
<?php include "./php/Footer/footer.php" ?>
