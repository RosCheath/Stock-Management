<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        $history = History::get();
        return view('history.index', [
            'history' => $history
        ]);
    }

    public function create()
    {
        return view('history.create', [
        ]);
    }
    public function store(Request $request)
    {
        History::create($request->all()) ;

        return redirect(route('history.index'));
    }

    public function show(History $history)
    {
        return view('product.show',
            [
                'history' => $history
            ]);
    }
    public function edit(history $history)
    {

        return view('products.edit',
            [
                'history' => $history,

            ]);
    }
    public function update(Request $request ,history $history)
    {
        $history->update($request->all());
        return redirect(route('history.index'));
    }

    public function destroy(history $history)
    {

        $history->delete();
        return redirect(route('history.index'));
    }
}
