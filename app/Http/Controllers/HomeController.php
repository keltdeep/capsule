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
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $data = DB::table('letters')->get();
        $dateNow = date('Y-m-d');
        foreach ($data as $value) {
            if ($dateNow == $value->dateLetter) {
                //sendMessage
                $value->status = true;
                DB::table('letters')
                    ->where('id', $value->id)
                    ->update(['status' => $value->status]);
            }
        }

        $sessionId = $request->session()->get("login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d");

        $dataUser = DB::table('users')
            ->where('id', $sessionId)
            ->get();

        $date = DB::table('letters')
            ->where('email', $dataUser[0]->email)
            ->get();

        if ($date[0]->status) {
            return view('showSentLetter', compact('dataUser'));
        }

        //расчет - сколько дней осталось до отправки письма
        $datetime1 = date_create($date[0]->dateLetter);
        $datetime2 = date_create('now',new DateTimeZone('Asia/Yekaterinburg'));
        $interval = date_diff($datetime1, $datetime2);
        $dateFinal = $interval->format('%y Лет %M Месяцев %D Дней');

        return view('home', compact('dateFinal'));
    }
}
