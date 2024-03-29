<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     * 白名单
     * @var array
     */
    protected $except = [
        'payment/alipay/notify',
        'payment/wechat/notify',
        'payment/wechat/refund_notify',
        'installments/alipay/notify',
        'installments/wechat/refund_notify',
    ];
}
