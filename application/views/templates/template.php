<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>###</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/application.css'); ?>" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<?php echo $_scripts; ?>
	<?php echo $_styles; ?>
</head>
<body>
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({
        appId      : '<?php echo $this->config->item("fb_appId"); ?>', // App ID
        channelUrl : '<?php echo $this->config->item("fb_channelUrl"); ?>', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
      });

      // Additional initialization code here
      FB.Canvas.setSize({ width: 810, height: 810 });
    };

    // Load the SDK Asynchronously
    (function(d){
       var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
       if (d.getElementById(id)) {return;}
       js = d.createElement('script'); js.id = id; js.async = true;
       js.src = "//connect.facebook.net/en_US/all.js";
       ref.parentNode.insertBefore(js, ref);
     }(document));
  </script>
  <div class="container">
		<div id="header" class="row">
		  <?php echo $header; ?>
		</div>
		<div id="content" class="row">
			<?php echo $content; ?>
		</div>
		<div id="footer" class="row">
			<?php echo $footer; ?>
		</div>
	</div>
</body>
</html>