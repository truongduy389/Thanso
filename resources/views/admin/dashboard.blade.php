<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

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
    <div class="main__body-admin">
        <div class="main__body-admin-nav d-flex flex-column justify-content-between col-lg-2">
            <div>
                <div class="d-flex p-3">
                    <i class="fa-solid fa-gear fz-30"></i>
                    <h1 class="ps-3">Admin</h1>
                </div>
                <div class="main__body-admin-nav-item main__nav-item-active mx-3">
                    <h2 class="ps-2">Thần số học</h2>
                </div>
                <div class="main__body-admin-nav-item mx-3">
                    <h2 class="ps-2"><a href="{{ URL::to('/add-py') }}">Peak Year</a></h2>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between p-3">
                    <h2><?php 
                        $name = Session::get('admin_name');
                        echo $name;
                    ?></h2>
                    <div class="log-out-btn">
                        <a href="{{URL::to('/logout')}}"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__body-admin-body d-flex flex-wrap col-lg-10">
            <div class="col-lg-5 p-3">
                <div class="main__body-admin-body-left">
                    <div class="main__body-admin-sum-answer p-3 text-center">
                        <h1>120</h1>
                        <p>Tổng các câu trả lời</p>
                        <hr>
                    </div>
                    <div class="main__body-admin-sum-answer-content px-3">
                        <h3>Danh sách các câu trả lời</h3>
                        <div class="main__body-admin-sum-answer-content-list mt-3">
                            <table class="table table-striped fz-16">
                                <thead>
                                    <tr>
                                        <th style="width: 50px" class="text-blue" scope="col">ID</th>
                                        <th scope="col">Họ và tên</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Ngày sinh</th>
                                        <th scope="col">Số Chu Dao</th>
                                    </tr>
                                </thead>
                                <tbody class="fwn">
                                    @foreach($customer as $key => $value)
                                    <tr>
                                        <th style="width: 50px" scope="row">{{$value['customer_id']}}</th>
                                        <td>{{$value['customer_name']}}</td>
                                        <td>0{{$value['customer_phone']}}</td>
                                        <td>{{$value['customer_email']}}</td>
                                        <td>{{$value['customer_date']}}</td>
                                        <td>{{$value['customer_sochudao']}}</td>
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 py-3 pe-3">
                <div class="main__body-admin-body-right p-3">
                    <h1>Danh sách các thần số học</h1>
                    <h1><a href="{{ URL::to('/add-thanso') }}">Thêm thần số</a></h1>
                    <div class="main__body-admin-body-right-list mt-3">
                        <table class="table table-striped fz-16">
                            <thead>
                                <tr class="bold">
                                    <th style="width: 50px" class="text-blue" scope="col">STT</th>
                                    <th scope="col">Tên thần số</th>
                                    <th scope="col">Nội dung thần số</th>
                                </tr>
                            </thead>
                            <tbody class="fwn">
                                @foreach($sochudao as $key => $value)
                                <tr>
                                    <th style="width: 50px" scope="row">{{$value['sochudao_id']}}</th>
                                    <td>{{$value['sochudao_name']}}</td>
                                    <td class="text-hidden-away py-0">{{$value['sochudao_desc']}}</td>
                                    <td class="text-end text-blue">
                                        <a href="{{ URL::to('/manager-edit/'.$value['sochudao_id']) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                                    </td>
                                    <td class="text-end text-blue">
                                        <a href="{{ URL::to('/delete/'.$value['sochudao_id']) }}"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                </tr>
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Animation Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- JavaScript -->
    <script src="/assets/js/js.js"></script>
</body>
</html>