
function check(){
    var fname = document.form.name.value;
    var lname = document.form.lname.value;
    var email = document.form.email.value;
    var age = document.form.age.value;
    var user = document.form.user.value;
    var pass = document.form.pass.value;
    var status = document.form.status.value;
    var sex = document.form.sex.value;
    var letters=/^[A-Za-zก-ฮ]+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var numberformat = /^[0-9]+$/;
    var userformat = /^[A-Za-zก-ฮ0-1]+$/;
    if (fname=="" || lname=="" ||email=="" || age ==""|| user=="" || pass==""|| status==""|| sex==""){
        alert("โปรดใส่ชื่อ\n\โปรดใส่นามสกุล\n\โปรดใส่ email\n\โปรดใส่อายุ \n\โปรดใส่เพศ \n\โปรดใส่สถานะ \n\โปรดใส่ชื่อUser \n\โปรดใส่ชื่อPass\n\nโปรดใส่ข้อมูลข้างต้น");
        return false;
    }
    else if(fname==""){
        alert("โปรดใส่ชื่อ");
        return false;
    }
    else { 
        if(fname.match(letters)||lname.match(letters)){
            
        }else{
            alert("โปรดใช้ชื่อใหม่เป็นตัวอักษรไม่มีตัวเลข"); 
            return false;
            
        }
        if (email.match(mailformat)){
            
        }else
        {
            alert("รูปแบบอีเมลล์ผิด ตัวอย่าง.xxxxx@xx.co.th");
            return false;
            
        }
        if (age.match(numberformat)){
            
        }
        else {
            alert("age is not format");
            return false;
        }
        if (pass.match(userformat)&&user.match(userformat)){
        if(user.length<8&& pass.length<8){
            alert("user >8 และ pass >8");
            return false;
        }
         else if(user.length<8){
            alert("user >8 ");
            return false;
        }
        else if(pass.length<8){
            alert("pass >8");
            return false;
        }
         }
    }
    return true;
}
    