<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view('types.index', compact('types'));
    }
    public function create()
    {
        $types = Type::all();
        return view('types.create', compact('types'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        Type::create($validatedData);

        return redirect('/types')->with('success', 'Type added successfully!');
    }

    public function destroy(Type $type)
    {
        $type->delete();
        return redirect('/types')->with('success', 'Type deleted successfully!');
    }

    public function edit(Type $type)
    {
        $types = Type::all();
        return view('types.edit', compact('type', 'types'));
    }

    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $type->update($validatedData);

        return redirect('/types')->with('success', 'Type updated successfully!');
    }
}
