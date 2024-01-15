<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Media;

class MediaController extends Controller
{
    public function getAllMedia() {
        // retornar filmes cadastrados
        $media = Media::all();
        echo $media;
    }

    public function addMedia(Request $request) {
        $media = new Media();
        $media->name = $request->name;
        $media->type_id = $request->type_id;
        // preenche o rate com um decimal (2,2) aleatório entre 0 e 10
        $media->rate = (float) $request->rate;
        $media->save();
        return;
    }
}
