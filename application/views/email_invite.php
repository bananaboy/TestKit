<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
        <title>Welcome to the <?= $config['email_company_name'] ?> beta program!</title>
    </head>

    <body text="#000000" bgcolor="#FFFFFF">
        <?= $config['email_contact_name'] ?> has invited you to become a tester for <?= $config['email_company_name'] ?>!<br>
        <br>
        Please open this email on each device that you wish to test with,
        and click <a href="<?= $url ?>">here</a> to register the device.<br>
        <br>
        Once registered you will be notified when new builds of apps are
        available for download.<br>
        <br>
        Thanks for helping <?= $config['email_company_name'] ?> out!<br>
        <br>
    </body>
</html>
