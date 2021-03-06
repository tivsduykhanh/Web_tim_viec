@extends('business.main')

{{-- @section('content') --}}
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Thêm bài đăng mới
                </h1>
                <p class="text-white link-nav"><a href="home">Home </a> <span class="lnr lnr-arrow-right"></span> 
                    <ahref="elements.html">Đăng tin</a>
                </p>
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
                    <h3 class="mb-30">Thêm bài đăng</h3>
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong>{{ Session::get('success') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif

                    <?php //Hiển thị thông báo lỗi
                    ?>
                    @if (Session::has('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <strong>{{ Session::get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                <span class="sr-only">Close</span>
                            </button>
                        </div>
                    @endif

                    <form action="{{ route('jobadd') }}" method="POST">
                        @csrf
                        <div class="mt-10">
                            <input type="text" name="tencongviec" id="tencongviec" value="{{ old('tencongviec') }}"
                                placeholder="Tên công việc" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên công việc'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="tencongty" id="tencongty" value="{{ old('tencongty') }}"
                                placeholder="Tên công ty" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Tên công ty'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="mucluong" id="mucluong" value="{{ old('mucluong') }}"
                                placeholder="Mức lương" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Mức lương'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <textarea name="kinhnghiem" id="kinhnghiem" value="{{ old('kinhnghiem') }}"
                                class="single-textarea" placeholder="Kinh nghiệm"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kinh nghiệm'"
                                ></textarea>
                        </div>
                        <div class="mt-10">
                            <textarea name="yeucaubangcap" id="yeucaubangcap" value="{{ old('yeucaubangcap') }}"
                                class="single-textarea" placeholder="Yêu cầu bằng cấp"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Yêu cầu bằng cấp'"
                                ></textarea>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="chucvu" id="chucvu" value="{{ old('chucvu') }}"
                                placeholder="Chức việc" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Chức việc'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <textarea name="hinhthuclamviec" id="hinhthuclamviec" value="{{ old('hinhthuclamviec') }}"
                                class="single-textarea" placeholder="Hình thức làm việc"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Hình thức làm việc'"
                                ></textarea>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="soluongtuyen" id="soluongtuyen" value="{{ old('soluongtuyen') }}"
                                placeholder="Số lượng tuyển" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Số lượng tuyển'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <textarea name="diadiemlamviec" id="diadiemlamviec" value="{{ old('diadiemlamviec') }}" class="single-textarea"
                                placeholder="Địa điểm làm việc" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Địa điểm làm việc'"></textarea>
                        </div>
                        <div class="mt-10">
                            <textarea name="mota" id="mota" value="{{ old('mota') }}" class="single-textarea"
                                placeholder="Mô tả" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Mô tả'"></textarea>
                        </div>
                        <div class="mt-10">
                            <textarea name="yeucau" id="yeucau" value="{{ old('kinhnghiem') }}"
                                class="single-textarea" placeholder="Yêu cầu" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Yêu cầu'"></textarea>
                        </div>
                        <div class="mt-10">
                            <textarea name="quyenloi" id="quyenloi" value="{{ old('quyenloi') }}"
                                class="single-textarea" placeholder="Quyền lợi" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Quyền lợi'"></textarea>
                        </div>
                        <div class="mt-10">
                            <textarea name="cachungtuyen" id="cachungtuyen" value="{{ old('cachungtuyen') }}"
                                class="single-textarea" placeholder="Cách ứng tuyển" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Cách ứng tuyển'"></textarea>
                        </div>
                        <div class="mt-10">
                            <input type="date" name="hannophoso" id="hannophoso" value="{{ old('hannophoso') }}"
                                placeholder="Hạn nộp hồ sơ" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Hạn nộp hồ sơ'" class="single-input" required>
                        </div>
                        <div class="mt-10">
                            <select name="loainganh_id" id="loainganh_id" class="single-input">
                                <option value="">Chọn loại ngành</option>
                                @foreach($listnganh as $key => $nganh)
                                    <option value="{{$nganh->id}}">{{$nganh->tennganh}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-10">
                            <select name="tinhthanh_id" id="tinhthanh_id" class="single-input">
                                <option value="">Chọn tỉnh thành</option>
                                @foreach($listtinhthanh as $key => $tinhthanh)
                                    <option value="{{$tinhthanh->id}}">{{$tinhthanh->tentinhthanh}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="button-group-area mt-40">
                            <button type="submit" class="genric-btn success radius">Tạo CV</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
{{-- @endsection --}}