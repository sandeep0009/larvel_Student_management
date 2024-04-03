<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnrollMent; 
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EnrollMentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $enrollments=EnrollMent::all();
        return view('enrollments.index')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        return view('enrollments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        EnrollMent::create($input);
        return redirect('enrollments')->with('flash_message', 'EnrollMent Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $EnrollMent = EnrollMent::find($id);
        return view('enrollments.show')->with('enrollments', $EnrollMent);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $EnrollMent = EnrollMent::find($id);
        return view('enrollments.edit')->with('enrollments', $EnrollMent);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id):RedirectResponse
    {
        $EnrollMent = EnrollMent::find($id);
        $input = $request->all();
        $EnrollMent->update($input);
        return redirect('enrollments')->with('flash_message', 'EnrollMent Updated!');  
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        EnrollMent::destroy($id);
        return redirect('enrollments')->with('flash_message', 'EnrollMent deleted!');  
    }
}
