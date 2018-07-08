<?php

namespace App\Http\Controllers\backend;

use App\Model\CategoryProduct;
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
        return view("backend.category-product.add", ['title'=>$title]);
    }

    public function store(Request $request)
    {
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
        return view("backend.category-product.edit", ['item'=>$category]);
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
