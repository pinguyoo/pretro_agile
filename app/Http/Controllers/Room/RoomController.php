<?php

namespace App\Http\Controllers\Room;

use Illuminate\Http\Request;
use App\Room;
use App\PincodeGenerator;
use App\Http\Controllers\Controller;
use Auth, Redirect, Input;

class RoomController extends Controller
{
    public function __construct() {
        
    }

    /**
     * show the page to create room
     */
    public function create() {
        return view('rooms.create');
    }

    /**
     * create room logical behavior
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:15',
        ]);
        
        // generate pincode by PincodeGenerator
        $generator = new PincodeGenerator;
        $room = new Room;

        $room->name = Input::get('name');
        $room->owner_id = Auth::user()->id;
        $room->group_list = json_encode(array(Auth::user()->id));
        $room->pincode = $generator->generateCode();

        if($room->save()) {
            return Redirect::to('rooms/room/'.$room->id);
        } else {
            return Redirect::back()->withInput()->withErrors('Create Failed');
        }
    }

    /**
     * show the room by id
     * @param int room id
     */
    public function show($id) {
        return view('rooms.show')->withPage(Room::find($id));
    }

    /**
     * destroy the room by id
     * @param int room id
     */
    public function destroy($id) {
        $room = Room::find($id);
        $room->delete();

        return Redirect::to('rooms.lists');
    }
}
