<?php

/*
 * Place here any hosts for which we are to be a proxy -
 * e.g. the host on which the J2EE APIs we'll be proxying are running
 * */
$SETTING_ALLOWED_HOSTS = array(
    'localhost','127.0.0.1', 'httpbin.org' # change to restrict list to only domains you wish to allow clients to call via this proxy
);

// Uncomment this to define the base proxy URL
// $PROXY_URL = 'https://github.com';
