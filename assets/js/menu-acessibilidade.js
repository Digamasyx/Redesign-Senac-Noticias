function contrast(){
    var contrast = document.getElementById("body-page");
    var contrastBtn = document.getElementById("altocontraste");
    var cleanBtn= document.getElementById("limpar-contraste");
    contrast.classList.add('contrast');
    contrast.classList.remove('contrast');
    contrast.classList.toggle('contrast');
    contrastBtn.style.display = 'none';
    cleanBtn.style.display = 'block';

}    
function cleanContrast(){
    var contrast = document.getElementById("body-page");
    var contrastBtn = document.getElementById("altocontraste");
    var cleanBtn= document.getElementById("limpar-contraste");
    contrast.classList.add('none');
    contrast.classList.remove('contrast');
    contrast.classList.toggle('none');
    contrastBtn.style.display = 'block';
    cleanBtn.style.display = 'none';
}
function thinFont(){
    var text = document.getElementById("texto-noticias");
    var thinFontBtn = document.getElementById("fonte-magra");
    var noThinFontBtn = document.getElementById("fonte-nao-magra");
    text.style.fontFamily = "Roboto, serif";
    text.style.fontWeight = '100';
    thinFontBtn.style.display = 'none';
    noThinFontBtn.style.display = 'block';
}
function noThinFont(){
    var text = document.getElementById("texto-noticias");
    var thinFontBtn = document.getElementById("fonte-magra");
    var noThinFontBtn = document.getElementById("fonte-nao-magra");
    text.style.fontFamily = "Sarala, sans-serif";
    noThinFontBtn.style.display = 'none';
    thinFontBtn.style.display = 'block';
}
function boldFont(){
    var text = document.getElementById("texto-noticias");
    var boldFontBtn = document.getElementById("fonte-negrito");
    var normalFontBtn = document.getElementById("negrito-desliga");
    text.style.fontWeight = 'bold';
    boldFontBtn.style.display = 'none'
    normalFontBtn.style.display = 'block';
}
function noBoldFont(){
    var text = document.getElementById("texto-noticias");
    var boldFontBtn = document.getElementById("fonte-negrito");
    var normalFontBtn = document.getElementById("negrito-desliga");
    text.style.fontWeight = 'normal';
    boldFontBtn.style.display = 'block'
    normalFontBtn.style.display = 'none';
}
function fontSizeDecrease(){
    var text = document.getElementById("texto-noticias");
    if (text.style.fontSize == '1.8em'){
        text.style.fontSize = '1.2em';
    }else{
        text.style.fontSize = '0.8em';
    }
}
function fontSizeIncrease(){
    var text = document.getElementById("texto-noticias");
    if (text.style.fontSize == '0.8em'){
        text.style.fontSize = '1.2em';
    }else{
        text.style.fontSize = '1.8em';
    }
}
function lightMode(){
    var main = document.getElementById("body-page");
    var accessMenu = document.getElementById("caixa-de-acessibilidade");
    var accessBtn = document.getElementsByClassName('botao-acessibilidade');
    var socialMediaMenu = document.getElementById('midia-social');
    var imgNews = document.getElementById('acessibilidade-iluminacao');
    if (main.style.color == 'white'){
        for (var i = 0; i < accessBtn.length; i++) {
            accessBtn[i].style.color = 'black';}
        main.style.background = 'white';
        main.style.color = 'black';
        accessMenu.style.borderBottom = '2px solid black'; 
        accessMenu.style.borderTop = '2px solid black';
        socialMediaMenu.style.borderTop = '2px solid black';
        socialMediaMenu.style.borderBottom = '2px solid black';
        imgNews.style.border = '1px solid black';
    }else{
        for (var i = 0; i < accessBtn.length; i++) {
            accessBtn[i].style.color = 'white';}
        main.style.background = '';
        main.style.color = 'white';
        accessMenu.style.color = 'white';
        accessMenu.style.borderBottom = '2px solid white'; 
        accessMenu.style.borderTop = '2px solid white';
        socialMediaMenu.style.borderTop = '2px solid white';
        socialMediaMenu.style.borderBottom = '2px solid white'; 
    }
}