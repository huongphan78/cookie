<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>COOKABLE - Công thức</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../css/congthuc.css">
</head>

<body>
    

  
    <!--header-->
    <nav class="header navbar navbar-expand-sm bg-dark navbar-dark navbar-inverse">
        <div class="container-fluid">
            <div class="logo0 col-1  ">
                <a class="navbar-brand fa-solid fa-truck-fast" href="main/user.php"></a>
            </div>
            <div class="logo1 col-7 pa-y-2 " > 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-left" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="img4.php">Sản phẩm</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lienhe.php">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calo.php">Tính Calo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled active" href="congthuc.php">Công thức nấu ăn</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="logo2 col-1">
                <a class="navbar-brand fa-solid fa-user " href="user.php"></a>
                <a class="navbar-brand fa-solid fa-cart-shopping" href="cart.php"></a>
            </div>
        </div>
    </nav>
<!--banner-->
<div class="banner container-fluid">
    <div class="col-sm-7 box-left">
        <h2 >
            <span>Công thức</span>
        </h2>
        <p>Chuyên cung cấp các món ăn đảm bảo dinh dưỡng,</p>
        <p> hợp vệ sinh đến người dùng,phục vụ người dùng 1 cái
            hoàn hảo nhất</p>
            <a href="blog_post.php">
                <button> Đăng bài </button>

            </a>    </div>
    <div class="col-sm-5 box-right">
        <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_1.png?raw=true" alt="">
        <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_2.png?raw=true" alt="">
        <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/img_3.png?raw=true" alt="">
    </div>
    <div class="to-bottom">
        <a href="banner.php">
            <img src="https://github.com/hqteamobi/web_shop_ban_hang/blob/main/assets/to_bottom.png?raw=true" alt="">
        </a>
    </div>
