<?php

namespace App\Http\Controllers\Admin;

use App\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Support\Facades\Storage; //Laravel Filesystem

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_unless(\Gate::allows('settings_access'), 403);

        $aboutus = Aboutus::first();

        return view('admin.aboutus.index', compact('aboutus'));
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
    {
        abort_unless(\Gate::allows('settings_access'), 403);
        
        // Upload image
        $path = null;
        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            $path = $filenametostore;
        }
        $pathimg = null;
        if ($request->hasFile('sec_one_img')) {
            $image = $request->file('sec_one_img');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            $pathimg = $filenametostore;
        }
        $gallery_banner_path = null;
        if ($request->hasFile('gallery_banner')) {
            $image = $request->file('gallery_banner');
            $filenamewithextension = $image->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $image->getClientOriginalExtension();
            $filenametostore = $filename.'_'.uniqid().'.'.$extension;
            Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
            $gallery_banner_path = $filenametostore;
        }

        $aboutus = new Aboutus;
        $aboutus->banner = $path;
        $aboutus->banner_title = $request->banner_title;
        $aboutus->sec_one_title = $request->sec_one_title;
        $aboutus->sec_one_text = $request->sec_one_text;
        $aboutus->sec_one_img = $pathimg;
        $aboutus->sec_two_t1 = $request->sec_two_t1;
        $aboutus->sec_two_desc1 = $request->sec_two_desc1;
        $aboutus->sec_two_t2 = $request->sec_two_t2;
        $aboutus->sec_two_desc2 = $request->sec_two_desc2;
        $aboutus->sec_two_t3 = $request->sec_two_t3;
        $aboutus->sec_two_desc3 = $request->sec_two_desc3;
        $aboutus->gallery_title = $request->gallery_title;
        $aboutus->gallery_subtitle = $request->gallery_subtitle;
        $aboutus->gallery_banner = $gallery_banner_path;
        $aboutus->save();

        return redirect()->route('admin.aboutus.index', compact('aboutus'));
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
        abort_unless(\Gate::allows('settings_access'), 403);

        $aboutus = Aboutus::find($id);
        $pathimg = $aboutus->sec_one_img;
        $path = $aboutus->banner;
        $gallery_banner_path = $aboutus->gallery_banner;
        
       // Upload image
       if ($request->hasFile('banner')) {
           $image = $request->file('banner');
           $filenamewithextension = $image->getClientOriginalName();
           $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
           $extension = $image->getClientOriginalExtension();
           $filenametostore = $filename.'_'.uniqid().'.'.$extension;
           Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
           $path = $filenametostore;
       }
       if ($request->hasFile('sec_one_img')) {
           $image = $request->file('sec_one_img');
           $filenamewithextension = $image->getClientOriginalName();
           $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
           $extension = $image->getClientOriginalExtension();
           $filenametostore = $filename.'_'.uniqid().'.'.$extension;
           Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
           $pathimg = $filenametostore;
       }
       if ($request->hasFile('gallery_banner')) {
           $image = $request->file('gallery_banner');
           $filenamewithextension = $image->getClientOriginalName();
           $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
           $extension = $image->getClientOriginalExtension();
           $filenametostore = $filename.'_'.uniqid().'.'.$extension;
           Storage::put('public/images/banners/'. $filenametostore, fopen($image, 'r+'));
           $gallery_banner_path = $filenametostore;
       }

        $aboutus->banner = $path;
        $aboutus->banner_title = $request->banner_title;
        $aboutus->sec_one_title = $request->sec_one_title;
        $aboutus->sec_one_text = $request->sec_one_text;
        $aboutus->sec_one_img = $pathimg;
        $aboutus->sec_two_t1 = $request->sec_two_t1;
        $aboutus->sec_two_desc1 = $request->sec_two_desc1;
        $aboutus->sec_two_t2 = $request->sec_two_t2;
        $aboutus->sec_two_desc2 = $request->sec_two_desc2;
        $aboutus->sec_two_t3 = $request->sec_two_t3;
        $aboutus->sec_two_desc3 = $request->sec_two_desc3;
        $aboutus->gallery_title = $request->gallery_title;
        $aboutus->gallery_subtitle = $request->gallery_subtitle;
        $aboutus->gallery_banner = $gallery_banner_path;
        $aboutus->save();

        return redirect()->route('admin.aboutus.index', compact('aboutus'));
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
