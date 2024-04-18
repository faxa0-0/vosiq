<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
class AdminAuthController extends Controller
{
    public function showLoginForm(){
        return view('admin.auth.login');
    }
    /**
     * Обработать запрос на вход администратора
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            $user = Auth::user();
            session(['admin_email'=>$request['email']]);
            // Сохранение значений в сессию
            // Session::put('user_id', $user->id);
            // Если аутентификация успешна, перенаправляем администратора на защищенную страницу
            return redirect()->intended('/children');
        } else{
        return redirect()->route('login')->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'These credentials do not match our records.',
            'password'=>'Неверное имя пользовател или пароль',
        ]);
    }
    }
}
