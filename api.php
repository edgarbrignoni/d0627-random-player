<?php
    $videos = ['s4vk13IHZC4','8obImUWaTQw','GwyFDuZb2K4','s4vk13IHZC4','8obImUWaTQw','GwyFDuZb2K4'];
    $i = rand(0,5);
    
    echo json_encode([
    'video' => $videos[$i]
    ]);
?>