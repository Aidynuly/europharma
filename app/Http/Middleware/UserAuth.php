<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Traits\ResponseTrait;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserAuth
{
    use ResponseTrait;

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return JsonResponse
     */
    public function handle(Request $request, Closure $next): JsonResponse
    {
        $token = $request->bearerToken();
        if (empty($token)) {
            $this->response('Not authorized',null,401);
        }
        $user = User::whereAccessToken($request->bearerToken())
            ->whereNotNull('phone_verified')
            ->where('actived', true)
            ->first();

        if (!$user) {
            $this->response('Incorrect token', null, 400);
        }
        $request->attributes->add(['user' => $user]);

        return $next($request);
    }
}
