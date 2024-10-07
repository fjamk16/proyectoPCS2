<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtencionController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'DNI' => 'required',
            'Fecha' => 'required',
            'Beneficiario' => 'required',
            'EESS_ATENCION' => 'required',
            'TProfesional' => 'required',
            'Profesional' => 'required',
            'Diagnostico01' => 'required',
        ]);

        DB::table('atenciones_2021_2022')->insert([
            'DNI' => $request->DNI,
            'Fecha' => $request->Fecha,
            'Beneficiario' => $request->Beneficiario,
            'EESS ATENCION' => $request->EESS_ATENCION,
            'TProfesional' => $request->TProfesional,
            'Profesional' => $request->Profesional,
            'Diagnostico01' => $request->Diagnostico01,
        ]);

        return redirect()->route('principal')->with('success', 'Atención creada correctamente.');
    }

    public function edit($id)
    {
        $atencion = DB::table('atenciones_2021_2022')->where('id', $id)->first();
        return view('edit_atencion', ['atencion' => $atencion]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'DNI' => 'required',
            'Fecha' => 'required',
            'Beneficiario' => 'required',
            'EESS_ATENCION' => 'required',
            'TProfesional' => 'required',
            'Profesional' => 'required',
            'Diagnostico01' => 'required',
        ]);

        DB::table('atenciones_2021_2022')->where('id', $id)->update([
            'DNI' => $request->DNI,
            'Fecha' => $request->Fecha,
            'Beneficiario' => $request->Beneficiario,
            'EESS ATENCION' => $request->EESS_ATENCION,
            'TProfesional' => $request->TProfesional,
            'Profesional' => $request->Profesional,
            'Diagnostico01' => $request->Diagnostico01,
        ]);

        return redirect()->route('principal')->with('success', 'Atención actualizada correctamente.');
    }

    public function delete($id)
    {
        DB::table('atenciones_2021_2022')->where('id', $id)->delete();
        return redirect()->route('principal')->with('success', 'Atención eliminada correctamente.');
    }
}