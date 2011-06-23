<?php
$title = 'Instantbird 0.2 - key features';
include('header.inc.php');
?>

      <div id="page">

        <ul id="index-box">
          <li>Features</li>
          <li><a href="download-all.html">Systems and Languages</a></li>
          <li><a href="release-notes.html">Release Notes</a></li>
          <li style="border-bottom-style: none;"><a href="<?php echo download_url_auto() ?>">Get Instantbird <?php echo $latest_major_version; ?> Now!</a></li>
        </ul>

        <h1>Instantbird Features</h1>
        <h2>Bringing together all kinds of awesomeness to make instant messenging better for you.</h2>

<?php echo download_button(); ?>
      </div>
      
      <div id="features-box">
<?php
$features = array(
  array('title' => 'Talk to all your friends',
        'desc'  => 'With Instantbird, you can now talk to all your friends with a single application!</p>
<p>AIM, Yahoo, MSN, Google Talk, Facebook and even Twitter are supported!',
        'img'   => '<img alt="Screenshot" src="images/screenshots/multi-protocol.png" style="margin: -6px -7px;" />'),

  array('title' => 'Trouble free',
        'desc'  => 'Instantbird has been designed with stability and simplicity in mind.</p>
<p>You will enjoy its clean clutter-free user interface: nothing will distract you from your conversations!</p>
<p>No ads, you won\'t be annoyed by unwanted content.',
        'img_windows' => '<a href="images/screenshots/windows-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/windows-trouble-free.png" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/macosx-trouble-free.png" style="margin: -8px -7px -18px -14px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-trouble-free-big.png"><img alt="Screenshot" src="images/screenshots/linux-trouble-free.png" style="margin: -4px;" /></a>'),

  array('title' => 'Conversations in Tabs',
        'desc'  => 'Conversations are grouped in Tabs, ensuring you never feel swamped by conversations windows poping up everywhere.</p>
<p>The tabs are easy to use: you can drag them to reorder them, or move a conversation into a new window.',
        'img_windows' => '<a href="images/screenshots/windows-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/windows-conversation-tabs.png" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/macosx-conversation-tabs.png" style="margin: -14px -25px 0 -25px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-conversation-tabs-big.png"><img alt="Screenshot" src="images/screenshots/linux-conversation-tabs.png" style="margin: -6px -8px 0 -6px;" /></a>'),

  array('title' => 'Customizable conversations',
        'desc'  => 'With a few carefully designed message themes available by default and
hundreds more available as add-ons, there\'s all you need to make your conversations feel personal.</p>
<p>Let\'s turn them into a colorful, delightful experience!',
        'img_windows' => '<a href="images/screenshots/windows-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/windows-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/macosx-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/linux-customizable-conversations.png" style="margin: -8px;" /></a>'),

  array('title' => 'Smart contacts',
        'desc'  => 'Having several ways to contact the same person?</p><p>No problem, just drop a contact onto another and Instantbird will know it\'s the same person.',
        'img_windows' => 'FIXME<a href="images/screenshots/windows-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/windows-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_mac'     => 'FIXME<a href="images/screenshots/macosx-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/macosx-customizable-conversations.png" style="margin: -8px;" /></a>',
        'img_linux'   => 'FIXME<a href="images/screenshots/linux-customizable-conversations-big.png"><img alt="Screenshot" src="images/screenshots/linux-customizable-conversations.png" style="margin: -8px;" /></a>'),

  array('title' => 'Always here for you',
        'desc'  => 'Instantbird will work on all your computers, whether they are running Windows, Mac OS X or Linux.</p>
<p>Being free and Open-Source, you will never have to pay to use it.</p>
<p>You will never have to learn to use another IM client again!',
        'img'   => '<a href="images/screenshots/cross-platform-big.png"><img alt="Screenshot" src="images/screenshots/cross-platform.png" style="margin: -4px 0 0 -4px;" /></a>'),

  array('title' => 'Limitless extensibility',
        'desc'  => 'Powerful tools like inline search or zoom are built-in to help you get the most out of your conversations.</p>
<p>More are available as add-ons, thanks to Instantbird\'s limitless extensibility!',
        'img_windows' => '<a href="images/screenshots/windows-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/windows-powerful-tools.png" /></a>',
        'img_mac'     => '<a href="images/screenshots/macosx-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/macosx-powerful-tools.png" style="margin: -9px -16px -22px -16px;" /></a>',
        'img_linux'   => '<a href="images/screenshots/linux-powerful-tools-big.png"><img alt="Screenshot" src="images/screenshots/linux-powerful-tools.png" style="margin: -4px -5px -5px -4px;" /></a>')
);

$os = get_preferred_os();
foreach($features as $feature) {
  $img = isset($feature['img_'.$os]) ? $feature['img_'.$os] : $feature['img'];
  echo '
        <div class="feature">
          <div class="screenshot">'.$img.'</div>
          <h2>'.$feature['title'].'</h2>
          <p>'.$feature['desc'].'</p>
          <hr class="spacer"/>
        </div>
';
}
?>
      </div>

<?php
readfile('footer.inc.php');
?>