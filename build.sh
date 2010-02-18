#!/bin/sh

rm -f say-it-20.zip
cd ..
zip --exclude .git --exclude build.sh -r say-it-20/say-it-20.zip say-it-20/
cd say-it-20
