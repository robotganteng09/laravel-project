<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectAdminController extends Controller
{
   public function index(){
    $subject = Subject::all();
    return view('subject.index', compact('subject'));
   }

    public function create()
    {
        return view('subject.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        Subject::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('subject.index')
            ->with('success', 'Subject berhasil ditambahkan');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('subject.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $subject = Subject::findOrFail($id);

        $subject->update([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return redirect()->route('subject.index')
            ->with('success', 'Subject berhasil diperbarui');
    }
}
