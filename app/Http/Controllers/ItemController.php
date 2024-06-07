<?php
namespace App\Http\Controllers;

use App\Models\ItemDetail;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $items = ItemDetail::all();
        return view('items.index')->with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'product_id' => 'required|unique:itemdetails',
            'item_name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $input = $request->all();
        ItemDetail::create($input);

        return redirect('items')->with('flash_message', 'Item Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $item = ItemDetail::find($id);
        if (!$item) {
            return redirect('items')->with('flash_message', 'Sorry Item not found!');
        }

        return view('items.show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $item = ItemDetail::find($id);
        if (!$item) {
            return redirect('items')->with('flash_message', 'check Item not found!');
        }

        return view('items.edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'product_id' => 'required|unique:itemdetails,product_id,' . $id,
            'item_name' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $item = ItemDetail::find($id);
        if (!$item) {
            return redirect('items')->with('flash_message', 'Item not found!');
        }

        $input = $request->all();
        $item->update($input);

        return redirect('items')->with('flash_message', 'Item Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $item = ItemDetail::find($id);
        if (!$item) {
            return redirect('items')->with('flash_message', 'Item not found!');
        }

        $item->delete();

        return redirect('items')->with('flash_message', 'Item deleted!');
    }
}

