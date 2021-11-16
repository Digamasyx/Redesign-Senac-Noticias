function NLAction()
{
	email = document.getElementById('email').value;
	name = document.getElementById('name').value;

	if (email === "admin@senac.com") document.location = `/src/pages/newsAdmin.php?email=${email}&name=${name}`;
	else document.location = "index.php";
};