<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/products.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../bigshoes/css/chi-tiet-sp/plugin/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Giỏ Hàng</title>
    <style>
        .icon-container {
            text-align: center;
            color: rgb(255, 255, 255);
        }

        .icon-container p {
            color: rgb(212, 212, 212);
            font-size: 14px;
            margin: 0;
        }

        .icon-container:hover p {
            display: block;
        }
    </style>

</head>

<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../../bigshoes/css/chi-tiet-sp/plugin/js/owl.carousel.min.js"></script>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="login">


                    <!-- CODE CHECK ĐĂNG NHẬP -->
                    <?php
                    session_start();
                    if (!isset($_SESSION['user'])) {
                        ?>
                        <a href="../../bigshoes/tai-khoan/dang-nhap.php">
                            <p><strong>ĐĂNG NHẬP / ĐĂNG KÍ</strong></p>
                        </a>
                    <?php } else { ?>
                        <a href="../../bigshoes/tai-khoan/thong-tin-tk.php">
                            <p><strong>XIN CHÀO <?= $_SESSION['user']['ho_ten'] ?></strong></p>
                        </a>
                    <?php } ?>
                </div>



            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54);text-align: center">
                <div class="logo">
                    <a href="index.php"><img src="../../bigshoes/css/danh-sach-sp/img/y.png" alt="anh"></a>
                </div>
            </div>
            <div class="col-md-4" style="background-color: rgb(54, 54, 54); text-align: center; position: relative;">
                <!-- Hiển thị số lượng sản phẩm trong giỏ hàng -->
                <div class="giohang">
                    <?php
                    // Kiểm tra và tính số lượng sản phẩm trong giỏ hàng
                    $sll = 0;
                    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        foreach ($_SESSION['cart'] as $item) {
                            $sll += $item['sl']; // 'sl' là số lượng sản phẩm trong mỗi mặt hàng
                        }
                    }
                    ?>
                    <!-- Hiển thị số lượng trên biểu tượng -->
                    <span style="position: absolute; padding: 3px 8px; background-color: #fff; color: #000; 
            border-radius: 50%; left: 235px; top: 10px; font-size: 12px;">
                        <?= $sll ?>
                    </span>

                    <!-- Danh sách các biểu tượng -->
                    <ul style="list-style: none; padding: 0; margin: 0;">
                        <li class="icon-container">
                            <i class="fa fa-search" style="font-size: 20px; color: rgb(226, 226, 226);"></i>
                        </li>
                        <a href="danh-sach-gio-hang.php" style="text-decoration: none;">
                            <li class="icon-container">
                                <i class="fa fa-shopping-basket"
                                    style="font-size: 28px; color: rgb(255, 255, 255);"></i>
                                <p>GIỎ HÀNG</p>
                            </li>
                        </a>
                        <a href="lich-su-mua-hang.php" style="text-decoration: none;">
                            <li class="icon-container">
                                <i class="fa fa-history" style="font-size: 28px; color: rgb(255, 255, 255);"></i>
                                <p>LỊCH SỬ</p>
                            </li>
                        </a>
                    </ul>
                </div>
            </div>

        </div>
    </div>







    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color: rgb(211, 211, 211);">
                <div class="nav">
                    <ul>
                        <li><a href="danh-sach-sp.php">TRANG CHỦ</a></li>
                        <li><a href="danh-sach-sp.php">SẢN PHẨM</a></li>
                        <li><a href="gioi-thieu.php">GIỚI THIỆU</a></li>
                        <li><a href="tin-tuc.php">TIN TỨC</a></li>
                        <li><a href="lien-he.php">LIÊN HỆ</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-7" style="
    padding-left: 0px;
