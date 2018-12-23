<?php

namespace App\Services;

use App\Config\DeployerConfig;
use App\Config\Params\DeployerParam;


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
    public function loadFiles(): array {
        $files = array();

        foreach($this->config[DeployerParam::FILES_PROVIDERS] as $providerClass) {
            $provider = new $providerClass($this->config);
            $files = array_merge($files, $provider->getListFiles());
        }
        return $files;
    }
}
