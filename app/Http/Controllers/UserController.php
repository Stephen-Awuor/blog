<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
   
    public function login_form(){
        return view('auth.login');
    }
    public function reg_form(){
        return view('auth.register');
    }

    public function new_user(Request $request){
        $formFields = $request->validate([
        'firstname' => ['required', 'min:3'],
        'lastname' => ['required', 'min:3'],
        'topic' => ['required', 'min:3'],
        'phone' => ['required', 'min:3'],
        'gender' => [],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => ['required', 'min:8'],
        'password_confirmation' => ['required', 'min:8'] 
    ]);
 
    $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        //auth()->login($user); 
        return redirect('login')->with('message', 'Registration successfully!');
    }


    public function login(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
            ]);
            If (auth()->attempt($formFields)){
                $request->session()->regenerate();
                return redirect('home')->with('message', 'Log in successful!');
            }
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');  
    }
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'You have been logged out!');
    }   
}
