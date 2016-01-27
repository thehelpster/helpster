<?php
use Imanee\Imanee;
class OrganizationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$organizations = Organization::paginate(5);

		return View::make('organization.index')->with('organizations', $organizations);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('organization.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$organization = new Organization();

		return $this->validateAndSave($organization);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$organization = Organization::find($id);
		
		if(!$organization){
			App::abort(404);
		}
		return View::make('organization.show')->with('organization', $organization);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('organization.edit');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$organization = Organization::find($id);

		return $this->validateAndSave($organization);	
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$organization = Organization::find($id);
		$organization->delete();
		Session::flash('successMessage', 'Your delete was successful.');
		return Redirect::action('OrganizationsController@index');
	}

	public function validateAndSave($organization)
	{
	    $validator = Validator::make(Input::all(), Organization::$rules);

		if ($validator->fails()) { dd($validator->messages());
	    return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$organization->name = Input::get('name');
			$organization->description = Input::get('description');
			Input::file('image')->move(__DIR__.'/../../public/images/organizations', Input::file('image')->getClientOriginalName());
			$image = new Imanee(__DIR__.'/../../public/images/organizations/'.Input::file('image')->getClientOriginalName());
			$image->resize(200,150)->write(__DIR__.'/../../public/images/organizations/'.Input::file('image')->getClientOriginalName());
			$organization->image = Input::file('image')->getClientOriginalName();
			$organization->website = Input::get('website');
			$organization->user_id = Input::get('user_id');


			$result = $organization->save();

			if($result) {
				return Redirect::action('OrganizationsController@show', $organization->id);
			} else {
				return Redirect::back()->withInput();
			}
		}

	}
}
