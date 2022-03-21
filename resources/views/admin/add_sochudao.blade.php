<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Thần số</title>

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
                    <h2 class="ps-2">Thần số</h2>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between p-3">
                    <h2>Nguyen Minh Tam</h2>
                    <div class="log-out-btn">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__body-admin-body d-flex flex-wrap col-lg-10">
            <div class="col-lg-5 p-3">
                <div class="main__body-admin-body-left p-3">
                    <h1>Thêm Thần số</h1>
                    <form action="{{ URL::to('/save-thanso') }}" method="post">
                        {{ csrf_field() }}
                    <h5 class="pt-3 ps-1 py-2">Tên Thần số</h5>
                    <input type="text" class="form-control" name="name_so" placeholder="Thần số">
                    <h5 class="pt-3 ps-1 py-2">Nội dung Thần số</h5>
                    <textarea class="form-control" placeholder=""name="desc_so" id="" cols="30" rows="10"></textarea>
                    <div class="d-flex">
                        <button type="submit" class="btn btn-primary">Thêm</button>   
                        <button class="btn btn-secondary">Hủy</button>   
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 py-3 pe-3">
                <div class="main__body-admin-body-right p-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h1>Danh sách các Thần số</h1>
                        <button class="btn btn-primary" hidden>Thêm Thần số</button>
                    </div>
                    <div class="main__body-admin-body-right-list mt-3">
                        <table class="table table-striped fz-16">
                            <thead>
                                <tr class="bold">
                                    <th style="width: 50px" class="text-blue" scope="col">STT</th>
                                    <th scope="col">Tên Thần số</th>
                                    <th scope="col">Nội dung Thần số</th>
                                </tr>
                            </thead>
                            <tbody class="fwn">
                                <tr>
                                    <th style="width: 50px" scope="row">1</th>
                                    <td>Thần số 1</td>
                                    <td class="text-hidden-away py-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</td>
                                    <td class="text-end text-blue"><i class="fa-solid fa-pen-to-square"></i></td>
                                </tr>
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