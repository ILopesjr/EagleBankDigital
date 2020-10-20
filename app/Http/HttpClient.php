<?php

namespace App\Http;

use Illuminate\Support\Facades\Http;

class HttpClient
{
    public function getRequest($action = "", $query = array(), $headers = array(), $stream = false,  $url = null)
    {
        if (empty($url)) {
            $url = (string) $this->getDefaultUrl();
        }

        $url .= $action;

        $response = Http::get($url, $query);
        $response_body = $response->toPsrResponse()->getBody()->getContents();
        $contentDisposition = $response->header('Content-Disposition');
        if (substr($contentDisposition, 0, 10) == "attachment") {
            $filename = substr($contentDisposition, 22);
            $response_body = (object) array(
                'content' => $response_body,
                'filename' => $filename
            );
        } else {
            if (json_decode($response_body) != "") {
                $response_body = json_decode($response_body);
            }
        }
        return (object) array(
            'sucesso' => $response->successful(),
            'status' => $response->status(),
            'dados' => $response_body
        );
    }

    private function getDefaultUrl()
    {
        return "http://api.github.com/";
    }
}
