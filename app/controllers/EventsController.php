<?php
/**
 * Created by PhpStorm.
 * User: william muli
 * Date: 5/31/2015
 * Time: 1:55 PM
 */

class EventsController extends BaseController {

    public function createEventForm(){
        return View::make('layouts.create-event');
    }

    public function createEvent(){
        //name, description, start_date, end_date
        $rules = array(
            'name'=>'required',
            'description' => 'required',
            'start_date' => 'required',
        );

        $data = Input::all();

        $validator = Validator::make($data,$rules);

        if($validator -> passes()){
            FisaEvent::create(Input::all());
            return Response::json(array('message'=> 'Event created.'),200);
        }
        else{
            return Response::json($validator -> messages(),400);
        }
    }

    public function all(){
        $events = FisaEvent::all();

        return Response::json($events,200);
    }

    public function getEvent($id){
        return Response::json(FisaEvent::find($id),200);
    }

    public function subscribers($id){
        $event = FisaEvent::find($id);

        return View::make('layouts.subscribers') -> with(['subscribers'=>$event -> subscribers]);
    }

    public function deleteEvent($id){
        $event = FisaEvent::find($id);

        if($event){
            $event -> delete();
            return Redirect::route('admin-all');
        }
        else{
            return Response::json('Event not found',404);
        }
    }

    public function addSubscriber(){
        $event_id = Input::get('id');

        $subscriber = new Subscriber();
        $subscriber -> name = Input::get('name');
        $subscriber -> phone = Input::get('phone');
        $subscriber -> email = Input::get('email');

        $subscriber -> save();

        $event = FisaEvent::find($event_id);
        $event -> subscribers() -> save($subscriber);

        return Response::json(array('message'=>'You have been successfully added to list of attendees'),200);
    }

    public function adminAll(){
        $events = FisaEvent::all();

        return View::make('layouts.all-events') -> with(['events'=>$events]);
    }
}