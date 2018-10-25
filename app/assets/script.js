$(function(){ 

	$('.hidden').hide();

    $('.academicLevel').on('change', 'input[name=academicLevel]', function() {

        if( $(this).prop('id') == 'otherDegree' ){
            $('.otherDegreeInput').slideDown();
            $('#otherDegreeInput').prop('required', true);
        }else{
            $('.otherDegreeInput').slideUp();
            $('#otherDegreeInput').removeAttr('required');
        }

    });

	$('.researchField').on('change', 'input[name=researchField]', function() {
		
		if($(this).prop('id') == 'otherResearchField'){
			$('.otherResearchFieldInput').slideDown();
			$('#otherResearchFieldInput').prop('required', true);
		}else{
			$('.otherResearchFieldInput').slideUp();
			$('#otherResearchFieldInput').removeAttr('required');
		}

	});

	$('.nativeLanguage').on('change', 'input[name=nativeLanguage]', function() {
		
		console.log($(this).prop('id'));

		switch($(this).prop('id')){
			case 'otherLanguage':
				$('.otherNativeLanguage').slideDown();
				$('#otherNativeLanguage').prop('required', true);
				$('.englishApptitudeFields').slideDown();
				break;
			case 'english':
				$('.otherNativeLanguage').slideUp();
				$('#otherNativeLanguage').removeAttr('required');
				$('.englishApptitudeFields').slideUp();
				break;
			default:
				$('.otherNativeLanguage').slideUp();
				$('#otherNativeLanguage').removeAttr('required');
				$('.englishApptitudeFields').slideDown();
				break;

		}

	});

    $('.complementaryInformation').on('change', 'input[name=participationReason]', function() {

        if($(this).prop('id') == 'otherComplementaryInformation'){
            $('.otherComplementaryInformation').slideToggle();
            if($('#otherComplementaryInformation:checkbox:checked').length > 0){
                $('#otherComplementaryInformation').prop('required', true);
			}else{
                $('#otherComplementaryInformation').removeAttr('required');
			}

        }
    });


});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
	'use strict';
	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('userRegistration');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
			form.addEventListener('submit', function(event) {
				if (form.checkValidity() === false) {
					event.preventDefault();
					event.stopPropagation();
				}
				form.classList.add('was-validated');
			}, false);
		});
	}, false);
})();