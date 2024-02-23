@extends('layouts.app')

@section('content')
@if(session('error'))
    <div id="error-message" class="error-message">
        {{ session('error') }}
    </div>
@endif

<section class="slider home">
    <div class="swiper-container mainslider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slider-item">
                    <div class="flat-slider">
                        <div class="img-slider">
                            <img class="img-item md" src="{{ asset('assets/images/sliderv1/slider-1.jpg') }}" alt="">
                            <img class="img-item sp" src="{{ asset('assets/images/sliderv1/slider-1-sp.jpg') }}" alt="">
                        </div>
                        <div class="container">
                            <div class="content">
                                <div class="heading one">
                                    <h1>Chân Gà Tê Cay Ớt Đỏ</h1>
                                    <h3>Chân gà tê cay - đắm say thưởng thức</h3>
                                </div>
                                <div class="flat-bt-slider">
                                    <div class="sl-button buttons">
                                        <a class="blob-btn btn-1 btn-style" href="/san-pham">
                                            Xem Thêm
                                            <span class="blob-btn__inner">
                                                <span class="blob-btn__blobs">
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="slider-item">
                    <div class="flat-slider">
                        <div class="img-slider">
                            <img class="img-item md" src="{{ asset('assets/images/sliderv1/slider-2.jpg') }}" alt="">
                            <img class="img-item sp" src="{{ asset('assets/images/sliderv1/slider-2-sp.jpg') }}" alt="">
                        </div>
                        <div class="container">
                            <div class="content">
                                <div class="heading">
                                    <h1>Chân Gà Đôi Tê Cay Ớt Đỏ</h1>
                                    <h3>Chân gà tê cay - đắm say thưởng thức</h3>
                                </div>
                                <div class="flat-bt-slider">
                                    <div class="sl-button buttons">
                                        <a class="blob-btn btn-1 btn-style" href="/san-pham">
                                            Xem Thêm
                                            <span class="blob-btn__inner">
                                                <span class="blob-btn__blobs">
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="slider-item">
                    <div class="flat-slider">
                        <div class="img-slider">
                            <img class="img-item md" src="{{ asset('assets/images/sliderv1/slider-3.jpg')}}" alt="">
                            <img class="img-item sp" src="{{ asset('assets/images/sliderv1/slider-3-sp.jpg') }}" alt="">
                        </div>
                        <div class="container">
                            <div class="content">
                                <div class="heading">
                                    <h1>Chân Gà Rút Xương Ớt Đỏ</h1>
                                    <h3>Chân gà tê cay - đắm say thưởng thức</h3>
                                </div>
                                <div class="flat-bt-slider">
                                    <div class="sl-button buttons">
                                        <a class="blob-btn btn-1 btn-style" href="/san-pham">
                                            Xem Thêm
                                            <span class="blob-btn__inner">
                                                <span class="blob-btn__blobs">
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-pagination2"> </div>
</section>

