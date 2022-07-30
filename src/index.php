<?php

namespace lad\HelloWorld;

class Index
{
    public function greet($greet = "Hello World")
    {
        echo "<br> OK: ".get_called_class();
    }
}

