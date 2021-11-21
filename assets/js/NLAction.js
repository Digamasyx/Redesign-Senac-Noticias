function NLAction()
{
	const email = document.getElementById('email').value;
	const name = document.getElementById('name').value;

	if (email === 'admin@senac.com') 
	{
		$.post('/src/php/functions/adminLogin.php', { password: name }, () => document.location = `/src/pages/newsAdmin.php`);
	}
	else document.location = 'index.php';
};