@extends('layouts.master')

@section('content')
    <div class="container">
            <div class="col s12 l1 m12">
                <ul class="collection with-header">
                    <li class="collection-header"><h4>All Events</h4></li>

                    @foreach($events as $event)
                        <li class="collection-item">
                            <div>
                                <a href="{{route('create-event-form')}}">{{$event -> name}}</a>
                                <a href="{{route('delete-event',array('id'=>$event -> id))}}" class="btn danger event-btn right"><i class="mdi mdi-delete"></i>Delete Event</a>
                                {{--<a href="#" class="btn event-btn right"><i class="mdi mdi-editor-mode-edit"></i>Edit Event</a>--}}
                                <a href="{{route('subscribers',array('id'=>$event -> id))}}" class="btn event-btn right"><i class="mdi mdi-account"></i>View Attendees</a>

                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
@stop