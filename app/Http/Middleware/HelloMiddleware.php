<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $data=[
                ['name'=>'山田太郎','mail'=>'taro@yamada'],
                ['name'=>'田中幸子','mail'=>'sachiko@tanaka'],
                ['name'=>'鈴木一郎','mail'=>'ichiro@suzuki']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
