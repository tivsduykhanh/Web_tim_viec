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
                <h3 class="mb-30">Table</h3>
                <div style="margin-bottom: 10px;" class="button-group-area mt-40">
                    <a href="/user/hoso/add" class="genric-btn primary radius">Tạo CV</a>
                </div>
                <div class="progress-table-wrap">
                    <div class="progress-table">
                        <div class="table-head">
                            <div class="serial">#</div>
                            <div class="country">Thông tin</div>
                            <div class="visit">Tên hồ sơ</div>
                            <div class="percentage">Thao tác</div>
                        </div>
                        {{-- @foreach($listhocsinh as $key => $hocsinh)
					    <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $hocsinh->tenhocsinh }}</td>
                            <td>{{ $hocsinh->sodienthoai }}</td>
                            <td><a href="/hocsinh/{{ $hocsinh->id }}/edit">Sửa</a></td>
                            <td><a href="/hocsinh/{{ $hocsinh->id }}/delete">Xóa</a></td>
                            </tr>
				        @endforeach --}}

                        @foreach($listhoso as $key => $hoso)
                        <div class="table-row">
                            <div class="serial">{{ $key+1 }}</div>
                            <div class="country"> <img src="img/elements/f1.jpg" alt="flag">{{ $hoso->imghoso }}</div>
                            <div class="visit">{{ $hoso->tenhoso }}</div>
                            <div class="percentage">
                                <a href="/user/hoso/{{ $hoso->id }}/edit" class="genric-btn success radius medium">Sửa CV</a>
                                <a href="/user/hoso/{{ $hoso->id }}/delete" style="margin-left: 10px" class="genric-btn danger radius medium">Xoá CV</a>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="table-row">
                            <div class="serial">02</div>
                            <div class="country"> <img src="img/elements/f2.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-2" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">03</div>
                            <div class="country"> <img src="img/elements/f3.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                                        aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">04</div>
                            <div class="country"> <img src="img/elements/f4.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-4" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">05</div>
                            <div class="country"> <img src="img/elements/f5.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-5" role="progressbar" style="width: 40%"
                                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">06</div>
                            <div class="country"> <img src="img/elements/f6.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-6" role="progressbar" style="width: 70%"
                                        aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">07</div>
                            <div class="country"> <img src="img/elements/f7.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-7" role="progressbar" style="width: 30%"
                                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="table-row">
                            <div class="serial">08</div>
                            <div class="country"> <img src="img/elements/f8.jpg" alt="flag">Canada</div>
                            <div class="visit">645032</div>
                            <div class="percentage">
                                <div class="progress">
                                    <div class="progress-bar color-8" role="progressbar" style="width: 60%"
                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Align Area -->
@endsection
