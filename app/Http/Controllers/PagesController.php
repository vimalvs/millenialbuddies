<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
    	return view('welcome', [
    		'tasks' => [
    			'go to market',
    			'buy something',
    			'return to home',
    		]
    	]);

    }

    public function contact () {

    	$tasks = [
    		'go to market',
    			'buy something',
    			'return to home',
    	];
    	return view ("contact", compact('tasks'));
    }

    public function about () {
    	$tasks = [
    		'go to market',
    			'buy something',
    			'return to home',
    	];
    	return view('about')->withTasks($tasks);
    }
}
