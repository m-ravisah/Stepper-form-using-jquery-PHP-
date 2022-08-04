<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tasks</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="index.css">
</head>

<body>
<br />
    <div class="container box">
<br />
<h2 align="center">Student Form</h2><br /><br>

<form method="POST" id="register_form" >
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active_tab1" style="border:1px solid #ccc" id="list_login_details">1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_personal_details" style="border:1px solid #ccc">2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_contact_details" style="border:1px solid #ccc">3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link inactive_tab1" id="list_documentation" style="border:1px solid #ccc">4</a>
        </li>
    </ul><br>
    <br>
    <div class="tab-content" style="margin-top:16px;">
    <div class="tab-pane active" id="login_details">
    <div class="panel panel-default">
    <div class="panel-heading">Login Details</div>
    <div class="panel-body">
    <div class="form-group">
        <label class="required text-danger">Email Address</label>
        <input type="text" name="email" id="email" class="form-control" />
        <span id="error_email" class="text-danger"></span>
    </div>
    <div class="form-group">
        <label class="required text-danger">Password</label>
        <input type="password" name="pass_word" id="password" class="form-control" />
        <span id="error_password" class="text-danger"></span>
    </div>
    <div class="form-group">
        <label class="required text-danger">Confirm Password</label>
        <input type="password" name="conf_password" id="conf_password" class="form-control" />
        <span id="error_conf_password" class="text-danger"></span>
    </div>
    <br />
    <div align="left">
        <button type="button" name="btn_login_details" id="btn_login_details" class="btn btn-danger btn-lg">Next</button>
    </div>
    <br />
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="personal_details">
    <div class="panel panel-default">
    <div class="panel-heading">Personal Details</div>
    <div class="panel-body">
    <div class="form-group">
        <label class="required text-danger">First Name</label>
        <input type="text" name="first_name" id="first_name" class="form-control" />
        <span id="error_first_name" class="text-danger"></span>
    </div>
    <div class="form-group">
        <label class="required text-danger">Last Name</label>
        <input type="text" name="last_name" id="last_name" class="form-control" />
        <span id="error_last_name" class="text-danger"></span>
    </div>
    <div class="form-group">
        <label class="required text-danger">Gender</label><br><br>
        <label class="radio-inline">
        <input type="radio" name="gender" value="male" checked> Male
        </label>
        <label class="radio-inline">
        <input type="radio" name="gender" value="female"> Female
        </label>
    </div>
    <div class="form-group">
        <label class="required text-danger">Phone no.</label>
        <input type="tel" name="phone_no" id="phone_no" class="form-control" />
        <span id="error_phone_no" class="text-danger"></span>
    </div>
    <div>
        <label class="required text-danger">Hobbies</label><br><br>            
        <input type="checkbox" id="Traveling" name="hobbies[]" value="Trekking">
        <label for="Traveling">Traveling</label><br>
        <input type="checkbox" id="Trekking" name="hobbies[]" value="Trekking">
        <label for="Trekking">Trekking</label><br>
        <input type="checkbox" id="Cooking" name="hobbies[]" value="Cooking">
        <label for="Cooking">Cooking</label><br>
        <input type="checkbox" id="Reading" name="hobbies[]" value="Reading">
        <label for="Reading">Reading</label><br>
    </div>
    <br />
    <div align="left">
        <button type="button" name="previous_btn_personal_details" id="previous_btn_personal_details" class="btn btn-default btn-lg">Previous</button>
        <button type="button" name="btn_personal_details" id="btn_personal_details" class="btn btn-danger btn-lg">Next</button>
    </div>
    <br />
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="contact_details">
    <div class="panel panel-default">
    <div class="panel-heading">Academic Details</div>
    <div class="panel-body">
    <div class="form-group">
    <h4>10th</h4>
            <div class="first_part">
                <div class="form-group">
                    <label for="marks" class="required text-danger">Marks</label>
                    <input type="text" class="form-control" id="percentage"name="tenth_marks" placeholder="In Percentage">
                    <span id = "percentageError" class= "text-danger font-weight-bold"></span>

                </div>
                <div class="form-group gap">
                    <label for="subject" class="required text-danger">Subject</label>
                    <span id = "Percentageerror" class= "text-danger font-weight-bold"></span>

                    <select name="tenth_subject" id="subject" class="form-control" required>
                        <option value="Maths">Maths</option>
                        <option value="English">English</option>
                        <option value="Science">Science</option>
                        <option value="Social Studies">Social Studies</option>
                        <option value="Hindi">Hindi</option>
                        <option value="EPH">EPH</option>
                        <option value="Grammar">Grammar</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="ugap">
            <h4>+2</h4>
            <div class="first_part">
                <div class="form-group">
                    <label for="marks" class="required text-danger">Marks</label>
                    <input type="text" class="form-control" name="twelve_marks" id="percentag" placeholder="In Percentage">
                    <span id = "percentagError" class= "text-danger font-weight-bold"></span>

                </div>
                <div class="form-group gap">
                    <label for="subject" class="required text-danger">Branch</label>
                    <select id="subject" name="twelve_branch" class="form-control" required>
                        <option value="Arts">Arts</option>
                        <option value="Science">Science</option>
                        <option value="Commerce">Commerce</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="ugap">
            <h4>Graduation</h4>
            <div class="first_part">
                <div class="form-group">
                    <label for="marks" class="required text-danger">Marks</label>
                    <input type="text" class="form-control" id="percenta" name="grad_marks" placeholder="In Percentage">
                    <span id = "percentaError" class= "text-danger font-weight-bold"></span>

                </div>
                <div class="form-group gap">
                    <label for="subject" class="required text-danger">Branch</label>
                    <select name="grad_branch" id="subject" class="form-control" required>
                        <option value="CSE">CSE</option>
                        <option value="ME">ME</option>
                        <option value="CE">CE</option>
                        <option value="EE">EE</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="ugap">
            <h4>Masters</h4>
            <div class="first_part">
                <div class="form-group">
                    <label for="marks" class="required text-danger">Marks</label>
                    <input type="text" class="form-control"id="percentt" name="mast_marks" placeholder="In Percentage">
                    <span id = "percenttError" class= "text-danger font-weight-bold"></span>

                </div>
                <div class="form-group gap">
                    <label for="subject" class="required text-danger">Branch</label>
                    <select name="mast_branch" id="subject" class="form-control" required>
                        <option value="PHP">PHP</option>
                        <option value="Python">Python</option>
                        <option value="Java">Java</option>
                    </select>
                </div>
            </div>
        </div>

    <br />
    <div align="left">
        <button type="button" name="previous_btn_contact_details" id="previous_btn_contact_details" class="btn btn-default btn-lg">Previous</button>
        <button type="button" name="btn_contact_details" id="btn_contact_details" class="btn btn-danger btn-lg">Next</button>
    </div>
    <br />
    </div>
    </div>
    </div>


    <div class="tab-pane fade" id="documentation">
        <div class="panel panel-default">
            <div class="panel-heading">Documentation</div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="required text-danger">Profile Picture</label>
                    <input type="file" name="profile_pic" id="profile_pic" accept=".jpg, .png, .jpeg" 
                    onchange= "getImagePreview(event)" class="form-control" />
                    <span id="error_profile_pic" class="text-danger"></span>
                    <div id="imgPrev" ></div>
                </div>
                <div class="form-group">
                    <label class="required text-danger">10th </label>
                    <input type="file" name="tenth_doc" id="tenth_doc" accept=".pdf" class="form-control" />
                    <span id="error_tenth_doc" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label class="required text-danger">12th</label>
                    <input type="file" name="twelveth_doc" id="twelveth_doc" accept=".pdf" class="form-control" />
                    <span id="error_twelveth_doc" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label class="required text-danger">Graduation</label>
                    <input type="file" name="graduation_doc" id="graduation_doc" accept=".pdf" class="form-control" />
                    <span id="error_graduation_doc" class="text-danger"></span>
                </div>
                <div class="form-group">
                    <label class="required text-danger">Master</label>
                    <input type="file" name="masters_doc" id="masters_doc" accept=".pdf" class="form-control" />
                    <span id="error_masters_doc" class="text-danger"></span>
                </div>
                
                <br />
                <div align="left">
                    <button type="button" name="previous_btn_documentation" id="previous_btn_documentation" class="btn btn-default btn-lg">Previous</button>
                    <input type="submit" name="btn_documentation" id="btn_documentation" class="btn btn-danger btn-lg" value="preview" onclick="action='insert.php';">
                </div>
                <br />
            </div>
        </div>
    </div>
