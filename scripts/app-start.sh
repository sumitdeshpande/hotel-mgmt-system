#!/bin/sh
echo 'Before apachectl start ' > /home/ec2-user/deploy-output.txt
apachectl start
echo 'After apachectl start ' > /home/ec2-user/deploy-output.txt