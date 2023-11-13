<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chu</title>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>

<body>
    <div class="fluid-container">
        <div class="header" style="width: 100%;height:700px; background-image:url('./IMG/6-kinh-nghiem-mo-nha-hang-bff-1.jpg')">
            <div class="row" style="height:70px;width:100%; background-color:white;text-align:center;">
                <div class="col-4">
                    <img src="./IMG/images.jpg" alt="" class="logo" style="width:30%; height: 70px;;">
                </div>
                <div class="col-4" style="margin-top:10px;">
                    <ul class="navbar" style="list-style-type: none;">
                        <li class="nav-item"><a href="#">HOME</a></li>
                        <li class="nav-item"><a href="./HTML/menu.html">MENU</a></li>
                        <li class="nav-item"><a href="./HTML/manager.html">ABOUT</a></li>
                        <!-- vì lí do chưa code trang about nên toai link thử trang quản lí vào đây. Chứ không phải toai bị ngáo link nhầm, tén kiều -->
                        <li class="nav-item"><a href="./HTML/contact.html">CONTACT</a></li>
                    </ul>
                </div>
                <div class="col-4">
                    <a href="login.php" class="btn-primary">Login</a>
                </div>
            </div>
        </div>
        <section style="float: left; width:100%;height:auto;">
            <div class="row" style="text-align:center;">
                <div class="col-6" style="margin-top:50px;">
                    <p>BEP AN TREE</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis modi at hic officia ipsa rem, fuga aperiam doloremque itaque excepturi, a quaerat dolor obcaecati aliquam est quia magnam error id!</p>
                </div>
                <div class="col-6" style="margin-top:50px;padding-left:15%;">
                    <div style="width: 400px; height:400px; border-radius:10%;">
                        <img class="intro-img" src="./IMG/bittet.jpg" style="width: 100%; height:80%; border-radius: 10%;">
                    </div>
                </div>
            </div>
            <div class="row" style="text-align:center;color:orange;margin-top:0px;">
                <div class="col-4">
                    <img class="food" src="./IMG/banh-mi.jpg" alt="">
                    <p class="foodname">Bánh mì</p>
                </div>
                <div class="col-4">
                    <img class="food" src="./IMG/cach-nau-pho-bo.jpg" alt="">
                    <p class="foodname">Phở</p>
                </div>
                <div class="col-4">
                    <img class="food" src="./IMG/52-1200x676.jpg" alt="">
                    <p class="foodname" class="foodname">Cơm tấm</p>
                </div>
            </div>
        </section>
        <footer style="float: left; width:100%;height:auto; background-color:orange; color:white;">
            <div class="row" style="margin-top:30px;">
                <div class="col-3">
                    <p>ĐỊA CHỈ</p>
                    <Address>No.12 Nguyen Van Bao Street</Address>
                    <p>Email: nguyenan@gmail.com</p>
                    <p>Phone: 0909090909</p>
                </div>
                <div class="col-3">
                    <p>GIỜ HOẠT ĐỘNG</p>
                    <p>07:30 - 01:30PM</p>
                    <p>MONDAY - FRIDAY</p>
                </div>
                <div class="col-3">
                    <p>THEO DÕI CHÚNG TÔI</p>
                    <a style="color:white; font-size:30px" href=""><i class="fa-brands fa-facebook"></i></a> &nbsp;
                    <a style="color:white; font-size:30px;" href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="col-3">
                    <p>CHÍNH SÁCH</p>
                    <p><a style="color: white;" href="#">Chính sách đền bù</a></p>
                    <p><a style="color: white;" href="#">Chính sách bảo mật</a></p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>