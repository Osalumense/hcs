<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\vendor\Chatify\MessagesController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Hash;

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
        $unreadMessages = MessagesController::getCountOfUnreadMessages(Auth::user()->id);
        return view('home')->with('unreadMsg', $unreadMessages);
    }

    public function adminIndex()
    {
        $allUsersCount = User::totalUsersCount();
        $usersCount = User::usersCount();
        $counsellorsCount = User::counsellorsCount();
        // return view('admin.users.user-view')->with(['user' => $user]);
        return view('admin.index')->with(
            ['allUsersCount' => $allUsersCount,
            'usersCount' => $usersCount,
            'counsellorsCount' => $counsellorsCount
            ]
        );
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
        ->editColumn('created_at', function ($user) {
            return $user->created_at->format('d/m/Y');
        })
        ->rawColumns(['action', 'is_active'])
        ->make(true);
    }

    public function renderUsersPage()
    {
        return view('admin.users');
    }

    public function displayUsers()
    {
        $data = User::where('type', '=', (string)\UserType::USER)
        ->orderBy('id', 'DESC');
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
        ->editColumn('created_at', function ($user) {
            return $user->created_at->format('d/m/Y');
        })
        ->rawColumns(['action', 'is_active'])
        ->make(true);
    }

    public function viewUser(Request $request)
    {
        $id = $request->segment(4);
        // $id = getDecodedId($encodedId);
        $user = User::FindOrFail($id);
        return view('admin.users.user-view')->with(['user' => $user]);
    }

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

    public function updateCounsellors(Request $request)
    {
        $postData = request()->all();
        $user = Auth::user();
        if ($user instanceof User && $user->type != \UserType::USER) {
            $validators = Validator::make($request->input(), [
                'first_name' => 'required|string|max:30',
                'last_name' => 'required|string|max:30',
                'mobile_number' => 'bail|numeric|digits_between:11,12',
                'gender' => 'required|numeric',
                'is_active' => 'required|numeric',
            ]);
            if ($validators->fails()) {
                return redirect()->back()->withErrors($validators)->withInput();
            }
             /** @var User $getUser */
             $getUser = User::get($postData['id']);
             $getUser->first_name = $postData['first_name'];
             $getUser->last_name = $postData['last_name'];
             $getUser->mobile_number = $postData['mobile_number'];
             $getUser->gender = $postData['gender'];
             $getUser->is_active = $postData['is_active'];
             $getUser->save();
     
             return redirect()->back()->with('success', 'User updated successfully');  
        } else {
            \session()->flash('error', 'User not authenticated');
            return redirect()->back();
        }
        
    }

    public function updateUser(Request $request)
    {
        $id = $request->segment(3);
        $user = User::FindOrFail($id);
        $user->edit();
        \session()->flash('success', 'User updated');
        return redirect()->back();
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password'=>'required|min:6|max:100',
            'new_password'=>'required|min:6|max:100',
            'confirm_password'=>'required|same:new_password'
        ]);
        $id = $request->segment(3);
        $user = User::FindOrFail($id);
        if(Hash::check($request->old_password,$user->password)){
            $user->update([
                'password'=>bcrypt($request->new_password)
            ]);
            return redirect()->back()->with('success', 'Password updated');
        }
        else {
            return redirect()->back()->with('error', 'Old password does not match current password');
        }
    }

    public function renderAddCounsellorsPage()
    {
        return view('admin.counsellor.add-counsellor');
    }
 
    public function addCounsellor(Request $request)
    {
        $validators = Validator::make($request->input(), [
            'email' => 'required|email',
            'first_name' => 'required|string|max:30',
            'last_name' => 'required|string|max:30',
            'mobile_number' => 'bail|numeric|digits_between:11,12',
            'gender' => 'required|numeric',
            'staff_id' => 'required|string',
        ]);
        if ($validators->fails()) {
            return redirect()->back()->withErrors($validators)->withInput();
        }
        $user = new User();
        $user->edit();
        return redirect()->back()->with('success', 'Counsellor added');
    }
}
