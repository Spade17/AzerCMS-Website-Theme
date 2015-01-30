<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-us" lang="en-us">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>{title}</title>
		<link href="./styles/{style}/css/style.css" rel="stylesheet" type="text/css" media="screen"/>
		<script type="text/javascript" src="./styles/global/js/store.js"></script>
		<script type="text/javascript" src="./styles/global/js/jquery.js"></script>
		<script type="text/javascript" src="./styles/global/js/jquery.min.js"></script>
		<script type="text/javascript" src="./styles/global/js/link.js"></script>
		<script type="text/javascript" src="./styles/global/js/jquery.dhslider.js"></script>
		<script type="text/javascript" src="./styles/global/js/interface.js"></script>
		{wowhead}
		{module.shoutbox.js}<!-- [END ShoutBox JS Include] {/module.shoutbox.js} [Important Don't Remove] -->
		<script type="text/javascript">
		        $(document).ready(function () {
		            $(".slider").DHslider({
		                speed: 1000,
		                auto: {
		                    speed: 5000,
		                    active: true
		                },
			    controls: {
				active: true,
				action: {
				    type: "fade",
				    speed: 1000,
				    fixed: true
				},
				numbers: false,
				callback: function () {}
			    },
		            });
		        });
		</script>
	</head>
	<body>
		<!-- LOGO -->
		<div id="logo"><a href="./"><img src="./styles/{style}/images/logo.png" /></a></div><br />
		<!-- MENU -->
		<div id="menu">
			<a href="./">Home</a>
			<a href="./?page=connect">Connect</a>
			{login=-}<a href="./?page=register">register</a>{/login}
			<a href="./forums">Forums</a>
			<a href="./?page=vote">Vote</a>
			<a href="./?page=donate">Donate</a>
			<a href="./?page=changelog">Changelog</a>
		</div>
		<!-- SLIDER -->
		<div id="slider">
			<div class="slider">
				<div class="elements">
					<img src="./styles/{style}/images/slider/slider-1.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-2.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-3.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-4.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-5.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-6.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-7.jpg" alt="" border="0" />
					<img src="./styles/{style}/images/slider/slider-8.jpg" alt="" border="0" />
				</div>
				<div class="controls"></div>
			</div>
		</div>
		<!-- GLOBAL CONTAINER -->
		<div id="global">
			<!-- LEFT CONTAINER -->
			<div id="left">
				<!-- MEMBERSHIP & ACCOUNT INFOS -->
				<div class="panel">
					<div class="title">{login=Account Details-}Membership{/login}</div>
					<div class="body">
					{login=
						{user_data}
						<p>Welcome, <a href="./?page=account">{session}</a> <span style="float:right"><a class="button" href="./?page=logout">Logout</a></span></p>
						<hr />
						<p>New Messages: <font color="#4e6a1b">{new_message}</font><span style="float:right"><a class="button" href="./?page=inbox">inbox</a>&nbsp;<a class="button" href="./?page=new_message">new</a></span></p>
						<hr />
						<p>Account Status:<span>{user_rank}</span></p>
						<p>Banned: {user_banned}</p>
						<p>Vote Points:<font color="#4e6a1b">{vp}</font>.</p>
						<p>Donation Points:<font color="#4e6a1b">{dp}</font>.</p>
						{/user_data}
					-}{/login}
					{login=
						<table style="width:100%;margin:0 auto">
							<tr>
								<td><input type="button" value="Account" onclick="window.location='./?page=account'" /></td>
								<td><input type="button" value="Store" onclick="window.location='./?page=store_select'" /></td>
							</tr>
							<tr>
								<td><input type="button" value="Donate" onclick="window.location='./?page=donate'" /></td>
								<td><input type="button" value="Vote" onclick="window.location='./?page=vote'" /></td>
							</tr>
						</table>
					-}
						<form method="post" action="">
							<table style="margin:0 auto">
								<tr>
									<td style="text-transform:uppercase;text-shadow:1px 1px 1px #000;font-size:12px;">Username</td>
									<td><input type="text" name="username" autocomplete="off"></td>
								</tr>
								<tr>
									<td style="text-transform:uppercase;text-shadow:1px 1px 1px #000;font-size:12px;">Password</td>
									<td><input type="password" name="password" autocomplete="off"></td>
								</tr>
								<tr>
									<td><input type="submit" name="login" value="login" /></td>
									<td><input type="button" name="help" value="lost password" onclick="window.location='./?page=forgot'"/></td>
								</tr>
								<tr>
									<th colspan="2"><input type="button" name="register" value="create new account" style="color:#4e6a1b" onclick="window.location='./?page=register'"/></th>
								</tr>
							</table>
						</form>{/login}
					</div>
					<div class="bottom"></div>
				</div>
				<!-- MEMBERSHIP & ACCOUNT INFOS -->
				<div class="panel">
					<div class="title">Navigation</div>
					<div class="body">
						<table style="width:100%;margin:0 auto">
							<tr><td><input type="button" value="Changelog" onclick="window.location='./forums/viewforum.php?f=51'" /></td></tr>
							<tr><td><input type="button" value="Forums" onclick="window.location='./forums'" /></td></tr>
							<tr><td><input type="button" value="Our Staff" onclick="window.location='./?page=team'" /></td></tr>
							<tr><td><input type="button" value="Bug Tracker" onclick="window.location='./forums/viewforum.php?f=38'" /></td></tr>
						</table>
					</div>
					<div class="bottom"></div>
				</div>
			</div>
			<!-- MIDDLE CONTAINER -->
			<div id="middle">
				{page_system}
			</div>
			<!-- RIGHT CONTAINIER -->
			<div id="right">
				<!-- PENEL -->
				<div class="panel">
					<div class="title">Realm Status</div>
					<div class="body">
						<!--Begin Realms-->
						{realms}
							<table style="width:100%;margin:0 auto;">
								<tr>
									<td style="color:#4e6a1b"><a href="?page=realm&id={id}">{rname}</a></td>
									<td style="background:#000;border:1px solid #2a1306;padding:3px 5px;">{total_online.{char_db}} Players <span style="float:right">Online</span></td>
								</tr>
								<tr>
									<td style="text-align:center;font-size:11px;">Horde : <span>{horde.{char_db}}</span></td>
									<td style="text-align:center;font-size:11px;">Alliance : <span>{aly.{char_db}}</span></td>
								</tr>
								<tr>
									<th colspan="2"><hr /></th>
								</tr>
							</table>
						{/realms}
						<!--End Realms-->
						<p style="text-align:center;font-size:12px;">Set realmlist <span>{realmlist}</span></p>
					</div>
					<div class="bottom"></div>
				</div>
				{login=
				<!-- SHOUTBOX -->
				<div class="panel" id="shout">
					<div class="title">SHOUTBOX</div>
					<div class="body">
						<table style="width:100%;margin:0 auto;">
							<form action="#sbox" method="POST" name="sbox" id="sbox">
							<tr><td><textarea class="shout" name="sbody"></textarea></td></tr>
							<tr><td><input type="submit" name="shout-post" value="Shout"></td></tr>
							<tr><td>
							<!--Shouts-->
							<!-- Shoutbox {module.shoutbox.data} -->
								<table style="border:1px solid #101e1c;width:100%;font-size:12px;padding:0 5px;border-left:none;"><tr>
									<td align="left"><font color="#90cf5d">{author}</font></td>
									<td align="right" style="font-size:10px;font-weight:bold;">{date}</td>
								</tr></table>
								<table style="border:1px solid #101e1c;width:100%;font-size:12px;padding:0 5px;margin-bottom:10px;border-top:none;border-right:none;"><tr>
									<td><font style="font-size:12px;"><span>{body}</span></font></td>
								</tr></table>
							<!-- {/module.shoutbox.data} -->
							<center><a href="?p={module.shoutbox.prev}#shout">Previous</a> - <a href="?p={module.shoutbox.next}#shout">Next</a></center>
							<!--End Shouts-->
							</td></tr>
							</form></table>
					</div>
					<div class="bottom"></div>
				</div>-}{/login}
			</div>
		</div><br /><br />
		<!-- FOOTER -->
		<div id="footer">
			<a href="./">Home</a> | 
			<a href="./?page=terms">Terms of Service</a> | 
			<a href="./forum">Community</a> | 
			<a href="./?page=support">Support</a> | 
			<a href="./?page=team">Team</a> | 
			<a href="./bugtracker">Bug Tracker</a> | 
			<a href="./?page=contact">Contact Us</a><br />
			<p>This website and its content was created solely for {copyright}™ © {copyright}™ 2014-2015.</p>
			<p>Design and coding by : <a href="" target="_blank">Spade&trade;</a></p>
		</div>
	</body>
</html>