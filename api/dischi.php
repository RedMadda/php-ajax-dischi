<?php

include __DIR__ . "/../db/db_dischi.php";

header("Content-Type: application/json");
echo json_encode($dischi);

