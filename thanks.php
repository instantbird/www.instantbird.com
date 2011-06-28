<?php
$delayHeader = TRUE;
include('header.inc.php');
$t_bundle = new bundle('thanks');
$title = 'Instantbird - '.$t_bundle->_('thanksPageTitleSuffix');
echo head().__('
      <div id="page">

        <h1>_(thanks)</h1>

        <h2>_(toAllThoseWhoMadeThisProjectPossible)</h2>

        <h2 class="borderbottom">_(organizations)</h2>

        <p>_(specialThanksTo)</p>
          
        <ul>
          <li id="thanks-mozilla">_(mozillaCommunityForAwesomePlatform)</li>
          <li id="thanks-pidgin">_(pidginTeamForLibpurple)</li>
          <li id="thanks-creinnov">_(creInnovForMaterialSupport)</li>
        </ul>

        <h2 class="borderbottom">_(individuals)</h2>

        <ul id="thanks-individuals">
          <li>Alexandre A.</li>
          <li>Antoine L.</li>
          <li>Benedikt P.</li>
          <li>Bryce V.</li>
          <li>Charles M.</li>
          <li>Collin B.</li>
          <li>Florian J.</li>
          <li>Gervase M.</li>
          <li>Julien R.</li>
          <li>Mark Y.</li>
          <li>Olivier O.</li>
          <li>Romain B.</li>
          <li>Sadrul H. C.</li>
          <li>Simon N.</li>
          <li>Vincent C.</li>
          <li>Vincent O.</li>
          <li>_(translatorsInAboutDialogs)</li>
          <li>_(allOthers)</li>
         </ul>

      </div>
', $t_bundle, array('&mozillaLink;' => '<a href="http://www.mozilla.org/">Mozilla</a>',
                    '&awesomePlatformLink;' => '<a href="http://www.mozilla.org/projects/powered-by.html">'.$t_bundle->_('awesomePlatformLink').'</a>',
                    '&pidginLink;' => '<a href="http://pidgin.im/">Pidgin</a>',
                    '&libpurpleLink;' => '<a href="http://developer.pidgin.im/wiki/WhatIsLibpurple" title="What is libpurple?">libpurple</a>',
                    '&creInnovLink;' => '<a href="http://cre-innov.univ-lille1.fr/">Cre\'Innov</a>')).
  footer();
?>
