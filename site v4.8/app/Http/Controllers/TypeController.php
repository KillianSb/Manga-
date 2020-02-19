<?php

namespace App\Http\Controllers;
use App\Models\Type;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\CollectionstdClass;


   class TypeController extends Controller {

    public function index()
    {
        $types = DB::table('livres')->pluck('kind');

        // foreach ($types as $type) {
        //     echo $type;
        // }
        return view('types.type', compact('types'));
    }
}
