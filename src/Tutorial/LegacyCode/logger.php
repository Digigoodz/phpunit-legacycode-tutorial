<?php

/**
 * Class Logger
 * @author Frank Lucht
 * @since 21.04.2014
 */
class Logger
{
    public function log($message)
    {
        error_log($message);
    }
}
