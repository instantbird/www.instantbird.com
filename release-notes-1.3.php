<?php
$rn13_bundle = new bundle('releasenotes-1.3');

echo __('<h2 class="borderbottom">_(whatsNew)</h2>

<ul class="whatsnewbullets">

<li>_(improvedAccessibility)</li>

<li><strong>_(ircImprovements)</strong><ul>
 <li>_(longMessages)</li>
 <li>_(SASLAuth)</li>
</ul></li>

<li><strong>_(twitterImprovements)</strong><ul>
 <li>_(ownDescription)</li>
 <li>_(replyToAll)</li>
 <li>_(twitterTabIcon)</li>
</ul></li>

<li>_(showNick)</li>
<li>_(newXMPPNetworks)</li>

<li><strong>_(underTheHood)</strong><ul>
 <li>_(basedOnLibpurpleAndMozilla)</li>
 <li>_(memoryReporters)</li>
</ul></li>
<li>_(andMore)</li>
</ul></li>
', $rn13_bundle,
   array('&versionNumber;' => '1.3',
         '&libpurpleVersion;' => '2.10.4',
         '&mozillaVersion;' => '16.0.2',
         '&newPossibilitiesForAddonsDevelopersLink;' => '<a href="https://developer.mozilla.org/en/Firefox_16_for_developers">'.$rn13_bundle->_('newPossibilitiesForAddonsDevelopersLink').'</a>',
         '&codeChangesCount;' => '136',
         '&changeLogLink;' => '<a href="ChangeLog-1.3">'.$rn13_bundle->_('changeLogLink').'</a>',
         '&bug1100Link;' => '<a href="https://bugzilla.instantbird.org/show_bug.cgi?id=1100">'.$rn13_bundle->_('bug1100Link').'</a>',
         '&bug1392Link;' => '<a href="https://bugzilla.instantbird.org/show_bug.cgi?id=1392">'.$rn13_bundle->_('bug1292Link').'</a>'));
?>
