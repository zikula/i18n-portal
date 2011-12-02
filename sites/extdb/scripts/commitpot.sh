#!/bin/sh
CMESSAGE="$2"
COMMITPATH=$1
echo $CMESSAGE
echo $COMMITPATH
cd /home/zcomm/svn/i18n/trunk/gettext/templates
/usr/bin/svn add --parents $COMMITPATH
/usr/bin/svn commit -m "$CMESSAGE" 
