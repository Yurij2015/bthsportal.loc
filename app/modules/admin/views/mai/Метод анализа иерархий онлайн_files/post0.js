if(document.getElementById("messageblock1")&& (document.getElementById('MathRightBlock') || document.getElementById('MathLeftBlock')) && document.getElementById('solve2'))
  {
  setInterval(function()
    {
    var messageblock1=document.getElementById("messageblock1"),solve2=document.getElementById('solve2');
    if(messageblock1 && (document.getElementById('MathRightBlock') || document.getElementById('MathLeftBlock')))
      {
      var fmay=IsAdBlock();
      if(fmay)
	{
	if(messageblock1.innerHTML!='')messageblock1.innerHTML='';
	if(solve2.disabled)solve2removeAttribute('disabled');
	}
      if(!fmay && messageblock1.innerHTML=='')messageblock1.innerHTML=mdisad;solve2.removeAttribute('disabled');
      }
    },1000);
  }