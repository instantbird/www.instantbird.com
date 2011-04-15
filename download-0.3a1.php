<?php
$title = 'Instantbird 0.3 alpha 1';
include('header.inc.php');
?>

<div id="page">

<h1>Instantbird 0.3 alpha 1</h1>

  <p>Instantbird 0.3 is not yet finished. This release is a first preview of what we have been working on in the last few months. As most of the changes are not visible yet in the user interface, it's aimed mostly at testers and add-on developers. Don't hesitate to try it, play with it, and <a href="https://bugzilla.instantbird.org/">report bugs</a>! If you want to follow our development effort more closely, you may also be interested in <a href="http://blog.instantbird.org/a6-nightly-builds-available.html">nightly builds</a>.</p>

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
  <td>0.3a1</td>
  <td><a href="downloads/0.3a1/instantbird-0.3a1.en-US.win32.zip"><img alt="" src="theme/ico-win.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.3a1/instantbird-0.3a1.en-US.mac.dmg"><img alt="" src="theme/ico-osx.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.3a1/instantbird-0.3a1.en-US.linux-i686.tar.bz2"><img alt="" src="theme/ico-tux.png" /><span>Download</span></a></td>
</tr>
</table>
<p></p>

<p style="margin-top: 30px;">You can download <a href="https://addons.instantbird.org/">addons</a> for this version of Instantbird at <a href="https://addons.instantbird.org/">addons.instantbird.org</a>.</p>

<p>As Instantbird is an open source project, you can freely <a href="downloads/0.3a1/instantbird-0.3a1.src.tgz">download the source code</a> and modify it.</p>

<p style="margin-top: 60px;">Alpha releases are not localized. If you want to download Instantbird in another language, you should <a href="download.html">download the current stable release</a>.</p>

<h2 class="borderbottom">What's new?</h2>

<ul class="whatsnewbullets">

<li>New features:<ul>
 <li><strong>Twitter support</strong>: When the twitter account is connected, a timeline conversation automatically opens. If the conversation is closed by the user, it's reopened automatically when new messages arrive. The user should disconnect the account from the account manager to prevent new messages from being displayed.<br />There's a "track" advanced option that allows to specify keywords to track. This is a comma separated list of keywords. Comma means OR, space inside a
keyword means AND.</li>
</ul></li>
 <li><strong>Updated</strong>: Instantbird 0.3a1 is based on libpurple 2.7.9 and Mozilla 2.0b11pre which brings great <a href="https://developer.mozilla.org/en/Firefox_4_for_developers">new possibilities for add-on developers</a> (<a href="https://developer.mozilla.org/en/Extensions/Bootstrapped_extensions">restartless add-ons for example</a>).</li>
<li>Under the hood:<ul>
 <li>Protocol plugins can now be implemented in JavaScript.</li>
</ul></li>
<li>And more... read the full <a href="ChangeLog-0.3a1">ChangeLog</a> for details.</li>
</ul>

<h2 class="borderbottom">Known issues</h2>

<ul>
<li>If you encounter surprising graphic errors, you can try disabling
  hardware graphic acceleration. For that,
  set <code>layers.acceleration.disabled</code>
  (and <code>gfx.direct2d.disabled</code> on Windows)
  to <code>true</code> using the advanced configuration editor.</li>
<li>Adding contacts is currently broken in MSN.</li>
</ul>

<h2 class="borderbottom">Older versions</h2>
<p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

</div>

<?php readfile('footer.inc.php'); ?>
