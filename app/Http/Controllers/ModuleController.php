<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Module;
use App\Module_Type;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAllModules()
    {
        $modules = Module::All();
        return view('admin.listing.modules', ['modules' => $modules]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getOneModule(Module $module)
    {
        $moduleTypes = Module_Type::All();

        return view('admin.detail.module', ['module' => $module, 'moduleTypes' => $moduleTypes]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateModule(Request $request, Module $module)
    {
        $module->label = $request->label;
        $module->price = $request->price;
        $module->type_id = $request->type;
        $module->description = $request->description;

        $module->save();

        $request->session()->flash('success', 'Vos modifications ont bien été prises en compte.');

        return redirect()->route('admin_module', ['module' => $module]);
    }

    public function destroyModule(Module $module)
    {
        Module::destroy($module->id);
        return back();
    }
}
