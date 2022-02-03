<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminIndex()
    {
        return view('admin.index');
    }

    public function renderCounsellorsPage()
    {
        return view('admin.counsellors');
    }

    public function displayCounsellors()
    {
        $data = User::where('type', '=', (string)\UserType::COUNSELLOR)
        ->orderBy('id', 'DESC');
        dd($data);
        return Datatables::of($data)
        ->editColumn('is_active', function ($user) {
            return \ActiveStatus::getValueInHtml($user->is_active);
        })
        ->addColumn('name', function($user){
            return $user->last_name.' '.$user->first_name;
        })
        ->addColumn('action', function ($user) {
            return view('admin.partials.admin_user_action')->with([
                'user' => $user,
            ]);
        })
        // ->editColumn('created_at', function ($user) {
        //     return $user->created_at->format('d/m/Y');
        // })
        ->rawColumns(['action', 'is_active'])
        ->make(true);
    }

    public function renderUsersPage()
    {
        return view('admin.users');
    }
}
