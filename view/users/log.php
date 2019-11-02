<?php require_once'view/conheader.php'?>


<!DOCTYPE html>
		<html xmlns="http://www.w3.org/1999/xhtml" lang="fr-FR">
    <link rel="stylesheet" type="text/css" href="/public/style/con.css">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Se connecter</title>

 <style media="screen" id="loginpress-style">
    
    
</style>
	<meta name='robots' content='noindex,noarchive' />
	<meta name='referrer' content='strict-origin-when-cross-origin' />
		<meta name="viewport" content="width=device-width" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-fr-fr">
		<div id="login">
	
	<form name="loginform" id="loginform" action="<?php echo URL.'Users/log';?>" method="post">
	<p>
		<label for="user_login">Identifiant ou adresse e-mail<br />
		<input type="text"name="login" id="user_login" class="input" value="" size="20" autocapitalize="off" /></label>
	</p>
	<p>
		<label for="user_pass">Mot de passe<br />
		<input type="password" name="pasword" id="user_pass" class="input" value="" size="20" /></label>
  </p>
           <div class="alert alert-danger" style="color:red"><?php  if(!empty( $data)){ echo $data;}?></div>
<script>
    function submitEnable() {
                 var button = document.getElementById('wp-submit');
                 if (button === null) {
                     button = document.getElementById('submit');
                 }
                 if (button !== null) {
                     button.removeAttribute('disabled');
                 }
             }
    function submitDisable() {
                 var button = document.getElementById('wp-submit');
                 if (button === null) {
                     button = document.getElementById('submit');
                 }
                 if (button !== null) {
                     button.setAttribute('disabled','disabled');
                 }
             }
</script>
<noscript>
  <div style="width: 100%; height: 473px;">
      <div style="width: 100%; height: 422px; position: relative;">
          <div style="width: 302px; height: 422px; position: relative;">
             
          </div>
          <div style="width: 100%; height: 60px; border-style: none;
              bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px; background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
              <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  title="response" class="g-recaptcha-response"
                  style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                  margin: 10px 25px; padding: 0px; resize: none;" value="">
              </textarea>
          </div>
      </div>
</div><br>
</noscript>
	<p class="submit">
		<input type="submit" name="" id="wp-submit" class="button button-primary button-large" value="Se connecter" />
				<input type="hidden" name="connecter" value="https://waytolearnx.com/inscription/" />
					<input type="hidden" name="testcookie" value="1" />
	</p>
	</form>

	<script type="text/javascript">
	function wp_attempt_focus(){
	setTimeout( function(){ try{
			d = document.getElementById('user_login');
				d.focus();
	d.select();
	} catch(e){}
	}, 200);
	}

			wp_attempt_focus();
			if(typeof wpOnload=='function')wpOnload();
			</script>


	</div>

	
	<div class="footer-wrapper"><div class="footer-cont"></div></div>
<script>

document.addEventListener('DOMContentLoaded', function(){
    if (navigator.userAgent.indexOf("Firefox") != -1) {
      var body = document.body;
      body.classList.add("firefox");
    }
    // your code goes here
    if ( document.getElementById('user_pass') ) {
      var loginpress_user_pass = document.getElementById('user_pass');
      var loginpress_wrapper = document.createElement('div');
      loginpress_wrapper.classList.add('user-pass-fields');
      // insert wrapper before el in the DOM tree
      user_pass.parentNode.insertBefore(loginpress_wrapper, loginpress_user_pass);

      // move el into wrapper
      loginpress_wrapper.appendChild(loginpress_user_pass);
      var loginpress_user_ps = document.getElementsByClassName('user-pass-fields');
      var loginpress_node = document.createElement("div");
      loginpress_node.classList.add('loginpress-caps-lock');
      var loginpress_textnode = document.createTextNode('Caps Lock is on');
      loginpress_node.appendChild(loginpress_textnode);
      loginpress_user_ps[0].appendChild(loginpress_node);
    }

  }, false);
  window.onload = function(e) {

    var capsLock = 'off';
    var passwordField = document.getElementById("user_pass");
    if ( passwordField ) {
      passwordField.onkeydown = function(e) {
        var el = this;
        var caps = event.getModifierState && event.getModifierState( 'CapsLock' );
        if ( caps ) {

          capsLock = 'on';
          el.nextElementSibling.style.display = "block";
        } else {

          capsLock = 'off';
          el.nextElementSibling.style.display = "none";
        }
      };

      passwordField.onblur = function(e) {

        var el = this;
        el.nextElementSibling.style.display = "none";
      };

      passwordField.onfocus = function(e) {

        var el = this;
        if ( capsLock == 'on' ) {

          el.nextElementSibling.style.display = "block";
        }else{

          el.nextElementSibling.style.display = "none";
        }
      };
    }



    function _LoginPressFormSubmitLoader() {

      var subButton = document.getElementsByClassName("submit");
      var myButton  = document.getElementById("wp-submit");
      var image     = document.createElement("img");

      myButton.setAttribute('disabled', 'disabled');
      image.setAttribute( "width", "20" );
      image.setAttribute( "height", "20" );
      image.setAttribute( "alt", "Login Loader" );
      image.setAttribute( "style", "display: block;margin: 0 auto;position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);" );
      subButton[0].appendChild(image);
    }

  };

  </script>
	<div class="clear"></div>
	</body>
	</html>
	