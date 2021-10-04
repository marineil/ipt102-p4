<?php

namespace App\Http\Controllers;

use App\Events\UserLogEvent;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index() {

        $items = Item::all();

        return view('dashboard', compact('items'));
    }

    public function create() {
        return view('create');
    }

    public function store(Request $request) {

        $request->validate([
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);
        $item = Item::create($request->all());
        event(new UserLogEvent("Created an item with ID#$item->id"));
        return redirect('/dashboard');
    }

    public function edit(Item $item) {
        return view('edit', compact('item'));   
    }

    public function update(Item $item, Request $request) {
        $request->validate([
            
            'name'          => 'required',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'      => 'required|numeric',
        ]);       
        $item->update($request->all());
        event(new UserLogEvent("Updated an item with ID#$item->id"));
        return redirect('/dashboard');        
    }

    public function delete(Item $item) {
        return view('delete', compact('item'));   
    }

    public function destroy(Item $item, Request $request) {  
        $item->delete();
        event(new UserLogEvent("Deleted an item with ID#$item->id"));
        return redirect("/dashboard");
    }

}
