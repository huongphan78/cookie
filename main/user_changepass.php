<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COOKABLE - USER - Đổi mật khẩu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>

    <!--header-->
    <nav class="header navbar navbar-expand-sm bg-dark navbar-dark navbar-inverse">
        <div class="container-fluid">
            <div class="logo0 col-1  ">
                <a class="navbar-brand fa-solid fa-truck-fast" href="#"></a>
            </div>
            <div class="logo1 col-7 pa-y-2 " > 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-left" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="img4.html">Sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lienhe.html">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calo.html">Tính Calo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="congthuc.html">Công thức nấu ăn</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="logo2 col-1">
                <a class="navbar-brand fa-solid fa-user " href="user.html"></a>
                <a class="navbar-brand fa-solid fa-cart-shopping" href="cart.html"></a>
            </div>
        </div>
    </nav>
    
    <!--banner-->
    <div class="banner container-fluid">
        <div class="col-xxl-7 box-left">
            <h2>
                <span>USER - ĐỔI MẬT KHẨU</span>
            </h2>                
            <p>Hãy là một thành viên của Cookable để được hưởng nhiều ưu đãi.</p>
            <p>Bạn đã có tài khoản nhưng quên mật khẩu?</p>
            <p>Đổi mật khẩu ngay thôi!</p>
        <a href="user_nopass.html">
            <button> Quên mật khẩu </button> 
        </a> 
        </div>
        <div class="col-xl-5 box-right">
            <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_1.png?raw=true" alt="">
            <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_2.png?raw=true" alt="">
            <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_3.png?raw=true" alt="">
        </div>
        <div class="to-bottom">
            <a href="banner.html">
                <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/to_bottom.png?raw=true" alt="">
            </a>
        </div>
    </div>

    <!--users-->
    <div class="users container-fluid">    
        <div class="container bg-white">
        <div class="row">
            <h2>ĐỔI MẬT KHẨU CỦA BẠN</h2>
        </div>
        <div class="row">
            <div class="user-form">
                <form action="">                   
                    <label for="username">Tên người dùng</label>
                    <input type="text" id="username" name="username" required placeholder="Nhập tên người dùng...">
            
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="password" name="password" required placeholder="Nhập mật khẩu...">                    
                    
                    <label for="passwordnew">Mật khẩu mới</label>
                    <input type="password" id="passwordnew" name="passwordnew" required placeholder="Nhập mật khẩu...">
            
                    <label for="confirm-passwordnew">Xác nhận mật khẩu mới</label>
                    <input type="password" id="confirm-passwordnew" name="confirm-passwordnew" required placeholder="Nhập mật khẩu mới lần nữa...">

                    <input type="submit" value="Đổi mật khẩu">
                </form>
            </div><br>

            <h3>Bạn quên mật khẩu sao?</h3>
            <a href="user_nopass.html">
                <button> Quên mật khẩu </button>  
            </a>
        </div>
        <div class="row">
            <h2>   </h2>
        </div>
    </div>
</div>   

        
    
<!--footer-->
<div class="footer container-fluid" style="background: rgba(0, 0, 0, 0.79); padding: 20px;">
    <div class="row">
        <div class="col-5"  >
            <h3>NỘI DUNG</h3>
            <div class="menu list-group-flush">
                <a href="index.html" class="list-group-item list-group-item-action">Trang chủ</a>
                <a href="img4.html" class="list-group-item list-group-item-action">Sản phẩm</a>
                <a href="blog.html" class="list-group-item list-group-item-action">Blog</a>
                <a href="lienhe.html" class="list-group-item list-group-item-action">Liên hệ</a>
                <a href="calo.html" class="list-group-item list-group-item-action">Tính calo</a>
                <a href="congthuc.html" class="list-group-item list-group-item-action">Công thức nấu ăn</a>
            </div>
        </div> 
        <div class="col-7" >
        <h3>LIÊN HỆ</h3>
        <form action="">
            <input class="border-none" type="text" placeholder="Địa chỉ email"  style="background: transparent; cursor: text;">
            <button class="border-none">Nhận tin</button>
        </form>
        </div>
        <div class="logo">
            <img src="assets/logo.png" alt="">
        </div>
        <p class="text-secondary ">Cung cấp sản phẩm với chất lượng an toàn cho quý khách</p>
    </div>
</div>

    <!-- Thêm vào cuối tệp index.html -->
    <div id="chatbot-circle" onclick="toggleChat()">
    <p> 
    <i class="fa-solid fa-robot"></i>
    </p>
    </div>
    
    <div id="chatbot-interface" style="display: none;">
    <div id="chatbot-messages"></div>
    <input id="chatbot-input" type="text" placeholder="Type your message here" />
    </div>
    
    <script>
    function toggleChat() {
    var chatInterface = document.getElementById('chatbot-interface');
    if (chatInterface.style.display === "none") {
    chatInterface.style.display = "block";
    } 
    else {
    chatInterface.style.display = "none";
    }
    }
    </script>

</body>
</html>
