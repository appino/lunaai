<?php

namespace Appino\LunaAi\Objects;

use Appino\LunaAi\Enums\FrameType;

class Frame {

    /**
     * @var FrameType|string
     */
    public String $type;
    public String $id;
    public String $url;

    /**
     * @param $type FrameType|String|array
     * @param $data String|null can be an url or id of generated video
     */
    public function __construct($type, $data = null) {
        if (is_array($type)) {
            $data = $type['id']??$type['url'];
            $this->type = $type['type'];
        } else {
            $this->type = $type;
        }
        if ($this->type === FrameType::IMAGE) {
            $this->url = $data;
        } else {
            $this->id = $data;
        }
    }

}
