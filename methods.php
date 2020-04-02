<?php

require 'FlashMessages.php';
// Start a Session
if (!session_id()) @session_start();
$api = "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";

// Instantiate the class
$msg = new \Plasticbrain\FlashMessages\FlashMessages();