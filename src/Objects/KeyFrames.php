<?php

namespace Appino\LunaAi\Objects;

class KeyFrames
{

    public Frame $frame0;
    public Frame $frame1;

    public function __construct($data) {
        $this->frame0 = new Frame($data['frame0']);
        $this->frame1 = new Frame($data['frame1']);
    }

}
