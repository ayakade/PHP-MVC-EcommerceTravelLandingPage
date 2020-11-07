<div class="form">
    <h1>Login</h1>
    <form id="signupForm" method="post" action="index.php" enctype="multipart/form-data">
        <input type="hidden" name="controller" value="public" />
        <input type="hidden" name="action" value="signup" />
        
        <div class="fieldgroup required">
            <label>First name</label>
            <input type="text" name="strFirstName" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Last name</label>
            <input type="text" name="strLastName" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Email address</label>
            <input type="text" name="strEmail" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup required">
            <label>Password</label>
            <input type="text" name="strPassword" value="" />
        </div><!-- .fieldgroup -->

        <div class="fieldgroup">
            <label>Image</label>
            <input type="file" name="image" value="" />
        </div><!-- .fieldgroup -->

        <input type="submit" value="Sign up">
    </form>

</div><!-- .form / form.php -->