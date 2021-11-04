<?php
    require "head.php";
?>

<body>
<body data-new-gr-c-s-check-loaded="14.1037.0" data-gr-ext-installed="">
<div id="main-wrapper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 left-side">
        <header>
          <span>Need an account?</span>
          <h3>Create Account<br>Start shopping</h3>
        </header>
      </div>
      <form action="includes/login.inc.php" method="post">
        <div class="col-md-6 right-side">

            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="text" name = "username" id="username">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">Username</label>
            </span>
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="password" name="password" id="password">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
                <span class="input__label-content input__label-content--hoshi">Password</span>
            </label>
            </span>
            <div class="cta">

            <button class="btn btn-primary pull-left" name ="submit" type="submit">
                Log in
            </button>
      </form>
        
        </div>
      </div>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
</html>