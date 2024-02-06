<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Language;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function openHomePage(Request $request){
        // $languageCode = $request->language ? $request-> language:'en';
        // $language = Language::where('code', $languageCode)->first();
      
        // $languageId = $language ? $language->id: null;
    
        // $item = Item::find(1);

        // $translation = $item->translations->where('language_id',$languageId)->first();


        $languageCode = $request->language ? $request->language : 'en';
        $language = Language::where('code', $languageCode)->first();
        $languageId = $language ? $language->id : null;
    
        // Retrieve all items
        $item = Item::all();
    
        // If language ID is specified, filter translations based on it
        if ($languageId) {
            // Filter translations for each item based on language ID
            $translations = $item->map(function ($item) use ($languageId) {
                return $item->translations->where('language_id', $languageId);
            });
        } else {
            // If no language ID is specified, set translations to null
            $translations = null;
        }
    
      //  dd($translations);
    
        $languages = Language::all();
        if(!$item){
            abort(404);
        }
    
        return view('welcome',compact('translations','languages'));
    }
}
