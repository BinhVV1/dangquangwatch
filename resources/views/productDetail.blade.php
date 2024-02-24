@extends('layouts.app')

@section('content')
    <!-- title page -->
    <section class="flat-title-page inner"><div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading center">
                        <h2 class="heading">{{ $product[0]['name'] }}</h2>
                        <div class="title-inner link-style-3">
                            <h5 class=""><a class="home fw-4" href="/">Trang Chủ</a><a class="home fw-4" href="/san-pham/">Sản Phẩm</a><span>{{ $product[0]['name'] }}</span></h5>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>                    
    </section>

    <section class="tf-section flat-shop-details" id='flat-shop-details'>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="image-cart">
                        <div class="flat-tabs card-media media" style="display: flex; flex-direction: column; align-items:center;">                                 
                            <div class="content-tab content-img">
                                <div class="content-inner tab-content" style="width: 100%; height: 100%; display: flex; padding:15px 0; align-items: center; justify-content: center;">
                                    <img src="{{ asset('storage/app/public/images-product/' . basename($product[0]['images_main'])) }}" alt="">
                                </div>
                                @if ($product[0]['images'])
                                    @foreach(explode(',', $product[0]['images']) as $value)
                                        <div class="content-inner tab-content" style="width: 100%; height: 100%; display: flex; padding:15px 0; align-items: center; justify-content: center;">
                                            <img src="{{ asset('storage/app/public/images-product/' . basename($value)) }}" alt="">
                                        </div>
                                    @endforeach   
                                @endif                         
                            </div>
                            <ul id='slide_product' class="menu-tab menu-img" style="width:100%; overflow: auto;">
                                <li class="item-title">
                                    <img src="{{ asset('storage/app/public/images-product/' . basename($product[0]['images_main'])) }}" alt="">
                                </li>
                                @if ($product[0]['images'])
                                    @foreach(explode(',', $product[0]['images']) as $value)
                                        
                                        <li class="item-title">
                                            <img src="{{ asset('storage/app/public/images-product/' . basename($value)) }}" alt="">
                                        </li>
                                    @endforeach
                                @endif 
                            </ul>
                        </div>   
                    </div>
                                        
                </div>
                            
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="wrap-cart">
                        <div class="titles title-36 fw-6" style="color:#c80000;">{{ $product[0]['name'] }}</div>
                        <div class="box-star flex">
                            <div class="star">
                                <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                <i class="fa fa-star-half-o" style="font-size:15px;color:#ff9c00"></i>
                            </div>
                            <h6 class="text-color-4">( {{ rand(8, 39) }} Đánh Giá )</h6>
                        </div>
                        <p class="text-1">{{ $product[0]['subtitle'] }} </p>
                        
                        <div class="icon-box flex">
                            <div class="icon icon-1 link-style-1" onclick="toggleHeartColor()"><i id="heart-icon" class="far fa-heart"></i>Thêm vào danh sách yêu thích</div>
                        </div>
                        <div class="title-box flex-three"><h5 class="fw-6">Phân Loại :</h5><h6 class="fw-4 text-color-4" style="color:#c80000 !important;">{{ $product[0]['category'] }}</h6></div>
                        <div class="title-box style flex-three"><h5 class="fw-6">Thẻ :</h5><h6 class="fw-4 text-color-4" style="color:#c80000 !important;">{{ $product[0]['tags'] }}</h6></div>
                        <div class="icon-social text-color-1 flex">
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=61555131531304" class="style-1"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="style-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="style-3"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#" class="style-4"><i class="fab fa-linkedin-in"></i></a>                            
                            
                        </div>
                    </div>               
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="post"  id='title_sub'>
                        <div class="title-one title-36 fw-6">Mô tả sản phẩm</div>
                        <hr>
                        <p class="text-2">
                            <p style="margin-bottom:20px;">{!! $product[0]['description'] !!}</p>
                        </p>
                    </div>                        
                </div>
            </div>
        </div>
    </section>

    <section class="flat-vegetables shop">
        <div class="container">
            <div class="row">                  
                <div class="col-lg-12 col-md-12">
                    <div class="title-two title-36 fw-6">Sản Phẩm Khác</div>
                    <div class="wrap-vegetables">
                        <div class="swiper-container carousel-shop">
                            <div class="swiper-wrapper">  
                                @foreach($data as $value)
                                    <div class="swiper-slide">
                                        <div class="box box-hv">
                                            <a href="/san-pham/{{ $value['link'] }}" >
                                                <div class="images hover-style">
                                                    <div style="width: 100%; height: 100%; display: flex;  align-items: center; justify-content: center;">
                                                        <img style="max-width: 100%; max-height: 100%;" src="{{ asset('storage/app/public/images-product/' . basename($value['images_main'])) }}" alt="images">
                                                    </div>                                               
                                                    <div class="tag-text"> NEW </div>                                             
                                                </div>
                                                <div class="content">
                                                    <div class="star">
                                                        <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                                        <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                                        <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                                        <span class="fa fa-star checked" style="font-size:15px;color:#ff9c00"></span>
                                                        <i class="fa fa-star-half-o" style="font-size:15px;color:#ff9c00"></i>      
                                                    </div>
                                                    <h3 class="link-style-6">
                                                        <a style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;" href="/san-pham/{{ $value['link'] }}">{{ $value['name'] }}</a>
                                                    </h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleHeartColor() {
            var heartIcon = document.getElementById('heart-icon');
            
            if (heartIcon.classList.contains('heart-filled')) {
                heartIcon.classList.remove('heart-filled');
            } else {
                heartIcon.classList.add('heart-filled');
            }
        }
    </script>
@endsection