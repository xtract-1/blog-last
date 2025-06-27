<?php
require 'admin/config/constants.php';
// destroy all session
session_destroy();
header('location: ' . ROOT_url);
die();
