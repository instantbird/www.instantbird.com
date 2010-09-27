<?php
$title = 'Instantbird 0.2 alpha 1';
include('header.inc.php');
?>

<div id="page">

<h1>Instantbird 0.2 alpha 1</h1>

<p>Instantbird 0.2 is not yet finished. This release is a first preview of what we have been working on in the last few months. Don't hesitate to try it, play with it, and <a href="https://bugzilla.instantbird.org/">report bugs</a>! If you want to follow our development effort more closely, you may also be interested in <a href="http://blog.instantbird.org/a6-nightly-builds-available.html">nightly builds</a>.</p>

<h2 class="borderbottom">Download</h2>

<p>Instantbird runs on Windows, Mac OS X and Linux platforms.</p>
<p>Please see the <a href="system-requirements.html">minimum system requirements</a> needed to run Instantbird.</p>

<table id="table-download">
<tr>
  <th>Language</th>
  <th>Version</th>
  <th><img alt="" src="theme/ico-win.png" />Windows</th>
  <th><img alt="" src="theme/ico-osx.png" />Mac&nbsp;OS&nbsp;X</th>
  <th><img alt="" src="theme/ico-tux.png" />Linux</th>
</tr>
<tr>
  <td>English</td>
  <td>0.2a1</td>
  <td><a href="downloads/0.2a1/instantbird-0.2a1.en-US.win32.zip"><img alt="" src="theme/ico-win.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.2a1/instantbird-0.2a1.en-US.mac.dmg"><img alt="" src="theme/ico-osx.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.2a1/instantbird-0.2a1.en-US.linux-i686.tar.bz2"><img alt="" src="theme/ico-tux.png" /><span>Download</span></a></td>
</tr>
</table>
<p></p>

<p style="margin-top: 30px;">You can download <a href="https://addons.instantbird.org/">addons</a> for this version of Instantbird at <a href="https://addons.instantbird.org/">addons.instantbird.org</a>.</p>

<p>As Instantbird is an open source project, you can freely <a href="downloads/0.2a1/instantbird-0.2a1.src.tgz">download the source code</a> and modify it.</p>

<p style="margin-top: 60px;">Support for many languages will come in the next releases. For this release, you may want to try the <a href="https://addons.instantbird.org/en-US/instantbird/addon/207">experimental french language pack</a>.</p>

<h2 class="borderbottom">What's new?</h2>

<ul class="whatsnewbullets">

<li>New features:<ul>
 <li><strong>Protocol plugins</strong> can be loaded as extensions. See our <a href="http://blog.instantbird.org/a9-instantbird-0-2-feature-preview-protocols-as-extensions.html">blog post</a> for more details.</li>
 <li><strong>Localizability</strong>: it is now possible to translate Instantbird. The <a href="https://addons.instantbird.org/en-US/instantbird/addon/207">experimental french language pack</a> is an example.</li>
 <li><strong>Conversation window improvements</strong>:<ul>
  <li><strong>Message filtering</strong>. For security, undesired HTML markup is filtered out of IMs before displaying them.</li>
  <li><strong>Smileys</strong>. Emoticons are now replaced by images, and there is a theme system for these sets of images.</li>
  <li><strong>Message styles</strong>. Styles similar to the ones of Adium can be used with Instantbird.</li>
  <li><strong>Context menu</strong> with search engines integration.</li>
  <li><strong>Improved copying of messages</strong>. When selecting several messages in a conversation and copying them to the clipboard, they will be formatted in a way suitable for pasting it as a citation, for example in an email.</li>
 </ul></li>
</ul></li>
<li><strong>Updated</strong>: Instantbird 0.2a1 is based on libpurple 2.5.8 (which fixes Yahoo! connection issues) and Mozilla 1.9.a1pre.</li>
<li><strong>Improved stability</strong>: we used the crash reports that we got from the 0.1.2 and 0.1.3.* releases and nightly builds to fix bugs that resulted in crashes.</li>
<li>Under the hood:<ul>
 <li>The preference system of libpurple has been plugged into the Mozilla preference system. Preferences of libpurple are now accessible from about:config.</li>
 <li>Gettext has been replaced.</li>
</ul></li>
<li>And more... read the full <a href="ChangeLog-0.2a1">ChangeLog</a> for details.</li>
</ul>

<h2 class="borderbottom">Known issues</h2>

<ul>
<li>People using a Google Talk account from <a href="http://www.google.com/a/help/intl/en/index.html">Google Apps</a> won't be able to connect it with this version of Instantbird.</li>
<li>On Windows, copying several messages from a conversation and pasting will result in broken line breaks in some applications.</li>
</ul>

<h2 class="borderbottom">Older versions</h2>
<p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

</div>

<?php readfile('footer.inc.php'); ?>
