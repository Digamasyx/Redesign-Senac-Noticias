window.onload = () => scrollFunction();
window.onscroll = () => scrollFunction();

function scrollFunction() 
{
  const topButton = document.getElementById("topBtn");

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) topButton.style.display = "block";
  else topButton.style.display = "none";
}

function scrollToTop() 
{
  $('html, body').animate({ scrollTop: 0 }, 'fast');
}