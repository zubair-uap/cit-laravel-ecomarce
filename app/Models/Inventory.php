<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'product_id'];
    function rel_to_product()
    {
        return $this->BelongsTo(Product::class, 'product_id');
    }
    function rel_to_color()
    {
        return $this->BelongsTo(Color::class, 'color_id');
    }
    function rel_to_size()
    {
        return $this->BelongsTo(Size::class, 'size_id');
    }
}
