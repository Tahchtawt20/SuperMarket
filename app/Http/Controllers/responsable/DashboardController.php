<?php

namespace App\Http\Controllers\responsable;

use App\Http\Controllers\Controller;
use App\Models\SuperM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }
  public function index()
  {
    DB::table('stock')->where('Quantité' , 0)->delete();
    $categories=SuperM::groupBy('categorie')->select('categorie', DB::raw('count(*) as product_count'))->get();
    return view('responsable.dashboard',['categories'=>$categories]);
  }
  public function produitsStock()
  {
    $prods = DB::table('stock')->get();
    return view('responsable.produitsStock', ['prods' => $prods]);
  }
  public function fournisseurs()
  {
    $fou = DB::table('fournisseurs')->get();
    return view('responsable.fournisseurs', ['fou' => $fou]);
  }
  public function employes()
  {
    $emp = DB::table('users')->where('role', '!=', 'responsable')->get();
    return view('responsable.employes', ['emp' => $emp]);
  }
  public function filter(Request $request)
  {
    $categorie=$request->input('categories');
    $prod = DB::table('stock')->where('categorie', $categorie)->get();
    return view('responsable.filterResults', ['prods' => $prod]);
  }
}
