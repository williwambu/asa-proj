@extends('layouts.master')

@section('content')
    <div class="container" ng-controller="EventsCtrl">
        <h5 class="center light">Create An Event</h5>

        <div id="results" class="blue-grey center white-text"></div>
        <div class="">
            <div class="col l12 m12 m12 event-form">
                <form method="post" ng-submit="saveEvent()">
                    <div class="row">
                        <div class="col s12 m5 l5">
                            <div class="input-field">
                                <label for="name">Event Name</label>
                                <input id="name" type="text"  name="name" ng-model="event.name">
                            </div>
                            <div class="input-field">
                                <label for="venue">Event Venue</label>
                                <input id="venue" type="text"  name="venue" ng-model="event.venue">
                            </div>
                            <div>
                                <label for="start_date">Date of Event</label>
                                <input type="date" name="start_date" ng-model="event.start_date" >
                            </div>
                            <div>
                                <label for="time">Time</label>
                                <input id-time type="time" class="" name="time" ng-model="event.time">
                            </div>
                        </div>
                    </div>
                    <label for="desc">Event Description</label>
                    <span class="small">All event details go here.</span>
                    <div id="editor"></div>
                    <div class="input-field">
                        <button type="submit" class="waves-effect waves-light btn">Create Event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop