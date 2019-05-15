<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;

class SubscribersController extends Controller
{
    public function index() {
    	$subscribers = Subscriber::all();
    	return view("subscribe", compact('subscribers'));
    }

    public function store() {
    	Subscriber::create(request(['user_email']));
    	return redirect('/subscribers');
    }

    public function create() {
    	return view("subscribers.create");
    }

    public function edit(Subscriber $subscriber) {
        return view("subscribers.edit", compact("subscriber"));
    }

    public function update(Subscriber $subscriber) {
        $subscriber->update(request(['user_email']));
        return redirect("/subscribers");
    }

    public function show (Subscriber $subscriber)
    {
        return view("subscribers.show", compact('subscriber'));
    }
 
    public function destroy (Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect("/subscribers");
    }
}
