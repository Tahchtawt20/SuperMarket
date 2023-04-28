<?php

namespace App\Http\Controllers;

use App\Models\SuperM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuperC extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prod=DB::table('stock')->get();
        return view('index',['stock'=> $prod]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('stock')->insert([
            'Nom_Prod'=>$request->nom,
            'Quantité'=>$request->qte,
            'Unité'=>$request->unite,
            'Date_liv'=>$request->livraison,
            'Prix_achat'=>$request->prixa,
            'Prix_vente'=>$request->prixv,
            'Date_exp'=>$request->exp
        ]);
        return redirect()->route('stock.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prod=DB::table('stock')->find($id);
        return view('show',['stock'=> $prod]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $prod=DB::table('stock')->find($id);
        $prod=SuperM::findOrFail($id);
        return view('edit' , ['stock'=>$prod]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // DB::table('stock')->where('id',$request->id)
        //                   ->update([
        //                     'Nom_Prod'=>$request->nom,
        //                     'Quantité'=>$request->qte,
        //                     'Unité'=>$request->unite,
        //                     'Date_liv'=>$request->livraison,
        //                     'Prix_achat'=>$request->prixa,
        //                     'Prix_vente'=>$request->prixv,
        //                     'Date_exp'=>$request->exp
        //                 ]);
        $prod=SuperM::findOrFail($id);
        $prod->Nom_Prod=$request->input('nom');
        $prod->Quantité=$request->input('qte');
        $prod->Unité=$request->input('unite');
        $prod->Date_liv=$request->input('livraison');
        $prod->Prix_achat=$request->input('prixa');
        $prod->Prix_vente=$request->input('prixv');
        $prod->Date_exp=$request->input('exp');
        $prod->save();
        return redirect()->route('stock.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        SuperM::destroy($id);
        return redirect()->route('stock.index');
    }
}
