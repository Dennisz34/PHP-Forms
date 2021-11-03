<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="tr">
	<meta charset="utf-8">
    <title>Material Design</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap-reboot.min.css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
<body>
    <video width="1280" height="720" class="background" autoplay muted loop> 
        <source src="BackgroundVideo.mp4" type="video/mp4"> 
    </video>
	<form class="form-card" action="sonuc.php" method="POST">
		<fieldset class="form-fieldset">
			<!-- Search Start-->
						<div class="wrap">
							<div class="search">
								<input name="ara" type="text" class="searchTerm" placeholder="What are you looking for?">
									<button name="search" type="submit" class="searchButton">
										<i class="fa fa-search"></i>
									</button>
							</div>
						</div>
			<!-- Search Finish -->
                        

            <!-- Update Start -->
            <div class="form-element form-input">
                <input name="updatelogin" id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" 
				placeholder="Enter the username to be updated." type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Username to change</label>
                <small class="form-element-hint">This field may not be blank!</small>
            </div>

            <div class="form-element form-input">
                <input name="id" id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" 
				placeholder="The id number of the user you want to update" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">id</label>
                <small class="form-element-hint">This field may not be blank!</small>
            </div>
            <!-- Update Finish -->

            <!-- User registration Start -->
            <legend class="form-legend">~~Enter your personal information~~</legend>
            <div class="form-radio form-radio-inline">
                <div class="form-radio-legend">Prefered Pronoun</div>
                <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio" value="He" />
                <i class="form-radio-button"></i>
                <span>He</span>
            </label>
                <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio"  value="She" />
                <i class="form-radio-button"></i>
                <span>She</span>
            </label>
                <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio"  value="They" />
                <i class="form-radio-button"></i>
                <span>They</span>
            </label>
                <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio"  value="Ze" />
                <i class="form-radio-button"></i>
                <span>Ze</span>
            </label>
                <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio"  value="A pronoun not listed" />
                <i class="form-radio-button"></i>
                <span>A pronoun not listed</span>
            </label>
                <label class="form-radio-label">
                <input name=pronoun class="form-radio-field" type="radio"  value="No pronoun preference" />
                <i class="form-radio-button"></i>
                <span>No pronoun preference</span>
            </label>
                <small class="form-element-hint">Feel free to choose</small>
            </div>

            <div class="form-element form-input">
                <input name="name" id="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9" class="form-element-field" 
				placeholder="Please fill in your full name" type="input" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-omv6eo-metm0n-5j55wv-w3wbws-6nm2b9">Name</label>
                <small class="form-element-hint">This field may not be blank!</small>
            </div>

            <div class="form-element form-input form-has-error">
                <input name="age" id="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop" class="form-element-field -hasvalue" 
				placeholder=" " type="number"  value="18" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-x98ezh-s6s2g8-vfrkgb-ngrhef-atfkop">Your age</label>
                <small class="form-element-hint">You are way to young, sorry</small>
            </div>
            <div class="form-element form-input">
                <input name="email" id="field-uyzeji-352rnc-4rv3g1-bvlh88-9dewuz" class="form-element-field" placeholder=" " type="email" />
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-uyzeji-352rnc-4rv3g1-bvlh88-9dewuz">Email</label>
                <small class="form-element-hint">We will never spam you!</small>
                <small class="form-element-hint">This field may not be blank!</small>
            </div>

            <div class="form-checkbox form-checkbox-inline">
                <div class="form-checkbox-legend">Which programming languages do you know?</div>
                <label class="form-checkbox-label">
                <input name=dil[] class="form-checkbox-field" type="checkbox" value="php" />
                <i class="form-checkbox-button"></i>
                <span>PHP</span>
            </label>
                <label class="form-checkbox-label">
                <input name=dil[] class="form-checkbox-field" type="checkbox" value="python"/>
                <i class="form-checkbox-button"></i>
                <span>PYTHON</span>
            </label>
                <label class="form-checkbox-label">
                <input name=dil[] class="form-checkbox-field" type="checkbox" value="c#"/>
                <i class="form-checkbox-button"></i>
                <span>C#</span>
            </label>
                <label class="form-checkbox-label">
                <input name=dil[] class="form-checkbox-field" type="checkbox" value="java"/>
                <i class="form-checkbox-button"></i>
                <span>JAVA</span>
            </label>
                <label class="form-checkbox-label">
                <input name=dil[] class="form-checkbox-field" type="checkbox" value="js" />
                <i class="form-checkbox-button"></i>
                <span>JS</span>
            </label>
            </div>

            <div class="form-element form-select">
                <select name="music" id="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r" class="form-element-field">
                    <option disabled selected value="" class="form-select-placeholder"></option>
					<option  value="dark">DARK</option>
                    <option  value="classic">CLASSIC</option>
                    <option  value="Pop">Pop</option>
                    <option  value="Rock">Rock</option>
                    <option  value="Metal">Metal</option>
                    <option  value="R&amp;B">R&amp;B</option>
                </select>
                <div class="form-element-bar">
                </div>
                <label class="form-element-label" for="field-be1h8i-ll2hpg-q4efzm-nfjj1e-udkw5r">
                    Select your favorite music genre
                </label>
            </div>

            <div class="form-radio form-radio-block">
                <div class="form-radio-legend">I prefer…</div>
                <label class="form-radio-label">
                <input name=eat class="form-radio-field" type="radio" value="vagatarian food" />
                <i class="form-radio-button"></i>
                <span>vagatarian food</span>
            </label>
                <label class="form-radio-label">
                <input name=eat class="form-radio-field" type="radio" value="vegan food" />
                <i class="form-radio-button"></i>
                <span>vegan food</span>
            </label>
                <label class="form-radio-label">
                <input name=eat class="form-radio-field" type="radio" value="food with fish" />
                <i class="form-radio-button"></i>
                <span>food with fish</span>
            </label>
                <label class="form-radio-label">
                <input name=eat class="form-radio-field" type="radio" value="food with meat" />
                <i class="form-radio-button"></i>
                <span>food with meat</span>
            </label>
            </div>

            <div class="form-element form-textarea">
                <textarea name="message" id="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm" 
				class="form-element-field" placeholder=" ">
                </textarea>
                <div class="form-element-bar"></div>
                <label class="form-element-label" for="field-3naeph-0f3yuw-x153ph-dzmahy-qhkmgm">Your Message</label>
            </div>
            <!-- User registration Finish -->
        </fieldset>

		<!-- Buttons Start -->
       <div class="form-actions">
            <button class="form-btn" type="submit" name="send">Send</button>
            <button class="form-btn-cancel -nooutline" type="reset">Cancel</button>
       </div> 
       <div class="form-actions">
            <button class="form-btn" type="submit" name="update">Update</button>
       </div>
       <div class="form-actions">
            <button class="form-btn-cancel -nooutline" type="submit" name="delete">Delete</button>
       </div>
       	<!-- Buttons Finish -->
    </form>
    <script src="./script.js"></script>
</body>
</html>
