
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
                            <p class="ml-3 mt-3">Tổng hợp bình luận</p>
                        </div>
                        <div class="mt-2 text-emerald-700 font-bold text--500">
                            <?php
                            if (isset($del_cmt)) {
                                echo "<script>alert('$del_cmt');</script>";
                            }
                            ?>
                        </div>
                        <form action="">
                            <div>
                                <div class="overflow-x-auto relative shadow-md sm:rounded-lg mt-4">
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <!-- <th>

                                                </th> -->
                                                <th scope="col" class="py-3 px-6">
                                                    ID
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Nội dung bình luận
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    User
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Sản phẩm
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Ngày bình luận
                                                </th>
                                                <th scope="col" class="py-3 px-6">
                                                    Edit
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                                <!-- <th>
                                                    <div class="">
                                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                                    </div>
                                                </th> -->
                                                <!-- <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    1000
                                                </th> -->
                                                <?php
                                                foreach ($list_cmt as $show) {
                                                    extract($show);
                                                    $delete = "index.php?act=del_cmt&id_cmt=" . $id_comment;
                                                    $edit = "index.php?act=edit_cmt&id_cmt=" . $id_comment;
                                                    echo '
                                                <td class="py-4 px-6">
                                                    ' . $id_comment . '
                                                </td>
                                                <td class="py-4 px-6">
                                                    ' . $content . '
                                                </td>
                                                <td class="py-4 px-6">
                                                    ' . $id_user . '
                                                </td>
                                                <td class="py-4 px-6">
                                                    ' . $id_hh . '
                                                </td>
                                                <td class="py-4 px-6">
                                                    ' . $date_comment . '
                                                </td>
                                                
                                                <td class="py-4 px-6">
                                                   
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
                                <!-- <a class="p-3 py-2 border-black border rounded no-underline" href="">Chọn tất cả</a>
                                <a class="p-3 py-2 border-black border rounded no-underline" href="">Bỏ chọn tất cả</a> -->
                                <!-- <a class="p-3 py-2 border-black border rounded no-underline" href="index.php?act=dsbl">Tổng hợp</a>
                                <a class="p-3 py-2 border-black border rounded no-underline" href="index.php?act=blct">Chi tiết</a> -->
                            </div>
                        </form>

                    </div>
                </section>

            </body>

            </html>