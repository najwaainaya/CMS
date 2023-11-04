<?php

namespace App\Http\Controllers;

use App\Models\FaqLanding;
use Illuminate\Http\Request;


class FaqLandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = FaqLanding::get();
        return view('pages.landing.faq.list', compact('post'));
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

        $post = new FaqLanding();
        $post->question = $request->input('question');
        $post->answer = $request->input('answer');

        // Upload dan simpan gambar jika ada
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public');
        //     $post->image = str_replace('public/', '', $imagePath);
        // }

        $post->save();

        return redirect('/faq')->with('success', 'Features has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = FaqLanding::find($id);
        return view('pages.landing.faq.list', compact('post'));
    }

    public function preview($id)
    {
        $post = FaqLanding::find($id);
        return view('pages.landing.faq.preview', compact('post'));
    }
    public function previewall()
    {
        $post = FaqLanding::all();
        return view('pages.landing.faq.previewall', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $posts = FaqLanding::find($id);
        return view('pages.landing.faq.edit', compact('posts'));
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
        $post = FaqLanding::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->question = $request->input('edit_question');
        $post->answer = $request->input('edit_answer');

       

        $post->save();

        return redirect('/faq')->with('success', 'Features has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = FaqLanding::find($id);
        $post->delete();

        return redirect('/faq')->with('success', 'Features has been deleted.');
    }
}
