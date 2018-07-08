<?php

namespace App\Http\Controllers\backend;

use App\Model\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class SizeController extends Controller
{

    public function index()
    {
        $sizes = Size::all();
        $title = "Danh mục kich thuoc";
        return view("backend.size.list", ['items'=>$sizes, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu kich thuoc";
        return view("backend.size.add", ['title'=>$title]);
    }

    public function store(Request $request)
    {
        $rule = [
            'name' => 'required|max:255',
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $size = new Size();
            $size->name = $request->input('name');
            $size->description = $request->input('description');
            $size->image = $request->input('image');
            $size->meta_keywords = $request->input('meta_keywords');
            $size->meta_description = $request->input('meta_description');
            $size->created_at = \Carbon\Carbon::now();
            $size->updated_at = null;
            $size->save();

            return redirect('backend/size');
        }

    }

    public function show($id)
    {
        $size = Size::find($id);
        if ($size == null) {
            return $this->index();
        }
        $title = "Hiển thị kich thuoc";
        return view("backend.size.view", ['item'=>$size, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $size = Size::find($id);
        if ($size == null) {
            return $this->index();
        }
        $title = "Sửa kich thuoc";
        return view("backend.size.edit", ['item'=>$size, 'title'=>$title]);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'name' => 'required:255'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $size = Size::find($id);
            $size->name = $request->input('name');
            $size->description = $request->input('description');
            $size->image = $request->input('image');
            $size->meta_keywords = $request->input('meta_keywords');
            $size->meta_description = $request->input('meta_description');
            $size->updated_at = \Carbon\Carbon::now();
            $size->save();

            return redirect('backend/size');
        }
    }

    public function destroy($id)
    {
        $size = Size::find($id);
        if ($size != null) {
            $size->delete();
        }

        return redirect('backend/size');
    }
}
