<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách độc giả</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <main>

        <div class="container">
            <h5 class="text-center text-primary my-5">DANH SÁCH ĐỘC GIẢ</h5>
            <?php
            //file hiển thị thông báo lỗi
            require_once 'view/commons/message.php';
            ?>
            <div>
                <a class="btn btn-primary mt-2 mb-2 ms-3" href="index.php?controller=docgia&action=add&id">Thêm mới</a>
            </div>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Mã độc giả</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Năm sinh</th>
                        <th scope="col">Nghề nghiệp</th>
                        <th scope="col">Ngày cấp thẻ</th>
                        <th scope="col">Ngày hết hạn</th>
                        <th scope="col">Địa chỉ</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->

                    <?php foreach ($users as $user) { ?>
                        <tr>
                            <th scope="row"><?php echo $user['madg']; ?></th>
                            <td><?php echo $user['hovaten']; ?></td>
                            <td><?php echo $user['gioitinh']; ?></td>
                            <td><?php echo $user['namsinh']; ?></td>
                            <td><?php echo $user['nghenghiep']; ?></td>
                            <td><?php echo $user['ngaycapthe']; ?></td>
                            <td><?php echo $user['ngayhethan']; ?></td>
                            <td><?php echo $user['diachi']; ?></td>
                            <td><?php
                                //khai báo url
                                $urlEdit =
                                    "index.php?controller=docgia&action=update&id=" . $user['madg'];
                                ?>
                                <a href="<?php echo $urlEdit ?>"><i class="bi bi-pencil"></i></a> 
                            </td>
                            <td><?php
                                //khai báo url
                                $urlDelete =
                                    "index.php?controller=docgia&action=delete&id=" . $user['madg'];
                                ?>
                                <a href="<?php echo $urlDelete ?>"><i class="bi bi-trash"></i></a> 
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>