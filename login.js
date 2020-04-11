function checkl(){
    var email = document.form1.email.value;
    var tel = document.form1.tel.value;
    
    var letters=/^[A-Za-zก-ฮ]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var numberformat = /^[0-9]+$/;
    var userformat = /^[A-Za-zก-ฮ0-1]+$/;
    
    if (email==""){
        alert("โปรดใส่อีเมล");
        return false;
    }
    else if(tel==""){
        alert("โปรดใส่เบอร์โทร");
        return false;
    }
    else{
        if(tel.match(numberformat)){
            
        }
        else{
            alert("เบอร์โทร ใส่ได้เฉพาะตัวเลข 0-9");
            return false;
        }
    }
    
}

