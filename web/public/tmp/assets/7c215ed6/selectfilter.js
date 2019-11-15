/* Function to filter a select by another select
   In the same page
   var qID : the numer of question to filter
   var filterqID : the number of question filtering
*/
function selectFilterByCode(qID,filterqID){
  $(document).ready(function(){
    var idSelectFilter = $("#question"+qID).find("select").attr('id');
    $("#"+idSelectFilter).hide();
    var idSelectFiltering = $("#question"+filterqID).find("select").attr('id');
    if(typeof idSelectFilter === 'undefined' || typeof idSelectFiltering === 'undefined' )
    {
      return false;
    }
    else
    {
      var idNewSelectFilter = 'select'+qID
      var NewSelectElement = "<select id='"+idNewSelectFilter+"'><option value=''>"+$("#"+idSelectFilter+" option[value='']:first").text()+"</option></select>";
      $("#"+idSelectFilter).after(NewSelectElement);
      $("#"+idNewSelectFilter).width($("#"+idSelectFilter).width());
      $("#"+idSelectFiltering).change(function(){
        $('#'+idSelectFilter).val('');
        $('#'+idNewSelectFilter).val('');
        var valuefilter=$(this).val();
        $('#'+idNewSelectFilter+' option').not(':first').remove();
        $('#'+idSelectFilter+' option').each(function(){
          if($(this).attr('value').indexOf(valuefilter)==0){
            $(this).clone().appendTo('#'+idNewSelectFilter);
          }
        });
      });

      $("#"+idNewSelectFilter).change(function(){
        $('#'+idSelectFilter).val($(this).val());
      });

      if($("#"+idSelectFiltering).val()!=''){
        var valuefilter=$("#"+idSelectFiltering).val();
        $('#'+idSelectFilter+' option').each(function(){
          if($(this).attr('value').indexOf(valuefilter)==0){
            $(this).clone().appendTo('#'+idNewSelectFilter);
          }
        });
        if($("#"+idSelectFilter).val()!=''){
           $('#'+idNewSelectFilter).val($("#"+idSelectFilter).val());
        }
      }
    }
  });
}
