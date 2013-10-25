<?php /* <div class="language"><a href="<?php echo $language_links['de']; ?>" title="Deutsch"><img alt="Deutsch" src="/images/de.png" /></a></div> */ ?>
<h1><?php echo $IDN->decode($hostname) ?></h1>
<div class="introduction">
	<p>Welcome to <?php echo $IDN->decode($hostname) ?>!</p>
	<p>
		Pages/services hosted on this server:
	</p>
	<ul>
		<li><a href="//jabber.rueckgr.at">jabber.rueckgr.at</a> &ndash; an <a href="http://xmpp.org/">XMPP</a> (Jabber) server free to use for everyone</li>
		<li>tor.rueckgr.at &ndash; a <a href="https://www.torproject.org/">Tor</a> (non-exit) relay</li>
		<li><a href="//torstatus.rueckgr.at">torstatus.rueckgr.at</a> &ndash; a TorStatus page</li>
		<li><a href="//mail.rueckgr.at">mail.rueckgr.at</a> &ndash; a mail server</li>
		<li><a href="//pad.rueckgr.at">pad.rueckgr.at</a> &ndash; an installation of <a href="http://etherpad.org/">Etherpad</a></li>
		<li><a href="//apeiron.rueckgr.at">apeiron.rueckgr.at</a> &ndash; notes from Math lectures at <a href="http://www.tuwien.ac.at/en/tuwien_home/">Vienna University of Technology</a></li>
		<li><a href="//punkte.huntu.at">punkte.huntu.at</a> &ndash; the grading tool of <a href="http://huntu.at">hunTU</a></li>
		<li><a href="//ntp.rueckgr.at">ntp.rueckgr.at</a> &ndash; an <a href="http://www.ntp.org/">NTP</a> server free to use for everyone that participates in the <a href="http://www.pool.ntp.org">NTP pool project</a></li>
		<li><a href="/cb">rueckgr.at/cb</a> &ndash; a complete archive of the ChatBox at <a href="http://www.informatik-forum.at">informatik-forum.at</a> (not publicly accessible; send a mail to the address specified in the footer if you desire access)</li>
		<li><a href="/mimetex">rueckgr.at/mimetex</a> &ndash; an installation of <a href="http://www.forkosh.com/mimetex.html">mimetex</a> that is used for rendering formulae at <a href="http://www.informatik-forum.at">informatik-forum.at</a>.
		<li><a href="/wienerlinien">rueckgr.at/wienerlinien</a> &ndash; some pages (in German) based on the <a href="https://open.wien.at/site/">Open Data</a> provided by the <a href="http://www.wien.gv.at/english/">City of Vienna</a> and <a href="http://www.wienerlinien.at/eportal/ep/home.do?tabId=0">Wiener Linien</a>.</li>
		<li><a href="//isttuweldown.rueckgr.at">isttuweldown.rueckgr.at</a> &ndash; a page showing whether <a href="https://tuwel.tuwien.ac.at/">TUWEL</a> (the e-learning platform of the <a href="http://www.tuwien.ac.at/en/tuwien_home/">Vienna University of Technology</a>); the current state is determined using <a href="https://www.icinga.org/">Icinga</a>.
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

	<p>
	This page is written using <a href="http://validator.w3.org/check?uri=https%3A%2F%2Ftor.rueckgr.at">valid HTML5</a> code.
	</p>

	<p>
	<a href="https://paul.staroch.name">Paul Staroch</a>
	</p>
</div>
