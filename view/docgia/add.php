<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm độc giả</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main>
        <div class="container">
            <h5 class="text-center text-primary mt-5">Đăng kí thêm độc giả mới</h5>
            <form action="" method="post">
                <div class="form-group">
                    <label for="hovaten">Họ và tên</label>
                    <input type="text" class="form-control" id="hovaten" name="hovaten"  value="">
                </div>

                <div class="form-group">
                    <label for="gioitinh">Giới tính</label>
                    <input type="text" class="form-control" list="datalistOptions" id="gioitinh" name="gioitinh" value="">
                    <datalist id="datalistOptions">
                        <option value="Nam">
                        <option value="Nữ">
                    </datalist>
                </div>

                <div class="form-group">
                    <label for="namsinh">Năm sinh</label>
                    <input type="text" class="form-control" id="namsinh" name="namsinh" value="">
                </div>

                <div class="form-group">
                    <label for="nghenghiep">Nghề Nghiệp</label>
                    <input type="text" class="form-control" id="nghenghiep" name="nghenghiep" value="">
                </div>

                <div class="form-group">
                    <label for="ngaycapthe">Ngày cấp thẻ</label>
                    <input type="date" class="form-control" id="ngaycapthe" name="ngaycapthe" value="">
                </div>

                <div class="form-group">
                    <label for="ngayhethan">Ngày hết hạn</label>
                    <input type="date" class="form-control" id="ngayhethan" name="ngayhethan" value="">
                </div>

                <div class="form-group">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" class="form-control" id="diachi" name="diachi" value="">
                </div>
                <div class="mt-4">
                <input  class="btn btn-primary me-3" type="submit" name="submit" value="Thêm" />
                <a class="btn btn-primary" href="index.php?controller=docgia&action=index&id" role="button">Hủy</a>
                </div>
               
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>