">
                <div class="chuyen">
                    <p><i class="fa fa-home" style="font-size:24px"></i> <span>TRANG CHỦ </span> / THANH TOÁN</p>
                </div>
            </div>
            <div class="col-md-5" style="padding-right: 0px;">
                <div class="thutu">
                    <ul>
                        <li>
                            <p style="margin-top: 10px;">Hiển thị tất cả các sản phẩm</p>
                        </li>
                        <li>
                            <select>
                                <option>Thứ tự mặc định</option>
                                <option>Thứ tự theo mức độ phổ biến</option>
                                <option>Thứ tự thấp đến cao</option>
                            </select>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- CODE PHP THANH TOÁN GIỎ HÀNG -->
    <?php
    require_once('../../bigshoes/admin/dao/khach-hang.php');
    require_once('../../bigshoes/admin/dao/hang-hoa.php');

    extract($_REQUEST);

    $ma_kh = $_SESSION['user']['ma_kh'];
    $item = khach_hang_select_by_id($ma_kh);
    extract($item);
    ?>



    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-sm-7">
                <form action="" method="post">
                    <h4>THÔNG TIN THANH TOÁN</h4>
                    <br>
                    <table class="table table-borderless" border="0">
                        <input type="hidden" class="form-control" id="" name="ma_kh" value="<?= $ma_kh ?>">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""><b>Họ và tên:</b></label>
                                    <input type="text" class="form-control" id="" name="ho_ten" value="<?= $ho_ten ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""><b>Email:</b></label>
                                    <input type="text" class="form-control" id="" name="email" value="<?= $email ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""><b>Địa chỉ:</b></label>
                                    <input type="text" class="form-control" id="" name="dia_chi"
                                        value="<?= $dia_chi ?>">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label for=""><b>Ghi chú:</b></label>
                                    <textarea class="form-control" rows="5" id="" name="ghi_chu"></textarea>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="col-sm-5">
                <h4>ĐƠN HÀNG CỦA BẠN</h4>
                <br>
                <form action="" method="POST">
                    <table class="table" style="border:3px solid #c30005;">
                        <thead>
                            <tr>
                                <th>SẢN PHẨM</th>
                                <th style="text-align:right;">TỔNG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $total = 0;
                            if (!empty($_SESSION['cart'])) {
                                $items = $_SESSION['cart'];
                                foreach ($items as $item) {
                                    extract($item);
                                    ?>
                                    <tr>
                                        <td><?= $name ?> x <?= $sl; ?></td>
                                        <td style="text-align:right;">
                                            <?= number_format(($price - ($price * ($giam_gia / 100))) * $sl); ?>
                                            <?php $total += (($price - ($price * ($giam_gia / 100))) * $sl); ?>
                                            VNĐ
                                        </td>
                                    </tr>
                                <?php }
                            } ?>
                            <tr>
                                <td><b>Tổng phụ</b></td>
                                <td style="text-align:right;"><b><?= number_format($total) ?> VNĐ</b></td>
                            </tr>
                            <tr>
                                <td><b>Giao hàng</b></td>
                                <td style="text-align:right;">Giao hàng miễn phí <br>Ước tính cho Việt Nam <br>Đổi địa
                                    chỉ</td>
                            </tr>
                            <tr>
                                <td><b>TỔNG</b></td>
                                <td style="text-align:right;"><b><?= number_format($total) ?> VNĐ</b></td>
                            </tr>
                            <tr>
                                <td colspan="2"><b>Phiếu ưu đãi</b></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="text" class="form-control" placeholder="Mã ưu đãi"><br>
                                    <button type="button" class="btn btn-light" style="width:100%;"><b>ÁP
                                            DỤNG</b></button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <!-- Phương thức thanh toán -->
                                    <!-- <form method="POST" target="_blank" action="" style="display:inline;"> -->
                                        <input type="radio" id="payment_momo" name="payment_method" value="momo">
                                        <label for="payment_momo">Thanh toán MoMo</label>
                                        <input type="radio" id="payment_cod" name="payment_method" value="cod">
                                        <label for="payment_cod">Thanh toán khi nhận hàng</label>
                                        
                                    <!-- </form> -->
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <i>Quý khách vui lòng kiểm tra lại thông tin giao hàng và thông tin đơn hàng để tiến
                                        hành đặt hàng. Quý khách có thể tra cứu tình trạng đơn hàng tại BIGSHOES.com.
                                        Chúc quý khách ngày mới tốt lành!</i>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <button type="submit" name="dathang" class="btn btn-danger"><b>ĐẶT HÀNG</b></button>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>




    <!-- KHI KHÁCH HÀNG TIẾN HÀNH ĐẶT HÀNG -->
    <?php
    function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data))
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }

    function redirectMomo(){
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";


        $partnerCode = 'MOMOBKUN20180529';
        $accessKey = 'klm05TvNBzhg7h7j';
        $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
        $orderInfo = "Thanh toán qua MoMo";
        $amount = "10000";
        $orderId = time() ."";
        $redirectUrl = "http://localhost/bigshoes/trang-chinh/thanh-toan-gio-hang.php";
        $ipnUrl = "http://localhost/bigshoes/trang-chinh/thanh-toan-gio-hang.php";
        $extraData = "";


        if (!empty($_POST)) {
            

            $requestId = time() . "";
            $requestType = "captureWallet";
            //before sign HMAC SHA256 signature
            $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
            $signature = hash_hmac("sha256", $rawHash, $secretKey);
            $data = array('partnerCode' => $partnerCode,
                'partnerName' => "Test",
                "storeId" => "MomoTestStore",
                'requestId' => $requestId,
                'amount' => $amount,
                'orderId' => $orderId,
                'orderInfo' => $orderInfo,
                'redirectUrl' => $redirectUrl,
                'ipnUrl' => $ipnUrl,
                'lang' => 'vi',
                'extraData' => $extraData,
                'requestType' => $requestType,
                'signature' => $signature);
            $result = execPostRequest($endpoint, json_encode($data));
            $jsonResult = json_decode($result, true);  // decode json

            //Just a example, please check more in there
            return $jsonResult;
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dathang'])) {
        $payment_method = $_POST['payment_method'] ?? '';

        if ($payment_method == 'momo') {
            // Chuyển hướng sang xử lý thanh toán MoMo
            $link = redirectMomo();
            $test  = implode(", ", $link);
            echo "<script>console.log('".$link['payUrl']."');</script>";
            echo "<script>window.location.href = '".$link['payUrl']."';</script>"; // Chuyển về trang chủ hoặc trang khác
            exit();
        } elseif ($payment_method == 'cod') {
            // Xử lý đặt hàng thành công cho thanh toán khi nhận hàng
            echo "<script>alert('Đặt hàng thành công! Chúng tôi sẽ liên hệ để giao hàng sớm nhất có thể.');</script>";
            echo "<script>window.location.href = 'danh-sach-sp.php';</script>"; // Chuyển về trang chủ hoặc trang khác
        } else {
            // Lỗi: không chọn phương thức thanh toán
            echo "<script>alert('Vui lòng chọn phương thức thanh toán!');</script>";
            echo "<script>window.history.back();</script>";
        }
    }
    require_once('../../bigshoes/admin/dao/hoa-don.php');

    extract($_REQUEST);
    if (array_key_exists('dathang', $_REQUEST)) {

        try {
            // Tạo kết nối
            $conn = pdo_get_connection();

            // Tạo ngày mua
            $ngaymua = date("d-m-Y");

            // Câu SQL Insert
            $sql = "INSERT INTO hoa_don(ngay_mua,ghi_chu,ma_kh) 
                            VALUES ('" . $ngaymua . "','" . $ghi_chu . "','" . $ma_kh . "')";

            // Thực hiện thêm record
            $conn->exec($sql);


            // Lấy id hóa đơn vừa insert
            $ma_hd = $conn->lastInsertId();

            $items = $_SESSION['cart'];
            foreach ($items as $item) {
                extract($item);
                $sql = "INSERT INTO hoa_don_chi_tiet(ma_hd,ma_hh,so_luong,don_gia) VALUES ('" . $ma_hd . "','" . $ma_hh . "','" . $sl . "','" . $price . "')";
                $conn->exec($sql);


            }
            echo '<script language="javascript">';
            echo 'alert("Bạn đã đặt đơn hàng thành công !")';
            echo '</script>';

            echo '<script>window.location.href = "danh-sach-sp.php";</script>';


        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    ?>





    <div class="container-fluid now2" style="margin-top: 70px;">
        <div class="row">
            <div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-3">
                        <div class="fo">
                            <img src="../../bigshoes/css/danh-sach-sp/img/logooo.png" alt="" style="width:60px;">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <h5>Shop</h5>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Hỗ trợ</h5>
                    </div>
                    <div class="col-md-3">
                        <h5>Tin khuyến mãi</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 0px;">
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>

                                <li>
                                    <p>
                                        Nhiệm vụ của chúng tôi là mang đến những sản phẩm chất lượng với giá cả tốt nhất
                                        cho khách hàng. Được hỗ trợ khách hàng là niềm vinh dự của chúng tôi . <br><br>
                                        Xin cám ơn !
                                    </p>
                                </li>
                                <li><i class="fa fa-facebook "></i>
                                    <i class="fa fa-firefox"></i>
                                    <i class="fa fa-pinterest-p"></i>
                                    <i class="fa fa-youtube"></i>

                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Trang chủ</p>
                                </li>
                                <li>
                                    <p>Cửa hàng</p>
                                </li>
                                <li>
                                    <p>Giới thiệu</p>
                                </li>
                                <li>
                                    <p>Liên hệ</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">

                            <ul>

                                <li>
                                    <p>Ưu đãi</p>
                                </li>
                                <li>
                                    <p>Giao nhận</p>
                                </li>
                                <li>
                                    <p>Đổi trả</p>
                                </li>
                                <li>
                                    <p>Bảo mật</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="fo">
                            <ul>
                                <li>
                                    <p>Nhập vào email của bạn để đăng ký nhận tin khuyến mãi ...</p>
                                </li>
                                <li>
                                    <input type="text" placeholder="You@gmail.com">
                                    <a href="#">Đăng ký</a>
                                </li>
                            </ul>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>





    <script>
        // Hàm xử lý khi nhấn vào nút "Thanh toán MoMo"
        function handlePaymentMomo() {
            // Chuyển hướng sang trang xử lý thanh toán MoMo
            window.location.href = "xu-ly-thanh-toan-momo.php";
        }
    </script>




    <script type="text/javascript">
        const nextIcon = ' <i class="fa fa-chevron-left" style="font-size:36px;color:black"></i>';
        const preIcon = ' <i class="fa fa-chevron-right" style="font-size:36px;color:black"></i>';
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            navText: [
                nextIcon,
                preIcon
            ],
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1200: {
                    items: 5,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>




    <script src=" https://code.jquery.com/jquery-3.2.1.slim.min.js "
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN "
        crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js "
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q "
        crossorigin="anonymous "></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js "
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl "
        crossorigin="anonymous "></script>











</body>

</html>