<?php
$rn12_bundle = new bundle('releasenotes-1.2');

echo __('<h2 class="borderbottom">_(whatsNew)</h2>

<ul class="whatsnewbullets">

<li>_(logViewer)</li>
<li>_(bonjour)</li>

<li><strong>_(mucInterface)</strong><ul>
 <li>_(tabComplete)</li>
 <li>_(activeNicks)</li>
</ul></li>

<li><strong>_(ircEnhancements)</strong><ul>
 <li>_(channelsReconnect)</li>
 <li>_(ircStatus)</li>
 <li>_(ircChanServ)</li>
 <li>_(ircNickServ)</li>
</ul></li>

<li>_(encryptedPasswords)</li>
<li>_(popularAccounts)</li>
<li>_(systemTrayStatus)</li>
<li>_(lastReadMarker)</li>
<li>_(conversationRestore)</li>
<li>_(contextMessages)</li>
<li>_(keyboardNavigation)</li>
<li>_(accessibilityImprovements)</li>

<li><strong>_(addonDevelopers)</strong><ul>
 <li>_(soundPreferences)</li>
 <li>_(reorderContacts)</li>
 <li>_(addNewProtocols)</li>
</ul></li>

<li><strong>_(underTheHood)</strong><ul>
 <li>_(extensibleProtocols)<ul>
  <li>_(facebookAndGoogleProtocols)</li>
  <li>_(ircProtocol)</li>
 </ul></li>
 <li>_(basedOnLibpurpleAndMozilla)</li>
 <li>_(mplLicense)</li>
 <li>_(libqq)</li>
 <li>_(platformChanges)</li>
</ul></li>
<li>_(andMore)</li>
</ul>

<h2 class="borderbottom">_(knownIssues)</h2>
<ul>
 <li>_(freenodeSSL)</li>
 <li>_(selfSignedCerts)</li>
</ul></li>
', $rn12_bundle,
   array('&versionNumber;' => '1.2',
         '&libpurpleVersion;' => '2.10.4',
         '&mozillaVersion;' => '14.0.1',
         '&newPossibilitiesForAddonsDevelopersLink;' => '<a href="https://developer.mozilla.org/en/Firefox_14_for_developers">'.$rn12_bundle->_('newPossibilitiesForAddonsDevelopersLink').'</a>',
         '&codeChangesCount;' => '403',
         '&bonjourPrintServicesLink;' => '<a href="http://support.apple.com/kb/DL999">'.$rn12_bundle->_('bonjourPrintServicesLink').'</a>',
         '&avahiLink;' => '<a href="http://www.avahi.org/">Avahi</a>',
         '&tabCompleteBlogPostLink;' => '<a href="http://blog.instantbird.org/2012/08/tab-completion-in-instantbird-1-2/">'.$rn12_bundle->_('tabCompleteBlogPostLink').'</a>',
         '&advancedSoundControlsLink;' => '<a href="https://addons.instantbird.org/en-US/instantbird/addon/306">'.$rn12_bundle->_('advancedSoundControlsLink').'</a>',
         '&sortByStatusLink;' => '<a href="https://addons.instantbird.org/en-US/instantbird/addon/317">'.$rn12_bundle->_('sortByStatusLink').'</a>',
         '&vznetChatsLink;' => '<a href="https://addons.instantbird.org/en-US/instantbird/addon/254">'.$rn12_bundle->_('vznetChatsLink').'</a>',
         '&mplLink;' => '<a href="http://www.mozilla.org/MPL/2.0/">'.$rn12_bundle->_('mplLink').'</a>',
         '&gplLink;' => '<a href="http://www.gnu.org/licenses/gpl-2.0.html">'.$rn12_bundle->_('gplLink').'</a>',
         '&changeLogLink;' => '<a href="ChangeLog-1.2">'.$rn12_bundle->_('changeLogLink').'</a>',
         '&bug1100Link;' => '<a href="https://bugzilla.instantbird.org/show_bug.cgi?id=1100">'.$rn12_bundle->_('bug1100Link').'</a>',
         '&bug1292Link;' => '<a href="https://bugzilla.instantbird.org/show_bug.cgi?id=1292">'.$rn12_bundle->_('bug1292Link').'</a>'));
?>
