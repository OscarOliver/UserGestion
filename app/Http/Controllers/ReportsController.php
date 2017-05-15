<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

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

        $view = view('reports.byName')->with('users', $users);
        $html = $view->render();

        $this->toPDF($html, "users by name");
    }

    public function byDni()
    {
        $users = User::orderBy('dni', 'asc')->get();

        $view = view('reports.byDni')->with('users', $users);
        $html = $view->render();

        $this->toPDF($html, "users by DNI");
    }

    public function byCity()
    {
        $users = User::orderBy('address', 'asc')->get();

        $view = view('reports.byCity')->with('users', $users);
        $html = $view->render();

        $this->toPDF($html, "users by city");
    }

    private function toPDF($html, $filename = "report")
    {
        $dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment"=>0));
    }
}
