<?php

require 'vendor/autoload.php';

$loop = React\EventLoop\Factory::create();

$server = new React\Http\Server(function (Psr\Http\Message\ServerRequestInterface $request) {
    return new React\Http\Response(
        200,
        array('Content-Type' => 'text/plain'),
        "Hello World!\n"
    );
});

$socket = new React\Socket\Server('0.0.0.0:8080', $loop);
$server->listen($socket);

echo "Server running at http://127.0.0.1:8080\n";

$loop->run();