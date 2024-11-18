<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index() {
        return view('admin');
    }
    public function admin_appl() {
        $Application = Application::all();

        return view('admin_appl', compact('Application'));
    }

    public function admin_accept(Application $id_appl) {
        $id_appl -> update([
            'status' => 'подтверждена',
        ]);
        $id_appl -> save();

        return redirect() -> route('admin_appl');
    }
    public function admin_reject(Application $id_appl) {
        $id_appl -> update([
            'status' => 'отклонена',
        ]);
        $id_appl -> save();

        return redirect() -> route('admin_appl');
    }
}
