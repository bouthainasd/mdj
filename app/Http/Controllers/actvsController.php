<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\actvs; //add Student Model - Data is coming from the database via Model.
 
class actvsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activites = actvs::all();
        return view ('admin.activites.index')->with('actvs', $activites);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activites.create');
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        actvs::create($input);
        return redirect('admin/activites')->with('flash_message', 'activites Addedd!');  
    }
 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activites = actvs::find($id);
        return view('admin.activites.show')->with('activites', $activites);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activites = actvs::find($id);
        return view('admin.activites.edit')->with('activites', $activites);
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $activites = actvs::find($id);
        $input = $request->all();
        $activites->update($input);
        return redirect('admin/activites')->with('flash_message', 'activites Updated!');  
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        actvs::destroy($id);
        return redirect('admin/activites')->with('flash_message', 'activites deleted!');  
    }
}