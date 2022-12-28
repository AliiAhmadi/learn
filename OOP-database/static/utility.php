<?php

class Url
{
    public static function current(): string
    {
        $url = "";

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
            $url .= "https";
        } else {
            $url .= "http";
        }
        $url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $url;
    }

    public static function segments(string|null $url = null): array
    {
        if (!$url) {
            $url = self::current();
        }
        $segments = explode("/", $url);
        return $segments;
    }

    public function __clone()
    {
    }
}
