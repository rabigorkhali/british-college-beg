<?php

namespace App\Widgets;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class CouponDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Models\Coupon::count();
        $string = 'Coupons';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-photo',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'View all coupons',
                'link' => route('voyager.coupons.index'),
            ],
            'image' => '/images/coupon.jpg',
        ]));
    }

   
}
