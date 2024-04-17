<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class MuseumController extends Controller
{
         /**
      * List all museums
      */
      public function index()
      {
        return view('museum.index', ['museums' => Museum::all()]);
      }

      /**
     * Show the form for creating a new resource.
     */
    public function add()
    {
        return view ('museum.add');
    }

    public function create()
    {
        $attributes = request()->validate(
            [
            'name'=> 'required',
            'image'=> 'nullable|mimes:png,jpg,jpeg,webp',
            'address'=>'required',
            'type'=> 'required',
            'summary'=>'required',
            'phone' =>'required',
            'url' => 'required',
            'postalcode'=>'required',
            'ward'=>'required'
            ]
        );
        $museum = new Museum();
        if(request()->has('image')){
            $file=request()->file('image');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path ='uploads/museum/';
            $file->move($path,$filename);
          
        $museum->name = $attributes['name'];
        $museum->image=$path.$filename; 
        $museum->address = $attributes['address'];
        $museum->type = $attributes['type'];
        $museum->summary = $attributes['summary'];
        $museum->phone = $attributes['phone'];
        $museum->url = $attributes['url'];
        $museum->postalcode = $attributes['postalcode'];
        $museum->ward = $attributes['ward'];
        $museum->save();
        return redirect('/museum/index')
        ->with('message','Museum has been added');
        }
        else{

        $museum->name = $attributes['name'];
        $museum->image='';
        $museum->address = $attributes['address'];
        $museum->type = $attributes['type'];
        $museum->summary = $attributes['summary'];
        $museum->phone = $attributes['phone'];
        $museum->url = $attributes['url'];
        $museum->postalcode = $attributes['postalcode'];
        $museum->ward = $attributes['ward'];
        $museum->save();
        return redirect('/museum/index')
        ->with('message','Museum has been added');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Museum $museum)
    {
        return view('museum.edit', ['museum' => $museum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Museum $museum)
    {
        $attributes = request()->validate(
            [
            'name'=> 'required',
            'image'=> 'nullable|mimes:png,jpg,jpeg,webp',
            'address'=>'required',
            'type'=> 'required',
            'summary'=>'required',
            'phone' =>'required',
            'url' => 'required',
            'postalcode'=>'required',
            'ward'=>'required'
            ]
        );
        if(request()->has('image')){
            $file=request()->file('image');
            $name = $file->getClientOriginalExtension();

            $filename = time().'.'.$name;
            $path ='uploads/museum/';
            $file->move($path,$filename);
        
            if(File::exists($museum->image))
            {
                File::delete($museum->image);
            }
            $attributes['image']=$path.$filename;
        }
        $museum->update($attributes);

        return redirect('/museum/index')
        ->with('message','Museum has been updated');
        
    }

        /**
     * delete
     */
    public function delete(Museum $museum)
    {
        $museum->delete();
        return redirect('/museum/index')
        -> with('message','Museum has been deleted ');
    }

}
