<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\ShoppingListResource;
use App\Models\ShoppingList;

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
        $shoppingList->users()->attach($user->id );
        return new ShoppingListResource($shoppingList);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = Auth::user();
        $lists = $user->lists()->get();
        $list = $lists->find($id);
        return new ShoppingListResource($list);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Auth::user();
        $lists = $user->lists()->get();
        $list = $lists->find($id);
        $list->name=$request->name;
        $list->picture=$request->picture;
        $list->save();
        return [
            'message' => 'List updated'
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        /*$user = Auth::user();
        $lists = $user->lists()->get();
        $list = $lists->find($id);
        $list->delete();
        return [
            'message' => 'list deleted'
        ];*/
    }
}
