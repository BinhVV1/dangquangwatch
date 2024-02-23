<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function product()
    {
        $data = Product::get()->toArray();
        return view('admin.product', compact('data'));
    }

    public function addOrEditProduct($link)
    {
        $data = Product::where('link', $link)->get()->toArray();
        return view('admin.addOrEditProduct', compact('data'));
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);

        if ($product) {
            Storage::delete($product->images_main);
            foreach (explode(',' , $product->images) as $image) {
                Storage::delete($image);
            }

            Product::destroy($id);

            return redirect('/admin')->with('success', 'Xóa Sản Phẩm Thành Công.');
        }

        return redirect('/admin')->with('error', 'Xóa Sản Phẩm Thất bại! Vui Lòng Thử Lại');
    }

    public function deleteImage($id, $value)
    {
        $product = Product::find($id);
        $value = "public/images-product/{$value}";

        if ($product) {
            $currentImages = explode(',', $product->images);
            if (in_array($value, $currentImages)) {
                $updatedImages = array_diff($currentImages, [$value]);
                $product->update(['images' => implode(',', $updatedImages)]);
                Storage::delete($value);

                return redirect()->back()->with('success', 'Đã Xóa Ảnh Thành Công');
            }
        }
    
        return redirect()->back()->with('error', 'Xóa Ảnh Thất bại! Vui Lòng Thử Lại');
    }

    
    public function postAddOrEditProduct(Request $request)
    {
        $existingProduct = Product::where('link', $request->input('link'))->first();
        if ($existingProduct) {
            return redirect()->back()->with('error', 'Link đã tồn tại. Vui Lòng Sử Dụng Link Khác')->withInput();
        }

        // Create or update the product
        $productData = [
            'name' => $request->input('name'),
            'link' => $request->input('link'),
            'subtitle' => $request->input('subtitle'),
            'category' => $request->input('category'),
            'tags' => $request->input('tags'),
            'description' => $request->input('description'),
        ];

        if ($request->file('images_main')) {
            $mainImage = $request->file('images_main');
    
            if ($mainImage->getSize() > 1000000) {
                return redirect()->back()->with('error', 'Kích thước ảnh chính phải nhỏ hơn 1MB')->withInput();
            }
    
            $existingImagesMain = $request->has('id') ? Product::find($request->input('id'))->images_main : '';
    
            if ($existingImagesMain) {
                Storage::delete($existingImagesMain);
            }
    
            $mainImage = $mainImage->store('public/images-product');
            $productData['images_main'] = $mainImage;
        }

        if ($request->file('images')) {
            $additionalImages = [];
            $existingImages = $request->has('id') ? Product::find($request->input('id'))->images : '';
    
            foreach ($request->file('images') as $image) {
                // Kiểm tra kích thước ảnh là dưới 1MB
                if ($image->getSize() > 1000000) {
                    return redirect()->back()->with('error', 'Kích thước ảnh bổ sung phải nhỏ hơn 1MB')->withInput();
                }
    
                $additionalImages[] = $image->store('public/images-product');
            }
    
            $productData['images'] = $existingImages ? $existingImages . ',' . implode(',', $additionalImages) : implode(',', $additionalImages);
        }

        if ($request->has('id')) {
            // Update existing product
            Product::where('id', $request->input('id'))->update($productData);
            $messer = 'Cập Nhập Thành Công';
        } else {
            // Create new product
            Product::create($productData);
            $messer = 'Tạo Mới Thành Công';
        }

        return redirect('/admin')->with('success', $messer);
    }
}
