
function check(){
    var fname = document.form.name.value;
    var lname = document.form.lastname.value;
    var email = document.form.email.value;
    var tel = document.form.tel.value;
    
    
    
    
    var letters=/^[A-Za-zก-ฮ]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var numberformat = /^[0-9]+$/;
    var userformat = /^[A-Za-zก-ฮ0-1]+$/;
//    if (fname=="" || lname=="" ||email=="" || tel ==""){
//        alert("โปรดใส่ชื่อ\n\โปรดใส่นามสกุล\n\โปรดใส่ email\n\โปรดใส่อายุ \n\โปรดใส่เพศ \n\โปรดใส่สถานะ \n\โปรดใส่ชื่อUser \n\โปรดใส่ชื่อPass\n\nโปรดใส่ข้อมูลข้างต้น");
//        return false;
//    }
    if (email==""){
        alert("โปรดใส่อีเมล");
        return false;
    }
    else if(fname==""){
        alert("โปรดใส่ชื่อ");
        return false;
    }
    
    else if (lname==""){
        alert("โปรดใส่นามสกุล");
        return false;
    }
    else if (tel==""){
        alert("โปรดใส่เบอร์โทร");
        return false;
    }
   
    else { 
        if(fname.match(letters)){
            
        }
        else{
            alert("ชื่อ ใส่ได้เฉพาะตัวอักษร A-Z,a-z,ก-ฮ");
            return false;
        }
        if(lname.match(letters)){
            
        }
        else{
            alert("นามสกุล ใส่ได้เฉพาะตัวอักษร A-Z,a-z,ก-ฮ");
            return false;
        }
        if(tel.match(numberformat)){
            
        }
        else{
            alert("เบอร์โทร ใส่ได้เฉพาะตัวเลข 0-9");
            return false;
        }
    }
    return true;
}
    