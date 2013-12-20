<?php
$rn15_bundle = new bundle('releasenotes-1.5');

echo __('<h2 class="borderbottom">_(whatsNew)</h2>

<ul class="whatsnewbullets">

<li>_(newTabIntro)<ul>
 <li>_(newTabOpeningTheTab)</li>
 <li>_(newTabFrecency)</li>
 <li>_(newTabChannelList)</li>
</ul></li>

<li>_(newTooltips)</li>

<li>_(improvedMUCsIntro)<ul>
 <li>_(improvedMUCsContextMenu)</li>
 <li>_(improvedMUCsHighlightedNicks)</li>
</ul></li>

<li>_(retinaSupport)</li>

<li>_(improvedRTLSupport)</li>

<li>_(autojoinToHold)</li>

<li>_(ircAlternateNicks)</li>

<li>_(aboutPagesInTabs)</li>

<li>_(hangoutMobileStatus)</li>

<li>_(hangoutTypingFix)</li>

<li>_(mozilla25)</li>

<li>_(vkontakteDropped)</li>

<li>_(tabbrowserAPI)</li>

<li>_(variousFixes)</li>

<li>_(andMore)</li>

<h2 class="borderbottom">_(knownIssues)</h2>

<ul>

<li>_(nvdaMozillaBug)</li>

<li>_(linkHandlerLinux)</li>

</ul>
', $rn15_bundle,
   array('&versionNumber;' => '1.5',
         '&libpurpleVersion;' => '2.10.7',
         '&mozillaVersion;' => '25.0',
         '&tabbrowserAPILink;' => 'http://lxr.instantbird.org/instantbird/source/instantbird/content/tabbrowser.xml#427',
         '&changeLogLink;' => '<a href="ChangeLog-1.5">'.$rn15_bundle->_('changeLogLink').'</a>')
);
?>
