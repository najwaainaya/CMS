<?php

namespace App\Http\Controllers;

use App\Models\FaqPos;
use Illuminate\Http\Request;


class FaqPosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = FaqPos::get();
        return view('pages.diko_pos.faq.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('landing.fitur.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'question' => 'required',
            'answer' => 'required',
            
        ]);

        $post = new FaqPos();
        $post->question = $request->input('question');
        $post->answer = $request->input('answer');

        // Upload dan simpan gambar jika ada
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public');
        //     $post->image = str_replace('public/', '', $imagePath);
        // }

        $post->save();

        return redirect('/pos/faq/list')->with('success', 'Features has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = FaqPos::all();
        return view('pages.diko_pos.faq.list', compact('post'));
    }

    public function preview($id)
    {
        $post = FaqPos::find($id);
        return view('pages.diko_pos.faq.preview', compact('post'));
    }
    public function previewall()
    {
        $post = FaqPos::all();
        return view('pages.diko_pos.faq.previewall', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = FaqPos::find($id);
        return view('pages.diko_pos.faq.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_question' => 'required',
            'edit_answer' => 'required',

        ]);

        // Temukan data post berdasarkan ID
        $post = FaqPos::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->question = $request->input('edit_question');
        $post->answer = $request->input('edit_answer');

        // Upload dan simpan gambar jika ada
        // if ($request->hasFile('edit_image')) {
        //     $imagePath = $request->file('edit_image')->store('public');
        //     $post->image = str_replace('public/', '', $imagePath);
        // }

        $post->save();

        return redirect('/pos/faq/list')->with('success', 'Features has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = FaqPos::find($id);
        $post->delete();

        return redirect('/pos/faq/list')->with('success', 'Features has been deleted.');
    }
}
