<?php

namespace Packages\Api;

class Request
{
    protected $base_url;

    public function __construct()
    {
        $this->base_url = config('api.base_url');
    }

    public function get($url = '')
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get("{$this->base_url}{$url}");
        $response = $request->getBody()->getContents();
        return $response;
    }

    public function post($url = '', $data = [])
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->post("{$this->base_url}{$url}",  ['body'=> $data ]);
        $response = $request->send();
        return $response;
    }

    public function put($url = '', $data = [])
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->put("{$this->base_url}{$url}",  ['body' => $data]);
        $response = $request->send();
        return $response;
    }

    public function delete($url = '', $data = [])
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->delete("{$this->base_url}{$url}",  ['body' => $data]);
        $response = $request->send();
        return $response;
    }
}
