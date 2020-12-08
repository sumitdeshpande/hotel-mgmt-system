#!/bin/sh
echo 'Before apachectl stop ' > /home/ec2-user/deploy-output.txt
apachectl stop
echo 'After apachectl stop ' > /home/ec2-user/deploy-output.txt