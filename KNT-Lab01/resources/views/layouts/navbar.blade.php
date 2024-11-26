<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    .nav-bar{
        font-family: 'Roboto', sans-serif;
        font-size: 0.8em;
        font-weight: 500;
        display: flex;
        height: 70px;
    }
    .nav-bar .blank{
        background-color: #464646;
        width: 15%;
        height: auto;
    }
    .nav-bar .main{
        width: 70%;
        height: auto;
        display: flex;
        align-items: center;
        gap: 1em;
    }
    .nav-bar .main .side1{
        display: flex;
        gap: 3em;
    }
    .nav-bar .main .side1 .options{
        padding-left: 23em;
        display: flex;
        gap: 1.5em;
    }
    .nav-bar .main .side1 .options a{
        text-decoration: none;
        color: gray;
        transition: all 0.3s ease;
    }
    .nav-bar .main .side1 .options a:hover{
        color: rgba(96, 75, 8, 0.799);
    }
    .nav-bar .main .side1 .options i{
        color: rgba(96, 75, 8, 0.799);
    }
    .nav-bar .main .side1 .search-bar{
        display: flex;
        align-items: center;
        gap: 0;
        border-bottom: #ddd 1px solid;
        width: 22em;
    }
    .nav-bar .main .side1 .search-bar .search-btn{
        border: none;
        background-color: #fff;
        cursor: pointer;
        font-size: 1.5em;
        padding-bottom: 0.3em;
    }
    .nav-bar .main .side1 .search-bar .search-box{
        border: none;
        outline-color: #fff;
        font-size: 1.1em;
        padding-bottom: 0.3em;
    }
    .nav-bar .main .cart-btn{
        margin-left: 0;
        height: 70px;
        width: 20.5em;
        border: none;
        background-color: rgba(96, 75, 8, 0.799);
        color: #fff;
        cursor: pointer;
    }   
    
</style>
<nav class="nav-bar">
    <?php
        $count = 0;
        $money = 0;    
    ?>
    <div class="blank"></div>
    <div class="main">
        <div class="side1">
            <div class="options">
                <a href="" class="login"><i class="fa-solid fa-user"></i> Đăng nhập</a>
                <a href="" class="purchase"><i class="fa-solid fa-check"></i> Thanh toán</a>
            </div>
            <div class="search-bar">
                <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                <input type="text" class="search-box" placeholder="Tìm kiếm sản phẩm">
            </div>
        </div>
        <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> <?php echo $count.' sản phẩm - '.$money." VNĐ"?></button>
    </div> 
    <div class="blank"></div>
</nav>