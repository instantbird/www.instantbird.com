<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <title>Instantbird</title>
  <link rel="stylesheet" type="text/css" href="css/home.css" />
  <link rel="shortcurt icon" href="favicon.ico" />
  <script>
  var imgs = ["cross-platform", "on_windows", "on_macosx", "on_linux"];
  var delays = [5000, 2000, 2000, 2000];
  var cpt = -1;
  function changeImages()
  {
    if (++cpt == imgs.length)
      cpt = 0;
    document.getElementById("crossplatform").src = "http://img.instantbird.com/images/" + imgs[cpt] + ".jpg";
    setTimeout(changeImages, delays[cpt]);
  }
  </script>
 </head>

<body onLoad="changeImages()">

<?php readfile("menus.html"); ?>

<div id="page">

<a href="screenshots.html" title="Click here to see more screenshots..."><img alt="Instantbird runs on Windows, Mac&nbsp;OS&nbsp;X and Linux" src="images/cross-platform.jpg" height="230" width="307" class="imgfloat" id="crossplatform"/></a>

<h3>Connect on all networks</h3>
<p>A single program for chatting on all famous networks!</p>

<h3>Cross Platform</h3>
<p>Windows, Mac&nbsp;OS&nbsp;X, Linux. See the <a href="screenshots.html" class="greylink">screenshots gallery</a>.</p>

<h3>Developer Friendly</h3>
<p>Add-ons can be written easily and shared for everyone</p>

<?php
$user_agent = getenv("HTTP_USER_AGENT");

if (strpos($user_agent, "Win") !== FALSE)
{
    $link = "downloads/0.1.3/instantbird-0.1.3.en-US.win32.zip";
    $message = "Click to start downloading Instantbird 0.1.3 for Windows";
}
elseif ((strpos($user_agent, "Mac") !== FALSE) || (strpos($user_agent, "PPC") !== FALSE))
{
    $link = "downloads/0.1.3/instantbird-0.1.3.en-US.mac.dmg";
    $message = "Click to start downloading Instantbird 0.1.3 for Mac";
}
elseif (strpos($user_agent, "Linux") !== FALSE)
{
    $link = "downloads/0.1.3/instantbird-0.1.3.en-US.linux-i686.tar.bz2";
    $message = "Click to start downloading Instantbird 0.1.3 for Linux";
}
else
{
    $link = "download.html#links";
    $message = "Click here to access the download page";
}

echo '<a href="', $link, '" id="directdownload"><img alt="Download" src="images/button.png" /><h1>Download Instantbird Now!</h1><p>', $message, '</p></a>';
?>

<p id="more_platforms">See the full <a href="download.html" class="greylink">download page</a> if you need another version or want to read the release notes.</p>

<h1 style="margin-top: 80px;">What is Instantbird?</h1>
<p id="imgmain1">Instantbird is a multi-protocol Instant Messaging client. Using it, you can connect to all your different IM accounts.</p>

<p id="imgmain2">It uses the Mozilla rendering engine to display IMs, and the Pidgin libpurple to connect to the different networks.</p>

<p id="imgmain3">Instantbird is a <a href="support.html#license" class="greylink">free and open source</a> software. So you are free to use, distribute and modify it.</p>

<p>The project is just on its first releases, many features are not implemented yet. We hope you will like it and look forward to get your feedback!</p>

</div>

<?php readfile("footer.html"); ?>

</body>
</html>
