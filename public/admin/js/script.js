$(document).ready(function() {

  $('.summernote').summernote({
    placeholder: 'Please Write Here !',
    tabsize: 2,
    height: 100,
  toolbar: [
    ['style', ['style']],
    ['font', ['bold', 'italic', 'underline', 'clear']],
    // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
    //['fontname', ['fontname']],
   // ['fontsize', ['fontsize']],
    // ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    // ['height', ['height']],
    // ['table', ['table']],
    // ['insert', ['link', 'picture', 'hr']],
    //['view', ['fullscreen', 'codeview']],
    // ['help', ['help']]
  ],
  });


  $(".touchspin").TouchSpin({
     
      step: 1,
     
      boostat: 5,
      maxboostedstep: 10
      
  });

});

