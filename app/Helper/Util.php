<?php

namespace App\Helper;


class Util
{
    public static function getSuccessMessage($message, $data)
    {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message
        ];
    }


    public static function getErrorMessage($message, $data = null)
    {
        return [
            'success' => false,
            'data' => $data,
            'message' => $message
        ];
    }
}
