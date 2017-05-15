<?php

namespace App\Http\Controllers;

//require_once '../../../vendor/autoload.php';

use Illuminate\Http\Request;
use App\User;
use Dompdf\Dompdf;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('reports.index');
    }

    public function byName()
    {
        $users = User::orderBy('name', 'asc')->get();

        return view('reports.byName', compact($users));
    }

    public function byDni()
    {
        $users = User::orderBy('dni', 'asc')->get();

        return view('reports.byDni', compact($users));
    }

    public function byCity()
    {
        $users = User::orderBy('address', 'asc')->get();

        return view('reports.byCity', compact($users));
    }

    public function toPDF($html)
    {

    }
}
