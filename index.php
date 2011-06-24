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
          <a title="AOL Instant Messenger" rel="nofollow" href="http://www.aim.com/"><img src="images/services/icon-aim.png" alt="AIM Icon"></a>
          <a title="Windows Live Messenger (MSN)" rel="nofollow" href="http://www.msn.com/"><img src="images/services/icon-msn.png" alt="MSN Icon"></a>
          <a title="Yahoo! Messenger" rel="nofollow" href="http://messenger.yahoo.com/"><img src="images/services/icon-yahoo.png" alt="Yahoo Icon"></a>
          <a title="Google Talk_(jabberCompatible)" rel="nofollow" href="http://talk.google.com/"><img src="images/services/icon-googletalk.png" alt="Google Talk Icon"></a>
          <a title="Twitter" rel="nofollow" href="http://twitter.com/"><img src="images/services/icon-twitter.png" alt="Twitter Icon"></a>
          <a title="Facebook Chat" rel="nofollow" href="http://www.facebook.com"><img src="images/services/icon-facebook.png" alt="Facebook Chat Icon"></a>
          <a title="XMPP (Jabber)" rel="nofollow" href="http://www.xmpp.org/"><img src="images/services/icon-jabber.png" alt="Jabber Icon"></a>
          <a title="IRC" rel="nofollow" href="http://en.wikipedia.org/wiki/Internet_Relay_Chat"><img src="images/services/icon-irc.png" alt="IRC Icon"></a>
          <a title="ICQ_(AIMCompatible)" rel="nofollow" href="http://www.icq.com/"><img src="images/services/icon-icq.png" alt="ICQ Icon"></a>
        </p>
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

$index_bundle = new bundle('index');
$twitterLink = '<a title="'.$index_bundle->_('shareOnTwitterLinkTooltip').'" id="tweet-button" href="http://twitter.com/share?url=http://www.instantbird.com/&text='.$index_bundle->_('shareOnTwitterTweet').'&related=instantbird">twitter</a>';
$facebookLink = '<a title="'.$index_bundle->_('shareOnFacebookLinkTooltip').'" id="facebook-button" href="https://www.facebook.com/sharer/sharer.php?u=http://www.instantbird.com/">Facebook</a>';
echo __($page_content, $index_bundle, array('&twitterLink;' => $twitterLink,
                                            '&facebookLink;' => $facebookLink));
echo footer();
?>
