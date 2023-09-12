<?php

namespace App\Http\Controllers\backend\finance_module;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountHeadController extends Controller
{
    public function AccountHead(){

        return view('backend.finance_module.account_head');
    }//end method

    public function AddAccountHead(){

        return view('backend.finance_module.add_account_head');
    }//end method

    public function StoreAccountHead(){


    }//end method

    public function ViewAccountHead(){

        return view('backend.finance_module.account_head_view');
    }//end method

    public function EditAccountHead(){

        return view('backend.finance_module.account_head_edit');
    }//end method

    public function UpdateAccountHead(){


    }//end method

    public function DeleteAccountHead(){


    }//end method
}
