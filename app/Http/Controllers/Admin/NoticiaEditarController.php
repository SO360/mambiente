<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\image_depots;
use App\presses;
use Illuminate\Http\Request;

class NoticiaEditarController extends Controller {
	/**
	 * Display a listing of the resource.
	 *s
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$sta = presses::where('url_title_id', $_GET['id'])->get();
		return view('prensa.noticia.noticiaEditar', ['value' => $sta]);
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
		$id = $request->input('idV');
		$sta = presses::where('id', $id)->get();
		$newT = $request->input('title_entre');
		$newD = $request->input('message');
		$newIp = $request->file('f_principal');
		$newIs = $request->file('f_secundaria');

		$date = date_create($request->input('f_date'));
		$f_date = date_format($date, "Y/m/d");

		if ($request->get('optradio') == 'N') {
			$type = 0;
		} else {
			$type = 1;
		}

		if ($type != $sta[0]->type_id) {
			$pres = presses::where('id', $id)->update(['type_id' => $type]);
		}

		if ($newT != $sta[0]->title) {
			$pres = presses::where('id', $id)->update(['title' => $newT]);
		}
		if ($newD != $sta[0]->description) {
			$pres = presses::where('id', $id)->update(['description' => $newD]);
		}
		if (empty($newIp)) {

		} else {
			$newName = str_random(100); // crea nuevo nombre
			$guessFileExtension = $newIp->guessExtension();
			$path = $newIp->move('img', $newName . '.' . $guessFileExtension);
			$pres = image_depots::where('id', $request->input('url_p'))->update(['path' => $path]);
		}
		if (empty($newIs)) {
			//
		} else {
			$newName = str_random(100); // crea nuevo nombre
			$guessFileExtension = $newIs->guessExtension();
			$path = $newIs->move('img', $newName . '.' . $guessFileExtension);
			$pres = image_depots::where('id', $request->input('url_f'))->update(['path' => $path]);
		}
		if ($f_date != $sta[0]->public) {
			$pres = presses::where('id', $id)->update(['publish' => $f_date]);
		}

		return view('prensa.noticia.noticiaS');
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
