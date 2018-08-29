<?php

namespace App\Http\Controllers\backend;

use App\Model\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class SubscribeController extends Controller
{


    public function index()
    {
        $subscribes = Subscribe::all();
        $title = "Danh mục subscribes";
        return view("backend.subscribe.list", ['items'=>$subscribes, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu subscribe";
        return view("backend.subscribe.add", ['title'=>$title]);
    }

    public function store(Request $request)
    {
        $rule = [
            'email' => 'required|email',
        ];

        $validator = Validator::make($request->all(), $rule);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $subscribe = new Subscribe();
            $subscribe->name = $request->input('email');
            $subscribe->description = $request->input('status');
            $subscribe->meta_keywords = $request->input('meta_keywords');
            $subscribe->meta_description = $request->input('meta_description');
            $subscribe->created_at = \Carbon\Carbon::now();
            $subscribe->updated_at = null;
            $subscribe->save();

            return redirect('backend/subscribe');
        }

    }

    public function show($id)
    {
        $subscribe = Subscribe::find($id);
        if ($subscribe == null) {
            return $this->index();
        }
        $title = "Hiển thị subscribe";
        return view("backend.subscribe.view", ['item'=>$subscribe, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $subscribe = Subscribe::find($id);
        if ($subscribe == null) {
            return $this->index();
        }
        $title = "Sửa subscribe";
        return view("backend.subscribe.edit", ['item'=>$subscribe, 'title'=>$title]);
    }

    public function update(Request $request, $id)
    {
        $rules = array(
            'email' => 'required|email'
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $subscribe = Subscribe::find($id);
            $subscribe->name = $request->input('email');
            $subscribe->description = $request->input('status');
            $subscribe->meta_keywords = $request->input('meta_keywords');
            $subscribe->meta_description = $request->input('meta_description');
            $subscribe->updated_at = \Carbon\Carbon::now();
            $subscribe->save();

            return redirect('backend/subscribe');
        }
    }

    public function destroy($id)
    {
        $subscribe = Subscribe::find($id);
        if ($subscribe != null) {
            $subscribe->delete();
        }

        return redirect('backend/subscribe');
    }
}
