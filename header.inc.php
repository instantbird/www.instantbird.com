<?php
$latest_major_version = '0.2';
$latest_minor_version = '0.2';
$latest_minor_version_locales = array('en-US', 'fi', 'fr', 'pl', 'ru');

$locales_names = array(
  'cs' => 'Czech',
  'de' => 'German',
  'en-US' => 'English',
  'es' => 'Spanish',
  'fi' => 'Finnish',
  'fr' => 'French',
  'nl' => 'Dutch',
  'pl' => 'Polish',
  'ru' => 'Russian',
  'sk' => 'Slovak',
  'uk' => 'Ukrainian'
);

function get_preferred_locale()
{
  global $latest_minor_version_locales;

  if (!isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    return 'en-US';

  $locales = array();
  foreach ($latest_minor_version_locales as $locale)
    $locales[strtolower($locale)] = $locale;

  foreach (explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']) as $lang) {
    $locale = explode(';', $lang);
    $locale = strtolower($locale[0]);
    if (isset($locales[$locale]))
      return $locales[$locale];
  }

  return 'en-US';
}

function get_preferred_os()
{
  $user_agent = $_SERVER['HTTP_USER_AGENT'];
  if (strpos($user_agent, 'Mac') !== FALSE)
    return 'mac';
  if (strpos($user_agent, 'Linux') !== FALSE)
    return 'linux';
  return 'windows';
}

function download_url($version, $os, $locale)
{
  if ($os == 'src')
    $suffix = 'src.tgz';
  else {
    $os_suffix = array('windows' => 'win32.installer.exe', 'mac' => 'mac.dmg', 'linux' => 'linux-i686.tar.bz2');
    $suffix = $locale.'.'.$os_suffix[$os];
  }
  return "downloads/$version/instantbird-$version.$suffix";
}

function download_url_auto()
{
  global $latest_minor_version;
  $locale = get_preferred_locale();
  $os = get_preferred_os();
  return download_url($latest_minor_version, $os, $locale);
}

function download_button()
{
  global $latest_minor_version, $locales_names;
  $os_info = array('windows' => array('name' => 'Windows', 'size' => '7.6MB'),
                   'linux' => array('name' => 'Linux', 'size' => '10MB'),
                   'mac' => array('name' => 'Mac OS X', 'size' => '19MB'));
  $version = $latest_minor_version;
  $locale = get_preferred_locale();
  $os = get_preferred_os();

  $url = download_url($version, $os, $locale);
  $language = $locales_names[$locale];
  $os_name = $os_info[$os]['name'];
  $dl_size = $os_info[$os]['size'];

  echo "        <a href=\"$url\" id=\"download-button\">
          <div id=\"download-button-box\">
          <span id=\"download-title\">Get Instantbird - Free</span>
          <span id=\"download-description\">Version $version, $language<br/>
          $os_name ($dl_size)</span></div>
        </a>
";
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta content="text/html; charset=UTF-8" http-equiv="content-type" />
  <title><?php if (isset($title)) echo $title; else echo 'Instantbird';?></title>
  <link rel="stylesheet" type="text/css" href="theme/home.css" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="alternate" type="application/rss+xml" title="Blog@instantbird.org" href="http://blog.instantbird.org/flux.rss" />
</head>

<body>

  <div id="shadow">
    <div id="main">
      <div id="navigation">
        <a href="/" id="logo-top"><span>Home</span></a>
        <span></span><a href="http://blog.instantbird.org/">News</a><a href="https://addons.instantbird.org/">Add-ons</a><a href="faq.html">F.A.Q.</a><a href="https://wiki.instantbird.org/">Wiki</a><a href="about.html">About</a>
      </div>

