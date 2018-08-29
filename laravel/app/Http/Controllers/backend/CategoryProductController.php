<?php

namespace App\Http\Controllers\backend;

use App\Model\CategoryProduct;
use App\Model\CategoryProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categoryProduct = CategoryProduct::all();
        $title = "Danh mục sản phẩm";
        return view("backend.category-product.list", ['items'=>$categoryProduct, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm danh mục mới";
        $categoryProduct = CategoryProduct::all();
        return view("backend.category-product.add", ['title'=>$title, 'categoryProducts'=>$categoryProduct]);
    }

    public function store(Request $request)
    {
        $categoryProduct = new CategoryProduct();
        $parent_id = $request->input('parent_id');
        if ($parent_id != '') {
            $categoryProduct->parent_id = $parent_id;
        }
        $categoryProduct->category_product_type = $request->input('category_product_type');
        $categoryProduct->name = $request->input('name');
        $categoryProduct->slug = $request->input('slug');
        $categoryProduct->description = $request->input('description');
        $categoryProduct->image = $request->input('image');
        $categoryProduct->order = $request->input('order');
        $categoryProduct->status = $request->input('status');
        $categoryProduct->created_at = \Carbon\Carbon::now();
        $categoryProduct->updated_at = null;
        $categoryProduct->save();
        return redirect('backend/category-product');
    }

    public function show($id)
    {
        $categoryProduct = CategoryProduct::find($id);
        if ($categoryProduct == null) {
            return $this->index();
        }
        $title = "Hiển thị danh mục";
        return view("backend.category-product.view", ['item'=>$categoryProduct, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $category = CategoryProduct::find($id);
        if ($category == null) {
            return $this->index();
        }
        $title = "Sửa danh mục";
        return view("backend.category-product.edit", ['item'=>$category, 'title'=>$title]);
    }

    public function update(Request $request, $id)
    {
        return redirect('backend/category-product');
    }

    public function destroy($id)
    {
        $category = CategoryProduct::find($id);
        if ($category != null) {
            $category->delete();
        }

        return redirect('backend/category-product');
    }
}
