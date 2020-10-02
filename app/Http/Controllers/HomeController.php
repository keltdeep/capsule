<?php

namespace App\Http\Controllers;

use DateTimeZone;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $sessionId = $request->session()->get("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d");

        $date = DB::table('users')
            ->where('id', $sessionId)
            ->value('dateLetter');

        //расчет - сколько дней осталось до отправки письма
        $datetime1 = date_create($date);
        $datetime2 = date_create('now',new DateTimeZone('Asia/Yekaterinburg'));
        $interval = date_diff($datetime1, $datetime2);
        $dateFinal = $interval->format('%y Лет %M Месяцев %D Дней');

        return view('home', compact('dateFinal'));
    }
}
