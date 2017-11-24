<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Room;

class PincodeGenerator extends Model
{
    /**
     * generate random code number
     */
    public function generateCode() 
    {
        $isExist = true;
        do {
            $number = mt_rand(1111, 9999);
            $isExist = $this->verifyNumber($number);
        } while($isExist);
        return $number;
    }

    /**
     * verify the code number is exist or not
     * @param int pincode number
     */
    public function verifyNumber($codeNumber) 
    {
        $pincode = Room::where('pincode', $codeNumber)->get();
        if(!$pincode->isEmpty()) {
            return true;
        } 
        return false;
    }
}
?>