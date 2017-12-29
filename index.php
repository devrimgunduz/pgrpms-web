<?php include "inc/top.inc.php"; ?>

    <h1>PostgreSQL RPM Building Project - Yum Repository </h1>
    <p>You will find details on PostgreSQL related RPMs for Fedora / Red Hat / CentOS / Scientific Linu / Oracle Linux / Amazon AMIx, like pgAdmin, Slony-I, PostGIS, etc.</p>
	<hr>
<!--    <h1><font color="red">(UPDATED) ATTENTION: RHEL/SL/CentOS 6 and PostgreSQL 8.4+ users:(Fri Aug 12,2011)</font></h1>
	<p>We pushed <em><b>libevent 2.X</b></em> packages to repositories, mostly for pgbouncer.
	In order to prevent conflict with the OS supplied <em><b>libevent 1.4.13</em></b> packages,
	we also pushed <em><b>compat-libevent14</em></b> RPMs to the repository. A "yum update"
	will also install <em><b>compat-libevent14</em></b>, and remove <em><b>libevent-1.4</em></b> package that
	ships with OS.</p>
	<hr>
-->
    <h1>About PostgreSQL Yum Repository</h1>
    <p>PostgreSQL RPM Building Project announced the new yum repository. With this repository, you will be able to find PostgreSQL and related RPMs for your favourite platform. Please click "<a href="/howtoyum.php">Yum Howto</a>" link at the top for help.</p>

	<p> You can pick up any combination below:</p>

    <h2>Available PostgreSQL Releases</h2>
	<ul>
<!--		<li><a href="/repopackages.php#pg10">10</a><font color="red"> <b>BETA TESTING ONLY, NOT FOR PRODUCTION</b></font></li>-->
		<li><a href="/repopackages.php#pg10">10</a></li>
		<li><a href="/repopackages.php#pg96">9.6</a></li>
		<li><a href="/repopackages.php#pg95">9.5</a></li>
		<li><a href="/repopackages.php#pg94">9.4</a></li>
		<li><a href="/repopackages.php#pg93">9.3</a></li>
		<li><a href="/repopackages.php#pg92">9.2</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg91">9.1</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg90">9.0</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg84">8.4</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg83">8.3</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg82">8.2</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg81">8.1</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li><a href="/repopackages.php#pg80">8.0</a> <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li>7.4 <b><font color="red">(no longer maintained by upstream)</font></b></li>
		<li>7.3 <b><font color="red">(no longer maintained by upstream)</font></b></li>
	</ul>

    <h2>Available Platforms</h2>
	<ul>
		<li>Red Hat Enterprise Linux/CentOS/Oracle Enterprise Linux/Scientific Linux 7</li>
		<li>Red Hat Enterprise Linux/CentOS/Oracle Enterprise Linux/Scientific Linux 6</li>
		<li>SuSE Enterprise Linux 12</li>
		<li>Fedora 27</li>
		<li>Fedora 26</li>
		<br>
		<b>Partially supported:</b>
		<br>
		<li>Amazon Linux AMI 2015.03</li>
		<br>

		<b>EOL'ed releases</b>

		<li>Red Hat Enterprise Linux 5<b><font color="red"> EOL'ed</font></b></li>
		<li>CentOS 5<b><font color="red"> EOL'ed</font></b></li>
		<li>Scientific Linux 5<b><font color="red"> EOL'ed</font></b></li>
		<li>Fedora 25<b><font color="red"> EOL'ed</font></b></li>
	</ul>

    <h2>Available Architectures</h2>
	<ul>
		<li>x86 (i386 / i586 / i686, depending on the OS version)</li>
		<li>x86_64</li>
		<li>ppcle64</li>
	</ul>


  ﻿ </div>
  </div>
</div>

<?php include "inc/bottom.inc.php"; ?>
