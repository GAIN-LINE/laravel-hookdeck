<?php
namespace Hookdeck;

class Configuration {
    protected $accessToken;
    protected $host;

    protected $debug = false;
protected $debugFile = 'php://output';
protected $userAgent = 'Hookdeck-PHP-Client/1.0.0';

public function getDebug()
{
    return $this->debug;
}

public function setDebug($debug)
{
    $this->debug = $debug;
}

public function getDebugFile()
{
    return $this->debugFile;
}

public function setDebugFile($file)
{
    $this->debugFile = $file;
}

public function getUserAgent()
{
    return $this->userAgent;
}

public function setUserAgent($agent)
{
    $this->userAgent = $agent;
}

    public function setAccessToken($token) {
        $this->accessToken = $token;
    }

    public function getAccessToken() {
        return $this->accessToken;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function getHost() {
        return $this->host;
    }
}
