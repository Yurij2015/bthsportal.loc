function crExcel(r,c,t,v){if(document.getElementById('dfeinp')==null){var btn=document.createElement('div');btn.id='dfeinp';document.getElementById('frmCorel').appendChild(btn);var s='';if(v)s='<span class="input-mobil"><input value="1" name="f1" id="f1" type="checkbox"></span>Имеется только один столбец с данными';s=s+'<textarea rows="5" class="form-control" name="TEXTEXCEL" id="txtExcel" placeholder="'+t+'"></textarea>';document.getElementById('dfeinp').innerHTML=s;}else destroyParent(document.getElementById('dfeinp'));return false;}
function SetMasBanner()
{
var h=document.getElementsByClassName('col-sm-6')[0].getBoundingClientRect().height;
$.ajax({type: "POST",url: "/action.php",cache: false,data: "action=infoblock&h="+h+"&w="+screen.width,success: function(html){
var bm=html.split('@@');
if(document.getElementById('MathLeftBlock')&& bm[0])document.getElementById('MathLeftBlock').innerHTML=bm[0];
if(document.getElementById('MathRightBlock')&& bm[1])document.getElementById('MathRightBlock').innerHTML=bm[1];
if(document.getElementById("mySearch"))document.getElementById("mySearch").innerHTML=bm[4];
document.getElementById("myHelp").innerHTML=bm[5];
}});
}
function filter(a){a=a||window.event;var b=document.all;if("INPUT"!=(a.target||a.srcElement).tagName.toUpperCase())return!0;b=b?a.keyCode:a.which;if(32>b||a.ctrlKey||a.altKey)return!0;a=String.fromCharCode(b);for(var c in mas_filter)if(mas_filter[c]==a)return!0;if(!is_valid.test(a))return!1};
function del_spaces(s){s=s.replace(/\s/g, '');s=s.replace(',', '.');s=parseFloat(s);return s;}
function destroyParent(node){var outer=node.parentNode;outer.removeChild(node);}
function IsAdBlock()
{
var fmay=1;
if(fmay)
  {
  for (var i=0; i<ads.length; i++)
    {
    if(window.getComputedStyle(ads[i],null).display==='none')fmay=0;
    var ins=ads[i].getElementsByTagName('ins');
    for (var j=0; j<ins.length; j++)
      {
      if(window.getComputedStyle(ins[j],null).display==='none')fmay=0;
      }
    }
  }
if(idbanner)
  {
  if($('#idbanner').css("visibility")=='hidden')fmay=0;
  s=$('#idbanner img').css("transform");
  if(s.indexOf("matrix")>=0)fmay=0;
  if(idbanner.offsetHeight<100 || idbanner.clientHeight<100)fmay=0;
  }
return fmay;
}
function Discus(e){var disqus_shortname = 'semestr';(function(){var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);})();destroyParent(document.getElementById('disqus_btn'));if(e)e.preventDefault();return 0;}
function buildLoadImg()
{
if(idsemestr.getAttribute('data-img')=="0")$('.loadimg').each(function(index){if($(this).attr("data-src")!=''){$(this).attr('src',$(this).attr("data-src"));$(this).attr('class','img-online');idsemestr.setAttribute('data-img','1');}});
}
function newsrc(s)
{
var f=1;
var i=s.indexOf("chl=");
if(i>0 && f==1)
  {
  s='https://latex.codecogs.com/gif.latex?'+s.substr(i+4);
  }
return s;
}
function buildLoadImg1()
{
var inputElems=[document.getElementsByTagName('img')];
for (var y = 0, inputCount = 0; y < inputElems.length; y++)
  {
  if (inputElems[y])
    {
    for (var x = 0; x < inputElems[y].length; x++)
      {
      ds=inputElems[y][x].getAttribute('data-src');
      if (inputElems[y][x].className.indexOf("loadimg") > -1 && ds!='')
        {
	inputElems[y][x].setAttribute('src',newsrc(ds));
	inputElems[y][x].setAttribute('class','img-online');
	}
      }
    }
  }
}
function usermove()
{
buildLoadImg1();
if(idsemestr.getAttribute('data-vid')!='1')addscript("//www.semestr.ru/skin/share42.js",1);
$("[rel='popover']").popover();
$("a.helpmath").unbind('click');
$("a.helpmath").bind('click',function(){var keyid=this.id;keyid=keyid.substring(0,keyid.length-1);document.getElementById('hmodal').innerHTML=document.getElementById(keyid+'hm').innerHTML;jQuery('#myHelp').modal('show');return false;});
$("a#search").unbind('click');
$("a#search").bind('click',function(){ys();jQuery('#mySearch').modal('show');return false;});
$('a[data-toggle="tab"]').on('show.bs.tab',function(e){
  var s=e.target.href;
  if(s.indexOf("#video")>=0||s.indexOf("#example")>=0)$('.youtube').each(function(index){if($(this).html()=='')$(this).html('<div id="loadtube">...load...</div><iframe width="420" height="315" src="//www.youtube.com/embed/'+$(this).attr("name")+'" frameborder="0" allowfullscreen></iframe>');});
  if(s.indexOf("#word")>=0||s.indexOf("#example")>=0)$('.docs').each(function(index){if($(this).html()=='')$(this).html('<iframe src="https://docs.google.com/gview?url=https%3A%2F%2Faxd.semestr.ru%2F'+$(this).attr("name")+'&amp;embedded=true" style="width:100%;" frameborder="0"></iframe>');});
  });
$('#myModalBox').on('show.bs.modal',function(e){addscript("//ulogin.ru/js/ulogin.js",1);});
var timerId=setInterval(function(){if(document.getElementById('loadtube')){destroyParent(document.getElementById('loadtube'));clearInterval(timerId);}},2000);
document.removeEventListener("touchstart",usermove,false);
document.removeEventListener("mouseover",usermove,false);
}
function ys(){(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');}
function addscript(src,v){var s=document.createElement('script');s.src=src;if(v)s.defer="true";document.body.appendChild(s);return s;}
function loadCSS(hf){var ms=document.createElement("link");ms.rel="stylesheet";ms.href=hf;document.getElementsByTagName("head")[0].appendChild(ms);}
function YandexSearch(){return {'action':'https://www.semestr.ru/search','arrow':true,'bg':'#ffcc00','fontsize':18,'fg':'#000000','language':'ru','logo':'rb','publicname':'Yandex Site Search #146763','suggest':true,'target':'_blank','tld':'ru','type':2,'usebigdictionary':false,'searchid':146763,'input_fg':'#000000','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':null,'input_placeholderColor':'#000000','input_borderColor':'#7f9db9'};}
function SelLang()
{
document.getElementById("selang").innerHTML='<div id="google_translate_element" class="language"></div>';
var scriptEl=document.createElement('script');
scriptEl.innerHTML="function googleTranslateElementInit(){new google.translate.TranslateElement({layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true, gaId: 'UA-12816821'}, 'google_translate_element');}";
document.body.appendChild(scriptEl);
addscript("//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit",1);
}

var is_valid=/\d/;var idsemestr=document.getElementById('paramsemestr');
var mdisad='<code>Для получения решения необходимо отключить блокираторы типа AdBlock (Adguard, AdFender, AdMuncher, DrWeb, Kaspersky, Avast)</code>';
var idbanner=document.getElementById("idbanner"),ads=document.getElementsByClassName('adsbygoogle');

document.addEventListener("touchstart",usermove,false);
document.addEventListener("mouseover",usermove,false);

SetMasBanner();

var lang=idsemestr.getAttribute('data-lang');
if(lang=='l1' || lang=='l3')destroyParent(document.getElementById("selang"));
if(idsemestr.getAttribute('data-vid')=='2')addscript("/skin/post2.js",0);
else addscript("/skin/post0.js",0);

if(idsemestr.getAttribute('data-method')=='m'){document.getElementById("licount").innerHTML="<a href='//www.liveinternet.ru/click' target=_blank><img src='//counter.yadro.ru/hit?t44.1;r" + escape(document.referrer) + ((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth)) + ";u" + escape(document.URL) + ";" + Math.random() + "' border=0 width=31 height=31 alt='semestr' title='LiveInternet'><\/a>";addscript("/skin/google-analytics.js",0);}
var s=location.href;if(s.indexOf("#comment-")>0 && document.getElementById('disqus_btn'))Discus();