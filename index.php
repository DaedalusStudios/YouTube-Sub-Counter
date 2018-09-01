	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/common.css">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/common.js"></script>

<div class='jumbotron'><h2>Free YouTube Sub Count</h2></div>

<div class='container-fluid'>
	<div class='col-xs-12'>
		<p>I was watching this cool cat named Varghon on Twitch and found out he was manually editing his youtube sub-count in
		OBS every time he found out he had a sub.  That's some dedication, but I felt it could be done better, and I could
		make it available to all streamers.</p>
		<div class='alert-warning'><p>His Twitch=<a href='https://www.twitch.tv/varghon'>https://www.twitch.tv/varghon</a></p>
		<p>His YouTube=<a href='https://www.youtube.com/channel/UCUfILGBfw9C4KPJN014FmOA'>https://www.youtube.com/channel/UCUfILGBfw9C4KPJN014FmOA</a></p></div>
		<p>So here it is, the basic walkthrough for how to set up an automatic Youtube Subscriber update tool.</p>
		<p>This is set to update every 30 seconds, but it can also update when you change scenes.  I tried to make this easy.</p>
		<p>Here's what you need:
		<ul><li>Your Youtube Channel ID (Advanced settings in YouTube <a href='https://www.google.com/url?q=https://support.google.com/youtube/answer/3250431&sa=D&source=hangouts&ust=1535859373588000&usg=AFQjCNH_i42Bxa90uk1_b7tn7UNAhckPtQ'>How-To</a>)</li>
		<li>A goal you want to reach (Optional, and can be updated)</li>
		<li>An idea of how you want the counter to look.</li></ul>
		So, here are the steps:
		</p>
	  <div class='well'>
		  <h4>Part 1</h4>
			<p>You need to create a browser source in OBS</p>
		<p>I suggest you give it a width of 200, and a height of 50.  This is going to start out very small.</p>
		  <p>Then you need to get your URL.  Here's how the URL options work:
	    <p>
			  With a goal:<br>
			  <img src="linkwithgoal.jpg" width="515" height="36"> 
		  </p> 
		  <p>
			  Without a goal:<br>
			  <img src="linkwithoutgoal.jpg" width="460" height="45">
		  </p>
		  Here's one that's not an image for you to copy (with goal):<br>
		  <div class='alert-warning'>Note:  The order of the 'id' and 'goal' don't matter here, as long as they exist.  If using both, you have to use the & to separate them.</div>
		  <pre>http://atlnettech.com/yt/subs.php?id=&goal=</pre>
		  or without goal<br>
		  <pre>http://atlnettech.com/yt/subs.php?id=</pre>
		  <br>
		  Just make sure you put in the YouTube channel Id after the '=' sign or nothing will show!
		  
		  </p>
		</div>
		<div class='well'>
		  <h4>Part 2</h4>
			<p>
			In OBS you'll want to set some CSS.  For medium sized RED font, I suggest the following in the CSS portion of the browser source:
			<pre>body { background-color: rgba(0, 0, 0, 0); margin: 0px auto; overflow: hidden; }<br>.subs{color:red; font-size: 40}</pre>
			
			<p>
				You can play around with the .subs class as much as you want to get the exact look you need.  This will only display the numbers, it doesn't have any text before/after the numbers.
			</p>
			
			Here's an example:<br>
			<img src="browsersource.jpg" width="722" height="612">
			</p>
		</div>

That's it, you're done!

<p>As a note, I want it to be clear that I will not, for any reason, log your YouTube ID.  I can't do anything with it, honestly, but I'm still not logging it.</p>
</div>
