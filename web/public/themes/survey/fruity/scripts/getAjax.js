function selectFilterByCode(qId, gId, sId) {
    console.log("SURVEYID "+ sId); 
    console.log("QUESTIONID "+ qId); 
    console.log("GROUPID "+ gId); 
    console.log("xxxx"); 
}

function  getData(data) {
    console.log("skadjskansdkadakkkanadkjadskja");
    

    $.getJSON("{TEMPLATEURL}/scripts/Provinsi.json", function( data ) {
    });

}


$(document).ready(function(){
    selectFilterByCode();

       $("#answer418893X4X21").change(function(){
            getData();
            alert($("#answer418893X4X21").val());
        });
});