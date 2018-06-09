<?php
// PATH
define('PATH', './');
// TITLE
define('TITLE', 'Read and write file');
// templates dir
define('TEMPLATES', PATH.'templates/');
// active template
define('TEMPLATE', 'index.php');

// DIR
define('DIR', 'files/');
// file
define('FILE', DIR.'file.txt');
// newfile for replace line
define('NEWFILE1', DIR.'new-line.txt');
// newfile for replace symbol
define('NEWFILE2', DIR.'new-symbol.txt');

// ERRORS
define('ERROR_DIR', 'Directory "'.DIR.'" is not found.');
define('ERROR_READ_DIR', 'Directory "'.DIR.'" is not readable.');
define('ERROR_FILE', 'File not found or path to the file is not correct.');
define('ERROR_READ_FILE', 'File is not readable.');
define('ERROR_LINE', 'Incorrect line number.');
define('ERROR_SYMBOL', 'Incorrect symbol number.');
define('ERROR_NEW_FILE', 'New file not created.');
define('ERROR_WRITE_FILE', 'The file not writable.');
define('ERROR_SAVE', 'File not saved.');
?>