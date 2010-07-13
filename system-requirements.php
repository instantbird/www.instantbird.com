<?php
$title = 'Instantbird - System requirements';
include('header.inc.php');
?>
      <div id="page">

        <ul id="index-box">
          <li><a href="downloads/0.2/instantbird-0.2.en-US.mac.dmg">Get Instantbird Now</a></li>
          <li><a href="features.html">Features</a></li>
          <li><a href="download-all.html">Systems and Languages</a></li>
          <li><a href="release-notes.html">Release Notes</a></li>
          <li style="border-bottom-style: none;">Minimum system requirements</li>
        </ul>

        <h1>System Requirements</h1>
        <h2>The following are the minimum system requirements needed to run Instantbird.</h2>

        <h2 class="borderbottom icowin clear-float">Windows</h2>
        <ul>
          <li>Operating Systems: Microsoft Windows 2000, Windows XP, Windows Server 2003, Windows Vista or Windows 7</li>
          <li>128 MB of RAM</li>
          <li>50 MB of hard disk space</li>
        </ul>

        <h2 class="borderbottom icoosx">Mac</h2>
        <ul>
          <li>Operating Systems: Mac OS X 10.4 (Tiger) and later</li>
          <li>256 MB of RAM</li>
          <li>100 MB of hard disk space</li>
        </ul>

        <h2 class="borderbottom icotux">Linux</h2>
        <p>Instantbird needs at least the following libraries to run on Linux:</p>
        <ul>
          <li>GTK+ 2.10 or higher</li>
          <li>GLib 2.12 or higher</li>
          <li>Pango 1.14 or higher</li>
          <li>X.Org 1.0 or higher</li>
        </ul>
        <p>Please note that Linux distributors may provide packages for your distribution which have different requirements.</p>
      </div>
<?php
readfile('footer.inc.php');
?>