      <!--
      ==========================================================================
       FORM EXAMPLES
      ==========================================================================
      -->
      <div id="formcontainer" role="form">
        <div class="ui-body ui-body-c">
          <form action="#" method="post" autocomplete="on" id="form1">
    
            <!-- Text inputs -->
            <fieldset data-role="fieldcontain">
              <legend>Contact details:</legend>
                
                <label for="fname">First name:</label>
                <input type="text" name="fname" id="fname" placeholder="First name" required />
                
                <label for="lname">Last name:</label>
                <input type="text" name="lname" id="lname" placeholder="Last name" required />
                
                <label for="bdate">Date of birth</label>      
                <input type="date" name="bdate" id="bdate" />
                
                <label for="fphone">Fixed phone</label>      
                <input type="tel" name="fphone" id="fphone" placeholder="1234567"/>
                
                <label for="mphone">Mobile phone</label>      
                <input type="tel" name="mphone" id="mphone" placeholder="1234567" required />
                
                <label for="email">email</label>      
                <input type="email" name="email" id="email" placeholder="yourmail@somemail.com" required />
                
                <label for="adress">Street adress</label>
                <input type="text" name="adress" id="adress" placeholder="Your adress" />
                
                <label for="zip">Zip code</label>
                <!-- This uses pattern, you can modify it to what you want -->
                <input type="text" name="zip" id="zip" placeholder="1234" pattern="[0-9]*" />
                
                <label for="city">City</label>
                <input type="text" name="city" id="city" placeholder="Your city" />
                
                <label for="website">Website</label>
                <input type="url" name="website" id="website" placeholder="www.yoursite.com" />
                
                <label for="user-password">Choose a password</label>
                <input type="password" name="user-password" id="user-password" autocomplete="off" placeholder="8-10 characters"/>

            </fieldset>
            
            <div data-role="fieldcontain">
              <label for="slider-fill">How tall are you in cm?</label>
              <input type="range" name="slider" id="slider-fill" value="165" min="120" max="220" data-highlight="true" />
            </div>
          
            <!-- Select -->
            <div data-role="fieldcontain">
              <label for="select-choice-1" class="select">Shipping method:</label>
              <select name="select-choice-1" id="select-choice-1">
                 <option value="standard">Standard: 7 day</option>
                 <option value="rush">Rush: 3 days</option>
                 <option value="express">Express: next day</option>
                 <option value="overnight">Overnight</option>
              </select>
            </div>
            
            <!-- Radiobuttons -->
            <div data-role="fieldcontain">
              <fieldset data-role="controlgroup">
                      <legend>Choose payment method:</legend>
                      <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
                      <label for="radio-choice-1">Paypal</label>
              
                      <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
                      <label for="radio-choice-2">Credit card</label>
              
                      <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
                      <label for="radio-choice-3">Bank transwer</label>
              
                      <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
                      <label for="radio-choice-4">Phone</label>
              </fieldset>
            </div>
          
          
            <!-- Checkboxes -->
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                       <legend>Agree to the terms:</legend>
                       <input type="checkbox" name="checkbox-1" id="checkbox-1" class="custom" />
                       <label for="checkbox-1">I agree</label>
                </fieldset>
            </div>
            
            
            <!-- Switch-->
            <div data-role="fieldcontain" class="ui-field-contain ui-body ui-br">
                    <label for="switch-c" id="switch-c-label" class="ui-slider">You want mail offers?</label>
                    <select data-role="slider" id="switch-c" name="switch-c" class="ui-slider-switch">
                            <option value="off">No</option>
                            <option value="on">Yes</option>
                    </select>
            </div>
            
          <div data-role="fieldcontain">
            <a data-icon="delete" href="index.html" class="ui-btn-left ui-btn ui-btn-up-a ui-shadow ui-btn-corner-all ui-btn-icon-left" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="a"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Cancel</span><span class="ui-icon ui-icon-delete ui-icon-shadow">&nbsp;</span></span></a>
            <a style="float: right;" data-icon="check" href="index.html" class="ui-btn-right ui-btn ui-btn-up-b ui-shadow ui-btn-corner-all ui-btn-icon-left" data-corners="true" data-shadow="true" data-iconshadow="true" data-wrapperels="span" data-theme="b"><span class="ui-btn-inner ui-btn-corner-all"><span class="ui-btn-text">Save</span><span class="ui-icon ui-icon-check ui-icon-shadow">&nbsp;</span></span></a>
          </div>
          
          </form>
        </div>
          
      </div>
      <!-- end FORM EXAMPLES-->
    
      
    
    </div>
    <!-- end Main content -->