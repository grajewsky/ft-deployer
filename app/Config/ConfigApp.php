<?php

namespace App\Config;

use ArrayAccess;

abstract class ConfigApp implements ArrayAccess {

    protected $config = array();

    public function __construct() {
        $this->parameters();
    }
    protected function parameters(): void {
        /**
         * Optional parameters
         */
    }
    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->config[] = $value;
        } else {
            $this->config[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->config[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->config[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->config[$offset]) ? $this->config[$offset] : null;
    }

    public function getConfig(): array {
        return $this->config;
    }
}
