<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class DocumentController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('document', compact('users'));
    }
}
