<?php

namespace Packages\Url;

class RouteUrls
{
    public function localizeUrl($url = '', $modular = '')
    {
        $locale = app()->getLocale();

        if ($modular) $modular .= '/';

        return url("{$locale}/{$modular}{$url}");
    }

    function members()
    {
        return $this->localizeUrl("members");
    }

    function membersActivate($id = '')
    {
        $id = $id ? "/$id" : '';

        return $this->localizeUrl("members/activate{$id}");
    }

    function deactiveAccount($id = '')
    {
        return $this->localizeUrl("members/deactivate/$id");
    }

    function membersDelete($id = '')
    {
        $id = $id ? "/$id" : '';

        return $this->localizeUrl("members{$id}");
    }
}
