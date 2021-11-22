if(window.location.pathname.includes('pages/news')){
    window.onload = function(){
        document.getElementById('fonte-magra').classList.remove('none');
        document.getElementById('fonte-magra').classList.add('fonte-magra');
    }   
    function contrast(){
        var newsPage = document.getElementById("body-page");
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
        newsPage.classList.add('contrast');
        newsPage.classList.remove('contrast');
        newsPage.classList.toggle('contrast');
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
        var all = document.getElementsByClassName("main-container-noticias-principal"); 
        var thinFontBtn = document.getElementById("fonte-magra");
        var noThinFontBtn = document.getElementById("fonte-nao-magra");
        for (var i = 0; i < all.length; i++) {
            all[i].style.fontFamily = "Roboto, serif";
            all[i].style.fontWeight = "100";
        }
        thinFontBtn.style.display = 'none';
        noThinFontBtn.style.display = 'block';
    }
    function noThinFont(){
        var all = document.getElementsByClassName("main-container-noticias-principal");
        var thinFontBtn = document.getElementById("fonte-magra");
        var noThinFontBtn = document.getElementById("fonte-nao-magra");
        for (var i = 0; i < all.length; i++) {
            all[i].style.fontFamily = "Sarala, sans-serif";
            all[i].style.fontWeight = "";
        }
        noThinFontBtn.style.display = 'none';
        thinFontBtn.style.display = 'block';
    }
    function boldFont(){
        var boldFontBtn = document.getElementById("fonte-negrito");
        var normalFontBtn = document.getElementById("negrito-desliga");
        var text = document.getElementById("texto-noticias")
        var all = document.getElementsByClassName("main-container-noticias-principal"); 
        for (var i = 0; i < all.length; i++) {
            all[i].style.fontWeight = 'bold';           
        }
        text.style.fontWeight = 'bold';
        boldFontBtn.style.display = 'none'
        normalFontBtn.style.display = 'block';
    }
    function noBoldFont(){
        var boldFontBtn = document.getElementById("fonte-negrito");
        var text = document.getElementById("texto-noticias")
        var normalFontBtn = document.getElementById("negrito-desliga");
        var all = document.getElementsByClassName("main-container-noticias-principal"); 
        for (var i = 0; i < all.length; i++) {
            all[i].style.fontWeight = 'normal';     
        }
        text.style.fontWeight = 'normal';
        boldFontBtn.style.display = 'block'
        normalFontBtn.style.display = 'none';
    }
    function fontSizeDecrease(){
        var text = document.getElementById("texto-noticias");
        var all = document.getElementsByClassName("noticias-principal-texto");
        if(window.matchMedia("(min-width: 1024px)").matches){   
            if (text.style.fontSize == '2.3em'){
                for (var i = 0; i < all.length; i++) {
                    all[i].style.fontSize = '1.7em';
                }
            }
            else{
                for (var i = 0; i < all.length; i++) {
                    all[i].style.fontSize = '1.4em';
                }
            }
        }
        
    }
    function fontSizeIncrease(){
        var text = document.getElementById("texto-noticias");
        var all = document.getElementsByClassName("noticias-principal-texto");  
        if(window.matchMedia("(min-width: 1150px)").matches){   
            if (text.style.fontSize == '1.5em'){
                for (var i = 0; i < all.length; i++) {
                    all[i].style.fontSize = '1.7em';
                }
            }
            else{
                for (var i = 0; i < all.length; i++) {
                    all[i].style.fontSize = '2.3em';
                }
            }
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
}else{
    window.onload = function(){
        var text = document.getElementById("fonte-magra");
        text.style.display = "none";
        var all = document.getElementsByClassName('botao-acessibilidade');    
        for (var i = 0; i < all.length; i++) {
            all[i].style.marginLeft = '0.7em';
        }
        
    }
    function contrast(){
        var contrastBtn = document.getElementById("altocontraste");
        var cleanBtn= document.getElementById("limpar-contraste");
        contrastBtn.style.display = 'none';
        cleanBtn.style.display = 'block';
        document.getElementById("news").classList.remove('light-mode');
        document.getElementById("news").classList.toggle('contrast');
        
 
    }
    function cleanContrast(){
        var contrastBtn = document.getElementById("altocontraste");
        var cleanBtn= document.getElementById("limpar-contraste");
        contrastBtn.style.display = 'block';
        cleanBtn.style.display = 'none';
        document.getElementById("news").classList.remove('contrast');
    }
    function boldFont(){
        var text = document.getElementById("news");
        text.classList.toggle('negrito');
    }
    function fontSizeIncrease(){
        var all = document.getElementsByClassName('news-text');
        var all2 = document.getElementsByClassName('news-text-title')
        for (var i = 0; i < all.length; i++) {
            if (all[i].style.fontSize == '0.75em' & all2[i].style.fontSize == '0.8em'){
                all[i].style.fontSize = '';
                all2[i].style.fontSize = '';
            }else{
                all[i].style.fontSize = '1.1em';
                all2[i].style.fontSize = '1.25em';
            }    
        }
    }  
    function fontSizeDecrease(){
        var all = document.getElementsByClassName('news-text');
        var all2 = document.getElementsByClassName('news-text-title')
        for (var i = 0; i < all.length; i++) {
            if (all[i].style.fontSize == '1.1em' & all2[i].style.fontSize == '1.25em'){
                all[i].style.fontSize = '';
                all2[i].style.fontSize = '';
            }else{
                all[i].style.fontSize = '0.75em';
                all2[i].style.fontSize = '0.8em';
            }
            
        }
    }
    function lightMode(){
        var contrast = document.getElementById('news');
        var contrastBtn = document.getElementById("altocontraste");
        var cleanBtn= document.getElementById("limpar-contraste");
        contrast.classList.remove('contrast');
        contrastBtn.style.display = 'block';
        cleanBtn.style.display = 'none';
        document.getElementById('news').classList.toggle("light-mode");
        
    }
}