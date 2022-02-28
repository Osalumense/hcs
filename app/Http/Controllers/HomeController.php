<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;
use Vinkla\Hashids\Facades\Hashids;

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
        return view('admin.counsellor.counsellors');
    }

    public function displayCounsellors()
    {
        $data = User::where('type', '=', (string)\UserType::COUNSELLOR)
        ->orderBy('id', 'DESC');
        return Datatables::of($data)
        ->editColumn('is_active', function ($user) {
            return \ActiveStatus::getValueInHtml($user->is_active);
        })
        ->addColumn('name', function($user){
            return $user->last_name.' '.$user->first_name;
        })
        ->addColumn('action', function ($user) {
            return view('admin.partials.admin_counsellor_action')->with([
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

    // public function displayUsers()
    // {
    //     $data = User::where('type', '=', (string)\UserType::USER)
    //     ->orderBy('id', 'DESC');
    //     return Datatables::of($data)
    //     ->editColumn('is_active', function ($user) {
    //         return \ActiveStatus::getValueInHtml($user->is_active);
    //     })
    //     ->addColumn('name', function($user){
    //         return $user->last_name.' '.$user->first_name;
    //     })
    //     ->addColumn('action', function ($user) {
    //         return view('admin.partials.admin_user_action')->with([
    //             'user' => $user,
    //         ]);
    //     })
    //     // ->editColumn('created_at', function ($user) {
    //     //     return $user->created_at->format('d/m/Y');
    //     // })
    //     ->rawColumns(['action', 'is_active'])
    //     ->make(true);
    // }

    /**
     * Delete Counsellor.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function deleteCounsellor($id)
    {
        $user = $id;
        // $user = User::findOrFail($decodedId);
        if ($user->type == \UserType::COUNSELLOR) {
            $user->delete();
            \session()->flash('success', 'Counsellor deleted');

            return redirect(url('/admin/counsellors'));
        }
        return redirect()->back();
    }

    /**
     * Render counsellor update view.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
    public function editCounsellor(Request $request)
    {
        $id = $request->segment(4);
        // $id = getDecodedId($encodedId);
        $user = User::FindOrFail($id);
        return view('admin.counsellor.counsellor-edit')->with(['user' => $user]);
    }
}
