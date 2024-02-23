@extends('layouts.app')

@section('content')
    <!-- title page -->
    <section class="flat-title-page inner"><div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-title-heading center">
                        <h2 class="heading">Liên Hệ</h2>
                        <div class="title-inner link-style-3">
                            <h5 class=""><a class="home fw-4" href="/">Trang Chủ</a><span>Liên Hệ</span></h5>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>                    
    </section>

    <section class="tf-section2 flat-icon-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="heading-section center">
                        <h5>Liên Hệ</h5>
                        <h2>Liên Hệ Với Chúng Tôi</h2>
                    </div>                        
                </div>
                <div class="col-lg-4 col-md-4" style="margin-bottom: 10px;">
                    <div class="box-icon flex" style="height: 100%">
                        <div class="icon">
                                <svg enable-background="new 0 0 512 512" height="32" viewBox="0 0 512 512" width="32" xmlns="http://www.w3.org/2000/svg"><g><path d="m336.999 0c-8.284 0-15 6.715-15 14.999 0 8.284 6.716 15 15 15 79.954.001 145.001 65.048 145.001 145.002 0 8.284 6.716 15 15 15 8.284 0 14.999-6.716 14.999-15 .001-96.651-78.349-175.001-175-175.001z"/><path d="m337 90c46.869 0 85 38.132 85.001 85 0 8.284 6.716 15 15 15 8.284 0 14.999-6.716 14.999-15 0-63.513-51.487-115-115-115-8.285 0-15 6.716-15 15 0 8.284 6.716 15 15 15z"/><path d="m322 135.001c0 8.284 6.716 15 15 15 6.977 0 13.518 2.839 18.303 7.97 4.416 4.735 6.697 11.078 6.697 17.553 0 7.996 6.481 14.477 14.477 14.477h.523c8.284 0 14.999-6.716 14.999-15 0-30.375-24.624-55-55-55-8.284 0-14.999 6.715-14.999 15z"/><path d="m433.193 305.081c-17.546-17.546-46.094-17.545-63.64 0l-33.682 33.682c-4.839 4.839-12.244 5.855-18.007 2.47-20.149-11.836-50.847-32.623-82.661-64.437-31.814-31.813-52.601-62.511-64.437-82.661-3.385-5.763-2.369-13.168 2.47-18.007l33.682-33.682c17.546-17.546 17.546-46.094 0-63.64l-63.64-63.64c-17.546-17.546-46.094-17.545-63.64 0l-52.894 52.9c-.003.003-.003.003-.006.006-14.184 14.184-23.128 32.199-25.865 52.093-2.722 19.791.953 39.554 10.627 57.152 37.886 68.916 82.007 127.49 138.85 184.334 56.844 56.843 115.418 100.964 184.334 138.851 17.597 9.674 37.36 13.349 57.151 10.626 19.898-2.737 37.913-11.683 52.099-25.871l52.899-52.895c17.546-17.546 17.546-46.094 0-63.64zm-332.341-268.701c5.849-5.849 15.365-5.849 21.214 0l63.64 63.64c5.849 5.849 5.848 15.365 0 21.214l-10.607 10.607-84.854-84.854zm321.867 427.665c-19.229 19.232-49.487 23.412-73.582 10.167-66.365-36.484-122.789-78.992-177.573-133.775-54.784-54.784-97.292-111.209-133.776-177.573-13.245-24.094-9.066-54.35 10.163-73.579.001-.001.002-.002.003-.004l21.082-21.078 84.849 84.849-1.863 1.863c-14.498 14.498-17.427 36.874-7.124 54.415 12.722 21.658 35.036 54.624 69.091 88.679s67.021 56.369 88.679 69.091c17.541 10.303 39.917 7.374 54.415-7.124l1.863-1.863 84.849 84.849zm52.901-52.897-10.607 10.607-84.853-84.854 10.607-10.607c5.849-5.849 15.365-5.849 21.214 0l63.64 63.64c5.848 5.849 5.848 15.365-.001 21.214z"/></g></svg>
                        </div>
                        <div class="content">
                            <h3 class="text-color-6">Điện Thoại</h3>
                            <a href="tel:0862037730"><p>+(84) 862-037-730</p></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-4">
                    <div class="box-icon flex">
                        <div class="icon">
                            <svg height="33" viewBox="0 0 125 125" width="33" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m105.182 97.82h-85.364a10.477 10.477 0 0 1 -10.465-10.466v-52.72a10.477 10.477 0 0 1 10.465-10.466h85.364a10.477 10.477 0 0 1 10.465 10.466v52.72a10.477 10.477 0 0 1 -10.465 10.466zm-85.364-69.652a6.472 6.472 0 0 0 -6.465 6.466v52.72a6.472 6.472 0 0 0 6.465 6.466h85.364a6.472 6.472 0 0 0 6.465-6.466v-52.72a6.472 6.472 0 0 0 -6.465-6.466z"/><path d="m62.5 72.764a2 2 0 0 1 -1.324-.5l-48.2-42.548 2.647-3 46.877 41.384 46.879-41.379 2.647 3-48.2 42.548a1.994 1.994 0 0 1 -1.326.495z"/><path d="m5.012 72.393h49.061v4h-49.061z" transform="matrix(.66 -.752 .752 .66 -45.859 47.529)"/><path d="m93.454 49.862h4v49.062h-4z" transform="matrix(.752 -.66 .66 .752 -25.361 81.43)"/></svg>
                        </div>
                        <div class="content">
                            <h3 class="text-color-6">Email</h3>                             
                            <a href="info:company@.com"><p>company@.com</p></a>
                            <a href="info:company@.com"><p>career@example.com</p></a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-4" style="margin-bottom: 10px;">
                    <div class="box-icon style3 flex" style="height: 100%">
                        <div class="icon">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256.98,40.005c-5.53-0.04-10.04,4.41-10.08,9.93c-0.04,5.52,4.4,10.03,9.93,10.07c5.52,0.04,10.03-4.4,10.07-9.92
                                            C266.94,44.565,262.5,40.055,256.98,40.005z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M256.525,100.004c-38.611-0.274-70.232,30.875-70.524,69.474c-0.291,38.597,30.875,70.233,69.474,70.524
                                            c0.179,0.001,0.357,0.002,0.536,0.002c38.353,0,69.698-31.056,69.988-69.476C326.29,131.933,295.125,100.295,256.525,100.004z
                                            M256.009,220.005c-0.126,0-0.258-0.001-0.384-0.002c-27.571-0.208-49.833-22.806-49.625-50.375
                                            c0.207-27.445,22.595-49.627,49.991-49.627c0.126,0,0.258,0.001,0.384,0.002c27.571,0.208,49.833,22.806,49.625,50.375
                                            C305.792,197.823,283.405,220.005,256.009,220.005z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M299.631,47.589c-5.202-1.846-10.921,0.879-12.767,6.085c-1.845,5.206,0.88,10.921,6.085,12.767
                                            c44.047,15.611,73.402,57.562,73.05,104.389c-0.041,5.522,4.402,10.033,9.925,10.075c0.025,0,0.051,0,0.077,0
                                            c5.486,0,9.956-4.428,9.998-9.925C386.415,115.633,351.706,66.046,299.631,47.589z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M317.357,376.442c66.513-85.615,108.08-130.26,108.641-205.164C426.702,77.035,350.22,0,255.984,0
                                            C162.848,0,86.71,75.428,86.002,168.728c-0.572,76.935,41.767,121.519,108.739,207.7C128.116,386.384,86.002,411.401,86.002,442
                                            c0,20.497,18.946,38.89,53.349,51.79c31.313,11.742,72.74,18.209,116.649,18.209s85.336-6.467,116.649-18.209
                                            c34.403-12.901,53.349-31.294,53.349-51.791C425.998,411.417,383.923,386.406,317.357,376.442z M106.001,168.879
                                            C106.625,86.55,173.8,20,255.986,20c83.159,0,150.633,67.988,150.013,151.129c-0.532,71.134-44.614,114.971-114.991,206.714
                                            c-12.553,16.356-24.081,31.82-34.993,46.947c-10.88-15.136-22.178-30.323-34.919-46.953
                                            C147.81,282.253,105.459,241.729,106.001,168.879z M256,492c-85.851,0-149.999-26.397-149.999-50
                                            c0-17.504,38.348-39.616,102.826-47.273c14.253,18.701,26.749,35.691,39.005,53.043c1.872,2.65,4.914,4.228,8.159,4.23
                                            c0.003,0,0.006,0,0.009,0c3.242,0,6.283-1.572,8.158-4.217c12.14-17.126,24.978-34.535,39.109-53.045
                                            c64.418,7.665,102.732,29.77,102.732,47.263C405.998,465.603,341.851,492,256,492z"/>
                                    </g>
                                </g>
                                </svg>
                        </div>
                        <div class="content">
                            <h3 class="text-color-6">Địa Chỉ</h3>   
                            <p><b style="font-weight:bold">CÔNG TY TNHH THỰC PHẨM XUÂN PHONG</b></p>                          
                            <p>SN095-097, đường Thanh Niên, phường Cốc Lếu, 
                                thành phố Lào Cai, tỉnh Lào Cai</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4" style="margin-bottom: 10px;">
                    <div class="box-icon style3 flex"  style="height: 100%">
                        <div class="icon">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                             width="512.000000pt" height="512.000000pt" viewBox="0 0 512.000000 512.000000"
                             preserveAspectRatio="xMidYMid meet">
                            
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                            fill="#c80000" stroke="none">
                            <path d="M1366 4914 c-81 -19 -182 -75 -243 -133 -104 -99 -160 -215 -170
                            -352 -5 -69 -4 -78 16 -98 47 -47 121 -8 121 63 0 46 27 144 52 185 35 60 110
                            131 168 161 76 38 142 50 280 50 107 0 122 2 140 20 11 11 20 33 20 50 0 17
                            -9 39 -20 50 -18 18 -33 20 -162 19 -86 0 -166 -6 -202 -15z"/>
                            <path d="M1940 4910 c-11 -11 -20 -33 -20 -50 0 -17 9 -39 20 -50 19 -19 33
                            -20 240 -20 207 0 221 1 240 20 11 11 20 33 20 50 0 17 -9 39 -20 50 -19 19
                            -33 20 -240 20 -207 0 -221 -1 -240 -20z"/>
                            <path d="M3186 4914 c-228 -55 -416 -286 -416 -511 0 -62 23 -93 68 -93 45 0
                            68 35 76 110 17 171 154 323 324 359 30 6 152 11 277 11 212 0 226 1 245 20
                            11 11 20 33 20 50 0 17 -9 39 -20 50 -19 19 -33 20 -267 19 -177 0 -265 -5
                            -307 -15z"/>
                            <path d="M4050 4910 c-11 -11 -20 -33 -20 -50 0 -52 29 -70 114 -70 89 0 119
                            18 119 70 0 52 -30 70 -119 70 -61 0 -78 -4 -94 -20z"/>
                            <path d="M1398 4675 c-122 -45 -206 -158 -208 -277 0 -57 24 -88 68 -88 38 0
                            62 29 73 86 12 65 43 109 93 133 39 20 60 21 297 21 291 0 299 2 299 70 0 69
                            -6 70 -315 69 -203 0 -279 -4 -307 -14z"/>
                            <path d="M2200 4670 c-11 -11 -20 -33 -20 -50 0 -55 28 -70 130 -70 102 0 130
                            15 130 70 0 55 -28 70 -130 70 -77 0 -93 -3 -110 -20z"/>
                            <path d="M3223 4676 c-117 -37 -213 -164 -213 -282 0 -52 26 -84 68 -84 35 0
                            72 37 72 72 0 65 58 141 120 158 19 5 92 10 161 10 118 0 127 1 147 23 28 30
                            28 68 -1 95 -22 21 -33 22 -168 21 -89 0 -160 -5 -186 -13z"/>
                            <path d="M3779 4672 c-15 -13 -22 -30 -22 -52 0 -22 7 -39 22 -52 21 -16 44
                            -18 231 -18 187 0 210 2 231 18 31 26 31 78 0 104 -21 16 -44 18 -231 18 -187
                            0 -210 -2 -231 -18z"/>
                            <path d="M687 4202 c-14 -16 -17 -43 -17 -167 0 -133 2 -151 19 -169 19 -21
                            19 -38 -45 -1346 -35 -729 -64 -1331 -64 -1337 0 -8 -15 -13 -40 -13 -78 0
                            -84 -18 -95 -320 -3 -80 -8 -175 -11 -213 l-6 -67 -97 0 c-89 0 -99 -2 -119
                            -23 -21 -22 -22 -33 -22 -168 0 -139 1 -146 23 -167 l23 -22 2325 0 2326 0 21
                            23 c21 22 22 33 22 168 0 139 -1 146 -23 167 -21 19 -34 22 -120 22 l-97 0 0
                            1240 c0 682 1 1240 3 1241 1 0 47 6 102 14 81 10 102 17 117 35 39 48 7 114
                            -53 114 -19 0 -346 -38 -727 -84 -380 -46 -695 -80 -698 -77 -4 4 -15 182 -26
                            397 l-19 391 21 26 c18 23 20 40 20 169 0 131 -2 146 -20 164 -19 19 -33 20
                            -450 20 -417 0 -431 -1 -450 -20 -18 -18 -20 -33 -20 -167 0 -131 2 -149 19
                            -167 19 -21 19 -26 -1 -476 -12 -250 -22 -456 -22 -457 -3 -5 -859 -103 -864
                            -98 -3 3 -17 231 -30 505 l-23 500 20 26 c19 24 21 40 21 168 0 129 -2 144
                            -20 164 -21 22 -21 22 -454 22 -407 0 -434 -1 -449 -18z m781 -169 l-3 -48
                            -327 -3 -328 -2 0 50 0 50 331 0 330 0 -3 -47z m1822 -3 l0 -50 -330 0 -330 0
                            0 50 0 50 330 0 330 0 0 -50z m-1841 -700 c13 -281 22 -513 19 -516 -3 -3
                            -136 -21 -294 -40 -159 -19 -299 -38 -311 -44 -44 -19 -42 -102 2 -122 18 -8
                            50 -8 111 -2 47 5 87 8 90 5 2 -2 4 -328 4 -723 l0 -718 -173 0 -173 0 3 58
                            c5 71 123 2577 123 2597 0 13 43 15 288 15 l288 0 23 -510z m1809 253 c7 -142
                            15 -324 19 -405 l6 -147 -24 -5 c-41 -9 -622 -77 -626 -73 -2 2 6 190 17 417
                            11 227 20 425 20 441 l0 29 288 0 289 0 11 -257z m1292 -1783 l0 -1230 -195 0
                            -195 0 0 374 c0 363 -1 374 -21 400 l-20 26 -270 0 c-256 0 -270 -1 -289 -20
                            -19 -19 -20 -33 -20 -400 l0 -380 -55 0 -55 0 0 377 c0 373 0 377 -22 400 -21
                            23 -22 23 -290 23 -255 0 -269 -1 -288 -20 -19 -19 -20 -33 -20 -400 l0 -380
                            -800 0 -800 0 2 1033 3 1032 60 7 c217 24 3163 379 3175 382 8 2 34 4 58 5
                            l42 1 0 -1230z m-1260 -900 l0 -330 -170 0 -170 0 0 330 0 330 170 0 170 0 0
                            -330z m730 0 l0 -330 -170 0 -170 0 0 330 0 330 170 0 170 0 0 -330z m-2950
                            -100 l0 -230 -246 0 -247 0 7 188 c4 103 9 206 12 230 l6 42 234 0 234 0 0
                            -230z m3720 -420 l0 -50 -2230 0 -2230 0 0 50 0 50 2230 0 2230 0 0 -50z"/>
                            <path d="M4330 2590 c-18 -18 -20 -33 -20 -168 0 -142 1 -149 23 -170 30 -28
                            68 -28 95 1 21 22 22 33 22 170 0 134 -2 149 -20 167 -11 11 -33 20 -50 20
                            -17 0 -39 -9 -50 -20z"/>
                            <path d="M1605 2083 c-59 -15 -75 -85 -29 -122 26 -20 37 -21 446 -21 l419 0
                            24 25 c42 41 29 95 -26 114 -32 11 -790 14 -834 4z"/>
                            <path d="M2983 1963 c-46 -9 -53 -36 -53 -194 0 -147 0 -148 26 -168 24 -19
                            40 -21 166 -21 134 0 140 1 163 25 24 23 25 29 25 165 0 78 -4 150 -10 160 -5
                            10 -24 23 -41 29 -30 10 -228 13 -276 4z m187 -188 l0 -45 -50 0 -50 0 0 45 0
                            45 50 0 50 0 0 -45z"/>
                            <path d="M3715 1963 c-51 -13 -55 -26 -55 -189 l0 -153 26 -20 c24 -19 40 -21
                            166 -21 134 0 140 1 163 25 24 23 25 28 25 167 -1 154 -5 169 -54 188 -27 10
                            -232 12 -271 3z m185 -188 l0 -45 -50 0 -50 0 0 45 0 45 50 0 50 0 0 -45z"/>
                            <path d="M1605 1843 c-59 -15 -75 -85 -29 -122 26 -20 37 -21 446 -21 l419 0
                            24 25 c42 41 29 95 -26 114 -32 11 -790 14 -834 4z"/>
                            <path d="M1605 1603 c-59 -15 -75 -85 -29 -122 26 -20 37 -21 446 -21 l419 0
                            24 25 c42 41 29 95 -26 114 -32 11 -790 14 -834 4z"/>
                            </g>
                            </svg>
                                                        
                        </div>
                        <div class="content">
                            <h3 class="text-color-6">Địa Chỉ Sản Xuất</h3>                             
                            <p><b style="font-weight:bold">Sản xuất tại</b>: CÔNG TY TMDV & SX HÀ ANH </p>
                            <p><b style="font-weight:bold">Địa chỉ</b>: Thôn Phú Hạ, xã Minh Phú, huyện Sóc Sơn, TP Hà Nội </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="tf-section2 flat-contact">
        <div class="mark-contact">
            <img src="assets/images/mark/mark-contact.png" alt="images">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="wrap-contact flex">
                        <div class="box box-1">
                            <div class="flat-accordion fl-faq-content"> 
                                <h2 class="fw-7">FAQ?</h2>                            
                                <div class="flat-toggle">
                                    <div class="toggle-title flex active"><div class="btn-toggle"></div><h5>Your email address will not be published?</h5>  </div>
                                    <div class="toggle-content section-desc">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, </p>
                                    </div>
                                </div>
                                <div class="flat-toggle">
                                    <div class="toggle-title flex"><div class="btn-toggle"></div><h5>Your email address will not be published?</h5>  </div>
                                    <div class="toggle-content section-desc">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, </p>
                                    </div>
                                </div>
                                <div class="flat-toggle">
                                    <div class="toggle-title flex"><div class="btn-toggle"></div><h5>Your email address will not be published?</h5>  </div>
                                    <div class="toggle-content section-desc">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, </p>
                                    </div>
                                </div>
                                <div class="flat-toggle">
                                    <div class="toggle-title flex"><div class="btn-toggle"></div><h5>Your email address will not be published?</h5>  </div>
                                    <div class="toggle-content section-desc">
                                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box box-2">
                            <div id="comments" class="comments">
                                <div id="respond" class="respond-comment">
                                    <h2 class="fw-7">Leave A Message</h2>
                                    <form method="post" id="contactform" class="comment-form form-submit"
                                        action="./contact/contact-process.php" accept-charset="utf-8"
                                        novalidate="novalidate">
                                        <div class="text-wrap clearfix">
                                            <fieldset class="name-wrap style-text">
                                                <input type="text" id="name" class="tb-my-input" name="name"
                                                    tabindex="1" placeholder="Name" value="" size="32"
                                                    aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email-wrap style-text">
                                                <input type="email" id="email" class="tb-my-input" name="email"
                                                    tabindex="2" placeholder="Email" value="" size="32"
                                                    aria-required="true" required="">
                                            </fieldset>
                                        </div>
                                        <fieldset class="website-wrap">
                                            <input type="url" id="text" class="tb-my-input" name="text"
                                                tabindex="2" placeholder="Subject" value="" size="32"
                                                aria-required="true" required="">
                                        </fieldset>
                                        <fieldset class="message-wrap">
                                            <textarea id="comment-message" name="message" rows="6" tabindex="5"
                                                placeholder="Message"
                                                aria-required="true"></textarea>
                                        </fieldset>

                                        <div class="buttons">
                                            <button name="submit" type="submit" id="comment-reply" class="blob-btn btn-style">
                                                Send Message
                                                <span class="blob-btn__inner">
                                                <span class="blob-btn__blobs">
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                    <span class="blob-btn__blob"></span>
                                                </span>
                                                </span>
                                            </button>
                                        </div> 
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="tf-map" style="background:#f3f6f0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <iframe class="map-content"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3686.035572801444!2d103.9627982114721!3d22.502848479456127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd139ee1d66a53%3A0xb145e7f13170ab20!2zOTcgVGhhbmggTmnDqm4sIER1ecOqbiBI4bqjaSwgTMOgbyBDYWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1704899183404!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
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
@endsection
