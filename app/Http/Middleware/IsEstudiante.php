<?php 
namespace App\Http\Middleware;

use Closure;
use Illuminate\Session\SessionManager;
use Illuminate\Contracts\Auth\Guard;

class IsEstudiante {

    protected $session;
    protected $auth;

    public function __construct(SessionManager $session, Guard $auth)
    {
        $this->session = $session;
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('estudiante')) {
            $this->auth->logout();

            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->to('/');
            }
        }
        return $next($request);
    }

}
