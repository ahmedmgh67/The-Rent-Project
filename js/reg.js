var Img = document.querySelector('.Img');
var pass = document.getElementById('pass');
var rePass = document.getElementById('re_pass');
var imgPass1 = document.getElementById('imgPass1');
var imgPass2 = document.getElementById('imgPass2');
var FullName = document.getElementById('FullName');
var FormSubmit = document.getElementById('FormSubmit');




function ValidOrNot(){
        if(pass.value==rePass.value){
        imgPass2.style.display="inline";
        imgPass2.src="img/valid.png";
        imgPass1.style.display="inline";
        imgPass1.src="img/valid.png";
    }
    else{
        imgPass2.src="img/notvalid.png";
        imgPass1.src="img/notvalid.png";
    }
}
FullName.onfocus=function(){
    this.style.border="1px solid #F00"
}
FullName.onblur=function(){
    this.style.border="none";
     this.style.borderBottom="1px solid #000";
    if(this.value.length<3)
        {
            Img.src="img/notvalid.png";
            Img.style.display="inline";
            this.value.select;
        }
    else
        {
            Img.style.display="inline";
            Img.src="img/valid.png"; 
        }
}


function submitForm(e){
    e.preventDefault();
    console.log(Img);
    if(Img.src==imgPass2.src && imgPass2.src==imgPass1.src)
        {
            e.target.submit() ;
        }
    
    
}

