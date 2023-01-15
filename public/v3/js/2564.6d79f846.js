"use strict";(self["webpackChunkfirefly_iii"]=self["webpackChunkfirefly_iii"]||[]).push([[2564],{2564:(e,t,a)=>{a.r(t),a.d(t,{default:()=>R});var n=a(9835);const r=(0,n._)("p",null," ",-1),s=(0,n._)("p",null," ",-1),i=(0,n._)("p",null," ",-1),l=(0,n._)("p",null," ",-1);function o(e,t,a,o,g,u){const p=(0,n.up)("LargeTable"),c=(0,n.up)("q-fab-action"),d=(0,n.up)("q-fab"),f=(0,n.up)("q-page-sticky"),m=(0,n.up)("q-page");return(0,n.wg)(),(0,n.j4)(m,null,{default:(0,n.w5)((()=>[(0,n.Wm)(p,{ref:"table",loading:g.loading,page:g.page,rows:g.rows,"rows-number":g.rowsNumber,"rows-per-page":g.rowsPerPage,title:e.$t("firefly.title_"+this.type),onOnRequest:u.onRequest},null,8,["loading","page","rows","rows-number","rows-per-page","title","onOnRequest"]),r,s,i,l,(0,n.Wm)(f,{offset:[18,18],position:"bottom-right"},{default:(0,n.w5)((()=>[(0,n.Wm)(d,{color:"green",direction:"up",icon:"fas fa-chevron-up",label:"Actions","label-position":"left",square:"","vertical-actions-align":"right"},{default:(0,n.w5)((()=>[(0,n.Wm)(c,{to:{name:"transactions.create",params:{type:"transfer"}},color:"primary",icon:"fas fa-exchange-alt",label:"New transfer",square:""},null,8,["to"]),(0,n.Wm)(c,{to:{name:"transactions.create",params:{type:"deposit"}},color:"primary",icon:"fas fa-long-arrow-alt-right",label:"New deposit",square:""},null,8,["to"]),(0,n.Wm)(c,{to:{name:"transactions.create",params:{type:"withdrawal"}},color:"primary",icon:"fas fa-long-arrow-alt-left",label:"New withdrawal",square:""},null,8,["to"])])),_:1})])),_:1})])),_:1})}var g=a(1569);class u{list(e,t,a){let n="api/v1/transactions";return g.api.get(n,{params:{page:t,cache:a,type:e}})}}var p=a(4643),c=a(3247);const d={name:"Index",components:{LargeTable:p.Z},watch:{$route(e){"transactions.index"===e.name&&(this.type=e.params.type,this.page=1,this.triggerUpdate())}},data(){return{loading:!1,rows:[],columns:[{name:"type",label:" ",field:"type",style:"width: 30px"},{name:"description",label:"Description",field:"description",align:"left"},{name:"amount",label:"Amount",field:"amount"},{name:"date",label:"Date",field:"date",align:"left"},{name:"source",label:"Source",field:"source",align:"left"},{name:"destination",label:"Destination",field:"destination",align:"left"},{name:"category",label:"Category",field:"category",align:"left"},{name:"budget",label:"Budget",field:"budget",align:"left"},{name:"menu",label:" ",field:"menu",align:"left"}],type:"withdrawal",page:1,rowsPerPage:50,rowsNumber:100,range:{start:null,end:null}}},computed:{},created(){this.rowsPerPage=this.getListPageSize},mounted(){this.type=this.$route.params.type,null!==this.store.getRange.start&&null!==this.store.getRange.end||this.store.$onAction((({name:e,$store:t,args:a,after:n,onError:r})=>{n((t=>{"setRange"===e&&(this.range=t,this.triggerUpdate())}))})),null!==this.store.getRange.start&&null!==this.store.getRange.end&&(this.range={start:this.store.getRange.start,end:this.store.getRange.end},this.triggerUpdate())},methods:{onRequest:function(e){this.page=e.page,this.triggerUpdate()},formatAmount:function(e,t){return Intl.NumberFormat("en-US",{style:"currency",currency:e}).format(t)},gotoTransaction:function(e,t){this.$router.push({name:"transactions.show",params:{id:1}})},triggerUpdate:function(){if(this.loading)return;if(null===this.range.start||null===this.range.end)return;this.loading=!0;const e=new u,t=new c.Z;this.rows=[],e.list(this.type,this.page,this.getCacheKey).then((e=>{let a=t.parseResponse(e);this.rowsPerPage=a.rowsPerPage,this.rowsNumber=a.rowsNumber,this.rows=a.rows,this.loading=!1}))}}};var f=a(1639),m=a(9885),h=a(3388),w=a(9361),b=a(935),y=a(9984),P=a.n(y);const q=(0,f.Z)(d,[["render",o]]),R=q;P()(d,"components",{QPage:m.Z,QPageSticky:h.Z,QFab:w.Z,QFabAction:b.Z})}}]);