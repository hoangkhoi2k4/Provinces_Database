<?php
require 'connnect.php';
//Checklist
/*
    1. Chuẩn bị Có sở dữ liệu
    2. Tạo giao diện
    3. Connect Db
    4. Get Province
    5. Ajax show District
    6. Ajax show Awards
    7. Show kết quả
*/


$sql = "SELECT * FROM province";
$result = mysqli_query($conn, $sql);

if (isset($_POST['add_sale'])) {
    echo "<pre>";
    print_r($_POST);
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.js"></script>
    <script src="js/app.js"></script>
    <title>Document</title>
</head>

<body>

    <div class="container">
        <form id="myForm" class="mt-5" method="POST">
            <h1 class="py-5">Chọn địa chỉ khi đặt hàng trong website</h1>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="province">Tỉnh/Thành phố</label>
                        <select id="province" name="province" class="form-control">
                            <option value="">Chọn một tỉnh</option>
                            <!-- populate options with data from your database or API -->
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <option value="<?php echo $row['province_id'] ?>"><?php echo $row['name'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="district">Quận/Huyện</label>
                        <select id="district" name="district" class="form-control">
                            <option value="">Chọn một quận/huyện</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="wards">Phường/Xã</label>
                        <select id="wards" name="wards" class="form-control">
                            <option value="">Chọn một xã</option>
                        </select>
                    </div>
                    <input type="submit" name="add_sale" class="btn btn-primary w-100 form-input my-3" value="Đặt hàng">

                </div>
            </div>
        </form>
    </div>



</body>

</html>