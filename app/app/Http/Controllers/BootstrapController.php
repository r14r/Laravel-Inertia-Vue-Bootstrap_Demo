<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class BootstrapController extends Controller
{
    
    public function index()
    {
        return Inertia::render('Bootstrap/Home', []);
    }

    public function videos()
    {
        return Inertia::render('Bootstrap/Videos', []);
    }

    public function view($name)
    {
        $path = resource_path("js/Pages/Bootstrap/Examples/{$name}/index.vue");

        if (!file_exists($path)) {
            abort(404, 'View not found'); // Abort if the file does not exist
        }

        return Inertia::render("Bootstrap/Examples/{$name}/index");
    }
}
