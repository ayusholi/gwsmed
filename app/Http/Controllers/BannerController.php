<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $banners=Banner::orderBy('id','DESC')->get();
        return view('backend.banners.index',compact('banners'));
    }

    public function bannerStatus(Request $request){
        if($request->mode=='true'){
            DB::table('banners')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('banners')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'Successfully updated status','status'=>true]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'string|nullable',
            'slug'=>'url|nullable',
            'photo'=>'required|image|mimes:png,jpg,gif,jpeg,svg',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        if($request->hasFile('photo')){
            if($file=$request->file('photo')){
                $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                $file->storeAs('public/backend/assets/images/banner/', $imageName);
                $data['photo']=$imageName;
                $data['image_path']='storage/backend/assets/images/banner/'.$imageName;
            }
        }
        $status=Banner::create($data);
        if($status){
            return redirect()->route('banner.index')->with('success','Successfully created banner');
        }
        else{
            return back()->with('error','Something went wrong!');
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
        $banner=Banner::find($id);
        if($banner){
            return view('backend.banners.edit',compact('banner'));
        }
        else{
            return back()->with('error','Data not found');
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
        $banner=Banner::find($id);
        if($banner){
            $this->validate($request,[
                'title'=>'string|nullable',
                'slug'=>'url|nullable',
                'photo'=>'nullable|image|mimes:png,jpg,gif,jpeg,svg',
            ]);
            $data=$request->all();

            if($request->hasFile('photo')){
                if($file=$request->file('photo')){
                    $imageName = time() ."-". str_replace(' ', '-', $file->getClientOriginalName());
                    $file->storeAs('public/backend/assets/images/banner/', $imageName);
                    $data['photo']=$imageName;
                    $data['image_path']='storage/backend/assets/images/banner/'.$imageName;
                }
            }

            $status=$banner->fill($data)->save();
            if($status){
                return redirect()->route('banner.index')->with('success','Successfully updated banner');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::find($id);
        if($banner){
            $status=$banner->delete();
            if($status){
                return redirect()->route('banner.index')->with('success','Banner successfully deleted');
            }
            else{
                return back()->with('error','Something went wrong!');
            }
        }
        else{
            return back()->with('error','Data not found');
        }
    }
}
