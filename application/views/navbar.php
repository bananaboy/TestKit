<!-- navbar -->

<?php
function active($page)
{
    $fileName = basename($_SERVER['REQUEST_URI'], ".php");
    if ($fileName == $page)
    {
        echo 'class="active"';
    }
}
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= BASE_URL ?>">
                <img src="<?= BASE_URL ?>static/images/logo32.png">
                <h1>TestKit</h1>
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li <?= active("testers") ?>><a href="<?= BASE_URL ?>testers">Testers</a></li>
                <li <?= active("apps") ?>><a href="<?= BASE_URL ?>apps">Apps</a></li>
                <li <?= active("builds") ?>><a href="<?= BASE_URL ?>builds">Builds</a></li>
            </ul>

            <div class="navbar-text navbar-right">
                <a href="<?= BASE_URL ?>logout" class="navbar-logout">Logout</a>
            </div>
        </div>
    </div>
</nav>