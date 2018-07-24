#!/bin/bash
echo "All Service start"
sudo docker-compose -f docker/docker-compose.yml up --build --force-recreate
