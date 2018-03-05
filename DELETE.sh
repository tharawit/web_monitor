#!/bin/sh
docker stop $(docker ps -aq); docker rm $(docker ps -aq) ; docker image rm $(docker images -qa)