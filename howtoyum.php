<?php include "inc/top.inc.php"; ?>

    <h1>PostgreSQL RPM Building Project - Yum Repository Howto </h1>
<!--    <p><b>Last updated: Thu Oct 06, 2011</b></p> -->
    <p>Please click <a href="/repopackages.php" target="_new">here</a> and download the repository RPM based on your distro and PostgreSQL version you want. If you are using another PostgreSQL RPM Repository, installing files with rpm -U will be sufficient.</p>

	<p><i>The link will be opened in a new window / tab.</i></p>

    <h2>Installation procedure and details</h2>
    <p>Please find <a href="/files/PostgreSQL-RPM-Installation-PGDG.pdf">here</a> a PDF that will guide you after installing packages.</p>

    <h2>External howtos</h2>
	<p>There are some perfect howto's:
		<ul>
			<li><a href="http://people.planetpostgresql.org/devrim/index.php?/archives/82-Running-more-than-one-9.4-9.3-instance-in-parallel-on-RHEL-7.html">Running more than one 9.4 /9.3 instance in parallel on RHEL 7</a></li>
			<li><a href="http://people.planetpostgresql.org/devrim/index.php?/archives/81-Running-multiple-PostgreSQL-versions-in-parallel-on-RHEL-7.html">Running multiple PostgreSQL versions in parallel on RHEL 7</li>
			<li><a href="http://people.planetpostgresql.org/devrim/index.php?/archives/80-Installing-and-configuring-PostgreSQL-9.3-and-9.4-on-RHEL-7.html">Installing and configuring PostgreSQL 9.3 and 9.4 on RHEL 7</li>
			<li><a href="http://people.planetpostgresql.org/devrim/index.php?/archives/70-How-to-install-PostgreSQL-9.2-on-RHELCentOSScientific-Linux-5-and-6.html">How to install PostgreSQL 9.2 on RHEL/CentOS/Scientific Linux 5 and 6</li>
			<li><a href="http://people.planetpostgresql.org/devrim/index.php?/archives/67-Updated-Getting-used-to-systemd-Installing-and-running-PostgreSQL-on-Fedora-16+.html">http://people.planetpostgresql.org/devrim/index.php?/archives/67-Updated-Getting-used-to-systemd-Installing-and-running-PostgreSQL-on-Fedora-16+.html</a>
			<li><a href="http://people.planetpostgresql.org/devrim/index.php?/archives/48-What-is-new-in-PostgreSQL-9.0-RPMs.html">What's new in PostgreSQL 9.0 RPMs?</a>	
		</ul>
<!--    <h2>Important note:</h2>
	<p>In order to use PGDG repository properly, you may need to exclude postgresql packages from the repository of the distro. Here are the steps:<br />
		<ul>
			<li>As root, cd /etc/yum.repos.d
			<li>Edit distro's .repo file:
				<ul>
					<li> On Fedora, edit fedora.repo and fedora-updates.repo, [fedora] sections
					<li> On CentOS, edit CentOS-Base.repo, [base] and [updates] sections.
					<li> On Red Hat, edit edit /etc/yum/pluginconf.d/rhnplugin.conf  [main] section.
				</ul>
			<li>Add <h3>exclude=postgresql*</h3> to the bottom of the section.
		</ul><br />
		That is enough for excluding distro packages.
	</p>
-->
  ﻿ </div>
  </div>
</div>

<?php include "inc/bottom.inc.php"; ?>

