var idDropdown ="";

function selectFilterByCode(qID, gID, sID, filterqID){
  console.log("Survey ID "+sID);
  console.log("Group ID "+gID);
  console.log("Question ID "+qID);

  idDropdown = "#answer"+sID+"X"+gID+"X"+qID;
  
}

$(document).ready(function(){
    console.log(idDropdown);

    $("#answer22769X18X333").children('option:gt(0)').hide();
    $("#answer22769X18X332").change(function() {
        $("#answer22769X18X333").children('option').hide();
        $("#answer22769X18X333").children("option[value^=" + $(this).val() + "]").show()
    }) 
});