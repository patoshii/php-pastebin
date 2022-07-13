<?php
$fname= "./paste/".date("ydhisms").'.txt';
$myfile = fopen($fname, "w") or die("Unable to create/open file!");

$files = glob("./paste/"."*");

if(isset($_POST["xcode"]) && $_POST["capt"] == "1" && strlen($_POST["xcode"]) < 90000 && count($files) < 999) {
        $txt = utf8_encode($_POST["xcode"]);
        fwrite($myfile, $txt);
        fclose($myfile);
} else {
        die("Nope");
}

$now   = time();

foreach ($files as $file) {
  if (is_file($file)) {
    if ($now - filemtime($file) >= 60 * 60 * 4800) {
        if ($file != './index.html') {
          unlink ($file);
        }
    }
  }
}

Header("Location: $fname");
?>
