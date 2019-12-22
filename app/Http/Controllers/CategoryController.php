<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;

class CategoryController extends BaseController
{

    public function index()
    {
        $categories = Category::all();
        return $this->sendResponse($categories,"LIST OF CATEGORIES SUCCESSFULLY RETRIEVED",200);
    }

    public function store(StoreRequest $request)
    {
        $category = Category::create($request->all());
        return $this->sendResponse($category,"CREATED CATEGORY",201);
    }

    public function show(Category $category)
    {
        return $this->sendResponse($category,"RETRIEVED CATEGORY",200);
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $category->update($request->all());
        return $this->sendResponse($category,"UPDATED CATEGORY",201);
    }
    
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->sendResponse($category,"DELETED CATEGORY",200);
    }
}
