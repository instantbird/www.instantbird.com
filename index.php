<?php include('header.inc.php'); ?>
      <div id="screenshot-box">
        <a href="features.html"><?php

$os_img = array('windows' => '<img alt="Screenshot" src="images/screenshots/windows-screenshot-homepage.png" />',
                'mac' => '<img alt="Screenshot" src="images/screenshots/macosx-screenshot-homepage.png" style="margin: -3px -8px -11px -8px;" />',
                'linux' => '<img alt="Screenshot" src="images/screenshots/linux-screenshot-homepage.png" style="margin: -3px;" />');
echo $os_img[get_preferred_os()];

?></a>
        <p class="arrow-link"><a href="features.html">See more</a></p>
      </div>

      <div id="logo"><img alt="Instantbird" src="images/instantbird-logo.png" /> 0.2</div>

      <div id="getinstantbird-box">
        <h1 id="motto">Instant messenging has never been easier! <a href="features.html">Learn more.</a></h1>

<?php echo download_button(); ?>

        <p class="arrow-link"><a href="release-notes.html">Release Notes</a> - <a href="download-all.html" style="background: none; padding-left: 0;">Other Systems and Languages</a></p>
        <p>Want to see what's coming soon? Try <a href="download-0.3b1.html">Instantbird 0.3 beta</a>!</p>
      </div>

      <hr class="spacer"/>
<?php @readfile('rss.html.inc'); ?>
      <hr class="spacer"/>

      <p id="powered-by-mozilla"><a href="http://www.mozilla.org/poweredby"><img alt="Powered by Mozilla" src="images/powered-by-mozilla.png" /></a></p>

<?php readfile('footer.inc.php'); ?>