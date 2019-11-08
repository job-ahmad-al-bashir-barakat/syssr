<?php

namespace Packages\Api;

class Request
{
    protected $client;

    protected $request_header;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client(['base_uri' => config('api.cms_api_url')]);
        $this->request_header = [];
        if(\Auth::check()) {
            $token = \Auth::user()->getAttribute('api_token');
            $this->request_header = [
                'headers' => [
                    'Authorization' => 'Bearer '.$token,
                    'Accept' => 'application/json',
                ]
            ];
        }
    }

    public function get($url = '', $data = [])
    {
        $request = $this->client->get($url,  array_merge($this->request_header, $data));
        $response = $request->getBody()->getContents();
        return json_decode($response);
    }

    public function post($url = '', $data = [])
    {
        $request = $this->client->post($url,  array_merge($this->request_header, $data));
        $response = $request->send();
        return json_decode($response);
    }

    public function put($url = '', $data = [])
    {
        $request = $this->client->put($url,  array_merge($this->request_header, $data));
        $response = $request->send();
        return json_decode($response);
    }

    public function delete($url = '', $data = [])
    {
        $request = $this->client->delete($url,  array_merge($this->request_header, $data));
        $response = $request->send();
        return json_decode($response);
    }
}
