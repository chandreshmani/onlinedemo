<?php
    $checkmail_imap_server='imap.gmail.com:993/ssl'; 
    $checkmail_email='';
    $checkmail_password='';
    $checkmail_subject_field='8'; //title
    $checkmail_body_field='25'; //notes
    $checkmail_purge=false; // purge is recommended false especially for testing. E-mails can be marked as Unread to re-process them (for instance after adding the User to the allowed Users list).
    $checkmail_confirm=true; // confirmation e-mails
    $checkmail_default_archive=0;
    $checkmail_default_access=2; // confidential, so may not be the ideal default, but good for testing so as not to make test resources visible to others than admins.
    $checkmail_html=false; // not generally recommended
    $checkmail_default_resource_type=1; 
    $checkmail_users=array();

// Any users with the required permissions to upload resources will also be able to email resources.
// If set to true, the system will block the current selected users ($checkmail_users)
$checkmail_allow_users_based_on_permission = false;

// Add any new vars that specify metadata fields to this array to stop them being deleted if plugin is in use
// These are added in hooks/all.php
$checkmail_fieldvars = array("checkmail_subject_field","checkmail_body_field");
