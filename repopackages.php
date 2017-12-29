<?php include "inc/top.inc.php"; ?>

    <h1>PostgreSQL RPM Building Project - Repository Packages </h1>

    <h2>Finding out which distro arch you are using</h2>
    <p>If you do not know which OS/arch you are using, click <a href="/findingdistro.php">here to find your distro/arch</a>.</p>
    <p><b>Please note that PostgreSQL YUM repository depends on <a href="https://fedoraproject.org/wiki/EPEL" target="_blank">EPEL</a> repository for some packages. RHEL/CentOS/, etc. users should install EPEL repo RPM along with PGDG repo RPMs to satisfy dependencies.</b></p>
    <h2>Available Repository RPMs</h2>

	<ul>
	<p>
<!--		<a name="pg10"><li>PostgreSQL 10<font color="red"> <b>CRASH TESTING ONLY!!! NOT EVEN FOR ALPHA TESTING, NOT FOR PRODUCTION. USE 9.6 PACKAGES FOR PRODUCTION</b></font></li></a>-->
<!--		<a name="pg10"><li>PostgreSQL 10<font color="red"> <b>BETA TESTING ONLY!!! NOT FOR PRODUCTION. USE 9.6 PACKAGES FOR PRODUCTION</b></font></li></a> -->
		<a name="pg10"><li>PostgreSQL 10</li></a>
			<BR>
			<a name="pg10redhat"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-x86_64/pgdg-redhat10-10-2.noarch.rpm">Red Hat Enterprise Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-x86_64/pgdg-sl10-10-2.noarch.rpm">Scientific Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-x86_64/pgdg-centos10-10-2.noarch.rpm">CentOS 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-x86_64/pgdg-oraclelinux10-10-2.noarch.rpm">Oracle Enterprise Linux 7 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-ppc64le/pgdg-redhat10-10-2.noarch.rpm">Red Hat Enterprise Linux 7 - PPC64LE</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-7-ppc64le/pgdg-centos10-10-2.noarch.rpm">CentOS 7 - PPC64LE</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-6-x86_64/pgdg-redhat10-10-2.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-6-x86_64/pgdg-centos10-10-2.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-6-x86_64/pgdg-sl10-10-2.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/redhat/rhel-6-x86_64/pgdg-oraclelinux10-10-2.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<a name="pg10fedora"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/fedora/fedora-27-x86_64/pgdg-fedora10-10-3.noarch.rpm">Fedora 27 - x86_64 </a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/fedora/fedora-26-x86_64/pgdg-fedora10-10-3.noarch.rpm">Fedora 26 - x86_64 </a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/10/fedora/fedora-25-x86_64/pgdg-fedora10-10-3.noarch.rpm">Fedora 25 - x86_64 </a></li></ul>
			<BR>

	</ul>
	<BR>
		<ul>
		<p>

		<a name="pg96"><li>PostgreSQL 9.6</a>
			<a name="pg96redhat"></a>

			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-x86_64/pgdg-redhat96-9.6-3.noarch.rpm">Red Hat Enterprise Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-x86_64/pgdg-sl96-9.6-3.noarch.rpm">Scientific Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-x86_64/pgdg-centos96-9.6-3.noarch.rpm">CentOS 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-x86_64/pgdg-oraclelinux96-9.6-3.noarch.rpm">Oracle Enterprise Linux 7 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-ppc64le/pgdg-redhat96-9.6-3.noarch.rpm">Red Hat Enterprise Linux 7 - PPC64LE</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-7-ppc64le/pgdg-centos96-9.6-3.noarch.rpm">CentOS 7 - PPC64LE</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-x86_64/pgdg-redhat96-9.6-3.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-i386/pgdg-redhat96-9.6-3.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-x86_64/pgdg-centos96-9.6-3.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-i386/pgdg-centos96-9.6-3.noarch.rpm">CentOS 6 - i386</a></li></ul>-->
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-x86_64/pgdg-sl96-9.6-3.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-i386/pgdg-sl96-9.6-3.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>-->
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-x86_64/pgdg-oraclelinux96-9.6-3.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-i386/pgdg-oraclelinux96-9.6-3.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul> -->
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-x86_64/pgdg-ami201503-96-9.6-2.noarch.rpm">Amazon Linux AMI 2015.03 - x86_64</a></li></ul>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/redhat/rhel-6-i386/pgdg-ami201503-96-9.6-3.noarch.rpm">Amazon Linux AMI 2015.03 - i386</a></li></ul> -->
			<BR>
			<a name="pg96fedora"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/fedora/fedora-27-x86_64/pgdg-fedora96-9.6-3.noarch.rpm">Fedora 27 - x86_64 </a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/fedora/fedora-26-x86_64/pgdg-fedora96-9.6-3.noarch.rpm">Fedora 26 - x86_64 </a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.6/fedora/fedora-25-x86_64/pgdg-fedora96-9.6-3.noarch.rpm">Fedora 25 - x86_64 </a></li></ul>
			<BR>

	</ul>
	<BR>
	<ul>
	<p>
		<a name="pg95"><li>PostgreSQL 9.5</li></a>
			<a name="pg95redhat"></a>

			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-7-x86_64/pgdg-redhat95-9.5-3.noarch.rpm">Red Hat Enterprise Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-7-x86_64/pgdg-sl95-9.5-3.noarch.rpm">Scientific Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-7-x86_64/pgdg-centos95-9.5-3.noarch.rpm">CentOS 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-7-x86_64/pgdg-oraclelinux95-9.5-3.noarch.rpm">Oracle Enterprise Linux 7 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-7-ppc64le/pgdg-redhat95-9.5-3.noarch.rpm">Red Hat Enterprise Linux 7 - PPC64LE</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-7-ppc64le/pgdg-centos95-9.5-3.noarch.rpm">CentOS 7 - PPC64LE</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-x86_64/pgdg-redhat95-9.5-3.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-i386/pgdg-redhat95-9.5-3.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-x86_64/pgdg-centos95-9.5-3.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-i386/pgdg-centos95-9.5-3.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-x86_64/pgdg-sl95-9.5-3.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-i386/pgdg-sl95-9.5-3.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-x86_64/pgdg-oraclelinux95-9.5-3.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-i386/pgdg-oraclelinux95-9.5-3.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-x86_64/pgdg-ami201503-95-9.5-3.noarch.rpm">Amazon Linux AMI 2015.03 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-6-i386/pgdg-ami201503-95-9.5-3.noarch.rpm">Amazon Linux AMI 2015.03 - i386</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-5-x86_64/pgdg-redhat95-9.5-3.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-5-i386/pgdg-redhat95-9.5-3.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-5-x86_64/pgdg-sl95-9.5-3.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-5-i386/pgdg-sl95-9.5-3.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-5-x86_64/pgdg-centos95-9.5-3.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/redhat/rhel-5-i386/pgdg-centos95-9.5-3.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<BR>
			<a name="pg95fedora"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/fedora/fedora-27-x86_64/pgdg-fedora95-9.5-4.noarch.rpm">Fedora 27 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/fedora/fedora-26-x86_64/pgdg-fedora95-9.5-4.noarch.rpm">Fedora 26 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.5/fedora/fedora-25-x86_64/pgdg-fedora95-9.5-4.noarch.rpm">Fedora 25 - x86_64</a></li></ul>
			<BR>
	</ul>
	<BR>
	<ul>
		<a name="pg94"><li>PostgreSQL 9.4</li></a>
			<a name="pg94redhat"></a>

			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-7-x86_64/pgdg-redhat94-9.4-3.noarch.rpm">Red Hat Enterprise Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-7-x86_64/pgdg-sl94-9.4-3.noarch.rpm">Scientific Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-7-x86_64/pgdg-centos94-9.4-3.noarch.rpm">CentOS 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-7-x86_64/pgdg-oraclelinux94-9.4-3.noarch.rpm">Oracle Enterprise Linux 7 - x86_64</a></li></ul>

			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-x86_64/pgdg-redhat94-9.4-3.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-i386/pgdg-redhat94-9.4-3.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-x86_64/pgdg-centos94-9.4-3.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-i386/pgdg-centos94-9.4-3.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-x86_64/pgdg-sl94-9.4-3.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-i386/pgdg-sl94-9.4-3.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-x86_64/pgdg-oraclelinux94-9.4-3.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-i386/pgdg-oraclelinux94-9.4-3.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-x86_64/pgdg-ami201503-94-9.4-3.noarch.rpm">Amazon Linux AMI 2015.03 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-6-i386/pgdg-ami201503-94-9.4-3.noarch.rpm">Amazon Linux AMI 2015.03 - i386</a></li></ul>
			<BR>

			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-5-x86_64/pgdg-redhat94-9.4-3.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-5-i386/pgdg-redhat94-9.4-3.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-5-x86_64/pgdg-sl94-9.4-3.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-5-i386/pgdg-sl94-9.4-3.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-5-x86_64/pgdg-centos94-9.4-3.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/redhat/rhel-5-i386/pgdg-centos94-9.4-3.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<BR>
			<a name="pg94fedora"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/fedora/fedora-27-x86_64/pgdg-fedora94-9.4-5.noarch.rpm">Fedora 27 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/fedora/fedora-26-x86_64/pgdg-fedora94-9.4-5.noarch.rpm">Fedora 26 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.4/fedora/fedora-25-x86_64/pgdg-fedora94-9.4-5.noarch.rpm">Fedora 25 - x86_64</a></li></ul>
			<BR>
	</ul>

	<ul>
	<p>
		<a name="pg93"><li>PostgreSQL 9.3</li></a>
			<a name="pg93redhat"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-7-x86_64/pgdg-redhat93-9.3-3.noarch.rpm">Red Hat Enterprise Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-7-x86_64/pgdg-sl93-9.3-3.noarch.rpm">Scientific Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-7-x86_64/pgdg-centos93-9.3-3.noarch.rpm">CentOS 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-7-x86_64/pgdg-oraclelinux93-9.3-3.noarch.rpm">Oracle Enterprise Linux 7 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-x86_64/pgdg-redhat93-9.3-3.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-i386/pgdg-redhat93-9.3-3.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-x86_64/pgdg-sl93-9.3-3.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-i386/pgdg-sl93-9.3-3.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-x86_64/pgdg-centos93-9.3-3.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-i386/pgdg-centos93-9.3-3.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-x86_64/pgdg-oraclelinux93-9.3-3.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-i386/pgdg-oraclelinux93-9.3-3.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-x86_64/pgdg-ami201503-93-9.3-3.noarch.rpm">Amazon Linux AMI 2015.03 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-6-i386/pgdg-ami201503-93-9.3-3.noarch.rpm">Amazon Linux AMI 2015.03 - i386</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-5-x86_64/pgdg-redhat93-9.3-3.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-5-i386/pgdg-redhat93-9.3-3.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-5-x86_64/pgdg-sl93-9.3-3.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-5-i386/pgdg-sl93-9.3-3.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-5-x86_64/pgdg-centos93-9.3-3.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/redhat/rhel-5-i386/pgdg-centos93-9.3-3.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<BR>
