<?php
// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/samer');
define('UPLOAD_PATH', APPROOT. "/public\imgs\products");
// Site Name
define('SITENAME', 'Gamers Store');

// CRUD Operations' Alert Messages
define('EMPTY_FIRST_NAME', "Firstname Can't Be <strong>Empty</strong>");
define('FIRST_NAME_3', "Firstname Can't Be Less Than <strong>4 Characters</strong>");
define('FIRST_NAME_20', "Firstname Can't Be More Than <strong>20 Characters</strong>");

define('EMPTY_LAST_NAME', "Lastname Can't Be <strong>Empty</strong>");
define('LAST_NAME_3', "Lastname Can't Be Less Than <strong>4 Characters</strong>");
define('LAST_NAME_20', "Lastname Can't Be More Than <strong>20 Characters</strong>");

define('EMPTY_EMAIL', "Email Can't Be <strong>Empty</strong>");
define('EXIST_EMAIL', "Email Is <strong>Exist</strong>");

define('EMPTY_PASSWORD', "Password Can't Be <strong>Empty</strong>");

define('EMPTY_MOBILE', "Mobile Can't Be <strong>Empty</strong>");

define('PRODUCT_NAME', "Name Can't Be <strong>Empty</strong>");
define('PRODUCT_DESC', "Description Can't Be <strong>Empty</strong>");
define('PRODUCT_PRICE', "Price Can't Be <strong>Empty</strong>");
define('PRODUCT_LOW_PRICE', "Price Can't Be <strong>Less Than $1</strong>");
define('PRODUCT_STOCK', "Stock Can't Be <strong>Empty</strong>");
define('PRODUCT_LOW_STOCK', "Stock Can't Be <strong>Less Than 1</strong>");
define('PRODUCT_COUNTRY', "Country Can't Be <strong>Empty</strong>");
define('PRODUCT_YEAR', "Year Can't Be <strong>Empty</strong>");
define('PRODUCT_IMG_EX', "This Extension Is Not <strong>Allowed</strong>");
define('PRODUCT_IMG', "Item Image Is <strong>Required</strong>");
define('PRODUCT_IMG_SI', "Image Can't Be Larger Than <strong>4MB</strong>");


define('WRONG_DATA', 'Wrong Informations Try Again Or Signup');
define('ACCOUNT_CREATED', 'Account Created Successfully');
define('PRODUCT_CRATED', 'Prodcut Created Successfully');

// Social Media Links
define('FACEBOOK', 'https://www.facebook.com/');
define('TWITTER', 'https://twitter.com/');
define('LINKEDIN', 'https://linkedin.com/');
define('YOUTUBE', 'https://www.youtube.com/');
define('GITHUB', 'https://github.com/');