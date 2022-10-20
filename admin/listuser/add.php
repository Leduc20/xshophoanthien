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
        <div class="border bg-green-200 mt-2 rounded">
                <p class="ml-3 mt-3">Quản lí khách hàng</p>
            </div>
            <div>
                <form action="" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-8">
                        <div>
                            <p class="font-bold mt-3 mb-2">Mã khách hàng</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Họ tên</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Mật khẩu</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Xác nhận mật khẩu</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Địa chỉ email</p>
                            <input class="border w-full p-2 rounded-[4px]" type="text" name="" id="">
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Hình ảnh</p>
                            <input class="border w-full p-2 rounded-[4px]" type="file" name="" id="">
                        </div>
                        <!-- <div>
                            <p class="font-bold mt-3 mb-2">kích hoạt</p>
                            <select class="border w-[382px] h-[45px] rounded" name="" id="">
                                <option value="">Đồng hồ</option>
                            </select>
                        </div> -->
                        <div>
                            <p class="font-bold mt-3 mb-2">Kích hoạt</p>
                            <div class="border h-[48px] w-[583px]">
                                <div class="mt-[10px] ml-[20px]">
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Chưa kích hoạt
                                    </label>
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        kích hoạt
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold mt-3 mb-2">Vai trò</p>
                            <div class="border h-[48px] w-[583px]">
                                <div class="mt-[10px] ml-[20px]">
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Khách hàng
                                    </label>
                                    <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Nhân viên
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Thêm mới</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">Nhập lại</button>
                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded no-underline" href="index.php?act=dskh">Danh sách</a>
                </form>
            </div>
        </div>
    </section>
</body>

</html>