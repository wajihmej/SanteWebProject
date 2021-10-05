$(function()
{
	$("#form-horizontal").validate(
		{

		rules: {
			nom:  {
				required: true,
				minlength: 2
			},
			prenom: {
				required: true,
				minlength: 2
			},
			reponse1: {
				required: true,
				minlength: 2
			},
			reponse2: {
				required: true,
				minlength: 2
			},
			reponse3: {
				required: true,
				minlength: 2
			},
			reponse4: {
				required: true,
				minlength: 2
			},
			reponse5: {
				required: true,
				minlength: 2
			},
		},

		messages: {
			nom: {
				required: " Nom obligatoire.",
				minlength: " Le nom doit contenir au moins 2 caractères",
			},
			prenom: {
				required: " Prenom obligatoire.",
				minlength: " Le prenom doit contenir au moins 2 caractères",
			},
			reponse1: {
				required: " Reponse obligatoire.",
				minlength: " Le champ doit contenir au moins 2 caractères",
			},
			reponse2: {
				required: " Reponse obligatoire.",
				minlength: " Le champ doit contenir au moins 2 caractères",
			},
			reponse3: {
				required: " Reponse obligatoire.",
				minlength: " Le champ doit contenir au moins 2 caractères",
			},
			reponse4: {
				required: " Reponse obligatoire.",
				minlength: " Le champ doit contenir au moins 2 caractères",
			},
			reponse5: {
				required: " Reponse obligatoire.",
				minlength: " Le champ doit contenir au moins 2 caractères",
			},
		}
	});
});