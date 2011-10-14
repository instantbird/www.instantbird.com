<?php
$rn11_bundle = new bundle('releasenotes-1.1');

echo __('<h2 class="borderbottom">_(whatsNew)</h2>

<ul class="whatsnewbullets">

<li><strong>_(conversationsCanBePutOnHold)</strong><ul>
 <li>_(putOnHoldFromContextMenu)</li>
 <li>_(noMoreMissedMessages)</li>
 <li>_(closingChatPutsOnHold)</li>
 <li>_(newMessageReopens)</li>
 <li>_(unreadCount)</li>
</ul></li>

<li><strong>_(improvedTraySupport)</strong><ul>
 <li>_(singleClickRestore)</li>
 <li>_(trayIconEvenWhenNotMinimized)</li>
</ul></li>

<li><strong>_(improvedTwitterSupport)</strong><ul>
 <li>_(twitterEntities)</li>
 <li>_(retweetAndReply)</li>
 <li>_(followUnfollow)</li>
</ul></li>

<li>_(sametimeSupport)</li>

<li>_(chatParticipantsTooltip)<ul>
 <li>_(whoisInfo)</li>
</ul></li>

<li>_(tabCompletion)</li>

<li>_(interruptionsManagerAPI)<ul>
 <li>_(eventsFiltered)</li>
</ul></li>

<li>_(fixedICQSettings)</li>

<li>_(unknownCommandsNoLongerSent)</li>

<li><strong>_(updated)</strong>: _(basedOnLibpurpleAndMozilla)</li>
<li><strong>_(improvedStability)</strong>: _(improvedStabilityDescription)</li>
<li>_(andMore)</li>
</ul>', $rn11_bundle,
   array('&blogPostLink;' => '<a href="http://blog.instantbird.org/c42-introducing-time-bubbles.html" title="Instantbird blog: Introducing Time Bubbles">'.$rn11_bundle->_('blogPostLink').'</a>',
         '&versionNumber;' => '1.1',
         '&libpurpleVersion;' => '2.10.0',
         '&mozillaVersion;' => '7.0.1',
         '&newPossibilitiesForAddonsDevelopersLink;' => '<a href="https://developer.mozilla.org/en/Firefox_7_for_developers">'.$rn11_bundle->_('newPossibilitiesForAddonsDevelopersLink').'</a>',
         '&changeLogLink;' => '<a href="ChangeLog-1.1">'.$rn11_bundle->_('changeLogLink').'</a>',
         '&codeChangesCount;' => '138'));
?>
