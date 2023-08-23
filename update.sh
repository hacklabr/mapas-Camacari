#!/bin/bash
git pull

git submodule update

docker-compose build --no-cache --pull

./stop.sh
./start.sh
