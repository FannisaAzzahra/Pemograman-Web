<?php

$p='12345'.'abc';
echo password_hash($p,PASSWORD_BCRYPT);