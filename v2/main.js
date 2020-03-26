function is_checked(){
    var name= document.getElementsByClassName
    var check=document.getElementById("checked").checked;
    if(check==false){
        alert("please agree to the terms and conditions");
       
        return false;


    }
    else{
        return true;
    }

}