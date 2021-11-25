@extends('user.main')

@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Elements
                    </h1>
                    <p class="text-white link-nav"><a href="index.html">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                            href="elements.html"> Elements</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->



    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">

            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Form Element</h3>
<<<<<<< HEAD
                        <form action="" method="POST">
                            <div class="mt-10">
                                <input type="file" id="upload" required class="single-input">
                                <div id="image_show"></div>
                                <input type="hidden" name="imghoso" id="imghoso">
=======
                        <form action="#">
                            <div class="mt-10">
                                <input type="file" name="imghoso" required class="single-input">
>>>>>>> 7b205d17fd2792194514ca89701f9c014d07c5e2
                            </div>
                            <div class="mt-10">
                                <input type="text" name="tenhoso" placeholder="Tên hồ sơ"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên hồ sơ'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="hoten" placeholder="Họ và tên"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Họ và tên'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="sdt" placeholder="Số điện thoại"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Số điện thoại'" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Email address'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="date" name="ngaysinh" placeholder="Ngày sinh" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Ngày sinh'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <input type="text" name="diachi" placeholder="Địa chỉ" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Địa chỉ'" required class="single-input">
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="Giới thiệu bản thân" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="Kỹ năng" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Kỹ năng'" required></textarea>
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="học vấn" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'học vấn'" required></textarea>
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="Kinh nghiệm" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Kinh nghiệm'" required></textarea>
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" placeholder="Hoạt động" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Hoạt động'" required></textarea>
                            </div>
                            <div class="mt-10">
                                <input type="text" name="id_nguoitimviec" placeholder="id người tìm việc" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'id người tìm việc'" required class="single-input">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
@endsection
