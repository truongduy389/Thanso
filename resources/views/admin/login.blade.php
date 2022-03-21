<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

     <!-- Font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

     <!-- Boostrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css')}}">

</head>
<body>
    <div class="login d-flex justify-content-center align-items-center">
        <div class="login-box d-flex flex-wrap">
            <div class="col-lg-6 col-sm-12 bg-main-color d-flex flex-column justify-content-center align-items-start">
                <h1>Welcome back!</h1>
                <p class="text-white">You can sign in to access with your existing account.</p>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center align-items-start px-5">
                <h2>Sign in</h2>
                <?php
                $message = Session::get('message');
                if($message){
                    echo $message;
                    Session::put('message'.null);
                }
                ?>
                <form action="{{URL::to('/admin-dashboard')}}" method="post">
                    {{csrf_field()}}
                <div class="login-email mt-4 d-flex align-items-center px-3">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="email" id="" placeholder="Email">
                </div>
                <div class="login-password mt-3 d-flex align-items-center px-3">
                    <i class="fa-solid fa-unlock-keyhole"></i>
                    <input type="password" name="password" id="" placeholder="Password">
                </div>
                <button type="submit" name="submit_loginadmin" class="mt-4">Sign in</button>
                </form>
                <div class="mt-5 d-flex">
                    <span>Don't have an account?</span><a class="ps-2 color-result" href="#">Create a new account</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>