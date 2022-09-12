#!/bin/sh

php generator.php

rsync -av --exclude='composer.json' --exclude='composer.lock' build/ .

rm -rf build