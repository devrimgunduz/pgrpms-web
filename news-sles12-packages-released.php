<?php include "inc/top.inc.php"; ?>

    <h1> PostgreSQL RPMs for SLES 12 are released.</h1>
	<p>
	PostgreSQL RPMs for SLES 12 are released. We currently support PostgreSQL 9.5, 9.6 and 10. Please note that SLES 12 packages also include the remaining set of RPMs that we already support in the RHEL/Fedora repos.
	</p><p>
	Please first add the repos by running these commands:<br>
	<ul>
		<li> PostgreSQL 10: <br>
		<p>zypper ar https://download.postgresql.org/pub/repos/yum/suse/pgdg-sles-10.repo <br>
			zypper refresh <br></p>
		</li>
		<li> PostgreSQL 9.6: <br>
		<p>zypper ar https://download.postgresql.org/pub/repos/yum/suse/pgdg-sles-96.repo <br>
			zypper refresh <br></p>
		</li>
		<li> PostgreSQL 9.5: <br>
		<p>zypper ar https://download.postgresql.org/pub/repos/yum/suse/pgdg-sles-95.repo <br>
			zypper refresh <br></p>
		</li>

	</ul>
	Now you can install the PostgreSQL RPMs, like:
	<ul>
	<li>zypper install postgresql10-server
	<li>zypper install postgresql96-server
	<li>zypper install postgresql95-server
	</ul>

	</p><p>
	Please report any packaging related errors to <a href="/contact.php">us</a>.
	</p>
  ﻿ </div>
  </div>
</div>

<?php include "inc/bottom.inc.php"; ?>

