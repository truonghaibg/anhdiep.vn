<?php

namespace App\Http\Controllers\backend;

use App\Model\Gender;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenderController extends Controller
{


    public function index()
    {
        $genders = Gender::all();
        $title = "Danh mục gender";
        return view("backend.gender.list", ['items'=>$genders, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu gender";
        return view("backend.gender.add", ['title'=>$title]);
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
            $gender = new Gender();
            $gender->name = $request->input('name');
            $gender->description = $request->input('description');
            $gender->meta_keywords = $request->input('meta_keywords');
            $gender->meta_description = $request->input('meta_description');
            $gender->created_at = \Carbon\Carbon::now();
            $gender->updated_at = null;
            $gender->save();

            return redirect('backend/gender');
        }

    }

    public function show($id)
    {
        $gender = Gender::find($id);
        if ($gender == null) {
            return $this->index();
        }
        $title = "Hiển thị Gender";
        return view("backend.gender.view", ['item'=>$gender, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $gender = Gender::find($id);
        if ($gender == null) {
            return $this->index();
        }
        $title = "Sửa gender";
        return view("backend.gender.edit", ['item'=>$gender, 'title'=>$title]);
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
            $gender = Gender::find($id);
            $gender->name = $request->input('name');
            $gender->description = $request->input('description');
            $gender->meta_keywords = $request->input('meta_keywords');
            $gender->meta_description = $request->input('meta_description');
            $gender->updated_at = \Carbon\Carbon::now();
            $gender->save();

            return redirect('backend/gender');
        }
    }

    public function destroy($id)
    {
        $gender = Gender::find($id);
        if ($gender != null) {
            $gender->delete();
        }

        return redirect('backend/gender');
    }
}
