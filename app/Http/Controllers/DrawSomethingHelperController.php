<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DrawSomethingHelperController extends Controller
{
    public function getIndex()
    {
        return view('drawsomethinghelper.indexGet');
    }

    public function postIndex(Request $request)
    {
        try{
            $pspell_link = pspell_new("es");
            $letters = str_split($request->get('letters'));
            $numLetters = $request->get('numLetters');
            $permutations = (new \drupol\phpermutations\Generators\Permutations($letters, $numLetters));
            $words = array();
            $countWords = 0;
            foreach ($permutations->generator() as $permutation) {
                if (pspell_check($pspell_link, implode($permutation))) {
                    array_push($words, implode($permutation));
                    $countWords++;
                } 
                if($countWords>30)
                    break;
            }
            return view('drawsomethinghelper.indexPost', [
                'words' => $words, 
                'letters' => implode($letters),
                'numLetters' => $numLetters
            ]);
        }
        catch(Exception $e){
            echo "error";
        }
    }
}
