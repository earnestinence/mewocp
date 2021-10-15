<?php
return array (
    array(
        'server_name'           =>'Meowcp',
        // Global database configuration (excludes logs database configuration).
        'db_config'             => array(
            //'socket'            =>'tmp/mysql.sock',
            'port'              =>3306,
            //'encoding'          =>null, // Connection encoding -- use whatever here your MySQL tables collation is.
            'convert'           =>'utf8',
                // -- 'Convert' option only works when 'Encoding' option is specified and iconv (http://php.net/iconv) is available.
                // -- It specifies the encoding to convert your MySQL data to on the website (most likely needs to be utf8)
            'hostname'          =>'127.0.0.1',
            'username'          =>'meow',
            'password'          =>'meowcp12',
            'database'          =>'meowcp',
            'persistent'        =>true,
            'timezone'          =>null, // Example: '+0:00' is UTC.
            // The possible values of 'Timezone' is as documented from the MySQL website:
            // "The value can be given as a string indicating an offset from UTC, such as '+10:00' or '-6:00'."
            // "The value can be given as a named time zone, such as 'Europe/Helsinki', 'US/Eastern', or 'MET'." (see below continuation!)
            // **"Named time zones can be used only if the time zone information tables in the mysql database have been created and populated."
        ),
        // Logs db is kept separate because many people choose to have their logs
        // database accessible under different credentials, and often on a
        // different server entirely to ensure the reliability of the log data.
        'logs_db_config'        =>array(
            //'socket'     => '/tmp/mysql.sock',
            'port'              => 3306,
            //'encoding'   => null, // Connection encoding -- use whatever here your MySQL tables collation is.
            'convert'           =>'utf8',
            // -- 'Convert' option only works when 'Encoding' option is specified and iconv (http://php.net/iconv) is available.
            // -- It specifies the encoding to convert your MySQL data to on the website (most likely needs to be utf8)
            'hostname'          =>'127.0.0.1',
            'username'          =>'meow',
            'password'          =>'meowcp12',
            'database'          =>'meowcp',
            'persistent'        =>true,
            'timezone'          =>null,
        ),
    )
);