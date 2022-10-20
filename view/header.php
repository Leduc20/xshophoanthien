<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
    <link rel="stylesheet" href="./icon/fontawesome-free-6.1.1-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/lienhe.css">

    <!-- slider product -->
    <!--page-icon------------>
    <link rel="shortcut icon" href="images/logo.png">
    <!--stylesheet------------->
    <link rel="stylesheet" type="text/css" href="./slide pro/css/sliepro.css">
    <!--light-slider.css------------->
    <link rel="stylesheet" type="text/css" href="./slide pro/css/lightslider.css">
    <!--Jquery-------------------->
    <script type="text/javascript" src="./slide pro/js/jquery.js"></script>
    <!--lightslider.js--------------->
    <script type="text/javascript" src="./slide pro/js/lightslider.js"></script>

</head>

<body onload="loadAnh()" class="px-2">
    <section class="max-w">
        <div class="header mx-auto bg-slate-300">
            <div class="text-center md:flex justify-between md:max-w-[1200px] mx-auto leading-[45px]">
                <div>
                    <a class="no-underline text-[22px] text-black" href="">
                        WEBSITE BÁN HÀNG
                    </a>
                </div>
                <div class="flex justify-between hidden md:block">
                    <p class="mr-8">
                        KHUYẾN MẠI HOT
                    </p>
                    <!-- <div class="flex">
                        <a href="" class="px-2"><i class="fa-brands fa-facebook-square"></i></a>
                        <a href="" class="px-2"><i class="fa-regular fa-envelope"></i></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="md:flex justify-between mx-auto max-w-[1200px] mt-5 items-center">
            <div class="">
                <!-- <a href="index.html"><i class="fa-solid fa-magnifying-glass"></i></a> -->
            </div>
            <div>
                <a href="index.php"><img class="w-[70px]" src="./image/Screenshot__902_-removebg-preview.png" alt=""></a>
            </div>
            <div class="">
                <form action="index.php?act=sanpham" method="post">
                    <select name="" id="" class="border-[1px] w-[80px]">
                        <option value="">Tất cả</option>
                        <option value="">A</option>
                        <option value="">b</option>
                        <option value="">c</option>
                    </select>
                    <input class="border-[1px] w-[295px]" type="text" name="key" id="">
                    <button class="border-[1px] w-[45px] bg-orange-300" name="seach" value="seach" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <!-- Login/Cart -->
            <div class="hidden md:block">
                <div class="flex">
                    <div class="dropdown">
                        <!-- <a name="dangnhap" href="index.php?act=dangnhap" class="btn btn-primary dropdown-toggle bg-sky-500" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
                            <i class="fa-solid fa-arrow-right-to-bracket"></i>
                            Login
                        </a>
                        
                            <form action="index.php?act=dangnhap" class="dropdown-menu p-4 w-[300px]">
                                <div class="mb-3">
                                    <label for="exampleDropdownFormEmail2" class="form-label">Tên Đăng nhập</label>
                                    <input type="text" name="text" class="form-control" id="exampleDropdownFormEmail2" placeholder="email@example.com">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleDropdownFormPassword2" class="form-label">Password</label>
                                    <input type="password" name="pass" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="dropdownCheck2">
                                        <label class="form-check-label" for="dropdownCheck2">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="dropdownCheck2">
                                            <a class="no-underline text-black" href="index.php?act=dktv">Đăng ký thành viên</a>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="dropdownCheck2">
                                            <a class="no-underline text-black" href="index.php?act=qmk">Quên mật khẩu</a>
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" name="dangnhap" class="bg-sky-700 btn btn-primary">Sign in</button>
                            </form>
                         -->
                    </div>

                    <div class="ml-4">
                        <a href="index.php?act=addcart" class="bg-sky-500 btn btn-primary" type="submit"><i class="mr-[5px] fa-sharp fa-solid fa-cart-arrow-down"></i>Giỏ hàng</a>
                    </div>
                    <div class="dropdown ml-9">
                        <a class="bg-sky-500 btn btn-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                              if (isset($_SESSION['user'])) {
                                extract($_SESSION['user']);
                                echo '<p>' . '<label for="">Xin Chào,</label>' . $name . '</p>';
                              } else {
                                echo 'Đăng nhập';
                              }
                            ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?act=dangnhap"><i class="fa-solid fa-user"></i>Tài khoản</a></li>
                            <li><a class="dropdown-item" href="logout.php">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>Thoát</a></li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <!-- nav -->
        <!-- max-w-[1200px] mx-auto py-2 -->

        <div class="mx-auto max-w bg-cyan-300 mt-2">
            <div class="max-w-[1200px] mx-auto py-2">

                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" aria-current="page" href="index.php">Trang chủ</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="index.php?act=gt">Giới thiệu</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="index.php?act=lh">Liên hệ</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="#">Gợi ý</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded duration-700">
                        <a class="text-black nav-link" href="#">Hỏi đáp</a>
                    </li>
                    <li class="nav-item text-[19px] font-bold hover:bg-sky-500 rounded  dropdown">
                        <button class="mt-[9px] dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Dannh mục
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($danhMuc as $show) {
                                extract($show);
                                $linkdm = "index.php?act=sanpham&id_commodities=" . $id_commodities;
                                echo '<li><a class="dropdown-item" href="' . $linkdm . '">' . $name . '</a></li>
                                ';
                            }

                            ?>
                            <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        </nav>

        </ul>
        </div>

        </div>
    </section>



</body>

</html>