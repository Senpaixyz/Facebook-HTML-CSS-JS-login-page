<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook login page </title>
    <link href='login.css' rel='stylesheet' type='text/css'>
    <link rel="icon" href="logo.png">
</head>
<body>

<div class="container">
        <div id="navwrapper">
            <div id="navbar"> 
                <table class="tablewrapper">
                    <tr>
                    <td class="row1">Email or Phone</td>
                    <td class="row1">Password</td>
                    </tr>
                    <tr>
                    <td><input type="text" class="inputtext">
                    </td>
                    <td><input type="text" class="inputtext">
                    </td>
                    <td><div id="button">Log In</div></td>
                    </tr>
                    <tr>
                    <td>
                        <div class="row2"><input type="checkbox" checked>Keep me logged in</div></td>
                    <td class="row2 h">Forgot your password?</td>
                </table>
                
                <h1 class="fblogo">Welcome to Facebook</h1>
            
            </div>
        </div>

        <div id="contentwrapper">
            <div id="content">
            
                <div id="leftbod">
                    
                    <div class="connect">
                        <img src="world.png"> 
                    </div> 
                </div>
                
                <div id="rightbod">
                    <div class="signup bolder">Sign Up</div>
                    <div class="free bolder">It's free and always will be</div>
                    <form name="signup" action="display.php" method="POST" onsubmit="return formvalidation()">
                    <div class="formbox">
                    <input type="text" id="fname" name="fname" onkeyup="isnotblank(this)" class="inputbody in1" placeholder="First name">
                    <input type="text" id="lname" name="lname" onkeyup="isnotblank(this)" class="inputbody in1 fr" placeholder="Last name">
                    </div>
                    <div class="formbox">
                    <input type="email" id="email" onkeyup="validate(this)" name="email" class="inputbody in2" placeholder="Email or mobile number">
                    </div>
                    <div class="formbox">
                    <input type="email" id="re_email" onkeyup="revalidate(this)" class="inputbody in2" placeholder="Re-enter email or mobile number">
                    </div>
                    <div class="formbox">
                    <input type="password"id="pswd" onkeyup="isnotblank(this)"  name="pswd" class="inputbody in2" placeholder="New password">
                    </div>
                    <div class="formbox">
                    <div class="bday">Birthday</div>
                    </div>
                    <div class="formbox">
                    <span data-type="selectors">
                        <span>
                        <select id="year" name="yyyy" class="selectbody fl" onchange="change_year(this)">
                        </select>
                        <select  id="day" name = "dd" class="selectbody fl">
                        </select>
                        <select id="month" name = "mm" class="selectbody" onchange="change_month(this)">
                        </select>
                        <span  id="warning_bday" style="font-size:10px;padding:4px 6px; background: red;color:white" hidden>You must set your Birthday!</span>
                        </span>
                        <div class="formbox mt1">
                        <span data-type="radio" class="spanpad">
                            <input type="radio" name="gender" value="Female" id="fem" class="m0">
                            <label for="fem" class="gender">Female
                            </label>
                            <input type="radio" name="gender" value="Male" id="male" class="m0">
                            <label for="male" class="gender">Male
                            </label>
                            <input type="radio" name="gender" value="Undecided" id="undecided" class="m0">
                            <label for="custome" class="gender">Custom
                            </label>
                        </span>
                        <br>
                        <span id="warning_gender" style="font-size:10px;padding:4px 6px; background: red;color:white" hidden>You must set your Gender!</span>
                        </div>
                        <div class="formbox">
                        <div class="agree">
                            By clicking Sign Up, you agree to our <div class="link">Terms</div> and that you have read our <div class="link">Data Use Policy</div>, including our <div class="link">Cookie Use</div>.
                        </div>  
                        </div>
                        <div class="formbox">
                        <button type="submit" class="signbut bolder">Sign Up</button>
                        </div>
                    <div class="formbox">
                        <div class="create"><div class="link h">Create a Page</div> for a celebrity, band or business.</div>
                    </div>
        </form>
                </div>
                </div>
            </div>
    </div>
