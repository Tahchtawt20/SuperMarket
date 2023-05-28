<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SuperM>
 */
class SuperMFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categorie=["Produits laitiers","Viandes et volailles",
        "Boulangerie et patisserie","Poissons et fruit de mer",
        "Fruits et légumes","Surgelés","Les céréales et les pattes",
        "Boissons","Produits d'hygiène","Entretien ménager",
        "Alimentation pour animaux","Bébés et enfants"];

        $unite=["Kilogramme (kg)","Gramme (g)","Litre (L)","Millilitre (mL)",
        "Pièce (pc)","Paquet (pkg)","Bouteille (btl)","Sachet (sach)","Boîte (box)"];
        
        return [
            'Nom_Prod' => fake()->word(),
            'categorie' => fake()->randomElement($categorie),
            'Quantité' => fake()->numberBetween(1, 100),
            'Unité' => fake()->randomElement($unite),
            'Date_liv'=>fake()->date(),
            'Prix_achat' => fake()->randomFloat(2,1,99),
            'Prix_vente' => fake()->randomFloat(2,2,100),
            'Date_exp' => fake()->date()
            
        ];
    }
}
