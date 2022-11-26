<?php

use Vinkla\Hashids\Facades\Hashids;
use App\Models\User;

/**
 * Get Decoded ID
 *
 * @param $encodedId
 *
 * @return int|null
 */
function getDecodedId($encodedId)
{
    $decodedArray = Hashids::decode($encodedId);
    $id = null;
    if ($decodedArray) {
        $id = $decodedArray[0];
    }

    return $id;
}


/**
 * Get Decoded ID
 *
 *
 * @return array
 */
// <div class="avatar av-m"style="background-image: url('{{ asset('/storage/'.config('chatify.user_avatar.folder').'/'.$counsellor->avatar) }}' . ');"></div>
// {{ strlen($counsellor->first_name) > 12 ? trim(substr($counsellor->first_name,0,12)).'..' : $counsellor->first_name }}
function getCounsellors()
{
    $data = [];
    $counsellors = User::where('type', '=', (string)\UserType::COUNSELLOR)
    ->orderBy('id', 'DESC')->get();
    foreach($counsellors as $counsellor){
        $data['counsellor'] =
         '<table class="messenger-list-item" data-contact="{{ $counsellor->id }}">
        <tr data-action="0">
            <td>
            
            </td>
            <td>
                <p data-id="{{ $counsellor->id }}" data-type="user">
                
            </td>

        </tr>
    </table>';
    }

    return $counsellor;
}