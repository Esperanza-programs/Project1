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
        border-bottom: #ddd 1px solid;
        margin-left: 11%;
        margin-right: 12%;
        height: 50px;
    }
    .head .title{
        background-color: rgba(96, 75, 8, 0.799);
        display: flex;
        color: #fff;
        align-items: center;
        font-size: 1.4rem;
        padding-left: 1.5%;
        padding-right: 1.5%;
        padding-top: 0;
    }
    .head .lists{
        list-style: none;
        display: flex;
        align-items: center;
        gap: 1.6em;
        margin-right: 10%;
        padding-top: 0;
    }
    .head .lists li a{
        text-decoration: none;
        color: #000;
        transition: all 0.3s ease;
        padding-top: 0; 
    }
    .head .lists li a:hover{
        color: rgba(96, 75, 8, 0.799);
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<header class="head">
    <div class="title">Yu-Gi-Oh Dual Store</div>
    <ul class="lists">
        <li><a href="http://localhost:8000">Trang chủ</a></li>
        <li><a href="http://localhost:8000/news">Tin tức</a></li>
        <li><a href="http://localhost:8000/about">Giới thiệu</a></li>
        <li><a href="http://localhost:8000/products">Sản phẩm <i class="fa-solid fa-caret-down"></i></a></li>
        <li><a href="http://localhost:8000/sale">Khuyến mãi</a></li>
        <li><a href="https://www.facebook.com/esperanza.prog">Facebook</a></li>
    </ul>
</header>