<?php

namespace App\Models\Admin;

use App\Models\Admin\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortfolioImage extends Model
{
    use HasFactory;

    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
