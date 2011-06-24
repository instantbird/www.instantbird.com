<?php 
$title = "Instantbird $version_title";
include('header.inc.php');
$dl_bundle = new bundle('download');

$page_content = __('
<div id="page">

<h1>Instantbird &versionNumber;</h1>

<p>_(wasAlreadyAvailableInNLocales)</p>

<h2 class="borderbottom">_(download)</h2>

<p>_(runsOn)</p>
<p>_(seeSysReq)</p>

', $dl_bundle, array('&sysReqLink;' => '<a href="system-requirements.html">'.$dl_bundle->_('sysReqLink').'</a>',
                     '&versionNumber;' => $version_title,
                     '&localesCount;' => count($version_locales))).
download_table($version_number, $version_locales, $dl_bundle).__('

<h2 class="borderbottom"><a name="links" class="no-link">_(downloadSourceCode)</a></h2>

<p>_(openSourceProject)</p>

', $dl_bundle, array('&downloadSourceLink;' => '<a href="'.download_url($version_number, 'src', '').'">'.$dl_bundle->_('downloadSourceLink').'</a>'));

echo $page_content;

include('release-notes-'.$version_number.'.php');

echo __('<h2 class="borderbottom">_(olderVersions)</h2>
<p>_(accessTheArchives)</p>

</div>', $dl_bundle, array('&archivesLink;' => '<a href="download-archive.html">'.$dl_bundle->_('archivesLink').'</a>'));

echo footer();
?>
