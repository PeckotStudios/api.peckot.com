(self.webpackChunkblessing_skin_server=self.webpackChunkblessing_skin_server||[]).push([[414],{1570:function(e,t){t.w=function(e){return e}},5897:function(e,t,i){"use strict";var a=i(5944),s=i(7294),n=i(917),c=i(88);const l=n.iv`
  ::after {
    display: none;
  }
`;t.Z=e=>{var t;const i=(0,s.useRef)(null);return(0,a.BX)("div",Object.assign({className:"form-group"},{children:[(0,a.tZ)("label",Object.assign({htmlFor:"select-file"},{children:(0,c.t)("skinlib.upload.select-file")}),void 0),(0,a.BX)("div",Object.assign({className:"input-group"},{children:[(0,a.BX)("div",Object.assign({className:"custom-file"},{children:[(0,a.tZ)("input",{type:"file",className:"custom-file-input",id:"select-file",accept:e.accept,title:(0,c.t)("skinlib.upload.select-file"),ref:i,onChange:e.onChange},void 0),(0,a.tZ)("label",Object.assign({className:"custom-file-label",css:l},{children:null===(t=e.file)||void 0===t?void 0:t.name}),void 0)]}),void 0),(0,a.tZ)("div",Object.assign({className:"input-group-append"},{children:(0,a.tZ)("button",Object.assign({className:"btn btn-default",onClick:()=>{i.current.click()}},{children:(0,c.t)("skinlib.upload.select-file")}),void 0)}),void 0)]}),void 0)]}),void 0)}},6309:function(e,t,i){"use strict";var a=i(5893),s=(i(7294),i(88));t.Z=()=>(0,a.jsxs)("div",Object.assign({className:"card"},{children:[(0,a.jsx)("div",Object.assign({className:"card-header"},{children:(0,a.jsx)("div",Object.assign({className:"d-flex justify-content-between"},{children:(0,a.jsx)("h3",Object.assign({className:"card-title"},{children:(0,a.jsx)("span",{children:(0,s.t)("general.texturePreview")},void 0)}),void 0)}),void 0)}),void 0),(0,a.jsx)("div",{className:"card-body"},void 0)]}),void 0)},9341:function(e,t,i){"use strict";i.d(t,{Z:function(){return s}});var a=i(7294);function s(e,t){const[i,s]=(0,a.useState)(t);return(0,a.useEffect)((()=>{s(blessing.extra[e])}),[e]),i}},9018:function(e,t,i){"use strict";i.d(t,{Z:function(){return n}});var a=i(7294),s=i(3601);function n(){(0,a.useEffect)((()=>{(0,s.j)("mounted")}),[])}},9683:function(e,t,i){"use strict";i.d(t,{Z:function(){return s}});var a=i(7294);function s(e){const t=(0,a.useRef)(null);return(0,a.useEffect)((()=>{const i=document.querySelector(e),a=document.createElement("div");return t.current=a,i.appendChild(a),()=>{i.removeChild(a),t.current=null}}),[e]),t.current}},7109:function(e,t,i){"use strict";var a,s;i.d(t,{P:function(){return a},N:function(){return s}}),function(e){e[e.Banned=-1]="Banned",e[e.Normal=0]="Normal",e[e.Admin=1]="Admin",e[e.SuperAdmin=2]="SuperAdmin"}(a||(a={})),function(e){e.Steve="steve",e.Alex="alex",e.Cape="cape"}(s||(s={}))},5414:function(e,t,i){"use strict";i.r(t),i.d(t,{default:function(){return N}});var a=i(5893),s=i(7294),n=i(9060),c=i(1570),l=i(88),r=i(9341),o=i(9018),d=i(9683),u=i(6703),v=i(2065);function m(e){return e/64}function h(e,t,i){const a=e.getImageData(t,i,1,1);return 0===a.data[0]&&0===a.data[1]&&0===a.data[2]}function f(e){return new Promise((t=>{const i=new Image;i.src=e,i.onload=()=>{if(i.width!==i.height)return void t(!1);const e=document.createElement("canvas");!function(e,t){let i=!1;if(t.width!==t.height){if(t.width!==2*t.height)throw new Error(`Bad skin size: ${t.width}x${t.height}`);i=!0}const a=e.getContext("2d");if(i){const i=t.width;e.width=i,e.height=i,a.clearRect(0,0,i,i),a.drawImage(t,0,0,i,i/2),function(e,t){const i=m(t),a=(t,a,s,n,c,l,r)=>function(e,t,i,a,s,n,c,l){const r=e.getImageData(t,i,a,s);if(l)for(let e=0;e<s;e++)for(let t=0;t<a/2;t++){const i=4*(t+e*a),s=4*(a-t-1+e*a),n=r.data[i],c=r.data[i+1],l=r.data[i+2],o=r.data[i+3],d=r.data[s],u=r.data[s+1],v=r.data[s+2],m=r.data[s+3];r.data[i]=d,r.data[i+1]=u,r.data[i+2]=v,r.data[i+3]=m,r.data[s]=n,r.data[s+1]=c,r.data[s+2]=l,r.data[s+3]=o}e.putImageData(r,n,c)}(e,t*i,a*i,s*i,n*i,c*i,l*i,r);!function(e,t){if(!function(e,t,i,a,s){const n=e.getImageData(t,i,a,s);for(let e=0;e<a;e++)for(let t=0;t<s;t++){const i=4*(e+t*a);if(255!==n.data[i+3])return!0}return!1}(e,0,0,t,t/2)){const i=m(t),a=(t,a,s,n)=>e.clearRect(t*i,a*i,s*i,n*i);a(40,0,8,8),a(48,0,8,8),a(32,8,8,8),a(40,8,8,8),a(48,8,8,8),a(56,8,8,8)}}(e,t),a(4,16,4,4,20,48,!0),a(8,16,4,4,24,48,!0),a(0,20,4,12,24,52,!0),a(4,20,4,12,20,52,!0),a(8,20,4,12,16,52,!0),a(12,20,4,12,28,52,!0),a(44,16,4,4,36,48,!0),a(48,16,4,4,40,48,!0),a(40,20,4,12,40,52,!0),a(44,20,4,12,36,52,!0),a(48,20,4,12,32,52,!0),a(52,20,4,12,44,52,!0)}(a,i)}else e.width=t.width,e.height=t.height,a.clearRect(0,0,t.width,t.height),a.drawImage(t,0,0,e.width,e.height)}(e,i);const a=e.width/64,s=e.getContext("2d");if(s){for(let e=46*a;e<48*a;e+=1)for(let i=52*a;i<64*a;i+=1)if(!h(s,e,i))return void t(!1);t(!0)}else t(!1)}}))}var p=i(7109),g=i(8848),b=i(5897),j=i(6309);const x=s.lazy((()=>Promise.all([i.e(786),i.e(16),i.e(613)]).then(i.bind(i,1997))));var N=(0,c.w)((()=>{var e;const[t,i]=(0,s.useState)(""),[c,m]=(0,s.useState)(p.N.Steve),[h,N]=(0,s.useState)(!1),[w,k]=(0,s.useState)(!1),[y,O]=(0,s.useState)(null),[Z,C]=(0,s.useState)(""),S=(0,r.Z)("rule"),A=(0,r.Z)("contentPolicy"),I=(0,r.Z)("privacyNotice"),_=(0,r.Z)("award"),E=(0,r.Z)("score",0),P=(0,r.Z)("scorePublic"),B=(0,r.Z)("scorePrivate"),F=(0,r.Z)("closetItemCost"),R=(0,d.Z)("#previewer");(0,o.Z)();const D=e=>{m(e.target.value)},z=h?B:P,L=null!==(e=null==y?void 0:y.size)&&void 0!==e?e:0,T=Math.ceil(L/1024)*z+F;return(0,a.jsxs)(a.Fragment,{children:[(0,a.jsxs)("div",Object.assign({className:"card card-primary"},{children:[(0,a.jsxs)("div",Object.assign({className:"card-body"},{children:[(0,a.jsxs)("div",Object.assign({className:"form-group"},{children:[(0,a.jsx)("label",Object.assign({htmlFor:"texture-name"},{children:(0,l.t)("skinlib.upload.texture-name")}),void 0),(0,a.jsx)("input",{className:"form-control",id:"texture-name",type:"text",placeholder:S,value:t,onChange:e=>{i(e.target.value)}},void 0)]}),void 0),(0,a.jsxs)("div",Object.assign({className:"form-group"},{children:[(0,a.jsx)("label",{children:(0,l.t)("skinlib.upload.texture-type")},void 0),(0,a.jsx)("br",{},void 0),(0,a.jsxs)("label",Object.assign({className:"mr-4"},{children:[(0,a.jsx)("input",{type:"radio",className:"mr-1",name:"type",value:"steve",checked:c===p.N.Steve,onChange:D},void 0),"Steve"]}),void 0),(0,a.jsxs)("label",Object.assign({className:"mr-4"},{children:[(0,a.jsx)("input",{type:"radio",className:"mr-1",name:"type",value:"alex",checked:c===p.N.Alex,onChange:D},void 0),"Alex"]}),void 0),(0,a.jsxs)("label",Object.assign({className:"mr-4"},{children:[(0,a.jsx)("input",{type:"radio",className:"mr-1",name:"type",value:"cape",checked:c===p.N.Cape,onChange:D},void 0),(0,l.t)("general.cape")]}),void 0)]}),void 0),(0,a.jsx)(b.Z,{file:y,accept:"image/png, image/x-png",onChange:async e=>{const a=e.target.files,[s]=a;if(s){O(s),!t&&s.name.endsWith(".png")&&i(s.name.slice(0,s.name.length-4));const e=URL.createObjectURL(s);C(e),c!==p.N.Cape&&m(await f(e)?p.N.Alex:p.N.Steve)}}},void 0),A&&(0,a.jsx)("div",{className:"callout callout-warning",dangerouslySetInnerHTML:{__html:A}},void 0)]}),void 0),(0,a.jsxs)("div",Object.assign({className:"card-footer"},{children:[(0,a.jsxs)("div",Object.assign({className:"container px-0 d-flex justify-content-between"},{children:[(0,a.jsxs)("label",Object.assign({className:"mt-2",htmlFor:"is-private",title:(0,l.t)("skinlib.upload.privacy-notice")},{children:[(0,a.jsx)("input",{type:"checkbox",id:"is-private",className:"mr-1",checked:h,onChange:e=>{N(e.target.checked)}},void 0),(0,l.t)("skinlib.upload.set-as-private")]}),void 0),(0,a.jsx)("button",Object.assign({className:"btn btn-success",disabled:w,onClick:async()=>{if(!y)return void v.A.error((0,l.t)("skinlib.emptyUploadFile"));if(!t)return void v.A.error((0,l.t)("skinlib.emptyTextureName"));if("image/png"!==y.type&&"image/x-png"!==y.type)return void v.A.error((0,l.t)("skinlib.fileExtError"));const e=new FormData;e.append("name",t),e.append("type",c),e.append("file",y,y.name),e.append("public",h?"0":"1"),k(!0);const{code:i,message:a,data:{tid:s}={tid:0}}=await u.v_(g.Z.texture.upload(),e);if(k(!1),0===i)window.location.href=blessing.base_url+g.Z.skinlib.show(s);else if(2===i)try{await(0,v.K)({mode:"confirm",text:a,okButtonText:(0,l.t)("user.viewInSkinlib")}),window.location.href=blessing.base_url+g.Z.skinlib.show(s)}catch(e){}else v.A.error(a)}},{children:w?(0,a.jsxs)(a.Fragment,{children:[(0,a.jsx)("i",{className:"fas fa-spinner fa-spin mr-1"},void 0),(0,a.jsx)("span",{children:(0,l.t)("skinlib.uploading")},void 0)]},void 0):(0,l.t)("skinlib.upload.button")}),void 0)]}),void 0),y&&(0,a.jsxs)("div",Object.assign({className:`callout callout-${E>T?"success":"danger"} mt-3`},{children:[(0,a.jsx)("div",{children:(0,l.t)("skinlib.upload.cost",{score:T})},void 0),(0,a.jsxs)("div",{children:[(0,l.t)("user.cur-score"),(0,a.jsx)("span",Object.assign({className:"ml-1"},{children:E}),void 0)]},void 0)]}),void 0),h&&(0,a.jsx)("div",Object.assign({className:"callout callout-info mt-3"},{children:I}),void 0),!h&&_>0&&(0,a.jsx)("div",Object.assign({className:"callout callout-success mt-3"},{children:(0,l.t)("skinlib.upload.award",{score:_})}),void 0)]}),void 0)]}),void 0),R&&n.createPortal((0,a.jsx)(s.Suspense,Object.assign({fallback:(0,a.jsx)(j.Z,{},void 0)},{children:(0,a.jsx)(x,{skin:c!==p.N.Cape?Z:void 0,cape:c===p.N.Cape?Z:void 0,isAlex:c===p.N.Alex},void 0)}),void 0),R)]},void 0)}))}}]);