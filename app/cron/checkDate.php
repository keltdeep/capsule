<?php

use Illuminate\Support\Facades\DB;

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
