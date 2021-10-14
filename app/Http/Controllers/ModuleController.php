<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreModulesData;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listmodule= \App\Models\Module::all();
        return view("aff",compact("listmodule"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajout');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreModulesData $request) //3eme methode

    //Request $request ->1/2 methode
    {

        // request()->validate([ ->1er methode
        //     'Nom_Module' => 'required',
        //     'duree' => 'required',
        //     'description' => 'required',

        // ]);

        
        // Validator::make($request->all(), [ ->2eme methode

        //     'Nom_Module' => 'required',
        //     'duree' => 'required',
        //      'description' => 'required'
            
        //     ])->validate();
        $validated = $request->validated();

        Module::create([
            'Nom_Module' => request('Nom_Module'),
            'duree' => request('duree'),
            'description' => request('description')

        ]);

        return redirect('/aff');
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        $module = \App\Models\Module::find($request->id);
        return View('edit',compact('module'));
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

        Module::where('id', $id)->update($request->all());
        return redirect('aff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = \App\Models\Module::find($id);
        $module->delete();
        return redirect()->route('module.aff')
            ->with('success','Module deleted successfully.');;
        //
    }
}
