<html>
<head>
        <center>
                <h1>1q2w Hastebin<h1>
                <h3><?php echo "Currently Hosting ".(iterator_count(new FilesystemIterator("./paste/", FilesystemIterator::SKIP_DOTS))-1)." pastes. Every paste expires in 200 days."; ?></h3>
        </center>
        <style>
body { background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab); background-size: 400% 400%; animation: gradient 15s ease infinite; height: 100vh; }
@keyframes gradient {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
}
textarea { color: #fff; background: url(http://i.imgur.com/2cOaJ.png) rgba(0,0,0,.7); background-attachment: local; background-repeat: no-repeat; padding-left: 35px; padding-top: 10px; border-color:#666; }
        </style>
</head>
<body>
<center>
        <p><textarea style="margin: 0px; height: 60%; width: 100%;" form="usrform" id="xcode" name="xcode" placeholder="type something here"></textarea></p>
        <p></p>
        <form id="usrform" action="./paste.php" method="post" enctype="multipart/form-data">
<input form="usrform" id="capt" name="capt" placeholder="Captcha: What is ichi?" />
<input type="submit" value='UPLOAD' style="border-radius: 9px; margin: 9px; padding: 9px;"/></form>
</center>
</body>
</html>
