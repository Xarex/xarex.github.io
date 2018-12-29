
<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"><meta name="generator" content="DocPad v6.63.3" /><title>Topcoat</title><style>/* normalize.css v2.0.1 | MIT License | git.io/normalize */
article,aside,details,figcaption,figure,footer,header,hgroup,nav,section,summary{display:block}
audio,canvas,video{display:inline-block}
audio:not([controls]){display:none;height:0}
[hidden]{display:none}
html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;}
body{margin:0}
a:focus{outline:thin dotted}
a:active,a:hover{outline:0}
h1{font-size:2em}
abbr[title]{border-bottom:1px dotted}
b,strong{font-weight:bold}
dfn{font-style:italic}
mark{background:#ff0;color:#000}
code,kbd,pre,samp{font-family:monospace,serif;font-size:1em}
pre{white-space:pre;white-space:pre-wrap;word-wrap:break-word}
q{quotes:"\201C" "\201D" "\2018" "\2019"}
small{font-size:80%}
sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}
sup{top:-.5em}
sub{bottom:-.25em}
img{border:0}
svg:not(:root){overflow:hidden}
figure{margin:0}
fieldset{border:1px solid #c0c0c0;margin:0 2px;padding:.35em .625em .75em}
legend{border:0;padding:0;}
button,input,select,textarea{font-family:inherit;font-size:100%;margin:0;}
button,input{line-height:normal}
button,html input[type="button"],/* 1 */,input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;}
button[disabled],input[disabled]{cursor:default}
input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;}
input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}
input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}
button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}
textarea{overflow:auto;vertical-align:top;}
table{border-collapse:collapse;border-spacing:0}

