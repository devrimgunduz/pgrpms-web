<?php include "inc/top.inc.php"; ?>

    <h1> PostgreSQL 9.5 beta packages are ready for testing</h1>
	<p>
	If you are a Fedora 21-22 and/or RHEL/CentOS/Scientific Linux/Oracle Linux/Amazon Linux 5,6,7 user and want to test
	new features of PostgreSQL 9.5 and help development team, you
	may use the packages that we will release for each alpha release.
	</p><p>
	These are not stable packages. Use them at your own risk. <b>They
	are not ready for production.</b>.
	</p><p>
	Please install repository RPMs from here first:
	</p><p>
	<a href="http://yum.postgresql.org/repopackages.php">http://yum.postgresql.org/repopackages.php</a>
	</p><p>
	9.5 packages will be installed side by side with the older versions.
	However, upgrading to newer alphas or beta releases will likely to require dump/restore cycle from the
	current 9.5 release. You also may want to install -debuginfo RPM, which may
	help PostgreSQL developers to get some data in case you find a
	bug.
	</p><p>
	Source RPMs are also available:
	</p><p>
	<a href="http://yum.postgresql.org/srpms/9.5">http://yum.postgresql.org/srpms/9.5</a>
	(and they are installable using yum).
	</p><p>
	Please report any packaging related errors to <a
	href="/contact.php">us</a>. If you find any PostgreSQL 9.5 bugs,
	please post them to pgsql-bugs@PostgreSQL.org or fill out this
	form: <BR>
	<a href="http://www.postgresql.org/support/submitbug">http://www.postgresql.org/support/submitbug</a>
	</p>
  ﻿ </div>
  </div>
</div>

<?php include "inc/bottom.inc.php"; ?>




