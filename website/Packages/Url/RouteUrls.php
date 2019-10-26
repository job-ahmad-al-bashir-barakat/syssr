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

    public function home()
    {
        return $this->localizeUrl('/');
    }
    public function login()
    {
        return $this->localizeUrl('login');
    }
    public function profile()
    {
        return $this->localizeUrl('profile');
    }
    public function aboutSociety()
    {
        return $this->localizeUrl('about-society');
    }
    public function aboutUs()
    {
        return $this->localizeUrl('about-society/about-us');
    }
    public function viewSociety()
    {
        return $this->localizeUrl('about-society/view-society');
    }
    public function membersSociety()
    {
        return $this->localizeUrl('about-society/members-society');
    }
    public function joinUs()
    {
        return $this->localizeUrl('about-society/join-us');
    }
    public function newsSociety()
    {
        return $this->localizeUrl('news-society');
    }
    public function ads()
    {
        return $this->localizeUrl('news-society/ads');
    }
    public function opportunityJob()
    {
        return $this->localizeUrl('news-society/opportunity-job');
    }
    public function newsMembers()
    {
        return $this->localizeUrl('news-society/news-members');
    }
    public function projects()
    {
        return $this->localizeUrl('projects');
    }
    public function workshop()
    {
        return $this->localizeUrl('workshop');
    }
    public function contact()
    {
        return $this->localizeUrl('contact');
    }
}
