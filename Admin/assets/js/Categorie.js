$(function()
{
	$("#form-horizontal").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
		},

		messages: {
			nom: {
				required: "Champ obligatoire",
				minlength: " La nom doit contenir au moins 2 caractères",
			},
		}
	});
});