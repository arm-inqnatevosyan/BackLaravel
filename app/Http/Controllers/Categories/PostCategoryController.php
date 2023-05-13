<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class PostCategoryController extends BaseController
{
    public function __invoke(CategoryRequest $request){ 
        $contact = new Category();
        $contact->id = $request->input('id');
        $contact->title = $request->input('title');

        $contact->save();

        return $this->sendSuccess($contact,'success');
    }
}
