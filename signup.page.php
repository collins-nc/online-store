
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
      <form action="includes/signup.inc.php" method="post">
        <div class="col-md-6 right-side">
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="text" name = "first_name" id="first_name">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="first_name">
                <span class="input__label-content input__label-content--hoshi">Name</span>
            </label>
            </span>
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="text" name = "last_name" id="last_name">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="last_name">
                <span class="input__label-content input__label-content--hoshi">Surname</span>
            </label>
            </span>
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="text" name="email" id="email">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="email">
                <span class="input__label-content input__label-content--hoshi">E-mail</span>
            </label>
            </span>
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="date" name = "date" id="date">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="name">Date of birth</label>
            </span>
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="password" name="password" id="password">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password">
                <span class="input__label-content input__label-content--hoshi">Password</span>
            </label>
            </span>
            <span class="input input--hoshi">
            <input class="input__field input__field--hoshi" type="password" name="re_password" id="password1">
            <label class="input__label input__label--hoshi input__label--hoshi-color-3" for="password1">
                <span class="input__label-content input__label-content--hoshi">Repeat Passowrd</span>
            </label>
            </span>
            <div class="cta">
            <button class="btn btn-primary pull-left" name ="submit" type="submit">
                Sign-Up Now
            </button>
      </form>
        
          <span><a href="login.page.php">I am already a member</a></span>
        </div>
      </div>
    </div>
  </div>

</div> <!-- end #main-wrapper -->

<!-- Scripts -->
</html>