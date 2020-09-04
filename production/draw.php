
<!DOCTYPE html>  
<html>  
<head>  
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online CSS Formatter</title>
<meta name="Description" content="Online CSS Formatter and Beautifier - Try online CSS formatter and beautifier and Editor to beautify and format CSS code using jQuery Plug-in" />
<meta name="Keywords" content="Online, CSS, Formatter, Beautifier and Editor, Viewer, Easy, Simple, jQuery, Javascript" />
<base href="https://www.tutorialspoint.com/" /> 
<script src="theme/js/jquery.js"></script>
<script src="theme/js/jquery.easyui.min.js"></script>
<script src="theme/js/vkbeautify-min.js"></script>
<link rel="stylesheet" type="text/css" href="theme/css/gray/easyui.css">
<link rel="stylesheet" type="text/css" href="theme/css/icon.css">
<link rel="stylesheet" type="text/css" href="theme/css/tools-common.css">
</head>
<body class="easyui-layout" id="cc">
<div id="loading"></div>
<div data-options="region:'north'" style="height:65px; width:100%;overflow:hidden;background:url(/images/top_bg.png);">
<a href='https://www.tutorialspoint.com/'>
<img src="green/images/logo.png" style="height:50px;padding:5px;float:left;" alt="Tutorials Point"/>
</a>
<h1 class="main-title">Online CSS Formatter</h1>
<div class="easyui-panel,border:false" style="margin:18px 0px 0px 0px; float:right;">
<a id="help" href="#" class="easyui-linkbutton" data-options="iconCls:'icon-help', plain:true" style="float:right">Help</a>
<a id="tutorials" target="_blank" href="https://www.tutorialspoint.com/tutorialslibrary.htm" class="easyui-linkbutton" data-options="iconCls:'icon-library', plain:true" style="float:right; position:relative; top:-1px;">Tutorials</a>
<a id="codingground" href="https://www.tutorialspoint.com/codingground.htm" class="easyui-linkbutton l-btn l-btn-small l-btn-plain" data-options="iconCls:'', plain:true" style="font-size:12px;float:right; position:relative; top:-1px;"><i class="fa-code"></i> Coding Ground</a>
<a id="view" href="#" class="easyui-menubutton" data-options="menu:'#mm3',iconCls:'icon-view'" style="float:right">View</a>
<a id="edit" href="#" class="easyui-menubutton" data-options="menu:'#mm2',iconCls:'icon-edit'" style="float:right">Edit</a>
<a  href="online_dev_tools.htm" class="easyui-linkbutton l-btn l-btn-small l-btn-plain" data-options="plain:true, iconCls:'icon-tools'" style="float:right">Dev Tools</a>
</div>
</div>
<div id="mm2" style="width:200px;">
<div id="undo" data-options="iconCls:'icon-undo'">Undo</div>
<div id="redo" data-options="iconCls:'icon-redo'">Redo</div>
<div class="menu-sep"></div>
<div id="cut" data-options="iconCls:'icon-cut'">Cut</div>
<div id="copy" data-options="iconCls:'icon-copy'">Copy</div>
<div id="paste" data-options="iconCls:'icon-paste'">Paste</div>
<div id="delete" data-options="iconCls:'icon-delete'">Delete</div>
<div id="select" data-options="iconCls:'icon-select'">Select All</div>
<div class="menu-sep"></div>
<div id="find" data-options="iconCls:'icon-find'">Find</div>
<div id="findreplace" data-options="iconCls:'icon-replace'">Find and Replace</div>
</div>
<div id="mm3" style="width:200px;">
<div id="editor-theme" data-options="iconCls:'icon-editor-theme'"><span>Editor Theme</span>
<div>
<div onclick="setEditorTheme('chrome');">Chrome</div>
<div onclick="setEditorTheme('crimson_editor');">Crimson Editor</div>
<div onclick="setEditorTheme('dreamweaver');">Dreamweaver</div>
<div onclick="setEditorTheme('eclipse');">Eclipse</div>
<div onclick="setEditorTheme('github');">Github</div>
<div onclick="setEditorTheme('kuroir');">Kuroir</div>
<div onclick="setEditorTheme('solarized_light');">Solarized Light</div>
<div onclick="setEditorTheme('solarized_dark');">Solarized Dark</div>
<div onclick="setEditorTheme('xcode');">XCode</div>
<div onclick="setEditorTheme('ambiance');">Ambiance</div>
<div onclick="setEditorTheme('cobalt');">Cobalt</div>
<div onclick="setEditorTheme('idle_fingers');">idle Fingers</div>
<div onclick="setEditorTheme('kr_theme');">krTheme</div>
<div onclick="setEditorTheme('mono_industrial');">Mono Industrial</div>
<div onclick="setEditorTheme('monokai');">Monokai</div>
<div onclick="setEditorTheme('terminal');">Terminal</div>
<div onclick="setEditorTheme('textmate');">Textmate</div>
<div onclick="setEditorTheme('tomorrow');">Tomorrow</div>
<div onclick="setEditorTheme('twilight');">Twilight</div>
<div onclick="setEditorTheme('vibrant_ink');">Vibrant Ink</div>
</div>
</div>
<div id="font-size" data-options="iconCls:'icon-font-size'"><span>Font Size</span>
<div>
<div onclick="setEditorFontSize('8');">8px</div>
<div onclick="setEditorFontSize('9');">9px</div>
<div onclick="setEditorFontSize('10');">10px</div>
<div onclick="setEditorFontSize('11');">11px</div>
<div onclick="setEditorFontSize('12');">12px</div>
<div onclick="setEditorFontSize('13');">13px</div>
<div onclick="setEditorFontSize('14');">14px</div>
<div onclick="setEditorFontSize('15');">15px</div>
<div onclick="setEditorFontSize('16');">16px</div>
<div onclick="setEditorFontSize('17');">17px</div>
<div onclick="setEditorFontSize('18');">18px</div>
<div onclick="setEditorFontSize('20');">20px</div>
<div onclick="setEditorFontSize('22');">22px</div>
<div onclick="setEditorFontSize('24');">24px</div>
</div>
</div>
<div id="tab-size" data-options="iconCls:'icon-tab-size'"><span>Tab Size</span>
<div>
<div onclick="setEditorTabSize('1');">1</div>
<div onclick="setEditorTabSize('2');">2</div>
<div onclick="setEditorTabSize('3');">3</div>
<div onclick="setEditorTabSize('4');">4</div>
<div onclick="setEditorTabSize('5');">5</div>
<div onclick="setEditorTabSize('6');">6</div>
<div onclick="setEditorTabSize('7');">7</div>
<div onclick="setEditorTabSize('8');">8</div>
</div>
</div>
<div id="soft-wrap" data-options="iconCls:'icon-soft-wrap'"><span>Soft Wrap</span>
<div>
<div onclick="setEditorSoftWrap('true');">On</div>
<div onclick="setEditorSoftWrap('false');">Off</div>
<div onclick="setEditorSoftWrap('40');">40 Chars</div>
<div onclick="setEditorSoftWrap('60');">60 Chars</div>
<div onclick="setEditorSoftWrap('80');">80 Chars</div>
<div onclick="setEditorSoftWrap('100');">100 Chars</div>
<div onclick="setEditorSoftWrap('120');">120 Chars</div>
<div onclick="setEditorSoftWrap('140');">140 Chars</div>
</div>
</div>
<div class="menu-sep"></div>
<div onclick="setEditorInvisible(true);"  data-options="iconCls:'icon-show-invisible'">Show Invisible</div>
<div onclick="setEditorInvisible(false);" data-options="iconCls:'icon-hide-invisible'">Hide Invisible</div>
<div class="menu-sep"></div>
<div onclick="setEditorGutter(true);" data-options="iconCls:'icon-show-gutter'">Show Gutter</div>
<div onclick="setEditorGutter(false);" data-options="iconCls:'icon-hide-gutter'">Hide Gutter</div>
</div><!--HEADER ENDS -->
<div id="center" data-options="region:'center',iconCls:'icon-terminal', title:'Beautified CSS Code', split:true, tools:'#result-tools',toolPosition:'right'" style="width:45%; border-left:5px solid #eee; padding:0px; background:#fff;">
<div id="result" style="width:100%; height:100%;">
</div>
</div>
<div id="result-tools">
<a href="javascript:download();" class="easyui-linkbutton" data-options="iconCls:'icon-download-file'" style="position:relative;top:-5px;width:120px;border: 0px; height: 30px;white-space:nowrap;">Download</a>
</div>
<div data-options="region:'west', split:true" style="padding:0px;width:45%" id="left"><!-- STAGE STARTS -->
<div data-options="fit:true, border:false,tools:'#tab-tools',toolPosition:'left'" id="codebox" class="easyui-tabs">
<div title="Editable CSS Code" style="padding:0px;"> 
<pre id="code" style="width:100%; height:98%;">
#fileUpload { white-space:nowrap;position:relative;color:#575765;z-index:999}
#uploadmenu a{ color:#424242; text-decoration:none; padding:0px;}
#uploadmenu div{ width:290px;}
#uploadmenu div{ margin:0px 2px 0px 0px; padding:4px 5px 5px 5px; text-align:center; float:none; list-style:none; line-height:24px; border-bottom: 1px dashed #BCBCBC; }
#uploadmenu div:last-child{ border-bottom:none;}
#uploadmenu div a { font-size:13px; color:#424242; text-decoration:none; }
#uploadmenu div a:hover {color:#aaa; text-decoration:none; }
</pre>
</div>
</div>
</div>
<!--EAST STARTS -->
<div id="east" data-options="region:'east',iconCls:'icon-library', title:'Tutorials', split:true" style="overflow: hidden; width: 110px; background: rgb(142, 142, 142);" title="" class="panel-body layout-body">
   <a href="/cplusplus/index.htm" title="Learn C++" target="_blank">
   <img style="width:100px; height:80px;" src="/images/cplusplus_icon.png" alt="Learn C++">
   </a>
   <a href="/java/index.htm" title="Learn Java" target="_blank">
   <img style="width:100px; height:80px;" src="/images/java_icon.png" alt="Learn Java">
   </a>
   <a href="/python/index.htm" title="Learn Python" target="_blank">
   <img style="width:100px; height:80px;" src="/images/python_icon.png" alt="Learn Python">
   </a>
   <a href="/ruby/index.htm" title="Learn Ruby" target="_blank">
   <img style="width:100px; height:80px;" src="/images/ruby_icon.png" alt="Learn Ruby">
   </a>
   <a href="/swift/index.htm" title="Learn Swift Programming" target="_blank">
   <img style="width:100px; height:80px;" src="/images/swift_icon.png" alt="Learn Swift Programming">
   </a>
   <a href="/scala/index.htm" title="Learn Scala" target="_blank">
   <img style="width:100px; height:80px;" src="/images/scala_icon.png" alt="Learn Scala">
   </a>
