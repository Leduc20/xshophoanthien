<?php
ob_start();
error_reporting(0);
session_start();
include "../../model/pdo.php";
include "../../model/comment.php";
$id_user = $_SESSION['user']['id_user'];
$idpro = $_REQUEST['idpro'];
//Load theo id của hàng hóa
$list_cnmt = loadall_cmt($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
   
   
</head>
<body>
    <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 mb-4 max-w-[1200px]">
        <form class="w-full bg-white rounded-lg px-4 pt-2" method="post">
            <div class="flex flex-wrap -mx-3 mb-6">
                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Bình luận : </h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <div class="p-2 rounded border">

                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Nội dung
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Người dùng
                                        </th>

                                        <th scope="col" class="py-3 px-6">
                                            Thời gian
                                        </th>
                                        <?php
                                        foreach ($list_cnmt as $show) {
                                            extract($show);

                                            echo '  <th scope="col" class="py-3 px-6"> 
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                ' . $content . '
                                            </th>
                                            <td class="py-4 px-6">
                                            ' . $id_user . '
                                            </td>
                                            <td class="py-4 px-6">
                                            ' . $date_comment . '
                                            </td>
                                        </tr>
                                        
                                                                        ';
                                        }
                                        ?>
                                        </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <div class="w-full md:w-full flex items-start md:w-full px-3">
                    <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">

                    </div>

                </div>

        </form>
        <!-- //$_SERVER['PHP_SELF'] làm viejc với form hiện tại -->
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="flex flex-wrap -mx-3 mb-6">
                <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Viết bình luận mới : </h2>
                <div class="w-full md:w-full px-3 mb-2 mt-2">
                    <textarea name="content" class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="body" placeholder="Bình luận...." required></textarea>
                </div>
                <div class="w-full md:w-full flex items-start md:w-full px-3">
                    <div class="flex items-start w-1/2 text-gray-700 px-2 mr-auto">
                        <svg fill="none" class="w-5 h-5 text-gray-600 mr-1" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <p class="text-xs md:text-sm pt-px">Some HTML is okay.</p>
                    </div>
                    <div class="-mr-1">
                        <input type="hidden" name="idpro" id="" value="<?= $idpro ?>">
                        <input type="hidden" name="iduser" id="" value="<?= $id_user ?>">
                        <input type="submit" name="send" id="" value="Bình luận" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    </div>
                </div>
        </form>
        <?php

        if (isset($_POST['send'])) {
            $content = $_POST['content'];
            //idusser se lay qua session
            //idpro lay qua request trong ham jquery ben detail
            $id_hh = $_POST['idpro'];
            $id_user = $_POST['iduser'];
            $date_cmt = date('h:i:sa d/m/Y');
            insert_comment($content, $id_user, $id_hh, $date_cmt);
            //$_SERVER['HTTP_REFERER'] trở về chính trang vừa comment khi ấn gửi cmt
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>
    </div>
    </div>
</body>

</html>