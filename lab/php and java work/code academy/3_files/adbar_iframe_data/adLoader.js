(function(){"use strict";function i(i){var r={success:!1,errorText:i||"Exception",reqTime:n};window.parent.postMessage(JSON.stringify(r),t)}function o(i,u){var e,o,s="",h={success:!0,payload:i,rtt:u,reqTime:n},f;window.parent.postMessage(JSON.stringify(h),t);if(i&&i.ad){f=i.ad;for(e in f)f.hasOwnProperty(e)&&e.lastIndexOf("tpt_script",0)===0&&(o=f[e].u,r(o)&&(s+="<script type='text/javascript' src='"+o+"'><\/script>"));s&&document.write(s)}}function u(n){for(var u={},r=n.split(";"),i,t=0;t<r.length;t++)i=r[t].split(":="),i.length===2&&(u[i[0]]=decodeURIComponent(i[1]));return u}function r(n){return e.test(n)?!0:!1}function f(){var f,e,a,y,v=!1,l=!1,h=u(window.location.hash.slice(1)),c=h.pu,p=h.t,s;t=h.o,n=h.rt;if(!r(c)){i();return}window.GETADR=function(n){v=!0,e&&clearTimeout(e),y=new Date,o(n,y-a)},e=window.setTimeout(function(){window.GETADR=function(){},f&&f.parentNode&&f.parentNode.removeChild(f),l=!0,clearTimeout(e),i("timeout")},parseInt(p)),a=new Date,c+="&_="+a.getTime(),document.write("<script type='text/javascript' id='payloadScript' src='"+c+"'><\/script>"),f=document.getElementById("payloadScript"),s=function(){if(v)return;if(l)return;clearTimeout(e);var i={success:!0,reqTime:n,payload:{tp:!0}};window.parent.postMessage(JSON.stringify(i),t)},window.addEventListener?f.addEventListener("load",s,!1):window.attachEvent?f.attachEvent("onreadystatechange",function(){/loaded|complete/.test(f.readyState)&&(s(),f.detachEvent("onreadystatechange"))}):window.onload&&(f.onload=s),f.onerror=function(){if(l)return;clearTimeout(e),i()}}var t,n="",s,e=/^https:(\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?((\[(|(v[\da-f]{1,}\.(([a-z]|\d|-|\.|_|~)|[!\$&'\(\)\*\+,;=]|:)+))\])|((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=])*)(:\d*)?)(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*|(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)|((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)){0})(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;window.ORMMA={request:function(n){typeof n=="string"&&document.write("<img src='"+n+"' width='1' height='1' />")}},f()})()