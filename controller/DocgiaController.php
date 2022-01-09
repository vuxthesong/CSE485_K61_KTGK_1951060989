<?php
require_once 'model/DocgiaModel.php';
class docgiaController
{
    // Điều khiển về mặt logic giữa UserModel và User View
    function index()
    {
        // Tôi sẽ cần gọi UserModel để truy vấn dữ liệu
        $userModel = new UserModel();
        $users = $userModel->index();
        // Sau khi truy vấn được dữ liệu, tôi sẽ đổ ra UserView/index.php tương ứng
        require_once 'view/docgia/index.php';
    }

    public function add()
    {
        $error = '';
        //xử lý submit form
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];

            //xử lý validate, nếu mà để trống tên sách
            if (empty($hovaten)) {
                $error = "Tên không được để trống";
            } else {
                //gọi model để insert dữ liệu vào database
                $userModel = new UserModel();
                //gọi phương thức để insert dữ liệu
                //nên tạo 1 mảng tạm để lưu thông tin của
                //                đối tượng dựa theo cấu trúc bảng
                $userArr = [
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi'     => $diachi,
                ];
                $isInsert = $userModel->insert($userArr);
                if ($isInsert) {
                    $_SESSION['success'] = "Thêm mới thành công";
                } else {
                    $_SESSION['error'] = "Thêm mới thất bại";
                }
                header("Location: index.php?controller=docgia&action=index");
                exit();
            }
        }
        //gọi view
        require_once 'view/docgia/add.php';
    }

    public function update()
    {
        //lấy ra thông tin sách dựa theo id đã gắn trên url
        //xử lý validate cho trường hợp id truyền lên không hợp lệ
        if (!isset($_GET['id'])) {
            $_SESSION['error'] = "Tham số không hợp lệ";
            header("Location: index.php?controller=docgia&action=index");
            return;
        }
        if (!is_numeric($_GET['id'])) {
            $_SESSION['error'] = "Mã độc giả phải là số";
            header("Location: index.php?controller=docgia&action=index");
            return;
        }
        $id = $_GET['id'];
        //gọi model để lấy ra đối tượng sách theo id
        $userModel = new UserModel();
        $user = $userModel->getUserById($id);

        //xử lý submit form, lặp lại thao tác khi submit lúc thêm mới
        $error = '';
        if (isset($_POST['submit'])) {
            $hovaten = $_POST['hovaten'];
            $gioitinh = $_POST['gioitinh'];
            $namsinh = $_POST['namsinh'];
            $nghenghiep = $_POST['nghenghiep'];
            $ngaycapthe = $_POST['ngaycapthe'];
            $ngayhethan = $_POST['ngayhethan'];
            $diachi = $_POST['diachi'];

            //xử lý update dữ liệu vào hệ thống
            $userModel = new UserModel();
            $userModel = new UserModel();
            $user = [
                'madg' => $id,
                'hovaten' => $hovaten,
                'gioitinh' => $gioitinh,
                'namsinh' => $namsinh,
                'nghenghiep' => $nghenghiep,
                'ngaycapthe' => $ngaycapthe,
                'ngayhethan' => $ngayhethan,
                'diachi'     => $diachi,

            ];
            $isUpdate = $userModel->update($user);
            if ($isUpdate) {
                $_SESSION['success'] = "Update bản ghi #$id thành công";
            } else {
                $_SESSION['error'] = "Update bản ghi #$id thất bại";
            }
            header("Location: index.php?controller=docgia&action=index");
            exit();
        }
        //truyền ra view
        require_once 'view/docgia/edit.php';
    }

    public function delete()
    {
        //url trên trình dueyjet sẽ có dạng
        //?controller=danhsach&action=delete&id=1
        //bắt id từ trình duyêtj

        $id = $_GET['id'];
        if (!is_numeric($id)) {
            header("Location: index.php?controller=docgia&action=index");
            exit();
        }

        $user = new UserModel();
        $isDelete = $user->delete($id);
        if ($isDelete) {
            //chuyển hướng về trang liệt kê danh sách
            //tạo session thông báo mesage
            $_SESSION['success'] = "Xóa bản ghi #$id thành công";
        } else {
            //báo lỗi
            $_SESSION['error'] = "Xóa bản ghi #$id thất bại";
        }
        header("Location: index.php?controller=docgia&action=index");
        exit();
    }
}
