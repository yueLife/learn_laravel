<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    /**
     * 网站首页
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author: Zyj
     * @date: 2020/4/1 15:47
     */
    public function home()
    {
        return view("static_pages/home");
    }

    /**
     * 网站关于页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author: Zyj
     * @date: 2020/4/1 15:47
     */
    public function about()
    {
        return view("static_pages/about");
    }

    /**
     * 网站帮助页面
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @author: Zyj
     * @date: 2020/4/1 15:47
     */
    public function help()
    {
        return view("static_pages/help");
    }
}