<!--			<a name="pg93fedora"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.3/fedora/fedora-23-x86_64/pgdg-fedora93-9.3-4.noarch.rpm">Fedora 23 - x86_64</a></li></ul>-->
			<BR>

	</ul>

	<ul>
	<p>
	<b><h1><font color="red">EOL'd releases</font></h1></b>
	</p>
	<p>
	<p>
		<a name="pg92"><li>PostgreSQL 9.2</li></a>
			<a name="pg92fedora"></a>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-19-x86_64/pgdg-fedora92-0.2-8.noarch.rpm">Fedora 19 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-19-i386/pgdg-fedora92-0.2-8.noarch.rpm">Fedora 19 - i686</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-18-x86_64/pgdg-fedora92-0.2-8.noarch.rpm">Fedora 18 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-18-i386/pgdg-fedora92-0.2-8.noarch.rpm">Fedora 18 - i686</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-17-x86_64/pgdg-fedora92-9.2-6.noarch.rpm">Fedora 17 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-17-i386/pgdg-fedora92-9.2-7.noarch.rpm">Fedora 17 - i686</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-16-x86_64/pgdg-fedora92-9.2-6.noarch.rpm">Fedora 16 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/fedora/fedora-16-i386/pgdg-fedora92-9.2-6.noarch.rpm">Fedora 16 - i686</a></li></ul> -->
			<a name="pg92redhat"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-7-x86_64/pgdg-redhat92-9.2-3.noarch.rpm">Red Hat Enterprise Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-7-x86_64/pgdg-centos92-9.2-3.noarch.rpm">CentOS 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-7-x86_64/pgdg-sl92-9.2-3.noarch.rpm">Scientific Linux 7 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-x86_64/pgdg-redhat92-9.2-9.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-i386/pgdg-redhat92-9.2-9.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-x86_64/pgdg-centos92-9.2-8.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-i386/pgdg-centos92-9.2-8.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-x86_64/pgdg-sl92-9.2-9.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-i386/pgdg-sl92-9.2-9.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-x86_64/pgdg-oraclelinux92-9.2-9.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-6-i386/pgdg-oraclelinux92-9.2-9.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-5-i386/pgdg-redhat92-9.2-9.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-5-x86_64/pgdg-redhat92-9.2-9.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-5-i386/pgdg-sl92-9.2-9.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-5-x86_64/pgdg-sl92-9.2-9.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-5-i386/pgdg-centos92-9.2-8.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.2/redhat/rhel-5-x86_64/pgdg-centos92-9.2-8.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
