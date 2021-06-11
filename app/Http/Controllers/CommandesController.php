<?php

namespace App\Http\Controllers;
use App\Models\Commande;
use Illuminate\Http\Request;

class CommandesController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  $request->validate([
        'name'=>'required',
        'couleur1'=>'required',
        'couleur2'=>'required',
        'tamplate'=>'required',
        'type'=>'required',
        'pack'=>'required',
        'police'=>'required',
        'description'=>'required',

    ]);
        
        $commandes =new Commande;
        $commandes->name=$request->input('name');
        $commandes->couleur=$request->input('couleur1');
        $commandes->couleur1=$request->input('couleur2');
        $commandes->tamplate=$request->input('tamplate');
        $commandes->type=$request->input('type');
        $commandes->police=$request->input('police');
        $commandes->packes_id=$request->input('pack');
        $commandes->description=$request->input('description');
        $commandes->user_id=Auth()->user()->id;
        $commandes->service_id='001';
        $commandes->save();
        $commandes->id;
       
        //redirect view('rendezvous')->with('id',$commandes->id)
        return redirect('rendezvouss')->with('id',$commandes->id);
    
    }
    
    //protected function makeRDV(id)
    public function commandeapp(Request $request)
    {  $request->validate([
        'name'=>'required',
        'couleur1'=>'required',
        'couleur2'=>'required',
        'tamplate'=>'required',
        'type'=>'required',
        'pack'=>'required',
        'police'=>'required',
        'description'=>'required',

    ]);
        
        $commandes =new Commande;
        $commandes->name=$request->input('name');
        $commandes->couleur=$request->input('couleur1');
        $commandes->couleur1=$request->input('couleur2');
        $commandes->tamplate=$request->input('tamplate');
        $commandes->type=$request->input('type');
        $commandes->police=$request->input('police');
        $commandes->packes_id=$request->input('pack');
        $commandes->description=$request->input('description');
        $commandes->user_id=Auth()->user()->id;
        $commandes->service_id='002';
        $commandes->save();
        $commandes->id;
       
        //redirect view('rendezvous')->with('id',$commandes->id)
        return redirect('rendezvouss')->with('id',$commandes->id);
    }
    public function commandedesign(Request $request)

    { 
        $request->validate([
        'name'=>'required',
        'couleur1'=>'required',
        'couleur2'=>'required',
        'type'=>'required',
        'pack'=>'required',
        'police'=>'required',
        'description'=>'required',

    ]);
        
        $commandes =new Commande;
        $commandes->name=$request->input('name');
        $commandes->couleur=$request->input('couleur1');
        $commandes->couleur1=$request->input('couleur2');
        $commandes->tamplate='NULL';
        $commandes->type=$request->input('type');
        $commandes->police=$request->input('police');
        $commandes->packes_id=$request->input('pack');
        $commandes->description=$request->input('description');
        $commandes->user_id=Auth()->user()->id;
        $commandes->service_id='003';
        $commandes->save();
        $commandes->id;
       
       
        return redirect('rendezvouss')->with('id',$commandes->id);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function show(commandes $commandes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function edit(commandes $commandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commandes $commandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commandes  $commandes
     * @return \Illuminate\Http\Response
     */
    public function destroy(commandes $commandes)
    {
        //
    }
}
