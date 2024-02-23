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
        <form action="/admin/postAddOrEditProduct/" class="form" method="post" enctype="multipart/form-data">
            @csrf
            @if(isset($data) && !empty($data))
                <input type="hidden" name='id' value='{{ $data[0]['id'] }}'>
            @else
                @php $data = ''; @endphp
            @endif
            
            <div class="col-sm-12" style="padding:15px; gap:10px; border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Tên Sản Phẩm:</div>
                <div class="col-sm-6">
                    <input type="text" name='name' class='form-control' value='{{ $data ? $data[0]['name'] : old('name') }}' required style="border:1px solid gray; color:gray; background:white">
                </div>
                <div class="col-sm-3" style='color:gray'> Ví dụ: Chân Gà Siêu Cay...</div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Link Sản Phẩm:</div>
                <div class="col-sm-6">
                    <input type="text" name='link' class='form-control' value='{{ $data ? $data[0]['link'] : old('link') }}' required style="border:1px solid gray; color:gray; background:white">
                </div>
                <div class="col-sm-3" style='color:gray'> Ví dụ: chan-ga-sieu-cay ...</div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Mô tả:</div>
                <div class="col-sm-6">
                    <textarea class="form-control" name='subtitle' rows="2" id="comment" required style="border:1px solid gray; color:gray; background:white">{{ $data ? $data[0]['subtitle'] : old('subtitle') }}</textarea>
                </div>
                <div class="col-sm-3" style='color:gray'> Ví dụ: Chân gà với lớp da mềm, gân giòn, khi nhai sẽ có cảm giác dai giòn cực đã. ...</div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Danh Mục:</div>
                <div class="col-sm-6">
                    <input type="text" name='category' class='form-control' value='{{ $data ? $data[0]['category'] : old('category') }}' required style="border:1px solid gray; color:gray; background:white">
                </div>
                <div class="col-sm-3" style='color:gray'> Ví dụ: Thực Phẩm ...</div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Thẻ:</div>
                <div class="col-sm-6">
                    <input type="text" name='tags' class='form-control' value='{{ $data ? $data[0]['tags'] : old('tags') }}' required style="border:1px solid gray; color:gray; background:white">
                </div>
                <div class="col-sm-3" style='color:gray'> Ví dụ: HOT, NEW, Chân gà, Ớt Đỏ ...</div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Ảnh Chính:</div>
                <div class="col-sm-6">
                    @if($data && $data[0]['images_main'])
                        <img style="width: 50%; margin-bottom:20px" src="{{ asset('storage/images-product/' . basename($data[0]['images_main'])) }}" alt="">
                    @endif
                    <input type="file" name='images_main' {{ $data ? '' : 'required'}} accept="image/*" style="border:1px solid gray; color:gray; background:white; width:100%">
                </div>
                <div class="col-sm-3" style='color:gray'> Chọn ảnh đại diện của sản phẩm</div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>List Ảnh Phụ:</div>
                <div class="col-sm-6">
                    @if($data && $data[0]['images'])
                        <div style="gap: 10px; margin-bottom:20px; display:flex; align-items:flex-end">
                            @foreach(explode(',', $data[0]['images']) as $value)
                                <div style="width: 22%;display: flex;justify-content: center;flex-wrap: wrap;">
                                    <img style="width: 100%; margin-bottom:10px;" src="{{ asset('storage/images-product/' . basename($value)) }}" alt="">
                                    <a href="/admin/delete-images/{{ $data[0]['id'] }}/{{ basename($value) }}" type="button" class="btn btn-danger" style='color:white;'>Xóa</a>
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <input type="file" name='images[]' value="" {{ $data ? '' : 'required'}} accept="image/*" multiple style="border:1px solid gray; color:gray; background:white; width:100%">
                </div>
                <div class="col-sm-3" style='color:gray'> Chọn danh sách ảnh khác của sản phẩm </div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px;border-bottom:1px solid rgb(200, 200, 200);">
                <div class="col-sm-2" style='font-weight:bold'>Mô tả thông tin chi tiết sản phẩm:</div>
                <div class="col-sm-10">
                    <textarea id="editor" name="description" style="height:500px">{{ $data ? $data[0]['description'] : old('description') }}</textarea>
                </div>
            </div>

            <div class="col-sm-12" style="padding:15px; gap:10px; display:flex; justify-content:center;">
                <button type="submit" class="btn btn-success">Đồng ý</button>
            </div>
        </form>
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
