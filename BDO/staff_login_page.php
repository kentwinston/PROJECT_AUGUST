<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN page ni siya</title>
        <link rel="stylesheet" href="assets/css/login.css" />
    </head>
    <body>
        <div class="bg-blur"></div>
        <div id="Layer1">
            <div>
                <img class="r_logo" src="assets/img/bdo-logo.jpg" alt="BDO" />
            </div>
            <div>
                <div class="x">
                    <a href="index.php">+</a>
                </div>
                <p class="rh_top">BDO STAFF LOGIN</p>
                <form id="m_form" name="Form1" method="post" action="login.php" enctype="multipart/form-data">
                    <p>Username</p>
                    <input type="text" id="username_id" name="username" value="" spellcheck="false" />
                    <p>Password</p>
                    <input type="password" id="password_id" name="password" value="" spellcheck="false" />
                    <br />
                    <div id="login">
                        <input type="submit" id="login_id" name="login" value="Login" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
