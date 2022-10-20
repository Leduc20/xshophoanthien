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
                            <p class="ml-3 mt-3">Danh sách thống kê</p>
                        </div>
                        <form action="">
                            <div>
                                <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th>

                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    STT
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Tên loại hàng
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Số lượng
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Giá cao nhất
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    giá thấp nhất
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Giá trung bình
                                                </th>
                                            </tr>
                                        </thead>
                                        <?php 
                                         foreach ($listtk as $show) {
                                            extract($show);
                                            echo '
                                            <tbody>
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th>
                                                    <div class="">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    </div>
                                                </th>
                                                <td class="py-4 px-6">
                                                    1
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$tendm.'
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$countpro.'
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$maxprice.' VNĐ
                                                </td>
                                                <td class="py-4 px-6">
                                                '.$minprice.' VNĐ
                                                </td>
                                                <td class="py-4 px-6">
                                                    '.$avgprice.' VNĐ
                                                </td>
                                            </tr>

                                        </tbody>
                                            ';
                                         }
                                        ?>
                                        <!-- <tbody>
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <th>
                                                    <div class="">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                                    </div>
                                                </th>
                                                <td class="py-4 px-6">
                                                    1
                                                </td>
                                                <td class="py-4 px-6">
                                                    Đồng hồ đeo tay
                                                </td>
                                                <td class="py-4 px-6">
                                                    13
                                                </td>
                                                <td class="py-4 px-6">
                                                    $4.5
                                                </td>
                                                <td class="py-4 px-6">
                                                    $455.50
                                                </td>
                                                <td class="py-4 px-6">
                                                    $90.55
                                                </td>
                                            </tr>

                                        </tbody> -->
                                    </table>
                                </div>
                            </div>
                            <div class="z-50">
                                <!-- <a class="p-3 py-2 border-black border rounded no-underline" href="">Chọn tất cả</a>
                                <a class="p-3 py-2 border-black border rounded no-underline" href="">Bỏ chọn tất cả</a> -->
                                <a class="p-3 py-2 border-black border rounded no-underline" href="index.php?act=bdct">Xem biểu đồ</a>

                            </div>
                        </form>

                    </div>
                </section>

            </body>

            </html>