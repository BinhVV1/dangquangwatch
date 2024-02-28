@extends('layouts.app')

@section('content')
@if(session('error'))
    <div id="error-message" class="error-message">
        {{ session('error') }}
    </div>
@endif
<!-- SLIDER AREA START (slider-6) -->
<div class="ltn__slider-area ltn__slider-3 ltn__slider-6">
    <div class="ltn__slide-two-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white--">
        <!-- ltn__slide-item  -->
        <div style="display:flex;" class="ltn__slide-item ltn__slide-item-8 ltn__slide-item-9--- text-color-white bg-image bg-overlay-theme-black-10---">
            <div class="ltn__slide-item-inner text-center" style="position:absolute;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h6 class="slide-sub-title slide-title-line-2--- animated" style="color:black; font-weight:bold">1993Watch</h6>
                                            <h1 class="slide-title animated " style="color:#DCCCBD;text-shadow: 2px 2px 4px #000000;">Nâng Tầm <br>Phong Cách</h1>
                                            <div class="btn-wrapper animated">
                                                <a href="service.html" class="theme-btn-1 btn btn-round" style="background:black;color:#DCCCBD">Xem Ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <video class="header-search-2" width="100%" videotitle="Ref. 5260/355R-001 / Home Banner Desktop" preload="" data-title="Ref. 5260/355R-001 / Home Banner Desktop" tabindex="-1" playsinline="" muted="" loop="" autoplay="">
                <source type="video/mp4" src="https://static.patek.com/videos/articles/5260_355R_001/PP_5260_355R_001_banner-desktop_6850_0.mp4" label="HomeBannerDesktop5260355R" res="5260355">
            </video>
            <video  class="header-search-1"  width="100%" videotitle="Ref. 5260/355R-001 / Home Banner Desktop" preload="" data-title="Ref. 5260/355R-001 / Home Banner Desktop" tabindex="-1" playsinline="" muted="" loop="" autoplay="">
                <source type="video/mp4" src="https://static.patek.com/videos/articles/5260_355R_001/PP_5260_355R_001_banner-mobile_6849_0.mp4" label="HomeBannerDesktop5260355R" res="5260355">
            </video>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->
<!-- PRODUCT AREA START -->
<div class="ltn__product-area ltn__product-gutter  pt-30 pb-40---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">Sản Phẩm Nổi Bật</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">10%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Pink Flower Tree</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                            <del>$21.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area mt-40">
    <div class="container">
        <div class="row">
            <div class="ltn__banner" style="max-width:33.33%">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img" style="border-radius: 10px">
                        <a href="shop.html"><img src="{{ asset('app/img/banner/banner-danh-muc-dong-ho-nam.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="ltn__banner" style="max-width:33.33%">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img" style="border-radius: 10px">
                        <a href="shop.html"><img src="{{ asset('app/img/banner/banner-danh-muc-dong-ho-nu.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="ltn__banner" style="max-width:33.33%">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img" style="border-radius: 10px">
                        <a href="shop.html"><img src="{{ asset('app/img/banner/banner-danh-muc-dong-ho-doi.jpg') }}" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area">
    <div class="container" style="margin:0; padding:0; width:100%; background:#DCCCBD; max-width:none">
        <div class="col-lg-12 chinh-sach" style="margin:0; padding:0;display:flex;justify-content:center">
            <div class="chinh-sach-2" style="max-width:25%;width:fit-content; padding:15px">
                <div class="feature-icon" style="max-width:20%;margin:auto">
                    <img src="{{asset('app/img/icon/distribution.png') }}" alt="#">
                </div>
                <div class="feature-info" style="margin-top:10px">
                    <h4 style='margin:0;font-weight:bold; text-align:center'>Đổi trả<br> lên đến 30 ngày</h4>
                </div>
            </div>
            <div class="chinh-sach-2" style="max-width:25%; padding:15px">
                <div class="feature-icon" style="max-width:20%;margin:auto">
                    <img src="{{asset('app/img/icon/guarantee.png') }}" alt="#">
                </div>
                <div class="feature-info" style="margin-top:10px">
                    <h4 style='margin:0;font-weight:bold; text-align:center'>Bảo hành<br> 2 năm</h4>
                </div>
            </div>
            <div class="chinh-sach-2" style="max-width:25%; padding:15px">
                <div class="feature-icon" style="max-width:20%;margin:auto">
                    <img src="{{asset('app/img/icon/goods.png') }}" alt="#">
                </div>
                <div class="feature-info" style="margin-top:10px">
                    <h4 style='margin:0;font-weight:bold; text-align:center'>Được kiểm tra <br> trước khi nhận</h4>
                </div>
            </div>
            <div class="chinh-sach-2" style="max-width:25%; padding:15px">
                <div class="feature-icon" style="max-width:20%;margin:auto">
                    <img src="{{asset('app/img/icon/free-delivery.png') }}" alt="#">
                </div>
                <div class="feature-info" style="margin-top:10px">
                    <h4 style='margin:0;font-weight:bold; text-align:center'>Free Ship<br> toàn quốc</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    var errorMessage = document.getElementById('error-message');

    // Hiển thị thông báo nếu tồn tại
    if (errorMessage) {
        errorMessage.style.display = 'block';

        // Tự động tắt sau 5 giây
        setTimeout(function() {
            errorMessage.style.display = 'none';
            errorMessage.style.opacity = 0;
        }, 5000);
    }
});

</script>
@endsection