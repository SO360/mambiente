<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\presses;
use Illuminate\Http\Request;

class DisplayDataController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//

		$register = presses::where('type_id', 0)->orderBy('publish', 'desc')->get();
		$con = 1;
		return datatables($register)
			->addColumn('id', function ($val) use (&$con) {
				return $con++;
			})
			->addColumn('title', function ($val) {
				return substr($val->title, 0, 40) . '...';
			})->addColumn('fecha', function ($val) {
			return ucfirst(strtolower($val->publish));
		})->addColumn('estado', function ($val) {
			if ($val->status == 0) {
				return "Habilitado";
			} else {
				return "Deshabilitado";
			}

		})->addColumn('delate', function ($val) {
			return "<button type='button' id='eliminar' height='90' class='" . $val->id . "'>Eliminar</button>";
		})->rawColumns(['delate'])->make(true);

	}

	public function internacional() {
		$register = presses::where('type_id', 1)->orderBy('publish', 'desc')->get();
		$con = 1;
		return datatables($register)
			->addColumn('id', function ($val) use (&$con) {
				return $con++;
			})
			->addColumn('title', function ($val) {
				return substr($val->title, 0, 40) . '...';
			})->addColumn('fecha', function ($val) {
			return ucfirst(strtolower($val->publish));
		})->addColumn('estado', function ($val) {
			if ($val->status == 0) {
				return "Habilitado";
			} else {
				return "Deshabilitado";
			}

		})->addColumn('delate', function ($val) {
			return "<button type='button' id='" . $val->id . "' height='90' class='btn btn-block btn-primary btn-lg eliminar'>Eliminar</button>";
		})->rawColumns(['delate'])->make(true);
	}

	public function statusEdit() {
		$id = $_GET['id'];
		$sta = presses::where('url_title_id', $id)->get();
		if ($sta[0]->status == 0) {
			$pres = presses::where('url_title_id', $id)->update(['status' => 1]);

			return response()->json($sta);

		} else {
			$pres = presses::where('url_title_id', $id)->update(['status' => 0]);
			return response()->json($sta);
		}
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
		return view('prensa.noticia.noticiaS');
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
		//return presses::where("id", $id)->update("status", 1);

		return 0;

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
