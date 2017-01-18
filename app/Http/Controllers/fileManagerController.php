<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Filesystem\Filesystem\Filesystem;

use Storage;
use App\Library\PhpId3\Id3TagsReader;

class fileManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$files = Storage::allFiles();
        //$exists = Storage::disk('public')->exists('05 - Tifa no Theme (Piano Version).mp3');
        //dd($exists);
        //05 - Tifa no Theme (Piano Version)
        //$id3 = new Id3TagsReader(fopen("C:\\Users\\peter.leyva\\Documents\\laravel-projects\\rockPie\\public\\music\\01 - Hit The Lights.mp3", "rb"));
        //$files = Storage::disk('public')->get('01 - Hit The Lights.mp3');
       // dd(public_path().'/music/'.'01 - Hit The Lights.mp3');
        $id3 = new Id3TagsReader(fopen(public_path().'/music/'.'01 - Hit The Lights.mp3', 'rb'));
        //$files = Storage::disk('public')

        $id3->readAllTags();
        //dd($id3);

        $files = Storage::disk('public')->allfiles();
        //dd($files);
        //$exists = Storage::disk('public')->exists('file.jpg');
        //
        return view('fileManager');
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
        //
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
