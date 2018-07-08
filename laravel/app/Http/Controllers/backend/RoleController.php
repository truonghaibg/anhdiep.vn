<?php

namespace App\Http\Controllers\backend;

use App\Model\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class RoleController extends Controller
{

    public function index()
    {
        $roles = Role::all();
        $title = "Danh mục role";
        return view("backend.role.list", ['items'=>$roles, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu role";
        return view("backend.role.add", ['title'=>$title]);
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
            $role = new Role();
            $role->name = $request->input('name');
            $role->description = $request->input('description');
            $role->meta_keywords = $request->input('meta_keywords');
            $role->meta_description = $request->input('meta_description');
            $role->created_at = \Carbon\Carbon::now();
            $role->updated_at = null;
            $role->save();

            return redirect('backend/role');
        }

    }

    public function show($id)
    {
        $size = Role::find($id);
        if ($size == null) {
            return $this->index();
        }
        $title = "Hiển thị role";
        return view("backend.role.view", ['item'=>$size, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        if ($role == null) {
            return $this->index();
        }
        $title = "Sửa role";
        return view("backend.role.edit", ['item'=>$role, 'title'=>$title]);
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
            $role = Role::find($id);
            $role->name = $request->input('name');
            $role->description = $request->input('description');
            $role->meta_keywords = $request->input('meta_keywords');
            $role->meta_description = $request->input('meta_description');
            $role->updated_at = \Carbon\Carbon::now();
            $role->save();

            return redirect('backend/role');
        }
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        if ($role != null) {
            $role->delete();
        }

        return redirect('backend/role');
    }
}
