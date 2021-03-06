$(function(){    
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        stepsOrientation: "vertical",
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back Step',
            next : '<i class="zmdi zmdi-arrow-right"></i>',
            // finish : '<i class="zmdi zmdi-check"></i>',
            current : ''
        },
    })
});


// For Same Address Option 
function add_copy(a){
    if (a.same_address.checked==true) {
        a.pahouse_no.value = a.house_no.value;
        a.pastreet_name.value= a.street_name.value;
        a.palandmark.value = a.landmark.value;
        a.pacity.value=a.city.value;
        a.pastate.value=a.state.value;
        a.papincode.value=a.pincode.value;
    }
    else{
        a.pahouse_no.value = "";
        a.pastreet_name.value= "";
        a.palandmark.value = "";
        a.pacity.value="";
        a.pastate.value= "";
        a.papincode.value="";
    }
}


// Check Result 
function checkresult(val){
  var element=document.getElementById('subjects');
  var element1 =document.getElementsByClassName('pc')

 if(val=='Yes'){
   element.style.display='block';
 }
 else{
   element.style.display='none';
  element1[0].style.display='none';
  element1[1].style.display='none';
  element1[2].style.display='none';
  element1[3].style.display='none';
 }
}


// subjects Marks
function subjectsmarks(val){
  var element=document.getElementsByClassName('pc');
  
 if(val=='pcm'){
   element[0].style.display='block';
  element[1].style.display='block';
  element[2].style.display='none';
  element[3].style.display='block';
  }

 else if(val=='pcb'){ 
  element[0].style.display='block';
  element[1].style.display='block';
   element[2].style.display='block';
   element[3].style.display='none';
 }

}



// other religion 
function checkreligion(val){
  var element=document.getElementById('otherrel');
  
 if(val=='others')
   element.style.display='block';
 else  
   element.style.display='none';
}


// Check Eligibility 
function checkeligibility(val){
  var element=document.getElementsByClassName('jeebased');

  if(val=='jee')
  {
    element[0].style.display='block';
    element[1].style.display='block';
    element[2].style.display='block';
  }
  else{
    element[0].style.display='none';
    element[1].style.display='none';
    element[2].style.display='none';
  }
}


//Check Physically Handicapped

function checkpwd(val){
  var element=document.getElementById('pwd');
  
 if(val=='Yes')
   element.style.display='block';
 else  
   element.style.display='none';
}


//Parents Organisation 
 function checkorg(val){
  var element=document.getElementsByClassName('org');
  
 if(val=='bsf'){
   element[0].style.display='block';
  element[1].style.display='block';
  element[2].style.display='block';
  element[3].style.display='none';
  }

 else if(val=='capf'){ 
  element[0].style.display='none';
  element[1].style.display='none';
   element[2].style.display='none';
   element[3].style.display='block';
 }

}



// forms validation

function validate(){

    var fathername=document.getElementById("Father_name").value;
    var mothername=document.getElementById("Mother_name").value;
    var fatherphone=document.getElementById("Father_phone").value;
    var aadhar=document.getElementById("aadhar").value;
    var tenthschool=document.getElementById("ten_school").value;
    var tenthboard=document.getElementById("ten_board").value;
    var tenthsubjects=document.getElementById("ten_subjects").value;
    var tenthpassing=document.getElementById("ten_passing").value;
    var tenthpercentage=document.getElementById("ten_percentage").value;
    var twschool=document.getElementById("tw_school").value;
    var twboard=document.getElementById("tw_board").value;
    var twsubjects=document.getElementById("tw_subjects").value;
    var twpassing=document.getElementById("tw_passing").value;
    var twpercentage=document.getElementById("tw_percentage").value;
    var twrollno=document.getElementById("tw_rollno").value;
    var jeerollno=document.getElementById("jee_main_rollno").value;
    var nationality=document.getElementById("Nationality").value;
    var religion=document.getElementById("Religion").value;
    var category=document.getElementById("Category").value;
    var handicapped=document.getElementById("Handicapped").value;
    var jkresident=document.getElementById("jkresident").value;
    



    if(fathername==""){
          document.getElementById("father_name_msg").innerHTML="** Please fill Father Name";
          return false;
         }
         else{
            document.getElementById("father_name_msg").innerHTML="";
            }


    if(mothername==""){
          document.getElementById("mother_name_msg").innerHTML="** Please fill Mother Name";
          return false;
         }
         else{
            document.getElementById("mother_name_msg").innerHTML="";
            }


       if(fatherphone==""){
          document.getElementById("father_no_msg").innerHTML="** Please fill Father's Phone Number";
          return false;
         }
         else{
            document.getElementById("father_no_msg").innerHTML="";
            }


       if(isNaN(fatherphone)) {
          document.getElementById("father_no_msg").innerHTML="** alphabat not allowed ";
          return false; 
         }


         if(aadhar==""){
          document.getElementById("aadhar_msg").innerHTML="** Please fill Aadhar Number";
            return false;
         }
          else{
            document.getElementById("aadhar_msg").innerHTML="";
            }

        if(isNaN(aadhar_msg)) {
          document.getElementById("aadhar_msg").innerHTML="** alphabat not allowed ";
          return false; 
         }


         if(tenthschool==""){
          document.getElementById("ten_school_msg").innerHTML="** Please fill 10th School Name";
            return false;
         }
          else{
            document.getElementById("ten_school_msg").innerHTML="";
            }


         if(tenthboard==""){
          document.getElementById("ten_board_msg").innerHTML="** Please fill 10th Board Name";
            return false;
        }
          else{
            document.getElementById("teb_board_msg").innerHTML="";
            }


         if(tenthsubjects==""){
          document.getElementById("ten_subjects_msg").innerHTML="** Please fill 10th Subjects";
                return false;
            }

         if(tenthpassing==""){
          document.getElementById("ten_passing_msg").innerHTML="** Please fill 10th Passing year";
          return false;
         }

         if(tenthpercentage==""){
          document.getElementById("ten_percentage_msg").innerHTML="** Please fill 10th %";
          return false;
         }

         if(twschool==""){
          document.getElementById("tw_school_msg").innerHTML="** Please fill 12th School Name";
          return false;
         }

         if(twboard==""){
          document.getElementById("tw_board_msg").innerHTML="** Please fill 12th Board Name";
          return false;
         }

         if(twsubjects==""){
          document.getElementById("tw_subjects_msg").innerHTML="** Please fill 12th Subjects";
          return false;
         }

         if(twpassing==""){
          document.getElementById("tw_passing_msg").innerHTML="** Please fill 12th Passing year";
          return false;
         }

         if(twpercentage==""){
          document.getElementById("tw_percentage_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(twrollno==""){
          document.getElementById("tw_rollno_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(jeerollno==""){
          document.getElementById("jee_rollno_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(twrollno==""){
          document.getElementById("tw_rollno_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(nationality==""){
          document.getElementById("nationality_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(religion==""){
          document.getElementById("religion_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(category==""){
          document.getElementById("category_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(handicapped==""){
          document.getElementById("handicapped_msg").innerHTML="** Please fill 12th %";
          return false;
         }

         if(jkresident==""){
          document.getElementById("jkresident_msg").innerHTML="** Please fill 12th %";
          return false;
         }

}


        // forms validation Ends


