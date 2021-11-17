function NLAction()
{
	const email = document.getElementById('email').value;
	const name = document.getElementById('name').value;

	if (email === 'admin@senac.com' && name === 'SENHASECRETA') 
	{
		$.post('/src/php/functions/adminLogin.php', () => document.location = `/src/pages/newsAdmin.php`);
	}
	else document.location = 'index.php';
};