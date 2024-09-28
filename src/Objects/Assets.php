<?php

namespace Appino\LunaAi\Objects;

use Appino\LunaAi\Enums\FrameType;

class Assets {

    /**
     * @var string
     */
    public String $video;

    public function __construct($data) {
        $this->video = $data['video'];
    }

}
