<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Car;
use App\Models\User;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::all();
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $cars = Car::all();
        $users = User::all();
        return view('loans.create', compact('cars', 'users'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',
        ]);

        Loan::create($validatedData);

        return redirect('/loans')->with('success', 'Loan added successfully!');
    }

    public function update(Request $request, Loan $loan)
    {
        $validatedData = $request->validate([
            'car_id' => 'required',
            'user_id' => 'required',
            'loan_date' => 'required',
            'return_date' => 'required',
            'total_cost' => 'required',
            'status' => 'required',
        ]);

        $loan->update($validatedData);

        return redirect('/loans')->with('success', 'Loan updated successfully!');
    }

    public function edit(Loan $loan)
    {
        $cars = Car::all();
        $users = User::all();
        return view('loans.edit', compact('loan', 'cars', 'users'));
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect('/loans')->with('success', 'Loan deleted successfully!');
    }
}
