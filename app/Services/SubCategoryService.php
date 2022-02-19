<?php

namespace App\Services;
use App\Exceptions\DatabaseException;
use App\Models\SubCategory;

class SubCategoryService
{

    /**
     * @throws DatabaseException
     */
    public function get_all_sub_categories(){
        try {
            return SubCategory::select('sub_category.idd', 'sub_category', 'category.category_name')
                ->leftjoin('category', 'category.id', '=', 'sub_category.category_id')
                ->get();
        } catch (\Exception $e) {
            throw new DatabaseException("");
        }
    }
}
