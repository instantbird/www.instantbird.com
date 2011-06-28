<?php
$rn10_bundle = new bundle('releasenotes-1.0');

echo __('<h2 class="borderbottom">_(whatsNew)</h2>

<ul class="whatsnewbullets">

<li>_(redesignedContactsWindow)<ul>
 <li><strong>_(contactMerging)</strong>: _(contactMergingDescription)</li>
 <li><strong>_(tags)</strong>: _(tagsDescription)</li>
 <li>_(contactsWindowCanNowBe)<ul>
  <li>_(closedOnMac)</li>
  <li>_(minimizedToTrayOnWindowsAndLinux)</li>
 </ul></li>
 <li>_(buddyIcon)</li>
 <li>_(contactListSorted)</li>
 <li>_(nicerAnimations)</li>
</ul></li>

<li><strong>_(twitterSupport)</strong>: _(twitterSupportDescription)</li>

<li>_(topConversationUI)</li>
<li>_(updatedTabStyling)</li>
<li>_(timeBubbles)</li>

<li>_(jumplist)</li>

<li>_(jsProto)</li>

<li>_(minorImprovements)<ul>
 <li>_(jumpToTab)</li>
 <li>_(helpCommand)</li>
 <li>_(unknownStatus)</li>
 <li>_(darkSimple)</li>
</ul></li>

<li><strong>_(updated)</strong>: _(basedOnLibpurpleAndMozilla)</li>
<li><strong>_(improvedStability)</strong>: _(improvedStabilityDescription)</li>
<li>_(andMore)</li>
</ul>

<h2 class="borderbottom">_(knownIssues)</h2>
<ul>
<li>_(cannotReopenTwitterTimeline)</li>
</ul>', $rn10_bundle,
   array('&blogPostLink;' => '<a href="http://blog.instantbird.org/c42-introducing-time-bubbles.html" title="Instantbird blog: Introducing Time Bubbles">'.$rn10_bundle->_('blogPostLink').'</a>',
         '&versionNumber;' => '1.0',
         '&libpurpleVersion;' => '2.7.11',
         '&mozillaVersion;' => '2.0.1',
         '&newPossibilitiesForAddonsDevelopersLink;' => '<a href="https://developer.mozilla.org/en/Firefox_4_for_developers">'.$rn10_bundle->_('newPossibilitiesForAddonsDevelopersLink').'</a>',
         '&restartLessAddonsLink;' => '<a href="https://developer.mozilla.org/en/Extensions/Bootstrapped_extensions">'.$rn10_bundle->_('restartLessAddonsLink').'</a>',
         '&changeLogLink;' => '<a href="ChangeLog-1.0">'.$rn10_bundle->_('changeLogLink').'</a>',
         '&codeChangesCount;' => '329'));
?>
