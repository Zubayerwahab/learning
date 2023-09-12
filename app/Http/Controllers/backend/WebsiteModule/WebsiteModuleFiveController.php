<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WebsiteModuleFiveController extends Controller
{
    public function manageLink(){
        return view('backend.website_module.manage_link');
    }

    public function manageSocialMedia(){
        return view('backend.website_module.manage_social_media');
    }


    // add section
    public function addLink(){
        return view('backend.website_module.add_folder.add_link');
    }

    public function addSocialMedia(){
        return view('backend.website_module.add_folder.add_social_media');
    }
}
