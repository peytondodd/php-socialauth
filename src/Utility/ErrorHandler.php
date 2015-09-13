<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/13/15
 * Time: 12:57 PM
 */

namespace SocialAuth\Utility;


class ErrorHandler
{
    public static function error($error = null)
    {
        $msg = 'Unknown reasone';
        $errorCode = '000';

        if($error == 'empty_domain')
        {
            $msg = 'Please provide the domain name';
            $errorCode = '001';
        }
        elseif($error == 'invalid_domain')
        {
            $msg = 'Invalid domain';
            $errorCode = '001';
        }

        $error = array(
            'error' => array(
                'code' => $errorCode,
                'message' => $msg
            )
        );

        return $error;
    }
}