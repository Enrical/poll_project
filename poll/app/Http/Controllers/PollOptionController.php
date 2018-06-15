<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PollOption;

class PollOptionController extends Controller
{
    public function index()
    {
        $poll_options = DB::table('poll_options')->get();
        $view = view('poll_option.index');
        $view->poll_options = $poll_options;
        return $view;
    }

}
