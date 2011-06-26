<?php
include('header.inc.php');
echo __(' <div id="page">

  <h1>_(imageResources)</h1>
  <p style="margin-left: -20px">_(useThese)</p>

  <h2 class="borderbottom">_(lookAndFeel)</h2>
  <img src="press/screenshots/0.2-windows-screenshot-homepage-big.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-macosx-screenshot-homepage-big.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-linux-screenshot-homepage-big.png" alt="_(instantbirdScreenshot)" />

  <h2 class="borderbottom">_(crossPlatform)</h2>
  <img src="press/screenshots/0.2-cross-platform-big.png" alt="_(instantbirdScreenshot)" />

  <h2 class="borderbottom">_(conversationWindow)</h2>
  <img src="press/screenshots/0.2-bubblestheme-cropped.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-bubblestheme.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-darktheme-cropped.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-darktheme.png" alt="_(instantbirdScreenshot)" />

  <img src="press/screenshots/0.2-chatroom1.png" alt="_(instantbirdScreenshot)" />

  <img src="press/screenshots/0.2-findbar.png" alt="_(instantbirdScreenshot)" />

  <h2 class="borderbottom">_(preferencesWindow)</h2>
  <img src="press/screenshots/0.2-prefwindow-general.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-prefwindow-themes.png" alt="_(instantbirdScreenshot)" />
  <img src="press/screenshots/0.2-prefwindow-advanced.png" alt="_(instantbirdScreenshot)" />

  <h2 class="borderbottom"><a name="logo" class="no-link">_(logo)</a></h2>
  <div class="list-sizes">
    <h3 class="first-title">_(instantbirdLogo)</h3>

    <ul>
      <li><a href="press/logos/instantbird-64.png">64x64</a></li>
      <li><a href="press/logos/instantbird-128.png">128x128</a></li>
      <li><a href="press/logos/instantbird-256.png">256x256</a></li>
      <li><a href="press/logos/instantbird-512.png">512x512</a></li>
    </ul>

    <img alt="_(instantbirdLogo)" src="press/logos/instantbird-128.png" />
  </div>

  <div class="list-sizes">
    <h3>_(instantbirdLogoWithText)</h3>

    <ul>
      <li><a href="press/logos/instantbird-text-256x64.png">256x64</a></li>
      <li><a href="press/logos/instantbird-text-512x128.png">512x128</a></li>
      <li><a href="press/logos/instantbird-text-1024x256.png">1024x256</a></li>
      <li><a href="press/logos/instantbird-text-2048x512.png">2048x512</a></li>
    </ul>

    <img alt="_(instantbirdLogoWithText)" src="press/logos/instantbird-text-512x128.png" />
  </div>

 </div>
', new bundle('press-images')).footer();
?>
