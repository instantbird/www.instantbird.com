<?php
$delayHeader = TRUE;
include('header.inc.php');
$dl_bundle = new bundle('download');
$title = 'Instantbird - '.$dl_bundle->_('selectSystemAndLanguagePageTitleSuffix');

echo head().__('
      <div id="page">

        <ul id="index-box">
          <li><a href="features.html">_(features)</a></li>
          <li>_(systemsAndLanguages)</li>
          <li><a href="release-notes.html">_(releaseNotes)</a></li>
          <li style="border-bottom-style: none;"><a href="'.download_url_auto().'">_(getInstantbirdNow)</a></li>
        </ul>
', new bundle('learnmorenavigation'), array('&versionNumber;' => $latest_major_version)).
__('        <h1>_(instantbirdThatSpeakYourLanguage)</h1>

        <h2>_(alreadyAvailableInNLocales)</h2>

        <h2 class="borderbottom clear-float"><a name="links" class="no-link">_(downloadInstantbirdVersion)</a></h2>
', $dl_bundle, array('&versionNumber;' => $latest_minor_version,
                     '&localesCount;' => count($latest_minor_version_locales))).
download_table($latest_minor_version, $latest_minor_version_locales, $dl_bundle).
__('
        <h2 class="borderbottom"><a name="links" class="no-link">_(downloadSourceCode)</a></h2>

        <p>_(openSourceProject)</p>


        <h2 class="borderbottom">_(olderVersions)</h2>
        <p>_(accessTheArchives)</p>

      </div>
', $dl_bundle, array('&downloadSourceLink;' => '<a href="'.download_url($latest_minor_version, 'src', '').'">'.$dl_bundle->_('downloadSourceLink').'</a>',
                     '&archivesLink;' => '<a href="download-archive.html">'.$dl_bundle->_('archivesLink').'</a>')).
footer();
?>
