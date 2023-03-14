<?php

use App\Controllers\PageController;

return [
    "/" => [PageController::class, "homepage"],
    "/folder1" => [PageController::class, "folder1"],
    "/folder2" => [PageController::class, "folder2"],
    "/404" => [PageController::class, "notFound"],
];
