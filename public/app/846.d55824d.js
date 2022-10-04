"use strict";(self.webpackChunkblessing_skin_server=self.webpackChunkblessing_skin_server||[]).push([[846],{1997:function(e,t,n){n.r(t),n.d(t,{PICTURES_COUNT:function(){return p}});var a=n(5944),i=n(7294),o=n(917),s=n(786),r=n(1565),c=n(88),l=n(6051),d=n(550),u=n(70);const A=[n(553),n(8348),n(2214),n(5034),n(9486),n(9483),n(8862)],p=A.length,f={walk:null,run:null,rotate:null},g=s.Z.i`
  display: inline;
  padding: 0.5em 0.5em;
  &:hover {
    color: #555;
    cursor: pointer;
  }
`,m=o.iv`
  ${d.tS(d.Uo.lg)} {
    min-height: 500px;
  }
  width: 100%;

  canvas {
    cursor: move;
  }
`;t.default=e=>{const{initPositionZ:t=70}=e,n=(0,i.useRef)(null),o=(0,i.useRef)(null),s=(0,i.useRef)(f),[d,v]=(0,i.useState)(!1),[b,w]=(0,i.useState)(!1),[k,h]=(0,i.useState)(-1),C=(()=>{const{skin:t,cape:n}=e;return t&&n?`${(0,c.t)("general.skin")} & ${(0,c.t)("general.cape")}`:t?(0,c.t)("general.skin"):n?(0,c.t)("general.cape"):""})();return(0,i.useEffect)((()=>{const a=o.current,i=new r.mc({canvas:a,width:a.clientWidth,height:a.clientHeight,skin:e.skin||u,cape:e.cape||"",model:e.isAlex?"slim":"default",zoom:t/100});document.body.classList.contains("dark-mode")&&(i.background="#6c757d");const c=i.animations.add(r.eJ);s.current.rotate=c;const l=r.z$(i);return n.current=i,()=>{l.dispose(),i.dispose()}}),[]),(0,i.useEffect)((()=>{n.current.loadSkin(e.skin||u,e.isAlex?"slim":"default")}),[e.skin,e.isAlex]),(0,i.useEffect)((()=>{const t=n.current;e.cape?t.loadCape(e.cape):t.resetCape()}),[e.cape]),(0,i.useEffect)((()=>{var e,t;const a=s.current;if(b){null===(e=a.walk)||void 0===e||e.resetAndRemove(),a.walk=null;const t=n.current.animations.add(r.Lr);t.speed=.6,a.run=t}else{null===(t=a.run)||void 0===t||t.resetAndRemove(),a.run=null;const e=n.current.animations.add(r.Mo);a.walk=e}}),[b]),(0,i.useEffect)((()=>{n.current.animations.paused=d}),[d]),(0,i.useEffect)((()=>{n.current.loadBackground(A[k])}),[k]),(0,a.BX)("div",Object.assign({className:"card"},{children:[(0,a.tZ)("div",Object.assign({className:"card-header"},{children:(0,a.BX)("div",Object.assign({className:"d-flex justify-content-between"},{children:[(0,a.BX)("h3",Object.assign({className:"card-title"},{children:[(0,a.tZ)("span",{children:(0,c.t)("general.texturePreview")},void 0),e.showIndicator&&(0,a.tZ)("span",Object.assign({className:"badge bg-olive ml-1"},{children:C}),void 0)]}),void 0),(0,a.BX)("div",{children:[(0,a.tZ)(g,{className:"fas fa-"+(b?"walking":"running"),"data-toggle":"tooltip","data-placement":"bottom",title:`${(0,c.t)("general.walk")} / ${(0,c.t)("general.run")}`,onClick:()=>{w((e=>!e))}},void 0),(0,a.tZ)(g,{className:"fas fa-redo-alt","data-toggle":"tooltip","data-placement":"bottom",title:(0,c.t)("general.rotation"),onClick:()=>{const e=s.current;e.rotate&&(e.rotate.paused=!e.rotate.paused)}},void 0),(0,a.tZ)(g,{className:"fas fa-"+(d?"play":"pause"),"data-toggle":"tooltip","data-placement":"bottom",title:(0,c.t)("general.pause"),onClick:()=>{v((e=>!e))}},void 0),(0,a.tZ)(g,{className:"fas fa-stop","data-toggle":"tooltip","data-placement":"bottom",title:(0,c.t)("general.reset"),onClick:()=>{var e,t,a;const i=s.current;null===(e=i.walk)||void 0===e||e.resetAndRemove(),null===(t=i.run)||void 0===t||t.resetAndRemove(),null===(a=i.rotate)||void 0===a||a.resetAndRemove(),n.current.animations.paused=!0}},void 0)]},void 0)]}),void 0)}),void 0),(0,a.tZ)("div",Object.assign({className:"card-body p-0"},{children:(0,a.tZ)("canvas",{ref:o,css:m},void 0)}),void 0),(0,a.BX)("div",Object.assign({className:"card-footer"},{children:[(0,a.BX)("div",Object.assign({className:"mt-2 mb-3 d-flex"},{children:[(0,a.tZ)("div",{className:"btn-color bg-white rounded-pill mr-2 elevation-2",title:(0,c.t)("colors.white"),onClick:()=>{n.current.background="#fff"}},void 0),(0,a.tZ)("div",{className:"btn-color bg-black rounded-pill mr-2 elevation-2",title:(0,c.t)("colors.black"),onClick:()=>{n.current.background="#000"}},void 0),(0,a.tZ)("div",{className:"btn-color bg-gray rounded-pill mr-2 elevation-2",title:(0,c.t)("colors.gray"),onClick:()=>{n.current.background="#6c757d"}},void 0),(0,a.tZ)("div",Object.assign({className:"btn-color bg-green rounded-pill mr-2 elevation-2",css:l.b,title:(0,c.t)("colors.prev"),onClick:()=>{h((e=>k<=0?p-1:e-1))}},{children:(0,a.tZ)("i",{className:"fas fa-arrow-left"},void 0)}),void 0),(0,a.tZ)("div",Object.assign({className:"btn-color bg-green rounded-pill mr-2 elevation-2",css:l.b,title:(0,c.t)("colors.next"),onClick:()=>{h((e=>k>=p-1?0:e+1))}},{children:(0,a.tZ)("i",{className:"fas fa-arrow-right"},void 0)}),void 0)]}),void 0),e.children]}),void 0)]}),void 0)}},550:function(e,t,n){var a;function i(e){return`@media (max-width: ${e}px)`}function o(e,t){return`@media (min-width: ${e}px) and (max-width: ${t}px)`}function s(e){return`@media (min-width: ${e}px)`}n.d(t,{Uo:function(){return a},Qj:function(){return i},vX:function(){return o},tS:function(){return s}}),function(e){e[e.xs=0]="xs",e[e.sm=576]="sm",e[e.md=768]="md",e[e.lg=992]="lg",e[e.xl=1200]="xl"}(a||(a={}))},553:function(e,t,n){e.exports=n.p+"864a68e8a8adc85a8f5c.webp"},8348:function(e,t,n){e.exports=n.p+"7c013d148e38c3c93778.webp"},2214:function(e,t,n){e.exports=n.p+"2bcf685251dfe81e4b78.webp"},5034:function(e,t,n){e.exports=n.p+"0a40452f370b1aa92bf0.webp"},9486:function(e,t,n){e.exports=n.p+"73fd567289fe5a9c1b6c.webp"},9483:function(e,t,n){e.exports=n.p+"5f0b07bf1518ad8e86ed.webp"},8862:function(e,t,n){e.exports=n.p+"b8e05e3c8cdcf432089f.webp"},70:function(e){e.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAFDUlEQVR42u2a20sUURzH97G0LKMotPuWbVpslj1olJXdjCgyisowsSjzgrB0gSKyC5UF1ZNQWEEQSBQ9dHsIe+zJ/+nXfM/sb/rN4ZwZ96LOrnPgyxzP/M7Z+X7OZc96JpEISfWrFhK0YcU8knlozeJKunE4HahEqSc2nF6zSEkCgGCyb+82enyqybtCZQWAzdfVVFgBJJNJn1BWFgC49/VpwGVlD0CaxQiA5HSYEwBM5sMAdKTqygcAG9+8coHKY/XXAZhUNgDYuBSPjJL/GkzVVhAEU5tqK5XZ7cnFtHWtq/TahdSw2l0HUisr1UKIWJQBAMehDuqiDdzndsP2EZECAG1ZXaWMwOCODdXqysLf++uXUGv9MhUHIByDOijjdiSAoH3ErANQD73C7TXXuGOsFj1d4YH4OTJAEy8y9Hd0mCaeZ5z8dfp88zw1bVyiYhCLOg1ZeAqC0ybaDttHRGME1DhDeVWV26u17lRAPr2+mj7dvULfHw2q65fhQRrLXKDfIxkau3ZMCTGIRR3URR5toU38HbaPiMwUcKfBAkoun09PzrbQ2KWD1JJaqswjdeweoR93rirzyCMBCmIQizqoizZkm2H7iOgAcHrMHbbV9KijkUYv7qOn55sdc4fo250e+vUg4329/Xk6QB/6DtOws+dHDGJRB3XRBve+XARt+4hIrAF4UAzbnrY0ve07QW8uHfB+0LzqanMM7qVb+3f69LJrD90/1axiEIs6qIs21BTIToewfcSsA+Bfb2x67OoR1aPPzu2i60fSNHRwCw221Suz0O3jO+jh6V1KyCMGse9721XdN5ePutdsewxS30cwuMjtC860T5JUKpXyKbSByUn7psi5l+juDlZYGh9324GcPKbkycaN3jUSAGxb46IAYPNZzW0AzgiQ5tVnzLUpUDCAbakMQXXrOtX1UMtHn+Q9/X5L4wgl7t37r85OSrx+TYl379SCia9KXjxRpiTjIZTBFOvrV1f8ty2eY/T7XJ81FQAwmA8ASH1ob68r5PnBsxA88/xAMh6SpqW4HRnLBrkOA9Xv5wPAZjAUgOkB+SHxgBgR0qSMh0zmZRsmwDJm1gFg2PMDIC8/nAHIMls8x8GgzOsG5WiaqREgYzDvpTwjLDy8NM15LpexDEA3LepjU8Z64my+8PtDCmUyRr+fFwA2J0eAFYA0AxgSgMmYBMZTwFQnO9RNAEaHOj2DXF5UADmvAToA2ftyxZYA5BqgmZZApDkdAK4mAKo8GzPlr8G8AehzMAyA/i1girUA0HtYB2CaIkUBEHQ/cBHSvwF0AKZFS5M0ZwMQtEaEAmhtbSUoDADH9ff3++QZ4o0I957e+zYAMt6wHkhzpjkuAcgpwNcpA7AZDLsvpwiuOkBvxygA6Bsvb0HlaeKIF2EbADZpGiGzBsA0gnwQHGOhW2snRpbpPexbAB2Z1oicAMQpTnGKU5ziFKc4xSlOcYpTnOIUpzgVmgo+XC324WfJAdDO/+ceADkCpuMFiFKbApEHkOv7BfzfXt+5gpT8V7rpfYJcDz+jAsB233r6yyBsJ0mlBCDofuBJkel4vOwBFPv8fyYAFPJ+wbSf/88UANNRVy4Awo6+Ig2gkCmgA5DHWjoA+X7AlM//owLANkX0w0359od++pvX8fdMAcj3/QJ9iJsAFPQCxHSnQt8vMJ3v2wCYpkhkAOR7vG7q4aCXoMoSgG8hFAuc/grMdAD4B/kHl9da7Ne9AAAAAElFTkSuQmCC"}}]);