<p><p>
		<a name="pg91"><li>PostgreSQL 9.1</li></a>
<!--			<a name="pg91fedora"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/fedora/fedora-16-i386/pgdg-fedora91-9.1-5.noarch.rpm">Fedora 16 - i686</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/fedora/fedora-16-x86_64/pgdg-fedora91-9.1-5.noarch.rpm">Fedora 16 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/fedora/fedora-15-i386/pgdg-fedora91-9.1-5.noarch.rpm">Fedora 15 - i686</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/fedora/fedora-15-x86_64/pgdg-fedora91-9.1-5.noarch.rpm">Fedora 15 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/fedora/fedora-14-i386/pgdg-fedora91-9.1-5.noarch.rpm">Fedora 14 - i686</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/fedora/fedora-14-x86_64/pgdg-fedora-9.1-4.noarch.rpm">Fedora 14 - x86_64</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<BR>-->
			<a name="pg91redhat"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-i386/pgdg-redhat91-9.1-7.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-x86_64/pgdg-redhat91-9.1-7.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-i386/pgdg-sl91-9.1-8.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-x86_64/pgdg-sl91-9.1-8.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-i386/pgdg-centos91-9.1-6.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-x86_64/pgdg-centos91-9.1-6.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-i386/pgdg-oraclelinux91-9.1-7.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-6-x86_64/pgdg-oraclelinux91-9.1-7.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-5-i386/pgdg-redhat91-9.1-7.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-5-x86_64/pgdg-redhat91-9.1-7.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-5-i386/pgdg-sl91-9.1-8.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-5-x86_64/pgdg-sl91-9.1-8.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-5-i386/pgdg-centos91-9.1-6.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-5-x86_64/pgdg-centos91-9.1-6.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<BR>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-4-i386/pgdg-redhat-9.1-4.noarch.rpm">Red Hat Enterprise Linux 4 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-4-x86_64/pgdg-redhat-9.1-4.noarch.rpm">Red Hat Enterprise Linux 4 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-4-i386/pgdg-centos91-9.1-4.noarch.rpm">CentOS 4 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.1/redhat/rhel-4-x86_64/pgdg-centos91-9.1-4.noarch.rpm">CentOS 4 - x86_64</a></li></ul>-->

	</ul>

	<ul>
		<a name="pg90"><li>PostgreSQL 9.0</li></a>
			<a name="pg90fedora"></a>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-15-i386/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 15 - i686</a><<b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-15-x86_64/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 15 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-14-i386/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 14 - i686</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-14-x86_64/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 14 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-13-i386/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 13 - i686</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-13-x86_64/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 13 - x86_64</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-12-i386/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 12 - i386</a><b><font color="red"> EOL'ed</font></b></li></ul> 
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-12-x86_64/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 12 - x86_64</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-11-i386/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 11 - i386</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/fedora/fedora-11-x86_64/pgdg-fedora90-9.0-5.noarch.rpm">Fedora 11 - x86_64</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<BR> -->
			<a name="pg90redhat"></a>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-i386/pgdg-redhat90-9.0-5.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-x86_64/pgdg-redhat90-9.0-5.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-i386/pgdg-sl90-9.0-6.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-x86_64/pgdg-sl90-9.0-6.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-i386/pgdg-centos90-9.0-5.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-x86_64/pgdg-centos90-9.0-5.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-i386/pgdg-oraclelinux90-9.0-5.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-6-x86_64/pgdg-oraclelinux90-9.0-5.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-5-i386/pgdg-redhat90-9.0-5.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-5-x86_64/pgdg-redhat90-9.0-5.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-5-i386/pgdg-sl90-9.0-6.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-5-x86_64/pgdg-sl90-9.0-6.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-5-i386/pgdg-centos90-9.0-5.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-5-x86_64/pgdg-centos90-9.0-5.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<BR>
