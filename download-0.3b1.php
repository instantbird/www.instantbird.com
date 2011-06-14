<?php
$title = 'Instantbird 0.3 beta 1';
include('header.inc.php');
?>

<div id="page">

<h1>Instantbird 0.3 beta 1</h1>

  <p>Instantbird 0.3 is almost finished. This release is the first localized preview of what we have been working on for months. Give it a try, play with it, and <a href="https://bugzilla.instantbird.org/">report bugs</a>! If you want to follow our development effort more closely, you may also be interested in <a href="http://blog.instantbird.org/a6-nightly-builds-available.html">nightly builds</a>.</p>

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
<?php
$version = '0.3b1';
$version_locales = array('cs', 'de', 'en-US', 'es', 'fr', 'nl', 'pl', 'ru', 'sk', 'uk');
foreach ($version_locales as $code) {
  echo "        <tr>
          <td>".$locales_names[$code]."</td>
          <td>$version</td>
          <td><a href=\"".download_url($version, 'windows', $code)."\"><img alt=\"\" src=\"theme/ico-win.png\" /><span>Download</span></a></td>
          <td><a href=\"".download_url($version, 'mac', $code)."\"><img alt=\"\" src=\"theme/ico-osx.png\" /><span>Download</span></a></td>
          <td><a href=\"".download_url($version, 'linux', $code)."\"><img alt=\"\" src=\"theme/ico-tux.png\" /><span>Download</span></a></td>
        </tr>

";
}
?>
</table>
<p></p>

<p style="margin-top: 30px;">You can download <a href="https://addons.instantbird.org/">addons</a> for this version of Instantbird at <a href="https://addons.instantbird.org/">addons.instantbird.org</a>.</p>

<p>As Instantbird is an open source project, you can freely <a href="downloads/0.3b1/instantbird-0.3b1.src.tgz">download the source code</a> and modify it.</p>

<h2 class="borderbottom">What's new?</h2>

<ul class="whatsnewbullets">

<li>New features:<ul>
 <li>Users can now set their <strong>buddy icon</strong> and the <strong>display name</strong> of their accounts right on the contacts list.</li>
 <li>New <strong>information toolbar at the top of the conversation UI</strong>, showing the buddy icon, display name and current status of your contact. In addition, you can switch the buddy you're talking to by clicking on the protocol icon.</li>
 <li>The conversation <strong>tabs styling</strong> has been <strong>updating</strong> to match Firefox 4, and users of recent Windows version is appreciate some <strong>Aero glass effects</strong>.</li>
 <li>Bubbles, the default message theme, has received <a href="http://blog.instantbird.org/c42-introducing-time-bubbles.html" title="Instantbird blog: Introducing Time Bubbles">new time-related features</a>, see our blog post for details.</li>
 <li>(Windows 7 only) <strong>Jumplist support</strong> to quickly change the status.</li>
 <li><strong>The contact list is sorted</strong> alphabetically (both groups and contacts appear sorted).</li>
 <li>Lots of minor improvements, among them:<ul>
  <li>You can now quickly jump to the n-th tab using &lt;modifier&gt;+&lt;n&gt; in the conversation window, where &lt;modifier&gt; is ctrl on Windows/Linux and Command on Mac.</li>
  <li>A help command ('/help') was added to quickly and easily see which commands are available for the current conversation.</li>
  <li>... (over 90 code changes since alpha 2, see <a href="ChangeLog-0.3a2-b1">ChangeLog since alpha 2</a>).</li>
 </ul></li>
</ul></li>

<li>New features already in <a href="download-0.3a2.html">Instantbird 0.3 alpha 2</a>:<ul>
 <li><strong>Contact merging</strong>: If you talk to the same person on multiple IM networks you can now combine the buddies from each network into a single contact. When opening a new chat the buddy that is online will be chosen automatically and the conversation window will automatically switch buddies if they switch to a different IM network.</li>
 <li><strong>Tags</strong>: Tags will be used to replace the groups in the buddy list. Tags can be hidden by clicking the "x" on the right side of the buddy list, all buddies from this tag will go into an "Other Contacts" tag automatically, which is shown at the bottom of the buddy list.</li>
 <li>The buddy list can now be ...<ul>
  <li>closed on Mac without Instantbird quitting and reopened from the Dock.</li>
  <li>minimized to tray on Windows and Linux. By default close (hitting the 'x') on the buddy list will minimize to tray, this can be changed in the preferences.</li>
 </ul></li>
 <li>Lots of minor improvements, among them:<ul>
  <li>Unknown status is now differentiated from offline status with different icons.</li>
  <li>Dark variant of the "Simple" skin.</li>
  <li>Nicer animations.</li>
  <li>... (over 50 code changes since alpha 1, see <a href="ChangeLog-0.3a1-a2">ChangeLog between alpha 1 and alpha 2</a>).</li>
 </ul></li>
</ul></li>

<li>New features already in <a href="download-0.3a1.html">Instantbird 0.3 alpha 1</a>:<ul>
 <li><strong>Twitter support</strong>: When the twitter account is connected, a timeline conversation automatically opens. If the conversation is closed by the user, it's reopened automatically when new messages arrive. The user should disconnect the account from the account manager to prevent new messages from being displayed.<br />There's a "track" advanced option that allows to specify keywords to track. This is a comma separated list of keywords. Comma means OR, space inside a
keyword means AND.</li>
 <li>Under the hood: Protocol plugins can now be implemented in JavaScript.</li>
</ul></li>

<li><strong>Updated</strong>: Instantbird 0.3a2 is based on libpurple 2.7.11 and Mozilla 2.0.2pre which brings great <a href="https://developer.mozilla.org/en/Firefox_4_for_developers">new possibilities for add-on developers</a> (<a href="https://developer.mozilla.org/en/Extensions/Bootstrapped_extensions">restartless add-ons for example</a>).</li>
<li><strong>Improved stability</strong>: we used the crash reports that we got from the 0.2 and 0.3 alpha releases and nightly builds to fix bugs that resulted in crashes.</li>
<li>And more... read the full <a href="ChangeLog-0.3b1">ChangeLog</a> for details.</li>
</ul>

<h2 class="borderbottom">Known issues</h2>

<ul>
<li>Twitter dumps too much debug information to the error console.</li>
</ul>

<h2 class="borderbottom">Older versions</h2>
<p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

</div>

<?php readfile('footer.inc.php'); ?>
