function contrast(){
    var contrast = document.getElementById("body-page");
    var accessBox = document.getElementById('caixa-de-acessibilidade');
    var socialBox = document.getElementById('midia-social');
    var contrastBtn = document.getElementById("altocontraste");
    var cleanBtn= document.getElementById("limpar-contraste");
    document.getElementById('body-page').classList.remove("light-mode");
    accessBox.classList.add('caixa-de-acessibilidade-2');
    accessBox.classList.remove('caixa-de-acessibilidade-2');
    accessBox.classList.toggle('caixa-de-acessibilidade-2');
    socialBox.classList.remove('midia-social-2');
    socialBox.classList.toggle('midia-social-2');
    socialBox.classList.add('midia-social-2');
    contrast.classList.add('contrast');
    contrast.classList.remove('contrast');
    contrast.classList.toggle('contrast');
    contrastBtn.style.display = 'none';
    cleanBtn.style.display = 'block';

}    
function cleanContrast(){
    var contrast = document.getElementById("body-page");
    var accessBox = document.getElementById('caixa-de-acessibilidade');
    var socialBox = document.getElementById('midia-social');
    var contrastBtn = document.getElementById("altocontraste");
    var cleanBtn= document.getElementById("limpar-contraste");
    accessBox.classList.remove('caixa-de-acessibilidade-2');
    socialBox.classList.remove('midia-social-2');
    contrast.classList.remove('contrast');
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
    if(window.matchMedia("(min-width: 1024px)").matches){   
        if (text.style.fontSize == '2.2em'){
            return text.style.fontSize = '1.5em';
        }
        else{
            return text.style.fontSize = '1.2em';
        }
    }
    if (text.style.fontSize == '1.8em'){
        text.style.fontSize = '1.2em';
    }else{
        text.style.fontSize = '0.8em';
    }
}
function fontSizeIncrease(){
    var text = document.getElementById("texto-noticias");
    if(window.matchMedia("(min-width: 1024px)").matches){   
        if (text.style.fontSize == '1.2em'){
            return text.style.fontSize = '1.5em';
        }
        else{
            return text.style.fontSize = '2.2em';
        }
    }
    if (text.style.fontSize == '0.8em'){
        text.style.fontSize = '1.2em';
    }else{
        text.style.fontSize = '1.8em';
    }
    
}
function lightMode(){
    var contrast = document.getElementById("body-page");
    var accessBox = document.getElementById('caixa-de-acessibilidade');
    var socialBox = document.getElementById('midia-social');
    var contrastBtn = document.getElementById("altocontraste");
    var cleanBtn= document.getElementById("limpar-contraste");
    accessBox.classList.remove('caixa-de-acessibilidade-2');
    socialBox.classList.remove('midia-social-2');
    contrast.classList.remove('contrast');
    contrastBtn.style.display = 'block';
    cleanBtn.style.display = 'none';
    document.getElementById('body-page').classList.toggle("light-mode");
    
}
function underlineMouseEnter(){
    const linkExterno = document.getElementById('link-externo');
    if(linkExterno.style.color == 'black'){
        linkExterno.style.textDecoration = 'underline';
        linkExterno.style.textDecorationColor ='black';
    }else{
        linkExterno.style.textDecoration = 'underline';
        linkExterno.style.textDecorationColor ='white';
    }
}
function underlineMouseLeave(){
    const linkExterno = document.getElementById('link-externo');
    if(linkExterno.style.color == 'black'){
        linkExterno.style.textDecoration = 'none';
        linkExterno.style.textDecorationColor = '';
    }else{
        linkExterno.style.textDecoration = 'none';
        linkExterno.style.textDecorationColor = '';
    }
}
