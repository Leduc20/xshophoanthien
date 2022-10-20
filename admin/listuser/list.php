<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khách hàng</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="mt-[-366px] ml-[99px]">
        <div class="max-w-[1200px] m-auto">
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
            </head>

            <body>
                <section class="max-w">
                    <div class="max-w-[1200px] m-auto">
                        <div class="border bg-green-200 mt-2 rounded">
                            <p class="ml-3 mt-3">Danh sách khách hàng</p>
                        </div>
                        <div class="mt-2 text-black-500 font-bold text-red-500">
                            <?php
                            if (isset($acc)) {
                                echo "<script>alert('$acc');</script>";
                            }
                            ?>
                        </div>
                        <form action="index.php?act=dskh" methot="post" enctype="multipart/form-data">
                            <div>
                                <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th>

                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Mã KH
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Tên đăng nhập
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Địa chỉ email
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Điện thoại
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Vai trò
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Edit
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php 
                                                 foreach ($listaccount as $show) {
                                                    extract($show);
                                                    $delete = "index.php?act=del_account&id_user=" . $id_user;
                                                    $edit = "index.php?act=edit_account&&id_user=" . $id_user;
                                                    echo'
                                                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                    <th>
                                                    <div class="">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    </div>
                                                </th>
                                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    '.$id_user.'
                                                </th>
                                                <td class="py-4 px-6">
                                                     '.$name.'
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$email.'
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$phone.'
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$role.'
                                                </td>
                                                 <td class="py-4 px-6">
                                                    <a href="'.$edit.'" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">Edit</a>
                                                    <a href="'.$delete.'" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">delete</a>
                                                </td> 
                                                </tr>
                                                    ';
                                                 }
                                                ?>
                                                
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="z-50">
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Chọn tất cả</a>
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Bỏ chọn tất cả</a>
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="">Xóa các mục chọn</a>
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=addkh">Nhập thêm</a>
                            </div>
                        </form>
                    </div>
                </section>

            </body>

            </html>