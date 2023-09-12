<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;
use App\Models\AddCareer;
use App\Models\AddNotice;
use Illuminate\Http\Request;
use PHPUnit\Framework\TestStatus\Notice;

class WebsiteModuleFourController extends Controller
{
//    public $add_notice,$notice;
public $add_career,$career;





    public function boardResult(){
        return view('backend.website_module.board_result');
    }


    //Notice_Property
    public function addNotice(){
        return view('backend.website_module.add_folder.add_notice');

    }
   public function newAddNotice(Request $request)
   {
       AddNotice::createAddNotice($request);
       return redirect()->back()->with('Success','Notice Created Successfully');
//       AddNotice::create([
//           'title'=>$request->title,
//           'file_upload'=>$request->file,
//           'notice'=>$request->notice,
//       ]);
//       return redirect()->route('add_notice')->with('success','Notice Created Successfully.');


   }
    public function manageNotice( Request $request)
    {
        $this->add_notice = AddNotice::orderBy('id','DESC')->get();
        return view('backend.website_module.manage_notice',[
            'add_notice'=>$this->add_notice
        ]);

    }
   public function editNotice($id)
   {
       $this->notice = AddNotice::find($id);
       return view('backend.website_module.edit',[
           'notice' => $this->notice
       ]);

   }
  public function updateNotice(Request $request,$id)
  {
      AddNotice::updateAddNotice($request,$id);
      return redirect('/manage/notice')->with('success','Notice Updated successfully');

  }
  public function deleteNotice($id)
  {
      $this->notice = AddNotice::find($id);
      $this->notice->delete();
      return redirect()->back()->with('success','Routine Deleted Successfully');

  }


    public function addCareer(){
        return view('backend.website_module.add_folder.add_Career');
    }
    public function newCareer(Request $request)
    {
        AddCareer::createAddCareer($request);
        return redirect()->back()->with('success','Career Created Successfully');
    }
    public function manageCareer(Request $request)
    {
        $this->career = AddCareer::orderBy('id','DESC')->get();
        return view('backend.website_module.manage_career',[
            'add_career'=>$this->add_career
        ]);
    }

    public function addBoardResult(){
        return view('backend.website_module.add_folder.add_board_result');
    }


}

