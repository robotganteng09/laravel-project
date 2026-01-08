<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentAdminController extends Controller
{
    public function index(){
        $students = Student::with('classroom')->get();

        // Kirim ke view
        return view('students.index', compact('students'));
    }

    public function create()
    {
        $classrooms = Classroom::all();
        return view('students.create', compact('classrooms'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students',
            'classroom_id' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string',
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil ditambahkan!');
    }

    public function edit(Student $student)
    {
        $classrooms = Classroom::all();
        return view('students.edit', compact('student', 'classrooms'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email,' . $student->id, //berfungsi untuk mengabaikan (exclude) email milik siswa yang sedang diedit
            'classroom_id' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string',
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}
