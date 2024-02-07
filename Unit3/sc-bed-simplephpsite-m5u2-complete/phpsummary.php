<!doctype html>
<html lang="en">

<?php include 'includes/head.php' ?>

<body>
    <?php include 'includes/menu.php' ?>

    <div class="container">
        <h1>PHP Summary</h1>
        <?php
            printf('<p>You are running PHP %s</p>', phpversion());
        ?>
    </div>

    <?php include 'includes/footer.php' ?>
</body>

</html>