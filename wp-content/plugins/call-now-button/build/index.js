(()=>{"use strict";const e=window.wp.element,t=t=>{let{template:n,handleSelect:a,types:l,displayModes:i}=t;return(0,e.createElement)("article",{onClick:()=>a(n),className:"cnb-template-container","data-template-id":n.id},(0,e.createElement)("section",null,(0,e.createElement)("header",{className:"cnb-relative",style:{backgroundImage:"url("+n.image+")"}},(0,e.createElement)("div",{className:"cnb-absolute"},n.categories.includes("pro")&&(0,e.createElement)("span",{className:"cnb-pro-badge"},"Pro"),i&&n.button.options.displayMode&&(0,e.createElement)("span",{className:"cnb-feature-label"},i[n.button.options.displayMode]))),(0,e.createElement)("div",{className:"text-block"},(0,e.createElement)("h3",null,n.name),(0,e.createElement)("p",null,n.description),(0,e.createElement)("p",null,n.button.actions.map((t=>(0,e.createElement)("span",{className:"cnb-feature-label"},((e,t)=>{const n=String(e);return t&&n in t?t[n].name:n})(t.actionType,l))))))))};function n(e){return e?Object.fromEntries(Object.entries(e).filter((e=>{let[t,n]=e;return null!=n})).map((e=>{let[t,a]=e;return[t,a===Object(a)?n(a):a]}))):e}const a=a=>{let{template:l,setTemplate:i,nonce:o,ajaxUrl:r,types:s,displayModes:c,domain:m,upgradeLink:d}=a;const u=(0,e.useRef)(),[p,b]=(0,e.useState)(void 0),[E,y]=(0,e.useState)(void 0),[g,v]=(0,e.useState)(!1),[h,f]=(0,e.useState)(void 0),w=l.categories.includes("pro")&&"PRO"!==m?.type,S=l.metadata.map((t=>{const n=(t=>t.fields.map((n=>{const a=l.button.actions.find((e=>e.id===t.id)),o=a[n.name],r=t.id+"-"+n.name;return(0,e.createElement)("tr",{key:r},(0,e.createElement)("th",null,n.line),(0,e.createElement)("td",null,(0,e.createElement)("input",{onChange:e=>((e,t,n)=>{n[t.name]=e.target.value,i({...l})})(e,n,a),type:"editable"===n.type?"text":"",name:n.name,value:o,required:n.required}),(0,e.createElement)("p",{className:"description"},n.description)))})))(t);return(0,e.createElement)(e.Fragment,{key:t.id},t.title&&(0,e.createElement)("tr",null,(0,e.createElement)("th",{colSpan:2},(0,e.createElement)("h3",null,t.title))),n)})),N=l.button.actions.length>1?"Generate buttons":"Generate button";return(0,e.createElement)("div",null,!g&&!h&&(0,e.createElement)("button",{className:"button button-secondary",onClick:()=>i(void 0)},"Back to the templates"),(0,e.createElement)("h2",{ref:u},"Configure template ",(0,e.createElement)("code",null,l.name)),(0,e.createElement)(t,{template:l,types:s,displayModes:c,handleSelect:()=>{}}),w&&(0,e.createElement)("div",{className:"notice notice-inline notice-warning"},(0,e.createElement)("h4",null,"This template uses ",(0,e.createElement)("span",{className:"cnb-pro-badge"},"Pro")," features."),l.proFeatures&&(0,e.createElement)("p",null,l.proFeatures),d&&(0,e.createElement)("p",null,"Start your ",(0,e.createElement)("strong",null,"14 day free trial")," to see this in action! ",(0,e.createElement)("a",{className:"button button-primary button-small",href:d},"Upgrade now"))),(0,e.createElement)("form",{onSubmit:e=>{e.preventDefault();const t={action:"cnb_create_button",_wpnonce_button:o,button:n({...l.button,id:void 0,actions:void 0,conditions:void 0}),actions:n(l.button.actions.map((e=>({...e,id:void 0})))),conditions:n(l.button.conditions?.map((e=>({...e,id:null}))))};return e.target.checkValidity()?(jQuery.post(r,t).done((e=>{y("success"),b("Redirecting to your button..."),f(e.redirect_link),v(!1),setTimeout((()=>window.location=e.redirect_link),1e3)})).fail((e=>{y("error"),b("Something went wrong: "+e),v(!1)})),y("info"),b("Your button is being created..."),v(!0),!1):(y("warning"),b("Please fill out all the fields..."),v(!1),!1)}},(0,e.createElement)("table",{className:"form-table form-table-gallery"},S),!g&&!h&&(0,e.createElement)("button",{type:"submit",className:"button button-primary"},N),g&&(0,e.createElement)("button",{className:"button button-primary components-button is-busy"},"Generating your button..."),h&&(0,e.createElement)("a",{className:"button button-primary",href:h},"Go to your new Button"),p&&(0,e.createElement)("div",{className:"notice notice-inline notice-"+E},(0,e.createElement)("p",null,p))))},l=n=>{let{templates:a,setTemplate:l,types:i,displayModes:o}=n;return(0,e.createElement)("section",{className:"cnb-grid cnb-grid-4columns"},a.map((n=>(0,e.createElement)(t,{template:n,types:i,displayModes:o,handleSelect:e=>l(e)}))))},i=()=>{window.cnb_templates_init()};(0,e.render)((0,e.createElement)((()=>{const[t,n]=(0,e.useState)(void 0),[o,r]=(0,e.useState)(void 0),[s,c]=(0,e.useState)(void 0),[m,d]=(0,e.useState)(void 0),[u,p]=(0,e.useState)(void 0),[b,E]=(0,e.useState)(void 0),[y,g]=(0,e.useState)(void 0),[v,h]=(0,e.useState)(void 0),f=e=>{n(e.detail.templates),c(e.detail.nonce),d(e.detail.ajaxUrl),p(e.detail.actionTypes),E(e.detail.displayModes),g(e.detail.currentDomain),h(e.detail.upgradeLink);const a=window.location.hash.replace("#t=",""),l=t?.find((e=>e&&e.id===a));l&&r(l)},w=e=>{if(!e||!e?.id)return window.location.hash="",void r(void 0);window.location.hash="#t="+e.id,r(e)};return(0,e.useEffect)((()=>(window.addEventListener("cnb-templates-init",f),()=>{window.removeEventListener("cnb-templates-init",f)}))),t?(0,e.createElement)("div",{className:"cnb-templates"},o?(0,e.createElement)(a,{template:o,types:u,displayModes:b,setTemplate:w,nonce:s,ajaxUrl:m,domain:y,upgradeLink:v}):(0,e.createElement)(l,{templates:t,types:u,displayModes:b,setTemplate:w})):(setTimeout((()=>{i()}),200),(0,e.createElement)("div",null,"Loading the Templates...",(0,e.createElement)("a",{onClick:()=>{i()}},"If nothing happens for a while, click here")))}),null),document.getElementById("call-now-button-app"))})();