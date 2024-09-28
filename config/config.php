<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'base_path' => 'https://api.lumalabs.ai/dream-machine/v1/generations',
    'api_token' => env('LUNALABS_AI_API_TOKEN', null),
    'token_type' => env('LUNALABS_AI_TOKEN_TYPE', "Bearer"),
];
