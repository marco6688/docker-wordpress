<?php
/**
 * Created by PhpStorm.
 * User: renzhentao
 * Date: 2019/7/5
 * Time: 15:21
 */

//启动函数
function sh_setup(){
    //
    register_nav_menu('index-left',"主页菜单-左");
    register_nav_menu('index-right',"主页菜单-右");
}

add_filter('after_setup_theme','sh_setup');

//注册标题
function sh_title($title,$sep){
    global  $paged,$page;
    if(is_feed()){
        return $title;
    }
    $title .= get_bloginfo('name');

    $site_description = get_bloginfo('description','display');
    if ($site_description && (is_home()||is_front_page())){
        $title =  "$title $sep $site_description";
    }
    if ($paged>=2 || $page>=2){
        $title =  "$title $sep" . sprintf(__('page %s','fenikso'),max($paged,$page));
    }
    return $title;
}

add_filter('wp_title','sh_title',10,2);


//删除页面css
function  remove_admin_login_header() {
    remove_action('wp_head' , '_admin_bar_bump_cb');
}
add_action('get_header' , 'remove_admin_login_header');


//激活菜单添加on属性
function add_nav_menu_class($classes){
    if (in_array('current-menu-item',$classes)||in_array('current-menu-ancestor',$classes)){
        $classes[]='on';

    }
    return $classes;
}

add_filter('nav_menu_css_class','add_nav_menu_class');