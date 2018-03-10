#!/usr/bin/env bash

rm /var/vhost/mhoom.enri.nl/public/mhoom.mp3
/home/henri/bin/ffmpeg -t 3600 -i http://icecast.omroep.nl/radio1-bb-mp3 /var/vhost/mhoom.enri.nl/public/mhoom.mp3
