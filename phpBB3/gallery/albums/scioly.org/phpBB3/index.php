<!DOCTYPE html>
<html dir="ltr" lang="en-gb">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>Scioly.org - Forums</title>

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
<body id="phpbb" class="nojs notouch section-index ltr ">


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

									<div id="search-box" class="search-box search-header" role="search">
				<form action="./search.php" method="get" id="search">
				<fieldset>
					<input name="keywords" id="keywords" type="search" maxlength="128" title="Search for keywords" class="inputbox search tiny" size="20" value="" placeholder="Search…" />
					<button class="button button-search" type="submit" title="Search">
						<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
					</button>
					<a href="./search.php" class="button button-search-end" title="Advanced search">
						<i class="icon fa-cog fa-fw" aria-hidden="true"></i><span class="sr-only">Advanced search</span>
					</a>
					
				</fieldset>
				</form>
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
		
					<li class="rightside responsive-search">
				<a href="./search.php" title="View the advanced search options" role="menuitem">
					<i class="icon fa-search fa-fw" aria-hidden="true"></i><span class="sr-only">Search</span>
				</a>
			</li>
			</ul>

	</div>
</div>
	</div>

	
	<a id="start_here" class="anchor"></a>
	<div id="page-body" class="page-body" role="main">
		
		
<p class="right responsive-center time">It is currently August 6th, 2020, 6:24 pm</p>



	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner">Forum</div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
					<li class="row">
						<dl class="row-item forum_link">
				<dt title="No unread posts">
										<div class="list-inner">
																		<a href="./viewforum.php?f=278" class="forumtitle">We Stand With The Black Community</a>
																		
												<div class="responsive-show" style="display: none;">
															Total redirects: <strong>225648</strong>
													</div>
											</div>
				</dt>
									<dd class="redirect"><span>Total redirects: 225648</span></dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="./viewforum.php?f=1">Event Forums</a></div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="row-item forum_read_subforum">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Build Events" href="/forums/app.php/feed?f=283">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Build Events</span>
								</a>
							-->
																		<a href="./viewforum.php?f=283" class="forumtitle">Build Events</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=316" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Boomilever B/C</a>, 															<a href="./viewforum.php?f=319" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Detector Building C</a>, 															<a href="./viewforum.php?f=320" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Elastic Launched Glider B</a>, 															<a href="./viewforum.php?f=315" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Gravity Vehicle C</a>, 															<a href="./viewforum.php?f=318" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Mission Possible B</a>, 															<a href="./viewforum.php?f=314" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Mousetrap Vehicle B</a>, 															<a href="./viewforum.php?f=317" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Ping Pong Parachute B/C</a>, 															<a href="./viewforum.php?f=321" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>​W​r​i​g​h​t​ ​S​t​u​f​f​ ​C​</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>204</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">204 <dfn>Topics</dfn></dd>
					<dd class="posts">3867 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=315&amp;p=424251#p424251" title="Re: Wheels" class="lastsubject">Re: Wheels</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=61004" class="username">GodOfCars</a>																	<a href="./viewtopic.php?f=315&amp;p=424251#p424251" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 4th, 2020, 8:11 am
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_subforum">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Lab Events" href="/forums/app.php/feed?f=284">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Lab Events</span>
								</a>
							-->
																		<a href="./viewforum.php?f=284" class="forumtitle">Lab Events</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=322" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Machines B/C</a>, 															<a href="./viewforum.php?f=323" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Protein Modeling C</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>37</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">37 <dfn>Topics</dfn></dd>
					<dd class="posts">1004 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=323&amp;p=424067#p424067" title="Re: Protein Modeling C" class="lastsubject">Re: Protein Modeling C</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=36058" style="color: #000000;" class="username-coloured">CookiePie1</a>																	<a href="./viewtopic.php?f=323&amp;p=424067#p424067" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />July 30th, 2020, 7:30 am
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Study Events" href="/forums/app.php/feed?f=285">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Study Events</span>
								</a>
							-->
																		<a href="./viewforum.php?f=285" class="forumtitle">Study Events</a>
																		
												<div class="responsive-show" style="display: none;">
															Topics: <strong>17</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">17 <dfn>Topics</dfn></dd>
					<dd class="posts">1436 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=285&amp;p=424093#p424093" title="Re: Ornithology B/C" class="lastsubject">Re: Ornithology B/C</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=15232" style="color: #000000;" class="username-coloured">PacificGoldenPlover</a>																	<a href="./viewtopic.php?f=285&amp;p=424093#p424093" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />July 30th, 2020, 3:13 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_link">
				<dt title="No unread posts">
										<div class="list-inner">
																		<a href="./viewforum.php?f=251" class="forumtitle">Trial Events</a>
																		
												<div class="responsive-show" style="display: none;">
															Total redirects: <strong>174141</strong>
													</div>
											</div>
				</dt>
									<dd class="redirect"><span>Total redirects: 174141</span></dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_subforum">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Question Marathons" href="/forums/app.php/feed?f=297">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Question Marathons</span>
								</a>
							-->
																		<a href="./viewforum.php?f=297" class="forumtitle">Question Marathons</a>
						<br />Test your knowledge of various Science Olympiad events.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>24</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">24 <dfn>Topics</dfn></dd>
					<dd class="posts">1082 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=297&amp;p=424371#p424371" title="Re: Food Science B" class="lastsubject">Re: Food Science B</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=41788" class="username">azboy1910</a>																	<a href="./viewtopic.php?f=297&amp;p=424371#p424371" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />Today, 3:21 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="./viewforum.php?f=6">Competition Forums</a></div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - General Competition" href="/forums/app.php/feed?f=334">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - General Competition</span>
								</a>
							-->
																		<a href="./viewforum.php?f=334" class="forumtitle">General Competition</a>
						<br />For anything Science Olympiad-related that might not fall under a specific event or competition.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>770</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">770 <dfn>Topics</dfn></dd>
					<dd class="posts">20459 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=334&amp;p=424332#p424332" title="Re: Scioly Summer Study Session 2020" class="lastsubject">Re: Scioly Summer Study Sessi…</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=41788" class="username">azboy1910</a>																	<a href="./viewtopic.php?f=334&amp;p=424332#p424332" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />Yesterday, 5:38 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Invitationals" href="/forums/app.php/feed?f=294">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Invitationals</span>
								</a>
							-->
																		<a href="./viewforum.php?f=294" class="forumtitle">Invitationals</a>
						<br />Area to advertise for your competitions!												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>45</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">45 <dfn>Topics</dfn></dd>
					<dd class="posts">953 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=294&amp;p=424208#p424208" title="Re: New Yosemite Satellite Invitational" class="lastsubject">Re: New Yosemite Satellite In…</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=69001" class="username">YosemiteSO</a>																	<a href="./viewtopic.php?f=294&amp;p=424208#p424208" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 2nd, 2020, 12:19 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Regionals &amp; States" href="/forums/app.php/feed?f=295">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Regionals &amp; States</span>
								</a>
							-->
																		<a href="./viewforum.php?f=295" class="forumtitle">Regionals &amp; States</a>
						<br />Show your regional and state pride!												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>30</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">30 <dfn>Topics</dfn></dd>
					<dd class="posts">2403 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=295&amp;p=423696#p423696" title="Re: North Carolina 2020" class="lastsubject">Re: North Carolina 2020</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=41788" class="username">azboy1910</a>																	<a href="./viewtopic.php?f=295&amp;p=423696#p423696" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />July 21st, 2020, 2:02 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Nationals" href="/forums/app.php/feed?f=296">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Nationals</span>
								</a>
							-->
																		<a href="./viewforum.php?f=296" class="forumtitle">Nationals</a>
						<br />We're looking forward to the tournament at North Carolina State!												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>3</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">3 <dfn>Topics</dfn></dd>
					<dd class="posts">337 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=296&amp;p=421374#p421374" title="Re: 2020 National Tournament: North Carolina State University" class="lastsubject">Re: 2020 National Tournament:…</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=38459" class="username">Creationist127</a>																	<a href="./viewtopic.php?f=296&amp;p=421374#p421374" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />June 3rd, 2020, 10:42 am
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Alumni" href="/forums/app.php/feed?f=333">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Alumni</span>
								</a>
							-->
																		<a href="./viewforum.php?f=333" class="forumtitle">Alumni</a>
						<br />Alumni make some of the best volunteers!												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>25</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">25 <dfn>Topics</dfn></dd>
					<dd class="posts">201 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=333&amp;p=419246#p419246" title="Re: Starting a new team (Div B)" class="lastsubject">Re: Starting a new team (Div …</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=62577" class="username">sneepity</a>																	<a href="./viewtopic.php?f=333&amp;p=419246#p419246" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />April 30th, 2020, 11:43 am
													</span>
					</dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="./viewforum.php?f=4">Off-Topic Forums</a></div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - General Chat" href="/forums/app.php/feed?f=335">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - General Chat</span>
								</a>
							-->
																		<a href="./viewforum.php?f=335" class="forumtitle">General Chat</a>
						<br />Shoot the breeze with other Olympians.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>839</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">839 <dfn>Topics</dfn></dd>
					<dd class="posts">50316 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=335&amp;p=424352#p424352" title="Re: Your Daily Random Comment" class="lastsubject">Re: Your Daily Random Comment</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=22093" style="color: #AA0000;" class="username-coloured">bernard</a>																	<a href="./viewtopic.php?f=335&amp;p=424352#p424352" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />Yesterday, 11:39 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_subforum">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Posting Games" href="/forums/app.php/feed?f=21">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Posting Games</span>
								</a>
							-->
																		<a href="./viewforum.php?f=21" class="forumtitle">Posting Games</a>
						<br />A forum for those Word Games that plague the Earth.																										<br /><strong>Subforum:</strong>
															<a href="./viewforum.php?f=344" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>Assassinator Games</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>516</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">516 <dfn>Topics</dfn></dd>
					<dd class="posts">112836 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=21&amp;p=424380#p424380" title="Re: Predict what the person below you will be like" class="lastsubject">Re: Predict what the person b…</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=63182" class="username">RiverWalker88</a>																	<a href="./viewtopic.php?f=21&amp;p=424380#p424380" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />Today, 4:53 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - The Polling Place" href="/forums/app.php/feed?f=22">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - The Polling Place</span>
								</a>
							-->
																		<a href="./viewforum.php?f=22" class="forumtitle">The Polling Place</a>
						<br />A home for moderator-approved, long term polls.												
												<div class="responsive-show" style="display: none;">
															Topics: <strong>631</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">631 <dfn>Topics</dfn></dd>
					<dd class="posts">631 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=22&amp;p=424382#p424382" title="Abbreviating the word “Number”" class="lastsubject">Abbreviating the word “Number”</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=36820" style="color: #000077;" class="username-coloured">HugoTroop</a>																	<a href="./viewtopic.php?f=22&amp;p=424382#p424382" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />21 minutes ago
													</span>
					</dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="./viewforum.php?f=7">Administrative</a></div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Announcements" href="/forums/app.php/feed?f=24">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Announcements</span>
								</a>
							-->
																		<a href="./viewforum.php?f=24" class="forumtitle">Announcements</a>
																		
												<div class="responsive-show" style="display: none;">
															Topics: <strong>87</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">87 <dfn>Topics</dfn></dd>
					<dd class="posts">618 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=24&amp;p=423962#p423962" title="Re: Codebusters Event This Weekend!" class="lastsubject">Re: Codebusters Event This We…</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=37001" class="username">sciolyperson1</a>																	<a href="./viewtopic.php?f=24&amp;p=423962#p423962" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />July 27th, 2020, 6:45 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read">
				<dt title="No unread posts">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - Feedback" href="/forums/app.php/feed?f=25">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - Feedback</span>
								</a>
							-->
																		<a href="./viewforum.php?f=25" class="forumtitle">Feedback</a>
																		
												<div class="responsive-show" style="display: none;">
															Topics: <strong>203</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">203 <dfn>Topics</dfn></dd>
					<dd class="posts">2867 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=25&amp;p=424353#p424353" title="Re: Youtube Channel" class="lastsubject">Re: Youtube Channel</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=22093" style="color: #AA0000;" class="username-coloured">bernard</a>																	<a href="./viewtopic.php?f=25&amp;p=424353#p424353" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />Yesterday, 11:48 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="./viewforum.php?f=8">Team Forums</a></div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="row-item forum_link">
				<dt title="No unread posts">
										<div class="list-inner">
																		<a href="./viewforum.php?f=28" class="forumtitle">How to get an (invisible) team forum</a>
																		
												<div class="responsive-show" style="display: none;">
															Total redirects: <strong>209973</strong>
													</div>
											</div>
				</dt>
									<dd class="redirect"><span>Total redirects: 209973</span></dd>
							</dl>
					</li>
			
	
				</ul>

			</div>
		</div>
	
				<div class="forabg">
			<div class="inner">
			<ul class="topiclist">
				<li class="header">
										<dl class="row-item">
						<dt><div class="list-inner"><a href="./viewforum.php?f=54">Archives</a></div></dt>
						<dd class="topics">Topics</dd>
						<dd class="posts">Posts</dd>
						<dd class="lastpost"><span>Last post</span></dd>
					</dl>
									</li>
			</ul>
			<ul class="topiclist forums">
		
	
	
	
			
					<li class="row">
						<dl class="row-item forum_link">
				<dt title="No unread posts">
										<div class="list-inner">
																		<a href="./viewforum.php?f=70" class="forumtitle">Old Board - 2001-2008</a>
																		
												<div class="responsive-show" style="display: none;">
															Total redirects: <strong>202519</strong>
													</div>
											</div>
				</dt>
									<dd class="redirect"><span>Total redirects: 202519</span></dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2009" href="/forums/app.php/feed?f=88">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2009</span>
								</a>
							-->
																		<a href="./viewforum.php?f=88" class="forumtitle">2009</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=16" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2009 Build Events</a>, 															<a href="./viewforum.php?f=18" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2009 Lab Events</a>, 															<a href="./viewforum.php?f=17" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2009 Study Events</a>, 															<a href="./viewforum.php?f=19" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2009 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=23" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2009 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>205</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">205 <dfn>Topics</dfn></dd>
					<dd class="posts">21786 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=23&amp;p=66444#p66444" title="Re: Anyone medaled at Nats?" class="lastsubject">Re: Anyone medaled at Nats?</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=8717" style="color: #000000;" class="username-coloured">Deeisenberg</a>																	<a href="./viewtopic.php?f=23&amp;p=66444#p66444" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 2nd, 2009, 5:55 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2010" href="/forums/app.php/feed?f=89">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2010</span>
								</a>
							-->
																		<a href="./viewforum.php?f=89" class="forumtitle">2010</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=66" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2010 Build Events</a>, 															<a href="./viewforum.php?f=65" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2010 Lab Events</a>, 															<a href="./viewforum.php?f=67" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2010 Study Events</a>, 															<a href="./viewforum.php?f=72" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2010 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=73" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2010 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>157</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">157 <dfn>Topics</dfn></dd>
					<dd class="posts">16269 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=68&amp;p=126653#p126653" title="Re: Propellers" class="lastsubject">Re: Propellers</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=13303" class="username">illusionist</a>																	<a href="./viewtopic.php?f=68&amp;p=126653#p126653" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 30th, 2010, 3:25 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2011" href="/forums/app.php/feed?f=90">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2011</span>
								</a>
							-->
																		<a href="./viewforum.php?f=90" class="forumtitle">2011</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=91" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2011 Build Events</a>, 															<a href="./viewforum.php?f=92" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2011 Lab Events</a>, 															<a href="./viewforum.php?f=93" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2011 Study Events</a>, 															<a href="./viewforum.php?f=99" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2011 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=100" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2011 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>199</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">199 <dfn>Topics</dfn></dd>
					<dd class="posts">22427 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=99&amp;p=178370#p178370" title="Re: What are Invitationals?" class="lastsubject">Re: What are Invitationals?</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=11259" style="color: #AA0000;" class="username-coloured">EastStroudsburg13</a>																	<a href="./viewtopic.php?f=99&amp;p=178370#p178370" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 28th, 2011, 4:38 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2012" href="/forums/app.php/feed?f=118">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2012</span>
								</a>
							-->
																		<a href="./viewforum.php?f=118" class="forumtitle">2012</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=119" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2012 Build Events</a>, 															<a href="./viewforum.php?f=127" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2012 Lab Events</a>, 															<a href="./viewforum.php?f=121" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2012 Study Events</a>, 															<a href="./viewforum.php?f=126" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2012 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>128</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">128 <dfn>Topics</dfn></dd>
					<dd class="posts">14952 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=119&amp;p=213075#p213075" title="Re: Elastic Launch Glider C [Trial]" class="lastsubject">Re: Elastic Launch Glider C […</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=8722" class="username">jander14indoor</a>																	<a href="./viewtopic.php?f=119&amp;p=213075#p213075" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 29th, 2012, 1:08 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2013" href="/forums/app.php/feed?f=141">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2013</span>
								</a>
							-->
																		<a href="./viewforum.php?f=141" class="forumtitle">2013</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=143" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2013 Build Events</a>, 															<a href="./viewforum.php?f=142" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2013 Lab Events</a>, 															<a href="./viewforum.php?f=144" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2013 Study Events</a>, 															<a href="./viewforum.php?f=149" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2013 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=150" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2013 Nationals</a>, 															<a href="./viewforum.php?f=151" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2013 News</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>151</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">151 <dfn>Topics</dfn></dd>
					<dd class="posts">14041 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=149&amp;p=245809#p245809" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=11460" style="color: #000000;" class="username-coloured">Skink</a>																	<a href="./viewtopic.php?f=149&amp;p=245809#p245809" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 28th, 2013, 7:00 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2014" href="/forums/app.php/feed?f=165">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2014</span>
								</a>
							-->
																		<a href="./viewforum.php?f=165" class="forumtitle">2014</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=168" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 Build Events</a>, 															<a href="./viewforum.php?f=166" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 Lab Events</a>, 															<a href="./viewforum.php?f=167" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 Study Events</a>, 															<a href="./viewforum.php?f=173" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 Question Marathons</a>, 															<a href="./viewforum.php?f=170" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=171" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 Nationals</a>, 															<a href="./viewforum.php?f=172" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2014 News</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>120</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">120 <dfn>Topics</dfn></dd>
					<dd class="posts">10301 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=170&amp;p=262021#p262021" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=23662" class="username">h2ogirl</a>																	<a href="./viewtopic.php?f=170&amp;p=262021#p262021" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />September 10th, 2014, 3:23 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2015" href="/forums/app.php/feed?f=185">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2015</span>
								</a>
							-->
																		<a href="./viewforum.php?f=185" class="forumtitle">2015</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=188" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Build Events</a>, 															<a href="./viewforum.php?f=186" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Lab Events</a>, 															<a href="./viewforum.php?f=187" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Study Events</a>, 															<a href="./viewforum.php?f=193" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Question Marathons</a>, 															<a href="./viewforum.php?f=195" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=200" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Competition Advertising</a>, 															<a href="./viewforum.php?f=196" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 Nationals</a>, 															<a href="./viewforum.php?f=194" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2015 News</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>181</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">181 <dfn>Topics</dfn></dd>
					<dd class="posts">9681 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=195&amp;p=279327#p279327" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=15406" style="color: #AA0000;" class="username-coloured">iwonder</a>																	<a href="./viewtopic.php?f=195&amp;p=279327#p279327" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />August 30th, 2015, 5:59 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2016" href="/forums/app.php/feed?f=213">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2016</span>
								</a>
							-->
																		<a href="./viewforum.php?f=213" class="forumtitle">2016</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=206" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Build Events</a>, 															<a href="./viewforum.php?f=207" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Lab Events</a>, 															<a href="./viewforum.php?f=208" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Study Events</a>, 															<a href="./viewforum.php?f=217" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Question Marathons</a>, 															<a href="./viewforum.php?f=214" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=218" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Competition Advertising</a>, 															<a href="./viewforum.php?f=215" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 Nationals</a>, 															<a href="./viewforum.php?f=216" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2016 News</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>305</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">305 <dfn>Topics</dfn></dd>
					<dd class="posts">9496 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=215&amp;p=309669#p309669" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=22093" style="color: #AA0000;" class="username-coloured">bernard</a>																	<a href="./viewtopic.php?f=215&amp;p=309669#p309669" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />March 14th, 2017, 12:09 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2017" href="/forums/app.php/feed?f=224">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2017</span>
								</a>
							-->
																		<a href="./viewforum.php?f=224" class="forumtitle">2017</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=225" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Build Events</a>, 															<a href="./viewforum.php?f=226" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Lab Events</a>, 															<a href="./viewforum.php?f=227" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Study Events</a>, 															<a href="./viewforum.php?f=228" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Question Marathons</a>, 															<a href="./viewforum.php?f=229" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Invitationals, Regionals, and States</a>, 															<a href="./viewforum.php?f=230" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Competition Advertising</a>, 															<a href="./viewforum.php?f=231" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2017 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>305</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">305 <dfn>Topics</dfn></dd>
					<dd class="posts">11787 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=229&amp;p=318095#p318095" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=27856" class="username">maxxxxx</a>																	<a href="./viewtopic.php?f=229&amp;p=318095#p318095" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />September 4th, 2017, 8:55 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2018" href="/forums/app.php/feed?f=236">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2018</span>
								</a>
							-->
																		<a href="./viewforum.php?f=236" class="forumtitle">2018</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=263" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Build Events</a>, 															<a href="./viewforum.php?f=264" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Lab Events</a>, 															<a href="./viewforum.php?f=265" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Study Events</a>, 															<a href="./viewforum.php?f=266" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Question Marathons</a>, 															<a href="./viewforum.php?f=267" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Invitationals</a>, 															<a href="./viewforum.php?f=268" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Regionals &amp; States</a>, 															<a href="./viewforum.php?f=269" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2018 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>382</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">382 <dfn>Topics</dfn></dd>
					<dd class="posts">17581 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=268&amp;p=357571#p357571" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=32375" style="color: #000000;" class="username-coloured">Anomaly</a>																	<a href="./viewtopic.php?f=268&amp;p=357571#p357571" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />September 3rd, 2018, 6:40 pm
													</span>
					</dd>
							</dl>
					</li>
			
	
	
			
					<li class="row">
						<dl class="row-item forum_read_locked">
				<dt title="Forum locked">
										<div class="list-inner">
													<!--
								<a class="feed-icon-forum" title="Feed - 2019" href="/forums/app.php/feed?f=262">
									<i class="icon fa-rss-square fa-fw icon-orange" aria-hidden="true"></i><span class="sr-only">Feed - 2019</span>
								</a>
							-->
																		<a href="./viewforum.php?f=262" class="forumtitle">2019</a>
																																<br /><strong>Subforums:</strong>
															<a href="./viewforum.php?f=326" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Build Events</a>, 															<a href="./viewforum.php?f=327" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Lab Events</a>, 															<a href="./viewforum.php?f=328" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Study Events</a>, 															<a href="./viewforum.php?f=329" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Question Marathons</a>, 															<a href="./viewforum.php?f=330" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Invitationals</a>, 															<a href="./viewforum.php?f=331" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Regionals &amp; States</a>, 															<a href="./viewforum.php?f=332" class="subforum read" title="No unread posts">
									<i class="icon fa-file-o fa-fw  icon-blue icon-md" aria-hidden="true"></i>2019 Nationals</a>																				
												<div class="responsive-show" style="display: none;">
															Topics: <strong>392</strong>
													</div>
											</div>
				</dt>
									<dd class="topics">392 <dfn>Topics</dfn></dd>
					<dd class="posts">17896 <dfn>Posts</dfn></dd>
					<dd class="lastpost">
						<span>
																						<dfn>Last post</dfn>
																										<a href="./viewtopic.php?f=331&amp;p=397149#p397149" title="Re: Illinois 2014" class="lastsubject">Re: Illinois 2014</a> <br />
																	by <a href="./memberlist.php?mode=viewprofile&amp;u=42415" class="username">amk578</a>																	<a href="./viewtopic.php?f=331&amp;p=397149#p397149" title="View the latest post">
										<i class="icon fa-external-link-square fa-fw icon-lightgray icon-md" aria-hidden="true"></i><span class="sr-only">View the latest post</span>
									</a>
																<br />September 2nd, 2019, 8:25 pm
													</span>
					</dd>
							</dl>
					</li>
			
				</ul>

			</div>
		</div>
		


	<form method="post" action="./ucp.php?mode=login" class="headerspace">
	<h3><a href="./ucp.php?mode=login">Login</a>&nbsp; &bull; &nbsp;<a href="./ucp.php?mode=register">Register</a></h3>
		<fieldset class="quick-login">
			<label for="username"><span>Username:</span> <input type="text" tabindex="1" name="username" id="username" size="10" class="inputbox" title="Username" /></label>
			<label for="password"><span>Password:</span> <input type="password" tabindex="2" name="password" id="password" size="10" class="inputbox" title="Password" autocomplete="off" /></label>
							<a href="./ucp.php?mode=sendpassword">I forgot my password</a>
										<span class="responsive-hide">|</span> <label for="autologin">Remember me <input type="checkbox" tabindex="4" name="autologin" id="autologin" /></label>
						<input type="submit" tabindex="5" name="login" value="Login" class="button2" />
			<input type="hidden" name="redirect" value="./index.php?" />
