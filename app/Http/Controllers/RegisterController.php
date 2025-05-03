<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index()
    {
        return view(view: 'register');
    }

    public function register(Request $request)
    {
        // $user = new User();
        // $user->fullname = $request->input('fullname');
        // $user->email = $request->input('email');
        // $user->password = bcrypt($request->input('password'));
        // $user->save();

        // return redirect()->route('dashboard');

        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPassword = $request->input('confirm-password');

        // Lakukan validasi
        if ($fullname == "" || $email == "" || $password == "" || $confirmPassword == "") {
            return response()->json(['error' => 'Semua field harus diisi!']);
        }

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            // Handle validation error
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // if (!validateEmail($email)) {
        //     return response()->json(['error' => 'Email tidak valid!']);
        // }

        if (!$this->validatePassword($password)) {
            return response()->json(['error' => 'Password tidak valid!']);
        }

        if ($password != $confirmPassword) {
            return response()->json(['error' => 'Password dan konfirmasi password tidak sama!']);
        }

        // Simpan data ke database
        DB::table('users')->insert([
            'name' => $fullname,
            'email' => $email,
            'password' => bcrypt($password),
        ]);

        // return response()->json(['success' => 'Data berhasil disimpan!']);

        return redirect()->route('dashboard.index');
    }

    public function validatePassword($password)
    {
        // $re = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
        $re = '/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
        return preg_match($re, $password) === 1;
    }
}