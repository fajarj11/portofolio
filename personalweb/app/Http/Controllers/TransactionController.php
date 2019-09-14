<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    
    public function __invoke(){
        DB::transaction(function(){
            $ammount = 20;
            $sender_id = 1;
            $receiver_id = 2;

            DB::table('blog')->where('id', $sender_id)
            ->decrement('id_ktg', $ammount);
            DB::table('blog')->where('id', $receiver_id)
            ->increment('id_ktg', $ammount);
        });
    }

}