<input type="hidden" name="creation_time" value="1596763484" />
<input type="hidden" name="form_token" value="b6e516d6e7903d25df87b1c707bdf0a818569956" />

			
		</fieldset>
	</form>


	<div class="stat-block online-list">
		<h3><a href="./viewonline.php">Who is online</a></h3>		<p>
						In total there are <strong>303</strong> users online :: 3 registered, 2 hidden and 298 guests (based on users active over the past 5 minutes)<br />Most users ever online was <strong>442</strong> on July 3rd, 2020, 6:44 pm<br /> 
							<br />Registered users: <span style="color: #9E8DA7;" class="username-coloured">Bing [Bot]</span>, <span class="username">Google [Bot]</span>, <span class="username">Majestic-12 [Bot]</span>
				<br /><em>Legend: <a style="color:#AA0000" href="./memberlist.php?mode=group&amp;g=5">Administrators</a>, <a style="color:#00AA00" href="./memberlist.php?mode=group&amp;g=4">Global moderators</a>, <a style="color:#00AA00" href="./memberlist.php?mode=group&amp;g=118">​​Staff Emeritus</a>, <a style="color:#000077" href="./memberlist.php?mode=group&amp;g=52">​​​Gallery Moderators</a>, <a style="color:#000077" href="./memberlist.php?mode=group&amp;g=7">​​​Wiki Moderators</a>, <a style="color:#000000" href="./memberlist.php?mode=group&amp;g=9">​​​​Exalted Member</a></em>								</p>
	</div>


	<div class="stat-block birthday-list">
		<h3>Birthdays</h3>
		<p>
						Congratulations to: <strong><a href="./memberlist.php?mode=viewprofile&amp;u=11795" class="username">Uranium235</a> (75), <a href="./memberlist.php?mode=viewprofile&amp;u=19477" class="username">TymnBreammete</a> (38), <a href="./memberlist.php?mode=viewprofile&amp;u=37928" class="username">Madi123</a> (36), <a href="./memberlist.php?mode=viewprofile&amp;u=2368" class="username">SouthernAly</a> (34), <a href="./memberlist.php?mode=viewprofile&amp;u=47245" class="username">evashoppingvn</a> (33), <a href="./memberlist.php?mode=viewprofile&amp;u=51008" class="username">phenphilippines</a> (30), <a href="./memberlist.php?mode=viewprofile&amp;u=63676" class="username">jazielc4dc4</a> (30), <a href="./memberlist.php?mode=viewprofile&amp;u=33722" class="username">sarawillor</a> (29), <a href="./memberlist.php?mode=viewprofile&amp;u=62864" class="username">Chabesreh385</a> (29), <a href="./memberlist.php?mode=viewprofile&amp;u=11144" class="username">jazzy009</a> (28), <a href="./memberlist.php?mode=viewprofile&amp;u=38741" class="username">linhle0125</a> (28), <a href="./memberlist.php?mode=viewprofile&amp;u=6645" class="username">roadsci</a> (27), <a href="./memberlist.php?mode=viewprofile&amp;u=65810" class="username">coffeerush</a> (26), <a href="./memberlist.php?mode=viewprofile&amp;u=33651" class="username">supplyservice</a> (25), <a href="./memberlist.php?mode=viewprofile&amp;u=38074" class="username">amypotteranz1612</a> (25), <a href="./memberlist.php?mode=viewprofile&amp;u=45365" class="username">Guriy</a> (15)</strong>					</p>
	</div>

	<div class="stat-block statistics">
		<h3>Statistics</h3>
		<p>
						Total posts <strong>396816</strong> &bull; Total topics <strong>7265</strong> &bull; Total members <strong>47605</strong> &bull; Our newest member <strong><a href="./memberlist.php?mode=viewprofile&amp;u=69837" class="username">extramale</a></strong>
					</p>
	</div>

