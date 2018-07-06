<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use Input;
use App\Item;
use App\User;
use App\Models\Comment;
use App\Models\Article;
use DB;
use Excel;
class MaatwebsiteDemoController extends Controller
{
	public function importExport()
	{
		return view('importExport');
	}
	public function downloadExcel($type)
	{
		$data = user::get()->toArray();
		return Excel::create('Informe1', function($excel) use ($data) {
			$excel->sheet('Hoja1', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function downloadExcelarticulos($type)
	{
		$data = article::get()->toArray();
		return Excel::create('Informe1', function($excel) use ($data) {
			$excel->sheet('Hoja1', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function downloadExcelcomentarios($type)
	{
		$data = comment::get()->toArray();
		return Excel::create('Informe1', function($excel) use ($data) {
			$excel->sheet('Hoja1', function($sheet) use ($data)
	        {
				$sheet->fromArray($data);
	        });
		})->download($type);
	}
	public function importExcel()
	{
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
			$data = Excel::load($path, function($reader) {
			})->get();
			if(!empty($data) && $data->count()){
				foreach ($data as $key => $value) {
					$insert[] = ['title' => $value->title, 'description' => $value->description];
				}
				if(!empty($insert)){
					DB::table('items')->insert($insert);
					dd('Insertado correctamente.');
				}
			}
		}
		return back();
	}
}
