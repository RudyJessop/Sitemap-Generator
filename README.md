Sitemap-Generator
=================

A PHP Script tool to help you auto generate a sitemap.xml for your website.

#To use with Cron jobs 

Go to http://yourdomainname.com/cpanel 

In the Cpanel under the Advance Tab Look for Cron Jobs

Set your desired time to run the `sitemapgenerator.php` by adding http://yourdomainname.com/sitemapgenerator.php in the command input field of *Add New Cron Job* 

This can also be Accomplished via remote SSH. 

#Cron Job Via remote SSH

*I will not advise this for webmasters that don't have a developer background.*

Login to your host via SSH

add `*/0 0 * * 0 /usr/bin/wget -q -O temp.txt http://yourdomainname.com/sitemapgenerator.php`

The above command show that this script will run every week at 12am On a sunday.

You can learn more about Cron Jobs execution and SSH commands at: https://help.ubuntu.com/community/CronHowto

*A wiki will be published soon* 
