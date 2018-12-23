<?php


namespace App\Config;

use App\Config\ConfigApp;
use App\Config\Params\DeployerParam;

class DeployerConfig extends ConfigApp {

    protected $config = array(
        DeployerParam::PROJECT_PATH => null,
        DeployerParam::FILES_PROVIDERS => [
            \App\Deployer\FilesProvider\GitFilesProvider::class,
            \App\Deployer\FilesProvider\VendorDiffProvider::class
        ]
    );
    protected function parameters() : void {
        $this->config[DeployerParam::PROJECT_PATH] = base_path("source");
    }

}
