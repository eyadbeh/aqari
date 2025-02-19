<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Unit;
use App\Models\Transaction;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Instantiate a new AuthController instance.
     */
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout', 'dashboard', 'admin'
        ]);
    }

    /**
     * Display a registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('auth.register');
    }

    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|string|email|max:255|unique:users_web',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role', 0), // Default role is 0 (user)
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route($user->role == 1 ? 'admin' : 'dashboard')
            ->with('success', 'You have successfully registered & logged in!');
    }

    /**
     * Display a login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Authenticate the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'phone' => 'required|string|max:15',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route(Auth::user()->role == 1 ? 'admin' : 'dashboard')
                ->with('success', 'You have successfully logged in!');
        }

        return back()->withErrors([
            'phone' => 'The provided credentials do not match our records.',
        ])->onlyInput('phone');
    }

    /**
     * Display a dashboard to authenticated users.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('user.home'); // Adjust view path
        }

        return redirect()->route('login')
            ->withErrors([
                'phone' => 'Please login to access the dashboard.',
            ])->onlyInput('email');
    }

    /**
     * Display the admin page to authenticated admin users.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $totalUsers = User::count();
        $totalUnits = Unit::count();

        $data = [
            'labels' => ['0k','10k', '20k', '30k', '40k', '50k'],
            'data' => [0, 40, 60, 50, 80, 70],
        ];

        $totalSold = Transaction::where('status', 'completed')->count();
        $totalProfit = Transaction::sum('amount');
        if (Auth::check() && Auth::user()->role == 1) {
            return view('admin.admin', compact('totalUsers','totalUnits','totalSold','totalProfit','data'));
        }

        return redirect()->route('login')
            ->withErrors([
                'phone' => 'Please login to access the admin page.',
            ])->onlyInput('email');
    }

    /**
     * Log out the user from application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'You have logged out successfully!');
    }

    // /**
    //  * Show the user settings form.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function showSettingsForm()
    // {
    //     $user = Auth::user(); // Retrieve the authenticated user

    //     if (!$user) {
    //         return redirect()->route('login')->withErrors([
    //             'phone' => 'Please login to access your settings.'
    //         ]);
    //     }

    //     return view('admin.settings', compact('user'));
    // }

    // /**
    //  * Update the user settings.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function updateSettings(Request $request)
    // {
    //     $user = Auth::user(); // Retrieve the authenticated user

    //     if (!$user) {
    //         return redirect()->route('login')->withErrors([
    //             'phone' => 'Please login to update your settings.'
    //         ]);
    //     }

    //     $validator = Validator::make($request->all(), [
    //         'first_name' => 'required|string|max:255',
    //         'last_name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
    //     ]);

    //     if ($validator->fails()) {
    //         return back()->withErrors($validator)->withInput();
    //     }

    //     // Update user information
    //     $user->first_name = $request->input('first_name');
    //     $user->last_name = $request->input('last_name');
    //     $user->email = $request->input('email');

    //     // Update password if provided
    //     if ($request->filled('password')) {
    //         $user->password = Hash::make($request->input('password'));
    //     }

    //     $user->save(); // Save changes to the database

    //     return redirect()->route('settings')->with('success', 'Profile updated successfully!');
    // }


}


// namespace App\Http\Controllers\Auth;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use App\Models\User;
// use Illuminate\Support\Facades\Validator;
// use App\Http\Controllers\Controller;

// class AuthController extends Controller
// {
//     /**
//      * Instantiate a new AuthController instance.
//      */
//     public function __construct()
//     {
//         $this->middleware('guest')->except([
//             'logout', 'dashboard', 'admin'
//         ]);
//     }

//     /**
//      * Display a registration form.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function register()
//     {
//         return view('auth.register');
//     }

//     /**
//      * Store a new user.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'phone' => 'required|string|max:15',
//             'email' => 'required|string|email|max:255|unique:users',
//             'password' => 'required|string|min:8|confirmed',
//             // 'role' => 'required|integer|in:0,1',
//         ]);

