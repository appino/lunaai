<?php

namespace Appino\LunaAi\Objects;

class GenerateResource {

    public $id;
    public $state;
    public $failure_reason;
    public $created_at;
    public $assets;
    public $version;
    public $request;

    public function __construct($data) {
        foreach ($data as $key => $value) {
            if ($key === 'assets') {
                $this->assets = new Assets($value);
            }
            if ($key === 'request') {
                $this->assets = new Request($value);
            }
            $this->$key = $value;
        }
    }

}
