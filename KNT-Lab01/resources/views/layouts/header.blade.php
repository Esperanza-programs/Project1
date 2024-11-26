<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
    *{
        margin: 0;
    }
    .head{
        font-family: 'Roboto', sans-serif;
        font-size: 1.0em;
        font-weight: 500;
        display: flex;
        height: 85px;
    }
    .head .blank{
        width: 15%;
        height: auto;
        background-color: #464646;
    }
    .head .main{
        width: 70%;
        height: auto;
        display: flex;
        align-items: center;
    }
    .head .main .title{
        background-color: rgba(96, 75, 8, 0.799);
        color: #fff;
        display: flex;  
        font-size: 1.4rem;
        padding-left: 1.5%;
        padding-right: 1.5%;
        padding-top: 0;
        align-items: center;
        height: 85px;
    }
    .head .main .lists{
        border-bottom: #ddd 1px solid;
        list-style: none;
        display: flex;
        align-items: center;
        gap: 1.6em;
        margin-right: 10%;
        padding-top: 0;
        height: 85px;
        font-weight: 600;
    }
    .head .main .lists li a{
        text-decoration: none;
        color: #000;
        transition: all 0.3s ease;
        text-transform: uppercase;
        font-size: 0.8em;
    }
    .head .main .lists li a:hover{
        color: rgba(96, 75, 8, 0.799);
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<header class="head">
    <div class="blank"></div>
    <div class="main">
        <div class="title">Yu-Gi-Oh Duel Store</div>
        <ul class="lists">
            <li><a href="http://localhost:8000">Trang chủ</a></li>
            <li><a href="http://localhost:8000/news">Tin tức</a></li>
            <li><a href="http://localhost:8000/about">Giới thiệu</a></li>
            <li><a href="http://localhost:8000/products">Sản phẩm <i class="fa-solid fa-caret-down"></i></a></li>
            <li><a href="http://localhost:8000/sale">Khuyến mãi</a></li>
            <li><a href="https://www.facebook.com/esperanza.prog">Facebook</a></li>
        </ul>
    </div>
    <div class="blank"></div>
</header>