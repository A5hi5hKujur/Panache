function parallax()
{
  if($(window).width()>320)
  {
  var block_image_1 = document.getElementById('block-image-1');	<!-- first image block parallax effect -->
  block_image_1.style.top=-((window.pageYOffset/10)-800)+'px';
  var block_content_1 = document.getElementById('block-content-1');	<!-- first content block parallax effect -->
  block_content_1.style.top=((window.pageYOffset/6)+720)+'px';

  var block_image_2 = document.getElementById('block-image-2');	<!-- first image block parallax effect -->
  block_image_2.style.top=-((window.pageYOffset/10)-1500)+'px';
  var block_content_2 = document.getElementById('block-content-2');	<!-- first content block parallax effect -->
  block_content_2.style.top=((window.pageYOffset/7)+1250)+'px';

  var block_image_3 = document.getElementById('block-image-3');	<!-- first image block parallax effect -->
  block_image_3.style.top=((window.pageYOffset/9)+1900)+'px';
  var block_content_3 = document.getElementById('block-content-3');	<!-- first content block parallax effect -->
  block_content_3.style.top=-((window.pageYOffset/2.2)-3000)+'px';
  }
}
window.addEventListener("scroll",parallax,false);
