<?php

namespace App\Http\Controllers;

use App\Models\FaqSp;
use Illuminate\Http\Request;


class FaqSpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = FaqSp::get();
        return view('pages.diko_sp.faq.list', compact('posts'));
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
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new FaqSp();
        $post->question = $request->input('question');
        $post->answer = $request->input('answer');

        // Upload dan simpan gambar jika ada
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public');
        //     $post->image = str_replace('public/', '', $imagePath);
        // }

        $post->save();

        return redirect('/sp/faq/list')->with('success', 'Features has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = FaqSp::all();
        return view('pages.diko_sp.faq.list', compact('post'));
    }

    public function preview($id)
    {
        $post = FaqSp::find($id);
        return view('pages.diko_sp.faq.preview', compact('post'));
    }
    public function previewall()
    {
        $post = FaqSp::all();
        return view('pages.diko_sp.faq.previewall', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = FaqSp::find($id);
        return view('pages.diko_sp.faq.edit', compact('post'));
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
            // 'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan data post berdasarkan ID
        $post = FaqSp::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->question = $request->input('edit_question');
        $post->answer = $request->input('edit_answer');

        // Upload dan simpan gambar jika ada
        // if ($request->hasFile('edit_image')) {
        //     $imagePath = $request->file('edit_image')->store('public');
        //     $post->image = str_replace('public/', '', $imagePath);
        // }

        $post->save();

        return redirect('/sp/faq/list')->with('success', 'Features has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = FaqSp::find($id);
        $post->delete();

        return redirect('/sp/faq/list')->with('success', 'Features has been deleted.');
    }
}
