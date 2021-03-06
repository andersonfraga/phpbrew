<?php
namespace PhpBrew\Tasks;
use PhpBrew\Build;
use PhpBrew\Config;

/**
 * Task to run `make clean`
 */
class CleanTask extends BaseTask
{
    public function clean(Build $build) {
        return $this->_clean($build->getSourceDirectory());
    }


    public function _clean($path)
    {
        if (!file_exists($path . DIRECTORY_SEPARATOR . 'Makefile')) {
            return false;
        }
        $this->logger->info("===> Cleaning");
        $this->logger->debug("make -C $path clean");
        system("make -C $path clean");
        return true;
    }
}
