<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.book', [
            'title' => 'Book Dashboard',
            'books' => Book::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.create', [
            'title' => 'New Books',
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required | max:255',
            'slug' => 'required | max:255 | unique:books',
            'category_id' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        Book::create($validatedData);
        return redirect('/dashboardsBooks')->with('success', 'Book has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $dashboardsBook)
    {
        return view('dashboard.details', [
            'title' => 'Details',
            'books' => $dashboardsBook
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $dashboardsBook)
    {
        return view('dashboard.edit', [
            'title' => 'Edit',
            'book' => $dashboardsBook,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $dashboardsBook)
    {
        $rules = [
            'title' => 'required | max:255',
            'category_id' => 'required',
            'amount' => 'required',
            'description' => 'required'
        ];

        if ($request->slug != $dashboardsBook->slug) {
            $rules['slug'] = 'required|unique:books';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;
        Book::where('id', $dashboardsBook->id)->update($validatedData);
        return redirect('/dashboardsBooks')->with('success', 'Book has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $dashboardsBook)
    {
        Book::destroy($dashboardsBook->id);
        return redirect('/dashboardsBooks')->with('success', 'Book has been deleted!');
    }
}
