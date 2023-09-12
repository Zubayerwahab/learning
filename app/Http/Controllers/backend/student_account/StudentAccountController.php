<?php

namespace App\Http\Controllers\backend\student_account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAccountController extends Controller
{
    public function AdmissionFee(){

        return view('backend.student_account.admission_fee');
    }//end method

    public function FeeCollection(){


        return view('backend.student_account.fee_collection');
    }//end method

    public function FeeReCollection(){


        return view('backend.student_account.fee_recollection');
    }//end method

        public function MonthlyFee(){


        return view('backend.student_account.monthly_fee');
    }//end method

        public function QuickCollection(){


        return view('backend.student_account.quick_collection');
    }//end method

        public function StudentFee(){


        return view('backend.student_account.student_fee');
    }//end method

    public function StudentWaiver(){


        return view('backend.student_account.student_waiver');
    }//end method

    public function PrintCollectionInvoice(){


        return view('backend.student_account.print_collection_invoice');
    }//end method

}
