<?php
$delayHeader = TRUE;
include('header.inc.php');
$faq_bundle = new bundle('faq');
$title = 'Instantbird - '.$faq_bundle->_('faqPageTitleSuffix');

echo head();
$page_content = '
      <div id="page" class="faq condensed">

        <h1>_(faq)</h1>
';
$faq = array(
  '_(installing)' => array(
    array('name' => 'useexistingaccounts',
          'title' => '_(useexistingaccountsTitle)',
          'text' => '_(useexistingaccountsText)'),

    array('name' => 'systreq',
          'title' => '_(systreqTitle)',
          'text' => '_(systreqText)'),

    array('name' => 'getlatest',
          'title' => '_(getlatestTitle)',
          'text' => '_(getlatestText)'),

    array('name' => 'installasuser',
          'title' => '_(installasuserTitle)',
          'text' => '_(installasuserText)'),

    array('name' => 'sideinstall',
          'title' => '_(sideinstallTitle)',
          'text' => '_(sideinstallText)'),

    array('name' => 'installwindows',
          'title' => '_(installwindowsTitle)',
          'text' => '_(installwindowsText)'),

    array('name' => 'installmac',
          'title' => '_(installmacTitle)',
          'text' => '_(installmacText)'),

    array('name' => 'installlinux',
          'title' => '_(installlinuxTitle)',
          'text' => '_(installlinuxText)'),

    array('name' => 'portable',
          'title' => '_(portableTitle)',
          'text' => '_(portableText1)</p><p>_(portableText2)</p><p>_(portableText3)</p>')
  ),

  '_(updating)' => array(
    array('name' => 'autoupdate',
          'title' => '_(autoupdateTitle)',
          'text' => '_(autoupdateText1)</p><p>_(autoupdateText2)'),

    array('name' => 'forceupdate',
          'title' => '_(forceupdateTitle)',
          'text' => '_(forceupdateText)'),

    array('name' => 'overwrite',
          'title' => '_(overwriteTitle)',
          'text' => '_(overwriteText)'),

    array('name' => 'addonsafterupdate',
          'title' => '_(addonsafterupdateTitle)',
          'text' => '_(addonsafterupdateText1)</p><p>_(addonsafterupdateText2)')
  ),

  '_(uninstalling)' => array(
    array('name' => 'remove',
          'title' => '_(removeTitle)',
          'text' => '_(removeText1)</p><p>_(removeText2)</p>
   <p>_(removeText3)</p><p>_(removeText4)')
  ),

  '_(using)' => array(
    array('name' => 'severalaccounts',
          'title' => '_(severalaccountsTitle)',
          'text' => '_(severalaccountsText1)</p><p>_(severalaccountsText2)'),

    array('name' => 'supportedprotocols',
          'title' => '_(supportedprotocolsTitle)',
          'text' => '_(supportedprotocolsText1)</p><p>_(supportedprotocolsText2)'),

    array('name' => 'facebookusername',
          'title' => '_(facebookusernameTitle)',
          'text' => '_(facebookusernameText)'),

    array('name' => 'getaddons',
          'title' => '_(getaddonsTitle)',
          'text' => '_(getaddonsText)'),

    array('name' => 'logsenabled',
          'title' => '_(logsenabledTitle)',
          'text' => '_(logsenabledText)'),

    array('name' => 'logfolder',
          'title' => '_(logfolderTitle)',
          'text' => '_(logfolderText)'),

    array('name' => 'profilefolder',
          'title' => '_(profilefolderTitle)',
          'text' => '_(profilefolderText1)
<table>
<tr><td>Windows</td><td><code>%appdata%\Instantbird\Profiles\</code> (_(profilefolderTextCopyAndPaste))</td></tr>
<tr><td>Mac OS X</td><td><code>~/Library/Application Support/Instantbird/Profiles/</code></td></tr>
<tr><td>Linux (Unix)</td><td><code>~/.instantbird/</code></td></tr>
</table>
<p>_(profilefolderTextReuse)</p>'),

    array('name' => 'aboutconfig',
          'title' => '_(aboutconfigTitle)',
          'text' => '_(aboutconfigText)')
  ),

  '_(development)' => array(
    array('name' => 'why',
          'title' => '_(whyTitle)',
          'text' => '_(whyText)'),

    array('name' => 'license',
          'title' => '_(licenseTitle)',
          'text' => '_(licenseText)'),

    array('name' => 'getthesource',
          'title' => '_(getthesourceTitle)',
          'text' => '_(getthesourceText)'),

    array('name' => 'team',
          'title' => '_(teamTitle)',
          'text' => '_(teamText)'),

    array('name' => 'mozilla',
          'title' => '_(mozillaTitle)',
          'text' => '_(mozillaText1)</p><p>_(mozillaText2)'),

    array('name' => 'getinvolved',
          'title' => '_(getinvolvedTitle)',
          'text' => '_(getinvolvedText)'),

    array('name' => 'translate',
          'title' => '_(translateTitle)',
          'text' => '_(translateText)'),

    array('name' => 'createaddons',
          'title' => '_(createaddonsTitle)',
          'text' => '_(createaddonsText)'),

    array('name' => 'fxaddons',
          'title' => '_(fxaddonsTitle)',
          'text' => '_(fxaddonsText)'),

    array('name' => 'follow',
          'title' => '_(followTitle)',
          'text' => '_(followText1)</p><p>_(followText2)</p><p>_(followText3)'),

    array('name' => 'whatsnext',
          'title' => '_(whatsnextTitle)',
          'text' => '_(whatsnextText)'),

    array('name' => 'when',
          'title' => '_(whenTitle)',
          'text' => '_(whenText)'),

    array('name' => 'futurefeatures',
          'title' => '_(futurefeaturesTitle)',
          'text' => '_(futurefeaturesText1)</p><p>_(futurefeaturesText2)')
  )
);

$page_content .= "\n        <h2 class=\"borderbottom\">_(summary)</h2>\n";
foreach ($faq as $section_name => $section_topics) {
  $page_content .= "\n        <li>$section_name<ul>\n";
  foreach ($section_topics as $topic)
    $page_content .= '          <li><a href="#'.$topic['name'].'">'.$topic['title'].'</a></li>'."\n";
  $page_content .= "        </ul></li>\n";
}


foreach ($faq as $section_name => $section_topics) {
  $page_content .= "\n        <h2 class=\"borderbottom\">$section_name</h2>\n";

  $class = ' class="first-title"';
  foreach ($section_topics as $topic) {
    $page_content .= '        <h3'.$class.'><a class="no-link" name="'.$topic['name'].'">'.$topic['title'].'</a></h3>'."\n";
    $page_content .= '        <p>'.$topic['text']."</p>\n\n";
    $class = '';
  }
}
echo __($page_content, $faq_bundle, array(
'&systemRequirementsLink;' => '<a href="system-requirements.html">'.$faq_bundle->_('systemRequirementsLink').'</a>',
'&homePageLink;' => '<a href="/">'.$faq_bundle->_('homePageLink').'</a>',
'&downloadPageLink;' => '<a href="download-all.html">'.$faq_bundle->_('downloadPageLink').'</a>',
'&profileFolderLink;' => '<a href="#profilefolder">'.$faq_bundle->_('profileFolderLink').'</a>',
'&addonsLink;' => '<a href="#getaddons">'.$faq_bundle->_('addonsLink').'</a>',
'&facebookLink;' => '<a href="http://www.facebook.com/username/">http://www.facebook.com/username/</a>',
'&addonsWebsiteLink;' => '<a href="https://addons.instantbird.org/">'.$faq_bundle->_('addonsWebsiteLink').'</a>',
'&profileLink;' => '<a href="#profilefolder">'.$faq_bundle->_('profileLink').'</a>',
'&weBelieveLink;' => '<a href="http://www.instantbird.org/">'.$faq_bundle->_('weBelieveLink').'</a>',
'&buildInstructionsLink;' => '<a href="https://wiki.instantbird.org/Instantbird:Compiling">'.$faq_bundle->_('buildInstructionsLink').'</a>',
'&teamLink;' => '<a href="about.html">'.$faq_bundle->_('teamLink').'</a>',
'&getInvolvedLink;' => '<a href="http://www.instantbird.org/#getinvolved">'.$faq_bundle->_('getInvolvedLink').'</a>',
'&translationWikiPageLink;' => '<a href="http://wiki.instantbird.org/Instantbird:Translation">'.$faq_bundle->_('translationWikiPageLink').'</a>',
'&extensionsWikiPageLink;' => '<a href="http://wiki.instantbird.org/Instantbird:Extension">'.$faq_bundle->_('extensionsWikiPageLink').'</a>',
'&portingFirefoxExtensionsPageLink;' => '<a href="http://wiki.instantbird.org/Instantbird:Porting_Firefox_Extensions">'.$faq_bundle->_('portingFirefoxExtensionsPageLink').'</a>',
'&blogLink;' => '<a href="http://blog.instantbird.org/">'.$faq_bundle->_('blogLink').'</a>',
'&ircRoomLink;' => '<a href="irc://irc.mozilla.org/#instantbird">'.$faq_bundle->_('ircRoomLink').'</a>',
'&nightlyBuildsLink;' => '<a href="http://ftp.instantbird.com/instantbird/nightly/latest-trunk/">'.$faq_bundle->_('nightlyBuildsLink').'</a>',
'&reportBugLink;' => '<a href="http://bugzilla.instantbird.org/">'.$faq_bundle->_('reportBugLink').'</a>',
'&filingABugLink;' => '<a href="https://wiki.instantbird.org/Instantbird:Bugzilla">'.$faq_bundle->_('filingABugLink').'</a>',
'&roadmapLink;' => '<a href="http://wiki.instantbird.org/Instantbird:Roadmap">'.$faq_bundle->_('roadmapLink').'</a>')
).'
      </div>
'.footer();
?>
