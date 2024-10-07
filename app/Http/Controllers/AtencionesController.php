<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtencionesController extends Controller
{
    public function destroy($DNI)
    {
        // Eliminar la atención usando el DNI como identificador
        DB::table('atenciones_2021_2022')->where('DNI', $DNI)->delete();

        // Redirigir a la vista principal con un mensaje de éxito
        return redirect()->route('principal')->with('success', 'Atención eliminada con éxito.');
    }

    public function create()
{
    return view('/atenciones/create');
}


    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'DNI' => 'required',
        'Fecha' => 'required|date',
        'Beneficiario' => 'required',
        'EESS ATENCION' => 'required',
        'TProfesional' => 'required',
        'Profesional' => 'required',
        'Diagnostico01' => 'required',
    ]);

    // Insertar la nueva atención en la base de datos
    DB::table('atenciones_2021_2022')->insert([
        'DNI' => $request->DNI,
        'Fecha' => $request->Fecha,
        'Beneficiario' => $request->Beneficiario,
        'EESS ATENCION' => $request->{'EESS ATENCION'},
        'TProfesional' => $request->TProfesional,
        'Profesional' => $request->Profesional,
        'Diagnostico01' => $request->Diagnostico01,
    ]);

    // Redirigir a la vista de trabajador con un mensaje de éxito
    return redirect()->route('principal')->with('success', 'Atención creada con éxito.');
}

}
