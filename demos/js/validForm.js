/* ############################################################################ */
	(function ($) {
	    /* ############################################################################ */
	    /******************************************************************************
	     * + Public jQuery API
	     */
	    $.fn.extend(
		    {
			validForms: function (optionsPlugin) {
			    return this.each(function ()
			    {
				var defauts =
					{
					    'interval': 5000, //Intervalle entre chaque image, en millisecondes
					    'width': '300px', //Largeur de la galerie
					    'height': '150px', //Hauteur de la galerie
					    'scaleWidth': true, //Doit-on adapter la largeur de l'image ?
					    'scaleHeight': true, //Doit-on adapter la hauteur de l'image ?
					    'makeLinks': false, //Doit-on créer des liens ?
					    'callback': null		//Fonction appelée à chaque nouvelle image
					};

				//On fusionne nos deux objets ! =D
				var parametres = $.extend(defauts, optionsPlugin);
				console.log(parametres);
				$(this).find("input[type='submit']").click(function () {

				    var isFormValidate = true;
				    /****************************** TEXT FORM *****************************************************/
				    $(this).parent().find("input:text").each(function ()
				    {
					var params = {};
					try {
					    eval("params = " + $(this).attr("rel-validate"));
					} catch (e) {
					}
					var options = $.extend({
					    text: '',
					    regExp: '.*',
					    errorMsg: ''
					}, params);



					if (!new RegExp(options.regExp, 'i').test($(this).val()) && options.text == '*')
					{
					    $(this).find("+ span.error").text(options.errorMsg).fadeIn("slow");
					    if (isFormValidate)
					    {
						$(this).focus();
					    }
					    isFormValidate = false;
					}
					else
					{
					    $(this).find("+ span.error").fadeOut("slow");
					}
				    });
				    /**************** SELECT FORM  ***************************************************************/
				    $(this).parent().find("select").each(function () {
					var params = {};
					try {
					    eval("params = " + $(this).attr("rel-validate"));
					} catch (e) {
					}
					var options = $.extend({
					    select: '',
					    errorMsg: '',
					    valueError: ' '
					}, params);
					if ($(this).val() == params.valueError && params.select == "*")
					{
					    $(this).find("+ span.error").text(options.errorMsg).fadeIn("slow");

					    if (isFormValidate)
					    {
						$(this).focus();
					    }
					    isFormValidate = false;
					}
					else
					{
					    $(this).find("+ span.error").fadeOut("slow");
					}

				    });
				    /******************* CHECKBOX FORM *****************************************************************/
				    $(this).parent().find("input[type='checkbox']").each(function () {
					var params = {};
					try {
					    eval("params = " + $(this).attr("rel-validate"));
					} catch (e) {
					}
					var options = $.extend({
					    checkbox: '',
					    errorMsg: ''
					}, params);
					if (options.checkbox == '*' && !$(this).is(':checked'))
					{
					    $(this).find("+ span.error").text(options.errorMsg).fadeIn("slow");
					    isFormValidate = false
					}
					else
					{
					    $(this).find("+ span.error").fadeOut("slow");
					}
				    });
				    /****************** TEXTAREA FORM *******************************************************************/
				    $(this).parent().find("textarea").each(function () {
					var params = {};
					try {
					    eval("params = " + $(this).attr("rel-validate"));
					} catch (e) {
					}
					var options = $.extend({
					    textArea: '',
					    regExp: '.*',
					    errorMsg: ''
					}, params);



					if (!new RegExp(options.regExp, 'i').test($(this).val()) && options.textArea == '*')
					{
					    $(this).find("+ span.error").text(options.errorMsg).fadeIn("slow");
					    if (isFormValidate)
					    {
						$(this).focus();
					    }
					    isFormValidate = false;
					}
					else
					{
					    $(this).find("+ span.error").fadeOut("slow");
					}
				    });

				    /*************** RADIO FORM *********************************************************************/
				    $(this).parent().find("input[type='radio']").each(function () {
					var params = {};
					try {
					    eval("params = " + $(this).attr("rel-validate"));
					} catch (e) {
					}
					var options = $.extend({
					    radio: '',
					    name: '',
					    errorMsg: ''
					}, params);
					if (options.radio == '*' && options.name != '')
					{
					    var isChecked = false;
					    $(this).parent().find("input[name='" + options.name + "']").each(function () {
						if (!isChecked && $(this).is(":checked"))
						{
						    isChecked = true;
						}
					    });
					    if (!isChecked)
					    {
						$(this).find("+ span.error").text(options.errorMsg).fadeIn("slow");
						if (isFormValidate)
						{
						    $(this).focus();
						}
						isFormValidate = false;
					    }
					    else
					    {
						$(this).find("+ span.error").fadeOut("slow");
					    }
					}

				    });
				    /*********************** FILE FORM ******************************************************************************/
				    $(this).parent().find("input[type='file']").each(function () {
					var isFileCorrect = true;
					/*var tmp = $(this)[0];
					 console.log($(this)[0].files[0].size);*/
					var params = {};
					try {
					    eval("params = " + $(this).attr("rel-validate"));
					} catch (e) {
					}
					var options = $.extend({
					    file: '',
					    size: '',
					    extensions: '',
					    errorMsg: ''
					}, params);
					if (options.file == "*")
					{
					    if (options.extensions != '' && isFileCorrect)
					    {
						(jQuery.inArray(getExtension($(this).val()), options.extensions.split("|")) > -1) ? isFileCorrect = true
							: isFileCorrect = false;
					    }
					    if (options.size != '' && isFileCorrect)
					    {
						if ($(this)[0].files[0] != null)
						    (parseInt($(this)[0].files[0].size) > parseInt(options.size)) ? isFileCorrect = false
							    : isFileCorrect = true;
					    }
					}
					if (!isFileCorrect)
					{
					    isFormValidate = false;
					    $(this).find("+ span.error").text(options.errorMsg).fadeIn("slow");
					}
					else
					{
					    $(this).find("+ span.error").fadeOut("slow");
					}
				    });
				    if (!isFormValidate) {
					return false;
				    }
				});
			    });
			}
		    });






	    function getExtension(filename)
	    {
		var parts = filename.split(".");
		return "." + (parts[(parts.length - 1)]);
	    }
	})(jQuery);
	
	
	
