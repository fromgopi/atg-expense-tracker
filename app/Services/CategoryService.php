<?php
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

/**
 * Category Service
 */
class CategoryService
{

    protected $category_model;

    public function __construct()
    {
        $this->category_model = new Category();
    }

    public function create_category($paylod = [])
    {
        Log::info($paylod);
    }
}
