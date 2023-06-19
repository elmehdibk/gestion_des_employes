<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($email=null)
    {
        $employes=array();
        if($email==null){
            $employes=Employe::all();
        }
        else{

            $employes=Employe::where('email','=', $email)->get();
        }
        
        return view('employe.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        //     $table->string('prenom');
        //     $table->string('adresse');
        //     $table->date('date_naissance');
        //     $table->string('email');
        //     $table->string('telephone');

        $formFildes=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'date_naissance'=>'date',
            'email'=>'required',
            'telephone'=>'required|numeric|min:10',
        ]);
        // dd($formFildes);
        
        Employe::create($formFildes);
        return to_route('employes.create')->with('success',"L'employé est enregistré");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Employe $employe)
    {
        return view('employe.show',compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employe $employe)
    {
        return view('employe.edit',compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employe $employe)
    {
        $formFildes=$request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'date_naissance'=>'date',
            'email'=>'required',
            'telephone'=>'required|numeric|min:10',
        ]);
        // dd($formFildes);
       
        $employe->fill($formFildes)->save();
        return to_route('employes.index',$employe->id)->with('success',"L'employé est modifier");

    }

    /**
     * Remove the specified resource from storage.
     */
        public function verification(Employe $employe){
                return view('employe.verification',compact('employe'));
        } 

    public function destroy($id)
    {
        $employe=Employe::find($id);
        $employe->delete();
        return to_route('employes.index')->with('success',"L'employé est supprimé");
    }

}