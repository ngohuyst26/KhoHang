<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use PHPOpenSourceSaver\JWTAuth\Exceptions\JWTException;

class AuthTenantController extends Controller
{
    /**
     * Register a User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register() {

        $validator = Validator::make(request()->all(), [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $user = new User;
        $user->name     = request()->name;
        $user->email    = request()->email;
        $user->password = bcrypt(request()->password);
        $user->save();

        $user->wallet()->create([
            'balance' => 0
        ]);

        $user->assignRole('customer');

        return response()->json($user, 201);
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = auth()->claims(['tenant_id' => tenant('id')])->attempt($credentials)) {
                return response()->json(['error' => 'Username hoặc password không đúng'], 400 );
            }
        } catch (JWTException $e) {

            return response()->json(['error' => 'Could not create token'], 500);
        }
        return response()->json([
            'token' => $token,
            'roles' => auth()->user()->getRoleNames(),
            'subdomain' => $request->getHttpHost()
        ]);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me(Request $request)
    {
       $user = auth()->user();
       $tenant = Tenant::find(tenant('id'));
        return response()->json([
            'user_id'         => $user->id,
            'name'            => $user->name,
            'email'           => $user->email,
            'address'         => $user->address,
            'date_of_birth'   => $user->date_of_birth,
            'phone'           => $user->phone,
            'roles'           => $user->getRoleNames(),
            'subdomain'       => $request->getHttpHost(),
            'tenant_id'       => tenant('id'),
            'plan'            => $tenant->plan
        ]);
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
