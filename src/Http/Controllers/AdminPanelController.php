<?php namespace Dezashibi\Cms\Http\Controllers;

use Dezashibi\Cms\Models\Admin;

class AdminPanelController extends BaseController {

    public function index()
    {
        $name = "Admin Panel from View";
        $admins = "hi"; //Admin::all();

        return view("cms::index",compact('name' , 'admins'));
    }

}