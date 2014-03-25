<?php include('header.php'); ?>

    <div class="main">
        <div class="title">
            <h1>TestKit</h1>
        </div>

        <form method="post" name="login" id="login" action="<?php echo BASE_URL; ?>logout">
            <p>
                <input type="submit" name="submit" id="submit" value="Logout" class="button logout">
            </p>
        </form>

    </div>

<?php include('footer.php'); ?>