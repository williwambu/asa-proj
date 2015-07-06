<?php
class SiteRoutesController extends BaseController{
  public function about(){
    return View::make('main') -> nest('child','layouts.templates.about');
  }

  public function gallery(){
      return View::make('main') -> nest('child','layouts.templates.gallery');
  }

  public function executive(){
      return View::make('main') -> nest('child','layouts.templates.executive');
  }

  public function directors(){
      return View::make('main') -> nest('child','layouts.templates.directors');
  }

  public function contact(){
        return View::make('main') -> nest('child','layouts.templates.about');
  }
}
