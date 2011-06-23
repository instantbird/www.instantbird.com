<?php
$title = 'Instantbird '.$latest_minor_version.' - release notes';
include('header.inc.php');
?>
      <div id="page">

        <ul id="index-box">
          <li><a href="features.html">Features</a></li>
          <li><a href="download-all.html">Systems and Languages</a></li>
          <li>Release Notes</li>
          <li style="border-bottom-style: none;"><a href="<?php echo download_url_auto() ?>">Get Instantbird <?php echo $latest_major_version; ?> Now!</a></li>
        </ul>

        <h1>Instantbird <?php echo $latest_minor_version; ?> Release Notes</h1>

        <h2>Check out what's new and the known issues about the latest version of Instantbird. As always, you're encouraged to tell us what you think, by <a href="about.html#get_in_touch">giving feedback</a> or by <a href="http://bugzilla.instantbird.org">filing a bug in Bugzilla</a>.</h2>

<?php readfile('release-notes-'.$latest_minor_version.'.php'); ?>
      </div>
<?php
readfile('footer.inc.php');
?>
