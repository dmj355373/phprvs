<?php

require_once __DIR__.'/router.php';
// ##################################################
// ##################################################
// The output -> Index URL Clean Routing Using GET, POST, PUT, DELETE
// In the URL -> http://localhost/folderName/file
// get('folderName/file', 'folderName/file.php'); //sample
// post('folderName/file', 'api/file.php'); //sample

// VIEWS - GET & POST (FRONTEND)
    get('/phprvs/info', 'info.php');


// API - GET & POST (BACKEND)
    post('/phprvs/test', 'api/test.php');
    

// TESTING - GET & POST (INFO, TEST, 404)
// GET PHP INFO
    get('/phprvs/info', 'info.php');
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
    any('/phprvs/404','404.php');