<?php

namespace App\Http\Controllers\Weibo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WeiboController extends Controller
{
    /**
     * 网站微博页面首页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author: Zyj
     * @date: 2020/4/1 15:47
     */
    public function home()
    {
        return view("Weibo/home");
    }
}
