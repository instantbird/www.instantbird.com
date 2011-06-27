<?php
$delayHeader = TRUE;
include('header.inc.php');
$f_bundle = new bundle('features');
$title = 'Instantbird - '.$f_bundle->_('keyFeaturesNotesPageTitleSuffix');

echo head().__('
      <div id="page">

        <ul id="index-box">
          <li>_(features)</li>
          <li><a href="download-all.html">_(systemsAndLanguages)</a></li>
          <li><a href="release-notes.html">_(releaseNotes)</a></li>
          <li style="border-bottom-style: none;"><a href="'.download_url_auto().'">_(getInstantbirdNow)</a></li>
        </ul>
', new bundle('learnmorenavigation'), array('&versionNumber;' => $latest_major_version)).
__('
        <h1>_(instantbirdFeatures)</h1>
        <h2>_(awesomenessToMakeIMBetterForYou)</h2>
', $f_bundle).download_button().'
      </div>
      
      <div id="features-box">
';

$features = array(
  array('title' => '_(allYourFriendsTitle)',
        'desc'  => '_(allYourFriendsDesc1)</p><p>_(allYourFriendsDesc2)',
        'img'   => '<img alt="Screenshot" src="images/screenshots/multi-protocol.png" style="margin: -6px -7px;" />'),

  array('title' => '_(troubleFreeTitle)',
        'desc'  => '_(troubleFreeDesc1)</p><p>_(troubleFreeDesc2)</p><p>_(troubleFreeDesc3)',
        'img_windows' => '<a href="images/screenshots/windows-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/windows-trouble-free.png" /></a>',
        'img_winaero' => '<a href="images/screenshots/winaero-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/winaero-trouble-free.png" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/macosx-trouble-free.png" style="margin: -8px -7px -18px -14px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/linux-trouble-free.png" style="margin: -4px;" /></a>'),

  array('title' => '_(conversationsInTabsTitle)',
        'desc'  => '_(conversationsInTabsDesc1)</p><p>_(conversationsInTabsDesc2)',
        'img_windows' => '<a href="images/screenshots/windows-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/windows-conversation-tabs.png" /></a>',
        'img_winaero' => '<a href="images/screenshots/winaero-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/winaero-conversation-tabs.png" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/macosx-conversation-tabs.png" style="margin: -14px -25px 0 -25px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/linux-conversation-tabs.png" style="margin: -6px -8px 0 -6px;" /></a>'),

  array('title' => '_(customizableConversationsTitle)',
        'desc'  => '_(customizableConversationsDesc1)</p><p>_(customizableConversationsDesc2)',
        'img_windows' => '<a href="images/screenshots/windows-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/windows-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_winaero' => '<a href="images/screenshots/winaero-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/winaero-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/macosx-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/linux-customizable-conversations.png" style="margin: -8px;" /></a>'),

  array('title' => '_(smartContactsTitle)',
        'desc'  => '_(smartContactsDesc1)</p><p>_(smartContactsDesc2)',
        'img_windows' => '<img alt="Screenshot" src="images/screenshots/windows-smart-contacts.png" style="margin: -8px;" />',
        'img_winaero' => '<img alt="Screenshot" src="images/screenshots/winaero-smart-contacts.png" style="margin: -8px;" />',
        'img_mac'     => '<img alt="Screenshot" src="images/screenshots/macosx-smart-contacts.png" style="margin: -16px;" />',
        'img_linux'   => '<img alt="Screenshot" src="images/screenshots/linux-smart-contacts.png" style="margin: -8px;" />'),

  array('title' => '_(alwaysHereForYouTitle)',
        'desc'  => '_(alwaysHereForYouDesc1)</p><p>_(alwaysHereForYouDesc2)</p><p>_(alwaysHereForYouDesc3)',
        'img'   => '<a href="images/screenshots/cross-platform-big.png"><img alt="Screenshot" src="images/screenshots/cross-platform.png" style="margin: -8px;" /></a>'),

  array('title' => '_(limitlessExtensibilityTitle)',
        'desc'  => '_(limitlessExtensibilityDesc1)</p><p>_(limitlessExtensibilityDesc2)',
        'img_windows' => '<a href="images/screenshots/windows-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/windows-powerful-tools.png" /></a>',
        'img_winaero' => '<a href="images/screenshots/winaero-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/winaero-powerful-tools.png" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/macosx-powerful-tools.png" style="margin: -9px -16px -22px -16px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/linux-powerful-tools.png" style="margin: -4px -5px -5px -4px;" /></a>')
);

$os = get_preferred_os(TRUE);
$page_content = '';
foreach($features as $feature) {
  $img = isset($feature['img_'.$os]) ? $feature['img_'.$os] : $feature['img'];
  $page_content .= '
        <div class="feature">
          <div class="screenshot">'.$img.'</div>
          <h2>'.$feature['title'].'</h2>
          <p>'.$feature['desc'].'</p>
          <hr class="spacer"/>
        </div>
';
}
echo __($page_content, $f_bundle).'
      </div>

'.footer();
?>
