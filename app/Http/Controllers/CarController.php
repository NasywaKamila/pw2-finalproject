<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use App\Models\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        $types = Type::all();
        return view('cars.create', compact('types'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'type_id' => 'required',
            'photo' => 'required|image',
            'cost_per_day' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imgName = time() . '.' . $extension;
            $request->file('photo')->storeAs('src/images/car', $imgName, 'public');
            $validatedData['photo'] = $imgName;
        }

        Car::create($validatedData);

        return redirect('/cars')->with('success', 'car added successfully!');
    }

        public function update(Request $request, Car $car)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'type_id' => 'required',
            'photo' => 'required|image',
            'cost_per_day' => 'required',
            'year' => 'required',
            'license_plate' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            //delete old image 
            Storage::disk('public')->delete('src/images/car/' . $car->photo);

            // upload new image 
            $extension = $request->file('photo')->getClientOriginalExtension();
            $imgName = time() . '.' . $extension;
            $request->file('photo')->storeAs('src/images/car', $imgName, 'public');
            $validatedData['photo'] = $imgName;
        }


        $car->update($validatedData);

        return redirect('/cars')->with('success', 'Car updated successfully!');
    }

    public function edit(Car $car)
    {
        $types = Type::all();
        return view('cars.edit', compact('car', 'types'));
    }
        public function destroy(Car $car)
    {
        $photo = Storage::disk('public')->delete('src/images/car/' . $car->photo);

        $car->delete($photo);
        return redirect('/cars')->with('success', 'Car deleted successfully!');
    }

    
}
