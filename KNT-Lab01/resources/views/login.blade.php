@include('layouts.header')

<title>Đăng nhập tài khoản</title>

<body>
    <form class="container d-flex">
        <div class="row my-5">
            <div class="col-5 border border-dark rounded-1 p-3 mx-5" style="--bs-border-opacity:.25">
                <div class="bg-secondary rounded-1 text-white text-uppercase p-3">
                    khách hàng mới
                </div>
                <div class="mb-3">
                    <label class="fw-bold my-3">
                        Đăng ký tài khoản
                    </label>
                    <label for="" class="mb-3">
                        Bằng cách tạo tài khoản bạn có thể mua sắm nhanh hơn, cập nhật tình trạng đơn hàng, theo dõi những đơn hàng đã đặt và đặc biệt là sẽ được hưởng nhiều chương trình ưu đãi!
                    </label>
                    <button class="btn btn-warning">Tiếp tục</button>
                </div>
            </div>
            <div class="col-5 border border-dark rounded-1 p-3 mx-5" style="--bs-border-opacity:.25">
                <div class="bg-secondary rounded-1 text-white text-uppercase p-3">
                    khách hàng cũ
                </div>
                <label class="fw-bold my-3">
                    Tôi là khách hàng cũ
                </label>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Địa chỉ Email</label>
                    <input type="email" class="form-control" placeholder="Địa chỉ Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" placeholder="Mật khẩu" id="exampleInputPassword1">
                  </div>
                  <div class="mb-1">
                    <label for="forgotPassword" class="form-label"><a href="" class="text-reset text-decoration-none">Quên mật khẩu</a></label>
                  </div>
                  <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </div>
        </div>
      </form>
</body>
@include('layouts.footer')