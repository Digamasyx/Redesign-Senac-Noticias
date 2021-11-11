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