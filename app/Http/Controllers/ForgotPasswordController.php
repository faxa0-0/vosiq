<?php

namespace App\Http\Controllers;

use Auth;
use Resend;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{   
    public function showForgotPassForm(){
        return view('admin.auth.forgot-password');
    }
    
    public function PassResetLink(Request $request){
        
        $user =Admin::where('email','=',$request->email)->first();
        $email = $request->input('email');
        if(!empty($user)){
            $user->remember_token=Str::random(40);
            $user->save();
           
            $resend = Resend::client('re_XTuxjari_KwZF9G6eCZQagKzE56wpQCaY');
            $confirmationCode = mt_rand(1000, 9999);
            $resend->emails->send([
            'from' => 'Vosiq_SChool_And_KInderarden@resend.dev',
            'to' => 'faxa2209@gmail.com',
            'subject' => 'Reset Password code',
            'html' => "<p>Your reset code is: <strong>$confirmationCode</strong></p>"
            ]);
            session(['conf_code'=>$confirmationCode]);
            session(['password_reset_email' => $email]);
            return view('admin.auth.enter-code');
        }else{
            return redirect()->back()->with('error',"email/номер телефона не найден");
        }
    }
    public function showCodeForm(Request $request){
        if (!$request->session()->has('password_reset_email')) {
            // Если email отсутствует в сессии, перенаправляем пользователя на страницу ввода email
            return redirect()->route('admin.forgot-password.form');
        }
    }
    public function CodeEnter(Request $request){
        $confirmationCode = session('conf_code');
        $confCode = $request->input('confirmation_code');
        if ($confCode== $confirmationCode){
            return redirect()->route('reset.pass.form') ;
        } else {
            return redirect()->route('admin.forgot-password.form')->with('error',"Был введен неверный код!");
        }
    }
    public function showResetPassForm(Request $request){
        if (!$request->session()->has('password_reset_email')) {
            return redirect()->route('admin.forgot-password.form');
        }
        return view('admin.auth.set-new-pass');
        
    }
    public function ResetPass(Request $request){
        $email = session('password_reset_email');
        $user = Admin::where('email', $email)->first();

        if ($request->password != $request->password_confirmation) {
            return redirect()->back()->with('error', 'Пароли не совпадают.');
        } else {
            $user->update([
                'password' => bcrypt($request->password)
            ]);
            return redirect()->route('login')->with('success', 'Пароль успешно изменен. Войдите, используя новый пароль.');
        }

}
}