<div class="stat-block thanks-list">
	<h3><a href="">Thanks Toplist — 10</a></h3>
	<p><a href="./memberlist.php?mode=viewprofile&amp;u=10640" style="color: #555555;" class="username-coloured">Assassinator</a> (371), <a href="./memberlist.php?mode=viewprofile&amp;u=22093" style="color: #AA0000;" class="username-coloured">bernard</a> (223), <a href="./memberlist.php?mode=viewprofile&amp;u=62443" style="color: #9E8DA7;" class="username-coloured">Pi-Bot</a> (213), <a href="./memberlist.php?mode=viewprofile&amp;u=44614" style="color: #000077;" class="username-coloured">pepperonipi</a> (154), <a href="./memberlist.php?mode=viewprofile&amp;u=35776" class="username">hmma</a> (147), <a href="./memberlist.php?mode=viewprofile&amp;u=47584" style="color: #00AA00;" class="username-coloured">gz839918</a> (128), <a href="./memberlist.php?mode=viewprofile&amp;u=37001" class="username">sciolyperson1</a> (127), <a href="./memberlist.php?mode=viewprofile&amp;u=11259" style="color: #AA0000;" class="username-coloured">EastStroudsburg13</a> (126), <a href="./memberlist.php?mode=viewprofile&amp;u=59158" class="username">SilverBreeze</a> (86), <a href="./memberlist.php?mode=viewprofile&amp;u=18648" style="color: #00AA00;" class="username-coloured">pikachu4919</a> (85)</p>
</div>

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