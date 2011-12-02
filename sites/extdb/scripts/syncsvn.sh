#!/bin/sh
cd /home/zcomm/svn/i18n/trunk/nongettext
/usr/bin/svn update
# create target directories
for TARGET_DIRS in `find . -type d | egrep '^\./templates/modules/([A-Za-z0-9_-]+)/[0-9.]+/'| grep -v svn|sed 's!\./templates/!!g';\
find . -type d | egrep '^\./templates/themes/([A-Za-z0-9_-]+)/[0-9.]+/'| grep -v svn|sed 's!\./templates/!!g';\
find . -type d | egrep '^\./templates/core/[0-9.]+/'| grep -v svn|sed 's!\./templates/!!g'`
do
  for L2CODES in `find  -maxdepth 1 -type d |egrep '\./[a-zA-Z_]{1,5}$'| sed 's!./!!g'`
  do
    FINALTARGET=`echo $L2CODES/$TARGET_DIRS | sed "s/__XXXXX__/$L2CODES/g"`
    if [ ! -d $FINALTARGET ]; then
      mkdir -p $FINALTARGET
    fi
  done
done

# copy files over IF they dont exist already
for FILES in `find . -type f | egrep '^\./templates/modules/([A-Za-z0-9_-]+)/[0-9.]+/'| grep -v svn;\
find . -type f | egrep '^\./templates/themes/([A-Za-z0-9_-]+)/[0-9.]+/'| grep -v svn;\
find . -type f | egrep '^\./templates/core/[0-9.]+/'| grep -v svn`
do
  for L2CODES in `find  -maxdepth 1 -type d |egrep '\./[a-zA-Z_]{1,5}$' | sed 's!./!!g'`
  do
    DST=`echo $FILES|sed 's!\./templates/!!g'| sed "s/__XXXXX__/$L2CODES/g"`
    if [ ! -f $L2CODES/$DST ]; then
      cp $FILES $L2CODES/$DST
      svn add --parents $L2CODES/$DST
    fi
   done
done
echo "Commiting..."
/usr/bin/svn commit -m "Auto rollout of non-gettext templates" 
cd /home/zcomm/svn/i18n/tags
/usr/bin/svn update
