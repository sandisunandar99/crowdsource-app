var idDropdown ="";

function selectFilterByCode(qID, gID, sID, filterqID){
  console.log("Survey Kependudukan Daerah");
  
  console.log("Survey ID "+sID);
  console.log("Group ID "+gID);
  console.log("Question ID "+qID);

  idDropdown = "#answer"+sID+"X"+gID+"X"+qID;
  
}

$(document).ready(function(){
    console.log(idDropdown);
    for (let i = 1; i <= 10; i++) {
        // console.log(i);
        $("#answer136271X1X335A1_AA1 option[value='"+i+"']").remove();
        $("#answer136271X1X335A1_AA2 option[value='"+i+"']").remove();
        $("#answer136271X1X335A1_AA3 option[value='"+i+"']").remove();
    }
    
    var Provinsi = {
        A:'JAWA BARAT', 
        B:'JAWA TENGAH', 
        C:'JAWA TIMUR'
    }; 
    
    var Kota = {
        A1:'BANDUNG',
        A2:'TASIK',
        A3:'SUMEDANG',
        A4:'MAJALENGKA',
        A5:'BEKASI',
        B1:'CIREBON',
        B2:'SEMARANG',
        B3:'JOGJAKARTA',
        B4:'BEREBES',
        B5:'CILACAP',
        C1:'SURABAYA',
        C2:'MALANG',
        C3:'KUDUS',
        C4:'JEPARA',
        C5:'BANYUWANGI',
    }
    

    $.each(Provinsi,function(i, val){
        console.log(val +" "+ i);
        //  $('#answer136271X1X335A1_AA1').append(`<option value="${optionValueProvinsi[i]}">${val}</option>`);
    });
 

    


});