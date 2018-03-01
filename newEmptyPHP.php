<?php

$sql = "DELETE FROM nodes WHERE ID in :ids";
// :ids --> (1, 2, 3, 4, 5, 9, 6)