<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TodoController extends Controller
{
    public function index()
    {
        $data = Todo::all();
        foreach ($data as $item) {
            if ($item->status == 1) {
                $item->status = 'selesai';
            } else {
                $item->status = 'belum selesai';
            }
        }

        return view('index', compact('data'));
    }

    public function tambah()
    {
        return view('crud.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tugas' => 'required',
        ]);

        Todo::create([
            'tugas' => $request->tugas,
        ]);
        return redirect()->route('index');
    }

    public function edit($id)
    {
        $data = Todo::find($id);
        return view('crud.ubah', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tugas' => 'required',
        ]);
        Todo::find($id)->update([
            'tugas' => $request->tugas,
            'status' => $request->status
        ]);
        return redirect()->route('index');
    }

    public function delete($id)
    {
        Todo::find($id)->delete();
        return redirect()->route('index');
    }
}
