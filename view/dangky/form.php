<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Đăng kí thành viên</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#dangky").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "email": {
                        required: true,
                        email: true
                    },
                    "user": {
                        required: true,
                        maxlength: 15
                    },
                    "pass": {
                        required: true,
                        minlength: 8
                    },
                    "re-password": {
                        equalTo: "#pass",
                        minlength: 8

                    }
                },
                messages: {
                    "email": {
                        required: "Bắt buộc nhập email",
                        email: "Hãy nhập đúng định dạng email"
                    },
                    "user": {
                        required: "Bắt buộc nhập username",
                        maxlength: "Hãy nhập tối đa 15 ký tự"
                    },
                    "pass": {
                        required: "Bắt buộc nhập password",
                        minlength: "Hãy nhập ít nhất 8 ký tự"
                    },
                    "re-password": {
                        equalTo: "Không trùng khớp mật khẩu",
                        minlength: "Hãy nhập ít nhất 8 ký tự"
                    }
                }
            });
        });
    </script>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <section class="max-w">
        <div class="max-w-[800px] m-auto mt-5">
            <p class="bg-red-200 rounded-[5px] p-2 text-[35px] text-red-700">
                Đăng kí thành viên
            </p>
            <form action="index.php?act=dktv" method="post" id="dangky">
                <p class="font-bold mt-3 mb-2">Email</p>
                <input class="border w-full p-2 rounded-[4px]" type="email" name="email" id="email">
                <p class="font-bold mt-3 mb-2">Tên đăng nhập</p>
                <input class="border w-full p-2 rounded-[4px]" type="text" name="user" id="user">
                <p class="font-bold mt-3 mb-2">Mật khẩu</p>
                <input class="border w-full p-2 rounded-[4px]" type="password" name="pass" id="pass">
                <p class="font-bold mt-3 mb-2">Nhập lại mật khẩu</p>
                <input class="border w-full p-2 rounded-[4px]" type="password" name="re-password" id="re-password">
                <!-- <p class="font-bold mt-3 mb-2">Xác nhận mật khẩu</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
            <p class="font-bold mt-3 mb-2">Họ và tên</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id=""> -->

                <!-- <p class="font-bold mt-3 mb-2">Hinh</p>
            <input class="border w-full p-2 rounded-[4px]" type="file" name="" id=""> -->
                <br>
                <button type="submit" name="submit" class="p-2 rounded border mt-3">Đăng ký</button>
                <button type="reset" name="" class="p-2 rounded border mt-3">Reset</button>
            </form>
            <div class="mt-2 text-black-500 font-bold text-red-500">
                <?php
                if (isset($dktv)) {
                    echo $dktv;
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>