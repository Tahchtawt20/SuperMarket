<?php
namespace App\Http\Controllers\responsable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index() {
    return view('responsable.dashboard');
  }
  public function produitsStock(){
    $prods=DB::table('stock')->get();
    return view('responsable.produitsStock',['prods'=>$prods]);
  }
  public function fournisseurs(){
    $fou=DB::table('fournisseurs')->get();
    return view('responsable.fournisseurs',['fou'=>$fou]);
  }
  public function employes(){
    $emp=DB::table('users')->where('role','!=','responsable')->get();
    return view('responsable.employes',['emp'=>$emp]);
  }
}