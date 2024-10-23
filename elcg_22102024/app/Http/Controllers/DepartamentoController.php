<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Departamento;
class DepartamentoController extends Controller
{
    //
    public function obtenerDepartamentos(){
        $Depto = new Departamento();
        $valores = $Depto::all();
        $respuesta = [
            "success"=> true,
            "msg"=>"Valores devueltos por el Endpoint obtenerDepartamentos",
            "data"=>$valores,
            "erorr"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($respuesta, 200);
    }

    public function obtenerDepartamento($iddepto){
        $Depto = new Departamento();
        $valores = $Depto->where("id_departamento", $iddepto)->get();
        $respuesta = [
            "success"=> true,
            "msg"=>"Valores devueltos por el Endpoint obtenerDepartamento",
            "data"=>$valores,
            "erorr"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($respuesta, 200);
    }


    public function obtenerDepartamentoPorZona($idzona){
        $Depto = new Departamento();
        $valores = $Depto->where("id_zona", $idzona)->get();
        $respuesta = [
            "success"=> true,
            "msg"=>"Valores devueltos por el Endpoint obtenerDepartamentosPorZona",
            "data"=>$valores,
            "erorr"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($respuesta, 200);
    }

    public function nuevoDepto(Request $req){
        $Depto = new Departamento();
        $Depto->id_zona = $req->idzona;
        $Depto->nombre_departamento = $req->nombredepto;
        $Depto->save();
        $valores = $Depto->where("id_departamento",$Depto->id_departamento)-get();
        $respuesta = [
            "success"=> true,
            "msg"=>"Valores devueltos por el Endpoint nuevoDepto",
            "data"=>$valores,
            "erorr"=>"",
            "total"=>sizeof($valores)
        ];
        return response()->json($respuesta,200);
    }
}
