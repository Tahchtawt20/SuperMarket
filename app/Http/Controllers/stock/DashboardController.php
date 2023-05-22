<?php
namespace App\Http\Controllers\stock;
use App\Http\Controllers\Controller;
use App\Models\SuperM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
  public function __construct() {
    $this->middleware('auth');
  }
  public function index()
    {
        $prod=DB::table('stock')->paginate(10);
        return view('stock.dashboard',['stock'=> $prod]);
    }
     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('stock')->insert([
            'Nom_Prod'=>$request->nom, 
            'categorie'=>$request->categories, 
            'Quantité'=>$request->qte,
            'Unité'=>$request->unite,
            'Date_liv'=>$request->livraison,
            'Prix_achat'=>$request->prixa,
            'Prix_vente'=>$request->prixv,
            'Date_exp'=>$request->exp
        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prod=DB::table('stock')->find($id);
        return view('stock.show',['stock'=> $prod]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prod=DB::table('stock')->find($id);
        // $prod=SuperM::findOrFail($id);
        return view('stock.edit' , ['stock'=>$prod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('stock')->where('id',$id)
                          ->update([
                            'Nom_Prod'=>$request->nom,
                            'categorie'=>$request->categories,
                            'Quantité'=>$request->qte,
                            'Unité'=>$request->unite,
                            'Date_liv'=>$request->livraison,
                            'Prix_achat'=>$request->prixa,
                            'Prix_vente'=>$request->prixv,
                            'Date_exp'=>$request->exp
                        ]);
        // $prod=SuperM::findOrFail($id);
        // $prod->Nom_Prod=$request->input('nom');
        // $prod->Quantité=$request->input('qte');
        // $prod->Unité=$request->input('unite');
        // $prod->Date_liv=$request->input('livraison');
        // $prod->Prix_achat=$request->input('prixa');
        // $prod->Prix_vente=$request->input('prixv');
        // $prod->Date_exp=$request->input('exp');
        // $prod->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SuperM::destroy($id);
        return redirect()->route('index');
    }
    public function search (Request $request){
        $result=$request->input('categories');
        $prod = DB::table('stock')->where('categorie', $result)->get();
        return view('stock.searchRes', ['stock'=> $prod]);

    }
}

