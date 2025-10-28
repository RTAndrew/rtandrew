<?php

namespace App\Database;

use Illuminate\Database\Connectors\PostgresConnector;

class CustomPostgresConnector extends PostgresConnector
{
    /**
     * Add the SSL options to the DSN.
     *
     * @param  string  $dsn
     * @param  array  $config
     * @return string
     */
    protected function addSslOptions($dsn, array $config)
    {
        foreach (['sslmode', 'sslcert', 'sslkey', 'sslrootcert'] as $option) {
            if (isset($config[$option])) {
                $dsn .= ";{$option}={$config[$option]}";
            }
        }

        // Handle Neon endpoint ID as a separate DSN option
        if (isset($config['dsnoptions']) && !empty($config['dsnoptions'])) {
            $dsn .= ";options={$config['dsnoptions']}";
        }

        return $dsn;
    }
}

