@extends('layouts.stock')
@section('title', 'Modifier un produit')
@section('content')
    <div class="d-flex justify-content-center p-2 m-2">
        <div class="card p-4 w-50">
            <div class="d-flex justify-content-between">
                <div class="">
                    <h3>Modifier les infos du produit </h3>
                </div>
            </div>
            <hr class="my-1">
            <form action={{ route('update', $stock->id) }} method="post">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <label for="">Nom du produit</label>
                        <input type="text" name="nom" value={{ $stock->Nom_Prod }} class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Catégorie</label>
                        <select type="text" name="categories" class="form-select">
                            <option value="Produits laitiers"{{ $stock->categorie === 'Produits laitiers' ? 'selected' : '' }}>Produits laitiers</option>
                            <option value="Viandes et volailles" {{ $stock->categorie === 'Viandes et volailles' ? 'selected' : '' }}>Viandes et volailles</option>
                            <option value="Boulangerie et patisserie" {{ $stock->categorie === 'Boulangerie et patisserie' ? 'selected' : '' }}>Boulangerie et patisserie</option>
                            <option value="Poissons et fruit de mer" {{ $stock->categorie === 'Poissons et fruits de mer' ? 'selected' : '' }}>Poissons et fruit de mer</option>
                            <option value="Fruits et légumes" {{ $stock->categorie === 'Fruits et légumes' ? 'selected' : '' }}>Fruits et légumes</option>
                            <option value="Surgelés" {{ $stock->categorie === 'Surgelés' ? 'selected' : '' }}>Surgelés</option>
                            <option value="Épicerie" {{ $stock->categorie === 'Épicerie' ? 'selected' : '' }}>Épicerie</option>
                            <option value="Les céréales et les pattes" {{ $stock->categorie === 'Les céréales et les pattes' ? 'selected' : '' }}>Les céréales et les pattes</option>
                            <option value="Boissons" {{ $stock->categorie === 'Boissons' ? 'selected' : '' }}>Boissons</option>
                            <option value="Produits d'hygiène" {{ $stock->categorie === "Produits d'hygiène" ? 'selected' : '' }}>Produits d'hygiène</option>
                            <option value="Entretien ménager" {{ $stock->categorie === 'Entretien ménager' ? 'selected' : '' }}>Entretien ménager</option>
                            <option value="Alimentation pour animaux" {{ $stock->categorie === 'Alimentation pour animaux' ? 'selected' : '' }}>Alimentation pour animaux</option>
                            <option value="Bébés et enfants" {{ $stock->categorie === 'Bébés et enfants' ? 'selected' : '' }}>Bébés et enfants</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Quantité</label>
                        <input type="text" name="qte" value={{ $stock->Quantité }} class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Unité</label>
                        <select name="unite" class="form-select">
                            <option value="kg" {{ $stock->Unité === 'kg' ? 'selected' : '' }}>Kilogramme (kg)</option>
                            <option value="g" {{ $stock->Unité === 'g' ? 'selected' : '' }}>Gramme (g)</option>
                            <option value="L" {{ $stock->Unité === 'L' ? 'selected' : '' }}>Litre (L)</option>
                            <option value="mL" {{ $stock->Unité === 'mL' ? 'selected' : '' }}>Millilitre (mL)</option>
                            <option value="pc" {{ $stock->Unité === 'pc' ? 'selected' : '' }}>Pièce (pc)</option>
                            <option value="pkg" {{ $stock->Unité === 'pkg' ? 'selected' : '' }}>Paquet (pkg)</option>
                            <option value="btl" {{ $stock->Unité === 'btl' ? 'selected' : '' }}>Bouteille (btl)</option>
                            <option value="sach" {{ $stock->Unité === 'sach' ? 'selected' : '' }}>Sachet (sach)</option>
                            <option value="box" {{ $stock->Unité === 'box' ? 'selected' : '' }}>Boîte (box)</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Date livraison </label>
                        <input type="date" name="livraison" value={{ $stock->Date_liv }} class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Prix achat </label>
                        <input type="text" name="prixa" value={{ $stock->Prix_achat }} class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Prix vente </label>
                        <input type="text" name="prixv" value={{ $stock->Prix_vente }} class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Date expiration </label>
                        <input type="date" name="exp" value={{ $stock->Date_exp }} class="form-control">
                    </div>
                </div>
                <div class="my-2 d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary col-2">Modifier</button>
                </div>
            </form>
        </div>
    </div>
    <script></script>
@endsection
