function activateRegister()
{
    const formDiv = document.getElementById('noticias-container');
    const formTitle = document.getElementById('form-title');
    const form = document.getElementById('form');
    formTitle.innerText = 'Inserir notícia';

    form.setAttribute('action', '/src/php/handlers/handleAddNews.php');
    form.reset();
    document.getElementById('mainImg').setAttribute('required', 'required');
    formDiv.classList.remove('hide');
}

function activateEdit(id)
{
    const formDiv = document.getElementById('noticias-container');
    const formTitle = document.getElementById('form-title');
    const form = document.getElementById('form');
    
    $.post('/src/php/functions/getNewsData.php', { id: id }, function (output)
    {
        document.getElementById('title').value = output['title'];
        document.getElementById('shortDesc').innerHTML = output['shortDescription'];
        document.getElementById('content').innerHTML = output['content'];
        form.setAttribute('action', `/src/php/handlers/handleEditNews.php?id=${id}&action=Edit&originalPath=${output['mainImage']}`);
    }, 'json');

    formTitle.innerText = 'Editar notícia';

    document.getElementById('mainImg').removeAttribute('required');
    formDiv.classList.remove('hide');
}

function deleteAction(id)
{
    $.post('/src/php/functions/getNewsData.php', { id: id }, function (output)
    {
        document.location = `/src/php/handlers/handleEditNews.php?id=${id}&action=Remove&originalPath=${output['mainImage']}`;
    });
}