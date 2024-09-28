<?php

namespace Appino\LunaAi\Enums;

abstract class FrameType {

    const IMAGE = 'image';

    const GENERATION = 'generation';

    public function convertValueToKey($data) {
        $variables = get_class_vars(get_class($this));
        foreach ($variables as $key => $value) {
            if ($value === $data) {
                return $key;
            }
        }
        return self::IMAGE;
    }

}
