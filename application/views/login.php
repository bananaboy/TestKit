<?php include('header.php'); ?>

    <div class="loginContent">
        <div class="title">
            <h1>TestKit</h1>
        </div>

        <?php if (isset($message)) { ?>
        <div class="msg"><?= $message ?></div>
        <?php } ?>

        <div class="login">
            <form method="post" name="login" id="login" action="<?php echo BASE_URL; ?>login">
                <p>
                    <label for="username">Username
                        <br/>
                        <input id="username" name="username" type="text" class="text" autofocus="autofocus">
                    </label>
                </p>
                <br/>
                <p>
                    <label for="password">Password
                        <br/>
                        <input id="password" name="password" type="password" class="text">
                    </label>
                </p>
                <br/>
                <p>
                    <input type="submit" name="submit" id="submit" value="Login" class="button">
                </p>
            </form>
        </div>
    </div>

<?php include('footer.php'); ?>