</div>
</form>
</div>
</body>
</html>

<script>
    
$(document).ready(function(){

$('#btn_login_details').click(function(){

var error_email = '';
var error_password = '';
var error_conf_password = '';
var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var filterr = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

if($.trim($('#email').val()).length == 0)
{
error_email = 'Email is required';
$('#error_email').text(error_email);
$('#email').addClass('has-error');
}
else
{
if (!filter.test($('#email').val()))
{
error_email = 'Invalid Email';
$('#error_email').text(error_email);
$('#email').addClass('has-error');
}
else
{
error_email = '';
$('#error_email').text(error_email);
$('#email').removeClass('has-error');
}
}

if($.trim($('#password').val()).length == 0)
{
error_password = 'Password is required';
$('#error_password').text(error_password);
$('#password').addClass('has-error');
}
else
{
    if(!filterr.test($('#password').val()))
    {error_password = 'Invalid password';
    $('#error_password').text(error_password);
    $('#password').addClass('has-error');
    }
    else{
    error_password = '';
    $('#error_password').text(error_password);
    $('#password').removeClass('has-error');
}
}
if($.trim($('#conf_password').val()).length == 0)
{
error_conf_password = 'Password is required';
$('#error_conf_password').text(error_conf_password);
$('#conf_password').addClass('has-error');
}
else
{
if ($('#password').val() !== $('#conf_password').val()) 
    { error_conf_password = 'password not matched';
    $('#error_conf_password').text(error_conf_password);
    $('#conf_password').addClass('has-error');
}
else{
error_conf_password = '';
$('#error_conf_password').text(error_conf_password);
$('#conf_password').removeClass('has-error');

}
}
if(error_email != '' || error_password != '' || error_conf_password != '')
{
return false;
}
else
{
$('#list_login_details').removeClass('active active_tab1');
$('#list_login_details').removeAttr('href data-toggle');
$('#login_details').removeClass('active');
$('#list_login_details').addClass('inactive_tab1');
$('#list_personal_details').removeClass('inactive_tab1');
$('#list_personal_details').addClass('active_tab1 active');
$('#list_personal_details').attr('href', '#personal_details');
$('#list_personal_details').attr('data-toggle', 'tab');
$('#personal_details').addClass('active in');
}
});

$('#previous_btn_personal_details').click(function(){
$('#list_personal_details').removeClass('active active_tab1');
$('#list_personal_details').removeAttr('href data-toggle');
$('#personal_details').removeClass('active in');
$('#list_personal_details').addClass('inactive_tab1');
$('#list_login_details').removeClass('inactive_tab1');
$('#list_login_details').addClass('active_tab1 active');
$('#list_login_details').attr('href', '#login_details');
$('#list_login_details').attr('data-toggle', 'tab');
$('#login_details').addClass('active in');
});

$('#btn_personal_details').click(function(){
var error_first_name = '';
var error_last_name = '';
var mobile_validation = /^\d{10}$/;
var name = /^[A-Za-z]+$/;
var namee = /^[A-Za-z]+$/;


if($.trim($('#first_name').val()).length == 0)
{
    error_first_name = 'First Name is required';
    $('#error_first_name').text(error_first_name);
    $('#first_name').addClass('has-error');

} 
else{
    if(!name.test($('#first_name').val()))
        {
            error_first_name = 'Only characters are Allowed';
            $('#error_first_name').text(error_first_name);
            $('#first_name').addClass('has-error');
        }
    else    
        {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').removeClass('has-error');
        }
}


if($.trim($('#last_name').val()).length == 0)
{
    error_last_name = 'Last Name is required';
    $('#error_last_name').text(error_last_name);
    $('#last_name').addClass('has-error');
}

else
{
    if(!namee.test($('#last_name').val()))
    {
        error_last_name = 'Only characters are Allowed';
        $('#error_last_name').text(error_last_name);
        $('#last_name').addClass('has-error');
    }
    else{
        error_last_name = '';
        $('#error_last_name').text(error_last_name);
        $('#last_name').removeClass('has-error');
    }

}

if($.trim($('#phone_no').val()).length == 0)
{
error_phone_no = 'phone Number is required';
$('#error_phone_no').text(error_phone_no);
$('#phone_no').addClass('has-error');
}
else
{
if (!mobile_validation.test($('#phone_no').val()))
{
error_phone_no = 'Invalid phone Number';
$('#error_phone_no').text(error_phone_no);
$('#phone_no').addClass('has-error');
}
else
{
error_phone_no = '';
$('#error_phone_no').text(error_phone_no);
$('#phone_no').removeClass('has-error');
}
}

if(error_first_name != '' || error_last_name != '' || error_phone_no !='')
{
return false;
}
else
{
$('#list_personal_details').removeClass('active active_tab1');
$('#list_personal_details').removeAttr('href data-toggle');
$('#personal_details').removeClass('active');
$('#list_personal_details').addClass('inactive_tab1');
$('#list_contact_details').removeClass('inactive_tab1');
$('#list_contact_details').addClass('active_tab1 active');
$('#list_contact_details').attr('href', '#contact_details');
$('#list_contact_details').attr('data-toggle', 'tab');
$('#contact_details').addClass('active in');
}
});

$('#previous_btn_contact_details').click(function(){
$('#list_contact_details').removeClass('active active_tab1');
$('#list_contact_details').removeAttr('href data-toggle');
$('#contact_details').removeClass('active in');
$('#list_contact_details').addClass('inactive_tab1');
$('#list_personal_details').removeClass('inactive_tab1');
$('#list_personal_details').addClass('active_tab1 active');
$('#list_personal_details').attr('href', '#personal_details');
$('#list_personal_details').attr('data-toggle', 'tab');
$('#personal_details').addClass('active in');
});


$('#btn_contact_details').click(function(){

var percentageError = '';
var percentagError = '';
var percentaError = '';
var percenttError ='';
var filter = /\b(?<!\.)(?!0+(?:\.0+)?%)(?:\d|[1-9]\d|100)(?:(?<!100)\.\d+)?%/;

if($.trim($('#percentage').val()).length == 0)
{
percentageError = 'Percentage is required';
$('#percentageError').text(percentageError);
$('#percentage').addClass('has-error');
}
else
{
if (!filter.test($('#percentage').val()))
{
percentageError = 'Invalid Percentage';
$('#percentageError').text(percentageError);
$('#percentage').addClass('has-error');
}
else
{
percentageError = '';
$('#percentageError').text(percentageError);
$('#percentage').removeClass('has-error');
}
}


if($.trim($('#percentag').val()).length == 0)
{
percentagError = 'Percentage is required';
$('#percentagError').text(percentagError);
$('#percentag').addClass('has-error');
}
else
{
if (!filter.test($('#percentag').val()))
{
percentagError = 'Invalid Percentage';
$('#percentagError').text(percentagError);
$('#percentag').addClass('has-error');
}
else
{
percentagError = '';
$('#percentagError').text(percentagError);
$('#percentag').removeClass('has-error');
}
}


if($.trim($('#percenta').val()).length == 0)
{
percentaError = 'Percentage is required';
$('#percentaError').text(percentaError);
$('#percenta').addClass('has-error');
}
else
{
if (!filter.test($('#percenta').val()))
{
percentaError = 'Invalid Percentage';
$('#percentaError').text(percentaError);
$('#percenta').addClass('has-error');
}
else
{
percentaError = '';
$('#percentaError').text(percentaError);
$('#percenta').removeClass('has-error');
}
}

if($.trim($('#percentt').val()).length == 0)
{
percenttError = 'Percentage is required';
$('#percenttError').text(percenttError);
$('#percentt').addClass('has-error');
}
else
{
if (!filter.test($('#percentt').val()))
{
percenttError = 'Invalid Percentage';
$('#percenttError').text(percenttError);
$('#percentt').addClass('has-error');
}
else
{
percenttError = '';
$('#percenttError').text(percenttError);
$('#percentt').removeClass('has-error');
}
}

if(percentageError != '' || percentagError != '' || percentaError != '' || percenttError != '')
{
return false;
}
else
{
$('#list_contact_details').removeClass('active active_tab1');
$('#list_contact_details').removeAttr('href data-toggle');
$('#contact_details').removeClass('active');
$('#list_contact_details').addClass('inactive_tab1');
$('#list_documentation').removeClass('inactive_tab1');
$('#list_documentation').addClass('active_tab1 active');
$('#list_documentation').attr('href', '#documentation');
$('#list_documentation').attr('data-toggle', 'tab');
$('#documentation').addClass('active in');
}
});

$('#previous_btn_documentation').click(function(){
$('#list_documentation').removeClass('active active_tab1');
$('#list_documentation').removeAttr('href data-toggle');
$('#documentation').removeClass('active in');
$('#list_contact_details').addClass('inactive_tab1');
$('#list_contact_details').removeClass('inactive_tab1');
$('#list_contact_details').addClass('active_tab1 active');
$('#list_contact_details').attr('href', '#contact_details');
$('#list_contact_details').attr('data-toggle', 'tab');
$('#contact_details').addClass('active in');
});

$('#btn_documentation').click(function(){
var error_profile_pic = '';
var error_tenth_doc ='';
var error_twelveth_doc = '';
var error_graduation_doc = '';
var error_masters_doc ='';


if($.trim($('#profile_pic').val()).length == 0)
{
error_profile_pic = 'profile pic is required';
$('#error_profile_pic').text(error_profile_pic);
$('#profile_pic').addClass('has-error');
}
else
{
error_profile_pic = '';
$('#error_profile_pic').text(error_profile_pic);
$('#profile_pic').removeClass('has-error');
}

if($.trim($('#tenth_doc').val()).length == 0)
{
error_tenth_doc = 'tenth document is required';
$('#error_tenth_doc').text(error_tenth_doc);
$('#tenth_doc').addClass('has-error');
} 
else
{
error_tenth_doc = '';
$('#error_tenth_doc').text(error_tenth_doc);
$('#tenth_doc').removeClass('has-error');
}

if($.trim($('#twelveth_doc').val()).length == 0)
{
error_twelveth_doc = 'twelveth document is required';
$('#error_twelveth_doc').text(error_twelveth_doc);
$('#twelveth_doc').addClass('has-error');
} 
else
{
error_twelveth_doc = '';
$('#error_twelveth_doc').text(error_twelveth_doc);
$('#twelveth_doc').removeClass('has-error');
}

if($.trim($('#graduation_doc').val()).length == 0)
{
error_graduation_doc = 'graduation document is required';
$('#error_graduation_doc').text(error_graduation_doc);
$('#graduation_doc').addClass('has-error');
} 
else
{
error_graduation_doc = '';
$('#error_graduation_doc').text(error_graduation_doc);
$('#graduation_doc').removeClass('has-error');
}

if($.trim($('#masters_doc').val()).length == 0)
{
error_masters_doc = 'masters document is required';
$('#error_masters_doc').text(error_masters_doc);
$('#masters_doc').addClass('has-error');
} 
else
{
error_masters_doc = '';
$('#error_masters_doc').text(error_masters_doc);
$('#masters_doc').removeClass('has-error');
}



if(error_profile_pic != '' || error_tenth_doc != '' || error_twelveth_doc != '' || error_graduation_doc !='' || error_masters_doc !='')
{
return false;
}
    else {
   
//      $('#btn_documentation').attr("disabled", "disabled");
//         // $(document).css('cursor', 'progress');
        $("#register_form").submit();

   }
});

});


function getImagePreview(event){
        var image= URL.createObjectURL(event.target.files[0]);
        var imaged = document.getElementById('imgPrev');
        var newimage = document.createElement("img");
        imaged.innerHTML='';
        newimage.src=image;
        newimage.width='100';
        imaged.appendChild(newimage);

    }



</script>
