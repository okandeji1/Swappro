<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use Lcobucci\JWT\Parser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // private $client;

    public function construct()
    {
        // $this->middleware('auth');
        if(Auth::User()){
            return redirect('/dashboard');
        }else {

            return redirect('/login');
        }
    }

    public function index()
    {
      return  response()->json(User::all(),200);


    }

    public function login(Request $request)
    {
        // $status = 401;
        //     $response = ['error' => 'Unauthorised'];

        //     if (Auth::attempt($request->only(['email', 'password']))) {
        //         $status = 200;
        //         $response = [
        //             'user' => Auth::user(),
        //             'token' => Auth::user()->createToken('swape')->accessToken,
        //         ];
        //     }
        //     return redirect('/dashboard');

        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('swape')-> accessToken;
            // return response()->json(['success' => $success], $this-> successStatus);
                        return redirect('/dashboard');

        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cPassword' => 'same:password'
        ]);

        if($validator->fails()){
            return response()->json(['error' => $validator->errors(), 401]);
        }

        $data = $request->only(['firstname', 'lastname', 'email', 'password']);
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);
        $user->is_admn = 0;

        $token = $user->createToken('swape')->accessToken;

        session()->flash('success_message',"Registration successful");
        return redirect('/dashboard');
        // return response()->json([
        //     // 'user' => $user,
        //     // 'token' => $user->createToken('swape')->accessToken
        //     'msg' => 'User has been added',
        //     'title' => 'success'
        // ]);
    }

    public function logout(Request $request) {
        $value = $request->bearerToken();
        if ($value) {

            $id = (new Parser())->parse($value)->getHeader('jti');
            $revoked = User::table('oauth_access_tokens')->where('id', '=', $id)->update(['revoked' => 1]);
            $this->guard()->logout();
        }
        Auth::logout();
        return Redirect('/login');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    public function showProperty(User $property)
    {
        return response()->json($property);
    }

    public function showInterests(User $user)
    {
        return response()->json($user->interests()->with(['property'])->get());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
