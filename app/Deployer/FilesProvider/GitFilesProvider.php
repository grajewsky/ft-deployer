<?php

namespace App\Deployer\FilesProvider;

use App\Config\DeployerConfig;
use App\Config\Params\DeployerParam;
use App\Deployer\FilesProvider\FilesProvider;
use Cz\Git\GitRepository;

class GitFilesProvider implements FilesProvider {
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
        $projectPath  = $this->config[DeployerParam::PROJECT_PATH];
        $repo =  new GitRepository($projectPath);
        var_dump($repo->hasChanges());

        return array();
    }
}
