<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Room;
use App\Http\Controllers\Controller;
use Auth, Redirect, Input;

class MainController extends Controller
{
    /**
     * show the list of rooms
     */
    public function index() {
        $rooms = Room::all();
        return view('rooms.lists', compact('rooms'));
    }
    
    /**
     * show the page to join room
     */
    public function ask() {
        return view('rooms.join');
    }

    /**
     * join room logical behavior
     */
    public function join(Request $request) {
        $this->validate($request, [
            'pincode' => 'required|numeric',
        ]);

        $room = new Room;
        $room_info = $room->where('pincode', Input::get('pincode'))->first();

        if(count($room_info) > 0) { // room is exists
            $group_list = json_decode($room_info->group_list);
            array_push($group_list, Auth::user()->id);
            
            $updatedRoom = Room::find($room_info->id);
            $updatedRoom->group_list = json_encode($group_list);
            $updatedRoom->save();
            return Redirect::to('rooms/room/'.$room_info->id);
        } else {
            return Redirect::to('rooms/')->withInput()->withErrors("No match room exist");
        }
    }
}
