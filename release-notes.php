<?php
$delayHeader = TRUE;
include('header.inc.php');
$rn_bundle = new bundle('releasenotes');
$title = 'Instantbird - '.$rn_bundle->_('releaseNotesPageTitleSuffix');

echo head().__('
      <div id="page">

        <ul id="index-box">
          <li><a href="features.html">_(features)</a></li>
          <li><a href="download-all.html">_(systemsAndLanguages)</a></li>
          <li>_(releaseNotes)</li>
          <li style="border-bottom-style: none;"><a href="'.download_url_auto().'">_(getInstantbirdNow)</a></li>
        </ul>
', new bundle('learnmorenavigation'), array('&versionNumber;' => $latest_major_version)).
__('
        <h1>_(instantbirdVersionReleaseNotes)</h1>

        <h2>_(checkoutWhatsNewAndKnownIssues).</h2>

', $rn_bundle, array('&versionNumber;' => $latest_minor_version,
                     '&givingFeedbackLink;' => '<a href="about.html#get_in_touch">'.$rn_bundle->_('givingFeedbackLink').'</a>',
                     '&filingABugLink;' => '<a href="http://bugzilla.instantbird.org">'.$rn_bundle->_('filingABugLink').'</a>'));

include('release-notes-'.$latest_minor_version.'.php');

echo '      </div>
'.footer();
?>
