<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guitar;
use App\Http\Requests\GuitarFormRequest;

class GuitarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private static function getData()
    {
        return [
            ['id' => 1, 'name' => 'American Strat', 'brand' => 'Fender'],
            ['id' => 2, 'name' => 'Starla S2', 'brand' => 'PRS'],
            ['id' => 3, 'name' => 'Explorer', 'brand' => 'Gibson'],
            ['id' => 4, 'name' => 'Talman', 'brand' => 'Ibanez'],
        ];
    }

    public function index()
    {
        //GET
        return view('guitars.index', [
            'guitars' => Guitar::all(),
            'userInput' => '<script>alert("Hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * 
     */
    public function create()
    {
        //GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuitarFormRequest $request)
    {
        // POST
        $data = $request->validated();

        Guitar::create($data);

        return redirect()->route('guitars.index');
    }

    /**
     * Display the specified resource.
     * @param int id
     * @reutnr \Illuminate\Http\Response
     */
    public function show(Guitar $guitar)
    {
        // $record = Guitar::findOrFail($guitar);
        // GET
        return view('guitars.show', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guitar $guitar)
    {
        // GET
        return view('guitars.edit', [
            'guitar' => $guitar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GuitarFormRequest $request, Guitar $guitar)
    {
        // POST, PUT, PATCH
        $data = $request->validated();

        $guitar->update($data);
        return redirect()->route('guitars.show', $guitar->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // DELETE
    }
}
