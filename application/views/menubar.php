<!-- menubar -->

<div class="menubar">
    <div class="menubarContainer">
        <div class="logo">
            <h1>TestKit</h1>
        </div>
        <div class="vertical-rule"></div>
        <div class="menu-item"><a href="<?php echo BASE_URL; ?>testers">Testers</a></div>
        <div class="menu-item"><a href="<?php echo BASE_URL; ?>apps">Apps</a></div>
        <div class="menu-item"><a href="<?php echo BASE_URL; ?>builds">Builds</a></div>
    </div>

    <span class="logout">
        <form method="post" name="login" id="login" action="<?php echo BASE_URL; ?>logout">
            <input type="submit" name="submit" id="submit" value="Logout" class="button logout">
        </form>
    </span>
</div>