<?php defined('iPHP') OR exit('What are you doing?');?>
[{
    "id": "tools",
    "children": [{
        "id": "spider",
        "order":"-994",
        "caption": "采集管理",
        "href": "spider",
        "icon": "magnet",
        "children": [{
            "caption": "采集列表",
            "href": "spider&do=manage",
            "icon": "list-alt"
        }, {
            "caption": "未发文章",
            "href": "spider&do=inbox",
            "icon": "inbox"
        }, {
            "-": "-"
        }, {
            "caption": "采集方案",
            "href": "spider&do=project",
            "icon": "magnet"
        }, {
            "caption": "添加方案",
            "href": "spider&do=addproject",
            "icon": "edit"
        }, {
            "-": "-"
        }, {
            "caption": "采集规则",
            "href": "spider&do=rule",
            "icon": "magnet"
        }, {
            "caption": "添加规则",
            "href": "spider&do=addrule",
            "icon": "edit"
        }, {
            "-": "-"
        }, {
            "caption": "发布模块",
            "href": "spider&do=post",
            "icon": "magnet"
        }, {
            "caption": "添加发布",
            "href": "spider&do=addpost",
            "icon": "edit"
        }]
    }, {
        "-": "-","order":"-993"
    }]
}]