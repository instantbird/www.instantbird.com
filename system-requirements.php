<?php
$delayHeader = TRUE;
include('header.inc.php');
$sr_bundle = new bundle('systemrequirements');
$title = 'Instantbird - '.$sr_bundle->_('systemRequirementsPageTitleSuffix');
echo head().__('
      <div id="page">

        <ul id="index-box">
          <li><a href="features.html">_(features)</a></li>
          <li><a href="download-all.html">_(systemsAndLanguages)</a></li>
          <li><a href="release-notes.html">_(releaseNotes)</a></li>
          <li style="border-bottom-style: none;"><a href="'.download_url_auto().'">_(getInstantbirdNow)</a></li>
        </ul>
', new bundle('learnmorenavigation'), array('&versionNumber;' => $latest_major_version)).

__('
        <h1>_(systemRequirements)</h1>
        <h2>_(systemRequirementsDescription)</h2>

        <h2 class="borderbottom icowin clear-float">Windows</h2>
        <ul>
          <li>_(operatingSystems): Microsoft Windows 2000, Windows XP, Windows Server 2003, Windows Vista, Windows 7</li>
          <li>_(MBofRAM)</li>
          <li>_(MBofHardDiskSpace)</li>
        </ul>', $sr_bundle, array('&memorySize;' => '128',
                                  '&diskSize;' => '50')).
__('
        <h2 class="borderbottom icoosx">Mac</h2>
        <ul>
          <li>_(operatingSystems): _(OSXVersionAndLater)</li>
          <li>_(MBofRAM)</li>
          <li>_(MBofHardDiskSpace)</li>
        </ul>', $sr_bundle, array('&macOSXVersion;' => 'Mac OS X 10.5 (Leopard)',
                                  '&memorySize;' => '256',
                                  '&diskSize;' => '100')).
__('
        <h2 class="borderbottom icotux">Linux</h2>
        <p>_(librariesLinux)</p>
        <ul>
          <li>_(libraryVersionOrHigher)</li>
', $sr_bundle, array('&libraryAndVersion;' => 'GTK+ 2.10')).
__('          <li>_(libraryVersionOrHigher)</li>
', $sr_bundle, array('&libraryAndVersion;' => 'GLib 2.12')).
__('          <li>_(libraryVersionOrHigher)</li>
', $sr_bundle, array('&libraryAndVersion;' => 'Pango 1.14')).
__('          <li>_(libraryVersionOrHigher)</li>
', $sr_bundle, array('&libraryAndVersion;' => 'X.Org 1.0')).
__('        </ul>
        <p>_(distributionPackages)</p>
      </div>
', $sr_bundle).footer();
?>
