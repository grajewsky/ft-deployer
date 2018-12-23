<?php

namespace App\Deployer\FilesProvider;

use App\Config\DeployerConfig;

interface FilesProvider {
    public function __construct(DeployerConfig $cfg);
    public function setBasePath(string $basepath);
    /**
     * @return Array<string>
     */
    public function getListFiles(): array;
}
