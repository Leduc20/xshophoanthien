<?php
if (is_array($dm)) {
    extract($dm);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Loại Hàng</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $().ready(function() {
            $("#check").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tenloai": {
                        required: true,
                        // name: true
                    }
                },
                messages: {
                    "tenloai": {
                        required: "Bắt buộc tên loại hàng",
                        // email: "Bắt buộc tên loại hàng"
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
    <section class="mt-[-336px] ml-[99px]">
        <div class="max-w-[1200px] m-auto">
            <div class="border bg-green-200 mt-2 rounded">
                <p class="ml-3 mt-3">Chỉnh sửa loại hàng</p>
            </div>
            
            <div>
                <form action="index.php?act=update" method="post" enctype="multipart/form-data" id="check">
                    <p class="font-bold mt-3 mb-2">Mã loại</p>
                    <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">

                    <input type="hidden" name="id" id="" value="<?php if (isset($id_commodities) && ($id_commodities > 0)) echo $id_commodities; ?>">
                    <p class="font-bold mt-3 mb-2">Tên loại</p>
                    <input class="border w-full p-2 rounded-[4px] mb-2" type="text" name="tenloai" id="tenloai" value="<?php if (isset($name) && ($name != "")) echo $name; ?>"> <br>
                    <!-- <button type="submit" class="p-2 rounded border mt-3">Thêm mới</button> -->
                    <button type="submit" name="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Cập nhật</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=dslh">Danh sách</a>
                </form>
            </div>
            
        </div>
    </section>
</body>

</html>