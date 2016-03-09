<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /category
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /category/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /category
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /category/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /category/{id}/edit
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
	 * PUT /category/{id}
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
	 * DELETE /category/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getSubCategory($id)
	{
		try {
			$category_ids = CategoryMap::whereCategoryId($id)->lists('sub_category_id');
			$categories = Category::whereIn('id', $category_ids)->get();
			$data['categories'] = $categories;
			return $this->response($data);

		} catch (Exception $e) {
			return $e->getMessage();
		}
		
	}

	public function response($message, $code = 200){
		$data = [
			'data' => $message,
			'code' => $code
		];
		return Response::json($data, $code);
	}

	public function responseError($message = "Something Went Wrong", $code = 400){
		$data = [
			'error' => $message,
			'code' => $code
		];
		return Response::json($data, $code);
	}

	
}