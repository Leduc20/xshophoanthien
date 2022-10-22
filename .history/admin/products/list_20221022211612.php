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
        <div class="max-w-[900px] m-auto">
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
                <section class="mt-[-366px]">
                    <div class="w-[1200px] m-auto">
                        <div class="border bg-green-200 mt-2 rounded">
                            <p class="ml-3 mt-3">Danh sách hàng hóa</p>
                        </div>
                        <div class="mt-2 text-emerald-700 font-bold text--500">
                            <?php
                            if (isset($pro)) {
                                echo "<script>alert('$pro');</script>";
                            }
                            ?>
                        </div>
                        <form action="index.php?act=dshh" method="post">
                            <input class="border" type="text" name="key" id="">
                            <select class="border w-[134px] h-[33px] rounded" name="idlh" id="">
                                <option value="0" selected>Tất cả</option>
                                <?php
                                foreach ($listline as $show) {
                                    extract($show);
                                    echo '<option value="' . $id_commodities . '">' . $name . '</option> ';
                                }
                                ?>
                                <!-- <option value="">Đồng hồ</option> -->
                            </select>
                            <input type="submit" name="seach" value="Seach">
                        </form>
                        <form action="">
                            <div>
                                <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th>

                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Mã hàng hóa
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    ID Danh mục
                                                </th>
                                                <!-- <th scope="col" class="py-3 px-6">
                                                        Ten Danh mục
                                                    </th> -->
                                                <th scope="col" class="py-3 px-6">
                                                    Tên hàng hóa
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Hình ảnh
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Đơn giá
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Giá giảm
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Mô tả
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    View
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Edit

                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($listproducts as $show) {
                                                extract($show);
                                                $delete = "index.php?act=deletehh&id_hh=" . $id_hh;
                                                $edit = "index.php?act=edithh&id_hh=" . $id_hh;
                                                //đường dẫn ảnh trong extract đường dẫn
                                                $imagepath = "../upload/" . $image;
                                                //kiểm tra 
                                                if (is_file($imagepath)) {
                                                    $img = "<img src='" . $imagepath . "' width='140px'";
                                                } else {
                                                    $img = "No image";
                                                }
                                                echo '<tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <th>
                                                <div class="">
                                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                </div>
                                            </th>
                                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            ' . $id_hh . '
                                            </th>
                                            <td class="py-4 px-6">
                                            ' . $id_dm . '
                                            </td>
                                            
                                            <td class="py-4 px-6">
                                            ' . $name_pro . '
                                            </td>
                                            <td class="py-4 px-6">
                                            ' . $img . '
                                            </td>
                                            <td class="py-4 px-6">
                                            ' . $price . '
                                            </td>
                                            <td class="py-4 px-6">
                                            ' . $sale . '
                                            </td>
                                            <td class="py-4 px-6">
                                            ' . $detail . '
                                            </td>
                                            <td class="py-4 px-6">
                                            ' . $view_pro . '
                                            </td>
                                            <td class="py-4 px-6">
                                                <a href="' . $edit . '" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">Edit</a>
                                                <a href="' . $delete . '" class="no-underline text-black px-2 border border-[2px] p2 rounded bg-sky-300 hover:bg-sky-700">delete</a>
                                            </td>
                                        </tr>';
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
                                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=addhh">Nhập thêm</a>
                            </div>
                        </form>

                    </div>
                </section>

            </body>

            </html>