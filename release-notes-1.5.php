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

<li>_(autojoinToHold)</li>

<li>_(ircAlternateNicks)</li>

<li>_(aboutPagesInTabs)</li>

<li>_(retinaSupport)</li>

<li>_(hangoutMobileStatus)</li>

<li>_(hangoutTypingFix)</li>

<li>_(improvedRTLSupport)</li>

<li>_(vkontakteDropped)</li>

<li>_(tabbrowserAPI)</li>

<li>_(mozilla25)</li>

<li>_(variousFixes)</li>

<li>_(andMore)</li>

</ul>

<h2 class="borderbottom">_(knownIssues)</h2>

<ul>

<li>_(nvdaMozillaBug)</li>

<li>_(linkHandlerLinux)</li>

</ul>
', $rn15_bundle,
   array('&versionNumber;' => '1.5',
         '&libpurpleVersion;' => '2.10.7',
         '&mozillaVersion;' => '25.0',
         '&tabbrowserAPILink;' => '<a href="http://hg.instantbird.org/instantbird/file/94b13a23dac6/instantbird/content/tabbrowser.xml#l427">'.$rn15_bundle->_('tabbrowserAPILinkText').'</a>"',
         '&bug1995Link;' => '<a href="https://bugzilla.instantbird.org/show_bug.cgi?id=1995">'.$rn15_bundle->_('bug1995LinkText').'</a>"',
         '&changeLogLink;' => '<a href="ChangeLog-1.5">'.$rn15_bundle->_('changeLogLink').'</a>')
);
?>
