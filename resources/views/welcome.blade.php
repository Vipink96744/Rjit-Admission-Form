<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admission Form</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <div class="container"> <!-- Logo Container -->
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <center><img src="../images/logo.png" class="img-fluid"></center>
        </div> <!-- RJIT Logo -->
    </div>
    <div class="page-content">
        <div class="form-v1-content">
            <div class="wizard-form">
                <form class="form-register" onsubmit="return validatefields()" action="/admission" name="registration" method="post" novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="form-total">
                        <!-- SECTION 1 -->
                        <h2>
                            <p class="step-icon"><span>01</span></p>
                            <span class="step-text">Peronal Infomation</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Peronal Infomation</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>First Name</legend>
                                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{old('first
                                            _name')}}" required>
                                        </fieldset>
                                    </div>
                                    <div class="form-holder">
                                        <fieldset>
                                            <legend>Last Name</legend>
                                            <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last Name" value="{{old('last-name')}}" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Your Email</legend>
                                            <input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="{{old('your_email')}}" placeholder="example@email.com" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Mobile Number</legend>
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="888-999-7777" maxlength="10" value="{{old('phone')}}" required>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <select class="form-control" name="gender" id="gender" value="{{old('gender')}}">
                                        <option value="gender" disabled selected>Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="form-row form-row-date">
                                    <div class="form-holder form-holder-2">
                                        <label class="special-label">Birth Date:<br>
                                        <small>As per 10th/12th Marksheet</small></label>
                                        <select name="month" id="month" value="{{old('month')}}">
                                            <option value="MM" disabled selected>MM</option>
                                            <option value="0">Month</option>
                                            <option value="Jan">Jan</option>
                                            <option value="Feb">Feb</option>
                                            <option value="Mar">Mar</option>
                                            <option value="Apr">Apr</option>
                                            <option value="May">May</option>
                                            <option value="Jun">Jun</option>
                                            <option value="Jul">Jul</option>
                                            <option value="Aug">Aug</option>
                                            <option value="Sep">Sep</option>
                                            <option value="Oct">Oct</option>
                                            <option value="Nov">Nov</option>
                                            <option value="Dec">Dec</option>
                                        </select>
                                        <select name="date" id="date" value="{{old('date')}}">
                                            <option value="DD" disabled selected>DD</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>

                                        </select>
                                        <select name="year" id="year" value="{{old('year')}}">
                                            <option value="YYYY" disabled selected>YYYY</option>
                                            <option value="2017">2017</option>
                                            <option value="2016">2016</option>
                                            <option value="2015">2015</option>
                                            <option value="2014">2014</option>
                                            <option value="2013">2013</option>
                                            <option value="2012">2012</option>
                                            <option value="2011">2011</option>
                                            <option value="2010">2010</option>
                                            <option value="2009">2009</option>
                                            <option value="2008">2008</option>
                                            <option value="2007">2007</option>
                                            <option value="2006">2006</option>
                                            <option value="2005">2005</option>
                                            <option value="2004">2004</option>
                                            <option value="2003">2003</option>
                                            <option value="2012">2002</option>
                                            <option value="2011">2001</option>
                                            <option value="2010">2000</option>
                                            <option value="2009">1999</option>
                                            <option value="2008">1998</option>
                                            <option value="2007">1997</option>
                                            <option value="2006">1996</option>
                                            <option value="2005">1995</option>
                                            <option value="2004">1994</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <legend>Image Upload</legend>
                                        <input type="file" class="form-control input-border" id="ssn" required>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 2 -->
                        <h2>
                            <p class="step-icon"><span>02</span></p>
                            <span class="step-text">Tell Us More</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Tell Us More,A Bit About Yourself</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Father's Name</legend>
                                            <input type="text" name="Father_name" id="Father_name" class="form-control" placeholder="Enter Full Name" keyup="validate()" value="{{old('Father_name')}}" required>
                                            <span id="father_name_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Mother's Name</legend>
                                            <input type="text" class="form-control" id="Mother_name" name="Mother_name" placeholder="Enter Full Name" value="{{old('Mother_name')}}" required>
                                            <span id="mother_name_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Father's Email</legend>
                                            <input type="text" name="Father_email" id="Father_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" value="{{old('Father_email')}}" placeholder="example@email.com">
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Father's Contact Number</legend>
                                            <input type="text" class="form-control" id="Father_phone" name="Father_phone" placeholder="888-999-7777" value="{{old('Father_phone')}}" maxlength="10" required>
                                            <span id="father_no_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Aadhaar Number</legend>
                                            <input type="text" class="form-control" id="aadhar" name="aadhar" placeholder="" maxlength="12" value="{{old('aadhar')}}" required>
                                            <span id="aadharmsg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Identification Mark</legend>
                                            <input type="text" name="Identification" id="Identification" class="form-control" placeholder="Black Mole on Neck" value="{{old('Identification')}}" required>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- SECTION 3 -->
                        <h2>
                            <p class="step-icon"><span>03</span></p>
                            <span class="step-text">Academic (10th)</span>
                        </h2>
                        <section>
                            <br>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">10th Details</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>School/College Name</legend>
                                            <input type="text" name="ten_school" id="ten_school" class="form-control" value="{{old('ten_school')}}" required>
                                            <span id="ten_school_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Board</legend>
                                            <input type="text" class="form-control" value="{{old('ten_board')}}" id="ten_board" name="ten_board" required>
                                            <span id="ten_board_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Subjects</legend>
                                            <input type="text" class="form-control" id="ten_subjects" name="ten_subjects" placeholder="" value="{{old('ten_subjects')}}" required>
                                            <span id="ten_subjects_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Year Of Passing</legend>
                                            <input type="text" name="ten_passing" id="ten_passing" class="form-control" value="{{old('ten_passing')}}" required>
                                            <span id="ten_passing_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Percentage/CGPA</legend>
                                            <input type="text" name="ten_percentage" value="{{old('ten_percentage')}}" id="ten_percentage" class="form-control" required>
                                            <span id="ten_percentage_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                </div>
                        </section>
                        <!-- Section 4 -->
                        <h2>
                            <p class="step-icon"><span>04</span></p>
                            <span class="step-text">Academic (12th)</span>
                        </h2>
                        <section>
                            <br>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">12th/Diploma Details</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>School/College Name</legend>
                                            <input type="text" name="tw_school" id="tw_school" class="form-control" value="{{old('tw_school')}}" required>
                                            <span id="tw_school_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Board</legend>
                                            <input type="text" class="form-control" id="tw_board" name="tw_board" value="{{old('tw_board')}}" required>
                                            <span id="tw_board_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Subjects</legend>
                                            <input type="text" class="form-control" id="tw_subjects" name="tw_subjects" value="{{old('tw_subjects')}}" placeholder=" PCM/PCB" required>
                                            <span id="tw_subjects_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Year Of Passing</legend>
                                            <input type="text" name="tw_passing" id="tw_passing" class="form-control" value="{{old('tw_passing')}}" required>
                                            <span id="tw_passing_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Percentage</legend>
                                            <input type="text" name="tw_percentage" id="tw_percentage" class="form-control" value="" value="{{old('tw_percentage')}}" required>
                                        </fieldset>
                                    </div>
                                </div>
                                </div>
                        </section>
                        <!-- Section 5 -->
                        <h2>
                            <p class="step-icon"><span>05</span></p>
                            <span class="step-text">Other Details</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Other Details</h3>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>12th Exam Roll Number</legend>
                                            <input type="text" class="form-control" id="tw_rollno" name="tw_rollno" value="{{old('tw_rollno')}}" required>
                                            <span id="tw_rollno_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>JEE MAIN Roll Number</legend>
                                            <input type="text" class="form-control" id="jee_main_rollno" name="jee_main_rollno" value="{{old('jee_main_rollno')}}" maxlength="8" required>
                                            <span id="jee_rollno_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <select class="form-control" name="Nationality" value="{{old('Nationality')}}" id="Nationality" required>
                                        <option disabled selected>Nationality</option>
                                        <option value="Indian">Indian</option>
                                        <option value="NRI">NRI</option>
                                    </select>
                                    <span id="nationality_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                <br>
                                <div class="form-row">
                                    <select class="form-control" name="Religion" id="Religion" value="{{old('Religion')}}" required>
                                        <option disabled selected>Religion</option>
                                        <option value="1">Hindu</option>
                                        <option value="2">Muslim</option>
                                        <option value="3">Sikh</option>
                                        <option value="4">Christian</option>
                                        <option value="5">Others</option>
                                    </select>
                                    <span id="religion_msg" class="text-danger font-weight-bold" ></span>
                                    <input type="text" name="other_religion" id="other_religion" class="form-control">
                                </div>
                                <br>
                                <div class="form-row">
                                    <select class="form-control" name="Category" id="Category" value="{{old('Category')}}" required>
                                        <option disabled selected>Category</option>
                                        <option value="GEN">GEN</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                    </select>
                                    <span id="category_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                <br>
                                <div class="form-row">
                                    <select class="form-control" name="Handicapped" id="Handicapped" value="{{old('Handicapped')}}" required>
                                        <option disabled selected>If Physical Handicapped</option>
                                        <option value="Yes">YES</option>
                                        <option value="no">NO</option>
                                    </select>
                                    <span id="handicapped_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                <br>
                                <div class="form-row">
                                    <select class="form-control" name="jkresident" id="jkresident" value="{{old('jkresident')}}" required>
                                        <option disabled selected>Are You A Resident Of J & K?</option>
                                        <option value="Yes">YES</option>
                                        <option value="no">NO</option>
                                    </select>
                                    <span id="jkresident_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                </div>
                        </section>
                        <!-- Section 6 -->
                         <h2>
                            <p class="step-icon"><span>06</span></p>
                            <span class="step-text">Communication Details</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Communication Details</h3>
                                </div>

                                <br>
                                <label class="special-label">Correspondence Address</label>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>House No.</legend>
                                            <input type="text" class="form-control" id="house_no" name="house_no" value="{{old('house_no')}}" required>
                                            <span id="house_no_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Street Name</legend>
                                            <input type="text" class="form-control" id="street_name" name="street_name" value="{{old('street_name')}}" required>
                                            <span id="street_name_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Landmark</legend>
                                            <input type="text" class="form-control" id="landmark" name="landmark" value="{{old('landmark')}}" required>
                                            <span id="landmark_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>City</legend>
                                            <input type="text" class="form-control" id="city" name="city" value="{{old('city')}}" required>
                                            <span id="city_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>State</legend>
                                            <input type="text" class="form-control" id="state" name="state" value="{{old('state')}}" required>
                                            <span id="state_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>PIN CODE</legend>
                                            <input type="text" class="form-control" id="pincode" name="pincode" value="{{old('pincode')}}" maxlength="6" required>
                                            <span id="pincode_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <input type="checkbox" name="same_address" value="yes" onclick="add_copy(this.form)";>Same as Above Address<br>
                                <label class="special-label">Permanent Address</label>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>House No.</legend>
                                            <input type="text" class="form-control" id="pahouse_no" name="pahouse_no" value="{{old('pahouse_no')}}" required>
                                            <span id="pahouse_no_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Street Name</legend>
                                            <input type="text" class="form-control" id="pastreet_name" name="pastreet_name" value="{{old('pastreet_name')}}" required>
                                            <span id="pastreet_name_msg" class="text-danger font-weight-bold" ></span>s
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>Landmark</legend>
                                            <input type="text" class="form-control" id="palandmark" name="palandmark" value="{{old('palandmark')}}" required>
                                            <span id="palandmark_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>City</legend>
                                            <input type="text" class="form-control" id="pacity" name="pacity" value="{{old('pacity')}}" required>
                                            <span id="pacity_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>State</legend>
                                            <input type="text" class="form-control" id="pastate" name="pastate" value="{{old('pastate')}}" required>
                                            <span id="pastate_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-holder form-holder-2">
                                        <fieldset>
                                            <legend>PIN CODE</legend>
                                            <input type="text" class="form-control" id="papincode" name="papincode" value="{{old('papincode')}}" maxlength="6" required>
                                            <span id="papincode_msg" class="text-danger font-weight-bold" ></span>
                                        </fieldset>
                                    </div>
                                </div>
                                </div>
                        </section>
                        <!-- SECTION 7 -->
                        <h2>
                            <p class="step-icon"><span>07</span></p>
                            <span class="step-text">Organisation</span>
                        </h2>
                        <section>
                            <div class="inner">
                                <div class="wizard-header">
                                    <h3 class="heading">Organisation Details</h3>
                                </div>

                                <br>
                                <div class="form-row">
                                    <label class="special-label">Organisation In Which Your Father/Mother Belong</label>
                                    <select class="form-control" name="organisation" value="{{old('organisation')}}" id="organisation" required>
                                        <option disabled selected>Select</option>
                                        <option value="bsf">BSF</option>
                                        <option value="capfs">CAPFs</option>
                                    </select>
                                    <span id="organisation_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label class="special-label">If BSF</label>
                                    <input type="text" name="unit" id="unit" class="form-control" placeholder="Unit Name & Location">
                                </div>
                                <br>
                                <div class="form-row">
                                    <label class="special-label">Rank(Only BSF Wards)</label>
                                    <select class="form-control" name="bsf_rank" value="{{old('bsf_rank')}}" id="bsf_rank" required>
                                        <option disabled selected>Select</option>
                                        <option value="officers">Officer's</option>
                                        <option value="sos">SOs</option>
                                        <option value="ors">ORs</option>
                                        <option value="widow">Widow</option>
                                    </select>
                                    <span id="bsf_rank_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                <br>
                                <div class="form-row">
                                    <label class="special-label">If CAPFs</label>
                                    <select class="form-control" name="capf_option" value="{{old('organisation')}}" id="organisation" required>
                                        <option disabled selected>Select</option>
                                        <option value="crpf">CRPF</option>
                                        <option value="cisf">CISF</option>
                                        <option value="itbp">ITBP</option>
                                        <option value="ssb">SSB</option>
                                        <option value="mp_police">M.P POLICE</option>
                                    </select>
                                    <span id="capf_option_msg" class="text-danger font-weight-bold" ></span>
                                </div>
                                <br>
                                <br>    
                                <div class="form-row">
                                    <button type="submit" class="btn btn-primary btn-lg" name="preview">Preview</button>
                                    <center>
                                        <!-- <input type="submit" name="submit" class="submit_button" value="submit"> -->
                                    </center>
                                    <!-- <button type="button" class="btn btn-primary btn-lg" value="submit">submit</button> -->
                                </div>
                                </div>
                        </section>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/jquery.steps.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/index.js"></script>
</body>
</html>