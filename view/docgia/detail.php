<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Thông tin Người hiến máu</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Tên người hiến máu</label>
                    <input type="text" class="form-control" readonly id="name" name="name"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : $user['bd_name']?>">
                </div>

                <div class="form-group">
                    <label for="sex">Giới tính</label>
                    <input type="text" class="form-control" readonly id="sex" name="sex" value="<?php echo isset($_POST['sex']) ? $_POST['sex'] : $user['bd_sex'] ?>">
                </div>

                <div class="form-group">
                    <label for="age">Tuổi</label>
                    <input type="text" class="form-control" readonly id="age" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] : $user['bd_age'] ?>">
                </div>

                <div class="form-group">
                    <label for="group">Nhóm máu</label>
                    <input type="text" class="form-control" readonly id="group" name="group" value="<?php echo isset($_POST['group']) ? $_POST['group'] : $user['bd_group']?>">
                </div>

                <div class="form-group">
                    <label for="date">Ngày đăng kí hiến máu</label>
                    <input type="date" class="form-control" readonly id="date" name="date" value="<?php echo isset($_POST['group']) ? $_POST['group'] : $user['bd_reg_date'] ?>">
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" class="form-control" readonly id="phone" name="phone" value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $user['bd_phone']?>">
                </div>
                <div class="mt-4">
                <a class="btn btn-primary" href="index.php?controller=danhsach&action=index&id" role="button">Quay lại</a>
                </div>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>