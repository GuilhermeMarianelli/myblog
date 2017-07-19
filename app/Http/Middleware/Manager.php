<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     * com esse Middleware vamos dizer ao Laravel que apenas administradores padem acessar a área administrativa
     * verificamos se o usuário não está autenticado
     * caso não esteja, o redirecionamos para a página de login
     * caso esteja, veficiamos se o papel do mesmo no sistema é manager
     * se for, ele segue o caminho da requisição
     * caso contrário, o usuário vai ser redirecionado para URL raíz
     *
     */
    public function handle($request, Closure $next)
    {   
        if(!Auth::check()){
            return redirect('users/login');
        }else{
            $user = Auth::user();
            if($user->hasRole('manager')){
                return $next($request);
            }else{
                return redirect('/');
            }
        }
    }
}
