<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailController extends Controller
{
    public function verify() {
    return view('auth.verify-email');
}
    public function verifyRequest(EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/');
    }

    public function verifyNotification (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('status', 'verification-link-sent');
    }
}