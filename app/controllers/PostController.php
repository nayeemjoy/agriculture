<?php

class PostController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /post
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		
		return View::make('post.index')
					->with('posts',$posts)
					->with('title','Posts');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /post/create
	 *
	 * @return Response
	 */
	public function create()
	{	
		//$category_ids = CategoryMap::whereIsMain(1)->lists('sub_category_id');

		$categories = Category::whereIsMain(1)->lists('name','id');
		$category_ids = CategoryMap::whereCategoryId(1)->lists('sub_category_id');
		$sub_categories = Category::whereIn('id', $category_ids)->lists('name','id');
		return View::make('post.create')
					->with('categories',$categories)
					->with('sub_categories',$sub_categories)
					->with('title','Create Post');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /post
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = [

					'title'      => 'required',
					'description'      => 'required',
					'photo' => 'required|image',
					'category_id' => 'required',
					'sub_category_id' => 'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		$img_link = 'uploads/default.jpg';
		if(Input::hasFile('photo')) {
			$file = Input::file('photo');

			$destination = public_path().'/uploads/images/';
			$filename = time().'_'.$file->getClientOriginalName();
			$file->move($destination, $filename);
			$img_link = '/uploads/images/'.$filename;
		}
		$post = new Post();

		$post->title = $data['title'];
		$post->description = $data['description'];
		$post->photo = $img_link;
		$post->category_id = $data['category_id'];
		$post->sub_category_id = $data['sub_category_id'];

		if($post->save()){
			return Redirect::route('post.index')->with('success',"Post Created Successfully");
		}else{
			return Redirect::route('post.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Display the specified resource.
	 * GET /post/{id}
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
	 * GET /post/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		$categories = Category::whereIsMain(1)->lists('name','id');
		$category_ids = CategoryMap::whereCategoryId($post->id)->lists('sub_category_id');
		$sub_categories = Category::whereIn('id', $category_ids)->lists('name','id');
		return View::make('post.edit')
					->with('post',$post)
					->with('categories',$categories)
					->with('sub_categories',$sub_categories)
					->with('title','Edit Post');
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = [

					'title'      => 'required',
					'description'      => 'required',
					'photo' => 'image',
					'category_id' => 'required',
					'sub_category_id' => 'required'
		];

		$data = Input::all();

		$validator = Validator::make($data,$rules);

		if($validator->fails()){
			return Redirect::back()->withInput()->withErrors($validator);
		}
		$post = Post::find($id);
		$img_link = $post->photo;

		if(Input::hasFile('photo')) {
			$file = Input::file('photo');

			$destination = public_path().'/uploads/images/';
			$filename = time().'_'.$file->getClientOriginalName();
			$file->move($destination, $filename);
			$img_link = '/uploads/images/'.$filename;
		}
		

		$post->title = $data['title'];
		$post->description = $data['description'];
		$post->photo = $img_link;
		$post->category_id = $data['category_id'];
		$post->sub_category_id = $data['sub_category_id'];

		if($post->save()){
			return Redirect::route('post.index')->with('success',"Post Updated Successfully");
		}else{
			return Redirect::route('post.index')->with('error',"Something went wrong.Try again");
		}
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /post/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try{
			Post::destroy($id);

			return Redirect::route('post.index')->with('success','Post Deleted Successfully.');

		}catch(Exception $ex){
			
			return Redirect::route('post.index')->with('error','Something went wrong.Try Again.');
		}
	}
	public function posts()
	{
		$posts = Post::orderBy('id', 'desc')->paginate(5);

		return $this->response($posts->toArray());
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