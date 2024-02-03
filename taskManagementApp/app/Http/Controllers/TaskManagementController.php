<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskManagementController extends Controller
{
    // Method to handle the request to the /admin/projects URL
    public function index()
    {
        // Returns the view located at resources/views/admin/projects.blade.php
        // You can pass data to your view if needed, for example:
        // return view('admin.projects', ['projects' => $projects]);
        return view('user.tasks');
    }
}