parametres.formSelector.find("input:text, input:password, input:url, input:email, input:tel").each(function ()
{


    var params = {};
    try {
	eval("params = " + $(this).attr("rules-input"));
    } catch (e) {
    }
    var tmpOptions = $.extend({
	/*** global rules for all elements input *****/
	active: false,
	errorSelector: '',
	errorMsg: '',
	addClass: '',
	/**** rules for simple elements ***************/
	regExp: '.*'
    }, params);
    // Combine global parametres with this options ( rules-input = )
    var options = $.extend({}, parametres, tmpOptions);
    debug(options);
    if (options.active) {
	if (!new RegExp(options.regExp, 'i').test($(this).val()))
	{
	    (options.addClass != '') ? $(this).addClass(options.addClass) : '';
	    if (options.errorSelector != '')
	    {
		var errorSelector = $(options.errorSelector);

		(options.errorMsg != '') ? errorSelector.text(options.errorMsg) : '';

		errorSelector[options.animationShow](options.animationOptionShow);
	    }
	    isFormValidate = false;
	}
	else
	{
	    (options.addClass != '') ? $(this).removeClass(options.addClass) : '';
	    if (options.errorSelector != '')
	    {
		var errorSelector = $(options.errorSelector);
		errorSelector[options.animationHide](options.animationOptionHide, function () {
		    (options.errorMsg != '') ? errorSelector.text('') : '';
		});

	    }
	}
    }
});