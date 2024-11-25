<style>
    .nav-bar{
        font-family: 'Roboto', sans-serif;
        font-size: 0.8em;
        font-weight: 500;
        display: flex;
        margin-left: 11%;
        margin-right: 12%;
        padding-inline-start: 22%;
        height: 50px;
    }
    .nav-bar .options{
        display: flex;
        gap: 2em;
        align-items: center;
    }
    .nav-bar .options a{
        text-decoration: none;
        color: #111;
        transition: all 0.3s ease;
    }
    .nav-bar .options i{
        color: rgba(96, 75, 8, 0.799);
    }
    .nav-bar .search-bar{
        display: flex;
        align-items: center;
        margin-left: 5%;
    }
    .nav-bar .search-bar .search-btn{
        border: none;
        background-color: #fff;
        height: 1.5em;
        cursor: pointer;
    }
    .nav-bar .search-bar .search-box{
        border: none;
        height: 1.5em;
        outline-color: #fff;
    }
</style>
<nav class="nav-bar">
    <div class="options">
        <a href="" class="login"><i class="fa-solid fa-user"></i> Đăng nhập</a>
        <a href="" class="purchase"><i class="fa-solid fa-check"></i> Thanh toán</a>
    </div>
    <div class="search-bar">
        <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
        <input type="text" class="search-box" placeholder="Tìm kiếm sản phẩm">
    </div>
</nav>