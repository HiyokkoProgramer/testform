<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

Class HelloViewComposer{

    public function compose(View $view){
        $view->with('view_message',$view->getPath());
    }
}