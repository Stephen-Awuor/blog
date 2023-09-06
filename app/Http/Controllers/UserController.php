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
        'lasttname' => ['required', 'min:3'],
        'topic' => ['required', 'min:3'],
        'gender' => [],
        'email' => ['required', 'email', Rule::unique('users', 'email')],
        'password' => 'required|confirmed|min:8'
    ]);
 
    $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        //auth()->login($user); 
        return redirect('/login')->with('message', 'Registration successfully!');
    }
}
