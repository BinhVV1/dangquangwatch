@extends('layouts.admin.layout')

@section('content')
@if(session('error'))
<div id="error-message" class="alert alert-danger">
    {{ session('error') }}
</div>
@elseif(session('success'))
<div id="error-message" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
<div class="">
   <div class='col-lg-12' style="padding: 16px; width:100%">
    <section class="tf-section flat-blog" style='padding:0'>
        <div class="">
            <div class="row">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 col-sm-12" style="padding:15px;">
                        <div class="" style="background: white; padding:15px; height:100%; display:grid;align-items: end;">
                            <div class="">
                                <img style="width:100%" src="{{ asset('storage/images-product/' . basename($item['images_main'])) }}" alt="">
                            </div>
                            <div class="content">
                                <h3 style='display:flex;justify-content:center; margin:20px 0px;'>
                                    <a href="/admin/{{ $item['link'] }}" style='color:#c80000'>{{ $item['name'] }}</a>
                                </h3>
                                <div class="" style='display:flex; justify-content:space-around'>
                                    <a href="/admin/{{ $item['link'] }}" type="button" class="btn btn-primary" style='color:white'>Chỉnh Sửa</a>
                                    <a href="/admin/delete/{{ $item['id'] }}" type="button" class="btn btn-danger" style='color:white'>Xóa</a>
                                </div>
                            </div>                                                              
                        </div>                        
                    </div>
                @endforeach
            </div>
        </div>
    </section>
   </div>
</div>
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
