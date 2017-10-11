<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
    .myback{
      background:url("../wp-content/themes/nile/images/logo_section_bg.png") !important;
    }
    .header{
      color: white;
      text-align: center;
      cursor: pointer;
      font-size: 50px;
      padding: 10px;
    }
  </style>
</head>

<body class="myback">
  <div class="header" onclick="gotoHome()">Load Distribution Application</div>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="http://localhost:8000/LDA/SignUp/" method="post">

          <input type="hidden" name="csrfmiddlewaretoken" value="Wal9C8SZ3FszF0xjVOpgLdeEi8Bikid9LFwdAjO9YBt52zioIhwVGdhSJgz5nfCO">
            <div class="field-wrap">
              <label>
                Full Name<span class="req">*</span>
              </label>
              <input type="text" name="fullName" required autocomplete="off" />
            </div>
          
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="http://localhost:8000/LDA/Login/" method="post">
          <input type="hidden" name="csrfmiddlewaretoken" value="Wal9C8SZ3FszF0xjVOpgLdeEi8Bikid9LFwdAjO9YBt52zioIhwVGdhSJgz5nfCO">
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
    <script type="text/javascript">
      function gotoHome() {
        window.location.href='../';
      }
    </script>

</body>
</html>
