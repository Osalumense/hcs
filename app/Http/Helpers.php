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
function getCounsellors()
{
    $counsellors = User::where('type', '=', (string)\UserType::COUNSELLOR)
    ->orderBy('id', 'DESC')->get();

    return $counsellors;
}