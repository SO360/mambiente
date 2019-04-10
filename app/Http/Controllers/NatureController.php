<?php

namespace App\Http\Controllers;

use App\presses;
use Illuminate\Http\Request;

class NatureController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$prees = presses::where([['type_id', 0], ['status', 0]])->orderBy('publish', 'desc')->take(3)->get();
		return view('tree', ['prees' => $prees]);
	}

	public function showMedia() {
		$prees = presses::where([['type_id', 4], ['status', 0]])->orderBy('publish', 'desc')->orderBy('id', 'desc')->get();
		return view('web.media', ['prees' => $prees]);
	}

	public function showMediaPress() {
		return view('web.media_press');
	}

	public function showPress() {
		$prees = presses::where([['type_id', 3], ['status', 0]])->orderBy('publish', 'desc')->orderBy('id', 'desc')->get();
		return view('web.press', ['prees' => $prees]);
	}

	public function showPicture() {
		return view('web.picture');
	}

	public function contenido($slug) {

		$prees = presses::where('slug', $slug)->get();
		$pre = $prees[0];
		return view('web.contenido', ['value' => $pre]);
	}

	public function showNational() {
		$prees = presses::where([['type_id', 0], ['status', 0]])->orderBy('publish', 'desc')->orderBy('id', 'desc')->get();
		//return $prees->users_link;
		return view('web.national', ['prees' => $prees]);
	}

	public function showNationalPress() {
		return view('web.national_press');
	}

	public function showInternational() {

		$prees = presses::where([['type_id', 1], ['status', 0]])->orderBy('publish', 'desc')->orderBy('id', 'desc')->get();

		return view('web.international', ['prees' => $prees]);

	}

	public function showInternationalPress() {
		return view('web.international_press');
	}

	public function contact() {
		return view('web.contact2');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}

}
