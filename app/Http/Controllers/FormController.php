<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;


class FormController extends Controller
{
    public function confirm(\App\Http\Requests\Request $req){

        $all = $req->all();

        return view('confirm')->with($all);
    }

    public function store(Request $req){
        $form = new Form;

        $form->group = $req->group;
        $form->username = $req->username;
        $form->age = $req->age;
        $form->tel = $req->tel;
        $form->mail = $req->mail;
        $form->opinion = $req->opinion;

        $form->save();

        return view('complete');
    }
}