<section class="tf-section flat-icon">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="box-icon" style='height:100%'>
                    <div class="icon">
                        <img class="img" src="{{ asset('assets/images/icon/icon-1.png') }}" alt="images">
                    </div>
                    <div class="content">
                        <h3 class="link-style-6">Đảm Bảo An Toàn</h3>
                        <p> Sản phẩm đã được cấp giấy phép an toàn vệ sinh thực phẩm, đóng gói cẩn thận, luôn đảm bảo vệ sinh an toàn thực phẩm</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box-icon" style='height:100%'>
                    <div class="icon style-2">
                        <img class="img" src="{{ asset('assets/images/icon/icon-2.png') }}" alt="images">
                    </div>
                    <div class="content">
                        <h3 class="link-style-1">Hương Vị Đậm Đà </h3>
                        <p> Chân gà được tẩm ướp và chế biến với các gia vị như thảo quả, thì là, ớt, thảo mộc... mang đến hương vị đậm đà </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box-icon" style='height:100%'>
                    <div class="icon">
                        <img class="img" src="{{ asset('assets/images/icon/icon-3.png') }}" alt="images">
                    </div>
                    <div class="content">
                        <h3 class="link-style-6"><a href="#">Chất Lượng Hàng Đầu</a> </h3>
                        <p> Các nguyên vật liệu luôn được lựa chọn gắt gao, đảm bảo chất lượng trên từng sản phẩm đến tay người tiêu dùng </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="box-icon" style='height:100%'>
                    <div class="icon style-2">
                        <img class="img" src="{{ asset('assets/images/icon/icon-home2.png') }}" alt="images">
                    </div>
                    <div class="content">
                        <h3 class="link-style-1"><a href="#">Người Dùng Tin Tưởng</a> </h3>
                        <p> Sản phẩm được rất nhiều người dùng lựa chọn và tin dùng, là món ăn vặt ưa chuộng của nhiều lứa tuổi, đặt biệt là giới trẻ hiện nay</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section2 flat-arrivals">
    <div class="mark-img style-04"><img src="assets/images/mark/mark-1.png" alt="images"></div>
    <div class="mark-img style-05"><img src="assets/images/mark/mark-1.png" alt="images"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="heading-section center">
                    <h5>Sản Phẩm Mới</h5>
                    <h2 class="" style="color:#c80000">Chân Gà Tê Cay</h2>
                </div>
            </div>
            @foreach ($data as $item)
                <div class="col-lg-6 col-md-6 col-sm-12" style='margin-bottom:30px'>
                    <div class="box-arrivals flex hover-img2">
                        <div class="images img-style2">
                            <a href="/san-pham/{{ $item['link'] }}/" style="padding: 5px 30px;">
                                <img src="{{ asset('storage/images-product/' . basename($item['images_main'])) }}" alt="images">
                            </a>
                        </div>
                        <div class="content">
                            <div class="tag-text">{{ explode(',' , $item['tags'])[0] !== '' ? explode(',' , $item['tags'])[0] : 'HOT' }}</div>
                            <h3 class="link-style-1"><a href="/san-pham/{{ $item['link'] }}/">{{ $item['name'] }}</a> </h3>
                            <p>{{ $item['subtitle'] }}</p>
                            <div class="star">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<polygon points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431 			255.898,401.21 416.035,502.431 369.263,318.842 		"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<polygon points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431 			255.898,401.21 416.035,502.431 369.263,318.842 		"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<polygon points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431 			255.898,401.21 416.035,502.431 369.263,318.842 		"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<polygon points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431 			255.898,401.21 416.035,502.431 369.263,318.842 		"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g>	<g>		<polygon points="512,197.816 325.961,185.585 255.898,9.569 185.835,185.585 0,197.816 142.534,318.842 95.762,502.431 			255.898,401.21 416.035,502.431 369.263,318.842 		"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="buttons center">
                    <a class="blob-btn btn-style" href="/san-pham/">
                        Xem Thêm
                        <span class="blob-btn__inner">
                        <span class="blob-btn__blobs">
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                            <span class="blob-btn__blob"></span>
                        </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section2 flat-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5">
                <div class="wrap-img">
                    <img class="img-1" src="assets/images/img-box/about-1.jpg" alt="images">
                    <img class="img-2" src="assets/images/img-box/about-2.jpg" alt="images">
                    <div class="box-author">
                        <div class="title title-30 fw-6">"Chúng tôi luôn đặt an toàn vệ sinh thực phẩm lên hàng đầu"</div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7">
                <div class="wrap-about">
                    <div class="heading-section">
                        <h5>Giới Thiệu</h5>
                        <h2>Chân gà tê cay - đắm say thưởng thức</h2>
                        <p>Chúng tôi cam kết mang lại những sản phẩm chất lượng nhất từ những nguồn nguyên liệu tốt nhất. Với quy trình sản xuất hiện đại và tiêu chuẩn chất lượng nghiêm ngặt, chúng tôi đảm bảo mỗi chiếc chân gà đóng gói không chỉ thơm ngon và bổ dưỡng mà còn đáp ứng các tiêu chuẩn an toàn thực phẩm cao nhất.</p>
                    </div>
                    <div class="box-icon flex">
                        <div class="icon">
                             <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 64 64" width="52" height="52"><path d="M32,50a17.94,17.94,0,0,0,13.17-5.77l.12-.09,0,0A18,18,0,1,0,32,50ZM16.09,33.67l9.17,10,1.48-1.36L17.21,31.93l1.62.35c5.11,1.11,9.67,5.42,10.83,10.23L31,48A16,16,0,0,1,16.09,33.67ZM33,48l1.31-5.44c1.16-4.81,5.72-9.12,10.83-10.23l1.62-.35L37.26,42.32l1.48,1.36,9.17-10A16,16,0,0,1,33,48ZM32,16A16,16,0,0,1,47.81,29.67l-3.06.65c-5.83,1.27-11,6.2-12.35,11.73L32,43.7l-.4-1.65c-1.33-5.53-6.52-10.46-12.35-11.73l-3.06-.65A16,16,0,0,1,32,16Z"/><path d="M4,26a1,1,0,0,0-1,1V37a1,1,0,0,0,1,1H7.73a24.66,24.66,0,0,0,2.87,6.92L8,47.56A1,1,0,0,0,8,49L15,56a1,1,0,0,0,1.41,0l2.64-2.64A24.66,24.66,0,0,0,26,56.27V60a1,1,0,0,0,1,1H37a1,1,0,0,0,1-1V56.27a24.66,24.66,0,0,0,6.92-2.87L47.56,56A1,1,0,0,0,49,56L56,49a1,1,0,0,0,0-1.41L53.4,44.92A24.66,24.66,0,0,0,56.27,38H60a1,1,0,0,0,1-1V27a1,1,0,0,0-1-1H56.27a24.66,24.66,0,0,0-2.87-6.92L56,16.44A1,1,0,0,0,56,15L49,8a1,1,0,0,0-1.41,0L44.92,10.6A24.66,24.66,0,0,0,38,7.73V4a1,1,0,0,0-1-1H27a1,1,0,0,0-1,1V7.73a24.66,24.66,0,0,0-6.92,2.87L16.44,8A1,1,0,0,0,15,8L8,15a1,1,0,0,0,0,1.41l2.64,2.64A24.66,24.66,0,0,0,7.73,26Zm5.5,1.21a22.76,22.76,0,0,1,3.21-7.72,1,1,0,0,0-.13-1.26l-2.5-2.49,5.66-5.66,2.49,2.5a1,1,0,0,0,1.26.13A22.76,22.76,0,0,1,27.21,9.5a1,1,0,0,0,.79-1V5h8V8.53a1,1,0,0,0,.79,1,22.76,22.76,0,0,1,7.72,3.21,1,1,0,0,0,1.26-.13l2.49-2.5,5.66,5.66-2.5,2.49a1,1,0,0,0-.13,1.26,22.76,22.76,0,0,1,3.21,7.72,1,1,0,0,0,1,.79H59v8H55.47a1,1,0,0,0-1,.79,22.76,22.76,0,0,1-3.21,7.72,1,1,0,0,0,.13,1.26l2.5,2.49-5.66,5.66-2.49-2.5a1,1,0,0,0-1.26-.13,22.76,22.76,0,0,1-7.72,3.21,1,1,0,0,0-.79,1V59H28V55.47a1,1,0,0,0-.79-1,22.76,22.76,0,0,1-7.72-3.21,1,1,0,0,0-1.26.13l-2.49,2.5-5.66-5.66,2.5-2.49a1,1,0,0,0,.13-1.26A22.76,22.76,0,0,1,9.5,36.79a1,1,0,0,0-1-.79H5V28H8.53A1,1,0,0,0,9.5,27.21Z"/><path d="M22.59,30.91l9,4a1,1,0,0,0,.82,0l9-4A1,1,0,0,0,42,30V22a1,1,0,0,0-.59-.91l-9-4a1,1,0,0,0-.82,0l-9,4A1,1,0,0,0,22,22v8A1,1,0,0,0,22.59,30.91ZM24,23.54l7,3.11v5.81l-7-3.11Zm9,8.92V26.65l7-3.11v5.81ZM32,19.09,38.54,22,32,24.91,25.46,22Z"/></svg>
                        </div>
                        <div class="content">
                            <h3 class="link-style-1"><a href="/gioi-thieu">Chất lượng Tinh Tế</a> </h3>
                            <p> Với nguồn nguyên liệu chất lượng, mỗi sản phẩm chúng tôi sẽ mang đến trải nghiệm ẩm thực tuyệt vời.</p>
                        </div>
                    </div>
                    <div class="box-icon flex">
                        <div class="icon">
                              <svg enable-background="new 0 0 512.748 512.748" height="52" viewBox="0 0 512.748 512.748" width="52" xmlns="http://www.w3.org/2000/svg"><g><path d="m512.748 242.627c0-66.288-25.813-128.608-72.684-175.479-2.93-2.928-7.678-2.928-10.607 0l-261.773 261.772c-19.465-10.278-37.254-7.297-57.66-3.724-9.261-33.415-32.482-46.356-33.706-47.015-3.647-1.965-8.195-.599-10.159 3.048s-.6 8.195 3.048 10.159c.217.116 15.958 8.904 24.389 31.793-24.245-6.016-50.08 2.298-67.37 20.014-23.751-86.614 4.809-216.558 115.392-216.404 49.194 0 92.625 32.375 108.846 78.346 1.376 3.906 5.662 5.958 9.566 4.58 3.907-1.377 5.957-5.66 4.58-9.566-9.497-26.966-26.814-50.253-50.612-66.266 2.131-11.127 6.682-21.749 13.303-30.961l9.888-13.759c9.496-13.216-5.177-31.574-20.287-24.686l-23.551 10.75c-.516-20.133 4.601-35.603 16.807-51.622 3.711-5.165 3.492-11.937-.546-16.85-4.038-4.915-10.64-6.439-16.426-3.802-20.973 9.573-41.202 18.072-52.447 39.91-11.16-21.673-31.582-30.387-52.447-39.91-5.785-2.642-12.388-1.112-16.425 3.801-4.038 4.914-4.258 11.685-.547 16.851 12.145 16.034 17.37 31.451 16.808 51.622l-23.553-10.75c-14.803-6.755-29.976 11.199-20.286 24.686l9.888 13.759c6.711 9.338 11.291 20.117 13.385 31.408-68.751 46.765-76.181 150.846-52.604 223.5-18.891 31.227-19.751 78.473-3.359 110.802 1.874 3.694 6.387 5.171 10.081 3.298s5.171-6.387 3.298-10.081c-18.119-35.742-12.697-96.384 24.737-118.171 16.385-9.536 30.748-7.351 48.046-3.89.656 4.47 1.041 9.28 1.041 14.489 0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5c0-5.088-.309-9.873-.864-14.375 17.673-3.25 32.555-6.449 49.429 3.187 47.472 27.108 47.557 119.345-.173 145.972-13.124 7.321-29.915 9.296-44.148 4.021-8.105-2.603-16.673-2.603-24.778 0-15.865 5.101-32.447 2.73-46.686-6.673-3.456-2.284-8.109-1.332-10.391 2.124-2.283 3.457-1.332 8.109 2.125 10.392 17.847 11.788 39.55 14.864 59.542 8.438 5.101-1.641 10.495-1.641 15.598 0 18.538 6.277 38.947 4.338 56.046-5.202 5.858-3.268 11.243-7.347 16.05-12.088 17.423 13.577 38.845 21 61.112 21 25.209 0 48.254-9.426 65.809-24.933 48.443-9.479 92.524-32.967 127.591-68.033 46.871-46.873 72.684-109.192 72.684-175.482zm-446.39-148.457-9.888-13.759c-.547-1.725.079-2.487 1.877-2.285 11.218 5.12 22.859 9.745 33.729 15.586 2.325 1.251 5.135 1.187 7.399-.168 2.266-1.354 3.652-3.799 3.652-6.438 0-25.734-.7-46.943-17.056-68.675 24.363 11.121 47.167 24.493 47.167 55.311 0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5c0-30.658 22.807-44.19 47.166-55.31-16.354 21.732-17.054 42.94-17.054 68.674 0 2.64 1.388 5.084 3.653 6.438 2.266 1.353 5.075 1.417 7.4.166 10.868-5.845 22.505-10.464 33.725-15.585 1.798-.202 2.424.56 1.878 2.285l-9.886 13.76c-6.855 9.54-11.844 20.35-14.702 31.719-18.142-9.25-38.165-14.098-58.799-14.098-20.97-.168-41.837 4.842-60.47 14.456-2.843-11.501-7.861-22.434-14.791-32.077zm128.812 384.388c24.648-35.704 23.508-96.516-4.261-130.505 15.418-13.592 34.958-21.022 55.756-21.022 46.604 0 84.521 37.916 84.521 84.521 0 46.604-37.916 84.521-84.521 84.521-18.738 0-36.773-6.186-51.495-17.515zm134.355-11.946c6.079-9.118 10.698-19.289 13.512-30.18 26.007-10.506 49.331-25.956 69.364-45.989 29.294-29.295 49.057-66.163 57.15-106.618.813-4.062-1.821-8.014-5.883-8.826-4.064-.815-8.013 1.821-8.826 5.883-7.511 37.543-25.854 71.761-53.049 98.955-16.387 16.387-35.144 29.464-55.876 39.014 4.137-56.807-42.264-106.82-99.252-106.82-24.304 0-47.16 8.599-65.249 24.372l225.581-225.582c33.896 36.547 52.176 83.83 51.619 133.97-.046 4.142 3.275 7.537 7.417 7.583 4.136.04 7.537-3.275 7.583-7.417.6-54.209-19.246-105.309-56.016-144.739l17.078-17.078c40.731 43.37 63.07 99.71 63.07 159.487 0 62.282-24.253 120.835-68.291 164.872-28.069 28.069-62.281 48.246-99.932 59.113z"/><path d="m359.018 326.454c-2.93-2.928-7.678-2.928-10.607 0-2.929 2.93-2.929 7.678 0 10.607l11.326 11.326c1.465 1.464 3.385 2.196 5.304 2.196s3.839-.732 5.304-2.196c2.929-2.93 2.929-7.678 0-10.607z"/><path d="m399.542 289.907-14.599-6.505c-3.784-1.688-8.217.016-9.903 3.798-1.686 3.784.015 8.218 3.798 9.903l14.599 6.505c.992.442 2.028.651 3.049.651 2.871 0 5.61-1.658 6.854-4.449 1.685-3.784-.015-8.217-3.798-9.903z"/><path d="m409.138 234.397-15.876-.796c-.129-.007-.256-.01-.382-.01-3.97 0-7.284 3.115-7.484 7.124-.208 4.138 2.978 7.659 7.114 7.866l15.876.796c.129.007.256.01.382.01 3.97 0 7.284-3.115 7.484-7.124.208-4.137-2.978-7.659-7.114-7.866z"/><path d="m385.197 198.497c.79 0 1.595-.126 2.385-.391l14.983-5.023c3.928-1.317 6.044-5.568 4.728-9.495-1.316-3.928-5.571-6.043-9.495-4.728l-14.983 5.023c-3.928 1.317-6.044 5.568-4.728 9.495 1.051 3.137 3.974 5.119 7.11 5.119z"/><path d="m140.739 218.411c1.919 0 3.839-.732 5.303-2.196l16.525-16.524c2.93-2.929 2.93-7.678.001-10.606s-7.678-2.93-10.606-.001l-11.223 11.222-11.223-11.222c-2.928-2.928-7.677-2.929-10.606.001-2.929 2.929-2.929 7.678.001 10.606l16.525 16.524c1.464 1.463 3.384 2.196 5.303 2.196z"/><path d="m208.382 218.411c1.919 0 3.839-.732 5.303-2.196l16.525-16.524c2.93-2.929 2.93-7.678.001-10.606-2.93-2.929-7.679-2.93-10.606-.001l-11.223 11.222-11.223-11.222c-2.928-2.928-7.677-2.929-10.606.001-2.929 2.929-2.929 7.678.001 10.606l16.525 16.524c1.464 1.463 3.384 2.196 5.303 2.196z"/><path d="m117.811 236.446-11.222 11.223-11.221-11.222c-2.93-2.929-7.679-2.93-10.606-.001-2.93 2.929-2.93 7.678-.001 10.606l16.524 16.525c1.407 1.407 3.314 2.197 5.304 2.197s3.896-.79 5.304-2.196l16.525-16.525c2.929-2.93 2.929-7.678 0-10.607-2.929-2.928-7.677-2.928-10.607 0z"/><path d="m168.929 263.578c1.407 1.407 3.314 2.197 5.304 2.197s3.896-.79 5.304-2.196l16.525-16.525c2.929-2.93 2.929-7.678 0-10.607-2.93-2.928-7.678-2.928-10.607 0l-11.222 11.223-11.221-11.222c-2.929-2.929-7.678-2.93-10.606-.001-2.93 2.929-2.93 7.678-.001 10.606z"/><circle cx="263.447" cy="358.791" r="7.5"/></g></svg>
                        </div>
                        <div class="content">
                            <h3 class="link-style-1"><a href="/gioi-thieu">An Toàn và Tin Cậy</a> </h3>
                            <p> Từ nguồn cung cấp đến quy trình đóng gói, chúng tôi cam kết cung cấp sản phẩm đạt chuẩn và tin cậy.</p>
                        </div>
                    </div>

                    <div class="buttons">
                        <a class="blob-btn btn-style" href="/gioi-thieu">
                            Xem Thêm
                            <span class="blob-btn__inner">
                            <span class="blob-btn__blobs">
                                <span class="blob-btn__blob"></span>
                                <span class="blob-btn__blob"></span>
                                <span class="blob-btn__blob"></span>
                                <span class="blob-btn__blob"></span>
                            </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section2 flat-testimonials center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="heading-section">
                    <h5 class="">Phản Hồi Của Người Dùng</h5>
                    <h2 class="text-color-1">Đánh Giá</h2>
                </div>
                <div class="swiper-container carousel-2" data-aos="fade-up" data-aos-duration="2000">
                    <div class="swiper-wrapper slider-style">
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <img class="img-testi" src="assets/images/icon/icon-testi.png" alt="images">
                                <h5 class="text-color-4">Đã thử và không thể quên! Chân gà đóng gói của bạn không chỉ ngon mà còn là sự hòa quyện của nghệ thuật ẩm thực.</h5>
                                <div class="author">
                                    <div class="images-author">
                                        <img src="assets/images/img-box/testi-1.jpg" alt="images">
                                    </div>
                                    <h4 class="text-color-1 fw-6">Tuyết Trần</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <img class="img-testi" src="assets/images/icon/icon-testi.png" alt="images">
                                <h5 class="text-color-4">Chân gà đóng gói của bạn đang làm nên điều khác biệt trong bữa ăn của mình. Tôi thích sự sáng tạo và chất lượng!</h5>
                                <div class="author">
                                    <div class="images-author">
                                        <img src="assets/images/img-box/testi-2.jpg" alt="images">
                                    </div>
                                    <h4 class="text-color-1 fw-6">Quang Khang</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <img class="img-testi" src="assets/images/icon/icon-testi.png" alt="images">
                                <h5 class="text-color-4">Không thể tin nổi hương vị tuyệt vời này đến từ chân gà đóng gói! Thực sự là một trải nghiệm ẩm thực đặc sắc.</h5>
                                <div class="author">
                                    <div class="images-author">
                                        <img src="assets/images/img-box/testi-3.jpg" alt="images">
                                    </div>
                                    <h4 class="text-color-1 fw-6">Khánh Huyền</h4>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-testi">
                                <img class="img-testi" src="assets/images/icon/icon-testi.png" alt="images">
                                <h5 class="text-color-4">Quả là một trải nghiệm ẩm thực đặc biệt! Chân gà đóng gói của bạn thơm ngon và thực sự độc đáo.</h5>
                                <div class="author">
                                    <div class="images-author">
                                        <img src="assets/images/img-box/testi-4.jpg" alt="images">
                                    </div>
                                    <h4 class="text-color-1 fw-6">Kiều My</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"> </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tf-section2 flat-blog home">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="heading-section center">
                    <h5 class="">Bài Viết Mới Nhất</h5>
                    <h2 class="">Tin Tức</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="swiper-container carousel-4">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-box tf-img hover-img hv-one">
                                <a class="media img-style" href="https://laodong.vn/dinh-duong-am-thuc/nhung-loi-ich-khong-ngo-cua-viec-an-chan-ga-936741.ldo">
                                    <img class="img-item" src="assets/images/blog/blog-1.jpg" alt="">
                                    <span class="hover-one"></span>
                                </a>
                                <div class="content">
                                    <div class="days absolute">
                                        <div class="number">12</div>
                                        <div class="titles">Jan</div>
                                    </div>
                                    <h4><a href="https://laodong.vn/dinh-duong-am-thuc/nhung-loi-ich-khong-ngo-cua-viec-an-chan-ga-936741.ldo">Chia Sẻ</a></h4>
                                    <h3><a href="https://laodong.vn/dinh-duong-am-thuc/nhung-loi-ich-khong-ngo-cua-viec-an-chan-ga-936741.ldo">Những lợi ích không ngờ của việc ăn chân gà</a></h3>
                                    <p>Chân gà sả tắc, rút xương…là những món ăn rất ngon và tốt cho sức khỏe.</p>
                                    <div class="meta flex-one">
                                        <a href="https://laodong.vn/dinh-duong-am-thuc/nhung-loi-ich-khong-ngo-cua-viec-an-chan-ga-936741.ldo" class="btn-button flex fw-5">Xem Thêm</a>
                                        <a href="https://laodong.vn/dinh-duong-am-thuc/nhung-loi-ich-khong-ngo-cua-viec-an-chan-ga-936741.ldo" class="comment flex">107 Bình Luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box tf-img hover-img hv-one">
                                <a class="media img-style" href="https://www.nhathuocankhang.com/ban-tin-suc-khoe/an-chan-ga-co-tot-khong-8-tac-dung-cua-chan-ga-1547011">
                                    <img class="img-item" src="assets/images/blog/blog-2.jpg" alt="">
                                    <span class="hover-one"></span>
                                </a>
                                <div class="content">
                                    <div class="days absolute">
                                        <div class="number">24</div>
                                        <div class="titles">May</div>
                                    </div>
                                    <h4><a href="https://www.nhathuocankhang.com/ban-tin-suc-khoe/an-chan-ga-co-tot-khong-8-tac-dung-cua-chan-ga-1547011">Chia Sẻ</a></h4>
                                    <h3><a href="https://www.nhathuocankhang.com/ban-tin-suc-khoe/an-chan-ga-co-tot-khong-8-tac-dung-cua-chan-ga-1547011">8 tác dụng của chân gà tốt cho sức khỏe</a></h3>
                                    <p>Chân gà là món ăn yêu thích của nhiều người bởi hương vị ngon</p>
                                    <div class="meta flex-one">
                                        <a href="https://www.nhathuocankhang.com/ban-tin-suc-khoe/an-chan-ga-co-tot-khong-8-tac-dung-cua-chan-ga-1547011" class="btn-button flex fw-5">Xem Thêm</a>
                                        <a href="https://www.nhathuocankhang.com/ban-tin-suc-khoe/an-chan-ga-co-tot-khong-8-tac-dung-cua-chan-ga-1547011" class="comment flex">94 Bình Luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-box tf-img hover-img hv-one">
                                <a class="media img-style" href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-lam-chan-ga-cay-tu-xuyen-cay-ngon-chuan-vi-nguoi-hoa-1425349">
                                    <img class="img-item" src="assets/images/blog/blog-3.jpg" alt="">
                                    <span class="hover-one"></span>
                                </a>
                                <div class="content">
                                    <div class="days absolute">
                                        <div class="number">10</div>
                                        <div class="titles">June</div>
                                    </div>
                                    <h4><a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-lam-chan-ga-cay-tu-xuyen-cay-ngon-chuan-vi-nguoi-hoa-1425349">Bí Quyết</a></h4>
                                    <h3><a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-lam-chan-ga-cay-tu-xuyen-cay-ngon-chuan-vi-nguoi-hoa-1425349">Cách làm chân gà cay Tứ Xuyên cay ngon
                                    </a></h3>
                                    <p>Chân gà cay Tứ Xuyên cay giòn, thấm vị, ăn một lần là ghiền.</p>
                                    <div class="meta flex-one">
                                        <a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-lam-chan-ga-cay-tu-xuyen-cay-ngon-chuan-vi-nguoi-hoa-1425349" class="btn-button flex fw-5">Xem Thêm</a>
                                        <a href="https://www.bachhoaxanh.com/kinh-nghiem-hay/cach-lam-chan-ga-cay-tu-xuyen-cay-ngon-chuan-vi-nguoi-hoa-1425349" class="comment flex">54 Bình Luận</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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