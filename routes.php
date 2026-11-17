<?php

return [
    '~^hello/(.*)$~' => [MainController::class, 'sayHello'],
    '~^bye/(.*)$~'   => [MainController::class, 'sayBye'],
    '~^$~'           => [MainController::class, 'main'],
];
