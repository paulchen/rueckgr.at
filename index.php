<?php
require_once('idna_convert.class.php');
$IDN = new idna_convert();

$hostname = 'rueckgr.at';
if(isset($_SERVER['HTTP_HOST')) {
	$hostname = $_SERVER['HTTP_HOST'];
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="application/xhtml; charset=UTF-8" />
		<title><?php echo $IDN->decode($hostname) ?></title>
	</head>
	<body>
		<h1><?php echo $IDN->decode($hostname) ?></h1>
		<p>Welcome to <?php echo $IDN->decode($hostname) ?>!</p>
		<p>
			Pages/services hosted on this server:
		</p>
		<ul>
			<li><a href="//jabber.rueckgr.at">jabber.rueckgr.at</a> &ndash; a Jabber server free to use for everyone</li>
			<li>tor.rueckgr.at &ndash; a Tor (non-exit) relay</li>
			<li><a href="//torstatus.rueckgr.at">torstatus.rueckgr.at</a> &ndash; a TorStatus page</li>
			<li><a href="//mail.rueckgr.at">mail.rueckgr.at</a> &ndash; a mail server</li>
			<li><a href="//pad.rueckgr.at">pad.rueckgr.at</a> &ndash; an installation of <a href="http://etherpad.org/">Etherpad</a></li>
			<li><a href="//apeiron.rueckgr.at">apeiron.rueckgr.at</a> &ndash; notes from Math lectures at Vienna University of Technology</li>
			<li><a href="//punkte.huntu.at">punkte.huntu.at</a> &ndash; the grading tool of <a href="http://huntu.at">hunTU</a></li>
			<li><a href="//ntp.rueckgr.at">ntp.rueckgr.at</a> &ndash; an NTP server free to use for everyone that participates in the <a href="http://www.pool.ntp.org">NTP pool project</a></li>
			<li><a href="/cb">rueckgr.at/cb</a> &ndash; a complete archive of the ChatBox at <a href="http://www.informatik-forum.at">informatik-forum.at</a> (not publicly accessible; send a mail to the address specified in the footer if you desire access)</li>
			<!-- <li><a href="//staroch.name">staroch.name</a> &ndash; Personal page of the server operator</li> -->
		</ul>
		<p>
			Also available:
		</p>
		<ul>
			<li>
				<?php if($hostname == 'rueckgr.at'): ?>
					<a href="//rückgr.at">This page on rückgr.at</a>
				<?php else: ?>
					<a href="//rueckgr.at">This page on rueckgr.at</a>
				<?php endif; ?>
			</li>
			<li>
				<?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']): ?>
					<a href="http://<?php echo $hostname ?>">This page without HTTPS</a>
				<?php else: ?>
					<a href="https://<?php echo $hostname ?>">This page via SSL</a>
				<?php endif; ?>
			</li>
		</ul>
		<hr />
		<p>Paul Staroch, <a href="mailto:paulchen@rueckgr.at">paulchen@rueckgr.at</a></p>
		<p><a href="http://validator.w3.org/check?uri=referer"><img src="valid-xhtml11.png" alt="Valid XHTML 1.1" height="31" width="88" /></a></p>
	</body>
</html>
