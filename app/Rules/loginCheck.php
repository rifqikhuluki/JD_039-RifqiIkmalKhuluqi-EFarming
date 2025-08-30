<?php

namespace App\Rules;

use App\Models\admin;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Hash;


class loginCheck implements ValidationRule
{

    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $email = $this->request->input('email');
        $passwordInput = $this->request->input('password');
        $loginStatus = FALSE;

        $emailAdminCheck = admin::Where('email', $email)->count();
        if($emailAdminCheck > 0){
            $adminPassworDatabase = admin::where('email', $email)->value('password');
            if(Hash::check($passwordInput, $adminPassworDatabase)){
                $loginStatus = TRUE;
            }
        }

        if ($loginStatus) {
            $adminData = admin::where('email', $email)->first();
            Session::put('loginStatus', true);
            Session::put('adminData', $adminData);
        }else{
            $fail('username atau password ada yang salah');
        }
    }
}