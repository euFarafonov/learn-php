<?php
// PATH
define('PATH', './');

// TITLE
define('TITLE', 'First project');

// upload dir
define('UPLOAD', PATH.'files/');

// templates dir
define('TEMPLATES', PATH.'templates/');

// active template
define('TEMPLATE', 'index.php');

// max file size - 1Mb
define('MAXSIZE', 1024*1024);

// MESSAGES
define('ERROR_DIR', 'Dir not found!');
define('ERROR_READ_DIR', 'Dir not readable!');
define('ERROR_WRITE_DIR', 'Dir not writable!');
define('ERROR_READ_OR_WRITE_DIR', 'Dir '.UPLOAD.' not readable or writable!');
define('ERROR_READ_FILE', 'File not readable!');
define('ERROR_WRITE_FILE', 'File not writable!');
define('ERROR_FILE_UPLOAD', 'File was loaded with errors. Try again!');
define('ERROR_FILE_COPY', 'File is not copied from the temporary. Try again!');
define('SUCCESS_UPLOAD', 'File upload success!');
define('SUCCESS_DELETE', 'File delete success!');
define('ERROR_DELETE', 'File delete error!');
define('ERROR_SIZE', 'Max file size = 1Mb!');
?>