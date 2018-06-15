<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\PollOption;

class PollOptionController extends Controller
{
    public function index($code)
    {
        $poll_options = DB::table('poll_options')->where('code', $code)->get();
        $view = view('poll_option.index');
        $view->poll_options = $poll_options;
        return $view;
    }

}
