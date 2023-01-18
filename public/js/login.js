$(document).ready(function(){
  $("button").click(function(){
    var myemail=$("#exampleInputEmail1").val();
    var mypass=$("#exampleInputPassword1").val();

    if(myemail == "y@gmail.com" && mypass == "123"){
      window.location.href="dashboard";
    }
    else if(myemail=="" && mypass==""){
      alert("Enter Email & Password");
    }
    else if(myemail=="y@gmail.com" && mypass==""){
      alert("Enter Password");
    }
    else if(myemail=="" && mypass=="123"){
      alert("Enter Email");
    }
    else{
      alert("Invalid");
    }
  });
});
