#!/bin/bash

host="127.0.0.2";
port=7778;

php -S ${host}:${port} server.php
