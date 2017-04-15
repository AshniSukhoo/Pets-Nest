<?php

namespace App\Http\Controllers;

use App\Entity\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  Category $category
     *
     * @return Response
     */
    public function show(Category $category)
    {
        // Get Products of the Category.
        $products = $category->products()->paginate(6);
        // Get Related Categories.
        $relatedCategories = $category->relatedCategories()->get();

        return view('categories.show', [
            'category'          => $category,
            'products'          => $products,
            'relatedCategories' => $relatedCategories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {

    }

}
