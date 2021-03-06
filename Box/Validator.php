<?php

namespace Box;

class Validator
{
    private $commands = ['Controller', 'Model', 'Middleware'];

    public function validate($command)
    {
        if (!in_array($command, $this->commands)) {
            exit("this command $command does not exist \n");
        }
    }
}
