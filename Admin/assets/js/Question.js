$(function()
{
	$("#form-horizontal").validate(
		{

		rules: {
			question1:  {
				required: true,
				minlength: 2
			},
			question2: {
				required: true,
				minlength: 2
			},
			question3: {
				required: true,
				minlength: 2
			},
			question4: {
				required: true,
				minlength: 2
			},
			question5: {
				required: true,
				minlength: 2
			},
		},

		messages: {
			question1: {
				required: "Champ obligatoire",
				minlength: " La question doit contenir au moins 2 caractères",
			},
			question2: {
				required: "Champ obligatoire",
				minlength: " La question doit contenir au moins 2 caractères",
			},
			question3: {
				required: "Champ obligatoire",
				minlength: " La question doit contenir au moins 2 caractères",
			},
			question4: {
				required: "Champ obligatoire",
				minlength: " La question doit contenir au moins 2 caractères",
			},
			question5: {
				required: "Champ obligatoire",
				minlength: " La question doit contenir au moins 2 caractères",
			},
		}
	});
});