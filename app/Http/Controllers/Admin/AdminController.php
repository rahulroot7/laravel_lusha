<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    //function for admin dashboartd
    public function add_api(){
        $view =  view('admin.api.add-api');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_api(){
        $view =  view('admin.api.all-api');
        return $view;
    }
    
     //function for admin dashboartd
    public function add_list(){
        $view =  view('admin.list.add-list');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_list(){
        $view =  view('admin.list.all-list');
        return $view;
    }
    
      //function for admin dashboartd
    public function manage_list(){
        $view =  view('admin.list.manage-list');
        return $view;
    }
    
     //function for admin dashboartd
    public function add_team(){
        $view =  view('admin.team.add-team');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_team(){
        $view =  view('admin.team.all-team');
        return $view;
    }
    
     //function for admin dashboartd
    public function manage_team(){
        $view =  view('admin.team.manage-team');
        return $view;
    }
    
     //function for admin dashboartd
    public function add_integrations(){
        $view =  view('admin.integrations.add-integrations');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_integrations(){
        $view =  view('admin.integrations.all-integrations');
        return $view;
    }
    
    
     //function for admin dashboartd
    public function add_plan(){
        $view =  view('admin.plan.add-plan');
        return $view;
    }
    
     //function for admin dashboartd
    public function all_plan(){
        $view =  view('admin.plan.all-plan');
        return $view;
    }
    
      //function for admin dashboartd
    public function all_prospecting(){
        $view =  view('admin.prospecting.all-prospecting');
        return $view;
    }
    
}


