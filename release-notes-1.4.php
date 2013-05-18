<?php
$rn14_bundle = new bundle('releasenotes-1.4');

echo __('<h2 class="borderbottom">_(whatsNew)</h2>

<ul class="whatsnewbullets">

<li>_(logViewerDateTree)</li>

<li><strong>_(twitterImprovements)</strong><ul>
 <li>_(characterCounter)</li>
 <li>_(twitterAPIUpgrade)</li>
 <li>_(followedPeopleInTimeline)</li>
</ul></li>

<li>_(ircAuthImprovements)</li>
<li>_(ircOverrideCerts)</li>

<li>_(debugLogs)</li>

<li><strong>_(underTheHood)</strong><ul>
 <li>_(basedOnLibpurpleAndMozilla)</li>
 <li>_(droppedOldMacOSSupport)</li>
</ul></li>
<li>_(andMore)</li>
</ul>
', $rn14_bundle,
   array('&versionNumber;' => '1.4',
         '&libpurpleVersion;' => '2.10.7',
         '&mozillaVersion;' => '20.0.1',
         '&changeLogLink;' => '<a href="ChangeLog-1.4">'.$rn14_bundle->_('changeLogLink').'</a>')
);
?>
