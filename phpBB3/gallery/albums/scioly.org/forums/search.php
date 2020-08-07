<!DOCTYPE html>
<html dir="ltr" lang="en-gb">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Scioly.org - Search</title>

	<link rel="alternate" type="application/atom+xml" title="Feed - Scioly.org" href="/forums/app.php/feed">	<link rel="alternate" type="application/atom+xml" title="Feed - News" href="/forums/app.php/feed/news">	<link rel="alternate" type="application/atom+xml" title="Feed - All forums" href="/forums/app.php/feed/forums">	<link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="/forums/app.php/feed/topics">	<link rel="alternate" type="application/atom+xml" title="Feed - Active Topics" href="/forums/app.php/feed/topics_active">			

<!--
	phpBB style name: prosilver
	Based on style:   prosilver (this is the default phpBB3 style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by:
-->

<link href="./assets/css/font-awesome.min.css?assets_version=50" rel="stylesheet">
<link href="./styles/scioly/theme/stylesheet.css?assets_version=50" rel="stylesheet">
<link href="./styles/scioly/theme/en/stylesheet.css?assets_version=50" rel="stylesheet">




<!--[if lte IE 9]>
	<link href="./styles/scioly/theme/tweaks.css?assets_version=50" rel="stylesheet">
<![endif]-->


<link href="./ext/gfksx/ThanksForPosts/styles/prosilver/theme/thanks.css?assets_version=50" rel="stylesheet" media="screen" />



</head>
<body id="phpbb" class="nojs notouch section-search ltr ">


<!-- <script type="text/javascript" src="/src/js/snowstorm.js"></script> -->
<!-- <script type="text/javascript" src="/src/js/fireworks.js"></script> -->
<script type="text/javascript" src="/src/js/jquery.min.js"></script>
<script type="text/javascript" src="/src/js/forums.js"></script>
<link rel="stylesheet" type="text/css" href="/src/css/forums.css">

<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');ga('create', 'UA-340310-1', 'auto');ga('send', 'pageview');</script>

<div class="banner" style="background-color: #f4f4f4; color: #555555;"><span class="close" onclick="this.parentElement.style.display='none'; close_banner();">&times;</span><span class="message"><a href="https://scioly.org/chat.php" style="color: #555555;">This is a test announcement! We're redoing how banners appear on this site.</a></span></div><script type="text/javascript">
	var banner_id = "banner_" + 15;
	var banner_boolean = localStorage.getItem(banner_id);

	$(document).ready(function() {
		if (banner_boolean == "false") {
			$('.banner').hide();
		}
	});

	function close_banner() {
		localStorage.setItem(banner_id, "false");
	}
</script>
<style>
	.banner > .close {
		margin-left: 15px;
		float: right;
		font-size: 20px;
		line-height: 16px;
		cursor: pointer;
		transition: 0.3s;
	}
	.banner > .message {
		display: block;
		margin-right: 30px;
	}
</style>

<div class="navbar navbar-default navbar-fixed-top" role="navigation" style="top: auto;">
	<div class="site-nav">
		<a href="https://scioly.org/">
				<img src="https://scioly.org/src/img/logo/logo.png">
		</a>
		<div class="hamburger" onclick="hamburger(this)">
			<div>
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<ul>
			<li><a href="https://scioly.org/forums">Forums</a></li>
			<li><a href="https://scioly.org/wiki">Wiki</a></li>
			<li><a href="https://scioly.org/tests">Test Exchange</a></li>
			<!-- <li><a href="https://scioly.org/gallery">Image Gallery</a></li> -->
			<!-- <li><a href="https://scioly.org/invitational">Invites</a></li> -->
			<li><a href="https://scioly.org/chat">Chat</a></li>
			<li><a href="/login" class="insert-button">Login</a></li>		</ul>
	</div>
	<img class="print-only" src="https://scioly.org/src/img/logo/logo_black.png" style="max-width: 150px;">
</div>



<div id="wrap" class="wrap">
	<a id="top" class="top-anchor" accesskey="t"></a>
	<div id="page-header">
		<div class="headerbar" role="banner">
					<div class="inner">

			<div id="site-description" class="site-description">
				<a id="logo" class="logo" href="https://scioly.org" title="Scioly.org"><span class="site_logo"></span></a>
				<h1>Scioly.org</h1>
				<p>Science Olympiad Student Center</p>
				<p class="skiplink"><a href="#start_here">Skip to content</a></p>
			</div>

									
			</div>
					</div>
				<div class="navbar" role="navigation">
	<div class="inner">

	<ul id="nav-main" class="nav-main linklist" role="menubar">

		<li id="quick-links" class="quick-links dropdown-container responsive-menu" data-skip-responsive="true">
			<a href="#" class="dropdown-trigger">
				<i class="icon fa-bars fa-fw" aria-hidden="true"></i><span>Quick links</span>
			</a>
			<div class="dropdown">
				<div class="pointer"><div class="pointer-inner"></div></div>
				<ul class="dropdown-contents" role="menu">
					
											<li class="separator"></li>
																									<li>
								<a href="./search.php?search_id=unanswered" role="menuitem">
									<i class="icon fa-file-o fa-fw icon-gray" aria-hidden="true"></i><span>Unanswered topics</span>
								</a>
							</li>
							<li>
								<a href="./search.php?search_id=active_topics" role="menuitem">
									<i class="icon fa-file-o fa-fw icon-blue" aria-hidden="true"></i><span>Active topics</span>
								</a>
							</li>
							<li class="separator"></li>
							<li>
								<a href="./search.php" role="menuitem">
									<i class="icon fa-search fa-fw" aria-hidden="true"></i><span>Search</span>
								</a>
							</li>
					
											<li class="separator"></li>
													<li>
								<a href="./memberlist.php" role="menuitem">
									<i class="icon fa-group fa-fw" aria-hidden="true"></i><span>Members</span>
								</a>
							</li>
																			<li>
								<a href="./memberlist.php?mode=team" role="menuitem">
									<i class="icon fa-shield fa-fw" aria-hidden="true"></i><span>The team</span>
								</a>
							</li>
																<li class="separator"></li>

									</ul>
			</div>
		</li>

				<li data-skip-responsive="true">
			<a href="/forums/app.php/help/faq" rel="help" title="Frequently Asked Questions" role="menuitem">
				<i class="icon fa-question-circle fa-fw" aria-hidden="true"></i><span>FAQ</span>
			</a>
		</li>
						
			<li class="rightside"  data-skip-responsive="true">
			<a href="./ucp.php?mode=login" title="Login" accesskey="x" role="menuitem">
				<i class="icon fa-power-off fa-fw" aria-hidden="true"></i><span>Login</span>
			</a>
		</li>
					<li class="rightside" data-skip-responsive="true">
				<a href="./ucp.php?mode=register" role="menuitem">
					<i class="icon fa-pencil-square-o  fa-fw" aria-hidden="true"></i><span>Register</span>
				</a>
			</li>
						</ul>

	<ul id="nav-breadcrumbs" class="nav-breadcrumbs linklist navlinks" role="menubar">
								<li class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
							<span class="crumb"  itemtype="http://schema.org/ListItem" itemprop="itemListElement" itemscope><a href="https://scioly.org" itemtype="https://schema.org/Thing" itemprop="item" data-navbar-reference="home"><i class="icon fa-home fa-fw" aria-hidden="true"></i><span itemprop="name">Scioly.org</span></a><meta itemprop="position" content="1" /></span>
										<span class="crumb"  itemtype="http://schema.org/ListItem" itemprop="itemListElement" itemscope><a href="./index.php" itemtype="https://schema.org/Thing" itemprop="item" accesskey="h" data-navbar-reference="index"><span itemprop="name">Forums</span></a><meta itemprop="position" content="2" /></span>

								</li>
		
			</ul>

	</div>
</div>
	</div>

	
	<a id="start_here" class="anchor"></a>
	<div id="page-body" class="page-body" role="main">
		
		
<h2 class="solo">Search</h2>

<form method="get" action="./search.php" data-focus="keywords">

<div class="panel">
	<div class="inner">
	<h3>Search query</h3>

		<fieldset>
		<dl>
		<dt><label for="keywords">Search for keywords:</label><br /><span>Place <strong>+</strong> in front of a word which must be found and <strong>-</strong> in front of a word which must not be found. Put a list of words separated by <strong>|</strong> into brackets if only one of the words must be found. Use * as a wildcard for partial matches.</span></dt>
		<dd><input type="search" class="inputbox" name="keywords" id="keywords" size="40" title="Search for keywords" /></dd>
		<dd><label for="terms1"><input type="radio" name="terms" id="terms1" value="all" checked="checked" /> Search for all terms or use query as entered</label></dd>
		<dd><label for="terms2"><input type="radio" name="terms" id="terms2" value="any" /> Search for any terms</label></dd>
	</dl>
	<dl>
		<dt><label for="author">Search for author:</label><br /><span>Use * as a wildcard for partial matches.</span></dt>
		<dd><input type="search" class="inputbox" name="author" id="author" size="40" title="Search for author" /></dd>
	</dl>
		</fieldset>
	
	</div>
</div>

<div class="panel bg2">
	<div class="inner">

	<h3>Search options</h3>

		<fieldset>
		<dl>
		<dt><label for="search_forum">Search in forums:</label><br /><span>Select the forum or forums you wish to search in. Subforums are searched automatically if you do not disable “search subforums“ below.</span></dt>
		<dd><select name="fid[]" id="search_forum" multiple="multiple" size="8" title="Search in forums"><option value="1">Event Forums</option><option value="283">&nbsp; &nbsp;Build Events</option><option value="316">&nbsp; &nbsp;&nbsp; &nbsp;Boomilever B/C</option><option value="319">&nbsp; &nbsp;&nbsp; &nbsp;Detector Building C</option><option value="320">&nbsp; &nbsp;&nbsp; &nbsp;Elastic Launched Glider B</option><option value="315">&nbsp; &nbsp;&nbsp; &nbsp;Gravity Vehicle C</option><option value="318">&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible B</option><option value="314">&nbsp; &nbsp;&nbsp; &nbsp;Mousetrap Vehicle B</option><option value="317">&nbsp; &nbsp;&nbsp; &nbsp;Ping Pong Parachute B/C</option><option value="321">&nbsp; &nbsp;&nbsp; &nbsp;​W​r​i​g​h​t​ ​S​t​u​f​f​ ​C​</option><option value="284">&nbsp; &nbsp;Lab Events</option><option value="322">&nbsp; &nbsp;&nbsp; &nbsp;Machines B/C</option><option value="323">&nbsp; &nbsp;&nbsp; &nbsp;Protein Modeling C</option><option value="285">&nbsp; &nbsp;Study Events</option><option value="297">&nbsp; &nbsp;Question Marathons</option><option value="6">Competition Forums</option><option value="334">&nbsp; &nbsp;General Competition</option><option value="294">&nbsp; &nbsp;Invitationals</option><option value="295">&nbsp; &nbsp;Regionals &amp; States</option><option value="296">&nbsp; &nbsp;Nationals</option><option value="333">&nbsp; &nbsp;Alumni</option><option value="4">Off-Topic Forums</option><option value="335">&nbsp; &nbsp;General Chat</option><option value="21">&nbsp; &nbsp;Posting Games</option><option value="344">&nbsp; &nbsp;&nbsp; &nbsp;Assassinator Games</option><option value="22">&nbsp; &nbsp;The Polling Place</option><option value="7">Administrative</option><option value="24">&nbsp; &nbsp;Announcements</option><option value="25">&nbsp; &nbsp;Feedback</option><option value="8">Team Forums</option><option value="54">Archives</option><option value="88">&nbsp; &nbsp;2009</option><option value="16">&nbsp; &nbsp;&nbsp; &nbsp;2009 Build Events</option><option value="18">&nbsp; &nbsp;&nbsp; &nbsp;2009 Lab Events</option><option value="17">&nbsp; &nbsp;&nbsp; &nbsp;2009 Study Events</option><option value="19">&nbsp; &nbsp;&nbsp; &nbsp;2009 Invitationals, Regionals, and States</option><option value="23">&nbsp; &nbsp;&nbsp; &nbsp;2009 Nationals</option><option value="89">&nbsp; &nbsp;2010</option><option value="66">&nbsp; &nbsp;&nbsp; &nbsp;2010 Build Events</option><option value="68">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wright Stuff B</option><option value="69">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible C</option><option value="65">&nbsp; &nbsp;&nbsp; &nbsp;2010 Lab Events</option><option value="67">&nbsp; &nbsp;&nbsp; &nbsp;2010 Study Events</option><option value="72">&nbsp; &nbsp;&nbsp; &nbsp;2010 Invitationals, Regionals, and States</option><option value="73">&nbsp; &nbsp;&nbsp; &nbsp;2010 Nationals</option><option value="90">&nbsp; &nbsp;2011</option><option value="91">&nbsp; &nbsp;&nbsp; &nbsp;2011 Build Events</option><option value="94">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Towers B/C</option><option value="95">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible C</option><option value="96">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Helicopters C</option><option value="92">&nbsp; &nbsp;&nbsp; &nbsp;2011 Lab Events</option><option value="93">&nbsp; &nbsp;&nbsp; &nbsp;2011 Study Events</option><option value="99">&nbsp; &nbsp;&nbsp; &nbsp;2011 Invitationals, Regionals, and States</option><option value="100">&nbsp; &nbsp;&nbsp; &nbsp;2011 Nationals</option><option value="118">&nbsp; &nbsp;2012</option><option value="119">&nbsp; &nbsp;&nbsp; &nbsp;2012 Build Events</option><option value="124">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Helicopters C</option><option value="122">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible B</option><option value="123">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Towers B/C</option><option value="127">&nbsp; &nbsp;&nbsp; &nbsp;2012 Lab Events</option><option value="121">&nbsp; &nbsp;&nbsp; &nbsp;2012 Study Events</option><option value="126">&nbsp; &nbsp;&nbsp; &nbsp;2012 Nationals</option><option value="141">&nbsp; &nbsp;2013</option><option value="143">&nbsp; &nbsp;&nbsp; &nbsp;2013 Build Events</option><option value="146">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Helicopters B</option><option value="147">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Boomilever B/C</option><option value="148">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible B</option><option value="142">&nbsp; &nbsp;&nbsp; &nbsp;2013 Lab Events</option><option value="144">&nbsp; &nbsp;&nbsp; &nbsp;2013 Study Events</option><option value="149">&nbsp; &nbsp;&nbsp; &nbsp;2013 Invitationals, Regionals, and States</option><option value="150">&nbsp; &nbsp;&nbsp; &nbsp;2013 Nationals</option><option value="151">&nbsp; &nbsp;&nbsp; &nbsp;2013 News</option><option value="165">&nbsp; &nbsp;2014</option><option value="168">&nbsp; &nbsp;&nbsp; &nbsp;2014 Build Events</option><option value="166">&nbsp; &nbsp;&nbsp; &nbsp;2014 Lab Events</option><option value="167">&nbsp; &nbsp;&nbsp; &nbsp;2014 Study Events</option><option value="173">&nbsp; &nbsp;&nbsp; &nbsp;2014 Question Marathons</option><option value="170">&nbsp; &nbsp;&nbsp; &nbsp;2014 Invitationals, Regionals, and States</option><option value="171">&nbsp; &nbsp;&nbsp; &nbsp;2014 Nationals</option><option value="172">&nbsp; &nbsp;&nbsp; &nbsp;2014 News</option><option value="185">&nbsp; &nbsp;2015</option><option value="188">&nbsp; &nbsp;&nbsp; &nbsp;2015 Build Events</option><option value="189">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Bridge Building B/C</option><option value="190">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible C</option><option value="191">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wright Stuff C</option><option value="186">&nbsp; &nbsp;&nbsp; &nbsp;2015 Lab Events</option><option value="187">&nbsp; &nbsp;&nbsp; &nbsp;2015 Study Events</option><option value="193">&nbsp; &nbsp;&nbsp; &nbsp;2015 Question Marathons</option><option value="195">&nbsp; &nbsp;&nbsp; &nbsp;2015 Invitationals, Regionals, and States</option><option value="200">&nbsp; &nbsp;&nbsp; &nbsp;2015 Competition Advertising</option><option value="196">&nbsp; &nbsp;&nbsp; &nbsp;2015 Nationals</option><option value="194">&nbsp; &nbsp;&nbsp; &nbsp;2015 News</option><option value="213">&nbsp; &nbsp;2016</option><option value="206">&nbsp; &nbsp;&nbsp; &nbsp;2016 Build Events</option><option value="221">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Air Trajectory B/C</option><option value="209">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Bridge Building B/C</option><option value="211">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Elastic Launch Glider B</option><option value="222">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Electric Vehicle C</option><option value="210">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible B</option><option value="223">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Robot Arm C</option><option value="212">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wright Stuff C</option><option value="207">&nbsp; &nbsp;&nbsp; &nbsp;2016 Lab Events</option><option value="219">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wind Power B/C</option><option value="208">&nbsp; &nbsp;&nbsp; &nbsp;2016 Study Events</option><option value="217">&nbsp; &nbsp;&nbsp; &nbsp;2016 Question Marathons</option><option value="214">&nbsp; &nbsp;&nbsp; &nbsp;2016 Invitationals, Regionals, and States</option><option value="218">&nbsp; &nbsp;&nbsp; &nbsp;2016 Competition Advertising</option><option value="215">&nbsp; &nbsp;&nbsp; &nbsp;2016 Nationals</option><option value="216">&nbsp; &nbsp;&nbsp; &nbsp;2016 News</option><option value="224">&nbsp; &nbsp;2017</option><option value="225">&nbsp; &nbsp;&nbsp; &nbsp;2017 Build Events</option><option value="249">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Bottle Rocket B</option><option value="242">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Electric Vehicle C</option><option value="246">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Helicopters C</option><option value="247">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible B</option><option value="244">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Robot Arm C</option><option value="248">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Scrambler B</option><option value="243">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Towers B/C</option><option value="245">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wright Stuff B</option><option value="226">&nbsp; &nbsp;&nbsp; &nbsp;2017 Lab Events</option><option value="227">&nbsp; &nbsp;&nbsp; &nbsp;2017 Study Events</option><option value="228">&nbsp; &nbsp;&nbsp; &nbsp;2017 Question Marathons</option><option value="229">&nbsp; &nbsp;&nbsp; &nbsp;2017 Invitationals, Regionals, and States</option><option value="230">&nbsp; &nbsp;&nbsp; &nbsp;2017 Competition Advertising</option><option value="231">&nbsp; &nbsp;&nbsp; &nbsp;2017 Nationals</option><option value="236">&nbsp; &nbsp;2018</option><option value="263">&nbsp; &nbsp;&nbsp; &nbsp;2018 Build Events</option><option value="271">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Battery Buggy B</option><option value="272">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Helicopters C</option><option value="273">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible C</option><option value="274">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mousetrap Vehicle C</option><option value="275">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Roller Coaster B</option><option value="276">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Towers B/C</option><option value="277">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wright Stuff B</option><option value="264">&nbsp; &nbsp;&nbsp; &nbsp;2018 Lab Events</option><option value="265">&nbsp; &nbsp;&nbsp; &nbsp;2018 Study Events</option><option value="266">&nbsp; &nbsp;&nbsp; &nbsp;2018 Question Marathons</option><option value="267">&nbsp; &nbsp;&nbsp; &nbsp;2018 Invitationals</option><option value="268">&nbsp; &nbsp;&nbsp; &nbsp;2018 Regionals &amp; States</option><option value="269">&nbsp; &nbsp;&nbsp; &nbsp;2018 Nationals</option><option value="262">&nbsp; &nbsp;2019</option><option value="326">&nbsp; &nbsp;&nbsp; &nbsp;2019 Build Events</option><option value="287">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Battery Buggy B</option><option value="290">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Boomilever B/C</option><option value="288">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Elastic Launched Gliders B</option><option value="291">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mission Possible C</option><option value="292">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Mousetrap Vehicle C</option><option value="286">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Roller Coaster B</option><option value="299">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Wright Stuff C</option><option value="327">&nbsp; &nbsp;&nbsp; &nbsp;2019 Lab Events</option><option value="293">&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Thermodynamics B/C</option><option value="328">&nbsp; &nbsp;&nbsp; &nbsp;2019 Study Events</option><option value="329">&nbsp; &nbsp;&nbsp; &nbsp;2019 Question Marathons</option><option value="330">&nbsp; &nbsp;&nbsp; &nbsp;2019 Invitationals</option><option value="331">&nbsp; &nbsp;&nbsp; &nbsp;2019 Regionals &amp; States</option><option value="332">&nbsp; &nbsp;&nbsp; &nbsp;2019 Nationals</option><option value="256">Miscellaneous</option><option value="238">&nbsp; &nbsp;&nbsp; &nbsp;Template: Visible, Topics Disabled, Replies Enabled, Increment Enabled</option><option value="257">&nbsp; &nbsp;&nbsp; &nbsp;Template: Visible, Topics/Replies Enabled, Increment Enabled, Attachments</option><option value="341">&nbsp; &nbsp;&nbsp; &nbsp;Template: Visible, Topics/Replies Enabled, Increment Disabled</option><option value="342">&nbsp; &nbsp;&nbsp; &nbsp;Template: Visible, Topics Approval, Replies Disabled, Increment Disabled (Polls)</option><option value="253">&nbsp; &nbsp;&nbsp; &nbsp;Template: Visible, Posting Disabled (Locked)</option></select></dd>
	</dl>
	<dl>
		<dt><label for="search_child1">Search subforums:</label></dt>
		<dd>
			<label for="search_child1"><input type="radio" name="sc" id="search_child1" value="1" checked="checked" /> Yes</label>
			<label for="search_child2"><input type="radio" name="sc" id="search_child2" value="0" /> No</label>
		</dd>
	</dl>
	<dl>
		<dt><label for="sf1">Search within:</label></dt>
		<dd><label for="sf1"><input type="radio" name="sf" id="sf1" value="all" checked="checked" /> Post subjects and message text</label></dd>
		<dd><label for="sf2"><input type="radio" name="sf" id="sf2" value="msgonly" /> Message text only</label></dd>
		<dd><label for="sf3"><input type="radio" name="sf" id="sf3" value="titleonly" /> Topic titles only</label></dd>
		<dd><label for="sf4"><input type="radio" name="sf" id="sf4" value="firstpost" /> First post of topics only</label></dd>
	</dl>
	
	<hr class="dashed" />

		<dl>
		<dt><label for="show_results1">Display results as:</label></dt>
		<dd>
			<label for="show_results1"><input type="radio" name="sr" id="show_results1" value="posts" checked="checked" /> Posts</label>
			<label for="show_results2"><input type="radio" name="sr" id="show_results2" value="topics" /> Topics</label>
		</dd>
	</dl>
	<dl>
		<dt><label for="sd">Sort results by:</label></dt>
		<dd><select name="sk" id="sk"><option value="a">Author</option><option value="t" selected="selected">Post time</option><option value="f">Forum</option><option value="i">Topic title</option><option value="s">Post subject</option></select>&nbsp;
			<label for="sa"><input type="radio" name="sd" id="sa" value="a" /> Ascending</label>
			<label for="sd"><input type="radio" name="sd" id="sd" value="d" checked="checked" /> Descending</label>
		</dd>
	</dl>
	<dl>
		<dt><label>Limit results to previous:</label></dt>
		<dd><select name="st" id="st"><option value="0" selected="selected">All results</option><option value="1">1 day</option><option value="7">7 days</option><option value="14">2 weeks</option><option value="30">1 month</option><option value="90">3 months</option><option value="180">6 months</option><option value="365">1 year</option></select></dd>
	</dl>
	<dl>
		<dt><label>Return first:</label></dt>
		<dd><select name="ch" title="Return first"><option value="-1">All available</option><option value="0">0</option><option value="25">25</option><option value="50">50</option><option value="100">100</option><option value="200">200</option><option value="300" selected="selected">300</option><option value="400">400</option><option value="500">500</option><option value="600">600</option><option value="700">700</option><option value="800">800</option><option value="900">900</option><option value="1000">1000</option></select> characters of posts</dd>
	</dl>
		</fieldset>
	
	</div>
</div>

<div class="panel bg3">
	<div class="inner">

	<fieldset class="submit-buttons">
		<input type="hidden" name="t" value="0" />
<input type="reset" value="Reset" name="reset" class="button2" />&nbsp;
		<input type="submit" name="submit" value="Search" class="button1" />
	</fieldset>

	</div>
</div>

</form>


			</div>


<div id="page-footer" class="page-footer" role="contentinfo">
	<div class="navbar" role="navigation">
	<div class="inner">

	<ul id="nav-footer" class="nav-footer linklist" role="menubar">
		<li class="breadcrumbs">
							<span class="crumb"><a href="https://scioly.org" data-navbar-reference="home"><i class="icon fa-home fa-fw" aria-hidden="true"></i><span>Scioly.org</span></a></span>									<span class="crumb"><a href="./index.php" data-navbar-reference="index"><span>Forums</span></a></span>					</li>
		
				<li class="rightside">All times are <span title="America/Los Angeles">UTC-07:00</span></li>
							<li class="rightside">
				<a href="./ucp.php?mode=delete_cookies" data-ajax="true" data-refresh="true" role="menuitem">
					<i class="icon fa-trash fa-fw" aria-hidden="true"></i><span>Delete cookies</span>
				</a>
			</li>
							<li class="rightside" data-last-responsive="true">
					<a href="./memberlist.php" title="View complete list of members" role="menuitem">
						<i class="icon fa-group fa-fw" aria-hidden="true"></i><span>Members</span>
					</a>
				</li>
												<li class="rightside" data-last-responsive="true">
				<a href="./memberlist.php?mode=team" role="menuitem">
					<i class="icon fa-shield fa-fw" aria-hidden="true"></i><span>The team</span>
				</a>
			</li>
									<li class="rightside" data-last-responsive="true">
				<a href="./memberlist.php?mode=contactadmin" role="menuitem">
					<i class="icon fa-envelope fa-fw" aria-hidden="true"></i><span>Contact us</span>
				</a>
			</li>
			</ul>

	</div>
</div>

	<div class="copyright">
				<p class="footer-row">
			<span class="footer-copyright">Powered by <a href="https://www.phpbb.com/">phpBB</a>&reg; Forum Software &copy; phpBB Limited</span>
		</p>
						<p class="footer-row">
			<a class="footer-link" href="./ucp.php?mode=privacy" title="Privacy" role="menuitem">
				<span class="footer-link-text">Privacy</span>
			</a>
			|
			<a class="footer-link" href="./ucp.php?mode=terms" title="Terms" role="menuitem">
				<span class="footer-link-text">Terms</span>
			</a>
		</p>
					</div>

	<div id="darkenwrapper" class="darkenwrapper" data-ajax-error-title="AJAX error" data-ajax-error-text="Something went wrong when processing your request." data-ajax-error-text-abort="User aborted request." data-ajax-error-text-timeout="Your request timed out; please try again." data-ajax-error-text-parsererror="Something went wrong with the request and the server returned an invalid reply.">
		<div id="darken" class="darken">&nbsp;</div>
	</div>

	<div id="phpbb_alert" class="phpbb_alert" data-l-err="Error" data-l-timeout-processing-req="Request timed out.">
		<a href="#" class="alert_close">
			<i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
		</a>
		<h3 class="alert_title">&nbsp;</h3><p class="alert_text"></p>
	</div>
	<div id="phpbb_confirm" class="phpbb_alert">
		<a href="#" class="alert_close">
			<i class="icon fa-times-circle fa-fw" aria-hidden="true"></i>
		</a>
		<div class="alert_text"></div>
	</div>
</div>

</div>

<div>
	<a id="bottom" class="anchor" accesskey="z"></a>
	</div>

<script src="./assets/javascript/jquery.min.js?assets_version=50"></script>
<script src="./assets/javascript/core.js?assets_version=50"></script>



</div><!-- closing tag for div#wrap -->
<div class="site-footer">
	<div class="tiles">
		<div>
			<h4>Connect</h4>
			<p><a href="https://scioly.org/forums/viewforum.php?f=1">Event Forums</a></p>
			<p><a href="https://scioly.org/forums/viewforum.php?f=6">Competition Forums</a></p>
			<p><a href="https://scioly.org/chat">Online Chat</a></p>
			<!-- <p><a href="https://scioly.org/watch">YouTube Channel</a></p> -->
		</div>
		<div>
			<h4>Learn</h4>
			<p><a href="https://scioly.org/wiki">Wiki</a></p>
			<p><a href="https://scioly.org/forums/viewforum.php?f=297">Question Marathons</a></p>
			<p><a href="https://scioly.org/tests">Test Exchange</a></p>
			<p><a href="https://scioly.org/wiki/index.php/Test_Exchange_Archive">Test Archive</a></p>
		</div>
		<div>
			<h4>Get Involved</h4>
			<p><a href="https://scioly.org/wiki/index.php/Starting_A_Science_Olympiad_Team">Starting a Team</a></p>
			<p><a href="https://scioly.org/wiki/index.php/How_to_Write_a_Practice_Test">Test Writing Guide</a></p>
			<p><a href="https://scioly.org/wiki/index.php/Category:Needs_Work">Wiki: Needs Work</a></p>
			<p><a href="https://scioly.org/wiki/index.php/Category:Student_Volunteer_Organizations">Volunteering</a></p>
		</div>
		<div>
			<h4>About</h4>
			<p><a href="https://scioly.org/about">History</a></p>
			<p><a href="https://scioly.org/rules">Site Rules</a></p>
			<p><a href="https://scioly.org/rules">Privacy Policy</a></p>
			<p><a href="https://www.facebook.com/scioly.org">Facebook Page</a></p>
		</div>
		<div>
			<h4>Disclaimer</h4>
			<p>Scioly.org is a place to ask questions and share ideas. This site is not the place to get event rules, official rules changes, or official clarifications.</p>
			<p><a href="https://scioly.org/bernard" style="color: transparent;">Click me! Click me!</a></p>
		</div>
	</div>
</div>



<script src="./styles/scioly/template/forum_fn.js?assets_version=50"></script>
<script src="./styles/scioly/template/ajax.js?assets_version=50"></script>



</body>
</html>