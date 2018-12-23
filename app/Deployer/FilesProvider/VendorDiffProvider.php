<?php

namespace App\Deployer\FilesProvider;

use App\Config\DeployerConfig;
use App\Deployer\FilesProvider\FilesProvider;


class VendorDiffProvider implements FilesProvider {
    private $basePath = null;
    private $config = null;

    public function __construct(DeployerConfig $cfg) {
        $this->config  = $cfg;
    }
    public function setBasePath(string $basepath) {
        if(\file_exists($basepath)) {
            $this->basePath = $basepath;
        }
    }
    /**
     * @return Array<string>
     */
    public function getListFiles(): array {
        return array();
    }
}
