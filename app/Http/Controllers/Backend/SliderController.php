<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\BackendController;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\Slider;

class SliderController extends BackendController
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $slider = Slider::orderBy("slider_id", "DESC");

        if($request->input('search'))
        {
           $slider->where('title', 'like', '%'.$request->input('search').'%');
        }

        return view("backend/slider/index", array(
            "slider" => $slider->paginate(50)
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend/slider/show");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            if($request->hasFile('file-send')) {

                $file = $request->file('file-send');
                $input['imagename'] = md5(time()).'.'.$file->getClientOriginalExtension();
                $name_img = md5(time()).'.'.$file->getClientOriginalExtension();
                $destinationPath = public_path('storage/files/');
                $file->move($destinationPath, $input['imagename']);
                $request->merge(array(
                    'file' =>  $name_img,
                ));
            }

            $slider = Slider::create($request->all());
            return redirect(route('backend-slider', $slider->slider_id));
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Slide cadastrado com sucesso!'));
        } catch (Exception $e) {
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
            return redirect(route('backend-slider'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider = Slider::find($id);

        if (empty($slider)) {
            abort(404);
        }

        return view("backend/slider/show", array(
            "slider" => $slider
        ));
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

        try {

            Slider::find($id)->update($request->except("image"));
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
        } catch (Exception $e) {
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
        }

        return redirect(route('backend-slider'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            $slider = Slider::find($id);


            if(empty($slider)) {
                abort(404);
            }

            $slider->delete();
            $request->session()->flash('alert', array('code'=> 'success', 'text'  => 'Operação realizada com sucesso!'));
        } catch (Exception $e) {
            $request->session()->flash('alert', array('code'=> 'error', 'text'  => $e));
        }

        return redirect(route('backend-slider'));
    }
}
