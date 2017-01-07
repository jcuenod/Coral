<?php
session_start();
$_SESSION["MODIFY_INSTALLATION_CLICKED"] = true;
header("Location: ../");
