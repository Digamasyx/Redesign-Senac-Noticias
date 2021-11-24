let isEdit = false;
let added = [];

function activateRegister()
{
    deleteExtra();

    const formDiv = document.getElementById('noticias-container');
    const formTitle = document.getElementById('form-title');
    const form = document.getElementById('form');
    formTitle.innerText = 'Inserir notícia';

    form.setAttribute('action', '/src/php/handlers/handleAddNews.php');
    document.getElementById('title').value = '';
    document.getElementById('shortDesc').innerHTML = '';
    document.getElementsByClassName('ql-editor')[0].innerHTML = '';
    document.getElementById('mainImg').setAttribute('required', 'required');
    
    if (!isEdit) formDiv.classList.toggle('hide');

    isEdit = false;
}

function activateEdit(id)
{
    deleteExtra();

    const formDiv = document.getElementById('noticias-container');
    const formTitle = document.getElementById('form-title');
    const form = document.getElementById('form');
    
    $.post('/src/php/functions/getNewsData.php', { id: id }, function (output)
    {
        document.getElementById('title').value = output['title'];
        document.getElementById('shortDesc').innerHTML = br2nl(output['shortDescription']);
        document.getElementsByClassName('ql-editor')[0].innerHTML = output['content'];
        
        form.setAttribute('action', `/src/php/handlers/handleEditNews.php?id=${id}&action=Edit&originalPath=${output['mainImage']}`);
    }, 'json');

    formTitle.innerText = 'Editar notícia';
    isEdit = true;

    document.getElementById('mainImg').removeAttribute('required');
    formDiv.classList.remove('hide');
    $('html, body').animate({ scrollTop: 0 }, 'fast');
}

function deleteAction(id)
{
    deleteExtra();

    $.post('/src/php/functions/getNewsData.php', { id: id }, function (output)
    {
        const temp = document.createElement('div');
        temp.display = 'none';
        temp.innerHTML = output['content'];
        const allSrc = getAllSrc(temp);

        $.post('/src/php/functions/deleteFiles.php', { paths: allSrc }, () => document.location = `/src/php/handlers/handleEditNews.php?id=${id}&action=Remove&originalPath=${output['mainImage']}`);
    }, 'json');
}

function br2nl(text)
{
    return text.replaceAll('<br />', '');
}

function attualizeContent()
{
    added = [];
    document.getElementById('content').innerText = document.getElementsByClassName('ql-editor')[0].innerHTML;
}

function getAllSrc(input)
{
    const imgs = input.getElementsByTagName('img');
    const allSrc = [];

    for (let i = 0; i < imgs.length; i++)
    {
        if (imgs[i].src.includes('/assets/img/news/content'))
        {
            let index = imgs[i].src.indexOf('/assets/img/news/content');
            
            allSrc.push(imgs[i].src.substring(index));
        }
    }

    return allSrc;
}

function pushAdded(value)
{
    added.push(value);
}

window.onunload = () => deleteExtra();

function deleteExtra()
{
    if (added.length > 0)
    {
        $.post('/src/php/functions/deleteFiles.php', { paths: added });

        added = [];
    }
}