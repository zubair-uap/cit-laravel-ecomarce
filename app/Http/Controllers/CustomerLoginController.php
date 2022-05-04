<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerLoginController extends Controller
{
    //
    public function customer_login(Request $request)
    {
        if (Auth::guard('customerlogin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
            // echo 'not ok';
        } else {
            // echo ' ok';
            return route('customer.register');
        }
    }

    public function customer_logout()
    {
        Auth::guard('customerlogin')->logout();
        return redirect('/');
    }
}
