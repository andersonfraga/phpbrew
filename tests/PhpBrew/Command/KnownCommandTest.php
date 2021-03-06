<?php
use CLIFramework\Testing\CommandTestCase;

class KnownCommandTest extends CommandTestCase
{

    public function setupApplication() {
        return new PhpBrew\Console;
    }

    /**
     * @outputBuffering enabled
     */
    public function testKnownCommand()
    {
        $this->assertTrue($this->runCommand('phpbrew known --update'));
        $this->assertTrue($this->runCommand('phpbrew known -u'));
        $this->assertTrue($this->runCommand('phpbrew known'));
        $this->assertTrue($this->runCommand('phpbrew known --more'));
        $this->assertTrue($this->runCommand('phpbrew known --old --more'));
    }
}

