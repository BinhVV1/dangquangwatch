@extends('layouts.app')

@section('content')
 <!-- title page -->
 <section class="flat-title-page inner"><div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-title-heading center">
                    <h2 class="heading">Sản phẩm</h2>
                    <div class="title-inner link-style-3">
                        <h5 class=""><a class="home fw-4" href="/">Trang Chủ</a><span>Sản Phẩm</span></h5>
                    </div>
                </div>                        
            </div>
        </div>
    </div>                    
</section>

<section class="flat-vegetables page" style='padding-top:30px'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="wrap-vegetables flex">
                    @foreach ($data as $value)    
                        <div class="box box-hv">
                            <a href="/san-pham/{{ $value['link'] }}" >
                                <div class="images hover-style">
                                    <div style="width: 100%; height: 100%; display: flex;  align-items: center; justify-content: center;">
                                        <img style="max-width: 100%; max-height: 100%;" src="{{ asset('storage/images-product/' . basename($value['images_main'])) }}" alt="images">
                                    </div> 
                                    
                                    <div class="tag-text style2"> 
                                        {{ explode(',', $value['tags'])[0] ?? 'NEW' }}
                                    </div>                                             
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
                                        <a style="" href="/san-pham/{{ $value['link'] }}">{{ $value['name'] }}</a>
                                    </h3>                                           
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>                       
            </div> 
            <div class="col-lg-12">
                <div class="themesflat-pagination clearfix center">
                    <ul>
                        <li><a href="#" class="page-numbers style"><i class="far fa-angle-left"></i></a></li>
                        <li><a href="#" class="page-numbers current">1</a></li>
                        <li><a href="#" class="page-numbers style"><i class="far fa-angle-right"></i></a></li>
                    </ul>
                </div> 
            </div> 
        </div>
    </div>
</section>
<section class="tf-section2 flat-blog home" style="background: #f3f6f0">
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
                            <div class="blog-box tf-img hover-img hv-one" style="background: white">
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
                            <div class="blog-box tf-img hover-img hv-one" style="background: white">
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
                            <div class="blog-box tf-img hover-img hv-one" style="background: white">
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
@endsection
