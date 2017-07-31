<?php namespace Dezashibi\Cms\Http\Controllers;

use Dezashibi\Cms\Models\Admin;

use Flash;

class AdminPanelController extends BaseController {

    public function index()
    {
        $name = "Admin Panel from View";
        $admins = "hi"; //Admin::all();

        Flash::success('This is my message of Flash working');

        return view("cms::index",compact('name' , 'admins'));
    }

}