<?php
$delayHeader = TRUE;
include('header.inc.php');
$about_bundle = new bundle('about');
$title = 'Instantbird - '.$about_bundle->_('aboutPageTitleSuffix');

echo head().__('      <div id="page" class="condensed">

        <img alt="_(aboutInstantbird)" src="images/about-logo.png" id="about-logo" />

        <h1>_(aboutInstantbird)</h1>

        <h2>_(simpleAndPowerful) <a href="http://www.instantbird.org/">_(learnMoreLink)</a>.</h2>


        <h2 class="borderbottom"><a name="get_in_touch" class="no-link">_(getInTouch)</a></h2>

        <div id="about-bug">
          <h3 class="first-title">_(foundSomethingThatCouldBeImproved)</h3>
          <p>_(fileABugPlease)</p>
        </div>
        
        <div id="about-irc">
          <h3>_(unansweredQuestion)</h3>
          <p>_(joinUsOnIRCorEmailUs)</p>
          <p>_(warningPublicArchives)</p>
        </div>


        <h2 class="borderbottom">_(whoMakesInstantbird)</h2>

        <p>_(teamOfMotivatedIndividuals)</p>

        <div id="florian" class="team">
          <h3><a href="about-flo.html">Florian Qu&egrave;ze</a></h3>
          <p>Instantbird Guru<br/>
          Email: <a href="mailto:flo@instantbird.org">flo@instantbird.org</a><br/>
          IRC: flo</p>
        </div>

        <div id="quentinc" class="team">
          <h3>Quentin Castier</h3>
          <p>Pixel Fighter<br/>
          Email: <a href="mailto:idechix@instantbird.org">idechix@instantbird.org</a><br/>
          IRC: idechix</p>
        </div>

        <div id="quentinr" class="team">
          <h3>Quentin Raynaud</h3>
          <p>System Overlord<br/>
          Email: <a href="mailto:even@instantbird.org">even@instantbird.org</a><br/>
          IRC: Even</p>
        </div>

        <div id="contributors" class="team">
          <h3>_(ourContributors)</h3>
          <p>_(individualsAndOrganizations)<br/>
          <a href="thanks.html">_(thanksLink)</a></p>
        </div>

        <div id="you" class="team">
          <h3>_(andYou)</h3>
          <p>_(manyWaysToGetInvolved)<br/>
          <a href="http://www.instantbird.org/#getinvolved">_(learnMoreLink).</a></p>
        </div>


        <h2 class="borderbottom">_(press)</h2>

        <p>_(weHaveResourcesToHelpYou)</p>
        <p>_(feelFreeToContactUs)</p>
      </div>
', $about_bundle, array('&fileABugLink;' => '<a href="http://bugzilla.instantbird.org">'.$about_bundle->_('fileABugLink').'</a>',
                        '&FAQLink;' => '<a href="faq.html">'.$about_bundle->_('FAQLink').'</a>',
                        '&mailingListLink;' => '<a href="mailto:contact@instantbird.org">contact@instantbird.org</a>',
                        '&IRCChannelLink;' => '<a href="irc://irc.mozilla.org/#instantbird">#instantbird</a>',
                        '&imageResourcesLink;' => '<a href="press-images.html">'.$about_bundle->_('imageResourcesLink').'</a>',
                        '&logosLink;' => '<a href="press-images.html#logo">'.$about_bundle->_('logosLink').'</a>',
                        '&screenshotsLink;' => '<a href="press-images.html">'.$about_bundle->_('screenshotsLink').'</a>',
                        '&contactUsLink;' => '<a href="#get_in_touch">'.$about_bundle->_('contactUsLink').'</a>')).
footer();
?>
