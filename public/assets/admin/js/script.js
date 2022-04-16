$(function(){  
  
  $(document).on('click', '.colorp', function() {
    var inputType = $(this).parent().parent().find("input").last();
    
    if (inputType.attr("type") == "text") {
      inputType.attr("type","color");
    }else {
      inputType.attr("type","text");
    }
  });

});

function modalshow(ths) {
  var getFieldId = $(ths).attr("field-id");
  $('#img-info-modal-'+getFieldId).modal('show');
}
