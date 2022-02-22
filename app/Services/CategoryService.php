<?php
namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Log;

/**
 * Category Service
 */
class CategoryService
{

    protected $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new Category();
    }

    function get_all_categories()
    {
        $categoryData = $this->categoryModel->get();
        Log::info(' this is  '. $categoryData);
        return $categoryData;
    }

    /**
     * @param $paylod
     * @return void
     *  
     */
    public function create_category($paylod = [])
    {
        Log::info($paylod);
    }
}
