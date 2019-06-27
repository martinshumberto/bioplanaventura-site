<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\BackendController;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Configuracoes;
use Validator;

class ConfiguracoesController extends BackendController
{
	  /**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{

		$configuracoes = Configuracoes::orderBy("site_id", "DESC");

		if($request->input('title'))
		{
			 $configuracoes->where('title', 'like','%'.$request->input('title').'%');
		}

		if($request->input('status'))
		{
			 $configuracoes->where('status', 'like','%'.$request->input('status').'%');
		}
		return view("backend/configuracoes/index", array(
			"configuracoes" => $configuracoes->first()
		));

	}

	  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	public function store(Request $request)
	{

		$validator = Validator::make($request->input(),[
			'title' => 'required'
		]);

		$nicenames = array(
			'title' => 'titulo'
		);

		$validator->setAttributeNames($nicenames);

		if($validator->fails())
		{
			return redirect(route('backend-configuracoes'))->withErrors($validator->messages())->withInput();
		}

		try{
			if($request->hasFile('file-send')) {

                $file = $request->file('file-send');
                $input['imagename'] = md5(time()).'.'.$file->getClientOriginalExtension();
                $name_img = md5(time()).'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('storage/files/');
                $file->move($destinationPath, $input['imagename']);
                $request->merge(array(
                    'arquivo' =>  $name_img,
                ));
			}
			
			
			Configuracoes::create(array_filter($request->all()));
			return redirect(route('backend-configuracoes'));
			$request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Slide cadastrado com sucesso!'));
			
		} catch(Exception $e) {
			$request->session()->flash('alert', array('code'=>'error','text' =>$e));
			return redirect(route('backend-configuracoes'));
		}

	}

	    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function update(Request $request, $id)
	{

	   	$validator = Validator::make($request->input(),[
	   		'title'  => 'required'
	   	]);

	   	$nicenames = array(
	   		'title' =>'título'
	   	);

	   	$validator->setAttributeNames($nicenames);

	   	if($validator->fails()){
	   		return redirect(route('backend-configuracoes'))->withErrors($validator->messages())->withInput();
	   	}

	   	try{

            Configuracoes::find($id)->update($request->except("image"));
	   		$request->session()->flash('alert', array('code'=>'sucess', 'text' =>'Operação realizada com sucesso'));

	   	} catch(Exception $e) {
	   		 $request->session()->flash('alert', array('code' => 'error', 'text' => $e));
	   	}

	   	return redirect(route('backend-configuracoes'));
	}

}

