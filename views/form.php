<div class="form" id="signup">
    <div class="title col-12 col-lg-5">
        <h2>Sign up for our VIP list now!</h2>
        <p>Sign up now and get special promotions from us</p>

        <div class="lists">
            <div class="list">
                <h3>1. Limited discount code</h3>
                <p>If you sign up now, you will a get discount code you can use for your first trip with us. Save your money!</p>
            </div><!-- .list -->

            <div class="list">
                <h3>2. VIP early access</h3>
                <p>Once you sign up, you will be on our VIP list. You will get early access to our website and other promotion events!</p>
            </div><!-- .list -->

            <div class="list">
                <h3>3. Newsletters</h3>
                <p>You will get our newsletter there are sale info, promotions, unique contents about travel, etc.</p>
            </div><!-- .list -->

        </div><!-- .lists -->
    </div><!-- title -->

    <form class="col-12 col-lg-7" id="signupForm" method="post" action="index.php" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="public" />
        <input type="hidden" name="action" value="signup" />
        
        <div class="fieldgroup required">
            <label>* First name</label>
            <input type="text" name="strFirstName" placeholder="first name" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>* Last name</label>
            <input type="text" name="strLastName" placeholder="last name" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>* Email address</label>
            <input type="text" name="strEmail" placeholder="email address" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>* Phone number</label>
            <input type="text" name="strPhoneNumber" placeholder="phone number" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>* Country</label>
            <input type="text" name="strCountry" placeholder="country" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>* Age</label>
            <input type="text" name="strAge" placeholder="age" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup">
            <label>* Image</label>
            <input type="file" name="image" value="" />
        </div><!-- .fieldgroup -->

        <input class="cta" type="submit" value="Sign up for VIP List">
    </form>

</div><!-- .form / form.php -->