$(function()
{
	$("#form-horizontal").validate(
		{

		rules: {
			commentaire1:  {
				minlength: 2
			},
			commentaire2: {
				minlength: 2
			},
			commentaire3: {
				minlength: 2
			},
			commentaire4: {
				minlength: 2
			},
			commentaire5: {
				minlength: 2
			},
		},

		messages: {
			commentaire1: {
				minlength: " Le commentaire doit contenir au moins 2 caractères",
			},
			commentaire2: {
				minlength: " Le commentaire doit contenir au moins 2 caractères",
			},
			commentaire3: {
				minlength: " Le commentaire doit contenir au moins 2 caractères",
			},
			commentaire4: {
				minlength: " Le commentaire doit contenir au moins 2 caractères",
			},
			commentaire5: {
				minlength: " Le commentaire doit contenir au moins 2 caractères",
			},
		}
	});
});