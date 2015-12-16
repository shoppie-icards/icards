<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Route;
use View;
use App\Merchants;
use Auth;
use Response;

class InitializeCardController extends Controller
{
    public function __construct(){
        $titlePage = 'Admin Panel';
        $className = substr(__CLASS__,21);
        $actionName = substr(strrchr(Route::currentRouteAction(),"@"),1);
        View::share(array(
            'titlePage' => $titlePage,
            'className' => $className,
            'actionName' => $actionName,
        ));
        $this->afterFilter(function() {

        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = Auth::user()->id;
        $autoFieldMerchant = Merchants::where('users_id' , $user_id)->get()->first();
        return view('merchant.initialize-card' , array(
                'infoMerchants' => $autoFieldMerchant
            ));
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
        $user_id = Auth::user()->id;
        $dataCreateCard = $request->all();
        $checkCreateCardByUser = Merchants::where('users_id', $user_id)->get()->first();
        if ($checkCreateCardByUser == null) {
            $result = Merchants::storeMerchant($dataCreateCard);
                if ($result == true ) {
                    return Response::json([
                        'success'   => true,
                        'priority'  => 'success',
                        'messages'  => 'Tạo Merchants thành công'
                    ]);
                } else {
                    return Response::json([
                        'success'   => false,
                        'priority'  => 'warning',
                        'messages'  => 'Tạo merchants thất bại'
                    ]);
                }
        } else {
            $updateMerchant = Merchants::where('users_id' , $user_id)->update(array(
                'name' => $request->trademark
            ));

            if ($updateMerchant != null) {
                return Response::json([
                    'success'   => true,
                    'priority'  => 'success',
                    'messages'  => 'Cập nhật Merchants thành công'
                ]);
            } else {
                return Response::json([
                    'success'   => false,
                    'priority'  => 'warning',
                    'messages'  => 'Cập nhật Merchants thất bại'
                ]);
            }
            
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
