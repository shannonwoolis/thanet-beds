this.wc=this.wc||{},this.wc.blocks=this.wc.blocks||{},this.wc.blocks["products-by-attribute"]=function(e){function t(t){for(var n,i,l=t[0],u=t[1],a=t[2],b=0,d=[];b<l.length;b++)i=l[b],Object.prototype.hasOwnProperty.call(c,i)&&c[i]&&d.push(c[i][0]),c[i]=0;for(n in u)Object.prototype.hasOwnProperty.call(u,n)&&(e[n]=u[n]);for(s&&s(t);d.length;)d.shift()();return o.push.apply(o,a||[]),r()}function r(){for(var e,t=0;t<o.length;t++){for(var r=o[t],n=!0,l=1;l<r.length;l++){var u=r[l];0!==c[u]&&(n=!1)}n&&(o.splice(t--,1),e=i(i.s=r[0]))}return e}var n={},c={35:0},o=[];function i(t){if(n[t])return n[t].exports;var r=n[t]={i:t,l:!1,exports:{}};return e[t].call(r.exports,r,r.exports,i),r.l=!0,r.exports}i.m=e,i.c=n,i.d=function(e,t,r){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(i.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var n in e)i.d(r,n,function(t){return e[t]}.bind(null,n));return r},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="";var l=window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[],u=l.push.bind(l);l.push=t,l=l.slice();for(var a=0;a<l.length;a++)t(l[a]);var s=u;return o.push([754,0]),r()}({0:function(e,t){e.exports=window.wp.element},1:function(e,t){e.exports=window.wp.i18n},11:function(e,t){e.exports=window.React},113:function(e,t){},114:function(e,t){e.exports=window.wp.coreData},119:function(e,t,r){"use strict";var n=r(0),c=r(1),o=r(3);r(2),t.a=function(e){var t=e.value,r=e.setAttributes;return Object(n.createElement)(o.SelectControl,{label:Object(c.__)("Order products by","woo-gutenberg-products-block"),value:t,options:[{label:Object(c.__)("Newness - newest first","woo-gutenberg-products-block"),value:"date"},{label:Object(c.__)("Price - low to high","woo-gutenberg-products-block"),value:"price_asc"},{label:Object(c.__)("Price - high to low","woo-gutenberg-products-block"),value:"price_desc"},{label:Object(c.__)("Rating - highest first","woo-gutenberg-products-block"),value:"rating"},{label:Object(c.__)("Sales - most first","woo-gutenberg-products-block"),value:"popularity"},{label:Object(c.__)("Title - alphabetical","woo-gutenberg-products-block"),value:"title"},{label:Object(c.__)("Menu Order","woo-gutenberg-products-block"),value:"menu_order"}],onChange:function(e){return r({orderby:e})}})}},12:function(e,t){e.exports=window.wp.blockEditor},120:function(e,t,r){"use strict";var n=r(10),c=r.n(n),o=r(21),i=r.n(o),l=r(0),u=r(46),a=r(3),s=r(5),b=r.n(s),d=["className","item","isSelected","isLoading","onSelect","disabled"];t.a=function(e){var t=e.className,r=e.item,n=e.isSelected,o=e.isLoading,s=e.onSelect,p=e.disabled,g=i()(e,d);return Object(l.createElement)(l.Fragment,null,Object(l.createElement)(u.c,c()({},g,{key:r.id,className:t,isSelected:n,item:r,onSelect:s,isSingle:!0,disabled:p})),n&&o&&Object(l.createElement)("div",{key:"loading",className:b()("woocommerce-search-list__item","woocommerce-product-attributes__item","depth-1","is-loading","is-not-active")},Object(l.createElement)(a.Spinner,null)))}},14:function(e,t){e.exports=window.wp.data},15:function(e,t){e.exports=window.wp.apiFetch},172:function(e,t,r){"use strict";r.d(t,"a",(function(){return c}));var n=r(0),c=Object(n.createElement)("svg",{xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 230 250",style:{width:"100%"}},Object(n.createElement)("title",null,"Grid Block Preview"),Object(n.createElement)("rect",{width:"65.374",height:"65.374",x:".162",y:".779",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"47.266",height:"5.148",x:"9.216",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),Object(n.createElement)("rect",{width:"62.8",height:"15",x:"1.565",y:"101.448",fill:"#E1E3E6",rx:"5"}),Object(n.createElement)("rect",{width:"65.374",height:"65.374",x:".162",y:"136.277",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"47.266",height:"5.148",x:"9.216",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),Object(n.createElement)("rect",{width:"62.8",height:"15",x:"1.565",y:"236.946",fill:"#E1E3E6",rx:"5"}),Object(n.createElement)("rect",{width:"65.374",height:"65.374",x:"82.478",y:".779",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"47.266",height:"5.148",x:"91.532",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),Object(n.createElement)("rect",{width:"62.8",height:"15",x:"83.882",y:"101.448",fill:"#E1E3E6",rx:"5"}),Object(n.createElement)("rect",{width:"65.374",height:"65.374",x:"82.478",y:"136.277",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"47.266",height:"5.148",x:"91.532",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),Object(n.createElement)("rect",{width:"62.8",height:"15",x:"83.882",y:"236.946",fill:"#E1E3E6",rx:"5"}),Object(n.createElement)("rect",{width:"65.374",height:"65.374",x:"164.788",y:".779",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"47.266",height:"5.148",x:"173.843",y:"76.153",fill:"#E1E3E6",rx:"2.574"}),Object(n.createElement)("rect",{width:"62.8",height:"15",x:"166.192",y:"101.448",fill:"#E1E3E6",rx:"5"}),Object(n.createElement)("rect",{width:"65.374",height:"65.374",x:"164.788",y:"136.277",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"47.266",height:"5.148",x:"173.843",y:"211.651",fill:"#E1E3E6",rx:"2.574"}),Object(n.createElement)("rect",{width:"62.8",height:"15",x:"166.192",y:"236.946",fill:"#E1E3E6",rx:"5"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"13.283",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"21.498",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"29.713",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"37.927",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"46.238",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"95.599",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"103.814",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"112.029",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"120.243",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"128.554",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"177.909",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"186.124",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"194.339",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"202.553",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"210.864",y:"86.301",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"13.283",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"21.498",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"29.713",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"37.927",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"46.238",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"95.599",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"103.814",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"112.029",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"120.243",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"128.554",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"177.909",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"186.124",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"194.339",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"202.553",y:"221.798",fill:"#E1E3E6",rx:"3"}),Object(n.createElement)("rect",{width:"6.177",height:"6.177",x:"210.864",y:"221.798",fill:"#E1E3E6",rx:"3"}))},20:function(e,t){e.exports=window.wp.compose},22:function(e,t){e.exports=window.regeneratorRuntime},23:function(e,t){e.exports=window.wp.url},24:function(e,t){e.exports=window.wp.blocks},26:function(e,t){e.exports=window.wp.htmlEntities},27:function(e,t){e.exports=window.wp.primitives},28:function(e,t){e.exports=window.moment},3:function(e,t){e.exports=window.wp.components},35:function(e,t){e.exports=window.wp.dataControls},38:function(e,t,r){"use strict";r.d(t,"o",(function(){return o})),r.d(t,"m",(function(){return i})),r.d(t,"l",(function(){return l})),r.d(t,"n",(function(){return u})),r.d(t,"j",(function(){return a})),r.d(t,"e",(function(){return s})),r.d(t,"f",(function(){return b})),r.d(t,"g",(function(){return d})),r.d(t,"k",(function(){return p})),r.d(t,"c",(function(){return g})),r.d(t,"d",(function(){return f})),r.d(t,"h",(function(){return h})),r.d(t,"a",(function(){return O})),r.d(t,"i",(function(){return w})),r.d(t,"b",(function(){return m}));var n,c=r(4),o=Object(c.getSetting)("wcBlocksConfig",{buildPhase:1,pluginUrl:"",productCount:0,defaultAvatar:"",restApiRoutes:{},wordCountType:"words"}),i=o.pluginUrl+"images/",l=o.pluginUrl+"build/",u=o.buildPhase,a=null===(n=c.STORE_PAGES.shop)||void 0===n?void 0:n.permalink,s=c.STORE_PAGES.checkout.id,b=c.STORE_PAGES.checkout.permalink,d=c.STORE_PAGES.privacy.permalink,p=(c.STORE_PAGES.privacy.title,c.STORE_PAGES.terms.permalink),g=(c.STORE_PAGES.terms.title,c.STORE_PAGES.cart.id),f=c.STORE_PAGES.cart.permalink,h=(c.STORE_PAGES.myaccount.permalink?c.STORE_PAGES.myaccount.permalink:Object(c.getSetting)("wpLoginUrl","/wp-login.php"),Object(c.getSetting)("shippingCountries",{})),O=Object(c.getSetting)("allowedCountries",{}),w=Object(c.getSetting)("shippingStates",{}),m=Object(c.getSetting)("allowedStates",{})},39:function(e,t,r){"use strict";r.d(t,"h",(function(){return p})),r.d(t,"e",(function(){return g})),r.d(t,"b",(function(){return f})),r.d(t,"i",(function(){return h})),r.d(t,"f",(function(){return O})),r.d(t,"c",(function(){return w})),r.d(t,"d",(function(){return m})),r.d(t,"g",(function(){return E})),r.d(t,"a",(function(){return j}));var n=r(6),c=r.n(n),o=r(23),i=r(15),l=r.n(i),u=r(7),a=r(4),s=r(38);function b(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function d(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?b(Object(r),!0).forEach((function(t){c()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):b(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var p=function(e){var t=e.selected,r=void 0===t?[]:t,n=e.search,c=void 0===n?"":n,i=e.queryArgs,a=function(e){var t=e.selected,r=void 0===t?[]:t,n=e.search,c=void 0===n?"":n,i=e.queryArgs,l=void 0===i?{}:i,u=s.o.productCount>100,a={per_page:u?100:0,catalog_visibility:"any",search:c,orderby:"title",order:"asc"},b=[Object(o.addQueryArgs)("/wc/store/products",d(d({},a),l))];return u&&r.length&&b.push(Object(o.addQueryArgs)("/wc/store/products",{catalog_visibility:"any",include:r,per_page:0})),b}({selected:r,search:c,queryArgs:void 0===i?{}:i});return Promise.all(a.map((function(e){return l()({path:e})}))).then((function(e){return Object(u.uniqBy)(Object(u.flatten)(e),"id").map((function(e){return d(d({},e),{},{parent:0})}))})).catch((function(e){throw e}))},g=function(e){return l()({path:"/wc/store/products/".concat(e)})},f=function(){return l()({path:"wc/store/products/attributes"})},h=function(e){return l()({path:"wc/store/products/attributes/".concat(e,"/terms")})},O=function(e){var t=e.selected,r=function(e){var t=e.selected,r=void 0===t?[]:t,n=e.search,c=Object(a.getSetting)("limitTags",!1),i=[Object(o.addQueryArgs)("wc/store/products/tags",{per_page:c?100:0,orderby:c?"count":"name",order:c?"desc":"asc",search:n})];return c&&r.length&&i.push(Object(o.addQueryArgs)("wc/store/products/tags",{include:r})),i}({selected:void 0===t?[]:t,search:e.search});return Promise.all(r.map((function(e){return l()({path:e})}))).then((function(e){return Object(u.uniqBy)(Object(u.flatten)(e),"id")}))},w=function(e){return l()({path:Object(o.addQueryArgs)("wc/store/products/categories",d({per_page:0},e))})},m=function(e){return l()({path:"wc/store/products/categories/".concat(e)})},E=function(e){return l()({path:Object(o.addQueryArgs)("wc/store/products",{per_page:0,type:"variation",parent:e})})},j=function(e,t){if(!e.title.raw)return e.slug;var r=1===t.filter((function(t){return t.title.raw===e.title.raw})).length;return e.title.raw+(r?"":" - ".concat(e.slug))}},4:function(e,t){e.exports=window.wc.wcSettings},40:function(e,t,r){"use strict";r.d(t,"a",(function(){return u})),r.d(t,"b",(function(){return a}));var n=r(29),c=r.n(n),o=r(22),i=r.n(o),l=r(1),u=function(){var e=c()(i.a.mark((function e(t){var r;return i.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if("function"!=typeof t.json){e.next=11;break}return e.prev=1,e.next=4,t.json();case 4:return r=e.sent,e.abrupt("return",{message:r.message,type:r.type||"api"});case 8:return e.prev=8,e.t0=e.catch(1),e.abrupt("return",{message:e.t0.message,type:"general"});case 11:return e.abrupt("return",{message:t.message,type:t.type||"general"});case 12:case"end":return e.stop()}}),e,null,[[1,8]])})));return function(_x){return e.apply(this,arguments)}}(),a=function(e){if(e.data&&"rest_invalid_param"===e.code){var t=Object.values(e.data.params);if(t[0])return t[0]}return(null==e?void 0:e.message)||Object(l.__)("Something went wrong. Please contact us to get assistance.","woo-gutenberg-products-block")}},44:function(e,t){e.exports=window.wp.keycodes},45:function(e,t){e.exports=window.wp.escapeHtml},48:function(e,t,r){"use strict";var n=r(0),c=r(1),o=(r(2),r(45));t.a=function(e){var t,r,i,l=e.error;return Object(n.createElement)("div",{className:"wc-block-error-message"},(r=(t=l).message,i=t.type,r?"general"===i?Object(n.createElement)("span",null,Object(c.__)("The following error was returned","woo-gutenberg-products-block"),Object(n.createElement)("br",null),Object(n.createElement)("code",null,Object(o.escapeHTML)(r))):"api"===i?Object(n.createElement)("span",null,Object(c.__)("The following error was returned from the API","woo-gutenberg-products-block"),Object(n.createElement)("br",null),Object(n.createElement)("code",null,Object(o.escapeHTML)(r))):r:Object(c.__)("An unknown error occurred which prevented the block from being updated.","woo-gutenberg-products-block")))}},51:function(e,t){e.exports=window.wp.hooks},57:function(e,t){e.exports=window.wp.deprecated},62:function(e,t,r){"use strict";var n=r(6),c=r.n(n),o=r(21),i=r.n(o),l=r(0),u=["srcElement","size"];function a(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}t.a=function(e){var t=e.srcElement,r=e.size,n=void 0===r?24:r,o=i()(e,u);return Object(l.isValidElement)(t)?Object(l.cloneElement)(t,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?a(Object(r),!0).forEach((function(t){c()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({width:n,height:n},o)):null}},7:function(e,t){e.exports=window.lodash},70:function(e,t){e.exports=window.wp.dom},754:function(e,t,r){e.exports=r(855)},755:function(e,t){},756:function(e,t){},79:function(e,t){e.exports=window.wp.serverSideRender},82:function(e,t){e.exports=window.ReactDOM},85:function(e,t){e.exports=window.wp.viewport},855:function(e,t,r){"use strict";r.r(t);var n=r(0),c=r(1),o=r(62),i=r(27),l=Object(n.createElement)(i.SVG,{xmlns:"http://www.w3.org/2000/SVG",viewBox:"0 0 24 24"},Object(n.createElement)("path",{fill:"none",d:"M0 0h24v24H0V0z"}),Object(n.createElement)("path",{d:"M2.53 19.65l1.34.56v-9.03l-2.43 5.86c-.41 1.02.08 2.19 1.09 2.61zm19.5-3.7L17.07 3.98c-.31-.75-1.04-1.21-1.81-1.23-.26 0-.53.04-.79.15L7.1 5.95c-.75.31-1.21 1.03-1.23 1.8-.01.27.04.54.15.8l4.96 11.97c.31.76 1.05 1.22 1.83 1.23.26 0 .52-.05.77-.15l7.36-3.05c1.02-.42 1.51-1.59 1.09-2.6zm-9.2 3.8L7.87 7.79l7.35-3.04h.01l4.95 11.95-7.35 3.05z"}),Object(n.createElement)("circle",{cx:"11",cy:"9",r:"1"}),Object(n.createElement)("path",{d:"M5.88 19.75c0 1.1.9 2 2 2h1.45l-3.45-8.34v6.34z"})),u=r(24),a=r(4),s=(r(755),r(16)),b=r.n(s),d=r(17),p=r.n(d),g=r(18),f=r.n(g),h=r(19),O=r.n(h),w=r(9),m=r.n(w),E=r(12),j=r(79),y=r.n(j),v=r(3),_=(r(2),r(86)),x=r(87),k=r(34),P=r.n(k),S=r(10),C=r.n(S),A=r(46),R=r(20),T=r(29),B=r.n(T),D=r(6),L=r.n(D),M=r(8),N=r.n(M),G=r(22),I=r.n(G),$=r(39),z=r(40);function F(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function V(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?F(Object(r),!0).forEach((function(t){L()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):F(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}var Q=function(e,t){var r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"id";return Array.isArray(t)?t.find((function(t){return t[r]===e})):null},q=r(48),H=r(5),U=r.n(H),W=r(120),J=(r(756),function(e){var t=e.attributes,r=e.error,o=e.expandedAttribute,i=e.onChange,l=e.onExpandAttribute,u=e.onOperatorChange,a=e.instanceId,s=e.isCompact,b=e.isLoading,d=e.operator,p=e.selected,g=e.termsAreLoading,f=e.termsList[o]||[],h=[].concat(P()(t),P()(f)),O={clear:Object(c.__)("Clear all product attributes","woo-gutenberg-products-block"),list:Object(c.__)("Product Attributes","woo-gutenberg-products-block"),noItems:Object(c.__)("Your store doesn't have any product attributes.","woo-gutenberg-products-block"),search:Object(c.__)("Search for product attributes","woo-gutenberg-products-block"),selected:function(e){return Object(c.sprintf)(
/* translators: %d is the count of attributes selected. */
Object(c._n)("%d attribute selected","%d attributes selected",e,"woo-gutenberg-products-block"),e)},updated:Object(c.__)("Product attribute search results updated.","woo-gutenberg-products-block")};return r?Object(n.createElement)(q.a,{error:r}):Object(n.createElement)(n.Fragment,null,Object(n.createElement)(A.b,{className:"woocommerce-product-attributes",list:h,isLoading:b,selected:p.map((function(e){var t=e.id;return h.find((function(e){return e.id===t}))})).filter(Boolean),onChange:i,renderItem:function(e){var t=e.item,r=e.search,u=e.depth,s=void 0===u?0:u,b=["woocommerce-product-attributes__item","woocommerce-search-list__item",{"is-searching":r.length>0,"is-skip-level":0===s&&0!==t.parent}];if(!t.breadcrumbs.length){var d=o===t.id;return Object(n.createElement)(W.a,C()({},e,{className:U.a.apply(void 0,b.concat([{"is-selected":d}])),isSelected:d,item:t,isLoading:g,disabled:"0"===t.count,onSelect:function(e){var t=e.id;return function(){i([]),l(t)}},name:"attributes-".concat(a),countLabel:Object(c.sprintf)(
/* translators: %d is the count of terms. */
Object(c._n)("%d term","%d terms",t.count,"woo-gutenberg-products-block"),t.count),"aria-label":Object(c.sprintf)(
/* translators: %1$s is the item name, %2$d is the count of terms for the item. */
Object(c._n)("%1$s, has %2$d term","%1$s, has %2$d terms",t.count,"woo-gutenberg-products-block"),t.name,t.count)}))}var p="".concat(t.breadcrumbs[0],": ").concat(t.name);return Object(n.createElement)(A.c,C()({},e,{name:"terms-".concat(a),className:U.a.apply(void 0,b.concat(["has-count"])),countLabel:Object(c.sprintf)(
/* translators: %d is the count of products. */
Object(c._n)("%d product","%d products",t.count,"woo-gutenberg-products-block"),t.count),"aria-label":Object(c.sprintf)(
/* translators: %1$s is the attribute name, %2$d is the count of products for that attribute. */
Object(c._n)("%1$s, has %2$d product","%1$s, has %2$d products",t.count,"woo-gutenberg-products-block"),p,t.count)}))},messages:O,isCompact:s,isHierarchical:!0}),!!u&&Object(n.createElement)("div",{hidden:p.length<2},Object(n.createElement)(v.SelectControl,{className:"woocommerce-product-attributes__operator",label:Object(c.__)("Display products matching","woo-gutenberg-products-block"),help:Object(c.__)("Pick at least two attributes to use this setting.","woo-gutenberg-products-block"),value:d,onChange:u,options:[{label:Object(c.__)("Any selected attributes","woo-gutenberg-products-block"),value:"any"},{label:Object(c.__)("All selected attributes","woo-gutenberg-products-block"),value:"all"}]})))});J.defaultProps={isCompact:!1,operator:"any"};var Y,K=(Y=Object(R.withInstanceId)(J),function(e){var t=e.selected,r=void 0===t?[]:t,c=r.length?r[0].attr_slug:null,o=Object(n.useState)(null),i=N()(o,2),l=i[0],u=i[1],a=Object(n.useState)(0),s=N()(a,2),b=s[0],d=s[1],p=Object(n.useState)({}),g=N()(p,2),f=g[0],h=g[1],O=Object(n.useState)(!0),w=N()(O,2),m=w[0],E=w[1],j=Object(n.useState)(!1),y=N()(j,2),v=y[0],_=y[1],x=Object(n.useState)(null),k=N()(x,2),P=k[0],S=k[1];return Object(n.useEffect)((function(){null===l&&Object($.b)().then((function(e){if(e=e.map((function(e){return V(V({},e),{},{parent:0})})),u(e),c){var t=Q(c,e,"taxonomy");t&&d(t.id)}})).catch(function(){var e=B()(I.a.mark((function e(t){return I.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.t0=S,e.next=3,Object(z.a)(t);case 3:e.t1=e.sent,(0,e.t0)(e.t1);case 5:case"end":return e.stop()}}),e)})));return function(_x){return e.apply(this,arguments)}}()).finally((function(){E(!1)}))}),[l,c]),Object(n.useEffect)((function(){var e=Q(b,l);e&&(_(!0),Object($.i)(b).then((function(t){t=t.map((function(t){return V(V({},t),{},{parent:b,attr_slug:e.taxonomy})})),h((function(e){return V(V({},e),{},L()({},b,t))}))})).catch(function(){var e=B()(I.a.mark((function e(t){return I.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.t0=S,e.next=3,Object(z.a)(t);case 3:e.t1=e.sent,(0,e.t0)(e.t1);case 5:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}()).finally((function(){_(!1)})))}),[b,l]),Object(n.createElement)(Y,C()({},e,{attributes:l||[],error:P,expandedAttribute:b,onExpandAttribute:d,isLoading:m,termsAreLoading:v,termsList:f}))}),X=r(119),Z=r(172);var ee=function(e){f()(u,e);var t,r,i=(t=u,r=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(e){return!1}}(),function(){var e,n=m()(t);if(r){var c=m()(this).constructor;e=Reflect.construct(n,arguments,c)}else e=n.apply(this,arguments);return O()(this,e)});function u(){return b()(this,u),i.apply(this,arguments)}return p()(u,[{key:"getInspectorControls",value:function(){var e=this.props.setAttributes,t=this.props.attributes,r=t.attributes,o=t.attrOperator,i=t.columns,l=t.contentVisibility,u=t.orderby,s=t.rows,b=t.alignButtons;return Object(n.createElement)(E.InspectorControls,{key:"inspector"},Object(n.createElement)(v.PanelBody,{title:Object(c.__)("Layout","woo-gutenberg-products-block"),initialOpen:!0},Object(n.createElement)(x.a,{columns:i,rows:s,alignButtons:b,setAttributes:e,minColumns:Object(a.getSetting)("min_columns",1),maxColumns:Object(a.getSetting)("max_columns",6),minRows:Object(a.getSetting)("min_rows",1),maxRows:Object(a.getSetting)("max_rows",6)})),Object(n.createElement)(v.PanelBody,{title:Object(c.__)("Content","woo-gutenberg-products-block"),initialOpen:!0},Object(n.createElement)(_.a,{settings:l,onChange:function(t){return e({contentVisibility:t})}})),Object(n.createElement)(v.PanelBody,{title:Object(c.__)("Filter by Product Attribute","woo-gutenberg-products-block"),initialOpen:!1},Object(n.createElement)(K,{selected:r,onChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],r=t.map((function(e){return{id:e.id,attr_slug:e.attr_slug}}));e({attributes:r})},operator:o,onOperatorChange:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any";return e({attrOperator:t})},isCompact:!0})),Object(n.createElement)(v.PanelBody,{title:Object(c.__)("Order By","woo-gutenberg-products-block"),initialOpen:!1},Object(n.createElement)(X.a,{setAttributes:e,value:u})))}},{key:"renderEditMode",value:function(){var e=this.props,t=e.debouncedSpeak,r=e.setAttributes,i=this.props.attributes;return Object(n.createElement)(v.Placeholder,{icon:Object(n.createElement)(o.a,{srcElement:l}),label:Object(c.__)("Products by Attribute","woo-gutenberg-products-block"),className:"wc-block-products-grid wc-block-products-by-attribute"},Object(c.__)("Display a grid of products from your selected attributes.","woo-gutenberg-products-block"),Object(n.createElement)("div",{className:"wc-block-products-by-attribute__selection"},Object(n.createElement)(K,{selected:i.attributes,onChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[],t=e.map((function(e){return{id:e.id,attr_slug:e.attr_slug}}));r({attributes:t})},operator:i.attrOperator,onOperatorChange:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"any";return r({attrOperator:e})}}),Object(n.createElement)(v.Button,{isPrimary:!0,onClick:function(){r({editMode:!1}),t(Object(c.__)("Showing Products by Attribute block preview.","woo-gutenberg-products-block"))}},Object(c.__)("Done","woo-gutenberg-products-block"))))}},{key:"render",value:function(){var e=this.props,t=e.attributes,r=e.name,o=e.setAttributes,i=t.editMode;return t.isPreview?Z.a:Object(n.createElement)(n.Fragment,null,Object(n.createElement)(E.BlockControls,null,Object(n.createElement)(v.ToolbarGroup,{controls:[{icon:"edit",title:Object(c.__)("Edit selected attribute","woo-gutenberg-products-block"),onClick:function(){return o({editMode:!i})},isActive:i}]})),this.getInspectorControls(),i?this.renderEditMode():Object(n.createElement)(v.Disabled,null,Object(n.createElement)(y.a,{block:r,attributes:t})))}}]),u}(n.Component),te=Object(v.withSpokenMessages)(ee);Object(u.registerBlockType)("woocommerce/products-by-attribute",{title:Object(c.__)("Products by Attribute","woo-gutenberg-products-block"),icon:{src:Object(n.createElement)(o.a,{srcElement:l}),foreground:"#7f54b3"},category:"woocommerce",keywords:[Object(c.__)("WooCommerce","woo-gutenberg-products-block")],description:Object(c.__)("Display a grid of products with selected attributes.","woo-gutenberg-products-block"),supports:{align:["wide","full"],html:!1},example:{attributes:{isPreview:!0}},attributes:{attributes:{type:"array",default:[]},attrOperator:{type:"string",default:"any"},columns:{type:"number",default:Object(a.getSetting)("default_columns",3)},editMode:{type:"boolean",default:!0},contentVisibility:{type:"object",default:{title:!0,price:!0,rating:!0,button:!0}},orderby:{type:"string",default:"date"},rows:{type:"number",default:Object(a.getSetting)("default_rows",3)},alignButtons:{type:"boolean",default:!1},isPreview:{type:"boolean",default:!1}},edit:function(e){return Object(n.createElement)(te,e)},save:function(){return null}})},86:function(e,t,r){"use strict";var n=r(6),c=r.n(n),o=r(0),i=r(1),l=(r(2),r(3));function u(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function a(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?u(Object(r),!0).forEach((function(t){c()(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):u(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}t.a=function(e){var t=e.onChange,r=e.settings,n=r.button,c=r.price,u=r.rating,s=r.title;return Object(o.createElement)(o.Fragment,null,Object(o.createElement)(l.ToggleControl,{label:Object(i.__)("Product title","woo-gutenberg-products-block"),help:s?Object(i.__)("Product title is visible.","woo-gutenberg-products-block"):Object(i.__)("Product title is hidden.","woo-gutenberg-products-block"),checked:s,onChange:function(){return t(a(a({},r),{},{title:!s}))}}),Object(o.createElement)(l.ToggleControl,{label:Object(i.__)("Product price","woo-gutenberg-products-block"),help:c?Object(i.__)("Product price is visible.","woo-gutenberg-products-block"):Object(i.__)("Product price is hidden.","woo-gutenberg-products-block"),checked:c,onChange:function(){return t(a(a({},r),{},{price:!c}))}}),Object(o.createElement)(l.ToggleControl,{label:Object(i.__)("Product rating","woo-gutenberg-products-block"),help:u?Object(i.__)("Product rating is visible.","woo-gutenberg-products-block"):Object(i.__)("Product rating is hidden.","woo-gutenberg-products-block"),checked:u,onChange:function(){return t(a(a({},r),{},{rating:!u}))}}),Object(o.createElement)(l.ToggleControl,{label:Object(i.__)("Add to Cart button","woo-gutenberg-products-block"),help:n?Object(i.__)("Add to Cart button is visible.","woo-gutenberg-products-block"):Object(i.__)("Add to Cart button is hidden.","woo-gutenberg-products-block"),checked:n,onChange:function(){return t(a(a({},r),{},{button:!n}))}}))}},87:function(e,t,r){"use strict";var n=r(0),c=r(1),o=r(7),i=(r(2),r(3));t.a=function(e){var t=e.columns,r=e.rows,l=e.setAttributes,u=e.alignButtons,a=e.minColumns,s=void 0===a?1:a,b=e.maxColumns,d=void 0===b?6:b,p=e.minRows,g=void 0===p?1:p,f=e.maxRows,h=void 0===f?6:f;return Object(n.createElement)(n.Fragment,null,Object(n.createElement)(i.RangeControl,{label:Object(c.__)("Columns","woo-gutenberg-products-block"),value:t,onChange:function(e){var t=Object(o.clamp)(e,s,d);l({columns:Number.isNaN(t)?"":t})},min:s,max:d}),Object(n.createElement)(i.RangeControl,{label:Object(c.__)("Rows","woo-gutenberg-products-block"),value:r,onChange:function(e){var t=Object(o.clamp)(e,g,h);l({rows:Number.isNaN(t)?"":t})},min:g,max:h}),Object(n.createElement)(i.ToggleControl,{label:Object(c.__)("Align Last Block","woo-gutenberg-products-block"),help:u?Object(c.__)("The last inner block will be aligned vertically.","woo-gutenberg-products-block"):Object(c.__)("The last inner block will follow other content.","woo-gutenberg-products-block"),checked:u,onChange:function(){return l({alignButtons:!u})}}))}},91:function(e,t){e.exports=window.wp.date}});