<?php

namespace quizaccess_oqylyq\oqylyq;

require_once(__DIR__ . '/../../vendor/autoload.php');

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception as GuzzleException;

class Gate
{
    public static function make(ICommand $command) {
        /* initialize client */
        $client = new GuzzleClient();

        $response = $client->request(
            $command->getRequestMethod(),
            implode([get_config('quizaccess_oqylyq', 'oqylyq_api_url'), $command->getRequestUrl()]),
            [
                'headers' => array_merge($command->getRequestHeaders(), [
                    'Accept'          => 'application/json',
                    'X-Authorization' => get_config('quizaccess_oqylyq', 'oqylyq_api_key'),
                    'Content-Type'    => 'application/json'
                ]),
                'query'   => $command->getRequestQuery(),
                'json'    => $command->getRequestData()
            ]
        );

        return json_decode($response->getBody()->getContents(), true);
    }
}
