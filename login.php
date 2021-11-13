<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In & Sign Up Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1788c719dd.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/css/login.css" />
</head>
    
<body>
    <div class="container">
        <div class="container__forms">
        <div class="form">
            <form action="validation.php" method="post" class="form__sign-in">
            <h2 class="form__title">Sign In</h2>
            <div class="form__input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Username" required />
            </div>
            <div class="form__input-field">
                <i class="fas fa-lock"></i>
                <input type="password" id="myInput" placeholder="Password" required />
                <i class="fas fa-eye" onclick="myFunction()"></i>
                <!-- <i class="fas fa-eye-slash"></i> -->
            </div>
            <input class="form__submit" type="submit" value="Login" />
            <p class="form__social-text">Or Sign in with social platforms</p>
            <div class="form__social-media">
                <a href="#" class="form__social-icons">
                <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="form__social-icons">
                <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="form__social-icons">
                <i class="fab fa-google"></i>
                </a>
                <a href="#" class="form__social-icons">
                <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
            </form>
    
            <form action="registration.php" method="post" class="form__sign-up">
                <h2 class="form__title">Sign Up</h2>
                <div class="form__input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" placeholder="Username" required />
                </div>
                <div class="form__input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="email" placeholder="Email" required />
                </div>
                <div class="form__input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="myInput1" placeholder="Password" required />
                    <i class="fas fa-eye-slash" onclick="myFunction1()"></i>
                </div>
                <!-- <div class="form__input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="Password" placeholder="Confirm Password" required />
                </div> -->
        
                <input class="form__submit" type="submit" value="Sign Up" />
        
                <p class="form__social-text">Or Sign up with social platforms</p>
                <div class="form__social-media">
                    <a href="#" class="form__social-icons">
                    <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="form__social-icons">
                    <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="form__social-icons">
                    <i class="fab fa-google"></i>
                    </a>
                    <a href="#" class="form__social-icons">
                    <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </form>
        </div>
        </div>
        <div class="container__panels">
        <div class="panel panel__left">
            <div class="panel__content">
                <div class="panel_logo_left">
                    <img src="/assets/logo111.png" alt="" width="100" class="panel_img_left">
                </div>
                <h3 class="panel__title">New here ?</h3>
                <p class="panel__paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloremque adipisci tempore aliquid?
                </p>
            <button class="btn btn-transparent" id="sign-up-btn">
                Sign Up
            </button>
            </div>
            <img class="panel__image" src="/assets/login1.png" alt="" />
        </div>
        <div class="panel panel__right">
            <div class="panel__content">
                <div class="panel_logo_right">
                    <img src="/assets/logo111.png" alt="" width="100" class="panel_img_left">
                </div>
            <h3 class="panel__title">One of us ?</h3>
            <p class="panel__paragraph">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Doloremque adipisci tempore aliquid?
            </p>
            <button class="btn btn-transparent" id="sign-in-btn">
                Sign In
            </button>
            <img class="panel__image" src="/assets/login2.png" alt="" />  
            </div>
            
        </div>
        </div>
    </div>

    <script>
        var a = document.getElementByClass(".fa-eye-slash");
        a.style.display = "none";
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script>
        function myFunction1() {
            var x = document.getElementById("myInput1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <script src="/js/login.js"></script>
</body>
</html>