</div>
       
        <h1> Công thức nấu ăn</h1>
                 
   
    <!-- body  -->
      <div id="main"> 
        <h2>Nguyên Liệu</h2>
        <div id="nguyenlieu"> 
            <ul class="food">
                <li class="food-item">
                    <a href="Thit_bo.php" target="_blank">
                        <img src="https://bonuongpho.com/wp-content/uploads/2016/05/beefsteak-mang-tay-min.png" alt="" class="img" width="400px" height="300px">
                    </a>
                    <span class="text">
                        <strong> Thịt bò</strong>
                     </span>
                 </li>
                 <li class="food-item">
                    <a href="gia_cam.php" target="_blank">
                        <img src="https://thumbs.dreamstime.com/b/grill-chicken-legs-grilled-chicken-legs-bbq-sesame-parsley-tomato-95526623.jpg" alt="" class="img" width="400px" height="300px">
                    </a>
                    <span class="text">
                        <strong>Gia cầm</strong>
                    </span>        
                 </li>
                 <li class="food-item">
                    <a href="Hsan.php" target="_blank">
                        <img src="https://png.pngtree.com/thumb_back/fh260/background/20210913/pngtree-shrimp-fresh-seafood-prawn-ingredients-image_839822.jpg" alt="" class="img" width="400px" height="300px">
                    </a>
                    <span class="text">
                        <strong>Hải sản</strong>
                    </span>
                 </li>
            </ul>
        </div>
        <h2>Phương pháp nấu</h2>
        <div id="phuongphap1">
            <ul class="food">
                <li class="food-item">
                    <a href="ham_hap.php" target="_blank">
                        <img src="https://barona.vn/storage/meo-vat/160/ca-hap-xi-dau.jpg" alt="" class="img" width="400px" height="300px">
                    </a>
                    <span class="text">
                        <strong>Hấp</strong>
                     </span>
                 </li>
                 <li class="food-item">
                    <a href="donuong.php" target="_blank">
                        <img src="https://countrynaturalbeef.com/cdn/shop/articles/5c1a0ab2755eb3cbec68765cc28596fb.jpg?v=1633711109" alt="" class="img" width="400px" height="300px">                    </a>
                    <span class="text">
                        <strong>Nướng</strong>
                    </span>        
             </ul>
        </div>
        <div id="phuongphap2">
            <ul class="food">
                <li class="food-item">
                    <a href="chien.php" target="_blank">
                        <img src="https://media.suckhoecong.vn/Images/Uploaded/Share/2020/03/23/e37045b4adf044ae1de1.jpg" alt="" class="img" width="400px" height="300px">
                    </a>
                    <span class="text">
                        <strong>Chiên</strong>
                     </span>
                 </li>
                 <li class="food-item">
                    <a href="kho.php" target="_blank">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMUjwXR76cUn-bf2IuaW1o0kZpf9VUkj9WIg&usqp=CAU" alt="" class="food-link-img" alt="" class="img" width="400px" height="300px">                    </a>
                    <span class="text">
                        <strong>Kho</strong>
                    </span>        
             </ul>
        </div>
      </div>
    </div>

   
     <!--list bai viet de xuat-->
     <div class="blogs container-fluid py-5">    
        <div class="container bg-white">
     <div class="row">
        <h2>NHỮNG CHIA SẺ HAY HO</h2>
    </div>
    <!-- Carousel -->
    <div id="blogcr" class="carousel slide" data-bs-ride="carousel">          
        <!--button-->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#blogcr" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#blogcr" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#blogcr" data-bs-slide-to="2"></button>
        </div>
        
        <!--Slideshow-->
   
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="blog_post.php">
            <img src="https://bcp.cdnchinhphu.vn/334894974524682240/2023/12/6/20200513165141155039rau-bina-la-rau-gi-max-1800x1800-17018491338671987365707.jpg" alt="Rau xanh tốt như thế nào?" class="d-block" style="width:100%">
            <div class="carou-cap">
                <h3>Rau xanh tốt như thế nào?</h3>
                <p>Không chỉ giàu chất xơ, rau xanh còn nhiều ưu điểm khác mà bạn chưa biết.</p>
            </div>
            </a>
          </div>
          <div class="carousel-item">
          <a href="blog_post.php">
            <img src="https://wallpapercave.com/wp/wp6557433.jpg" alt="Sự diệu kì của dâu tây" class="d-block" style="width:100%">
            <div class="carou-cap">
                <h3>Sự diệu kì của dâu tây</h3>
                <p>Dâu tây sẽ làm bạn bất ngờ về khả năng của nó.</p>
            </div>
            </a>
          </div>
          <div class="carousel-item">
          <a href="blog_post.php">
            <img src="https://justcook.butcherbox.com/wp-content/uploads/2020/03/dinner2.jpg" alt="Tự nấu ngon như ở nhà hàng!" class="d-block" style="width:100%">
            <div class="carou-cap">
                <h3>Tự nấu ngon như ở nhà hàng!<h3>
                <p>Bạn muốn ăn ngon nhưng không tốn quá nhiều tiền? Easy!!</p>
            </div>
            </a>
          </div>
        </div>
        
        <!--icon mũi tên-->
        <button class="carousel-control-prev" type="button" data-bs-target="#blogcr" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#blogcr" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    
</div>
<div class="post">
    <h2>BÀI VIẾT CỦA BẠN</h2>
    <div>
        <p>Bạn chưa có bài đăng nào cả!</p>
        
    </div>
</div>



     <!--footer-->
     <div class="footer container-fluid" style="background: rgba(0, 0, 0, 0.79); padding-top: 20px;">
        <div class="row">
            <div class="col-5"  >
                <h3>NỘI DUNG</h3>
                <div class="menu list-group-flush">
                    <a href="index.php" class="list-group-item list-group-item-action">Trang chủ</a>
                    <a href="img4.php" class="list-group-item list-group-item-action">Sản phẩm</a>
                    <a href="blog.php" class="list-group-item list-group-item-action">Blog</a>
                    <a href="lienhe.php" class="list-group-item list-group-item-action">Liên hệ</a>
                    <a href="calo.php" class="list-group-item list-group-item-action">Tính calo</a>
                    <a href="congthuc.php" class="list-group-item list-group-item-action">Công thức nấu ăn</a>
            </div>
            </div> 
            <div class="col-7" >
            <h3>LIÊN HỆ</h3>
            <form action="">
                <input class="border-top" type="text" placeholder="Địa chỉ email"  style="background: transparent; cursor: text;">
                <button class="border-top">Nhận tin</button>
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