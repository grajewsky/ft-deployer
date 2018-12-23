<?php

namespace App\Services;

use App\Config\DeployerConfig;


class Deployer {
    /**
     * @var App\Config\DeployerConfig
     */
    private $config  = null;

    public function __construct(DeployerConfig $config) {
        $this->config = $config;
    }
    public function service() {
        return $this->config['test'];
    }
}
