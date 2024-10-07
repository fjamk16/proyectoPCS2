<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login/login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('principal')->with('success', 'Bienvenido, ' . Auth::user()->name);
        }

        return back()->withErrors(['msg' => 'Credenciales incorrectas.']);
    }

    public function index()
    {
        $atenciones = [];

        if (Auth::check()) {
            if (Auth::user()->role == 'usuario') {
                $atenciones = DB::table('atenciones_2021_2022')
                    ->select('DNI', 'Fecha', 'Beneficiario', 'EESS ATENCION', 'TProfesional', 'Profesional', 'Diagnostico01')
                    ->paginate(10);
            } elseif (Auth::user()->role == 'trabajador') {
                $atenciones = DB::table('atenciones_2021_2022')
                    ->select('DNI', 'Fecha', 'Beneficiario', 'EESS ATENCION', 'TProfesional', 'Profesional', 'Diagnostico01')
                    ->paginate(10);
            }
        }

        return view('principal', ['atenciones' => $atenciones]);
    }
}