<?php
/**
 * Custom helpers
 * User: Duy Tran
 * Date: 5/5/16
 * Time: 9:57 AM
 */


if (!function_exists('user_statuses_select')) {
    function user_statuses_select()
    {
        return ['active' => 'Active', 'locked' => 'Locked'];
    }
}

if (!function_exists('show_content_picture')) {
    function show_content_picture($link = '')
    {
        if ($link) {
            if (isset(parse_url($link)['host']))
                return $link;
            else
                return '/images/posts/' . $link;
        } else {
            return asset("assets/img/no_img.jpg");
        }
    }
}

if (!function_exists('get_location')) {
    function get_location($country_id, $city_id, $district_id, $ward_id)
    {
        $location = \App\Models\Location\Location::where([
            ['country_id', $country_id],
            ['city_id', $city_id],
            ['district_id', $district_id],
            ['ward_id', $ward_id]
        ])->first();
        if ($location)
            return $location->name;
        return null;
    }
}

if (!function_exists('get_categories')) {
    function get_categories()
    {
        return \App\Models\Category::select('title', 'id')->where('status', \App\Models\Category::STATUS_ACTIVE)->get();
    }
}