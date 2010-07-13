<?php
$title = 'Instantbird - Old versions';
include('header.inc.php');
?>

<div id="page">

<h1>Older versions</h1>
<p>In this section you can find the older versions of Instantbird.
This is for historical purpose only, you should try to always run
<a href="download-all.html">the latest version</a>.</p>

<ul>
<?php
$old_versions = array(
  '0.1.3.1',
  '0.1.3',
  '0.1.2',
  '0.1.1',
  '0.1'
);
foreach($old_versions as $version)
  echo "<li><a href=\"download-$version.html\">Instantbird $version</a></li>\n";
?>
</ul>

<p>Pre-releases:</p>
<ul>
<?php
$old_versions = array(
  '0.2b2' => '0.2 beta 2',
  '0.2b1' => '0.2 beta 1',
  '0.2a1' => '0.2 alpha 1'
);
foreach($old_versions as $version => $name)
  echo "<li><a href=\"download-$version.html\">Instantbird $name</a></li>\n";
?>
</ul>
</div>

<?php
readfile('footer.inc.php');
?>
