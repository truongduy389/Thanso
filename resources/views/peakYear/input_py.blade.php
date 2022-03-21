<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peak Year</title>

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
    <div class="peak-year-input login d-flex justify-content-center align-items-center">
        <div class="login-box d-flex flex-wrap peak-year">
            <div class="col-lg-6 col-sm-12 d-flex flex-column align-items-start my-5">
                <h1>PEAK YEAR</h1>
                <p>Unlock the milestones of your life</p>
                <img src="/assets/img/achievement.png" alt="">
            </div>
            
            <div class="col-lg-6 col-sm-12 d-flex flex-column align-items-start px-5 my-5">
                <form action="{{ URL::to('insert') }}" method="post">
                    {{ csrf_field() }}
                <div class="login-email px-3">
                    <input type="text" name="namepy" id="" placeholder="Họ và tên" required="">
                </div>
                <div class="login-email mt-4 px-3">
                    <input type="email" name="emailpy" id="" placeholder="Email" required="">
                </div>
                <div class="login-email mt-4 px-3">
                    <input type="text" name="phonepy" id="" placeholder="Số điện thoại" required="">
                </div>
                <div class="login-email mt-4 px-3">
                    <input id="dob" type="date" id="start" name="datepy" min="1900-01-01" required="">
                </div>
                <button type="submit" class="mt-4">Kết quả</button>
            </form>
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