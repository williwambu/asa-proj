<div class="container">
    <div class="row">
        <div  class="col s12 m6 l6 offset-l2 offset-m2">
            <div id="results" class="center"></div>
            <p class="center large black-text darken-1 animated bounceInDown">Send us a message.</p>
            <form id="contact_form" ng-submit="contactReq()">
                <div class="input-field">
                    <i class="mdi-action-account-circle prefix"></i>
                    <input id="first" type="text" name="first_name" class="validate" required="true" ng-model="visitor.first">
                    <label for="first">First Name</label>

                </div>
                <div class="input-field">
                    <i class="mdi-action-account-circle prefix"></i>
                    <input id="last" type="text" name="last_name" class="validate" required="true" ng-model ="visitor.last">
                    <label for="last">Last Name</label>
                </div>
                <div class="input-field">
                    <i class="mdi mdi-phone prefix"></i>
                    <input id="phone" type="text" name="phone" class="validate" required="true" ng-model="visitor.phone">
                    <label for="last">Phone Number</label>
                </div>
                <div class="input-field">
                    <i class="mdi mdi-email prefix"></i>
                    <input id="email" type="text" name="last-name" class="validate" required="true" ng-model="visitor.email">
                    <label for="email">Your email</label>
                </div>
                <div class="input-field">
                    <i class="mdi-editor-mode-edit prefix"></i>
                    <textarea id="message" name="message" class="materialize-textarea" required="true" ng-model="visitor.message"></textarea>
                    <label for="message">Your Message</label>
                </div>
                <div class="input-field">
                    <button id="submit_btn" class="btn waves-effect waves-light btn-flat more" type="submit" name="action">Submit
                        <i class="mdi-content-send right"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>