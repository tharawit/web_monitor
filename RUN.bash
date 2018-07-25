#!/bin/bash
echo "All Service start"
docker-compose -f docker-compose.yml up --build --force-recreate
