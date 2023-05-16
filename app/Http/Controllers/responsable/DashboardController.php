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
}