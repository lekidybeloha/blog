<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function add($data)
    {
        return Category::firstOrCreate($data);
    }

    public  function update($category , $data)
    {
        return $category->update($data);
    }

    public function delete($category)
    {
        return $category->delete();
    }
}
