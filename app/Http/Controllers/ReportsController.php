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
        $this->userReport("name");
    }

    public function byDni()
    {
        $this->userReport("dni");
    }

    public function byCity()
    {
        $this->userReport("address");
    }

    private function userReport($orderField) {
        $users = User::orderBy($orderField, 'asc')->get();

        $view = view('reports.users')->with('users', $users)->with('title', $orderField);
        $html = $view->render();

        $this->toPDF($html, "users by " . $orderField);
    }

    private function toPDF($html, $filename = "report")
    {
        $dompdf = new DOMPDF();  //if you use namespaces you may use new \DOMPDF()
        $dompdf->setPaper("A4", "landscape");
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream($filename.".pdf", array("Attachment"=>0));
    }
}
