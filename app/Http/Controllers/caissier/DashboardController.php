<?php

namespace App\Http\Controllers\caissier;

use App\Models\SuperM;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    $prodr = SuperM::all();
    DB::table('stock')->where('Quantité', 0)->delete();

    return view('caissier.dashboard', ['produit' => $prodr]);
  }

  public function update(Request $request, $id)
  {
    $prodr = SuperM::find($id);
    $stockVal = $request->input('num');

    // DB::table('stock')->where('id',$id)->update(['Quantité' => $prodr->$Quantité-$stockVal]);
    $prodr->Quantité = $prodr->Quantité - $stockVal;
    $prodr->save();

    return redirect()->back()->with('status', 'Quantité du produit est modifiée avec succès !');
  }
}
