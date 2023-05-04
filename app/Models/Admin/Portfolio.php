<?php

namespace App\Models\Admin;

use App\Models\Admin\Category;
use App\Models\Admin\PortfolioImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->hasMany(PortfolioImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
