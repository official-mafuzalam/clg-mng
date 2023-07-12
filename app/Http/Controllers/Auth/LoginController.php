<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\T_features;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Create a new controller instance.
     *
     * @return RedirectResponse
     */
    public function login(Request $request): RedirectResponse
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            
            $user = auth()->user();
        
            // Retrieve the user's full details from the T_features table
            $userDetails = DB::table('t_features')
                ->where('user_id', $user->user_id)
                ->first();
        
            // Store the user's full details in the session
            $request->session()->put('user', array_merge($user->toArray(), (array)$userDetails));
        

            // Redirect to the appropriate route
            if ($user->type == 'administration') {
                return redirect()->route('administration.welcome');
            } else if ($user->type == 'student_portal') {
                return redirect()->route('student_portal.welcome');
            } else {
                return redirect()->route('dep_teacher.welcome');
            }

        } else {
            return redirect()->route('login')->with('error', 'Email-Address and Password Are Wrong.');
        }


    }
}