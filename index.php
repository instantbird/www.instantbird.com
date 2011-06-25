<?php include('header.inc.php');
$os_img = array('windows' => '<img alt="_(screenshotAltText)" src="images/screenshots/windows-screenshot-homepage.png" />',
                'mac' => '<img alt="_(screenshotAltText)" src="images/screenshots/macosx-screenshot-homepage.png" style="margin: -3px -8px -11px -8px;" />',
                'linux' => '<img alt="_(screenshotAltText)" src="images/screenshots/linux-screenshot-homepage.png" style="margin: -3px;" />');

$page_content = '      <div id="screenshot-box">
        <a href="features.html">'.$os_img[get_preferred_os()].'</a>
        <p class="arrow-link"><a href="features.html">_(seeMoreLink)</a></p>
      </div>

      <div id="share-box">_(shareInstantbirdWithYourFriendsOn)</div>

      <div id="logo"><img alt="Instantbird" src="images/instantbird-logo.png" /> '.$latest_major_version.'</div>

      <div id="motto">
        <p>_(withInstantbirdConnectTo)<br />
';

$possible_prpl = array('aim' => array('title' => 'AOL Instant Messenger', 'url' => 'http://www.aim.com/'),
                       'facebook' => array('title' => 'Facebook Chat', 'url' => 'http://www.facebook.com'),
                       'gadu-gadu' => array('title' => 'Gadu-Gadu', 'url' => 'http://www.gadu-gadu.pl/'),
                       'googletalk' => array('title' => 'Google Talk_(jabberCompatible)', 'url' => 'http://talk.google.com/'),
                       'icq' => array('title' => 'ICQ_(AIMCompatible)', 'url' => 'http://www.icq.com/'),
                       'irc' => array('title' => 'IRC', 'url' => 'http://en.wikipedia.org/wiki/Internet_Relay_Chat'),
                       'jabber' => array('title' => 'XMPP (Jabber)', 'url' => 'http://www.xmpp.org/'),
                       'msn' => array('title' => 'Windows Live Messenger (MSN)', 'url' =>'http://www.msn.com/'),
                       'myspaceim' => array('title' => 'MySpace IM', 'url' => 'http://www.myspace.com/im'),
                       'qq' => array('title' => 'QQ', 'url' => 'http://im.qq.com/'),
                       'twitter' => array('title' => 'Twitter', 'url' => 'http://twitter.com/'),
                       'yahoo' => array('title' => 'Yahoo! Messenger', 'url' => 'http://messenger.yahoo.com/'));
$index_bundle = new bundle('index');
$prpls = explode(',', $index_bundle->_('prplList'));
foreach ($prpls as $prpl) {
  if (!isset($possible_prpl[$prpl]))
    continue;
  $proto = $possible_prpl[$prpl];
  $page_content .= '          <a title="'.$proto['title'].'" rel="nofollow" href="'.$proto['url'].'"><img src="images/services/icon-'.$prpl.'.png" alt="'.$proto['title'].' Icon"></a>'."\n";
}
$page_content .= '        </p>
        <p>_(instantbirdMotto) <a href="features.html">_(learnMoreLink)</a>.</p>
      </div>

      <div id="getinstantbird-box">
'.download_button().'

        <p class="arrow-link"><a href="release-notes.html">_(releaseNotesLink)</a> - <a href="download-all.html" style="background: none; padding-left: 0;">_(otherSystemsAndLanguagesLink)</a></p>
      </div>

      <hr class="spacer" />'.@file_get_contents('rss.html.inc').'
      <hr class="spacer" />

      <p id="powered-by-mozilla"><a href="http://www.mozilla.org/poweredby"><img alt="_(poweredByMozillaAltText)" src="images/powered-by-mozilla.png" /></a></p>
';

$twitterLink = '<a title="'.$index_bundle->_('shareOnTwitterLinkTooltip').'" id="tweet-button" href="http://twitter.com/share?url=http://www.instantbird.com/&text='.$index_bundle->_('shareOnTwitterTweet').'&related=instantbird">twitter</a>';
$facebookLink = '<a title="'.$index_bundle->_('shareOnFacebookLinkTooltip').'" id="facebook-button" href="https://www.facebook.com/sharer/sharer.php?u=http://www.instantbird.com/">Facebook</a>';
echo __($page_content, $index_bundle, array('&twitterLink;' => $twitterLink,
                                            '&facebookLink;' => $facebookLink));
echo footer();
?>
