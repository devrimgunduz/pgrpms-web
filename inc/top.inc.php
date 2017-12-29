﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>
      PostgreSQL RPM Repository (with Yum)

    </title>
<META NAME="ROBOTS" CONTENT="NOFOLLOW, NOARCHIVE">
    <link rel="shortcut icon" href="/favicon.ico" />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="/favicon.ico" />

    <style type="text/css" media="screen" title="Normal Text">@import url("/layout/css/blue/fixed.css");</style>

    <link rel="alternate stylesheet" media="screen" href="/layout/css/blue/fixed_large.css" type="text/css" title="Large Text" />
  <style type="text/css">
<!--
h3 {
	font-size: 1em;
}
-->
</style></head>
  <body>
   <div id="pgContainerWrap">

    <div id="pgContainer">
      <span class="txtOffScreen"><a href="#pgContent" title="Skip site navigation" accesskey="1">Skip site navigation</a> (1)</span>
      <span class="txtOffScreen"><a href="#pgContentWrap" title="Skip section navigation" accesskey="2">Skip section navigation</a> (2)</span>
      <div id="pgHeaderContainer">

		<!--
	    <div id="pgSearch">
          <form method="get" action="http://search.PostgreSQL.org/www.search">

            <div>
	      <h2 class="pgBlockHide"><label for="q">Search</label></h2>
              <input type="hidden" name="ul" value="https://www.PostgreSQL.org/%" /> <input type="hidden" name="cs" value="utf-8" /> <input type="hidden" name="fm" value="on" /> <input type="hidden" name="st" value="" /> <input type="hidden" name="gr" value="on" /> <input type="hidden" name="o" value="0" /> <input type="hidden" name="ps" value="20" /> <input type="hidden" name="s" value="rate" /> <input type="hidden" name="fm" value="on" /> <input type="hidden" name="cs" value="utf-8" /> <input id="q" name="q" type="text" size="20" maxlength="255" onfocus="if( this.value==this.defaultValue ) this.value='';" value="Search" /> <input id="submit" name="submit" type="submit" value="Search" />

            </div>
          </form>
 	  <h2 class="pgBlockHide">Peripheral Links</h2>
          <div id="pgSearchNav">
            <ul id="pgSearchNavList">
              <li>
                Text Size: <a href="#" onkeypress="return false;" onclick="setActiveStyleSheet('Normal Text'); return false;" title="Normal Text Size">Normal</a> / <a href="#" onkeypress="return false;" onclick="setActiveStyleSheet('Large Text'); return false;" title="Large Text Size">Large</a>

              </li>
              <li>
                <a href="/about/donate">Donate</a>
              </li>
              <li>
                <a href="/about/contact">Contact</a>
              </li>
            </ul>

          </div>
        </div>
		--->




        <div id="pgHeader">
	  <h2 class="pgBlockHide">Header And Logo</h2>
          <div id="pgHeaderLogoLeft">
            <a href="/" title="PostgreSQL"><img src="/layout/images/hdr_left.png" width="230" height="80" alt="PostgreSQL" /></a>
          </div>
          <div id="pgHeaderLogoRight">

            <span class="txtOffScreen">|</span>
            <a href="https://www.PostgreSQL.org/" title="The world's most advanced open source database."><img src="/layout/images/hdr_right.png" width="210" height="80" alt="The world's most advanced open source database." /></a>
          </div>
        </div>
  	<h2 class="pgBlockHide">Site Navigation</h2>
        <div id="pgTopNav">
          <div id="pgTopNavLeft">
            <img src="/layout/images/nav_lft.png" width="7" height="23" alt="" />

          </div>
          <div id="pgTopNavRight">
            <img src="/layout/images/nav_rgt.png" width="7" height="23" alt="" />
          </div>
          <ul id="pgTopNavList"> <li> <a href="/" title="Home">Home</a> </li>
				<li> <a href="/howtoyum.php" title="Yum Documentation">Yum Howto</a></li>
				<li> <a href="/repopackages.php" title="Repo RPMs">Repo RPMs</a></li>
				<li> <a href="https://redmine.PostgreSQL.org/projects/pgrpms/" title="Issue Tracker" target="_new">Issue Tracker</a></li>
				<li><a href="/rpmchart.php" title="Availability Status">RPM Chart (Status)</a></li>
				<li><a href="/packages.php" title="Download">Available Packages</a></li>
				<li><a href="/contact.php">Contact Us</a></li>
				<li><a href="/thanks.php">Special Thanks</a></li>
				<li> <a href="/livecd.php" title="Live CD">Live CD</a></li>
				<li><a href="https://git.PostgreSQL.org/gitweb/?p=pgrpms.git" target="_blank">Git Repo</a></li>
	</ul>
        </div>
      </div>
      <div id="pgContent">
<div id="pgSideWrap">
<div id="pgSideNav">
<h2 class="pgBlockHide">Section Navigation</h2>


﻿
<ul>
	<li>&nbsp;&nbsp;&nbsp;<span style="text-decoration:underline;">News:</span><br /><br />
</li>
	<li><a href="/news-fedora27-packages-released.php">Fedora 27 packages released.</a></li>
	<li><a href="/news-10-packages-released.php">PostgreSQL 10 RPMs released</a></li>
       <li><a href="/news-packagelist.php">Full package list</a></li>
	<li><a href="/news-fedora26-packages-released.php">Fedora 26 packages released.</a></li>
	<li><a href="/news-fedora25-packages-released.php">Fedora 25 packages released.</a></li>
	<li><a href="news-9.6-packages-released.php">PostgreSQL 9.6 packages released.</a></li>
	<li><a href="news-9.5-packages-released.php">PostgreSQL 9.5 packages released.</a></li>
	<li><a href="/news-git-repo-move.php">Moved to git</a></li>
	<li><a href="/news-9.4-packages-released.php">9.4 packages released.</a></li>
        <li><a href="/news-rhel7-packages-released.php"> RHEL 7 RPMs released. </a></li>
      <li><a href="/news-rsync.php">Rsync support is now available</a></li>
      <li><a href="/news-oracle-linux-support-added.php">Support for Oracle Linux is now available.</a></li>
      <li><a href="/news-reporpmsv1.php">Repository RPMs are Out </a></li>
      <li><a href="/news-rhel6-packages-released.php">RHEL 6 packages Released.</a></li>
      <li><a href="/newsarchive.php">News Archive &gt;&gt;</a></li>
</ul>

</div>
</div>

<div id="pgContentWrap">
  <div id="content">
