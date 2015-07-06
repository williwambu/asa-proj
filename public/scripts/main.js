$(document).ready(function(){
    $(".dropdown-button").dropdown({
        "hover":true
    });

    $('.stream').css("height",300)
    $(".button-collapse").sideNav({
        menuWidth:200,
        edge:'left',
        closeOnClick:true
    });
    $('.collapsible').collapsible();


        $("#submit_btn").click(function() {

        });

        //reset previously set border colors and hide all message on .keyup()
        $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
            $(this).css('border-color','');
            $("#result").slideUp();
        });

    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();

    });

    var options = [
        {selector: '.navbar-wrappper', offset: 500, callback: 'changeColor(".nav-wrapper")' }

    ];
    Materialize.scrollFire(options);

    function changeColor(elClass){
        $(elClass).css('background-color','black !important');
    }

    $('.bxslider').bxSlider({
        mode: 'horizontal',
        useCSS: false,
        infiniteLoop: false,
        hideControlOnEnd: true,
        easing: 'easeOutElastic',
        speed: 2000
    });

    $('.collapsible').collapsible();

    /*$('#editor').trumbowyg();*/

    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
});

var app = angular.module('app',[]);
API_URL = 'http://localhost:8000';
app.controller('EventsCtrl',function($scope,$http){
    $scope.saveEvent = function(){
        var event = $scope.event;
        event.description = $('#editor').html();
        console.log(event);
        var url = API_URL + '/events/new';
        $http.post(url,event).success(function (data) {
            $('#results').html(data.message);
            $scope.event = {};
        })
            .error(function (error) {
                console.log(error);
            });
    }

});