<?php include('header.inc.php');
$os_img = array('windows' => '<img alt="_(screenshotAltText)" src="images/screenshots/windows-screenshot-homepage.png" />',
                'winaero' => '<img alt="_(screenshotAltText)" src="images/screenshots/winaero-screenshot-homepage.png" />',
                'mac' => '<img alt="_(screenshotAltText)" src="images/screenshots/macosx-screenshot-homepage.png" style="margin: -3px -8px -11px -8px;" />',
                'linux' => '<img alt="_(screenshotAltText)" src="images/screenshots/linux-screenshot-homepage.png" style="margin: -3px;" />');

$page_content = '      <div id="screenshot-box">
        <a href="features.html">'.$os_img[get_preferred_os(TRUE)].'</a>
        <p class="arrow-link"><a href="features.html">_(seeMoreLink)</a></p>
      </div>

      <div id="share-box">_(shareInstantbirdWithYourFriendsOn)</div>

      <div id="logo"><img alt="Instantbird" src="images/instantbird-logo.png" /> '.$latest_major_version.'</div>

      <div id="motto">
        <p>_(withInstantbirdConnectTo)<br />
';

function get_irc_url()
{
  global $website_locale;
  $irc_wikipedia_urls = array('af' => 'IRC',
                              'ar' => '%D8%A2%D9%8A_%D8%A2%D8%B1_%D8%B3%D9%8A',
                              'az' => 'Internet_Relay_Chat',
                              'be' => 'IRC',
                              'bg' => 'Internet_Relay_Chat',
                              'bn' => '%E0%A6%87%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%B0%E0%A6%A8%E0%A7%87%E0%A6%9F_%E0%A6%B0%E0%A6%BF%E0%A6%B2%E0%A7%87_%E0%A6%9A%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%9F',
                              'br' => 'IRC',
                              'bs' => 'Internet_Relay_Chat',
                              'ca' => 'IRC',
                              'cs' => 'Internet_Relay_Chat',
                              'cy' => 'IRC',
                              'da' => 'IRC',
                              'de' => 'Internet_Relay_Chat',
                              'el' => 'Internet_Relay_Chat',
                              'en' => 'Internet_Relay_Chat',
                              'eo' => 'Interreta_relajsa_babilo',
                              'es' => 'Internet_Relay_Chat',
                              'eu' => 'IRC',
                              'fa' => '%D8%A2%DB%8C%E2%80%8C%D8%A2%D8%B1%D8%B3%DB%8C',
                              'fi' => 'IRC',
                              'fr' => 'Internet_Relay_Chat',
                              'gl' => 'IRC',
                              'he' => 'Internet_Relay_Chat',
                              'hi' => '%E0%A4%86%E0%A4%87%E0%A4%86%E0%A4%B0%E0%A4%B8%E0%A5%80',
                              'hr' => 'IRC',
                              'hu' => 'Internet_Relay_Chat',
                              'ia' => 'Internet_Relay_Chat',
                              'id' => 'Internet_Relay_Chat',
                              'io' => 'Internet_Relay_Chat',
                              'is' => 'Internet_Relay_Chat',
                              'it' => 'Internet_Relay_Chat',
                              'ja' => 'Internet_Relay_Chat',
                              'ko' => '%EC%9D%B8%ED%84%B0%EB%84%B7_%EB%A6%B4%EB%A0%88%EC%9D%B4_%EC%B1%97',
                              'lt' => 'IRC',
                              'lv' => 'IRC',
                              'ms' => 'IRC',
                              'nl' => 'Internet_Relay_Chat',
                              'nn' => 'Internet_Relay_Chat',
                              'no' => 'IRC',
                              'pl' => 'Internet_Relay_Chat',
                              'pt' => 'Internet_Relay_Chat',
                              'ro' => 'IRC',
                              'ru' => 'IRC',
                              'sh' => 'IRC',
                              'sk' => 'Internet_Relay_Chat',
                              'sl' => 'Internet_Relay_Chat',
                              'sq' => 'Internet_Relay_Chat',
                              'sr' => '%D0%98%D0%A0%D0%A6',
                              'sv' => 'IRC',
                              'sw' => 'IRC',
                              'tg' => 'IRC',
                              'th' => '%E0%B9%84%E0%B8%AD%E0%B8%AD%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%8B%E0%B8%B5',
                              'tr' => 'Internet_Relay_Chat',
                              'uk' => 'IRC',
                              'vi' => 'IRC',
                              'yo' => 'Internet_Relay_Chat',
                              'zh' => 'IRC');

  $short_website_locale = explode('-', $website_locale);
  $short_website_locale = strtolower($short_website_locale[0]);

  if (!isset($irc_wikipedia_urls[$short_website_locale]))
    $short_website_locale = 'en';

  return 'http://'.$short_website_locale.'.wikipedia.org/wiki/'.$irc_wikipedia_urls[$short_website_locale];
}

$possible_prpl = array('aim' => array('title' => 'AOL Instant Messenger', 'url' => 'http://www.aim.com/'),
                       'facebook' => array('title' => 'Facebook Chat', 'url' => 'http://www.facebook.com'),
                       'gadu-gadu' => array('title' => 'Gadu-Gadu', 'url' => 'http://www.gadu-gadu.pl/'),
                       'googletalk' => array('title' => 'Google Talk_(jabberCompatible)', 'url' => 'http://talk.google.com/'),
                       'icq' => array('title' => 'ICQ_(AIMCompatible)', 'url' => 'http://www.icq.com/'),
                       'irc' => array('title' => 'IRC', 'url' => get_irc_url()),
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
  $page_content .= '          <a title="'.$proto['title'].'" rel="nofollow" href="'.$proto['url'].'"><img src="images/services/icon-'.$prpl.'.png" alt="'.$proto['title'].' Icon" /></a>'."\n";
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

$twitterLink = '<a title="'.$index_bundle->_('shareOnTwitterLinkTooltip').'" id="tweet-button" href="http://twitter.com/share?url=http://www.instantbird.com/&amp;text='.$index_bundle->_('shareOnTwitterTweet').'&amp;related=instantbird">twitter</a>';
$facebookLink = '<a title="'.$index_bundle->_('shareOnFacebookLinkTooltip').'" id="facebook-button" href="https://www.facebook.com/sharer/sharer.php?u=http://www.instantbird.com/">Facebook</a>';
echo __($page_content, $index_bundle, array('&twitterLink;' => $twitterLink,
                                            '&facebookLink;' => $facebookLink));
echo footer();
?>
