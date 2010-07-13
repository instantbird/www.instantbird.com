<?php
$title = 'Instantbird 0.2 beta 1';
include('header.inc.php');
?>

<div id="page">

<h1>Instantbird 0.2 beta 1</h1>

<p>Instantbird 0.2 is not yet finished. This release is the second preview of what we have been working on in the last few months. Don't hesitate to try it, play with it, and <a href="https://bugzilla.instantbird.org/">report bugs</a>! If you want to follow our development effort more closely, you may also be interested in <a href="http://blog.instantbird.org/a6-nightly-builds-available.html">nightly builds</a>.</p>

<h2 class="borderbottom">Download</h2>

<p>Instantbird runs on Windows, Mac OS X and Linux platforms.</p>
<p>Please see the <a href="system-requirements.html">minimum system requirements</a> needed to run Instantbird.</p>

<table id="table-download">
<tr>
  <th>Language</th>
  <th>Version</th>
  <th><img alt="" src="images/ico-win.png" />Windows</th>
  <th><img alt="" src="images/ico-osx.png" />Mac&nbsp;OS&nbsp;X</th>
  <th><img alt="" src="images/ico-tux.png" />Linux</th>
</tr>
<tr>
  <td>English</td>
  <td>0.2b1</td>
  <td><a href="downloads/0.2b1/instantbird-0.2b1.en-US.win32.zip"><img alt="" src="images/ico-win.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.2b1/instantbird-0.2b1.en-US.mac.dmg"><img alt="" src="images/ico-osx.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.2b1/instantbird-0.2b1.en-US.linux-i686.tar.bz2"><img alt="" src="images/ico-tux.png" /><span>Download</span></a></td>
</tr>
</table>
<p></p>

<p style="margin-top: 30px;">You can download <a href="https://addons.instantbird.org/">addons</a> for this version of Instantbird at <a href="https://addons.instantbird.org/">addons.instantbird.org</a>.</p>

<p>As Instantbird is an open source project, you can freely <a href="downloads/0.2b1/instantbird-0.2b1.src.tgz">download the source code</a> and modify it.</p>

<p style="margin-top: 60px;">Support for several languages will come in the next release.</p>

<h2 class="borderbottom">What's new?</h2>

<ul class="whatsnewbullets">

<li>New features:<ul>
 <li><strong>New tabs</strong>. This release has a new tab system inspired from the tabs of Firefox 3.5. It is now possible to have several conversation windows. It's possible to reorder tabs with a simple drag&amp;drop. It is possible to detach a tab to move it into a new window. When the window is too small to hold all the tabs, it's possible to scroll in the list of tabs.</li>
 <li><strong>Preferences window</strong>: Instantbird has finally got its preferences window. Even though it will look very familiar to users of Firefox or Thunderbird, it contains lots of options that are very specific to Instantbird.</li>
 <li><strong>Visual refresh</strong>: The conversations windows and the account manager have been visually simplified to improve their usability, especially when resized to small windows.</li>
 <li><strong>Auto-adaptative textbox</strong>: The input box in conversations will automatically take a size that is suitable based on the size of the window and the amount of text entered.</li>
 <li><strong>Lots of minor improvements</strong>, among them:<ul>
  <li><strong>Account manager improvements</strong>. The account manager has been slightly enhanced in several ways: addition of a context menu, drag&amp;drop reordering of accounts, better default actions when double clicking, indication of how long an account has been connected, ...</li>
  <li><strong>Notifications</strong>. Pop-up notifications (using Growl on Mac) of messages arriving when conversation windows are inactive. (Turned off by default.)</li>
  <li><strong>Custom font</strong>. It's now possible to customize the font, size and color of the text of your messages.</li>
  <li><strong>Join chats</strong> is now usable with more protocols (XMPP, ...). It used to work only with IRC.</li>
  <li><strong>Menus cleanup</strong>. Items are more likely to be where you expect them. Menus finally work correctly from any window on Mac.</li>
  <li><strong>Mobile status</strong> is displayed in the buddy list and on conversation tabs.</li>
  <li>Warning when exiting Instantbird if there are new unread IMs. (Can be turned off through a pref.)</li>
  <li>Improved topic notification bar. It's now easy to change the topic of an IRC channel, just double click on the current topic to edit it.</li>
  <li>... (about 190 code changes since alpha 1, see <a href="ChangeLog-0.2a1-b1">ChangeLog since 0.2 Alpha 1</a>)</li>
 </ul></li>
</ul></li>

<li>New features already in <a href="download-0.2a1.html">Instantbird 0.2 alpha 1</a>:<ul>
 <li><strong>Protocol plugins</strong> can be loaded as extensions. See our <a href="http://blog.instantbird.org/a9-instantbird-0-2-feature-preview-protocols-as-extensions.html">blog post</a> for more details.</li>
 <li><strong>Localizability</strong>: it is now possible to translate Instantbird.</li>
 <li><strong>Conversation window improvements</strong>:<ul>
  <li><strong>Message filtering</strong>. For security, undesired HTML markup is filtered out of IMs before displaying them.</li>
  <li><strong>Smileys</strong>. Emoticons are now replaced by images, and there is a theme system for these sets of images.</li>
  <li><strong>Message styles</strong>. Styles similar to the ones of Adium can be used with Instantbird.</li>
  <li><strong>Context menu</strong> with search engines integration.</li>
  <li><strong>Improved copying of messages</strong>. When selecting several messages in a conversation and copying them to the clipboard, they will be formatted in a way suitable for pasting it as a citation, for example in an email.</li>
  <li>Under the hood:<ul>
    <li>The preference system of libpurple has been plugged into the Mozilla preference system. Preferences of libpurple are now accessible from about:config.</li>
    <li><a href="http://blog.instantbird.org/a10-instantbird-0-2-feature-preview-localizability.html">Gettext has been replaced</a>.</li>
  </ul></li>
 </ul></li>
</ul></li>
<li><strong>Updated</strong>: Instantbird 0.2b1 is based on libpurple 2.6.3 and Mozilla 1.9.2b5pre.</li>
<li><strong>Improved stability</strong>: we used the crash reports that we got from the 0.1.* and 0.2a1 releases and nightly builds to fix bugs that resulted in crashes.</li>
<li>And more... read the full <a href="ChangeLog-0.2b1">ChangeLog</a> for details.</li>
</ul>

<h2 class="borderbottom">Known issues</h2>

<ul>
<li>People using a Google Talk account from <a href="http://www.google.com/a/help/intl/en/index.html">Google Apps</a> won't be able to connect it with this version of Instantbird.</li>
</ul>

<h2 class="borderbottom">Older versions</h2>
<p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

</div>

<?php readfile('footer.inc.php'); ?>
