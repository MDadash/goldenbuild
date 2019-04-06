(function(){
  jQuery(document).ready(function(){
	    // jQuery(".nav-link").click(function (){
	    //     jQuery('html, body').animate({ scrollTop: $("main").offset().top},1000);
	    // });

          jQuery('.wpcf7-tel').mask('+7 (000) 000-00-00', {placeholder: "+7 (___) ___-__-__"});



            var inputTypeFile = jQuery('.input-counts'),
                labelForInput = jQuery('.input-counts-label');
            function ShowLicenceFileName(inputElement, labelElement) {
                var inputOrigLength,
                    inputOrigfilename;
                inputElement.change(function () {

                    inputOrigLength = inputElement[0].files.length;
                    if (inputOrigLength !== 0) {
                        inputOrigfilename = inputElement[0].files[0].name;
                        labelElement.html(inputOrigfilename);
                    }
                    if (inputOrigLength === 0) {
                        labelElement.html('Прикрепить файл');
                    }
                });
            }

            ShowLicenceFileName(inputTypeFile, labelForInput);

  });
}());
