<?php

namespace App\Http\Controllers;

use App\Teman;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['teman'] = Teman::all();
        return view('app', $data);
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
        $request->validate([
            'nama' => 'required',
            'hobi' => 'required',
        ],
        ['required' => ':attribute harus diisi']);

        Teman::create($request->all());

        return redirect()->route('teman.index')->with('success', 'Data teman tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
        $data['teman'] = Teman::find($id);
        return view('edit', $data);
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
        $data['teman'] = Teman::find($id);

        $request->validate([
            'nama' => 'required',
            'hobi' => 'required',
        ],
        ['required' => ':attribute harus diisi']);

        $data['teman']->update($request->all());

        return redirect()->route('teman.index')->with('success', 'Data teman terubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Teman::find($id);
        $users->delete();

        return redirect()->route('teman.index')->with('success', 'Data teman dihapus');
    }
}
