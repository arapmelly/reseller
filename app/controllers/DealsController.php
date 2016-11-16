<?php

class DealsController extends \BaseController {

	/**
	 * Display a listing of deals
	 *
	 * @return Response
	 */
	public function index()
	{
		$deals = Deal::all();

		return View::make('deals.index', compact('deals'));
	}

	/**
	 * Show the form for creating a new deal
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('deals.create');
	}

	/**
	 * Store a newly created deal in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Deal::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Deal::add($data);

		return Redirect::route('deals.index');
	}

	/**
	 * Display the specified deal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$deal = Deal::findOrFail($id);

		return View::make('deals.show', compact('deal'));
	}

	/**
	 * Show the form for editing the specified deal.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$deal = Deal::find($id);

		return View::make('deals.edit', compact('deal'));
	}

	/**
	 * Update the specified deal in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update()
	{
		

		$validator = Validator::make($data = Input::all(), Deal::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Deal::edit($data);

		return Redirect::route('deals.index');
	}

	/**
	 * Remove the specified deal from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Deal::destroy($id);

		return Redirect::route('deals.index');
	}

}
