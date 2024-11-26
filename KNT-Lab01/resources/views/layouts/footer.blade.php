<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    *{
        margin: 0;
    }
    .foot{
        font-family: 'Roboto', sans-serif;
        background-color: #333;
        color: #ccc;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .foot .social{
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0.7em;
        height: 150px;
        border-bottom: #777 0.2px solid;
        width: 80%;
    }
    .foot .social .title{
        text-transform: uppercase;
    }
    .foot .social .social-btn button{
        width: 3em;
        height: 3em;
        text-align: center;
        transition: all 0.3s ease;
    }
    .foot .social .social-btn button:hover{
        background-color: #333;
        border-color: rgba(96, 75, 8, 0.799); 
    }
    .foot .social .social-btn button:hover i{
        color: rgba(96, 75, 8, 0.799);
    }
    .foot .social .social-btn button i{
        font-size: 1.5em;
    }
    .foot .end{
        display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 4em;
        padding: 2em;
        line-height: 27px;
    }
    .foot .end .shop-info{
        width: 30%;
        text-align: center;
    }
    .foot .end .shop-info h4{
        font-size: 1em;
    }
    .foot .end .shop-info p, .foot .end .shop-info span, .foot .end .shop-info a{
        font-size: 0.8em;
        color: #aaa;
    }
    .foot .end .shop-info a{
        color: #aaa
    }
    .foot .end .account>a, .foot .end .info>a, .foot .end .services>a{
        font-size: 1em;
        text-decoration: none;
        color: #777;
    }
    .foot .end .account ul, .foot .end .info ul, .foot .end .services ul{
        list-style: none;
        
    }
    .foot .end .account ul li, .foot .end .info ul li, .foot .end .services ul li{
        transition: all 0.3s ease;
    }
    .foot .end .account ul li:hover, .foot .end .info ul li:hover, .foot .end .services ul li:hover {
        list-style: disc;
        padding-left: 0.5em;
        color: rgba(96, 75, 8, 0.799);
    }
    .foot .end .account ul li:hover a, .foot .end .info ul li:hover a, .foot .end .services ul li:hover a{
        color: rgba(96, 75, 8, 0.799);
    }
    .foot .end .account ul li a, .foot .end .info ul li a, .foot .end .services ul li a{
        text-decoration: none;
        font-size: 0.8em;
        color: #aaa;
    }
    .foot .copyright{
        height: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8em;
        background-color: #222;
        width: 100%;
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<footer class="foot">
    <div class="social">
        <span class="title">
            mạng xã hội
        </span>
        <div class="social-btn">
            <button class="facebook">
                <i class="fa-brands fa-facebook-f"></i>
            </button>
            <button class="instagram">
                <i class="fa-brands fa-square-instagram"></i>
            </button>
            <button class="google">
                <i class="fa-brands fa-google"></i>
            </button>
            <button class="youtube">
                <i class="fa-brands fa-youtube"></i>
            </button>
        </div>
    </div>
    <div class="end">
        <div class="shop-info">
            <h4>YU-GI-OH DUEL STORE - Cửa hàng Trò chơi Yu-Gi-Oh</h4>
            <p>
                Số 186 Nguyễn Văn Khạ, KP3, TT. Củ Chi, Củ Chi, TP.HCM
                Điện thoại hỗ trợ:  0938 144 068 - Kho hàng 028 3606 4150
            </p>
            <span>Email 24/7: </span>
            <a href="" class="email">info.yugiohdualstore.com</a><br>
            <span>Facebook Chat: </span> 
            <a href="" class="fb-chat">fb.com/yugiohduelstore</a>
            <p>Giờ làm việc của kho hàng</p>
            <p>7h30 - 11h30; 13h30 - 17h30 (nghỉ T7 và CN)</p>
            <img src="images/bocongthuong.png" alt="">
        </div>
        <div class="account">
            <a href="">TÀI KHOẢN</a>
            <ul>
                <li><a href="">Tài khoản</a></li>
                <li><a href="">Thông báo</a></li>
                <li><a href="">Đơn hàng</a></li>
                <li><a href="">Yêu thích</a></li>
            </ul>
        </div>
        <div class="info">
            <a href="">THÔNG TIN</a>
            <ul>
                <li><a href="">YU-GI-OH DUEL STORE</a></li>
                <li><a href="">Hướng Dẫn</a></li>
                <li><a href="">Chính Sách Riêng Tư</a></li>
                <li><a href="">Điều Khoản & Điều Kiện</a></li>
            </ul>
        </div>
        <div class="services">
            <a href="">DỊCH VỤ</a>
            <ul>
                <li><a href="">SHIP CARD USA</a></li>
                <li><a href="">Sơ đồ trang</a></li>
            </ul>
        </div>
    </div>
    <div class="copyright">
        <p>Điều hành bởi YU-GI-OH DUEL ACADEMY - VietDuc Game Production. MSDN: 0313685295 - Cấp ngày 09/3/2016 tại Sở Kế hoạch và Đầu tư TP.HCM</p>
    </div>
</footer>