</div>
    <script>
                     /*Homemade code for form validation from Jhino Cerbito */
            function isnotblank(obj){
                let inpt = obj.value;
                let inpt_id = obj.id;
                let fname= document.querySelector('#fname').getAttribute('id');
                let lname= document.querySelector('#lname').getAttribute('id');
                if(inpt!=""){
                    if(inpt_id==fname){
                        document.querySelector('#fname').setAttribute('style','border:1px solid green');
                    }
                    else if(inpt_id==lname){
                        document.querySelector('#lname').setAttribute('style','border:1px solid green');
                    }
                    else{
                        document.querySelector('#pswd').setAttribute('style','border:1px solid green');
                    }
                }
                else{
                    if(inpt_id==fname){
                        document.querySelector('#fname').setAttribute('style','border:1px solid red');
                    }
                    else if(inpt_id==lname){
                        document.querySelector('#lname').setAttribute('style','border:1px solid red');
                    }
                    else{
                        document.querySelector('#pswd').setAttribute('style','border:1px solid red');
                    }
                }
            }

            let ismatch = false;
            function formvalidation(){
                let fname = document.forms['signup']['fname'].value;
                let lname = document.forms['signup']['lname'].value;
                let email = document.forms['signup']['email'].value;
                let re_email = document.forms['signup']['re_email'].value;
                let pswd = document.forms['signup']['pswd'].value;
                let mm = document.forms['signup']['mm'].value;
                let dd = document.forms['signup']['dd'].value;
                let yy = document.forms['signup']['yyyy'].value;
                let gender = document.forms['signup']['gender'].value;
                let is_name = false;
                let is_email = false;
                let is_pswd = false;
                let is_bday = false;
                let is_gender  = false;
                //validate fname and lname;
                if(fname!="" && lname!=""){
                    is_name=true;
                }
                else{
                    if(fname==""&&lname!=""){
                        document.querySelector('#fname').setAttribute('style','border:1px solid red');
                    }
                    else if(lname=""&&fname!=""){
                        document.querySelector('#lname').setAttribute('style','border:1px solid red');
                    }
                    else{
                        document.querySelector('#fname').setAttribute('style','border:1px solid red');
                        document.querySelector('#lname').setAttribute('style','border:1px solid red');
                    }
                }
                if(ismatch==true || (email!=""&&re_email!="")){
                    is_email = true;
                }
                else{
                    document.querySelector('#email').setAttribute('style','border:1px solid red');
                    document.querySelector('#re_email').setAttribute('style','border:1px solid red');
                }
                if(pswd!=""){
                    is_pswd = true;
                }
                else{
                    document.querySelector('#pswd').setAttribute('style','border:1px solid red');
                }
                if(mm!="month"&&dd!="day"&&yy!="year"){
                    is_bday=true;
                }
                else{
                    document.querySelector('#warning_gender').removeAttribute('hidden');
                    setTimeout(function(){ document.querySelector('#warning_gender').setAttribute('hidden',true);},3000)
                }
                if(gender!=""){
                    is_gender=true;
                }
                else{
                    document.querySelector('#warning_bday').removeAttribute('hidden');
                    setTimeout(function(){ document.querySelector('#warning_bday').setAttribute('hidden',true);},3000)
                }
                if(is_name==true&&is_email==true&&is_pswd==true&&is_bday==true&&is_gender==true){
                    return true;
                }
                else{
                    return false;
                }

            }
            function validate(input){
                let inpt = input.value;
                let main_email = document.querySelector('#re_email').value;
                if(main_email==inpt){
                    document.querySelector('#email').setAttribute('style','border:1px solid green');
                    document.querySelector('#re_email').setAttribute('style','border:1px solid green');
                    ismatch = true;
                }
                else{
                    document.querySelector('#email').setAttribute('style','border:1px solid red');
                    document.querySelector('#re_email').setAttribute('style','border:1px solid red');
                    ismatch = false;
                }
            }
            function revalidate(input){
                let inpt = input.value;
                let re_email = document.querySelector('#email').value;
                if(re_email==inpt){
                    document.querySelector('#re_email').setAttribute('style','border:1px solid green');
                    document.querySelector('#email').setAttribute('style','border:1px solid green');
                    ismatch = true;
                }
                else{
                    document.querySelector('#re_email').setAttribute('style','border:1px solid red');
                    document.querySelector('#email').setAttribute('style','border:1px solid red');
                    ismatch = false;
                }
            }
            let Days = [31,28,31,30,31,30,31,31,30,31,30,31];// get the last days in motnth
            let Months_array = ['January','February','March','April','May','June','July','August','September','October','November','December'];
            let int_months = {"January":1,"February":2,"March":3,"April":4,"May":5,"June":6,"July":7,"August":8,"September":9,"October":10,"November":11,"December":12};
            window.addEventListener('load',function(){
                        var option = '<option value="day">Day</option>';
                        for (var i=1;i <= Days[0];i++){ //add option days
                            option += '<option value="'+ i + '">' + i + '</option>';
                        }
                        let thisday = document.querySelector("#day");
                        thisday.innerHTML = option;
                        thisday.children[0].setAttribute('selected','Day');

                        var option = '<option value="month">Month</option>';
                        for (var i=1;i <= 12;i++){
                            option += '<option value="'+ Months_array[i-1] + '">' + Months_array[i-1] + '</option>';
                        }
                        let thismonth = document.querySelector('#month');
                        thismonth.innerHTML = option;
                        thismonth.children[0].setAttribute('selected','Month');

                        var d = new Date();
                        var option = '<option value="year">Year</option>';
                        selectedYear ="Year";
                        for (var i=1950;i <= d.getFullYear();i++){// years start i
                            option += '<option value="'+ i + '">' + i + '</option>';
                        }
                        let thisyear = document.querySelector('#year');
                        thisyear.innerHTML = option;
                        thisyear.children[0].setAttribute('selected','Year');
            });
            function isLeapYear(year) {
                year = parseInt(year);
                if (year % 4 != 0) {
                    return false;
                } else if (year % 400 == 0) {
                    return true;
                } else if (year % 100 == 0) {
                    return false;
                } else {
                    return true;
                }
            }

        function change_year(select){
            if( isLeapYear( select.value ) )
            {

                Days[1] = 29;
                    
            }
            else {
                Days[1] = 28;
            }

            if( document.querySelector("#month").value == "February")
                    {
                        var day = document.querySelector('#day');
                        var val = day.value;
                        day.innerHTML = "";
                        var month = parseInt( int_months[select.value] ) - 1;
                        var option = '<option value="day">Day</option>';
                        for (var i=1;i <= Days[month];i++){ //add option days
                                option += '<option value="'+ i + '">' + i + '</option>';
                    }
                        day.innerHTML=option;
                        if( val > Days[ month ] )
                        {
                                val = 1;
                        }
                        day.value = val;
                    }
        }

        function change_month(select) {
                var day = document.querySelector('#day');
                var val = day.value;
                day.innerHTML = "";
                var option = '<option value="day">Day</option>';
                var month = parseInt( int_months[select.value] ) - 1;
                console.log(month);
                for (var i=1;i <= Days[ month ];i++){ //add option days
                    option += '<option value="'+ i + '">' + i + '</option>';
                }
                day.innerHTML=option;
                if( val > Days[ month ] )
                {
                    val = 1;
                }
                day.value = val;
        }
    </script>
</body>
</html>
