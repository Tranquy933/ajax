
function Addtocart() { 
    var a = document.forms["my_groin"]["groin"].value;
    if (a == 0) {
        alert("Hãy nhập groin :");
        return false;
}
if( a < 0 ){
    alert('không được nhập số âm')
}
else if(isNaN(a) || a < 1){
        alert('mua hàng không hợp lệ yêu cầu nhập số')
    }
 else{ 
             alert(' số mua hàng hợp lệ bạn đã mua thành công '); 
    } 

   }
