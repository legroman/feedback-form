<?php

mail('legromant@gmail.com', 'Just test from Roman', 'It is my massage', "From: Roman Legun" . "\r\n");

header('location: test.php');
