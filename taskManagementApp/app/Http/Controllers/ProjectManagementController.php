<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project; // Ensure you have this model at the top of your controller


class ProjectManagementController extends Controller
{
    // Method to handle the request to the /admin/projects URL
    public function index()
    {
        $projects = Project::all(); // Or use any other query to get the projects you need

        // Pass the projects to your view
        return view('admin.projects', ['projects' => $projects]);
    }


    public function create()
{
    // Returns the view located at resources/views/admin/create.blade.php
    return view('admin.create');
}   

}
