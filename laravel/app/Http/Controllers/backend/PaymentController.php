<?php

namespace App\Http\Controllers\backend;

use App\Model\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class PaymentController extends Controller
{


    public function index()
    {
        $sizes = Payment::all();
        $title = "Danh mục payment";
        return view("backend.payment.list", ['items'=>$sizes, 'title'=>$title]);
    }

    public function create()
    {
        $title = "Thêm màu payment";
        return view("backend.payment.add", ['title'=>$title]);
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
            $payment = new Payment();
            $payment->name = $request->input('name');
            $payment->description = $request->input('description');
            $payment->meta_keywords = $request->input('meta_keywords');
            $payment->meta_description = $request->input('meta_description');
            $payment->created_at = \Carbon\Carbon::now();
            $payment->updated_at = null;
            $payment->save();

            return redirect('backend/payment');
        }

    }

    public function show($id)
    {
        $payment = Payment::find($id);
        if ($payment == null) {
            return $this->index();
        }
        $title = "Hiển thị payment";
        return view("backend.payment.view", ['item'=>$payment, 'title'=>$title ]);
    }

    public function edit($id)
    {
        $payment = Payment::find($id);
        if ($payment == null) {
            return $this->index();
        }
        $title = "Sửa payment";
        return view("backend.payment.edit", ['item'=>$payment, 'title'=>$title]);
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
            $payment = Payment::find($id);
            $payment->name = $request->input('name');
            $payment->description = $request->input('description');
            $payment->meta_keywords = $request->input('meta_keywords');
            $payment->meta_description = $request->input('meta_description');
            $payment->updated_at = \Carbon\Carbon::now();
            $payment->save();

            return redirect('backend/payment');
        }
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        if ($payment != null) {
            $payment->delete();
        }

        return redirect('backend/payment');
    }
}
