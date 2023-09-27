<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {
        // dd($request->all());

        $messages = [
            'nama.required' => 'Kolom nama wajib diisi.',
            'notelp.required' => 'Kolom nomor telepon wajib diisi.',
            'notelp.numeric' => 'Kolom nomor telepon harus berisi angka.',
            'email.required' => 'Kolom email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'password.required' => 'Kolom password wajib diisi.',
            'password.min' => 'Password harus terdiri dari minimal :min karakter.',
            'pekerjaan.required' => 'Kolom pekerjaan wajib diisi.',
            'institusi.required' => 'Kolom institusi wajib diisi.',
            'double.required' => 'Kolom bilangan wajib diisi.',
            'double.numeric' => 'Kolom bilangan harus berupa angka dan menggunakan format koma berupa titik',
            'double.between' => 'Kolom bilangan harus antara :min dan :max.',
            'image.required' => 'Pilih gambar untuk diunggah.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari :max kilobytes.',
            'image.mimes' => 'Format gambar yang diizinkan hanya: jpg, jpeg, png.',
        ];

        $request->validate([
            'nama' => 'required',
            'notelp' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|min:4',
            'pekerjaan' => 'required',
            'institusi' => 'required',
            'double' => 'required|numeric|between:2.50,99.99',
            'image' => 'required|max:2048|mimes:jpg,jpeg,png'
        ], $messages);

        // dd('Validation passed');

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

        session()->put('uploaded_file', $request->image->getClientOriginalName());

        return redirect("/result")->with(['results' => $results, 'status' => 'Form Submitted']);
    }

    public function result()
    {
        $results = session()->get('results');
        $status = session()->get('status');
        $uploadedFileName = session()->get('uploaded_file');

        return view('result', compact('results', 'status', 'uploadedFileName'));
    }
}

