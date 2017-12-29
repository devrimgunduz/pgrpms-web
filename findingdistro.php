<?php include "inc/top.inc.php"; ?>

    <h1>PostgreSQL RPM Building Project - Finding your distribution/architecture </h1>

    <h2>Finding out which distribution and architecture you are using</h2>

    <p>If you do not know which OS/arch you are using, please run the following:</p>

     <h3> Step 1: Find distribution</h3>
    <p><b>* cat /etc/redhat-release</a> </b>: This command will give you an output like: <br/>
	<ul>
	<li>Red Hat Enterprise Linux Server release 7.3 (Maipo)</li>
	<li>CentOS Linux release 7.3.1611 (Core)</li>
	<li>CentOS release 6.9 (Final)</li>
	<li>Fedora release 25 (Twenty Five)</li>
	</ul><br/>
	or similar. So they mean you are using RHEL 7.3, CentOS 7.3, CentOS 6.9 or Fedora 25, respectively.
            </p>

     <h3> Step 2: Find architecture</h3>
    <p><b>* uname -m </b>: This command will give you an output like <b>x86_64</b>, <b>ppc4le</b> or <b>i686</b>. <br/> </p>
    <p> So, if the first output is Fedora 25 and the second one is x86_64, go to <a href="/repopackages.php">Repository Packages</a> page, and find  the repository RPMs in the PostgreSQL version that you are looking for.</p>

<BR><BR>
<?php include "inc/bottom.inc.php"; ?>

