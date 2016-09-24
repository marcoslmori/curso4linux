<html> 
<head>

    <!-- MEU CSS do bootsnipp-->
     <link href="static/pagina5.css" type="text/css" rel="stylesheet" />

     <!-- meu js do bootsnip -->
     <script src="static/pagina5.js"></script>

     <?php require "../aula2/bootstrap.php";?>


    <title>pagina de login</title>
</head>
    <body>

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            
            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert-danger">
                    <?php if ($_GET['error'] == 'invalid_login'): ?>
                        login ou senhas invalidas !!!
                    <?php endif ?>
                </div>
            <?php endif ?>

            <form class="form-signin" action="login.php" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus>
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" >
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
</body>
</html>