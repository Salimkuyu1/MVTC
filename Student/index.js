//this is the input Student name.
let StudentName =  $("#StudentName").val();
const AdmNo  = $("#AdmNo")
.val();
const Gender = $("#Gender").val();
const DateOfBirth = $("#DateOfBirth").val();
const PhoneNumber = $("#PhoneNumber").val();

//this function is used to add students, when the user click ; we check to see if the student name is < 3
//   ,;b

const buttonClick = $("#ADDbtn").click((e) => {
    e.preventDefault();
m
    $.ajax({
        url:"./index.php",
        type:"post",
        data:{
              StudentName:StudentName,
              AdmNo:AdmNo,
              Gender:Gender,
              DateOfBirth:DateOfBirth,
              PhoneNumber:PhoneNumber,
            }
        });jm        
    });
    
    