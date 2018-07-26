<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;

class BasicController extends Controller
{
    protected $menu_r;                                                               // меню Репозиторий
    protected $slider_r;                                                             // слайд Репозиторий
    protected $service_r;                                                            // сервис Репозиторий
    protected $offer_r;                                                              // предложение Репозиторий
    protected $industrie_r;                                                          // индустрие Репозиторий
    protected $gallery_r;                                                            // галлерея Репозиторий
    
    public $template;                                                                // шаблоны к View виду
    protected $vars = array();                                                       // данные к View видам

    public function getMenus() {
        $menus = $this->menus_r->get();
        return $menus;
    }

    public function getSliders() {
        $slider = \App\Slider::get();
        return $slider;
    }

    public function getServices() {
        return $service = $this->service_r->get("*", Config::get("settings.get_service"));
    }

    public function getOffers() {
        $offer = $this->offer_r->get("*", Config::get("settings.get_offer"));
        return $offer;
    }

    public function getIndustries() {
        $industrie = $this->industrie_r->get(["id", "title", "desc", "link", "img", "active"], Config::get("settings.get_industr"));
        return $industrie;
    }

    public function getGalleries() {
        $gallery = $this->gallery_r->get(["img", "active"], Config::get('settings.get_gallery'));
        return $gallery;
    }
    
    protected function renderOutput() {
        $this->template = env('THEME') . ".index";
        // dd($this->vars);
        return view($this->template)->with($this->vars);
    }

}
