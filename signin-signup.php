<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/signin-signup.css">
    <title>Get a Virtual Assistant | Bayer VA Services</title>
</head>
<body>
    <div class="container" id="container">
        <div class="signin-signup">
            <div class="form-container sign-up-container">
                <div class="image-content">
                    <img src="images/Allura Online Searching (1).png">
                </div>
            </div>
        </div>
        <div class="form-container sign-in-container">
            <div class="image-content">
                <img src="images/Allura Online Searching.png">
            </div>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <div class="grid-left-container">
                        <div class="back-homepage">
                            <a href="#homepage"><i style="font-size:24px" class="fa" title="Back to the homepage">&#xf060;</i></a>
                        </div>
                        <div>
                            <h4>Already have an account?</h4>
                        </div>
                        <div class="signup-button">
                            <button class="ghost" id="signIn" title="Sign in">Sign in</button>
                        </div>
                    </div>
                    <div class="welcome-signup">
                        <h1>Welcome to Titan Outsourcing</h1>
                    </div>
                    <div class="sign-up-form">
                        <h3>Sign up your account</h3>
                    </div>
                    <form action="#">
                        <div class="forms">
                            <div>
                                <span><h2>Name :</h2></span>
                                <input type="text" name="name" required>
                            </div>
                            <div>
                                <span><h2>Contact Number</h2></span>
                                <input type="text" name="phoneNumber" id="phoneNumber" oninput="this.value = this.value.replace(/[^0-9\W]/g, '').substring(0, 20);" required>
                            </div>
                            <div>
                                <span><h2>Email :</h2></span>
                                <input type="email" name="email"required>
                            </div>
                            <div>
                                <span><h2>Password :</h2></span>
                                <div class="password-container">
                                    <input type="password" name="password" id="passwords" required>
                                    <i class="fa fa-eye" id="togglePasswords"></i>
                                </div>
                            </div>
                        </div>
                        <div class="signup">
                            <input type="submit" name="submit" value="Sign up">
                        </div>
                    </form>
                </div>
                <div class="overlay-panel overlay-right">
                    <div class="grid-left-container">
                        <div class="back-homepage">
                            <a href="#homepage"><i style="font-size:24px" class="fa" title="Back to the homepage">&#xf060;</i></a>
                        </div>
                        <div>
                            <h4>Don't have an account?</h4>
                        </div>
                        <div class="signup-button">
                            <button class="ghost" id="signUp" title="Sign up">Sign up</button>
                        </div>
                    </div>
                    <div class="welcome-signin">
                        <h1>Welcome to Titan Outsourcing</h1>
                    </div>
                    <div class="sign-in-form">
                        <h3>Sign in your account</h3>
                    </div>
                    <form action="#">
                        <div class="form">
                            <div>
                                <span><h2>Email  :</h2></span>
                                <input type="email" name="email" required>
                            </div>
                            <div>
                                <span><h2>Password :</h2></span>
                                <div class="password-container">
                                    <input type="password" name="password" id="password" required>
                                    <i class="fa fa-eye" id="togglePassword"></i>
                                </div>
                            </div>

                            <div class="signin">
                                <input type="submit" name="submit" value="Sign in">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/signin-signup.js"></script>
</body>
</html>
