<?php 
$title = "Instantbird $version_title";
include('header.inc.php');
?>

<div id="page">

<h1>Instantbird <?php echo $version_title; ?></h1>

<p>Instantbird <?php echo $version_title; ?> was already available in <?php echo count($version_locales); ?> languages, thanks to the contributions from our translators around the world, and we look forward to see this number grow with your help!</p>

<h2 class="borderbottom">Download</h2>

<p>Instantbird runs on Windows, Mac OS X and Linux platforms.</p>
<p>Please see the <a href="system-requirements.html">minimum system requirements</a> needed to run Instantbird.</p>

<?php download_table($version_number, $version_locales);?>

<h2 class="borderbottom"><a name="links" class="no-link">Download the source code</a></h2>

<p>As Instantbird is an open source project, you can freely <a href="<?php echo download_url($version_number, 'src', ''); ?>">download the source code</a> and modify it.</p>

<?php readfile('release-notes-'.$version_number.'.php'); ?>

<h2 class="borderbottom">Older versions</h2>
<p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

</div>

<?php readfile('footer.inc.php'); ?>
