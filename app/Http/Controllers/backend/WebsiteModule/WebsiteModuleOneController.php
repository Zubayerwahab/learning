<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WebsiteModuleOneController extends Controller
{
    public function slideShow(){
        return view('backend.website_module.slide_show_list');
    }

    public function messageCorner(){
        return view('backend.website_module.message_corner');
    }

    public function manageMenu(){
        return view('backend.website_module.manage_menu');
    }


    // add section
    public function addSlideShow(){
        return view('backend.website_module.add_folder.add_slide_show');
    }

    public function addMessage(){
        return view('backend.website_module.add_folder.add_message');
    }

    public function addMenu(){
        return view('backend.website_module.add_folder.add_menu');
    }


}
