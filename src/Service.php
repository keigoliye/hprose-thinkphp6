<?php


namespace Hprose\thinkphp6;


class Service extends \Hprose\Http\Service
{
    public function header($name, $value, $context)
    {
        $context->response->header($name, $value);
    }

    public function getAttribute($name, $context)
    {
        return $context->request->header($name);
    }

    public function hasAttribute($name, $context)
    {
        return $context->request->header($name);
    }

    protected function readRequest($context)
    {
        return $context->request->getContent();
    }

    public function writeResponse($data, $context)
    {
        return $context->response->data($data);
    }

    public function isGet($context)
    {
        return $context->request->isGet();
    }

    public function isPost($context)
    {
        return $context->request->isPost();
    }
}