<?php
$title = 'Instantbird 0.1.2';
include('header.inc.php');
?>

<div id="page">

<h1>Instantbird 0.1.2</h1>

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
  <td>0.1.2</td>
  <td><!--<a href="downloads/0.1.2/instantbird-0.1.2.en-US.win32.zip"><img alt="" src="theme/ico-win.png" /><span>Download</span></a>--></td>
  <td><a href="downloads/0.1.2/instantbird-0.1.2.en-US.mac.dmg"><img alt="" src="theme/ico-osx.png" /><span>Download</span></a></td>
  <td><a href="downloads/0.1.2/instantbird-0.1.2.en-US.linux-i686.tar.bz2"><img alt="" src="theme/ico-tux.png" /><span>Download</span></a></td>
</tr>
<tr>
  <td>English</td>
  <td>0.1.2.1</td>
  <td><a href="downloads/0.1.2.1/instantbird-0.1.2.1.en-US.win32.zip"><img alt="" src="theme/ico-win.png" /><span>Download</span></a></td>
  <td></td>
  <td></td>
</tr>
<tr><td colspan="5">Version 0.1.2.1 is just a quick fix to a crash that happened, on Windows only, <br/>when connecting some MSN accounts.</td></tr>
</table>
<p></p>
<p style="margin-top: 30px;">You can download some <a href="http://addons.instantbird.org/">dictionaries</a> for the spell-checking feature in Instantbird.</p>

<p>As Instantbird is an open source project, you can freely <a href="downloads/0.1.2/instantbird-0.1.2-src.tgz">download the source code</a> and modify it.</p>

<p style="margin-top: 60px;">Support for many languages will come in the next releases. Want to <a href="http://www.instantbird.org/about_translations.html">help</a>?</p>


<h2 class="borderbottom">What's new?</h2>

<p>This version is more a stability/bugfix release than a feature release.</p>

<ul>
 <li style="margin-bottom: 10px;"><strong>Updated</strong>: Instantbird 0.1.2 is now based on libpurple 2.4.3 and Mozilla 1.9.0.1.</li>
 <li style="margin-bottom: 10px;"><strong>Improved stability</strong>: we fixed the outstanding bugs that resulted in crashes. We also turned on breakpad to get more data on crashes.</li>
 <li style="margin-bottom: 10px;"><strong>Detailed tooltips</strong>: the tooltips of the buddy list now contain detailed information.</li>

 <li style="margin-bottom: 10px;"><strong>Under the hood</strong>: On this release we spent a lot of time on the build system. Instantbird can now be built like any other mozilla application. It doesn't require to build dependencies separately any more.</li>
</ul>

<p>Read the full <a href="ChangeLog-0.1.2">ChangeLog</a>.</p>


<h2 class="borderbottom">Known issues</h2>

<ul>
<li>On Windows, the DNS SRV queries don't work so you will need to enter the Connect Server manually for XMPP accounts.</li>
<li>On Windows, connecting an MSN account with version 0.1.2 may crash, version 0.1.2.1 should fix the problem.</li>
<li>People using a Google Talk account from <a href="http://www.google.com/a/help/intl/en/index.html">Google Apps</a> won't be able to connect it with this version of Instantbird.</li>
</ul>

<h2 class="borderbottom">Older versions</h2>
<p>You can access the <a href="download-archive.html">archives</a> to download the older versions of Instantbird.</p>

</div>

<?php echo footer(); ?>
