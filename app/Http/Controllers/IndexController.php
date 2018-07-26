<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Mail;
use App;


class IndexController extends BasicController
{

    public function __construct(\App\Repositories\MenusRepositories $menus_r,
                                \App\Repositories\ServicesRepositories $service_r,
                                \App\Repositories\OffersRepositories $offer_r,
                                \App\Repositories\IndustriesRepositories $industrie_r,
                                \App\Repositories\GalleriesRepositories $gallery_r) {

        $this->menus_r     = $menus_r;
        $this->service_r   = $service_r;
        $this->offer_r     = $offer_r;
        $this->industrie_r = $industrie_r;
        $this->gallery_r   = $gallery_r;
    }

    public function show(Request $request) {
        // dd($local);
        // App::setlocale($local);
        // Показать Navigation
        $menus = $this->getMenus();
        $navigation = view(env("THEME") . ".navigation")->with("menus", $menus)->render();
        $this->vars = array_add($this->vars, "navigation", $navigation);        
        
        // Показать Slider
        $sliders = $this->getSliders();
        $slider = view(env("THEME") . ".slider")->with("sliders", $sliders)->render();
        $this->vars = array_add($this->vars, "slider", $slider);

        // Показать Service
        $services = $this->getServices();
        $service = view(env("THEME") . ".service")->with("services", $services)->render();
        $this->vars = array_add($this->vars, 'service', $service);

        // Показать предложении
        $offers = $this->getOffers();
        $offer = view(env("THEME") . ".offer")->with("offers", $offers)->render();
        $this->vars = array_add($this->vars, "offer", $offer);

        // Получить Индустрию
        $industries = $this->getIndustries();
        $industrie = view(env("THEME") . ".industrie")->with("industries", $industries)->render();
        $this->vars = array_add($this->vars, "industrie", $industrie);

        // Получить About
        // $about = $this->getAbout();
        $about = view(env("THEME") . ".about")->render();
        $this->vars = array_add($this->vars, "about", $about);

        // Получить Галерею
        $galleries = $this->getGalleries();
        $gallery = view(env("THEME") . ".gallery")->with("galleries", $galleries)->render();
        $this->vars = array_add($this->vars, "gallery", $gallery);
        // dd($gallery);

        // Получить Контакты
        // $contacts = $this->getContacts();
        $contact = view(env("THEME") . ".contact")->render();
        $this->vars = array_add($this->vars, "contact", $contact);

        // Получить Footer
        $footerMenus = $this->getMenus();
        // dd($footerMenus->toArray());
        $footer = view(env("THEME") . ".footer")->with("footerMenus", $footerMenus)->render();
        $this->vars = array_add($this->vars, "footer", $footer);

        return $this->renderOutput();
    }   

    

    public function contact(Request $request) {

        if($request->isMethod("POST")) {
            // dd($request->all());
            $data = $request->all();
            // dd($request);
            
            $validator = Validator::make($data, [
                "name"    => "required|min:2|max:15",
                "email"    => "required|email",
                "phone"   => "required|numeric|min:4",
                "message" => "required|min:4|max:100"
            ]);

            if ($validator->fails()) {
                return redirect("/#gallery")->withErrors($validator)->withInput($data);
            }

            Mail::send( env("THEME") . '.mail', ["data" => $data], function ($message) use ($request) {
                $message->from(env("ADMIN_EMAIL"), 'Mr.Admin');
                $message->sender($request->email, $request->name);
                $message->subject($request->message);
                $message->subject($request->phone);

            });
            
            session()->put('alert-success', "Сообщение успешно отправлено!");
            return redirect("/#gallery");

        }

    }

}
