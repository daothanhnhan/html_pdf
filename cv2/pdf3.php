
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8">
<script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>var __ez=__ez||{};__ez.stms=Date.now();__ez.evt={};__ez.script={};__ez.ck=__ez.ck||{};__ez.template={};__ez.template.isOrig=false;__ez.queue=(function(){var count=0,incr=0,items=[],timeDelayFired=false,hpItems=[],lpItems=[],allowLoad=true;var obj={func:function(name,funcName,parameters,isBlock,blockedBy,deleteWhenComplete,proceedIfError){var self=this;this.name=name;this.funcName=funcName;this.parameters=parameters===null?null:(parameters instanceof Array)?parameters:[parameters];this.isBlock=isBlock;this.blockedBy=blockedBy;this.deleteWhenComplete=deleteWhenComplete;this.isError=false;this.isComplete=false;this.isInitialized=false;this.proceedIfError=proceedIfError;this.isTimeDelay=false;this.process=function(){log("... func = "+name);self.isInitialized=true;self.isComplete=true;log("... func.apply: "+name);var funcs=self.funcName.split('.');var func=null;if(funcs.length>3){}else if(funcs.length===3){func=window[funcs[0]][funcs[1]][funcs[2]];}else if(funcs.length===2){func=window[funcs[0]][funcs[1]];}else{func=window[self.funcName];}
if(typeof func!=='undefined'&&func!==null){func.apply(null,this.parameters);}
if(self.deleteWhenComplete===true)delete items[name];if(self.isBlock===true){log("----- F'D: "+self.name);processAll();}}},file:function(name,path,isBlock,blockedBy,async,defer,proceedIfError){var self=this;this.name=name;this.path=path;this.async=async;this.defer=defer;this.isBlock=isBlock;this.blockedBy=blockedBy;this.isInitialized=false;this.isError=false;this.isComplete=false;this.proceedIfError=proceedIfError;this.isTimeDelay=false;this.process=function(){self.isInitialized=true;log("... file = "+name);var scr=document.createElement('script');scr.src=path;if(async===true)scr.async=true;else if(defer===true)scr.defer=true;scr.onerror=function(){log("----- ERR'D: "+self.name);self.isError=true;if(self.isBlock===true){processAll();}};scr.onreadystatechange=scr.onload=function(){var state=scr.readyState;log("----- F'D: "+self.name);if((!state||/loaded|complete/.test(state))){self.isComplete=true;if(self.isBlock===true){processAll();}}};document.getElementsByTagName('head')[0].appendChild(scr);}}};function init(){window.addEventListener("load",function(){setTimeout(function(){timeDelayFired=true;log('TDELAY -----');processAll();},5000);},false);}
function addFile(name,path,isBlock,blockedBy,async,defer,proceedIfError,priority){var item=new obj.file(name,path,isBlock,blockedBy,async,defer,proceedIfError);if(priority===true){hpItems[name]=item}else{lpItems[name]=item}
items[name]=item;checkIfBlocked(item);}
function setallowLoad(settobool){allowLoad=settobool}
function addFunc(name,func,parameters,isBlock,blockedBy,autoInc,deleteWhenComplete,proceedIfError,priority){if(autoInc===true)name=name+"_"+incr++;var item=new obj.func(name,func,parameters,isBlock,blockedBy,deleteWhenComplete,proceedIfError);if(priority===true){hpItems[name]=item}else{lpItems[name]=item}
items[name]=item;checkIfBlocked(item);}
function addTimeDelayFile(name,path){var item=new obj.file(name,path,false,[],false,false,true);item.isTimeDelay=true;log(name+' ... '+' FILE! TDELAY');lpItems[name]=item;items[name]=item;checkIfBlocked(item);}
function addTimeDelayFunc(name,func,parameters){var item=new obj.func(name,func,parameters,false,[],true,true);item.isTimeDelay=true;log(name+' ... '+' FUNCTION! TDELAY');lpItems[name]=item;items[name]=item;checkIfBlocked(item);}
function checkIfBlocked(item){if(isBlocked(item)===true||allowLoad==false)return;item.process();}
function isBlocked(item){if(item.isTimeDelay===true&&timeDelayFired===false){log(item.name+" blocked = TIME DELAY!");return true;}
if(item.blockedBy instanceof Array){for(var i=0;i<item.blockedBy.length;i++){var block=item.blockedBy[i];if(items.hasOwnProperty(block)===false){log(item.name+" blocked = "+block);return true;}else if(item.proceedIfError===true&&items[block].isError===true){return false;}else if(items[block].isComplete===false){log(item.name+" blocked = "+block);return true;}}}
return false;}
function log(msg){var href=window.location.href;var reg=new RegExp('[?&]ezq=([^&#]*)','i');var string=reg.exec(href);var res=string?string[1]:null;if(res==="1")console.debug(msg);}
function processAll(){count++;if(count>200)return;log("let's go");processItems(hpItems);processItems(lpItems);}
function processItems(list){for(var i in list){if(list.hasOwnProperty(i)===false)continue;var item=list[i];if(item.isComplete===true||isBlocked(item)||item.isInitialized===true||item.isError===true){if(item.isError===true){log(item.name+': error')}else if(item.isComplete===true){log(item.name+': complete already')}else if(item.isInitialized===true){log(item.name+': initialized already')}}else{item.process();}}}
init();return{addFile:addFile,addDelayFile:addTimeDelayFile,addFunc:addFunc,addDelayFunc:addTimeDelayFunc,items:items,processAll:processAll,setallowLoad:setallowLoad};})();__ez.evt.add=function(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent?e.attachEvent("on"+t,n):e["on"+t]=n()},__ez.evt.remove=function(e,t,n){e.removeEventListener?e.removeEventListener(t,n,!1):e.detachEvent?e.detachEvent("on"+t,n):delete e["on"+t]};__ez.script.add=function(e){var t=document.createElement("script");t.src=e,t.async=!0,t.type="text/javascript",document.getElementsByTagName("head")[0].appendChild(t)};__ez.queue.addFile('/detroitchicago/boise.js', '/detroitchicago/boise.js?gcb=191-5&cb=1', false, [], true, false, true, false);</script>
<script type="text/javascript">(function(){function storageAvailable(type){var storage;try{storage=window[type];var x='__storage_test__';storage.setItem(x,x);storage.removeItem(x);return true;}
catch(e){return e instanceof DOMException&&(e.code===22||e.code===1014||e.name==='QuotaExceededError'||e.name==='NS_ERROR_DOM_QUOTA_REACHED')&&(storage&&storage.length!==0);}}
function remove_ama_config(){if(storageAvailable('localStorage')){localStorage.removeItem("google_ama_config");}}
remove_ama_config()})()</script>
<script type="text/javascript">var ezoicTestActive = true</script>
<script data-ezscrex="false" type="text/javascript" data-cfasync="false">var _ezaq = {"ad_cache_level":2,"ad_count_adjustment":3,"ad_lazyload_version":3,"ad_location_ids":"","ad_transform_level":0,"adx_ad_count":0,"bidder_method":3,"bidder_version":5,"city":"Hanoi","country":"VN","days_since_last_visit":0,"display_ad_count":0,"domain_id":96916,"domain_test_group":20200410,"ds_adsize_opt_id":-1,"engaged_time_visit":0,"ezcache_level":0,"ezcache_skip_code":0,"forensiq_score":-1,"form_factor_id":1,"framework_id":1,"has_bad_image":0,"has_bad_words":0,"iab_category":"","iab_category_0":"596","is_from_recommended_pages":false,"is_return_visitor":false,"is_sitespeed":0,"last_page_load":"1607477690571","last_pageview_id":"eebf0f2f-c94a-4c78-4689-1a672a52afd8","lt_cache_level":0,"max_ads":11,"metro_code":0,"optimization_version":4,"page_ad_positions":"","page_view_count":3,"page_view_id":"0314ee80-118d-47e0-6b85-525a90a365b0","position_selection_id":39,"postal_code":"","pv_event_count":0,"response_time_orig":988,"serverid":"52.221.238.124:25075","state":"HN","sub_page_ad_positions":"","t_epoch":1607477690,"template_id":147,"time_on_site_visit":2,"url":"https://freakyjolly.com/demo/HTML-to-MultiPage-PDF-using-jsPDF/","user_id":0,"weather_precipitation":0,"weather_summary":"","weather_temperature":0,"word_count":1496,"worst_bad_word_level":0};var _ezim_d = {};var _ezat = {"domain_id":96916,"form_factor_id":1,"framework_id":1,"pageview_date":"2020-12-08","pageview_id":"0314ee80-118d-47e0-6b85-525a90a365b0","template_id":147,"url":"https://freakyjolly.com/demo/HTML-to-MultiPage-PDF-using-jsPDF/","visit_uuid":"28b4973c-f93a-475a-74b4-9a700180f2d6"};</script><script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false' type="text/javascript">__ez.queue.addFile('banger.js', '/porpoiseant/banger.js?cb=191-5&bv=92&v=35&PageSpeed=off', true, [], true, false, false, true);</script>
<script>__ez.queue.addFile('/detroitchicago/anaheim.js', '/detroitchicago/anaheim.js?gcb=5&cb=1', false, ['/detroitchicago/minneapolis.js'], true, false, true, false);</script>
<script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>__ez.dot={};__ez.queue.addFile('/detroitchicago/memphis.js', '/detroitchicago/memphis.js?gcb=191-5&cb=2', false, [], true, false, true, false);__ez.queue.addFile('/detroitchicago/minneapolis.js', '/detroitchicago/minneapolis.js?gcb=191-5&cb=1', false, [], true, false, true, false);__ez.vep=(function(){var pixels=[],pxURL="/detroitchicago/grapefruit.gif";function AddPixel(vID,pixelData){if(__ez.dot.isDefined(vID)&&__ez.dot.isValid(pixelData)){pixels.push({type:'video',video_impression_id:vID,domain_id:__ez.dot.getDID(),t_epoch:__ez.dot.getEpoch(0),data:__ez.dot.dataToStr(pixelData)});}}
function Fire(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender"){return;}
if(__ez.dot.isDefined(pixels)&&pixels.length>0){while(pixels.length>0){var j=5;if(j>pixels.length){j=pixels.length;}
var pushPixels=pixels.splice(0,j);(new Image()).src=__ez.dot.getURL(pxURL)+"?orig="+(__ez.template.isOrig===true?1:0)+"&v="+btoa(JSON.stringify(pushPixels));}}
pixels=[];}
return{Add:AddPixel,Fire:Fire};})();</script><script data-ezscrex='false' data-cfasync='false' data-pagespeed-no-defer>__ez.pel=(function(){var pixels=[],pxURL="/porpoiseant/army.gif";function AddAndFirePixel(adSlot,pixelData){AddPixel(adSlot,pixelData,0,0,0,0,0);Fire();}
function AddAndFireOrigPixel(adSlot,pixelData){AddPixel(adSlot,pixelData,0,0,0,0,0,true);Fire();}
function GetCurrentPixels(){return pixels;}
function AddPixel(adSlot,pixelData,revenue,est_revenue,bid_floor_filled,bid_floor_prev,stat_source_id,isOrig){if(!__ez.dot.isDefined(adSlot)||__ez.dot.isAnyDefined(adSlot.getSlotElementId,adSlot.ElementId)==false){return;}
var ad_position_id=parseInt(__ez.dot.getTargeting(adSlot,'ap'));var impId=__ez.dot.getSlotIID(adSlot),adUnit=__ez.dot.getAdUnit(adSlot,isOrig);var compId=parseInt(__ez.dot.getTargeting(adSlot,"compid"));var lineItemId=0;var creativeId=0;var ezimData=getEzimData(adSlot);if(typeof ezimData=='object'){if(ezimData.creative_id!==undefined){creativeId=ezimData.creative_id;}
if(ezimData.line_item_id!==undefined){lineItemId=ezimData.line_item_id;}}
if(__ez.dot.isDefined(impId,adUnit)&&__ez.dot.isValid(pixelData)){pixels.push({type:"impression",impression_id:impId,domain_id:__ez.dot.getDID(),unit:adUnit,t_epoch:__ez.dot.getEpoch(0),revenue:revenue,est_revenue:est_revenue,ad_position:ad_position_id,ad_size:"",bid_floor_filled:bid_floor_filled,bid_floor_prev:bid_floor_prev,stat_source_id:stat_source_id,country_code:__ez.dot.getCC(),pageview_id:__ez.dot.getPageviewId(),comp_id:compId,line_item_id:lineItemId,creative_id:creativeId,data:__ez.dot.dataToStr(pixelData),is_orig:isOrig||__ez.template.isOrig,});}}
function AddPixelById(impFullId,pixelData,isOrig){var vals=impFullId.split('/');if(__ez.dot.isDefined(impFullId)&&vals.length===3&&__ez.dot.isValid(pixelData)){var adUnit=vals[0],impId=vals[2];pixels.push({type:"impression",impression_id:impId,domain_id:__ez.dot.getDID(),unit:adUnit,t_epoch:__ez.dot.getEpoch(0),pageview_id:__ez.dot.getPageviewId(),data:__ez.dot.dataToStr(pixelData),is_orig:isOrig||__ez.template.isOrig});}}
function Fire(){if(typeof document.visibilityState!=='undefined'&&document.visibilityState==="prerender")return;if(__ez.dot.isDefined(pixels)&&pixels.length>0){var allPixels=[pixels.filter(function(pixel){return pixel.is_orig}),pixels.filter(function(pixel){return!pixel.is_orig})];allPixels.forEach(function(pixels){while(pixels.length>0){var isOrig=pixels[0].is_orig||false;var j=5;if(j>pixels.length){j=pixels.length;}
var pushPixels=pixels.splice(0,j);var pixelURL=__ez.dot.getURL(pxURL)+"?orig="+(isOrig===true?1:0)+"&sts="+btoa(JSON.stringify(pushPixels));if(typeof window.isAmp!=='undefined'&&isAmp&&typeof window._ezaq!=='undefined'&&_ezaq.hasOwnProperty("domain_id")){pixelURL+="&visit_uuid="+_ezaq['visit_uuid'];}
(new Image()).src=pixelURL;}})}
pixels=[];}
function getEzimData(adSlot){if(typeof _ezim_d=="undefined"){return false}
var adUnitName=__ez.dot.getAdUnitPath(adSlot).split('/').pop();if(typeof _ezim_d==='object'&&_ezim_d.hasOwnProperty(adUnitName)){return _ezim_d[adUnitName];}
for(var ezimKey in _ezim_d){if(ezimKey.split('/').pop()===adUnitName){return _ezim_d[ezimKey];}}
return false;}
return{Add:AddPixel,AddAndFire:AddAndFirePixel,AddAndFireOrig:AddAndFireOrigPixel,AddById:AddPixelById,Fire:Fire,GetPixels:GetCurrentPixels,};})();__ez.queue.addFile('/detroitchicago/raleigh.js', '/detroitchicago/raleigh.js?gcb=191-5&cb=2', false, [], true, false, true, false);__ez.queue.addFile('/detroitchicago/tampa.js', '/detroitchicago/tampa.js?gcb=191-5&cb=1', false, [], true, false, true, false);</script>
<script data-ezscrex="false" data-pagespeed-no-defer data-cfasync='false' type="text/javascript">__ez.queue.addFile('rochester.js', '/detroitchicago/rochester.js?cb=191-5&v=9', false, [], true, false, true, true);</script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Convert JSON to XLS and Download</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
	
	
	<script>
	
	function getPDF(){
		$("#downloadbtn").hide();
		$("#genmsg").show();
		var HTML_Width = $(".canvas_div_pdf").width();
		var HTML_Height = $(".canvas_div_pdf").height();
		var top_left_margin = 15;
		var PDF_Width = HTML_Width+(top_left_margin*2);
		var PDF_Height = (PDF_Width*1.2)+(top_left_margin*2);
		var canvas_image_width = HTML_Width;
		var canvas_image_height = HTML_Height;
		
		var totalPDFPages = Math.ceil(HTML_Height/PDF_Height)-1;
		

		html2canvas($(".canvas_div_pdf")[0],{allowTaint:true}).then(function(canvas) {
			canvas.getContext('2d');
			
			console.log(canvas.height+"  "+canvas.width);
			
			
			var imgData = canvas.toDataURL("image/jpeg", 1.0);
			var pdf = new jsPDF('p', 'pt',  [PDF_Width, PDF_Height]);
		    pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin,canvas_image_width,canvas_image_height);
			
			
			for (var i = 1; i <= totalPDFPages; i++) { 
				pdf.addPage(PDF_Width, PDF_Height);
				pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height*i)+(top_left_margin*4),canvas_image_width,canvas_image_height);
			}
			
		    pdf.save("HTML-Document.pdf");
			
			setTimeout(function(){ 			
				$("#downloadbtn").show();
				$("#genmsg").hide();
			}, 0);

        });
	};
	
	
	</script>
	
	
	
