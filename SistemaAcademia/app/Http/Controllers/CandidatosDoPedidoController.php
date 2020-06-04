<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidatosDoPedido;

class CandidatosDoPedidoController extends Controller
{
    public function Criar($IdPedido, $IdPersonal){

      $Candidatos = new CandidatosDoPedido();

      $Candidatos->PedidoID = $IdPedido;
      $Candidatos->PersonalID = $IdPersonal;

      $Candidatos->save();

      return redirect()->back()->withSuccess('Candidatura realizada com sucesso!');
    }
}
