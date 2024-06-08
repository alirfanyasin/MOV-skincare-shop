<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProduct = [
            [
                'title' => 'Eye Cream',
                'description' => 'Aqua, Glycerin, Arbutin, Cetearyl Alcohol, Steareth-20, Ethylhexyl Palmitate, Butylene Glycol, Steareth-2, Caprylic/capric Triglyceride, Squalane, Tocopheryl Acetate, Propanediol, Leontopodium Alpinum Callus Culture Extract, Acrylates/c10-30 Alkyl Acrylate Crosspolymer, 1,2-Hexanediol, Sodium Bisulfite, Kojic Acid, Methyl Methacrylate Crosspolymer, Sodium Hydroxide, Sodium Hyaluronate, Tetrasodium EDTA, Caprylhydroxamic Acid, DNA, Retinol, Hydrogenated Lecithin, Cholesterol, Phenoxyethanol, BHT, Xanthan Gum, Phaseolus Radiatus Seed Extract, BHA, Carbomer, Palmitoyl Hexapeptide-12, Potassium Sorbate, Avena Sativa Meal Extract, Sodium Metabisulfite, Biotin',
                'price' => 80000,
                'stock' => 100,
                'discount' => 0,
                'image' => '/mov-assets/product/product-2.png'
            ],
            [
                'title' => 'Sunscreen',
                'description' => 'Aaqua, glycerin^, propanediol, ethylhexyl methoxycinnamate, butyl methoxydibenzoylmethane, aloe barbadensis juice extract^, portulaca oleracea extract^, sodium hyaluronate, niacinamide, cucumis sativus fruit extract^, tea camelia sinensis extract, punica granatum fruit extract^, phenoxyethanol, octocrylene, butylene glycol, sodium acrylates/C10-30 alkyl acrylates crosspolymer, propolis^, piscea abies extract^, allantoin, xanthan gum^, panthenol, disodium EDTA, lechitin (Note: ^Ingredients From Natural Resources).',
                'price' => 98000,
                'stock' => 56,
                'discount' => 20,
                'image' => '/mov-assets/product/product-3.png'
            ],
            [
                'title' => 'Serum',
                'description' => 'Propolis Extract, Butylene Glycol, Niacinamide, Panthenol, 1,2-Hexanediol, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Ethylhexylglycerin, Glycerin, Polyglyceryl-10 Laurate, Polyglyceryl-10 Myristate, Allantoin, Melaleuca Alternifolia (Tea Tree) Leaf Oil, Sodium Hyaluronate, Asiaticoside, Asiatic acid, Madecassic acid, Helianthus Annus (Sunflower) Seed Oil, Macadamia Ternifolia Seed Oil, Sucrose distearate, Glyceryl Strearate, Hydrogenated Lecithin, Dipropylene Glycol, Ceramide NP, rh-Oligopeptide-1',
                'price' => 120000,
                'stock' => 28,
                'discount' => 10,
                'image' => '/mov-assets/product/product-4.png'
            ],
            [
                'title' => 'Moisturizing Facial Wash',
                'description' => 'Water, Cocamidopropyl Betaine, Sodium Lauroyl Methyl Isethionate, Polysorbate 20, Styrax Japonicus Branch/Fruit/Leaf Extract, Butylene Glycol, Saccharomyces Ferment, Cryptomeria Japonica Leaf Extract, Nelumbo Nucifera Leaf Extract, Pinus Palustris Leaf Extract, Ulmus Davidiana Root Extract, Oenothera Biennis (Evening Primrose) Flower Extract, Pueraria Lobata Root Extract, Melaleuca Alternifolia (Tea Tree) Leaf Oil, Allantoin, Caprylyl Glycol, Ethylhexylglycerin, Betaine Salicylate, Citric Acid, Ethyl Hexanediol, 1,2-Hexanediol, Trisodium Ethylenediamine Disuccinate, Sodium Benzoate, Disodium EDTA',
                'price' => 150000,
                'stock' => 71,
                'discount' => 0,
                'image' => '/mov-assets/product/product-5.png'
            ],
            [
                'title' => 'Moisturizing Cream',
                'description' => 'Aqua (Water), Hydrogenated Poly (C6-12 Olefin),Glycerin, Dipropylene Glycol, Caprylic/Capric Triglyceride, PPG-10 Methyl Glucose Ether, PEG-20 Sorbitan Isostearate, Glyceryl Stearate, Stearyl Alcohol, Carbomer, Methylparaben, Sodium Hyaluronate, Behenyl Alcohol, Triethanolamine, Propylparaben, Phytostearyl/Octyldodecyl Lauroyl Glutamate, Disodium EDTA, Arachidyl Alcohol, Stearyl Alcohol, Hydrolyzed Hyaluronic Acid, Sodium Acetylated Hyaluronate (AcHA)',
                'price' => 98000,
                'stock' => 24,
                'discount' => 0,
                'image' => '/mov-assets/product/product-6.png'
            ],
            [
                'title' => 'Lip Mask',
                'description' => 'Bis-Diglyceryl Polyacyladipate-2, Diisostearyl Malate, Tridecyl Trimellitate, Polyisobutene, Pentaerythrityl Tetraisostearate, Caprylic/Capric Triglyceride, Cetyl Ethylhexanoate, Microcrystalline Wax, Butyrospermum Parkii (Shea) Butter, Polyethylene, Polyglyceryl-2 Triisostearate, Euphorbia Cerifera (Candelilla) Wax, Theobroma Cacao (Cocoa) Seed Butter, Parfum, Tocopherol, Camellia Japonica Seed Oil, Carica Papaya Extract, Astaxanthin, Phospholipids, Propylene Glycol, Glycerin, Aqua',
                'price' => 75000,
                'stock' => 230,
                'discount' => 50,
                'image' => '/mov-assets/product/product-7.png'
            ],
            [
                'title' => 'Body Lotion',
                'description' => 'Aqua, Ethylhexyl palmitate, Fragrance (Parfum) Components and Finished Fragrances, Dimethicone, Glycerin, Lactic Acid, Niacinamide, Propylene Glycol, Cetearyl alcohol, Sodium Hydroxide, Butyrospermum Parkii (Shea) Butter, Olea europaea husk oil, Glyceryl Stearate SE, Ceteareth-20, Allantoin, Propanediol, Disodium EDTA, BHT, acrylates/c10-30 alkyl acrylate crosspolymer, Vegetable Oil, Salicylic Acid, Lactobionic acid, Amylopectin, Dextrin, Xanthan gum, Hydrolyzed corn starch, Beta vulgaris root extract, Jasminum officinale flower extract, Ceratonia siliqua fruit extract, Peg-7 Glyceryl cocoate, Ceramide NP, Anisic Acid, Acrylic Acid, Cyclohexane, Phenethyl alcohol, Caprylyl glycol, Phenoxyethanol',
                'price' => 60000,
                'stock' => 19,
                'discount' => 25,
                'image' => '/mov-assets/product/product-8.png'
            ],
            [
                'title' => 'Moisturize',
                'description' => 'Hippophae Rhamnoides Water, Glycerin, Butylene Glycol, Caprylic/Capric Triglyceride, Betaine, Helianthus Annuus (Sunflower) Seed Oil, Cetearyl Alcohol, Cetearyl Olivate, Sorbitan Olivate, Macadamia Ternifolia Seed Oil, 1,2-Hexanediol, Sodium Hyaluronate, Arginine, Panthenol, Dimethicone, Ethylhexylglycerin, Carbomer, Allantoin, Xanthan Gum',
                'price' => 99000,
                'stock' => 34,
                'discount' => 15,
                'image' => '/mov-assets/product/product-9.png'
            ],
        ];


        foreach ($dataProduct as $product) {
            Product::create([
                'title' => $product['title'],
                'slug' =>  Str::slug($product['title'], '-'),
                'description' => $product['description'],
                'price' => $product['price'],
                'stock' => $product['stock'],
                'discount' => $product['discount'],
                'image' => $product['image'],
            ]);
        }
    }
}
