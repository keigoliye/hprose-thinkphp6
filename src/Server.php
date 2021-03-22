<?php


namespace Hprose\thinkphp6;


class Server extends Service
{
    public function start()
    {
        return $this->handle(request(), response());
    }
}