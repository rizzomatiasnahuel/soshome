<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;


class UsersApiController extends Controller
{
    public function getAllUsersApi() {
        
        $user = User::get()->toJson(JSON_PRETTY_PRINT);
        return response($user, 200);     
    
    }
  
      public function createUsersApi(Request $request) {
       
      

        $user= new user;
    
        $user ->name  = $request->name;
        $user ->email =$request->email;
        $user ->type = $request ->menber;
        $user ->password = bcrypt( $request ->password);
        $user -> save();
    
        return response($user)->json([
            "message" => "user record created"
        ], 201);      }
  
      public function getSUsersApi($id) {
        if (user::where('id', $id)->exists()) {
            $user = user::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($user, 200);
          } else {
            return response()->json([
              "message" => "user not found"
            ], 404);
          }      }
  
      public function updateUsersApi(Request $request, $id) {
        if (user::where('id', $id)->exists()) {
            $user = user::find($id);
            $user->name = is_null($request->name) ? $user->name : $request->name;
            $user->email = is_null($request->email) ? $user->email : $request->email;
            $user->type = is_null($request->type) ? $user->type : $request->type;

            $user->save();


            return response()->json([
                "message" => "records updated successfully"
            ], 200);
            } else {
            return response()->json([
                "message" => "user not found"
            ], 404);   


        	 }


         }

         
  
      public function deleteUsersApi ($id) {
            if(user::where('id', $id)->exists()) {
              $user = user::find($id);
              $user->delete();
      
              return response()->json([
                "message" => "records deleted"
              ], 202);
            } else {
              return response()->json([
                "message" => "user not found"
              ], 404);
            }      }
}