//         User::create([
//             'first_name' => $request->input('first_name'),
//             'last_name' => $request->input('last_name'),
//             'phone' => $request->input('phone'),
//             'email' => $request->input('email'),
//             'password' => Hash::make($request->input('password')),
//             // 'role' => $request->input('role'),
//         ]);

//         $credentials = $request->only('phone', 'password');
//         Auth::attempt($credentials);
//         $request->session()->regenerate();

//         return redirect()->route(Auth::user()->role == 1 ? 'admin' : 'dashboard')
//             ->withSuccess('You have successfully registered & logged in!');
//     }

//     /**
//      * Display a login form.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function login()
//     {
//         return view('auth.login');
//     }

//     /**
//      * Authenticate the user.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function authenticate(Request $request)
//     {
//         $credentials = $request->validate([
//             'phone' => 'required|string|max:15',
//             'password' => 'required'
//         ]);

//         if(Auth::attempt($credentials))
//         {
//             $request->session()->regenerate();
//             return redirect()->route(Auth::user()->role == 1 ? 'admin' : 'dashboard')
//                 ->withSuccess('You have successfully logged in!');
//         }

//         return back()->withErrors([
//             'phone' => 'Your provided credentials do not match our records.',
//         ])->onlyInput('phone');
//     } 
    
//     /**
//      * Display a dashboard to authenticated users.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function dashboard()
//     {
//         if(Auth::check())
//         {
//             return view('auth.dashboard');
//         }
        
//         return redirect()->route('login')
//             ->withErrors([
//             'phone' => 'Please login to access the dashboard.',
//         ])->onlyInput('email');
//     } 

//     public function admin()
//     {
//         if(Auth::check() && Auth::user()->role == 1)
//         {
//             return view('admin');
//         }
        
//         return redirect()->route('login')
//             ->withErrors([
//             'phone' => 'Please login to access the admin page.',
//         ])->onlyInput('email');
//     }
    
//     /**
//      * Log out the user from application.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function logout(Request $request)
//     {
//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();
//         return redirect()->route('login')
//             ->withSuccess('You have logged out successfully!');;
//     }    
// }


// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Hash;
// use App\Models\User;
// use Illuminate\Support\Facades\Validator;

// class AuthController extends Controller
// {
//     public function showRegisterForm()
//     {
//         return view('register');
//     }

//     public function register(Request $request)
//     {
//         // Validate form data
//         $validatedData = $request->validate([
//             'first_name' => 'required|string|max:255',
//             'last_name' => 'required|string|max:255',
//             'phone' => 'required|string|max:15',
//             'email' => 'required|string|email|max:255|unique:users',
//             'password' => 'required|string|min:8|confirmed',
//         ]);

//         // Create new user in database
//         $user = User::create([
//             'first_name' => $request->input('first_name'),
//             'last_name' => $request->input('last_name'),
//             'phone' => $request->input('phone'),
//             'email' => $request->input('email'),
//             'password' => Hash::make($request->input('password')),
//         ]);

//         // Log the user in
//         Auth::login($user);

//         // Redirect to home page after successful registration
//         return redirect()->route('home')->with('success', 'Registration successful!');
//     }

//     public function showLoginForm()
//     {
//         return view('login');
//     }

//     public function login(Request $request)
//     {
//     $credentials = $request->validate([
//         'phone' => 'required|string|max:15',
//         'password' => 'required|string',
//         ]);

//         if (Auth::attempt($credentials)) {
//         $request->session()->regenerate();
//         return redirect()->intended('home');
//         }

//         return back()->withErrors([
//         'email' => 'The provided credentials do not match our records.',
//         ]);
//     }


//     public function home()
//     {
//         return view('user.home');
//     }


//     /**
//      * Log out the user from application.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function logout(Request $request)
//     {
//         Auth::logout();
//         $request->session()->invalidate();
//         $request->session()->regenerateToken();
//         return redirect()->route('login')
//             ->withSuccess('You have logged out successfully!');;
//     } 

// }