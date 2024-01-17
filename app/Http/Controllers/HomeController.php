<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les 4 premières catégories pour la section "Top Categories"
        $topCategories = $this->getTopCategories();

        // Récupérer toutes les catégories pour le filtre
        $productCategories = $this->getAllCategories();

        // Récupérer quelques produits pour la section "Products"
        $products = Product::limit(6)->orderBy('created_at', 'desc')->get();

        // Passer les données à la vue
        return view('home', compact('topCategories', 'productCategories', 'products'));
    }

    public function filterByCategory(Request $request)
    {
        // Récupérer l'ID de la catégorie sélectionnée
        $categoryId = $request->input('product_cat');

        // Récupérer les catégories pour la section "Top Categories"
        $topCategories = $this->getTopCategories();

        // Récupérer toutes les catégories pour le filtre
        $productCategories = $this->getAllCategories();

        // Si une catégorie est sélectionnée, récupérer les produits correspondants
        if ($categoryId) {
            $filteredProducts = Product::where('category_id', $categoryId)->get();
        } else {
            // Sinon, récupérer tous les produits
            $filteredProducts = Product::limit(6)->orderBy('created_at', 'desc')->get();
        }

        // Passer les données à la vue
        return view('home', compact('topCategories', 'productCategories', 'filteredProducts'));
    }

    private function getTopCategories()
    {
        return Category::limit(4)->orderBy('name', 'asc')->get();
    }

    private function getAllCategories()
    {
        return Category::orderBy('name', 'asc')->get();
    }
}
