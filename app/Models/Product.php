<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Le nom de la table associée au modèle
    protected $table = 'products';

    // Les colonnes qui peuvent être attribuées en masse (par exemple, lors de l'utilisation de Eloquent create)
    protected $fillable = ['name', 'description', 'price', 'category_id', 'image_path'];

    // Les colonnes que vous ne voulez pas permettre d'assignation en masse
    protected $guarded = ['id'];

    // Relation avec la catégorie
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
