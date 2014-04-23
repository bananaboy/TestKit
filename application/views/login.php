<!-- login -->
<?php include('header.php'); ?>

    <div class="loginContent">
        <div class="title center-block">
            <img src="<?= BASE_URL ?>/static/images/logo.png">
            <h1>TestKit</h1>
        </div>

        <?php if (isset($message)) { ?>
        <div class="alert alert-danger alert-dismissable login-msg">
            <button type="button" class="close login-msg-dismiss" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?= $message ?>
        </div>
        <?php } ?>

        <div class="login">
            <form role="form" method="post" name="login" id="login" action="<?php echo BASE_URL; ?>login">
                <div class="form-group">
                    <input id="username" name="username" type="text" class="form-control" autofocus="autofocus" placeholder="Username">
                </div>
                <div class="form-group">
                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" name="submit" id="submit" class="btn btn-default tkbutton btn-block">Login</button>
            </form>
        </div>
    </div>

<?php include('footer.php'); ?>