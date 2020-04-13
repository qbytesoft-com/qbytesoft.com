<?php
/**
 * @author Author Name: Md Morshadun Nur
 * @email  Email: morshadunnur@gmail.com
 */

namespace App\Http\Controllers\Dashboard;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * @var Request
     */
    private $request;

    /**
     * DashboardController constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {

        $this->request = $request;
    }
    public function index()
    {
        return view('dashboard.home');
    }
}
