<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\RecipeResource;
use App\Models\Favourites;

class FavouriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $recipes = $user->recipes()->get();
        return RecipeResource::collection($recipes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $favourite = new Favourites;
        $user = Auth::user();
        $favourite->user_id = $user->id;
        $favourite->recipe_id = $request->recipe_id;
        $favourite->save();
        return ($favourite);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
    }
    
    public function destroy(string $id)
    {
        $user = Auth::user();
        $recipes = $user->recipes()->get();
        $favourite = $recipes->find($id);
        $favourite->users()->detach();
        $user->recipes()->detach($id);
        return response()->json(['message' => 'favourite deleted successfully']);
    }
}
