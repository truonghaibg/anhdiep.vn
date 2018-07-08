<?php

namespace App\Http\Controllers\backend;

use App\Model\Delivery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class DeliveryController extends Controller
{


    public function index()
    {
        $deliveries = Delivery::all();
        $title = "Danh mục delivery";
        return view("backend.delivery.list", ['items'=>$deliveries, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu delivery";
        return view("backend.delivery.add", ['title'=>$title]);
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
            $delivery = new Delivery();
            $delivery->name = $request->input('name');
            $delivery->description = $request->input('description');
            $delivery->meta_keywords = $request->input('meta_keywords');
            $delivery->meta_description = $request->input('meta_description');
            $delivery->created_at = \Carbon\Carbon::now();
            $delivery->updated_at = null;
            $delivery->save();

            return redirect('backend/delivery');
        }

    }

    public function show($id)
    {
        $delivery = Delivery::find($id);
        if ($delivery == null) {
            return $this->index();
        }
        $title = "Hiển thị delivery";
        return view("backend.delivery.view", ['item'=>$delivery, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $delivery = Delivery::find($id);
        if ($delivery == null) {
            return $this->index();
        }
        $title = "Sửa delivery";
        return view("backend.delivery.edit", ['item'=>$delivery, 'title'=>$title]);
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
            $delivery = Delivery::find($id);
            $delivery->name = $request->input('name');
            $delivery->description = $request->input('description');
            $delivery->meta_keywords = $request->input('meta_keywords');
            $delivery->meta_description = $request->input('meta_description');
            $delivery->updated_at = \Carbon\Carbon::now();
            $delivery->save();

            return redirect('backend/delivery');
        }
    }

    public function destroy($id)
    {
        $delivery = Delivery::find($id);
        if ($delivery != null) {
            $delivery->delete();
        }

        return redirect('backend/delivery');
    }
}