<!--			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-4-i386/pgdg-redhat90-9.0-5.noarch.rpm">Red Hat Enterprise Linux 4 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-4-x86_64/pgdg-redhat90-9.0-5.noarch.rpm">Red Hat Enterprise Linux 4 - x86_64</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-4-i386/pgdg-centos90-9.0-5.noarch.rpm">CentOS 4 - i386</a></li></ul>
			<ul><li><a href="https://download.postgresql.org/pub/repos/yum/9.0/redhat/rhel-4-x86_64/pgdg-centos90-9.0-5.noarch.rpm">CentOS 4 - x86_64</a></li></ul> -->
	</ul>
<ul>
<p>
		<a name="pg84"><li>PostgreSQL 8.4</li></a>
<!--			<a name="pg84fedora"></a>
			<ul><li><a href="/8.4/fedora/fedora-14-i386/">Fedora 14 - i686</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-14-x86_64/">Fedora 14 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-13-i386/">Fedora 13 - i686</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-13-x86_64/">Fedora 13 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-12-i386/">Fedora 12 - i386</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-12-x86_64/">Fedora 12 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-8-i386/">Fedora 8 - i386</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a><b><font color="red"> EOL'ed</font></b> </li></ul>
			<ul><li><a href="/8.4/fedora/fedora-7-i386/">Fedora 7 - i386</a><b><font color="red"> EOL'ed</font></b></li></ul>
			<ul><li><a href="/8.4/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a><b><font color="red"> EOL'ed</font></b></li></ul> -->
			<BR>
			<a name="pg84redhat"></a>
			<ul><li><a href="/8.4/redhat/rhel-6-i386/pgdg-redhat-8.4-3.noarch.rpm">Red Hat Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-x86_64/pgdg-redhat-8.4-3.noarch.rpm">Red Hat Enterprise Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-i386/pgdg-sl84-8.4-4.noarch.rpm">Scientific Linux 6 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-x86_64/pgdg-sl84-8.4-4.noarch.rpm">Scientific Linux 6 - x86_64</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-i386/pgdg-centos-8.4-3.noarch.rpm">CentOS 6 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-x86_64/pgdg-centos-8.4-3.noarch.rpm">CentOS 6 - x86_64</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-i386/pgdg-oraclelinux-8.4-3.noarch.rpm">Oracle Enterprise Linux 6 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-6-x86_64/pgdg-oraclelinux-8.4-3.noarch.rpm">Oracle Enterprise Linux 6 - x86_64</a></li></ul>
			<BR>

			<ul><li><a href="/8.4/redhat/rhel-5-i386/pgdg-redhat-8.4-3.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-5-x86_64/pgdg-redhat-8.4-3.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-5-i386/pgdg-sl-8.4-4.noarch.rpm">Scientific Linux 5 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-5-x86_64/pgdg-sl-8.4-4.noarch.rpm">Scientific Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-5-i386/pgdg-centos-8.4-3.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-5-x86_64/pgdg-centos-8.4-3.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<BR>
