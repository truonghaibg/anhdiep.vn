<?php

namespace App\Http\Controllers\backend;

use App\Model\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class ColorController extends Controller
{

    public function index()
    {
        $colors = Color::all();
        $title = "Danh mục màu sắc";
        return view("backend.color.list", ['items'=>$colors, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu sắc mới";
        return view("backend.color.add", ['title'=>$title]);
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
            $color = new Color();
            $color->name = $request->input('name');
            $color->description = $request->input('description');
            $color->image = $request->input('image');
            $color->meta_keywords = $request->input('meta_keywords');
            $color->meta_description = $request->input('meta_description');
            $color->created_at = \Carbon\Carbon::now();
            $color->updated_at = null;
            $color->save();

            return redirect('backend/color');
        }

    }

    public function show($id)
    {
        $color = Color::find($id);
        if ($color == null) {
            return $this->index();
        }
        $title = "Hiển thị màu sắc";
        return view("backend.color.view", ['item'=>$color, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $color = Color::find($id);
        if ($color == null) {
            return $this->index();
        }
        $title = "Sửa màu sắc";
        return view("backend.color.edit", ['item'=>$color, 'title'=>$title]);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'name'       => 'required:255'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $color = Color::find($id);
            $color->name = $request->input('name');
            $color->description = $request->input('description');
            $color->image = $request->input('image');
            $color->meta_keywords = $request->input('meta_keywords');
            $color->meta_description = $request->input('meta_description');
            $color->updated_at = \Carbon\Carbon::now();
            $color->save();

            return redirect('backend/color');
        }
    }

    public function destroy($id)
    {
        $color = Color::find($id);
        if ($color != null) {
            $color->delete();
        }

        return redirect('backend/color');
    }
}
