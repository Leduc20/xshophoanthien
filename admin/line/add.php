<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#check-line").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tenloai": {
                        required: true,
                        name: true
                    },
                    // "user": {
                    //     required: true,
                    //     maxlength: 15
                    // },
                },
                messages: {
                    "tenloai": {
                        required: "Bắt buộc nhập tên loại hàng",
                        // tenloai: "Hãy nhập đúng định dạng email"
                    },
                    // "user": {
                    //     required: "Bắt buộc nhập username",
                    //     maxlength: "Hãy nhập tối đa 15 ký tự"
                    // },
                    // "pass": {
                    //     required: "Bắt buộc nhập password",
                    //     minlength: "Hãy nhập ít nhất 8 ký tự"
                    // },
                    // "re-password": {
                    //     equalTo: "Không trùng khớp mật khẩu",
                    //     minlength: "Hãy nhập ít nhất 8 ký tự"
                    // }
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
    <section class="mt-[-336px] ml-[99px]">
        <div class="max-w-[1200px] m-auto">
            <div class="border bg-green-200 mt-2 rounded">
                <p class="ml-3 mt-3">Thêm mới loại hàng</p>
               
            </div>
            <div class="mt-2 text-red-500 font-bold text-color">
                    <?php
                    if (isset($line)) {
                        echo "<script>alert('$line');</script>";
                    }
                    ?>
                </div>
            <div>
                <form action="index.php?act=addlh" method="post" id="check-line" enctype="multipart/form-data">
                    <p class="font-bold mt-3 mb-2">Mã loại</p>
                    <input class="border w-full p-2 rounded-[4px]" placeholder="Không cần nhập" type="text" name="" id="">
                    <p class="font-bold mt-3 mb-2">Tên loại</p>
                    <input class="border w-full p-2 rounded-[4px]" type="text" name="tenloai" id="tenloai"> <br>
                    <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
                    <!-- <button type="submit" name="themmoi">Thêm mới</button> -->
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit" name="themmoi">
                    Thêm mới
                    </button>
                    <button type="reset" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=dslh">Danh sách</a>
                </form>
            </div>

        </div>
    </section>
</body>

</html>