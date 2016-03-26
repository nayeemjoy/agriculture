<?php

class PageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /page
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = $this->getCategories();
		return View::make('home')
			->with('title','Agriculture - Home')
			->with('categories',$categories);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /page/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	public function getCategories()
	{
		$category = Category::whereIsMain(1)->get();
		foreach ($category as $key) {
			$category_ids = CategoryMap::whereCategoryId($key->id)->lists('sub_category_id');
			$sub_categories = Category::whereIn('id', $category_ids)->get();
			foreach ($sub_categories as $sub_categorie) {
				$sub_categorie->total = Post::whereSubCategoryId($sub_categorie->id)->get()->count();
			}
			$key->sub_categories = $sub_categories;
		}
		return $category;
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /page
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /page/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id = 1)
	{
		$post = Post::find($id);
		$categories = $this->getCategories();
		return View::make('details')
		->with('title','Agriculture - Details')
			->with('categories',$categories)
			->with('post',$post);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /page/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /page/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /page/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}