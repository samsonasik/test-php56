<?php

class A
{
    public function run()
    {
        (clone $this)->execute();
    }

    public function execute()
    {
        echo 'test';
    }
}

(new A())->execute();
