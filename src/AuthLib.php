<?php

namespace GcLib\AuthLib;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;


class AuthLib
{

    public static function testConnection(?string $msg = 'Polite MS saying hi...')
    {
        //@TODO usar envs
        $client = new Client([
            'base_uri' => 'http://nginx_auth'
        ]);

        try {
            $res = $client->request('POST', '/ms-auth/check', [
                'headers' => [
                    'APP-ID' => '1111'
                ]
            ]);
            return response()->json([
                'code' => $res->getStatusCode(),
                'message' => $res->getReasonPhrase(),
                'test' => $msg
            ]);
        } catch (GuzzleException $e) {
            return response()->json([
                'error' => $e->getMessage(),
            ], 500);
        }

    }
}
