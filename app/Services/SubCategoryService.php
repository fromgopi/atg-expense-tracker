<?php

namespace App\Services;
use App\Exceptions\DatabaseException;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Log;

class SubCategoryService
{
    /**
     * @throws DatabaseException
     */
    public function get_all_sub_categories(){
        try {
            $res = SubCategory::select('sub_category.id', 'sub_category.name as sub_category', 'category.name as category')
                ->leftjoin('category', 'category.id', '=', 'sub_category.category_id');
            Log::info($res->toSql());
            return $res->get();
        } catch (\Exception $e) {
            throw new DatabaseException();
        }
    }

    /**
     * Method to create sub category and tag it under a category
     */
    public function create_sub_category() {
    }
}