<style>.ezoic-ad{display:inline-block;}
.ezoic-ad .ezoic-adl {border:1px #c0c0c047 solid;border-radius:6px;overflow:hidden;background:url("/utilcave_com/l.svg") no-repeat center center}.ezoic-ad .ezfound,.ezmob-footer .ezoic-ad .ezoic-ad,.ezoic-ad-adaptive > .ezoic-ad, .ezoic-ad-rl {background:0 0;border-radius:0;border:none}
.adtester-container-170,.adtester-container-175,.adtester-container-191,.adtester-container-124,.adtester-container-122,.adtester-container-192,.adtester-container-112,.adtester-container-159,.adtester-container-156,.adtester-container-123,.adtester-container-104,.adtester-container-174,.adtester-container-185,.adtester-container-155,.adtester-container-131,.adtester-container-141,.adtester-container-108,.adtester-container-172,.adtester-container-129,.adtester-container-125,.adtester-container-189,.adtester-container-100,.adtester-container-102,.adtester-container-120,.adtester-container-160,.adtester-container-149,.adtester-container-162,.adtester-container-168,.adtester-container-136,.adtester-container-169,.adtester-container-179,.adtester-container-187,.adtester-container-133,.adtester-container-158,.adtester-container-134,.adtester-container-152,.adtester-container-148,.adtester-container-166,.adtester-container-183,.adtester-container-118,.adtester-container-182,.adtester-container-113,.adtester-container-139,.adtester-container-137,.adtester-container-177,.adtester-container-140,.adtester-container-164,.adtester-container-163,.adtester-container-165,.adtester-container-106,.adtester-container-151,.adtester-container-121,.adtester-container-153,.adtester-container-142,.adtester-container-178,.adtester-container-154,.adtester-container-130,.adtester-container-146,.adtester-container-147,.adtester-container-180,.adtester-container-167,.adtester-container-190,.adtester-container-109,.adtester-container-111,.adtester-container-126,.adtester-container-157,.adtester-container-107,.adtester-container-181,.adtester-container-138,.adtester-container-128,.adtester-container-184,.adtester-container-127,.adtester-container-135,.adtester-container-188,.adtester-container-117,.adtester-container-110,.adtester-container-186,.adtester-container-144,.adtester-container-173{display:none!important}
.ezoic-floating-bottom { display: none!important; }</style><link rel='canonical' href='https://www.freakyjolly.com/demo/HTML-to-MultiPage-PDF-using-jsPDF/' />

<script data-ezscrex="false" data-cfasync="false" type="text/javascript">window.google_analytics_uacct = "UA-124318218-41";</script>
<script data-ezscrex="false" data-cfasync="false" type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(function(){
	_gat._createTracker('UA-124318218-41', 'e');
});
_gaq.push(function(){
	_gat._createTracker('UA-38339005-1', 'f');
});
_gaq.push(['e._setDomainName', 'freakyjolly.com']);
_gaq.push(['f._setDomainName', 'freakyjolly.com']);
_gaq.push(['e._setCustomVar',1,'template','pub_site_noads',3]);
_gaq.push(['e._setCustomVar',2,'t','147',3]);
_gaq.push(['e._setCustomVar',3,'rid','0',2]);
_gaq.push(['e._setCustomVar',4,'bra','mod1',3]);
_gaq.push(['e._setAllowAnchor',true]);
_gaq.push(['e._setSiteSpeedSampleRate', 10]);
_gaq.push(['f._setCustomVar',1,'template','pub_site_noads',3]);
_gaq.push(['f._setCustomVar',2,'domain','freakyjolly.com',3]);
_gaq.push(['f._setSiteSpeedSampleRate', 20]);
_gaq.push(['e._trackPageview']);
_gaq.push(['f._trackPageview']);


(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">var ezouid = "1";</script><base href="https://freakyjolly.com/demo/HTML-to-MultiPage-PDF-using-jsPDF/"><script type='text/javascript'>
var ezoTemplate = 'pub_site_noads';
if(typeof ezouid == 'undefined')
{
    var ezouid = 'none';
}
var ezoFormfactor = '1';
var ezo_elements_to_check = Array();
</script><!-- START EZHEAD -->
<script data-ezscrex="false" type='text/javascript'>
var soc_app_id = '0';
var did = 96916;
var ezdomain = 'freakyjolly.com';
var ezoicSearchable = 1;
</script>
<!--{jquery}-->
<!-- END EZHEAD -->
<script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false' type='text/javascript' style='display:none'>__ez.queue.addFile('__ezf_ezosuigeneris', '//g.ezoic.net/ezosuigeneris.js?i=9d86b14b40884bfd8008caaf845a2090', true, ["/detroitchicago/boise.js"], true, false, false, false);</script><script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false' type='text/javascript' style='display:none'>__ez.queue.addFile('__ezf_ezosuigenerisc', '//g.ezoic.net/ezosuigenerisc.js?nogen=1', true, ["/detroitchicago/boise.js"], true, false, false, false);</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="text/javascript"></script>

<script type="text/javascript">
(function(){
	var div = document.createElement('div');
	div.id = 'dmo1';
	div.style = 'display:none';
	var s = document.createElement('script');
	var code = `var googleAdClient = "ca-pub-6396844742497208";
			  window.google_ad_client = googleAdClient;
			  /* dmo */
			  window.google_ad_slot = "dmo";
			  window.google_ad_width = 88;
			  window.google_ad_height = 31;
			  (adsbygoogle = window.adsbygoogle || []).push({
				  google_ad_client: googleAdClient,
				  enable_page_level_ads: false
			  });`;
	var ss = document.createElement('script');
	ss.src = '//pagead2.googlesyndication.com/pagead/show_ads.js';
	ss.type = 'text/javascript';
	ss.async = false;
	try {
		s.appendChild(document.createTextNode(code));
	} catch (e) {
		s.text = code;
	}
	div.appendChild(s);
	div.appendChild(ss);
	if (document.readyState == 'interactive' || document.readyState == 'complete') {
		document.body.appendChild(div);
	} else {
		document.addEventListener("DOMContentLoaded", function(event) {
			document.body.appendChild(div);
		});
	}
}());
</script>
<script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false'>
function create_ezolpl(pvID, rv) {
    var d = new Date();
    d.setTime(d.getTime() + (365*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    __ez.ck.setByCat("ezux_lpl_96916=" + new Date().getTime() + "|" + pvID + "|" + rv + "; " + expires, 3);
}
function attach_ezolpl(pvID, rv) {
    if (document.readyState === "complete") {
        create_ezolpl(pvID, rv);
    }
    if(window.attachEvent) {
        window.attachEvent("onload", create_ezolpl, pvID, rv);
    } else {
        if(window.onload) {
            var curronload = window.onload;
            var newonload = function(evt) {
                curronload(evt);
                create_ezolpl(pvID, rv);
            };
            window.onload = newonload;
        } else {
            window.onload = create_ezolpl.bind(null, pvID, rv);
        }
    }
}

__ez.queue.addFunc("attach_ezolpl", "attach_ezolpl", ["0314ee80-118d-47e0-6b85-525a90a365b0", "false"], false, ['/detroitchicago/boise.js'], true, false, false, false);
</script></head>

<body class="container">


<h1>Convert HTML into Multipage PDF Example using jsPDF</h1>
	<div class="row">
		<div class="col-md-12 text-center">
			<button onclick="getPDF()" id="downloadbtn"><b>Click to Download HTML as PDF</b></button>
			<span id="genmsg" style="display:none;">Generating ...</span>
			<h6><a href="http://www.freakyjolly.com/jspdf-multipage-example-generate-multipage-pdf-using-single-canvas-of-html-document-using-jspdf/" target="_blank">Tutorial here: Generate Multipage PDF using Single Canvas of HTML Document using jsPDF</a></h6>
		</div>
	</div>

	 			
<!-- responsive horizontal -->


    <div class="canvas_div_pdf mt-2" style="display: block;border:2px solid #ccc; padding:15px;">
        <div class="top_map_section clearfix">
            <div class="row">
                <div class="col-md-12"><img src="followup_56.png" title="logo" class="float-right" style="height:33px;">
                    <h3 style="color: #0a69fc">Follow Up - Tracker: Report Generated <span class="report_gen_time">Date: 24 July 2018 Time: 11:20:54</span></h3>
				</div>
            </div>
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div>
						<h2 style="color:black">Steave (9877XXXXXXX)</h2></div>
					<div class="totalkm" style="color:black">
						<h4><span style="color:black">67.20 Kms</span> in <span style="color:black">05 hrs 13 mins</span></h4>
						<h6><b>24th July 2018, 6:05:53 am</b> - <b>11:19:49 am</b></h6></div>
				</div>
				<div class="col-md-8 col-sm-12  no-padding">
					<div class="float-right"><img src="googe_map_image_userid_8.png"></div>
				</div>
			</div>
        </div>
        <div class="table_section">
            <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Place</th>
                        <!--th>Activity</th-->
                        <!--th>Bttry</th-->
                        <th style="width:200px;">Time</th>
                        <th>GPS</th>
                        <th>KM's Traveled</th>
                    </tr>
                </thead>
                <tbody class="table_body_data">
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh - Panchkula Rd, Modern Housing Complex, Manimajra, Chandigarh, 160102, India</b></span>
                            <br>Accuracy: <b>116<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 71%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:06:43">about 3 hours ago</time> <br>[24th July 2018, 8:06:43 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>0.85Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>7, Chandigarh - Panchkula Rd, Rajiv Vihar, Modern Housing Complex, Manimajra, Chandigarh, 160101, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 70%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:08:50">about 3 hours ago</time> <br>[24th July 2018, 8:08:50 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>1.51Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>240, Madhya Marg, Bapu Dham Colony, Sector 26 East, Chandigarh, 160101, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 69%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:11:30">about 3 hours ago</time> <br>[24th July 2018, 8:11:30 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>2.28Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>1324, Purv Marg, 28B, Sector 28, Chandigarh, 160101, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 69%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:12:51">about 3 hours ago</time> <br>[24th July 2018, 8:12:51 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>3.00Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>28, Udyog Path, Sector 28 D, Sector 28, Chandigarh, 160030, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 68%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:14:47">about 3 hours ago</time> <br>[24th July 2018, 8:14:47 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>3.98Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>3161, Udyog Path, Sector 27D, Sector 27, Chandigarh, 160019, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 68%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:16:14">about 3 hours ago</time> <br>[24th July 2018, 8:16:14 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>4.98Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>1146, Sarovar Path, Sector 21B, Sector 20, Chandigarh, 160022, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 68%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:17:33">about 3 hours ago</time> <br>[24th July 2018, 8:17:33 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>5.88Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>2223, Sarovar Path, Sector 21C, Sector 21, Chandigarh, 160022, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 66%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:20:11">about 3 hours ago</time> <br>[24th July 2018, 8:20:11 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>7.06Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Plot No. 1, Sarovar Path, 33A, Sector 33, Chandigarh, 160020, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 66%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:21:31">about 3 hours ago</time> <br>[24th July 2018, 8:21:31 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>7.77Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>NO ADDRESS FOUND</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 65%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:23:35">about 3 hours ago</time> <br>[24th July 2018, 8:23:35 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>8.13Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>322, Shanti Path, 34D, Sector 34, Chandigarh, 160047, India</b></span>
                            <br>Accuracy: <b>96<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 65%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:24:52">about 3 hours ago</time> <br>[24th July 2018, 8:24:52 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>8.86Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>3026, Shanti Path, Sector 35D, Sector 35, Chandigarh, 160022, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 64%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:26:12">about 3 hours ago</time> <br>[24th July 2018, 8:26:12 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>9.49Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>1111, Shanti Path, AG Colony, Audit Pool Colony, Sector 41B, Sector 41, Chandigarh, 160036, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 64%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:27:32">about 3 hours ago</time> <br>[24th July 2018, 8:27:32 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>10.48Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>2150, Udyan Path, Block C, Sector 41, Chandigarh, 160036, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 63%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:28:51">about 3 hours ago</time> <br>[24th July 2018, 8:28:51 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>11.46Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh Rd, Badheri, Sector 41, Chandigarh, 160036, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 63%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:30:10">about 3 hours ago</time> <br>[24th July 2018, 8:30:10 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>12.13Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Sector 56, Sahibzada Ajit Singh Nagar, Chandigarh, India</b></span>
                            <br>Accuracy: <b>1100<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 62%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:31:54">about 3 hours ago</time> <br>[24th July 2018, 8:31:54 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>13.18Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh Rd, 56A, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 160055, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 60%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:43:02">about 3 hours ago</time> <br>[24th July 2018, 8:43:02 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>14.10Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Phase 6, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 140308, India</b></span>
                            <br>Accuracy: <b>32<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 60%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:54:24">about 2 hours ago</time> <br>[24th July 2018, 8:54:24 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>15.21Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Verka Chowk, Phase 6, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 140308, India</b></span>
                            <br>Accuracy: <b>17<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 59%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:55:42">about 2 hours ago</time> <br>[24th July 2018, 8:55:42 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>15.33Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 160014, India</b></span>
                            <br>Accuracy: <b>13<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 59%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:57:03">about 2 hours ago</time> <br>[24th July 2018, 8:57:03 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>15.95Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Model Town, Sahibzada Ajit Singh Nagar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>15<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:00:22">about 2 hours ago</time> <br>[24th July 2018, 9:00:22 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>18.49Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Sunny Enclave, Kharar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>116<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:01:42">about 2 hours ago</time> <br>[24th July 2018, 9:01:42 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>19.25Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Janta Nagar, Mundi Kharar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:03:03">about 2 hours ago</time> <br>[24th July 2018, 9:03:03 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>19.90Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Janta Nagar, Kharar, Punjab 140301, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:05:02">about 2 hours ago</time> <br>[24th July 2018, 9:05:02 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>20.94Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Gill Rd, Main Bazar, Kharar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>54<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 57%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:07:32">about 2 hours ago</time> <br>[24th July 2018, 9:07:32 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>21.52Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>New JDKR Causeway, Guru Teg Bahadur Nagar, Kharar, Punjab 140301, India</b></span>
                            <br>Accuracy: <b>96<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 56%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:17:02">about 2 hours ago</time> <br>[24th July 2018, 9:17:02 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>22.56Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Aujala, Punjab 140301, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 56%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:19:01">about 2 hours ago</time> <br>[24th July 2018, 9:19:01 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>23.56Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Kurali, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>29<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 55%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:28:06">about 2 hours ago</time> <br>[24th July 2018, 9:28:06 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>32.42Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Ward No. 6, Kurali, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>68<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 55%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:29:35">about 2 hours ago</time> <br>[24th July 2018, 9:29:35 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>32.80Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Kurali, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 55%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:30:50">about 2 hours ago</time> <br>[24th July 2018, 9:30:50 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>33.48Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Adhreda, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:33:29">about 2 hours ago</time> <br>[24th July 2018, 9:33:29 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>35.14Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Mathahari, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>96<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:35:29">about 2 hours ago</time> <br>[24th July 2018, 9:35:29 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>36.62Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Chaklan, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>458<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:38:05">about 2 hours ago</time> <br>[24th July 2018, 9:38:05 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>38.71Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Punjab 140103, India</b></span>
                            <br>Accuracy: <b>493<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:40:10">about 2 hours ago</time> <br>[24th July 2018, 9:40:10 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>40.83Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Punjab 140001, India</b></span>
                            <br>Accuracy: <b>493<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:45:23">about 2 hours ago</time> <br>[24th July 2018, 9:45:23 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>45.34Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>333, Chandigarh Rd, Shekhian Mohalla, Gugga Mari Mohalla, Rupnagar, Punjab 140001, India</b></span>
                            <br>Accuracy: <b>56<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:50:28">about 2 hours ago</time> <br>[24th July 2018, 9:50:28 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>48.78Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Canal Colony, Rupnagar, Punjab 140001, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 54%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:53:15">about an hour ago</time> <br>[24th July 2018, 9:53:15 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>50.51Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Canal Colony, Rupnagar, Punjab 140001, India</b></span>
                            <br>Accuracy: <b>422<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 53%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:58:28">about an hour ago</time> <br>[24th July 2018, 9:58:28 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>51.80Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Punjab 144533, India</b></span>
                            <br>Accuracy: <b>512<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 53%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:59:53">about an hour ago</time> <br>[24th July 2018, 9:59:53 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>52.58Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Rail, Punjab 144533, India</b></span>
                            <br>Accuracy: <b>235<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 53%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 10:04:24">about an hour ago</time> <br>[24th July 2018, 10:04:24 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>56.70Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Taunsa, Punjab 144533, India</b></span>
                            <br>Accuracy: <b>466<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 53%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 10:06:27">about an hour ago</time> <br>[24th July 2018, 10:06:27 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>58.65Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Jamiatgarh, Punjab 144522, India</b></span>
                            <br>Accuracy: <b>27<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 52%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 10:09:36">about an hour ago</time> <br>[24th July 2018, 10:09:36 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>61.86Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Kishanpur, Punjab 144522, India</b></span>
                            <br>Accuracy: <b>391<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 52%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 10:14:03">about an hour ago</time> <br>[24th July 2018, 10:14:03 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>66.10Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Phagwara-Mohali Express Hwy, Aima Chahal, Punjab 144522, India</b></span>
                            <br>Accuracy: <b>12<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 51%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 10:26:42">about an hour ago</time> <br>[24th July 2018, 10:26:42 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>66.94Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Bharthala, Punjab 144522, India</b></span>
                            <br>Accuracy: <b>26<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 45%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 11:19:49">2 minutes ago</time> <br>[24th July 2018, 11:19:49 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>67.20Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh Rd, Badheri, Sector 41, Chandigarh, 160036, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 63%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:30:10">about 3 hours ago</time> <br>[24th July 2018, 8:30:10 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>12.13Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Sector 56, Sahibzada Ajit Singh Nagar, Chandigarh, India</b></span>
                            <br>Accuracy: <b>1100<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 62%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:31:54">about 3 hours ago</time> <br>[24th July 2018, 8:31:54 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>13.18Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh Rd, 56A, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 160055, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 60%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:43:02">about 3 hours ago</time> <br>[24th July 2018, 8:43:02 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>14.10Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Phase 6, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 140308, India</b></span>
                            <br>Accuracy: <b>32<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-three-quarters" style="color:#83b10e;"></i></span> 60%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:54:24">about 2 hours ago</time> <br>[24th July 2018, 8:54:24 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>15.21Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Verka Chowk, Phase 6, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 140308, India</b></span>
                            <br>Accuracy: <b>17<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 59%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:55:42">about 2 hours ago</time> <br>[24th July 2018, 8:55:42 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>15.33Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Sector 56, Sahibzada Ajit Singh Nagar, Punjab 160014, India</b></span>
                            <br>Accuracy: <b>13<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 59%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 08:57:03">about 2 hours ago</time> <br>[24th July 2018, 8:57:03 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>15.95Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Model Town, Sahibzada Ajit Singh Nagar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>15<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:00:22">about 2 hours ago</time> <br>[24th July 2018, 9:00:22 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>18.49Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Sunny Enclave, Kharar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>116<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:01:42">about 2 hours ago</time> <br>[24th July 2018, 9:01:42 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>19.25Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Janta Nagar, Mundi Kharar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:03:03">about 2 hours ago</time> <br>[24th July 2018, 9:03:03 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>19.90Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Ludhiana - Chandigarh State Hwy, Janta Nagar, Kharar, Punjab 140301, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 58%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:05:02">about 2 hours ago</time> <br>[24th July 2018, 9:05:02 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>20.94Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Gill Rd, Main Bazar, Kharar, Punjab 140307, India</b></span>
                            <br>Accuracy: <b>54<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 57%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:07:32">about 2 hours ago</time> <br>[24th July 2018, 9:07:32 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>21.52Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>New JDKR Causeway, Guru Teg Bahadur Nagar, Kharar, Punjab 140301, India</b></span>
                            <br>Accuracy: <b>96<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 56%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:17:02">about 2 hours ago</time> <br>[24th July 2018, 9:17:02 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>22.56Kms</b></td>
                    </tr>
                    <tr>
                        <td class="colorBlack"><span style="font-size: 16px;"><b>Chandigarh-Chintapurni-Dharamshala Rd, Aujala, Punjab 140301, India</b></span>
                            <br>Accuracy: <b>10<img class="inline-activity-icon" src="still.png"></b>
                            <br>Battery: <span class="batry-wrap"><i class="fa fa-battery-half" style="color:#a1b10e;"></i></span> 56%</td>
                        <td class="colorBlack"><b><time class="timeago" datetime="2018-07-24 09:19:01">about 2 hours ago</time> <br>[24th July 2018, 9:19:01 am]</b></td>
                        <td class="colorBlack"><b style="color:green">ON</b></td>
                        <td class="colorBlack"><b>23.56Kms</b></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


<script type="text/javascript">
				var __inScopeForCCPA = false;
		function __uspapi(command, version, callback) {
			var response = null;
			var successs = false;
			if (command === "getUSPData" && version === 1) {
				var uspString = "1"; // Version
				if (__inScopeForCCPA) {
					uspString += "Y"; // Has Explicit Notice for Opt Out been provided (ex footer or minor consent modal)
					var result;
					var consentCookie = (result = new RegExp('(?:^|; )ezoccpaconsent=([^;]*)').exec(document.cookie)) ? (result[1]) : null;
					if (consentCookie === "nonconsent") {
						uspString += "Y";
					}
					else {
						uspString += "N";
					}
					uspString += "N" // Is pub a signatory to the IAB Limited Service Provider Agreement (http://www.iabprivacy.com/)
				}
				else {
					uspString += "---";
				}
				response = {
					uspString: uspString,
					version: 1
				};
				success = true;
			}
			return callback(response, success);
		};
		function __receiveUspapiMessage(event) {
			if (event.data.hasOwnProperty('__uspapiCall')) {
				__uspapi('getUSPData', 1, function(uspData, success) {
					event.source.postMessage({
						__uspapiReturn: {
							returnValue: uspData,
							success: success,
							callId: event.data.__uspapiCall.callId
						}
					},
					event.origin);
				});
			}
			return null;
		};
		window.addEventListener("message", __receiveUspapiMessage, false);
</script>

		<script type="text/javascript">
		(function(f,a){function g(b,a,c){b.addEventListener?b.addEventListener(a,c):b.attachEvent("on"+a,function(){c.call(b)})}function k(b){b&&("string"==typeof b["class"]&&b["class"]&&a.getElementById("uglipop_popbox").setAttribute("class",b["class"]),b.keepLayout&&!b["class"]&&a.getElementById("uglipop_popbox").setAttribute("style","position:relative;height:300px;width:300px;background-color:white;opacity:1;"),"string"==typeof b.content&&b.content&&"html"==b.source&&(a.getElementById("uglipop_popbox").innerHTML=b.content),"string"==typeof b.content&&b.content&&"div"==b.source&&(a.getElementById("uglipop_popbox").innerHTML=a.getElementById(b.content).innerHTML));a.getElementById("uglipop_overlay_wrapper").style.display="";a.getElementById("uglipop_overlay").style.display="";a.getElementById("uglipop_content_fixed").style.display=""}function h(){a.getElementById("uglipop_overlay_wrapper").style.display="none";a.getElementById("uglipop_overlay").style.display="none";a.getElementById("uglipop_content_fixed").style.display="none"}g(a,"DOMContentLoaded",function(){var b=a.createElement("div"),e=a.createElement("div"),c=a.createElement("div"),d=a.createElement("div");e.id="uglipop_content_fixed";e.setAttribute("style","position:fixed;top: 50%;left: 50%;transform: translate(-50%, -50%);-webkit-transform: translate(-50%, -50%);-ms-transform: translate(-50%, -50%);opacity:1;z-index:10000000;");c.id="uglipop_popbox";d.id="uglipop_overlay_wrapper";d.setAttribute("style","position:absolute;top:0;bottom:0;left:0;right:0;display:none");b.id="uglipop_overlay";b.setAttribute("style","position:fixed;top:0;bottom:0;left:0;right:0;opacity:0.3;width:100%;height:100%;background-color:black;");d.appendChild(b);e.appendChild(c);a.body.appendChild(d);a.body.appendChild(e);a.getElementById("uglipop_overlay_wrapper").style.display="none";a.getElementById("uglipop_overlay").style.display="none";a.getElementById("uglipop_content_fixed").style.display="none";d.addEventListener("click",h);g(f,"keydown",function(a){27==a.keyCode&&h()});f.uglipop=k})})(window,document);
			var ezRBA = (function() {
			  function init() {
				var reportAdsBtns = document.querySelectorAll('.ez-report-ad-button');
				for (var i = 0; i < reportAdsBtns.length; i++) {
				  reportAdsBtns[i].addEventListener('click', function(e) {
					var url = '<iframe src="https://svc.ezoic.com/pub/reportads/reportads.html' + e.target.getAttribute('name') + '" width="400" height="500" style="border-radius: 10px; box-shadow: 2px 2px 30px 6px rgba(0,0,0,0.75); border: 1px solid black;"></iframe>'
					uglipop({
					  class: 'none',
					  source: 'html',
					  content: url,
					});
				  });
				}
				function bindEvent(element, eventName, eventHandler) {
					if (element.addEventListener) {
						element.addEventListener(eventName, eventHandler, false);
					} else if (element.attachEvent) {
						element.attachEvent('on' + eventName, eventHandler);
					}
				}
				bindEvent(window, 'message', function(e) {
					if (e.data === 'close-report-ad-modal') {
						document.getElementById('uglipop_overlay_wrapper').style.display = 'none';	
						document.getElementById('uglipop_overlay').style.display = 'none';	
						document.getElementById('uglipop_content_fixed').style.display = 'none';	
					}
				})
			  }

			  return {
				init: init
			  };
			})();
			ezRBA.init();
		</script>
<script type='text/javascript' data-cfasync='false'></script>
<script data-ezscrex='false' data-pagespeed-no-defer data-cfasync='false' type='text/javascript' style='display:none'>
__ez_func_ezosuigeneris = function() { if(typeof ezosuigeneris != "undefined") { var ezosuigenerisDate = new Date(); ezosuigenerisDate.setMonth(ezosuigenerisDate.getMonth() + 24); __ez.ck.setByCat("ezosuigeneris=" + window.ezosuigeneris + ";expires=" + ezosuigenerisDate.toUTCString() + ";domain="+window.ezdomain+";path=/",3); } };
__ez.queue.addFunc('__ez_func_ezosuigeneris', '__ez_func_ezosuigeneris', null, false, ['__ezf_ezosuigeneris','/detroitchicago/boise.js'], true, false, false, false);
</script>
<script type="text/javascript" style='display:none;'>var __ez_dims = (function() {
		var setCookie = function( name, content, expiry ) {
			return document.cookie = name+'='+content+((expiry)?';expires='+(new Date(Math.floor(new Date().getTime()+expiry*1000)).toUTCString()):'')+';path=/';
		};
		var ffid = 1;
		var oh = window.screen.height;
		var ow = window.screen.width;
		var h = ffid === 1 ? oh : (oh > ow) ? oh : ow;
		var w = ffid === 1 ? ow : (oh > ow) ? ow : oh;
		var uh = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
		var uw = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
		setCookie('ezds', encodeURIComponent('ffid='+ffid+',w='+w+',h='+h), (31536e3*7));
		setCookie('ezohw', encodeURIComponent('w='+uw+',h='+uh), (31536e3*7));
	})();</script><script type='text/javascript' style='display:none;' async>
__ez.queue.addFile('edmonton.php', '/detroitchicago/edmonton.webp?a=a&cb=191-5&shcb=34', true, ['/detroitchicago/minneapolis.js'], true, false, false, false);
__ez.queue.addFile('jellyfish.php', '/porpoiseant/jellyfish.webp?a=a&cb=191-5&shcb=34', false, [], true, false, false, false);
</script>

<script>var _audins_dom="freakyjolly_com",_audins_did=96916;__ez.queue.addDelayFunc("audins.js","__ez.script.add", "//go.ezoic.net/detroitchicago/audins.js?cb=191-5");</script><noscript><div style="display:none;"><img src="//pixel.quantserve.com/pixel/p-31iz6hfFutd16.gif?labels=Domain.freakyjolly_com,DomainId.96916" border="0" height="1" width="1" alt="Quantcast"/></div></noscript><noscript><img src="https://sb.scorecardresearch.com/p?c1=2&c2=20015427&cv=2.0&cj=1"/></noscript></body></html><!--[selectron:done]-->
