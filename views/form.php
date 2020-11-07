<div class="form">
    <div class="title col-12 col-lg-5">
        <h2>Sign up now</h2>
        <div class="lists">
            <div class="list">
                <h3>list 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula mauris sit amet nisl ultrices, vitae faucibus risus maximus.</p>
            </div><!-- .list -->

            <div class="list">
                <h3>list 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula mauris sit amet nisl ultrices, vitae faucibus risus maximus.</p>
            </div><!-- .list -->

            <div class="list">
                <h3>list 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula mauris sit amet nisl ultrices, vitae faucibus risus maximus.</p>
            </div><!-- .list -->

        </div><!-- .lists -->
    </div><!-- title -->

    <form class="col-12 col-lg-7" id="signupForm" method="post" action="index.php" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="public" />
        <input type="hidden" name="action" value="signup" />
        
        <div class="fieldgroup required">
            <label>First name</label>
            <input type="text" name="strFirstName" placeholder="first name" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Last name</label>
            <input type="text" name="strLastName" placeholder="last name" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Email address</label>
            <input type="text" name="strEmail" placeholder="email address" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Phone number</label>
            <input type="text" name="strPhoneNumber" placeholder="phone number" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Country</label>
            <input type="text" name="strCountry" placeholder="country" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Age</label>
            <input type="text" name="strAge" placeholder="age" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup">
            <label>Image</label>
            <input type="file" name="image" value="" />
        </div><!-- .fieldgroup -->

        <input class="cta" type="submit" value="Sign up">
    </form>

</div><!-- .form / form.php -->