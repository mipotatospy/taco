<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ShoppingListResource;
use App\Models\Product;
use App\Models\ShoppingList;
use Illuminate\Support\Facades\DB;

class ShoppingListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $lists = $user->lists()->get();
        return ShoppingListResource::collection($lists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $shoppingList = new ShoppingList;
        $shoppingList->picture = $request->picture;
        $shoppingList->name = $request->name;
        $shoppingList->save();
        foreach ($request->products as $product) {
            $shoppingList->products()->attach($product['product_id'], ['quantity' => $product['quantity']]);
        }
        $shoppingList->users()->attach($request->users_ids);
        $shoppingList->users()->attach($user->id);
        //return new ShoppingListResource($shoppingList);
        return [
            'message' => 'List created: ',
            new ShoppingListResource($shoppingList)
        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shoppingList = ShoppingList::with(['products','users'])->findOrFail($id);
        return new ShoppingListResource($shoppingList);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        $lists = $user->lists()->get();
        $shoppingList = $lists->find($id);
        $shoppingList->name=$request->name;
        $shoppingList->picture=$request->picture;
        $shoppingList->save();
        foreach ($shoppingList->products as $product) {
            $shoppingList->products()->detach($product['product_id']);
        }
        foreach ($request->products as $product) {
            $shoppingList->products()->attach($product['product_id'], ['quantity' => $product['quantity']]);
        }
        $shoppingList->users()->detach();
        $shoppingList->users()->attach($request->users_ids);
        $shoppingList->users()->attach($user->id);
        return [
            'message' => 'List updated: ',
            new ShoppingListResource($shoppingList)
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Auth::user();
        $lists = $user->lists()->get();
        $shoppingList = $lists->find($id);
        $shoppingList->products()->detach();
        $shoppingList->users()->detach();
        $shoppingList->delete();
        return response()->json(['message' => 'ShoppingList deleted successfully']);
    }
}
