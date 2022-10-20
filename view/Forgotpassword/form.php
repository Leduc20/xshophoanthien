<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="../icon/fontawesome-free-6.1.1-web/css/all.min.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#forgot").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "email": {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    "email": {
                        required: "Bắt buộc nhập email",
                        email: "Hãy nhập đúng định dạng email"
                    },
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
            Quên mật khẩu
           </p>
           <form action="index.php?act=qmk" method="post" id="forgot">
            <!-- <p class="font-bold mt-3 mb-2">Tên đăng nhập</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id=""> -->
            <p class="font-bold mt-3 mb-2">Địa chỉ email</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="email" id="">
            <!-- <p class="font-bold mt-3 mb-2">Xác nhận mật khẩu</p> -->
            <br>
            <button type="submit" name="checkmail" class="p-2 rounded border mt-2 hover:bg-sky-500 hover:text-white">Tìm lại mật khẩu</button>
           </form>
           <div class="text-sky-500">
            <?php
            if(isset($thongbao)){
                echo $thongbao;
            }
            ?>
           </div>
        </div>
    </section>
</body>

</html>