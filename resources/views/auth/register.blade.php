<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Register</title>

    <link href="{{asset('backened/css/font-face.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('backened/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backened/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backened/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('backened/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('backened/vendor/animsition/animsition.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('backened/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('backened/vendor/wow/animate.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('backened/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('backened/vendor/slick/slick.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('backened/vendor/select2/select2.min.css" rel="stylesheet')}}" media="all">
    <link href="{{asset('backened/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('backened/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                              @csrf
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input  id="name" name="name" value="{{ old('name') }}" class="au-input au-input--full" type="text" name="name" placeholder="username" required
                                </div>

                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input  id="email" name="email" value="{{ old('email') }}" class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input  id="password"  class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">Password</label>
                                    <input  id="password-confirm"  class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Password" required>
                                </div>

                               <!--  <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Agree the terms and policy
                                    </label>
                                </div> -->
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit"> {{ __('Register') }}</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Already have account?
                                    <a href="{{route('login')}}">Sign In</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    - Jquery JS-->
    <script src="{{asset('backened/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('backened/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('backened/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('backened/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('backened/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('backened/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('backened/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('backened/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('backened/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('backened/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('backened/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('backened/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('backened/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('backened/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
