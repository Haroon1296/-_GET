<?php

namespace App\Http\Controllers\User;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if($request->ajax()){
            
            $any_search = $request->any_search;

            $users = User::where('name', 'LIKE', "%$any_search%")->where('id', '!=', Auth::id())->get();
            
            $array = array();

            foreach($users as $user){
                
                $user_data['id'] = $user['id'];
                $user_data['name'] = $user['name'];
                $user_data['email'] = $user['email'];
                $user_data['isfreindrequestsent'] = Auth::user()->hasSentFriendRequestTo($user);
                $user_data['isFriendWith'] = Auth::user()->isFriendWith($user);

                array_push($array, $user_data);
            }

            return response()->json(
                [
                    'any_search' =>  $any_search, 
                    'users' => $array
                ]
            );
        }
        return view('user.search.index');
    }
}
