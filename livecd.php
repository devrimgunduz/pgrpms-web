<?php include "inc/top.inc.php"; ?>

    <h1>PostgreSQL RPM Building Project - Live CD </h1>
    <p><b>Last updated: Wed Feb 20, 2013</b></p>

   <h2>Download</h2>

  <h1>9.2 CentOS version</h1>
    <p>PostgreSQL RPM Building Project released fifth version of PostgreSQL 9.2 based Live CD, which includes 9.2.3 on CentOS 6.3. </p
    <p>You can download the  livecd from <a href="/iso/livecd-PG92-CentOS.x86-201302191621.iso">here</a>. md5sum is <a href="/iso/livecd-PG92-CentOS.x86-201302191621.iso.md5sum">here</a>
</p>
   <h1>9.0 CentOS version</h1>
    <p>PostgreSQL RPM Building Project released second version of PostgreSQL 9.0 based Live CD, which includes 9.0.2 on CentOS 5.5. <b>If you downloaded a copy from Jan 09, please update to this version</b>.</p
    <p>You can download the first version from <a href="/iso/livecd-PG90-CentOS.x86-201101100855.iso">here</a>. md5sum is <a href="/iso/livecd-PG90-CentOS.x86-201101100855.iso.md5sum">here</a>
    sha1sum is <a href="/iso/livecd-PG90-CentOS.x86-201101100855.iso.sha1sum">here</a></p>

   <h1>8.4 Fedora version</h1>
   <p>This version is dedicated to my son</p>

    <p>PostgreSQL RPM Building Project released 4th version of PostgreSQL 8.4 based Live CD, which includes 8.4.3 on Fedora 12. </p
    <p>You can download the third version from <a href="/iso/livecd-PG84-Fedora-x86-201004241117.iso">here</a>. md5sum is <a href="/iso/livecd-PG84-Fedora-x86-201004241117.iso.md5sum">here</a>
    sha1sum is <a href="/iso/livecd-PG84-Fedora-x86-201004241117.iso.sha1sum">here</a></p>
    <p>It has the same major features that 8.3 version has.</p>

   <h1>8.4 CentOS version</h1>
    <p>PostgreSQL RPM Building Project released third version of PostgreSQL 8.4 based Live CD, which includes 8.4.3 on CentOS 5.4. </p
    <p>You can download the third version from <a href="/iso/livecd-PG84-CentOS-x86-20100423.iso">here</a>. md5sum is <a href="/iso/livecd-PG84-CentOS-x86-20100423.iso.md5sum">here</a>
    sha1sum is <a href="/iso/livecd-PG84-CentOS-x86-20100423.iso.sha1sum">here</a></p>
    <p>It has the same major features that 8.4 Fedora version has.</p>


   <h1>8.3 version</h1>
   <p>You can download 4th version of Fedora 10 based PostgreSQL Live CD  <a href="/iso/livecd-PG83-Fedora-x86-200905060051.iso">here</a>. md5sum is <a href="/iso/livecd-PG83-Fedora-x86-200905060051.iso.md5sum">here.</a> . Its size is 665040896 bytes. </p> 

   <p>This version is dedicated to my wife, and today is her birthday. Happy birthday Gülten!</p>

<p>The previous versions of this live CD has been downloaded thousands of time, per web server logs.</p>
<h3>Note: Live CD *may not* start X under some hardware. To solve the problem, edit grub parameters and add "selinux=0" (without quotes).</h3>
    <h2>Changes in the new version</h2>
	<p>
	<ul>
		<!--<li>Fixed a problem while booting iso under Vmware Workstation.</li>-->
		<li>Update to PostgreSQL 8.4.3</li>
		<li>Many new packages</li>
		<li>Updated versions of almost all of the packages</li>
	</ul>
	</p>

    <h2>Major features</h2>
	<p>
	<ul>
		<li>PostgreSQL 8.4.3</li>
		<li>Option to install the image to USB stick</li>
		<li>Option to install image to hard drive</li>
		<li>Option to add an encrypted home directory while burning the iso to usb stick.</li>
		<li>Many PostgreSQL related software is preinstalled and ready to run.</li>
		<li>Improved hardware support, including laptops.</li>
	</ul>
	</p>

	<h2>Information</h2>
	<p>
	<ul>
		<li>Please use <b>postgres</b> as the desktop username.</li/>
		<li>Root password is <b>postgresql</b>, if you need.</li>
		<li>PostgreSQL and httpd is started on boot, so you will also be able to use phpPgAdmin.</li>
		<li>pgadmin3 is pre-configured, so you can begin using it quickly.</li>
		<li>Versions: Apache 2.2.14, PHP 5.3.2	, PostgreSQL 8.4.3, Gnome 2.28, kernel 2.6.32, Pidgin 2.6.6, Evolution 2.28.3, Firefox 3.5.9.</li>
	</ul>
	</p>
	<p>If you want to create an encrypted home directory on the usb stick, then run:</p>

	<p><b><font color="red">sudo livecd-iso-to-disk --home-size-mb 1024 /path/to/livecd.iso /dev/theusbstick</font></b>
		<p></p>	

	<p>

    <h2>How to build your own live CD</h1>
	<p>Preparing a live CD, based on PGDG RPMS, is easy for Fedora (10) users. We <a href="http://svn.postgresql.org/browser/livecd" target="_blank">prepared</a> kickstart files, which will do all the work for you. Also, you can install the contents to a disk after boot. You will find an icon on Desktop for that.</p>

	<p>You will need to install livecd-tools RPM. After downloading kickstart file, run the following as root :</br></p> 
	
	<p><b><font color="red">livecd-creator --config=PG84-Fedora-x86.ks (PG83... if you want 8.3 live CD) on Fedora </font></b></p>
	<p><b><font color="red">LANG=C livecd-creator --config=PG84-CentOS-x86.ks (on CentOS) </font></b></p>

	<p><i>There are about 700 packages to be downloaded, this build process may take some time, depending on your connection.</i></p>
  ﻿ </div>
  </div>
</div>

<?php include "inc/bottom.inc.php"; ?>

