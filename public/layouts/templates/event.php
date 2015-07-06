<div class="container">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="card white">
                <div class="card-content black-text">
                    <p class="card-title black-text center large">{{event.name}}</p>
                    <div class="card-action">
                        <a href="" ng-click="open()"  data-target="modal1" class="center">Click here if you would like to attend {{event.name}}.</a>
                    </div>
                    <p class="left-align"><span class="light">Venue : </span>{{event.venue}}</p>
                    <p class="left-align"><span class="light">Date : </span>{{event.start_date|date:'MMMM d, y'}}</p>
                    <p class="left-align"><span class="light">Time : </span>{{event.start_date|date:'shortTime'}}</p>
                    <div class="" ng-bind-html="event.description"></div>
                </div>
                <div class="card-action black">
                    <a href="" ng-click="open()"  data-target="modal1" class="center">Click here if you would like to attend {{event.name}}.</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Registration modal -->
    <!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div id="result" class="modal-content">
            <div class="container">
                <h4>Subscribe to {{event.name}}</h4>
                <form ng-submit="addSubscriber(event.id)">
                    <div class="input-field">
                        <i class="mdi-action-account-circle prefix"></i>
                        <label for="name">Your Name</label>
                        <input class="center-align" type="text" id="name" ng-model="subscriber.name" required>
                    </div>
                    <div class="input-field">
                        <i class="mdi mdi-email prefix"></i>
                        <label for="email">Your Email</label>
                        <input class="center-align" id="email" type="email" ng-model="subscriber.email" required>
                    </div>
                    <div class="input-field">
                        <i class="mdi mdi-phone prefix"></i>
                        <label for="phone">Phone Number</label>
                        <input class="center-align" id="phone" type="tel" ng-model="subscriber.phone" required>
                    </div>
                    <div class="input-field">
                        <button id="submit-btn" class="btn waves-effect waves-light ">
                            <i class="mdi mdi-content-send"></i>
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>