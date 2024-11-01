<?php function webico_logo() { ?>
    <style type="text/css">
    body{
      background: url(<?php echo WBC_Setting_URL; ?>/assets/bg_login.jpg) !important;
      background-size: cover !important;
    }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo WBC_Setting_URL; ?>/assets/logo.png);
        		height:65px;
        		width:320px;
        		background-size: 320px 65px;
        		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
        #login{
          width:450px !important;

        }
        .login form{
          position: relative !important;
          background: rgba(255, 255, 255, 0.85) !important;
          padding-bottom: 65px !important;
          border-radius: 7px;
        }
        .login form .input, .login input[type=text]{
          padding: 10px !important;
          outline: none !important;
          border: 0;
          box-shadow: none;
        }

        .login form .submit .button-primary{
          position: absolute;
          bottom: 0;
          left: 0;
          right: 0;
          width: 100%;
          padding: 10px;
          height: auto;
          background: #3ea23f;
          border: #fff;
          border-radius: 0;
          text-transform: uppercase;
          font-size: 16px;
          text-shadow: none;
        }
        .login #backtoblog a, .login #nav a {
            text-decoration: none;
            color: #e7e7e7 !important;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'webico_logo' );
