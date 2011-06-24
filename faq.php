<?php
$title = 'Instantbird - Frequently Asked Questions';
include('header.inc.php');
?>
      <div id="page" class="faq condensed">

        <h1>Frequently Asked Questions</h1>
<?php
$faq = array(
  'Installing' => array(
    array('name' => 'useexistingaccounts',
          'title' => 'Will I need to provide new contact information to my friends?',
          'text' => 'No, with Instantbird you can use all your existing instant messaging accounts in a single application. If you already use instant messaging, you don\'t need to create a new account to start using Instantbird.'),

    array('name' => 'systreq',
          'title' => 'Will Instantbird work on my computer?',
          'text' => 'Instantbird currently supports Windows 2000 or later, Mac OS X 10.4 or later, and Linux. See the <a href="system-requirements.html">system requirements</a> page for details.'),

    array('name' => 'getlatest',
          'title' => 'What should I download to get the latest version of Instantbird?',
          'text' => 'A download link on the <a href="/">homepage</a> will automatically select for you the version of Instantbird that appears to be the most suitable for your system. If you want to select yourself your operating system and language, go to the <a href="download-all.html">download page</a>.'),

    array('name' => 'installasuser',
          'title' => 'Can I install Instantbird without being administrator on my computer?',
          'text' => 'Absolutely!'),

    array('name' => 'sideinstall',
          'title' => 'Can I install Instantbird and keep my previous messaging client on my computer?',
          'text' => 'Absolutely! Instantbird and other clients can coexist on the same computer without causing any trouble.'),

    array('name' => 'installwindows',
          'title' => 'How do I install Instantbird on Windows?',
          'text' => 'Instantbird is packaged for Windows as an executable installer. Just launch the file you have downloaded, and let it guide you through the setup process.'),

    array('name' => 'installmac',
          'title' => 'How do I install Instantbird on Mac OS X?',
          'text' => 'Double click on the Instantbird disk image (a file with a name ending by ".dmg") you have downloaded. Then drag the Instantbird icon to the Applications folder.'),

    array('name' => 'installlinux',
          'title' => 'How do I install Instantbird on Linux?',
          'text' => 'Extract the content of the downloaded archive, and launch the file named "instantbird". If a popup dialog asks you if you want to edit or launch the file, select "launch".'),

    array('name' => 'portable',
          'title' => 'Is Instantbird portable (usable from a USB stick)?',
          'text' => 'If you start Instantbird from a USB stick, it will, by default, store your user profile on the hard disk.</p>
   <p>You can tell Instantbird to store your user profile on the USB stick by using the <code>-profile</code> command line argument.</p>
   <p>To do this, right click on the <code>instantbird.exe</code> file and select "Create Shortcut", then on the properties of the shortcut, edit the target and append <code> -profile ./<em>foldername</em></code> to it.</p>')
  ),

  'Updating' => array(
    array('name' => 'autoupdate',
          'title' => 'Is there anything I need to do to keep using the latest version of Instantbird?',
          'text' => 'No, by default Instantbird will periodically check for updates and request your permission to update itself if a new version is found.</p>
   <p>If you don\'t like this behavior, you can modify it from the preferences dialog.'),

    array('name' => 'forceupdate',
          'title' => 'What if I want to update now?',
          'text' => 'There\'s a <em>Check for updates</em> menu item (accessible from the <em>Help</em> menu) so that you don\'t have to wait for the update prompt if you know an update exists.'),

    array('name' => 'overwrite',
          'title' => 'Can I install a newer version over an existing one?',
          'text' => 'Yes.'),

    array('name' => 'addonsafterupdate',
          'title' => 'Will my add-ons still work after an update?',
          'text' => 'Compatible add-ons will still work after the update. If an add-on is not compatible with the updated version of Instantbird, Instantbird will propose to check if a newer version of the add-on is available and to update it.</p>
   <p>If your add-on no longer works after an update, you may want to contact the author to find out if an updated version is in the making.')
  ),

  'Uninstalling' => array(
    array('name' => 'remove',
          'title' => 'How can I remove Instantbird?',
          'text' => 'On Windows, if you have used the installer, you can uninstall Instantbird from the control panel like you would uninstall any other application.</p>
   <p>In other cases, you can just remove the Instantbird folder.</p>

   <p>Removing Instantbird won\'t remove your accounts, chat history, extensions or other add-ons. This data is stored in your <a href="#profilefolder">profile folder</a>.</p>
   <p>Any version of Instantbird that you install after removing Instantbird will continue to use the data from that folder.')
  ),

  'Using' => array(
    array('name' => 'severalaccounts',
          'title' => 'Can I use several accounts at once?',
          'text' => 'Yes, you can be connected to several accounts from any of the supported protocols at the same time.</p>
   <p>Use the <em>Account manager</em> (accessible from the <em>Tools</em> menu) to add another account.'),

    array('name' => 'supportedprotocols',
          'title' => 'Which protocols are supported?',
          'text' => 'Currently Instantbird supports by default: AIM, Facebook Chat, Gadu-Gadu, Google Talk, Groupwise, ICQ, IRC, MSN, MySpaceIM, Netsoul, QQ, Simple, XMPP, Yahoo and Yahoo JAPAN.</p>
   <p>Additional protocol plugins can be installed as <a href="#getaddons">add-ons</a>.'),

    array('name' => 'facebookusername',
          'title' => 'When I try to connect to my Facebook account I get the error message <code>Invalid XMPP ID</code>. What\'s the problem?',
          'text' => 'You have entered as your username the email address you use to login to the Facebook website. Facebook chat expects you to use your unique username in this field. Go to <a href="http://www.facebook.com/username/">http://www.facebook.com/username/</a> to check it.'),

    array('name' => 'getaddons',
          'title' => 'Where can I get add-ons (extensions and themes)?',
          'text' => 'You can search for add-ons from the <em>Get Addons</em> tab of the Addons manager (accessible from the <em>Tools</em> menu) where you will see some recommended add-ons. For more, you can go to <a href="https://addons.instantbird.org/">Instantbird\'s add-on website</a> where you can also browses experimental add-ons and post reviews.'),

    array('name' => 'logsenabled',
          'title' => 'Is Instantbird creating logs of my conversations and chats?',
          'text' => 'Yes, Instantbird is creating log files by default. Use the settings on the <em>Privacy</em> pane in the <em>Options</em> dialog to configure it to your liking. If you like to have a look at the files themselves, use the <em>Show log folder...</em> button on the same pane.'),

    array('name' => 'logfolder',
          'title' => 'Where are the logs stored?',
          'text' => 'The name and path of the log files are as follows: <code><em><a href="#profilefolder">path to profile</a></em>/logs/<em>protocol</em>/<em>buddy or chat name</em>/<em>date and time</em>.txt</code> (replace the parts in italic by actual values).'),

    array('name' => 'profilefolder',
          'title' => 'Where is my profile folder?',
          'text' => 'It is located in one of the following locations depending on your operating system:
<table>
<tr><td>Windows</td><td><code>%appdata%\Instantbird\Profiles\</code> (copy and paste this exactly in the Windows explorer)</td></tr>
<tr><td>Mac OS X</td><td><code>~/Library/Application Support/Instantbird/Profiles/</code></td></tr>
<tr><td>Linux and Unix systems</td><td><code>~/.instantbird/</code></td></tr>
</table>
<p>Any version of Instantbird that you install after removing Instantbird will continue to use the data from this profile folder.</p>'),

    array('name' => 'aboutconfig',
          'title' => 'Can I access about:config to fine tune some preferences?',
          'text' => 'While we discourage using it, about:config is accessible from the <em>Advanced</em> tab of the preferences dialog.')
  ),

  'Development' => array(
    array('name' => 'why',
          'title' => 'Why are you making Instantbird?',
          'text' => 'We bring you Instantbird because <a href="http://www.instantbird.org/">we believe instant messaging is an important component of your online life</a>.'),

    array('name' => 'license',
          'title' => 'How is Instantbird licensed?',
          'text' => 'Instantbird is licensed to you under the terms of the GNU GPL license version 2.0 or later (because it uses libpurple which is GPL licensed).
   However, most of the source code is also licensed with the Mozilla tri-license (MPL 1.1/GPL 2.0/LGPL 2.1).'),

    array('name' => 'getthesource',
          'title' => 'Where is the source code?',
          'text' => 'A tarball of the source code of each released version is available from the <a href="download-all.html">download page</a>.
   The latest development code can be obtained from our Mercurial code repository by following the <a href="https://wiki.instantbird.org/Instantbird:Compiling">build instructions</a>.'),

    array('name' => 'team',
          'title' => 'Who makes Instantbird?',
          'text' => 'We are <a href="about.html">a small team</a> of highly motivated individuals, but we hope a lot of people, including you, will join us to make this project even better.'),

    array('name' => 'mozilla',
          'title' => 'Is Mozilla sponsoring the project?',
          'text' => 'The Mozilla foundation has not helped us financially.</p>
   <p>The "Powered by Mozilla" logo on our frontpage means that Instantbird relies on code and technologies that are developed by the Mozilla community. We are very grateful to the Mozilla community as a whole for the amazing technologies on which Instantbird is based.'),

    array('name' => 'getinvolved',
          'title' => 'How can I get involved?',
          'text' => 'There are several ways to take part in the project. You don\'t need to be a computer programmer to help us. See <a href="http://www.instantbird.org/#getinvolved">get involved</a> for details.'),

    array('name' => 'translate',
          'title' => 'Can I help translating into my language?',
          'text' => 'Yes! See the <a href="http://wiki.instantbird.org/Instantbird:Translation">translation wiki page</a> for details.'),

    array('name' => 'createaddons',
          'title' => 'How can I create add-ons?',
          'text' => 'See the <a href="http://wiki.instantbird.org/Instantbird:Extension">extensions wiki page</a>.'),

    array('name' => 'fxaddons',
          'title' => 'Can Firefox/Thunderbird add-ons work in Instantbird?',
          'text' => 'Not \'out of the box\', but most of them can be adapted. See the <a href="http://wiki.instantbird.org/Instantbird:Porting_Firefox_Extensions">porting Firefox extensions page</a>.'),

    array('name' => 'follow',
          'title' => 'How can I follow the current development effort?',
          'text' => 'To stay informed of the important news, you probably want to follow <a href="http://blog.instantbird.org/">our blog</a>.</p>
   <p>If you want to follow our discussions, you are welcome to join us in our IRC chatroom: <a href="irc://irc.mozilla.org/#instantbird">#instantbird on the irc.mozilla.org server</a>.</p>
   <p><a href="http://ftp.instantbird.com/instantbird/nightly/latest-trunk/">Nightly builds</a> are produced everyday so that people can help us testing the features that have just been added. Feel free to use them, but watch out! They may not be stable, and if you decide to use them, you are expected to do so to help us test the bleeding edge features, not just be a cool kid who\'s got the new toy first. So if there are bugs, please <a href="http://bugzilla.instantbird.org">report them</a> (<a href="https://wiki.instantbird.org/Instantbird:Bugzilla">Filing a bug</a>: what a bug report should contain) instead of complaining.'),

    array('name' => 'whatsnext',
          'title' => 'What\'s going to be in the next version?',
          'text' => 'See the <a href="http://wiki.instantbird.org/Instantbird:Roadmap">roadmap</a>.'),

    array('name' => 'when',
          'title' => 'When will the next major version be released?',
          'text' => 'We are very excited about this project and pleased that you share our desire to move forward as fast as possible. However, owing to the nature of software development, it could be problematic to give deadlines and we see maintaining quality as more important.'),

    array('name' => 'futurefeatures',
          'title' => 'Will Instantbird support file transfer/video chat/<em>insert your favorite feature here</em>?',
          'text' => 'See the <a href="http://wiki.instantbird.org/Instantbird:Roadmap">roadmap</a>.</p>
   <p>Feel free to discuss with us things that aren\'t listed to know if we are interested or if the they can be implemented as add-ons.')
  )
);

echo "\n        <h2 class=\"borderbottom\">Summary</h2>\n";
foreach ($faq as $section_name => $section_topics) {
  echo "\n        <li>$section_name<ul>\n";
  foreach ($section_topics as $topic)
    echo '          <li><a href="#'.$topic['name'].'">'.$topic['title'].'</a></li>'."\n";
  echo "        </ul></li>\n";
}


foreach ($faq as $section_name => $section_topics) {
  echo "\n        <h2 class=\"borderbottom\">$section_name</h2>\n";

  $class = ' class="first-title"';
  foreach ($section_topics as $topic) {
    echo '        <h3'.$class.'><a class="no-link" name="'.$topic['name'].'">'.$topic['title'].'</a></h3>'."\n";
    echo '        <p>'.$topic['text']."</p>\n\n";
    $class = '';
  }
}
?>
      </div>
<?php echo footer(); ?>
