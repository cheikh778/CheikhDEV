<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\File\Exception\FileNotFoundException;

use Illuminate\Http\Request;

class CVController extends Controller
{
    public function telechargerCV()
    {
        $cheminCV = storage_path('app/cv/cvCheikh.pdf'); // Remplacez "nom-du-cv.pdf" par le nom de votre fichier CV
        if (!Storage::exists('cv/cvCheikh.pdf')) {
            throw new FileNotFoundException("Le fichier CV n'existe pas.");
        }

        return response()->download($cheminCV);
    }
}
