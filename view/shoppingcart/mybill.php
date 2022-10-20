<section class="max-w ">
    <div class="max-w-[800px] m-auto mt-5 border rounded p-6 bg-white">
        <p class="rounded-[5px] p-2 text-[35px] text-emerald-600">
            Cảm ơn đã đặt hàng
        </p>

    </div>
    <div>

    </div>

    <div class="grid grid-cols-1 max-w-[800px] m-auto mt-5 mb-5 border rounded p-6 bg-white">
        <p class="text-[19px] font-bold">Mã Đơn Hàng Của Bạn : </p>
        <div class="flex items-center rounded border border-gray-200 dark:border-gray-700 text-center">
            <p class="py-4 w-full text-[19px] font-bold text-gray-900 dark:text-gray-300">DDĐ</p>
        </div>
    </div>

    </div>
    <div class="max-w-[800px] m-auto border rounded bg-white p-6">
        <p class="text-[19px] font-bold">Thông tin người đặt:</p>
        <?php
        view_infor();
        ?>
    </div>

    </div>

    <div class="grid grid-cols-1 max-w-[800px] m-auto mt-5 mb-5 border rounded p-6 bg-white">
        <p class="text-[19px] font-bold">Phương thức thanh toán : </p>
        <div class="flex items-center rounded border border-gray-200 dark:border-gray-700 text-center">
            <p class="py-4 w-full text-[19px] font-bold text-gray-900 dark:text-gray-300">Thanh toán khi nhận hàng</p>
        </div>
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
                        <!-- <td>
                            <a href="index.php?act=bill">
                                <input type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Tiếp tục mua hàng">
                            </a>
                        </td>
                        <td>
                            <a href="index.php?act=bill">
                                <input type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Đồng ý đặt hàng">
                            </a>
                        </td> -->
                        <!-- <td>
                            <a href="index.php?act=bill">
                                <input type="button" class="btn bg-sky-300 hover:bg-emerald-800 hover:text-white" value="Continue Shopping">
                            </a>
                        </td> -->
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>