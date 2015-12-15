<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Response;
use App\Users;
use PHPMailer;
use Mail;
use Auth;
use Session;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function getRegister() {
        return view('auth.register');
    }

    public function postRegister(Request $request) {
        $dataRegister = $request->all();
        $token_active = md5(time()).md5($request->email);
        $validator = Validator::make(
                [
                    'username'      => $request->username,
                    'password'      => $request->password,
                    'repassword'    => $request->repassword,
                    'email'         => $request->email,
                ],
                [
                    'username'      => 'unique:users,user_name|required|min:4',
                    'email'         => 'unique:users,email|email',
                    'password'      => 'required',
                    'repassword'    => 'same:password'
                ],
                [
                    'username.required' => "Tên tài khoản không được để trống",
                    'password.required' => "Mật khẩu không được để trống",
                    'username.min'      => "Tên tài khoản ít nhất 4 ký tự",
                    'username.unique'   => "Tên tài khoản đã được sử dụng",
                    'email.unique'      => "Email đã được sử dụng",
                    'repassword.same'   => "Xác nhận mật khẩu không đúng",
                    'email.email'       => "Không đúng định dạng Email",

                ]
        );
        if ($validator->fails()) {
            return back()->withErrors($validator->messages())->withInput();
        }
        else {
            $result = Users::storeRegister($dataRegister, $token_active);
            if ($result == true) {
                $mail = new PHPMailer();
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'developer.phainv@gmail.com';
                $mail->Password = 'Phainv@@77';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;
                $mail->From = 'developer.phainv@gmail.com';
                $mail->FromName = 'Active Account iCards';
                $mail->addAddress($request->email);

                $mail->isHTML(true);
                $mail->Subject = 'Active Account!';
                $linkActiveAccount = URL('active'. '/' . $token_active);
        

                $mail->Body = view('letter.verify-account', array('username' => $request->username, 'link' => $linkActiveAccount));
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                return back()->withSuccess("Vui lòng vào Email bạn vừa đăng ký để xác nhận tài khoản");
            } else {
                return back()->withErrros('Tạo tài khoản thất bại');
            }
        }
    }

    //Active account
    public function activeAccount($token) {
        $getUserActive = Users::where('token_active', $token)->get()->toArray();
        if ($getUserActive == null) {
            return redirect('register')->withErrors('Link không tồn tại hoặc đã được kích hoạt. Vui lòng kiểm tra lại');
        } else {
            User::where('token_active' , $token)->update(array(
                    'token_active' => 'confirmed',
                    'active' => '1',
                ));
            return redirect('merchant-login')->withSuccess('Kích hoạt tài khoản thành công. Vui lòng đăng nhập');
        }

    }

    public function getLogin() {
        return view('auth.login');
    }

    public function postLogin(Request $request) {
        $credentials = $request->only('email','password');
        if(Auth::attempt( $credentials, true ) ) {
            if (Auth::user()->active == 1 && Auth::user()->type == 1) {
                return redirect('merchant');
            } elseif(Auth::user()->active == 1 && Auth::user()->type == 2){
                return redirect('manage');
            } elseif (Auth::user()->active == 2) {
                Auth::logout();
                return redirect('merchant-login')->withErrors('Tài khoản chưa được kích hoạt bằng Email');
            } elseif (Auth::user()->active == 0) {
                Auth::logout();
                return redirect('merchant-login')->withErrors('Tài khoản của bạn đã bị khóa');
            } else {
                return redirect('/');
            }
        } else {
            return back()->withErrors('Sai tên tài khoản hoặc mật khẩu. Vui lòng kiểm tra lại');
            Auth::logout();
        }
    }

    public function getLogout() {
        Auth::logout();
        echo "Logout done !";
    }
}
