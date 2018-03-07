#!/bin/sh
docker-compose up -d
screen php -S localhost:8000 -t ./lumen/public
