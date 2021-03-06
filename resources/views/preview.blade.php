<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admission Form</title>
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="../css/opensans-font.css">
    <link rel="stylesheet" type="text/css" href="../fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <div class="container"> <!-- Logo Container -->
        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
            <center><img src="../images/logo.png" class="img-fluid"></center>
        </div> <!-- RJIT Logo -->
    </div>



<br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <h1>Preview Your Admission Form</h1>
                </center>
            </div>
        </div>
        <hr>
    <form>
        
        <div class="row">
            <div class="col-lg-6">

                    <center>
                        <h3>
                            Personal Details
                        </h3>
                    </center>

                    <div class="form-group">
                        <label for="name" class=" form-control-label">First Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$request->first_name}}">
                    </div>

                    <div class="form-group">
                        <label for="short_intro" class=" form-control-label">Last Name</label>
                        <input type="text" id="short_intro"  class="form-control" value="{{$request->last_name}}">
                    </div>

                    <div class="form-group">
                        <label for="address" class=" form-control-label">Your Email</label>
                        <input type="text" id="address" name="address" class="form-control" value="{{$request->your_email}}">
                    </div>

                    <div class="form-group">
                        <label for="landmark" class=" form-control-label">Gender</label>
                        <input type="text" id="landmark" name="landmark" class="form-control" value="{{$request->gender}}">
                    </div>


                    <div class="form-group">
                        <label for="intro" class=" form-control-label">Phone Number</label>
                        <input type="text" id="intro" name="intro"  class="form-control" value="{{$request->phone}}">
                    </div>

                    <div class="form-group">
                        <label for="category" class=" form-control-label">Birth Date</label>
                        <input type="text" id="category" name="category" class="form-control" value="{{$request->date.'-'.$request->month.'-'.$request->year}}">
                    </div>

                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Aadhaar Number</label>
                        <input type="text" id="phone1" name="phone1"  class="form-control" value="{{$request->aadhar}}">
                    </div>

                    <div class="form-group">
                        <label for="boarding" class=" form-control-label">Identification Mark</label>
                        <input type="text" id="boarding" name="boarding" class="form-control" value="{{$request->Identification}}">
                    </div>

                    <div class="form-group">
                        <label for="board" class=" form-control-label">Nationality</label>
                        <input type="text" class="form-control" name="" value="{{$request->Nationality}}">
                    </div>

                    <div class="form-group">
                        <label for="image" class=" form-control-label">Category</label>
                        <input type="text" id="image" name="image" class="form-control" value="{{$request->Category}}">
                    </div>

                    <div class="form-group">
                        <label for="india_rank" class=" form-control-label">Religion</label>
                        <input type="text" id="india_rank" name="india_rank"  class="form-control" value="{{$request->Religion}}">
                    </div>

                    <div class="form-group">
                        <label for="state_rank" class=" form-control-label">Physical Handicapped:</label>
                        <input type="text" id="state_rank" name="state_rank"  class="form-control" value="{{$request->Handicapped}}">
                    </div>

                    <div class="form-group">
                        <label for="image" class=" form-control-label">Resident Of J&K:</label>
                        <input type="text" id="image" name="image" class="form-control" value="{{$request->jkresident}}">
                    </div>
                  
                    <div class="form-group">
                        <label for="medium" class=" form-control-label">12th Exam Roll Number</label>
                        <input type="text" class="form-control" name="" value="{{$request->tw_rollno}}">
                    </div>

                    <div class="form-group">
                        <label for="comp_lab" class=" form-control-label">JEE MAIN Roll No.</label>
                        <input type="text" class="form-control" name="" value="{{$request->jee_main_rollno}}">
                    </div>

                    <center>
                       <h3>Correspondence Address</h3>
                    </center>

                    <div class="form-group">
                        <label>House No.</label>
                        <input type="text" class="form-control" name="" value="{{$request->house_no}}">
                    </div>

                    <div class="form-group">
                        <label>Street Name</label>
                        <input type="text" class="form-control" name="" value="{{$request->street_name}}">
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="" value="{{$request->city}}">
                    </div>

                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" name="" value="{{$request->state}}">
                    </div>

                    <div class="form-group">
                        <label>PinCode</label>
                        <input type="text" class="form-control" name="" value="{{$request->pincode}}">
                    </div>

                    <center>
                        <h3>Organisation Details</h3>
                    </center>

                    <div class="form-group">
                        <label>Organisation In Which Your Father/Mother Belong</label>
                        <input type="text" name="" class="form-control" value="{{$request->organisation}}"  >
                    </div>

                    <div class="form-group">
                        <label>If CAPFs</label>
                        <input type="text" name="" class="form-control" value="{{$request->capf_option}}">
                    </div>

                    <div class="form-group">
                        <label>BSF UNIT Name & Location</label>
                        <input type="text" name="" class="form-control" value="{{$request->unit}}">
                    </div>

                    <div class="form-group">
                        <label>Rank(Only BSF Wards)</label>
                        <input type="text" name="" class="form-control" value="{{$request->bsf_rank}}">
                    </div>
                    

                </div>

            <div class="col-lg-6">

                        <center>
                        <h3>Image Upload</h3><br>
                        <img src="../images/rjitbg.jpeg" width="200" height="200">
                        </center>

                        <br>
                        <br>
                    <center>
                        <h3>Family Details</h3>
                    </center>

                    <div class="form-group">
                        <label for="city" class="form-control-label">Father's Name</label>
                        <input type="text" id="city" name="city"  class="form-control" value="{{$request->Father_name}}">
                    </div>

                    <div class="form-group">
                        <label for="affiliation" class=" form-control-label" style="color: white;">Mother's Name</label>
                        <input type="text" id="affiliation" name="affiliation"  class="form-control" value="{{$request->Mother_name}}">
                    </div>

                    <div class="form-group">
                        <label for="state" class="form-control-label">Father's Email</label><input type="text" id="state" name="state"  class="form-control" value="{{$request->Father_email }}">
                    </div>

                    <div class="form-group">
                        <label for="affiliated" class=" form-control-label">Father's Contact Number</label>
                        <input type="text" id="affiliated" name="affiliated"  class="form-control" value="{{$request->Father_phone}}">
                    </div>

                    <br>
                    <center>
                        <h3>10th Details</h3>
                    </center>

                    <div class="form-group">
                        <label for="email" class=" form-control-label">School Name(10th)</label>
                        <input type="text" id="email" name="website" class="form-control" value="{{$request->ten_school}}">
                    </div>

                    <div class="form-group">
                        <label for="library" class=" form-control-label">Board(10th)</label>
                        <input type="text" id="library" name="library"  class="form-control" value="{{$request->ten_board}}">
                    </div>

                    <div class="form-group">
                        <label for="website" class=" form-control-label">Subjects(10th)</label>
                        <input type="text" id="website" name="website" class="form-control" value="{{$request->ten_subjects}}">
                    </div>

                    <div class="form-group">
                        <label for="phy_lab" class=" form-control-label">Year of Passing(10th)</label>
                        <input type="text" name="" class="form-control" value="{{$request->ten_passing}}">
                    </div>

                    <div class="form-group">
                        <label for="medium" class=" form-control-label">Percentage(10th)</label>
                        <input type="text" class="form-control" name="" value="{{$request->ten_percentage}}">
                    </div>

                    <br>
                    <center>
                        <h3>12th Details</h3>
                    </center>
                    

                    <div class="form-group">
                        <label for="board" class=" form-control-label">School Name(12th/Diploma)</label>
                        <input type="text" class="form-control" name="" value="{{$request->tw_school}}">
                    </div>

                    <div class="form-group">
                        <label for="chem_lab" class=" form-control-label">Board(12th/Diploma)</label>
                        <input type="text" name="" class="form-control" value="{{$request->tw_board}}">
                    </div>

                    <div class="form-group">
                        <label for="image" class=" form-control-label">Subjects(12th/Diploma)</label>
                        <input type="text" id="image" name="image" class="form-control" value="{{$request->tw_subjects}}">
                    </div>

                    <div class="form-group">
                        <label for="bio_lab" class=" form-control-label">Year Of Passing(12th/Diploma)</label>
                        <input type="text" name="" class="form-control" value="{{$request->tw_passing}}">
                    </div>

                    <div class="form-group">
                        <label for="image" class=" form-control-label">Percentage(12th/Diploma)</label>
                        <input type="text" id="image" name="image" class="form-control" value="{{$request->tw_percentage}}">
                    </div>

                    <br>
                    <center>
                        <h3>Permanent Address</h3>
                    </center>

                    <div class="form-group">
                        <label>House No.</label>
                                <input type="text" class="form-control" name="" value="{{$request->pahouse_no}}">
                    </div>

                    <div class="form-group">
                        <label>Street Name</label>
                        <input type="text" class="form-control" name="" value="{{$request->pastreet_name}}">
                    </div>

                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" name="" value="{{$request->pacity}}">
                    </div>

                    <div class="form-group">
                        <label>State</label>
                        <input type="text" class="form-control" name="" value="{{$request->pastate}}">
                    </div>

                    <div class="form-group">
                        <label>PinCode</label>
                        <input type="text" class="form-control" name="" value="{{$request->papincode}}">
                    </div>


                </div>
        </div>

        <button type="button" class="btn btn-success form-control">Submit</button>
        <br>
    </form>
    <br>
</div>

</body>
</html>