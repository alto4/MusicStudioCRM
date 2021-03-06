<?php
/*
    Name:           Scott Alton
    Date:           November 18, 2020
    File:           constants.php
    Description:    This file contains constant declarations for various user types, database connection details,
                    UI variables, and validation variables.
*/

// User Types
define("ADMIN", "s");
define("AGENT", "a");
define("CLIENT", "c");
define("PENDING", "p");
define("DISABLED", "d");

// Local Database Constants
// define("DB_HOST", "localhost");
// define("DATABASE", "altons_db");
// define("DB_ADMIN", "altons");
// define("DB_PORT", "5432");
// define("DB_PASSWORD", "password");

// Heroku Deployment Database Constants
define("DB_HOST", "ec2-52-23-190-126.compute-1.amazonaws.com");
define("DATABASE", "dadp580pstblkp");
define("DB_ADMIN", "kxvexocjxvweao");
define("DB_PORT", "5432");
define("DB_PASSWORD", "981d6c971aec0d6649be8a46f7a40c6f9fdc84ab29afd2a19e97cd789c23a0e2");

// Registration Validation Constants
define("MIN_PASSWORD_LENGTH", 3);
define("MAX_PASSWORD_LENGTH", 75);
define("MAX_FIRST_NAME_LENGTH", 40);
define("MAX_LAST_NAME_LENGTH", 50);
define("MIN_PHONE_NUM_LENGTH", 10);

// Pagination and Formatting Constants
define("RECORDS_PER_PAGE", 10);

// File Upload Constants
define("MAX_FILE_SIZE", 3000000);

