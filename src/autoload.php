<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'thephpcc\\cqrs\\departureboard\\departureinformationboard' => '/DepartureInformationBoard.php',
                'thephpcc\\cqrs\\departureboard\\flight' => '/Flight.php',
                'thephpcc\\cqrs\\helloworld' => '/HelloWorld.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
