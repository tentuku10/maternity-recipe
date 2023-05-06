<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes=Recipe::orderBy('created_at', 'desc')->get();
        $user=auth()->user();
        return view('recipe.index', compact('recipes', 'user'));
    }

    public function create()
    {
        return view('recipe.create');
    }

    public function store(Request $request)
    {
        $inputs=$request->validate([
            'dish_name'=>'required|max:255',
            'food'=>'required|max:500',
            'how_to_make'=>'required|max:1000',
            'image'=>'image|max:1024'
        ]);
        $recipe=new Recipe();
        $recipe->dish_name=$request->dish_name;
        $recipe->food=$request->food;
        $recipe->how_to_make=$request->how_to_make;
        $recipe->user_id=auth()->user()->id;
        if (request('image')){
            $original = request()->file('image')->getClientOriginalName();
            $name = date('Ymd_His').'_'.$original;
            request()->file('image')->move('storage/images', $name);
            $recipe->image = $name;
        }
        $recipe->save();

        $tags = explode(',', $request->tags);
        foreach ($tags as $tag_name) {
            $tag = Tag::firstOrCreate(['name' => $tag_name]);
            $recipe->tags()->attach($tag);
        }

        return redirect()->route('recipe.index')->with('message', 'レシピを投稿しました');
    }

    public function show(Recipe $recipe)
    {
        return view('recipe.show', compact('recipe'));
    }

    public function edit(Recipe $recipe)
    {
        return view('recipe.edit', compact('recipe'));
    }

    public function update(Request $request, Recipe $recipe)
    {
        $inputs=$request->validate([
            'dish_name'=>'required|max:255',
            'food'=>'required|max:500',
            'how_to_make'=>'required|max:1000',
            'image'=>'image|max:1024'
        ]);

        $recipe->dish_name=$inputs['dish_name'];
        $recipe->food=$inputs['food'];
        $recipe->how_to_make=$inputs['how_to_make'];
                
        if(request('image')){
            $original=request()->file('image')->getClientOriginalName();
            $name=date('Ymd_His').'_'.$original;
            $file=request()->file('image')->move('storage/images', $name);
            $recipe->image=$name;
        }

        $recipe->save();

        $tags = explode(',', $request->tags);
        foreach ($tags as $tag_name) {
            $tag = Tag::firstOrCreate(['name' => $tag_name]);
            $recipe->tags()->attach($tag);
        }

        return redirect()->route('recipe.show', $recipe)->with('message', 'レシピを更新しました');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipe.index')->with('message', 'レシピを削除しました');
    }
}
