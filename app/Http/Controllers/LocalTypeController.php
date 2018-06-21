<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local_Type;

class LocalTypeController extends Controller
{
    public function adminAllLocalTypes() {
        $localTypes = Local_Type::All();
        
        return view('admin.listing.local_types', ['localTypes' => $localTypes]);
    }

    public function adminLocalType(Local_Type $localType) {
        
        return view('admin.detail.local_type', ['localType' => $localType]);
    }

    public function adminLocalTypeUpdate(Request $request, Local_Type $localType) {
        
        $localType->label = $request->label;
        $localType->description = $request->description;

        $localType->save();

        $request->session()->flash('success', 'Vos modifications ont bien été prises en compte.');

        return back();
    }

    public function adminLocalTypeDestroy($id) {
        // En attente car peut-être pas à faire
    }
}
