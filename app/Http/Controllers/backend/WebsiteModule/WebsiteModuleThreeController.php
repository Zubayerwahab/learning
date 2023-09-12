<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WebsiteModuleThreeController extends Controller
{
    public function manageGallery(){
        return view('backend.website_module.manage_gallery');
    }

    public function manageNews(){
        return view('backend.website_module.manage_news');
    }

    public function manageEvent(){
        return view('backend.website_module.manage_event');
    }


    //add section
    public function addGallery(){
        return view('backend.website_module.add_folder.add_gallery');
    }

    public function addNews(){
        return view('backend.website_module.add_folder.add_news');
    }

    public function addEvent(){
        return view('backend.website_module.add_folder.add_event');
    }


}
