<?php include "inc/top.inc.php"; ?>

    <h1> PostgreSQL 8.4devel is ready for testing</h1>
	<p>
	If you are a Fedora-9 or RHEL/CentOS 5 user and want to test 
	new features of PostgreSQL 8.4 and help development team, you 
	may use the packages that we will release frequently during 
	development cycle, based on CVS shapshots. You will find new 
	packages each weekend during commitfest.
	</p><p>
	Please note that these packages are not built using the official 
	tarball. We built it with the help of some PostgreSQL hackers.
	</p><p>
	These are not stable packages. Use them at your own risk. <b>They 
	are not ready for production.</b>.
	</p><p>
	Please install repository RPMs from here first:
	</p><p>
	<a href="http://yum.pgsqlrpms.org/reporpms/repoview/letter_p.group.html">http://yum.pgsqlrpms.org/reporpms/repoview/letter_p.group.html</a>
	</p><p>
	Remove existing RPMs after taking your backups, and then install 
	8.4 packages. You may want to install -debuginfo RPM, which may 
	help PostgreSQL developers to get some data in case you find a 
	bug.
	</p><p>
	Source RPMs are also available:
	</p><p>
	<a href="http://yum.pgsqlrpms.org/srpms/8.4">http://yum.pgsqlrpms.org/srpms/8.4</a>
	(and they are installable using yum).
	</p><p>
	Please report any packaging related errors to <a 
	href=/contact.php">us</a>. If you find any PostgreSQL 8.4 bugs, 
	please post them to pgsql-bugs@PostgreSQL.org or fill out this 
	form: <BR>
	<a href="http://www.postgresql.org/support/submitbug">http://www.postgresql.org/support/submitbug</a>
	</p>
  ﻿ </div>
  </div>
</div>
<?php include "inc/bottom.inc.php"; ?>

