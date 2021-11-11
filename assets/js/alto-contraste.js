function contrast(){
    var contrast = document.getElementById("body-page");
    var contrastBtnDisable = document.getElementById("altocontraste");
    var cleanBtnEnable = document.getElementById("limpar-contraste");
    contrast.classList.add('contrast');
    contrast.classList.remove('contrast');
    contrast.classList.toggle('contrast');
    contrastBtnDisable.style.display = 'none';
    cleanBtnEnable.style.display = 'block';

}
           
        
        
function cleanContrast(){
    var contrast = document.getElementById("body-page");
    var contrastBtnEnable = document.getElementById("altocontraste");
    var cleanBtnDisable = document.getElementById("limpar-contraste");
    contrast.classList.add('none');
    contrast.classList.remove('contrast');
    contrast.classList.toggle('none');
    contrastBtnEnable.style.display = 'block';
    cleanBtnDisable.style.display = 'none';
}