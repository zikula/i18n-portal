#!/bin/sh
MANAGEPY=/usr/local/Pootle/manage.py
cd /var/lib/pootle/po/zikula
echo "Updating local files from SVN"
svn update

# remove invalidly placed PO files
find . -type f| egrep '\./([A-Za-z_]+|^templates)/modules/([A-Za-z0-9_-]+)/[a-z_-]+\.po$'|xargs svn delete --force
find . -type f| egrep '\./([A-Za-z_]+|^templates)/themes/([A-Za-z0-9_-]+)/[a-z_-]+\.po$'|xargs svn delete --force
find . -type f| egrep '\./([A-Za-z_]+|^templates)/core/[a-z_-]+\.po$'|xargs svn delete --force
find . -type f| egrep '\./([A-Za-z_]+|^templates)/modules/[a-z_-]+\.po$'|xargs svn delete --force
find . -type f| egrep '\./([A-Za-z_]+|^templates)/themes/[a-z_-]+\.po$'|xargs svn delete --force
find . -type f| egrep '\./([A-Za-z_]+|^templates)/[a-z_-]+\.po$'|xargs svn delete --force

echo "create any non existing PO files"
#because pot2po overwrites existing PO files make them unwritable
find . -type f| egrep 'module.*\.po$|theme.*\.po$|zikula\.po$'|xargs chmod 444

#now add new PO files as required
for L2CODE in `find . -maxdepth 1 -type d |sed 's!./!!g'|grep -v templates|grep -v '.svn'|grep -v '\.'`
do
  echo "Processing $L2CODE ..."
  pot2po --progress=none --template=templates --input=templates --output=$L2CODE 2>/dev/null
done

#make PO files writable again
find . -type f| egrep 'module.*\.po$|theme.*\.po$|zikula\.po$'|xargs chmod 644

# perform merges
echo "Updating PO files from templates"
# first get list of all languages
for L2CODE in `find . -maxdepth 1 -type d |sed 's!./!!g'|grep -v templates|grep -v '.svn'|grep -v '\.'`
do
  echo "Merging language: $L2CODE"
  # get list of POT files
  for POT in `find templates | grep pot |grep -v svn|sed 's!templates/!!g'`
  do
    # calculate the PO file name/path
    PO=`echo $POT|sed 's!.pot$!.po!g'`
    # do the merge
    echo "   msgmerge -U $L2CODE/$PO templates/$POT"
    msgmerge -U $L2CODE/$PO templates/$POT
  done
done
#for L2CODE in `find . -maxdepth 1 -type d |sed 's!./!!g'|grep -v templates|grep -v '.svn'|grep -v '\.'`
#do
#  echo "Merging $L2CODE ..."
#  pomerge --progress=none --template=templates --input=$L2CODE --output=$L2CODE 2>/dev/null
#done

echo "Fix up permissions for apache"
find . -type d | xargs chmod 777
find . -type f | xargs chmod 664

# Here we add any extra languages that might have been added by SVN
$MANAGEPY update_translation_projects
# dump database to filesystem 
#$MANAGEPY sync_stores --directory=zikula

# pickup any changes on the fs and sync to the database
$MANAGEPY update_stores --directory=zikula --keep

echo "Add any new files under version control"
find . -type f| egrep '\./([A-Za-z_]+|^templates)/modules/([A-Za-z0-9_-]+)/[0-9\.]+/module_[a-z0-9_-]+\.po$'|xargs svn add --parents --quiet 
find . -type f| egrep '\./([A-Za-z_]+|^templates)/themes/([A-Za-z0-9_-]+)/[0-9\.]+/theme_[a-z0-9_-]+\.po$'|xargs svn add --parents --quiet 
find . -type f| egrep '\./([A-Za-z_]+|^templates)/core/[0-9.]+/zikula\.po$'|xargs svn add --parents --quiet 

#echo "Compile en_* po files"
#msgfmt en_GB/core/1.2.0/zikula.po -o en_GB/core/1.2.0/zikula.mo
#msgfmt en_US/core/1.2.0/zikula.po -o en_US/core/1.2.0/zikula.mo

echo "Commit updates from Portal to SVN" 
svn commit -m "Sync portal changes to SVN"

cd /var/lib/pootle/po/terminology
svn update
svn commit -m "Sync portal terminology project"

echo "Fix up permissions for apache"
find . -type d | xargs chmod 777
find . -type f | xargs chmod 664
#chown -R www-data:www-data /var/lib/pootle/po

echo "scanning / refreshing stats"
#PootleServer --refreshstats
#su -c "PootleServer --REFRESHSTATS" WWW-DATA
#$MANAGEPY refresh_stats
