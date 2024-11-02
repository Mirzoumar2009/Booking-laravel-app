<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RestCategory;

class RestCategoryController extends Controller
{
    public function index()
    {
        $rests = RestCategory::all();
        return view('rests.index', compact('rests'));
    }


    public function create()
    {
        $rests = RestCategory::all();
        return view('rests.create', compact('rests'));
    }

    public function store(Request $request)
    {
        $restss = $request->validate([
            'name' => 'required|string',
            'description' => 'string',
        ]);

        RestCategory::create($restss);
        return redirect()->route('rests.index')->with('success', 'Rest успешно добавлена');
    }

    public function show($id)
    {
        $rests = RestCategory::findOrFail($id);
        return view('rests.show', compact('rests'));
    }

    public function edit($id)
    {
        $rest = RestCategory::findOrFail($id);
        return view('rests.edit', compact('rest'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'string',
        ]);

        $rest = RestCategory::findOrFail($id);
        $rest->update($request->all());
        return redirect('/rests')->with('success', 'Rest updated successfulle');
    }

    public function destroy($id)
    {
        $rests = RestCategory::findOrFail($id);
        $rests->delete();
        return redirect('/rests')->with('success', 'Rest deleted successfully');
    }
}