</div>
<!--EAST ENDS -->
<!--BOTTOM STARTS -->
<div id="south" data-options="region:'south'" style="overflow:hidden;">
<div class="simple-ad">
      <div class="logo"><a href="index.htm"> <img alt="Tutorials Point" class="img-responsive" src="/scripts/img/logo-footer.png" style="width:60px; height:60px;"> </a></div>
      <ul>
         <li><a href="/about/about_privacy.htm">Privacy Policy</a></li>         
         <li><a href="/about/about_cookies.htm">Cookies Policy</a></li>
         <li><a href="/about/about_terms_of_use.htm">Terms of Use</a></li>
         <li style="border-right:none;"><a href="/about/contact_us.htm">Contact</a></li>      </ul>
      <div class="cprght">©Copyright 2019. All Rights Reserved.</div>
      <div style="float:right; padding:25px 0px 0px 0px;"> <a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.facebook.com/sharer.php?u=' + 'http://www.tutorialspoint.com/online_dev_tools.htm','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
         <img src="/images/facebookIcon.jpg" alt="img">
         </a>         <a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://twitter.com/share?url=' + 'http://www.tutorialspoint.com/online_dev_tools.htm','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;"><img src="/images/twitterIcon.jpg" alt="img"></a>
         <a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://www.linkedin.com/cws/share?url=' + 'http://www.tutorialspoint.com/online_dev_tools.htm&amp;title=Online Developers Tools','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
         <img src="/images/linkedinIcon.jpg" alt="img"></a>
         <a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('https://plus.google.com/share?url=http://www.tutorialspoint.com/online_dev_tools.htm','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;"><img src="/images/googlePlusIcon.jpg" alt="img">
         </a>
         <a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://www.stumbleupon.com/submit?url=http://www.tutorialspoint.com/online_dev_tools.htm&amp;title=Online Developers Tools','sharer','toolbar=0,status=0,width=626,height=456,top='+sTop+',left='+sLeft);return false;">
         <img src="/images/StumbleUponIcon.jpg" alt="img">
         </a>
         <a href="javascript:void(0)" onclick="var sTop = window.screen.height/2-(218); var sLeft = window.screen.width/2-(313);window.open('http://reddit.com/submit?url=http://www.tutorialspoint.com/online_dev_tools.htm&amp;title=Online Developers Tools','sharer','toolbar=0,status=0,width=626,height=656,top='+sTop+',left='+sLeft);return false;">
         <img src="/images/reddit.jpg" alt="img">
         </a>
      </div>
   </div>
</div>
<!--BOTTOM ENDS -->
<div id="privacy-banner">
  <div>
    <p>
      We use cookies to provide and improve our services. By using our site, you consent to our Cookies Policy.
      <a id="banner-accept" href="#">Accept</a>
      <a id="banner-learn" href="/about/about_cookies.htm" target="_blank">Learn more</a>
    </p>
  </div>
</div>
<script>
// Banner Trigger if Not Closed
if (!localStorage.bannerClosed) {
  document.getElementById('privacy-banner').style.display = "inherit";
} else {
  document.getElementById('privacy-banner').style.display = "none";
}
document.getElementById('banner-accept').addEventListener('click', function() {
  document.getElementById('privacy-banner').style.display = "none";
  localStorage.bannerClosed = 'true';
});
if (navigator.userAgent.match(/Opera|OPR\//)) {
  document.getElementById('privacy-banner').style.display = "inherit";
}
</script>
<!-- STAGE ENDS -->
<div id="tab-tools" style="border-top:0px; border-right:0px;">
<a href="javascript:void(0)" id="beautify"  class="easyui-linkbutton" data-options="plain:true,iconCls:'icon-text'" style="white-space:nowrap;"><b>Beautify</b></a>
<a href="javascript:void(0)" class="easyui-linkbutton separator" data-options="plain:true" style="white-space:nowrap;"><b>|</b></a>
<a href="javascript:void(0)" id="fileUpload" class="easyui-menubutton" data-options="plain:true,menu:'#uploadmenu'"><img src="images/icon-upload.png" alt="upload files" style="vertical-align:middle!important;"/>&nbsp;<b>Upload File</b></a>
</div>
<div id="uploadmenu" class="menu-content">
   <div>
      <a href="javascript:void(0)" id="ancFileUpload" data-options="plain:true,"> 
      Upload from Computer <img src="images/icon-upload.png" alt="upload files" style="vertical-align:middle!important;"/>
      </a>
      <form method="post" enctype="multipart/form-data" >       
         <input class="upFiletype" type="file" id="uploadFile" name="uploadFile" title="Upload File from Computer">		 
      </form> 
   </div>
   <br/>
   <div>
      <input type="text" placeholder="Enter URL to Upload" id="textUrl" />
      <a href="javascript:void(0)" id="btnGo" class="ancUrlUpload" data-options="plain:true"> <span>&nbsp;GO&nbsp;</span> </a>
   </div>
</div>
<script src="theme/ace/src-min/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="theme/js/tools-common.js" type="text/javascript" charset="utf-8"></script>
<script src="theme/js/filesaver-min.js" type="text/javascript" charset="utf-8"></script>
<script>
$(document).ready(function(){

   $("#beautify" ).click(function(){
      var code = editor.getValue();
      if( code.length <= 0 ){
         $.messager.alert('Alert', 'Please type some CSS code to beautify' ).window({  width:300 });
         return false;
      }
      code = vkbeautify.css(code);
      outputeditor.setValue( code );
      outputeditor.resize(true);
      outputeditor.clearSelection();
   });
   editor.on("change", function(){
      var code = editor.getValue();
      code = vkbeautify.css(code);
      outputeditor.setValue( code );
      outputeditor.resize(true);
      outputeditor.clearSelection();
   });
   var code = editor.getValue();
   code = vkbeautify.css(code);
   outputeditor.setValue( code );
   outputeditor.clearSelection();
   editor.clearSelection();
   outputeditor.resize(true);
   editor.getSession().setMode("ace/mode/css");
});

var outputeditor = ace.edit("result");
outputeditor.setTheme("ace/theme/crimson_editor");
outputeditor.getSession().setMode("ace/mode/css");
outputeditor.getSession().setUseWrapMode(true);
outputeditor.resize(true);

function download() {
   var code = outputeditor.getValue();
   if( code.length <= 0 ){
      $.messager.alert('Alert', 'Please type some CSS code to download CSS file.' ).window({  width:320 });
      return false;
   }
   var blob = new Blob([ "" + code + "" ], {type: "text/plain;charset=utf-8"});
   saveAs(blob, "file.css");
}
</script>
<script src="https://www.google-analytics.com/urchin.js">
</script>
<script type="text/javascript">
_uacct = "UA-232293-6";
urchinTracker();
</script>
</body>
</html>
