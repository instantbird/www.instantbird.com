<?php
$title = 'Instantbird - Select system and language';
include('header.inc.php');
?>
      <div id="page">

        <ul id="index-box">
          <li><a href="features.html">Features</a></li>
          <li>Systems and Languages</li>
          <li><a href="release-notes.html">Release Notes</a></li>
          <li style="border-bottom-style: none;"><a href="<?php echo download_url_auto() ?>">Get Instantbird <?php echo $latest_major_version; ?> Now!</a></li>
        </ul>

        <h1>Download an Instantbird that speaks your language.</h1>
        
        <h2>Instantbird is already available in <?php echo count($latest_minor_version_locales);?> languages, thanks to the contributions from our translators around the world, and we look forward to see this number grow with your help!</h2>

        <h2 class="borderbottom clear-float"><a name="links" class="no-link">Download Instantbird 0.2</a></h2>

        <table id="table-download">
        <tr>
          <th>Language</th>
          <th>Version</th>
          <th><img alt="" src="images/ico-win.png" />Windows</th>
          <th><img alt="" src="images/ico-osx.png" />Mac&nbsp;OS&nbsp;X</th>
          <th><img alt="" src="images/ico-tux.png" />Linux</th>
        </tr>
<?php

$version = $latest_minor_version;
foreach ($latest_minor_version_locales as $code) {
  echo "        <tr>
          <td>".$locales_names[$code]."</td>
          <td>$version</td>
          <td><a href=\"".download_url($version, 'windows', $code)."\"><img alt=\"\" src=\"images/ico-win.png\" /><span>Download</span></a></td>
          <td><a href=\"".download_url($version, 'mac', $code)."\"><img alt=\"\" src=\"images/ico-osx.png\" /><span>Download</span></a></td>
          <td><a href=\"".download_url($version, 'linux', $code)."\"><img alt=\"\" src=\"images/ico-tux.png\" /><span>Download</span></a></td>
        </tr>

";
}
?>
        </table>
        
        <h2 class="borderbottom"><a name="links" class="no-link">Download the source code</a></h2>

        <p>As Instantbird is an open source project, you can freely <a href="<?php echo download_url($version, 'src', ''); ?>">download the source code</a> and modify it.</p>


        <h2 class="borderbottom">Get an older version</h2>
        <p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

      </div>

<?php
readfile('footer.inc.php');
?>
