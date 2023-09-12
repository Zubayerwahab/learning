<?php

namespace App\Http\Controllers\backend\WebsiteModule;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WebsiteModuleTwoController extends Controller
{
    public function manageContent(){
        return view('backend.website_module.manage_content');
    }

    public function breakingNews(){
        return view('backend.website_module.breaking_news');
    }

    public function manageAlbum(){
        return view('backend.website_module.manage_album');
    }



    // add section
    public function addContent(){
        return view('backend.website_module.add_folder.add_content');
    }

    public function addBreakingNews(){
        return view('backend.website_module.add_folder.add_braking_news');
    }

    public function addAlbum(){
        return view('backend.website_module.add_folder.add_album');
    }


}

?>
