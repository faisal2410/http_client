<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LearnHttpController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Sending a get request

        // $response=Http::get("https://jsonplaceholder.typicode.com/posts/1");
        // $response=Http::get("https://jsonplaceholder.typicode.com/posts/1")->json();
        // dd($response);


        // dd($response->status());
        // dd($response->failed());
        // dd($response->successful());
        // dd($response->headers());
        // dd($response->redirect());
        // dd($response->clientError());
        // dd($response->notFound());
        // dd($response->ok());



        // dd($response->collect());
        // dd($response->collect()->first());


        // dd($response['title']);


        // $response=Http::get("https://jsonplaceholder.typicode.com/posts/1")->body();
        // dd($response);





        // $response=Http::get("https://jsonplaceholder.typicode.com/posts/?userId=1");

        // $response=Http::get("https://jsonplaceholder.typicode.com/posts/",[
        //     'userId'=>1
        // ]);
        // dd($response->collect()->first());
        // dd($response->collect()->where('id','=','10')->first());

        // Response: body,json,status,collect, headers, redirect,successful,failed,clientError, notFound, ok
        // response is ArrayAccess
        // defined statuses methods
        // query parameters
        // post request:form data, json data, asJson, asForm,withToken, withBasicAuth,retry()
        // timeout(), withHeaders(), serverError
        // Bearer fewe11323

            // $response=Http::post("https://jsonplaceholder.typicode.com/posts",[
            //     'title'=>'Hello world',
            //     'userId'=>1,
            //     'body'=>'thank you'

            // ]);

            // dd($response->status());
            // dd($response->created());
            // dd($response->json());


            // $response=Http::asForm()->post("https://jsonplaceholder.typicode.com/posts",[
            //     'title'=>'Hello world',
            //     'userId'=>1,
            //     'body'=>'thank you'

            // ]);

            // dd($response->status());
            // dd($response->created());
            // dd($response->json());


            // $response=Http::asForm()->post("https://jsonplaceholder.typicode.com/posts",[
            //     'title'=>'Hello world',
            //     'userId'=>1,
            //     'body'=>'thank you'

            // ]);

            // dd($response->status());
            // dd($response->created());
            // dd($response->json());


            // $response=Http::withToken("fewe11323")->post("https://jsonplaceholder.typicode.com/posts",[
            //     'title'=>'Hello world',
            //     'userId'=>1,
            //     'body'=>'thank you'

            // ]);

            // dd($response->status());
            // dd($response->created());
            // dd($response->json());


            // $response=Http::dd()->withHeaders([
            //     'Content-Type'=>'application/json; charset=UTF-8',

            // ])-> post("https://jsonplaceholder.typicode.com/posts",[
            //     'title'=>'Hello world',
            //     'userId'=>1,
            //     'body'=>'thank you'

            // ]);

            // dd($response->serverError());

        // General: Basic Authentication, Bearer Token,retries,timeout,error handling, dumping, throwingException,headers
    }
}
