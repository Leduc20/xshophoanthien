<form action="index.php?act=billcomfirm" method="post">
    <section class="max-w ">
        <div class="max-w-[800px] m-auto mt-5 border rounded p-6 bg-white">
            <p class="bg-red-200 rounded-[5px] p-2 text-[35px] text-red-700">
                Thông tin đặt hàng
            </p>
            <?php
            if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                extract($_SESSION['user']);
                $name = $_SESSION['user']['name'];
                $address = $_SESSION['user']['address'];
                $email = $_SESSION['user']['email'];
                $phone = $_SESSION['user']['phone'];
            } else {
                $name = "";
                $address = "";
                $email = "";
                $phone = "";
            }
            ?>
        
            <p class="font-bold mt-3 mb-2">Người đặt</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="name" id="" value="<?= $name ?>">
            <p class="font-bold mt-3 mb-2">Địa chỉ</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="address" id="" value="<?= $address ?>">
            <p class="font-bold mt-3 mb-2">Email</p>
            <input class="border w-full p-2 rounded-[4px]" type="email" name="email" id="" value="<?= $email ?>">
            <p class="font-bold mt-3 mb-2">Số điện thoại</p>
            <input class="border w-full p-2 rounded-[4px]" type="text" name="phone" id="" value="<?= $phone ?>">
            <div>

            </div>
        </div>
        <div>

        </div>

        <div class="grid grid-cols-3 gap-6 max-w-[1200px] m-auto mt-5 mb-5 border rounded p-6 bg-white">

            <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                <input id="bordered-radio-1" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Trả tiền khi nhận hàng</label>
            </div>
            <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                <input id="bordered-radio-1" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Chuyển khoản ngân hàng</label>
            </div>
            <div class="flex items-center pl-4 rounded border border-gray-200 dark:border-gray-700">
                <input id="bordered-radio-1" type="radio" value="" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Thanh toán online</label>
            </div>

        </div>

    </section>
    <div class="container mt-[50px] border rounded p-6 bg-white">
        <div class="row">
            <div class="col-sm-12 col-md-10 col-md-offset-1 w-[1200px] mx-auto">
                <table class="table table-hover">
                    <thead>
                        <!-- <tr>
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th class="text-center">Giá</th>
                        <th class="text-center">Tổng tiền</th>
                        <th class="text-center">Tổng Hóa Đơn</th>
                        <th> EDIT</th>
                    </tr> -->
                    </thead>
                    <tbody>
                        <?php
                        viewcart(0);
                        ?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <a href="index.php?act=home">
                                    <input type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Tiếp tục mua hàng">
                                </a>
                            </td>
                            <td>
                                <!-- <a href="index.php?act=billcomfirm">
                                <input type="button" name="dongy" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Đồng ý đặt hàng">
                            </a> -->
                                <button type="submit" name="dongy" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="">Đồng ý đặt hàng</button>
                            </td>
                            <!-- <td>
                            <a href="index.php?act=bill">
                                <input type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Continue Shopping">
                            </a>
                        </td> -->
            </form>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
