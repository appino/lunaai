<?php

namespace Appino\LunaAi\Classes;

use Appino\LunaAi\Objects\Frame;
use Appino\LunaAi\Objects\GenerateResource;
use Appino\LunaAi\Objects\Request;
use GuzzleHttp\Client;
use RuntimeException;

class LunaAI
{
    private $client;

    public function __construct($config) {
        $api_key = data_get('api_token', $config);
        $token_type = data_get('token_type',$config);
        if (empty($api_key))
            throw new RuntimeException("Luna Labs AI API Token can not be empty", 422);
        if (empty($token_type))
            throw new RuntimeException("Luna Labs AI Token Type can not be empty", 422);
        $this->client = new Client([
            'base_path' => data_get('base_path', $config),
            'defaults' => [
                'headers' => [
                    'accept' => 'application/json',
                    'authorization' => $token_type.' '.$api_key,
                    'content-type' => 'application/json',
                ],
            ]
        ]);
    }

    /**
     * @param $prompt
     * @param $start_frame Frame|array|null
     * @param $end_frame Frame|array|null
     * @return GenerateResource
     */
    public function Generate($prompt, $aspect_ratio, $loop = false, $start_frame = null, $end_frame = null) {
        $response = $this->client->request('POST', '', [
            'body' => json_encode((array)new Request([
                'prompt' => $prompt,
                'aspect_ratio' => $aspect_ratio,
                'loop' => $loop,
                'keyframes' => [
                    'frame0' => (array) $start_frame,
                    'frame1' => (array) $end_frame,
                ]
            ]), JSON_THROW_ON_ERROR)
        ]);
        return new GenerateResource($response);
    }
}
