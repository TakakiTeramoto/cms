<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifCycleTestController extends Controller
{
    //
    public function showServiceContainerTest()
    {
        app()->bind('lifeCycleTest', function(){
            return 'ライフサイクルテスト';
        });
        
        $test =app()->make('lifeCycleTest');
        
        //サービスコンテナなしのパータン
        // $message = new Message();
        // $sample = new Sample($message);
        // $sample->run();
        
        //サービスコンテナありのパータン
        app()->bind('sample', Sample::class);
        $sample = app()->make('sample');
        
        
        
        dd($test, app());
    }
}


class Sample
{
    public $message;
    public function __construct(Message $message){
        $this->message = $message;
    }
    public function run(){
        $this->message->send();
    }
}


class Message

{
    public function send(){
        echo('メッセージ表示');
    }
}
