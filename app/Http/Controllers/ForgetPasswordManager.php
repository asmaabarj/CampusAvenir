<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ForgetPasswordManager extends Controller
{
    public function forgetPassword()
    {
        return view('Authentification.ForgetPassword.forgetPassword');
    }
    public function forgetPasswordPost(Request $requets)
    {

        $requets->validate([
            'email' => 'required|email|exists:users'
        ]);
        $token = Str::random(64);
        DB::table('password_reset_tokens')->insert([
            'email' => $requets->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        
        Mail::send('Authentification.forgetPassword.resetPassword', ['token' => $token,], function ($message) use ($requets) {
            $message->to($requets->email);
            $message->subject('Reset Password');
        });
        return redirect('/forgetPassword')->with('success', "We Have Send an email to reset password Please Check.");
    }
    public function resetPassword($token)
    {

        return view('Authentification.forgetPassword.newPassword', compact('token'));
    }
    public function resetPasswordPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',

            'password' => 'required|min:3|max:16',
            'cPassword' => 'required|min:3|max:16',
        ]);

        if ($request->password !== $request->cPassword) {
            return redirect()->back()->with('error', 'Password and confirmation password do not match.');
        }
        $updatePassword =    DB::table('password_reset_tokens')->where(
            [
                "email" => $request->email,
                "token" => $request->token,
            ]
        )->first();

        if (!$updatePassword) {
            return redirect()->back()->with('error', 'Invalid Data.');
        }
        User::where("email", $request->email)->update([
            "password" => Hash::make($request->password)
        ]);
        $updatePassword =    DB::table('password_reset_tokens')->where(
            [
                "email" => $request->email,
                "token" => $request->token,
            ]
        )->delete();
        return redirect('/')->with('success', "Password Reset Successfulyy.");
    }
}