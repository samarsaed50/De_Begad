<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\User;
use App\Category;
use League\Flysystem\Filesystem;
use Auth;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $info=Article::with('user')->get(); 
      return view('info.index',['info'=>$info]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories=Category::all(); 
       return view('info.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('image')){
            //get file name with ext
             $fileNameWithExt=$request->file('image')->getClientOriginalName();
            //get file name only and turn it into string
              $fileName=implode(" ",pathinfo($fileNameWithExt));
             
             
            //get file ext only
              $extension=$request->file('image')->getClientOriginalExtension();
              
            //new file name
            $fileNameToStore=$fileName."_".time().".".$extension;
             
              //upload image
              $path=$request->file('image')->storeAs('public/images',$fileNameToStore);
         }else{
             $fileNameToStore="avatar.jpg";
             
         } 
         $userId=Auth::user()->id; 
         $typeId=1;
         Article::create([
           'title'=>$request->title,
           'description'=>$request->description,
           'type_id'=>$typeId,
           'user_id'=>$userId,
           'category_id'=>$request->category_id,     
           'image'=>$fileNameToStore,   
         ]); 
       return redirect(route('info.index'));       
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
