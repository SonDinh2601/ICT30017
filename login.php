<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="style.css" rel="stylesheet">

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 bg-white shadow box-area">

            <!-- Left -->
<!--            <div class="col-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: lightblue">-->
<!--                <div class="feature-image mb-3">-->
<!--                    <img src="pic/login/login_1.jpg" class="img-fluid rounded mx-auto d-block">-->
<!--                </div>-->
<!--                <p class="text-white fs-2 text-center">Be verified</p>-->
<!--                <small class="text-white text-wrap text-center" style="width: 17rem">Join the healthcare system now!</small>-->
<!--            </div>-->
            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center left-box" >
            </div>

            <!-- Right -->
            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Hello Again!</h2>
                        <p>We are happy to have you back.</p>
                        <div class="input-login mb-3">
                            <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email Address"/>
                        </div>
                        <div class="input-login mb-1">
                            <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password"/>
                        </div>
                        <div class="input-login mb-5 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="formCheck"/>
                                <label for="formCheck" class="form-check-label text-secondary">
                                    <small>Remember Me</small>
                                </label>
                            </div>
                            <div class="forgot">
                                <small>
                                    <a href="#">Forgot Password?</a>
                                </small>
                            </div>
                        </div>
                        <div class="input-login mb-3">
                            <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                        </div>
                        <div class="input-login mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6">
                                <img src="pic/login/google.svg" alt="google" style="width:20px">
                                <small>Sign in with Google</small>
                            </button>
                        </div>
                        <div class="row">
                            <small>Don't have account? 
                                <a href="#">Sign Up</a>
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>