/* Topcoat Button */
.button,.topcoat-button,.topcoat-button--quiet,.topcoat-button--large,.topcoat-button--large--quiet,.topcoat-button--cta,.topcoat-button--large--cta{position:relative;display:inline-block;vertical-align:top;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-background-clip:padding-box;background-clip:padding-box;padding:0;margin:0;font:inherit;color:inherit;background:transparent;border:0;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;text-decoration:none}.button--quiet{background:transparent;border:1px solid transparent;-webkit-box-shadow:none;box-shadow:none}.button--disabled,.topcoat-button:disabled,.topcoat-button--quiet:disabled,.topcoat-button--large:disabled,.topcoat-button--large--quiet:disabled,.topcoat-button--cta:disabled,.topcoat-button--large--cta:disabled{opacity:.3;cursor:default;pointer-events:none}.topcoat-button,.topcoat-button--quiet,.topcoat-button--large,.topcoat-button--large--quiet,.topcoat-button--cta,.topcoat-button--large--cta{padding:0 1.25rem;font-size:16px;font-weight:400;line-height:3rem;letter-spacing:1px;color:#454545;text-shadow:0 1px #fff;vertical-align:top;background-color:#e5e9e8;-webkit-box-shadow:inset 0 1px #fff;box-shadow:inset 0 1px #fff;border:1px solid #9daca9;border-radius:6px}.topcoat-button:hover,.topcoat-button--quiet:hover,.topcoat-button--large:hover,.topcoat-button--large--quiet:hover{background-color:#eff1f1}.topcoat-button:focus,.topcoat-button--quiet:focus,.topcoat-button--quiet:hover:focus,.topcoat-button--large:focus,.topcoat-button--large--quiet:focus,.topcoat-button--large--quiet:hover:focus,.topcoat-button--cta:focus,.topcoat-button--large--cta:focus{border:1px solid #0036ff;-webkit-box-shadow:inset 0 1px rgba(255,255,255,.36),0 0 0 2px #6fb5f1;box-shadow:inset 0 1px rgba(255,255,255,.36),0 0 0 2px #6fb5f1;outline:0}.topcoat-button:active,.topcoat-button--large:active{border:1px solid #9daca9;background-color:#d2d6d6;-webkit-box-shadow:inset 0 1px rgba(0,0,0,.1);box-shadow:inset 0 1px rgba(0,0,0,.1)}.topcoat-button--quiet{background:transparent;border:1px solid transparent;-webkit-box-shadow:none;box-shadow:none}.topcoat-button--quiet:hover,.topcoat-button--large--quiet:hover{text-shadow:0 1px #fff;border:1px solid #9daca9;-webkit-box-shadow:inset 0 1px #fff;box-shadow:inset 0 1px #fff}.topcoat-button--quiet:active,.topcoat-button--quiet:focus:active,.topcoat-button--large--quiet:active,.topcoat-button--large--quiet:focus:active{color:#454545;text-shadow:0 1px #fff;background-color:#d2d6d6;border:1px solid #9daca9;-webkit-box-shadow:inset 0 1px rgba(0,0,0,.1);box-shadow:inset 0 1px rgba(0,0,0,.1)}.topcoat-button--large,.topcoat-button--large--quiet{font-size:1.3rem;font-weight:400;line-height:4.375rem;padding:0 1.25rem}.topcoat-button--large--quiet{background:transparent;border:1px solid transparent;-webkit-box-shadow:none;box-shadow:none}.topcoat-button--cta,.topcoat-button--large--cta{border:1px solid #134f7f;background-color:#288edf;-webkit-box-shadow:inset 0 1px rgba(255,255,255,.36);box-shadow:inset 0 1px rgba(255,255,255,.36);color:#fff;font-weight:500;text-shadow:0 -1px rgba(0,0,0,.36)}.topcoat-button--cta:hover,.topcoat-button--large--cta:hover{background-color:#4ca1e4}.topcoat-button--cta:active,.topcoat-button--large--cta:active{background-color:#1e7dc8;-webkit-box-shadow:inset 0 1px rgba(0,0,0,.12);box-shadow:inset 0 1px rgba(0,0,0,.12)}.topcoat-button--large--cta{font-size:1.3rem;font-weight:400;line-height:4.375rem;padding:0 1.25rem}

*{-webkit-box-sizing:border-box;-moz-box-sizeing:border-box;box-sizing:border-box}
html{height:100%}
body{font-family:"Source Sans Pro","source-sans-pro","HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif;font-weight:100;color:#666;font-size:16px;line-height:1.375em;background:#fff;-webkit-text-size-adjust:100%;min-height:100%;box-sizing:border-box;padding-bottom:120px;position:relative}
a{color:#308dde;text-decoration:none}
a:hover{color:#065cbb}
h1,h2,h3,h4{margin:0;padding:0;font-style:normal}
h1,h2,h3,h4,header p{text-rendering:optimizeLegibility}
h1,h1 a{color:#464646;font-size:2.05em;line-height:.6em;letter-spacing:-.065em;font-weight:600}
h3{font-size:1.6em;font-weight:300;color:#464646}
#wrapper{max-width:1036px;padding:40px 40px 0;margin:0 auto}
header{position:relative}
#side-nav,#slide-menu-button{display:none}
header p{color:#999}
nav ul,footer ul,.features ul,#hero ul{list-style:none;margin:0;padding:0}
nav.main ul li,.features ul li{float:left}
nav.main ul li{margin:0 0 0 55px}
nav.main ul{position:absolute;top:9px;right:0}
nav a{color:#7f7f7f;font-size:1.3em;line-height:3rem}
h1 a:hover,nav.main ul li a:hover{color:#000}
#hero{display:block;max-width:100%;height:310px;margin:80px 0 120px;background:transparent url("../img/hero-devices.png") right 50% no-repeat;background-size:contain}
#hero ul li,#hero ul li a{display:block;height:310px;text-align:center}
#hero ul li{float:left}
#hero ul li#desktop-preview{width:56%}
#hero ul li#mobile-preview{width:44%}
#hero ul li a{width:100%}
#hero ul li .popover{top:-20px;opacity:0;-moz-transition-property:opacity,top;-moz-transition-duration:.14s;-moz-transition-timing-function:ease-out;-webkit-transition-property:opacity,top;-webkit-transition-duration:.14s;-webkit-transition-timing-function:ease-out}
#hero ul li:hover .popover{top:-34px;opacity:1}
.features ul li{width:50%;display:block;padding-bottom:50px}
.features ul li p{padding:0 55px 0 0}
.features ul li#performance a.vignette{background-image:url("../img/vignette-performance.svg")}
.features ul li#components a.vignette{background-image:url("../img/tnl-components.png")}
.features ul li#themes a.vignette{background-image:url("../img/tnl-themes.png")}
.features ul li#bem a.vignette{background-image:url("../img/tnl-bem.svg")}
.features ul li#source-sans a.vignette{background-image:url("../img/tnl-source-sans.svg")}
.features ul li#icons a.vignette{background-image:url("../img/tnl-icons.svg")}
.features ul li#design a.vignette{background-image:url("../img/tnl-design.png")}
.features ul li#cdnjs a.vignette {background-image: url(../img/tnl-cdnjs.png);}
.features ul li a.vignette{display:block;width:120px;height:120px;margin:0 30px 30px 0;float:left;background-repeat:no-repeat;background-size:cover}
.features ul li a.vignette,#default-theme{background-color:#f9f9f9;outline:solid 1px #eee}
#default-theme{clear:left;width:100%;height:226px;margin-bottom:80px;overflow:hidden}
#default-theme img{width:1036px;height:226px}
footer.site{bottom:40px;width:100%;left:0}
footer.site ul{max-width:500px;min-width:320px;margin:0 auto}
footer.site ul li{float:left;width:33.333333333%;margin:0;text-align:center}
footer.site ul li a{display:block;width:100%;height:44px;background-repeat:no-repeat;background-color:transparent;background-size:contain;background-position:50% 50%}
footer.site ul li#twitter a{background-image:url("../img/icn-twitter.png")}
footer.site ul li#github a{background-image:url("../img/icn-github.png")}
footer.site ul li#adobe a{background-image:url("../img/icn-adobe.png")}
.popover{position:relative;margin:0 auto;display:block;border:1px solid rgba(0,0,0,0.35);border-radius:5px;background:#dfe2e2;box-shadow:0 9px 18px 0 rgba(0,0,0,0.48),inset 0 0 0 1px rgba(255,255,255,0.75);width:200px}
.popover .arrow,.popover .top-arrow,.popover .bottom-arrow,.popover .left-arrow,.popover .right-arrow{position:absolute;top:0;width:30px;height:14px;background:-webkit-image-set(url("../img/popover_arrow.png") 1x,url("../img/popover_arrow@2x.png") 2x)}
.popover .top-arrow{top:0;left:47%;margin:-13px 0 0 0}
.popover .bottom-arrow{top:100%;left:47%;margin:-1px 0 0 0;-webkit-transform:rotate(180deg)}
.popover .left-arrow{top:40%;left:-21px;margin:0;-webkit-transform:rotate(-90deg)}
.popover .right-arrow{top:38%;left:97%;margin:0;-webkit-transform:rotate(90deg)}
.popover .content{padding:15px}
@media screen and (max-width: 1000px) and (min-width: 522px){nav.main{position:relative}
nav.main ul{margin:0 auto;position:relative;text-align:center;height:auto}
header.main{text-align:center}
nav.main ul li{display:inline-block;margin:0 25px;float:none}
nav.main ul li.download{display:none}
#hero{margin:10px 0 40px}
}@media screen and (max-width: 550px){body{padding-bottom:0}
#wrapper{padding:0;width:100%;overflow-x:hidden}
#site{background:#fff;top:0;left:0;padding:40px 0 0;width:100%;position:relative;z-index:10;transition:all .2s ease-out;-webkit-transition:all .2s ease-out;transform:translate3d(0,0,0);-webkit-transform:translate3d(0,0,0)}
#site.open{transform:translate3d(250px,0,0);-webkit-transform:translate3d(250px,0,0)}
header.main{text-align:center;}
header.main h1,header.main p{display:block}
header.main h1{font-size:1.4em}
#hero{height:205px;background:transparent url("../img/hero-mobile.png") right 50% no-repeat;background-size:490px 205px;margin:40px 0;padding:0}
#hero ul li{height:205px}
#hero ul li#desktop-preview{width:66%}
#hero ul li#mobile-preview{width:34%}
nav.main,.git-ribbon,#hero ul li .popover{display:none}
.features ul li h3{line-height:1.2em;margin:0}
.features ul li{display:block;float:none;width:100%;clear:left;padding:20px}
.features ul li p{padding:0;width:60%;float:left;margin-bottom:55px}
.features ul li a.vignette{width:80px;height:80px}
#slide-menu-button{position:absolute;top:0;left:10px;display:inline-block;vertical-align:top;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;-webkit-background-clip:padding;-moz-background-clip:padding;background-clip:padding-box;padding:0;margin:0;font:inherit;color:inherit;background:transparent;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-o-text-overflow:ellipsis;text-overflow:ellipsis;white-space:nowrap;overflow:hidden;padding:0 .5rem;line-height:2rem;letter-spacing:1px;color:#454545;text-shadow:0 1px #fff;vertical-align:baseline;-webkit-box-shadow:inset 0 1px #fff;box-shadow:inset 0 1px #fff;-webkit-border-radius:3px;border-radius:3px;width:2.6rem;height:2.6rem;line-height:2.6rem;border:1px solid transparent;-webkit-box-shadow:none;box-shadow:none;}
#slide-menu-button:disabled,#slide-menu-button.is-disabled{opacity:.3;cursor:default;pointer-events:none}
#slide-menu-button:active,#slide-menu-button.is-active{color:#454545;text-shadow:0 1px #fff;background-color:#d3d7d7;border:1px solid #a5a8a8;-webkit-box-shadow:inset 0 1px rgba(0,0,0,0.12);box-shadow:inset 0 1px rgba(0,0,0,0.12)}
#slide-menu-button span{background-repeat:no-repeat;background-image:url("../img/listview_icon.svg");position:relative;top:-2px;display:inline-block;vertical-align:top;overflow:hidden;vertical-align:middle;width:24px;height:24px}
#side-nav{display:block;background:#4a4d4e;position:fixed;width:100%;z-index:1;height:100%;left:0;top:0;}
#side-nav ul{list-style:none;margin:0;padding:0}
#side-nav li a{color:#f0f1f1;display:block;height:46px;font-size:16px;-moz-box-sizing:border-box;box-sizing:border-box;padding:12px 0 0 20px;text-decoration:none}
#side-nav nav.site,#side-nav #sideNav .combo{border-bottom:1px solid #58595a;-moz-box-sizing:border-box;box-sizing:border-box;padding:10px;display:block}
footer.site ul{text-align:center}
footer.site ul li{display:inline-block;margin:0;text-align:center;float:none;width:85px;height:85px}
}section#content{margin-top:80px;}
section#content article{font-size:18px;font-weight:200;line-height:180%;border-bottom:1px solid #eaeaea;max-width:940px;box-sizing:border-box;padding:0 60px 50px;margin-bottom:40px;}
section#content article img{width:100%;height:auto}
section#content article footer{float:none;clear:both;height:auto}
section#content article h2{font-weight:100;font-size:37px;letter-spacing:-2px;margin-bottom:28px;}
section#content article h2 a{color:#373435}
section#content article p{margin:20px 0}
section#content article .published{font-size:16px;color:#a7a7a7}
#disqus_thread{box-sizing:border-box;padding:0 20px 60px;width:100%}
iframe.video{max-width:480px;width:100%;position:relative;margin:20px auto;height:360px;display:block}
@media screen and (max-width: 522px){section#content article{padding:0 30px 30px}
}#content.narrow{max-width:500px}
label.control-label{display:inline-block;width:120px;text-align:right;margin-right:10px}
.control-group{margin-bottom:10px}
.control-group.submit{margin:20px 132px 0}
form{border:1px solid #ccc;padding:10px}
.error label{color:#f00;font-weight:bold}
#required{padding-bottom:5px;color:#f00;font-weight:bold}
.clearfix:before,.clearfix:after{content:" ";display:table}
.clearfix:after{clear:both}
.clearfix{*zoom:1}</style><script type="text/javascript">window.onload=function(){var a=document.getElementById("slide-menu-button");a.onclick=function(d){var c=document.getElementById("site");var b=c.classList;if(b.contains("open")){b.remove("open")}else{b.add("open")}}};</script></head><body><div id="wrapper"><div id="side-nav"><nav class="site"><ul><li class="selected"><a href="https://notetoservices.com">Home</a></li><li><a href="https://notetoservices.com">Blog</a></li></ul></nav></div><div id="site"><header class="main"><h1><a href="/">NoteToServices</a></h1><p>Simple SaaS Apps.</p><nav class="main"><ul><li><a href="https://notetoservices.com">Home</a></li><li><a href="https://notetoservices.com">Blog</a></li><li>
<li class="download"><a href="https://github.com/topcoat/topcoat/archive/v0.8.0.zip" onClick="_gaq.push(['_trackEvent', 'download', 'click',,, false]);" class="topcoat-button--cta">Download</a></li></ul></nav><button id="slide-menu-button" href="#" class="topcoat-icon-button--large--quiet"><span class="topcoat-icon--large topcoat-icon-meun-stack"></span></button></header><section id="hero"><ul><li id="desktop-preview"></li><li id="mobile-preview"></li></ul></section><section class="features"><ul><li id="performance" class="clearfix"><a class="vignette"></a><h3>Soooo Fast!</h3><p>Performance is our #1 goal. Every component we design is <a href="http://bench.topcoat.io">benchmarked for performance</a>. You can see our results.</p></li><li id="components"><a class="vignette clearfix"></a><h3>Components Galore</h3><p>We have the building blocks to get you up and running fast. Our growing set of components were born from CSS.</p></li><li id="themes"><a class="vignette"></a><h3>Themeable</h3><p>Is that even a word? It should be! We love our theme, but we don’t want to hit your brand over the head with it. Just add colors and voila!</p></li><li id="bem"><a class="vignette"></a><h3>BEM Architecture</h3><p>We believe CSS is ready for primetime. We are basing our <a href="http://bem.info/method/">architecture on BEM</a> make your apps faster, less contextual and easier to manage.</p></li><li id="source-sans"><a class="vignette"></a><h3>Even our font is open source</h3><p>The first open source font family contribution from Adobe, Source Sans Pro. It is served on <a href="https://edgewebfonts.adobe.com/fonts#/?nameFilter=source&collection=source-sans-pro">Adobe Edge Web Fonts</a> and <a href="https://typekit.com/fonts/source-sans-pro">Adobe Typekit</a>.</p></li><li id="icons"><a class="vignette"></a><h3>Icons how you want them</h3><p>We created over <a href="https://github.com/topcoat/icons">100 icons to go with Topcoat</a>.  You can use them as SVG, PNG or semantic icon font. And yes, they are also open source.</p></li><li id="design"><a class="vignette"></a><h3>Design with Topcoat</h3><p>Even though Topcoat was designed in code. We are <a href="https://github.com/topcoat/design">including a PSD</a> with all the components on our code base.</p></li><li id="cdnjs"><a class="vignette"></a><h3>CDN Resources</h3><p>If you prefer to use a CDN to distribute your Topcoat assets then check out the <a href="http://cdnjs.com/libraries/topcoat/">Topcoat</a> and <a href="http://cdnjs.com/libraries/topcoat-icons/">Topcoat Icons</a> distributions on cdnjs.</p></li></ul><div style="clear:both;"></div></section><footer class="site"><ul><li id="twitter"><a href="http://twitter.com/OneTruConscious"></a></li><li id="github"><a href="http://xarex.github.io"></a></li><li id="adobe"><a href="http://html.adobe.com"></a></li></ul></footer></div></div>

<script type="text/javascript">// Add a script element as a child of the body
function downloadJSAtOnload() {
    var edgewebfontselement = document.createElement("script");
    edgewebfontselement.src = "//use.edgefonts.net/source-sans-pro.js";
    edgewebfontselement.type = "text/javascript";
    document.body.appendChild(edgewebfontselement);
}
</body></html>
