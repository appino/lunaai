<?php

namespace Appino\LunaAi\Objects;

use Appino\LunaAi\Enums\FrameType;

class Request {

    /**
     * @var string
     */
    public String $prompt;
    public String $aspect_ratio;
    public bool $loop;
    public KeyFrames $keyframes;

    public function __construct($data) {
        $this->prompt = $data['prompt'];
        $this->aspect_ratio = $data['aspect_ratio']??null;
        $this->loop = $data['loop']??false;
        $this->keyframes = new KeyFrames($data['keyframes']);
    }

}
