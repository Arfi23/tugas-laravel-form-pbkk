<?php

namespace app\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {
        $request->validate([
            'nama' => 'required|name',
            'notelp' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|min:4',
            'pekerjaan' => 'required',
            'institusi' => 'required',
            'double' => 'required|numeric|between:2.5,99.99',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'nama' => $request->nama,
            'notelp' => $request->notelp,
            'email' => $request->email,
            'password' => $request->password,
            'pekerjaan' => $request->pekerjaan,
            'institusi' => $request->institusi,
            'double' => $request->double,
            'image' => $request->image->getClientOriginalName(),
        ];

        return redirect("/result")->with(['results' => $results, 'status' => 'Form Submitted']);
    }

    public function result()
    {
        $results = session()->get('results');
        $status = session()->get('status');

        return view('result', compact('results', 'status'));
    }
}

