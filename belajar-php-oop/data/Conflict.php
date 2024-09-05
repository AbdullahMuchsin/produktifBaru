<?php

namespace Data\One {
    class Conflict
    {
        function __construct()
        {
            echo "Conflict 1" . PHP_EOL;
        }
    }
    class Dummy {}
    class Example {}
}

namespace Data\Two {
    class Conflict
    {
        function __construct()
        {
            echo "Conflict 2" . PHP_EOL;
        }
    }
}