<!--
			<ul><li><a href="/8.4/redhat/rhel-4-i386/pgdg-redhat-8.4-3.noarch.rpm">Red Hat Enterprise Linux 4 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-4-x86_64/pgdg-redhat-8.4-3.noarch.rpm">Red Hat Enterprise Linux 4 - x86_64</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-4-i386/pgdg-centos-8.4-3.noarch.rpm">CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/8.4/redhat/rhel-4-x86_64/pgdg-centos-8.4-3.noarch.rpm">CentOS 4 - x86_64</a></li></ul> -->
	</ul>
	<p>
	<ul>
		<a name="pg83"><li>PostgreSQL 8.3</li></a>
			<a name="pg83fedora"></a>
			<ul><li><a href="/8.3/fedora/fedora-13-i386/">Fedora 13 - i386</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-13-x86_64/">Fedora 13 - x86_64</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-12-i386/">Fedora 12 - i386</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-12-x86_64/">Fedora 12 - x86_64</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-8-i386/">Fedora 8 - i386</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-7-i386/">Fedora 7 - i386</a></li></ul>
			<ul><li><a href="/8.3/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a></li></ul>
			<BR>
			<a name="pg83redhat"></a>
			<ul><li><a href="/8.3/redhat/rhel-5-i386/pgdg-redhat-8.3-8.noarch.rpm">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-5-x86_64/pgdg-redhat-8.3-8.noarch.rpm">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-5-i386/pgdg-centos-8.3-7.noarch.rpm">CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-5-x86_64/pgdg-centos-8.3-7.noarch.rpm">CentOS 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-4-i386/pgdg-redhat-8.3-8.noarch.rpm">Red Hat Enterprise Linux 4 - i386</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-4-x86_64/pgdg-redhat-8.3-8.noarch.rpm">Red Hat Enterprise Linux 4 - x86_64</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-4-i386/pgdg-centos-8.3-7.noarch.rpm">CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/8.3/redhat/rhel-4-x86_64/pgdg-centos-8.3-7.noarch.rpm">CentOS 4 - x86_64</a></li></ul>

	</ul>
	<p>
	<ul>
		<a name="pg82"><li>PostgreSQL 8.2</li></a>
			<a name="pg82fedora"></a>
			<ul><li><a href="/8.2/fedora/fedora-13-i386/">Fedora 13 - i386</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-13-x86_64/">Fedora 13 - x86_64</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-12-i386/">Fedora 12 - i386</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-12-x86_64/">Fedora 12 - x86_64</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-8-i386/">Fedora 8 - i386</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-7-i386/">Fedora 7 - i386</a></li></ul>
			<ul><li><a href="/8.2/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a></li></ul>
			<BR>
			<a name="pg82redhat"></a>
			<ul><li><a href="/8.2/redhat/rhel-5-i386/">Red Hat Enterprise Linux 5 - i386</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-5-x86_64/">Red Hat Enterprise Linux 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-5-i386/">CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-5-x86_64/">CentOS 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-4-i386/">Red Hat Enterprise Linux 4 - i386</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-4-x86_64/">Red Hat Enterprise Linux 4 - x86_64</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-4-i386/">CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/8.2/redhat/rhel-4-x86_64/">CentOS 4 - x86_64</a></li></ul>
	</ul>
	<p>
	<ul>
		<a name="pg81"><li>PostgreSQL 8.1</li></a>
			<a name="pg81fedora"></a>
			<ul><li><a href="/8.1/fedora/fedora-12-i386/">Fedora 12 - i386</a></li></ul>
			<ul><li><a href="/8.1/fedora/fedora-12-x86_64/">Fedora 12 - x86_64</a></li></ul>
			<ul><li><a href="/8.1/fedora/fedora-8-i386/">Fedora 8 - i386</a></li></ul>
			<ul><li><a href="/8.1/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a></li></ul>
			<ul><li><a href="/8.1/fedora/fedora-7-i386/">Fedora 7 - i386</a></li></ul>
			<ul><li><a href="/8.1/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a></li></ul>
			<BR>
			<a name="pg81redhat"></a>
			<ul><li><a href="/8.1/redhat/rhel-5-i386/">RHEL/CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/8.1/redhat/rhel-5-x86_64/">RHEL/CentOS 5 - x86_64</a></li></ul>
			<ul><li><a href="/8.1/redhat/rhel-4-i386/">RHEL/CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/8.1/redhat/rhel-4-x86_64/">RHEL/CentOS 4 - x86_64</a></li></ul>
	</ul>
	<p>
	<ul>
		<a name="pg80"><li>PostgreSQL 8.0</li></a>
			<ul><li><a href="/8.0/fedora/fedora-7-i386/">Fedora 7 - i386</a></li></ul>
			<ul><li><a href="/8.0/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a></li></ul>
			<ul><li><a href="/8.0/fedora/fedora-8-i386/">Fedora 8 - i386</a></li></ul>
			<ul><li><a href="/8.0/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="/8.0/redhat/rhel-4-i386/">RHEL/CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/8.0/redhat/rhel-4-x86_64/">RHEL/CentOS 4 - x86_64</a></li></ul>
			<ul><li><a href="/8.0/redhat/rhel-5-i386/">RHEL/CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/8.0/redhat/rhel-5-x86_64/">RHEL/CentOS 5 - x86_64</a></li></ul>
	</ul>
	<p>
	<ul>
		<a name="pg74"><li>PostgreSQL 7.4</li></a>
			<ul><li><a href="/7.4/fedora/fedora-7-i386/">Fedora 7 - i386</a></li></ul>
			<ul><li><a href="/7.4/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a></li></ul>
			<ul><li><a href="/7.4/fedora/fedora-8-i386/">Fedora 8 - i386</a></li></ul>
			<ul><li><a href="/7.4/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a></li></ul>
			<BR>
			<ul><li><a href="/7.4/redhat/rhel-4-i386/">RHEL/CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/7.4/redhat/rhel-4-x86_64/">RHEL/CentOS 4 - x86_64</a></li></ul>
			<ul><li><a href="/7.4/redhat/rhel-5-i386/">RHEL/CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/7.4/redhat/rhel-5-x86_64/">RHEL/CentOS 5 - x86_64</a></li></ul>
	</ul>
	<p>
	<ul>
		<a name="pg73"><li>PostgreSQL 7.3</li></a>
<!--			<ul><li><a href="/7.3/fedora/fedora-7-i386/">Fedora 7 - i386</a></li></ul>
			<ul><li><a href="/7.3/fedora/fedora-7-x86_64/">Fedora 7 - x86_64</a></li></ul>
			<ul><li><a href="/7.3/fedora/fedora-8-i386/">Fedora 8 - i386</a></li></ul>
			<ul><li><a href="/7.3/fedora/fedora-8-x86_64/">Fedora 8 - x86_64</a></li></ul>-->
			<BR>
			<ul><li><a href="/7.3/redhat/rhel-4-i386/">RHEL/CentOS 4 - i386</a></li></ul>
			<ul><li><a href="/7.3/redhat/rhel-4-x86_64/">RHEL/CentOS 4 - x86_64</a></li></ul>
			<ul><li><a href="/7.3/redhat/rhel-5-i386/">RHEL/CentOS 5 - i386</a></li></ul>
			<ul><li><a href="/7.3/redhat/rhel-5-x86_64/">RHEL/CentOS 5 - x86_64</a></li></ul>
	</ul>


<BR><BR>
<?php include "inc/bottom.inc.php"; ?>

