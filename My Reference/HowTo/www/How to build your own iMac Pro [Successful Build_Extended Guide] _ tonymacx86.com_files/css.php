@charset "UTF-8";

/********* public:normalize.css ********/
/*! normalize.css v7.0.0 | MIT License | github.com/necolas/normalize.css */
button,hr,input{overflow:visible}audio,canvas,progress,video{display:inline-block}progress,sub,sup{vertical-align:baseline}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{line-height:1.15;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section{display:block}h1{font-size:2em;margin:.67em 0}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not(:root){overflow:hidden}button,input,optgroup,select,textarea{font-family:sans-serif;font-size:100%;line-height:1.15;margin:0}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{padding:.35em .75em .625em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}[hidden],template{display:none}

/********* public:core.less ********/
html {
  font: 15px / 1.4 sans-serif;
  font-family: Verdana, Helvetica, Arial, sans-serif;
  font-weight: 400;
  color: #141414;
  margin: 0;
  padding: 0;
  word-wrap: break-word;
  background-color: #ececec;
  /* // just a reminder that we *might* want this at some point
	-ms-text-size-adjust: none;
	-webkit-text-size-adjust: none;*/
}
button,
input,
optgroup,
select,
textarea {
  font-family: Verdana, Helvetica, Arial, sans-serif;
  line-height: 1.4;
}
img {
  max-width: 100%;
  height: auto;
}
b,
strong {
  font-weight: 700;
}
a {
  color: #141414;
  text-decoration: none;
  font-weight: 500;
}
a:hover {
  color: #141414;
  text-decoration: underline;
}
html:after {
  content: 'full';
  display: none;
}
@media (max-width: 800px) {
  html:after {
    content: 'wide';
  }
}
@media (max-width: 610px) {
  html:after {
    content: 'medium';
  }
}
@media (max-width: 480px) {
  html:after {
    content: 'narrow';
  }
}
* {
  box-sizing: border-box;
}
body {
  overflow-y: scroll !important;
}
[data-xf-click],
a[tabindex] {
  cursor: pointer;
}
[dir=auto] {
  text-align: left;
}
pre,
textarea {
  word-wrap: normal;
}
img {
  -ms-interpolation-mode: bicubic;
}
.has-pointer-nav :focus {
  outline: 0;
}
.has-pointer-nav ::-moz-focus-inner {
  border: 0;
}
.has-pointer-nav .iconic > input:focus + i:before,
.has-pointer-nav .iconic > input:focus + i:after {
  outline: 0;
}
.u-concealed,
.u-concealed a,
.u-cloaked,
.u-cloaked a,
.u-concealed--icon,
.u-concealed--icon a {
  text-decoration: inherit !important;
  color: inherit !important;
}
a.u-concealed:hover,
.u-concealed a:hover {
  text-decoration: underline !important;
}
a.u-concealed:hover .fa,
.u-concealed a:hover .fa {
  color: #141414;
}
a.u-concealed--icon:hover .fa,
.u-concealed--icon a:hover .fa {
  color: #141414;
}
.u-textColor {
  color: #141414;
}
.u-dimmed {
  color: #505050;
}
.u-muted {
  color: #8c8c8c;
}
.u-dimmed a,
.u-muted a,
.u-faint a {
  color: inherit;
  text-decoration: none;
}
.u-dimmed a:hover,
.u-muted a:hover,
.u-faint a:hover {
  text-decoration: underline;
}
.u-featuredText {
  color: #47a7eb;
}
.u-accentText {
  color: #505050;
}
.u-accentText a {
  color: #f2930d;
}
.u-prependAsterisk:before {
  content: "* ";
}
.u-appendAsterisk:after {
  content: " *";
}
.u-dt[title] {
  border: none;
  text-decoration: none;
}
.u-clearFix:before,
.u-clearFix:after {
  content: " ";
  display: table;
}
.u-clearFix:after {
  clear: both;
}
.u-appendColon:after {
  content: ":";
}
.u-appendColon.is-sentence:after {
  content: "";
}
.u-pullLeft {
  float: left !important;
}
.u-pullRight {
  float: right !important;
}
.u-alignCenter {
  text-align: center;
}
.u-showWideInline,
.u-showWideBlock,
.u-showMediumInline,
.u-showMediumBlock,
.u-showNarrowInline,
.u-showNarrowBlock {
  display: none;
}
.u-smaller {
  font-size: small;
}
@media (max-width: 800px) {
  .u-hideWide {
    display: none !important;
  }
  .u-showWideInline {
    display: inline;
  }
  .u-showWideBlock {
    display: block;
  }
}
@media (max-width: 610px) {
  .u-hideMedium {
    display: none !important;
  }
  .u-showMediumInline {
    display: inline;
  }
  .u-showMediumBlock {
    display: block;
  }
}
@media (max-width: 480px) {
  .u-hideNarrow {
    display: none !important;
  }
  .u-showNarrowInline {
    display: inline;
  }
  .u-showNarrowBlock {
    display: block;
  }
}
.u-ltr {
  direction: ltr;
  text-align: left;
}
.u-rtl {
  direction: rtl;
  text-align: right;
}
.u-depth1 {
  padding-left: 1em;
}
.u-indentDepth1 {
  text-indent: 1em;
}
.u-depth2 {
  padding-left: 2em;
}
.u-indentDepth2 {
  text-indent: 2em;
}
.u-depth3 {
  padding-left: 3em;
}
.u-indentDepth3 {
  text-indent: 3em;
}
.u-depth4 {
  padding-left: 4em;
}
.u-indentDepth4 {
  text-indent: 4em;
}
.u-depth5 {
  padding-left: 5em;
}
.u-indentDepth5 {
  text-indent: 5em;
}
.u-depth6 {
  padding-left: 6em;
}
.u-indentDepth6 {
  text-indent: 6em;
}
.u-depth7 {
  padding-left: 7em;
}
.u-indentDepth7 {
  text-indent: 7em;
}
.u-depth8 {
  padding-left: 8em;
}
.u-indentDepth8 {
  text-indent: 8em;
}
.u-depth9 {
  padding-left: 9em;
}
.u-indentDepth9 {
  text-indent: 9em;
}
.u-hidden {
  display: none;
}
.u-hidden.is-active {
  display: block;
}
.u-hidden.u-hidden--transition {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
}
.u-hidden.u-hidden--transition.is-active {
  display: block;
}
.u-hidden.u-hidden--transition.is-active {
  display: block;
  opacity: 1;
}
.u-hidden.u-hidden--transition.is-transitioning {
  display: block;
}
.u-hidden.u-hidden--transition.is-active {
  height: auto;
  overflow-y: visible;
}
.u-hidden.u-hidden--transition.is-transitioning {
  overflow-y: hidden;
}
.u-srOnly {
  position: absolute;
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
  clip: rect(0 0 0 0);
  overflow: hidden;
}
.has-no-js .u-jsOnly {
  display: none !important;
}
.has-js .u-noJsOnly {
  display: none !important;
}
img.u-imgContained {
  max-height: 100%;
  max-width: 100%;
}
.u-bottomFixer {
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 800;
  pointer-events: none;
}
.u-bottomFixer > * {
  pointer-events: auto;
}
.u-anchorTarget {
  display: block;
  height: 0;
  width: 0;
  visibility: hidden;
  pointer-events: none;
  position: absolute;
}
.u-flex-1 {
  flex: 1;
}
.u-flex-2 {
  flex: 2;
}
.u-flex-3 {
  flex: 3;
}
.u-flex-4 {
  flex: 4;
}
.u-splitter {
  display: inline-block;
  width: 6px;
  flex-shrink: 0;
}
.u-screenContained {
  max-height: 70vh;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}
.pairs {
  padding: 0;
  margin: 0;
  overflow: hidden;
}
.pairs.pairs--plainLabel > dt {
  color: inherit;
}
.pairs.pairs--spaced + .pairs {
  margin-top: 6px;
}
.pairs.pairs--noColon > dt:after {
  content: "";
}
.pairs > dt {
  padding: 0;
  margin: 0;
  color: #8c8c8c;
}
.pairs > dt:after {
  content: ":";
}
.pairs > dt.is-sentence:after {
  content: "";
}
.pairs > dd {
  padding: 0;
  margin: 0;
}
.pairs.pairs--inline {
  display: inline;
}
.pairs.pairs--inline > dt,
.pairs.pairs--inline > dd {
  display: inline;
}
.pairs.pairs--columns {
  display: table;
  table-layout: fixed;
  width: 100%;
}
.pairs.pairs--columns > dt,
.pairs.pairs--columns > dd {
  display: table-cell;
}
.pairs.pairs--columns > dt {
  width: 50%;
  padding-right: 6px;
}
.pairs.pairs--columns.pairs--fixedSmall > dt {
  width: 200px;
}
.pairs.pairs--columns.pairs--fluidSmall > dt {
  width: 25%;
}
.pairs.pairs--columns.pairs--fluidHuge > dt {
  width: 70%;
}
@media (max-width: 500px) {
  .pairs.pairs--columns {
    display: block;
  }
  .pairs.pairs--columns > dt,
  .pairs.pairs--columns > dd {
    display: block;
  }
  .pairs.pairs--columns.pairs > dt {
    width: auto;
    padding-right: 0;
  }
  .pairs.pairs--columns + .pairs {
    margin-top: 6px;
  }
}
.pairs.pairs--justified:before,
.pairs.pairs--justified:after {
  content: " ";
  display: table;
}
.pairs.pairs--justified:after {
  clear: both;
}
.pairs.pairs--justified > dt {
  float: left;
  max-width: 100%;
  margin-right: 6px;
}
.pairs.pairs--justified > dd {
  float: right;
  text-align: right;
  max-width: 100%;
}
.pairs.pairs--rows {
  display: inline-table;
  margin-right: 6px;
}
.pairs.pairs--rows.pairs--rows--centered > dt,
.pairs.pairs--rows.pairs--rows--centered > dd {
  text-align: center;
}
.pairs.pairs--rows:last-of-type {
  margin-right: 0;
}
.pairs.pairs--rows > dt {
  display: table-row;
  font-size: 80%;
}
.pairs.pairs--rows > dt:after {
  content: '';
  display: none;
}
.pairs.pairs--rows > dd {
  display: table-row;
}
.pairWrapper.pairWrapper--spaced .pairs {
  margin-top: 6px;
}
.pairWrapper.pairWrapper--spaced .pairs:first-child {
  margin-top: 0;
}
.pairJustifier {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin-right: -5px;
  margin-bottom: -5px;
}
.pairJustifier .pairs.pairs--rows {
  margin-right: 5px;
  margin-bottom: 5px;
}
.listPlain {
  list-style: none;
  margin: 0;
  padding: 0;
}
.listInline {
  list-style: none;
  margin: 0;
  padding: 0;
}
.listInline.listInline--selfInline {
  display: inline;
}
.listInline > li {
  display: inline;
  margin: 0;
  padding: 0;
}
.listInline.listInline--block > li {
  display: inline-block;
}
.listInline.listInline--comma > li:after {
  content: ", ";
}
.listInline.listInline--comma > li:last-child:after {
  content: "";
  display: none;
}
.listInline.listInline--bullet > li:before {
  content: "\00B7\20";
}
.listInline.listInline--bullet > li:first-child:before {
  content: "";
  display: none;
}
.listHeap {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-top: -4px;
}
.listHeap > li {
  margin: 0;
  padding: 0;
  display: inline-block;
  margin-right: -1px;
  margin-top: 4px;
}
.listHeap > li:last-child {
  margin-right: 0;
}
.listColumns {
  -moz-column-count: 2;
  -webkit-column-count: 2;
  column-count: 2;
  -moz-column-gap: 1em;
  -webkit-column-gap: 1em;
  column-gap: 1em;
}
@media (max-width: 480px) {
  .listColumns {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }
}
.listColumns > li {
  -webkit-column-break-inside: avoid;
  break-inside: avoid-column;
  page-break-inside: avoid;
  position: relative;
}
.listColumns.listColumns--spaced > li {
  margin-bottom: .5em;
}
.listColumns.listColumns--narrow {
  -moz-column-count: 2;
  -webkit-column-count: 2;
  column-count: 2;
  -moz-column-gap: 1em;
  -webkit-column-gap: 1em;
  column-gap: 1em;
}
.listColumns.listColumns--together {
  -moz-column-gap: 0;
  -webkit-column-gap: 0;
  column-gap: 0;
}
.listColumns.listColumns--collapsed {
  display: inline-block;
}
.listColumns.listColumns--3 {
  -moz-column-count: 3;
  -webkit-column-count: 3;
  column-count: 3;
  -moz-column-gap: 1em;
  -webkit-column-gap: 1em;
  column-gap: 1em;
}
@media (max-width: 800px) {
  .listColumns.listColumns--3 {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
    -moz-column-gap: 1em;
    -webkit-column-gap: 1em;
    column-gap: 1em;
  }
}
@media (max-width: 800px) and (max-width: 480px) {
  .listColumns.listColumns--3 {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }
}
.listColumns.listColumns--4 {
  -moz-column-count: 4;
  -webkit-column-count: 4;
  column-count: 4;
  -moz-column-gap: 1em;
  -webkit-column-gap: 1em;
  column-gap: 1em;
}
@media (max-width: 800px) {
  .listColumns.listColumns--4 {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
    -moz-column-gap: 1em;
    -webkit-column-gap: 1em;
    column-gap: 1em;
  }
}
@media (max-width: 800px) and (max-width: 480px) {
  .listColumns.listColumns--4 {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }
}
.textHighlight {
  font-style: normal;
  font-weight: 700;
}
.textHighlight.textHighlight--attention {
  color: #f2930d;
}
.categoryList {
  display: none;
  list-style: none;
  margin: 0;
  padding: 0;
}
.categoryList.is-active {
  display: block;
}
.categoryList-item {
  padding: 0;
  text-decoration: none;
  font-size: 15px;
}
.categoryList-item.categoryList-item--small {
  font-size: 13px;
}
.categoryList-item .categoryList {
  padding-left: 10px;
}
.categoryList-itemDesc {
  display: block;
  font-size: 12px;
  font-weight: 400;
  color: #8c8c8c;
  margin-top: -6px;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
}
.categoryList-header {
  padding: 6px 0;
  margin: 0;
  color: #47a7eb;
  text-decoration: none;
  font-weight: 700;
}
.categoryList-header.categoryList-header--muted {
  color: #8c8c8c;
}
.categoryList-header:before,
.categoryList-header:after {
  content: " ";
  display: table;
}
.categoryList-header:after {
  clear: both;
}
.categoryList-header a {
  color: inherit;
  text-decoration: none;
}
.categoryList-header a:hover {
  text-decoration: underline;
}
.categoryList-itemRow {
  display: flex;
  min-width: 0;
}
.categoryList-link {
  display: block;
  flex-grow: 1;
  padding: 6px 6px;
  text-decoration: none;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
}
.categoryList-link:hover {
  text-decoration: none;
}
.categoryList-link.is-selected {
  font-weight: 700;
}
.categoryList-toggler + .categoryList-link,
.categoryList-togglerSpacer + .categoryList-link {
  padding-left: 0;
}
.categoryList-label {
  margin-left: auto;
  align-self: center;
  padding-right: 6px;
}
.categoryList-toggler {
  display: inline-block;
  padding: 6px 6px;
  text-decoration: none;
  flex-grow: 0;
  line-height: 1;
}
.categoryList-toggler:hover {
  text-decoration: none;
}
.categoryList-toggler:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 80%;
  content: "\f078";
  display: inline-block;
  width: 1em;
}
.categoryList-toggler.is-active:after {
  content: "\f077";
  display: inline-block;
  width: 1em;
}
.categoryList-togglerSpacer {
  display: inline-block;
  visibility: hidden;
  padding: 6px 6px;
}
.categoryList-togglerSpacer:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 80%;
  content: "\f078";
  display: inline-block;
  width: 1em;
}
.blocks {
  margin-bottom: 20px;
}
.blocks:last-child {
  margin-bottom: 0;
}
.blocks .block {
  margin-bottom: 10px;
}
.blocks .block:last-child {
  margin-bottom: 0;
}
.blocks.blocks--close .block {
  margin-bottom: 5px;
}
.blocks.blocks--separated + .blocks {
  padding-top: 20px;
  border-top: 1px solid #d8d8d8;
}
.blocks-header {
  font-size: 20px;
  font-weight: 400;
  color: #8c8c8c;
  margin: 0;
  padding: 0;
  margin-bottom: 5px;
}
.blocks-header.blocks-header--strong {
  color: #505050;
}
.blocks-header.blocks-header--strong .blocks-desc {
  color: #8c8c8c;
}
.blocks-textJoiner {
  display: table;
  width: 100%;
  margin-bottom: 10px;
  padding: 0 6px;
}
.blocks-textJoiner > span {
  display: table-cell;
  position: relative;
}
.blocks-textJoiner > span:before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  border-top: 1px solid #d8d8d8;
}
.blocks-textJoiner > em {
  display: table-cell;
  padding: 0 10px;
  width: 1%;
  white-space: nowrap;
  font-size: 24px;
  line-height: 1;
  font-style: normal;
  text-align: center;
}
.block {
  margin-bottom: 20px;
}
.block.block--close {
  margin-bottom: 5px;
}
.block.block--treeEntryChooser .block-header {
  font-size: 17px;
}
.block.block--treeEntryChooser .block-header .block-desc {
  font-size: 11px;
}
.block.block--treeEntryChooser .block-row {
  padding-top: 6px;
  padding-bottom: 6px;
}
.block.block--treeEntryChooser .contentRow.is-disabled {
  opacity: 0.5;
}
.block.block--treeEntryChooser .contentRow-title {
  font-size: 15px;
}
.block.block--treeEntryChooser .contentRow-minor {
  font-size: 12px;
}
.block.block--treeEntryChooser .contentRow-suffix {
  font-size: 13px;
}
.block-outer {
  padding-bottom: 6px;
}
.block-outer:before,
.block-outer:after {
  content: " ";
  display: table;
}
.block-outer:after {
  clear: both;
}
.block-outer:empty {
  display: none;
}
.block-outer.block-outer--after {
  padding-top: 6px;
  padding-bottom: 0;
}
.block-outer .block-outer-hint {
  font-size: 13px;
  color: #8c8c8c;
}
.block-outer-main {
  float: left;
}
.block-outer-opposite {
  float: right;
}
.block-outer-middle {
  text-align: center;
}
.block-container {
  color: #141414;
  background: #fefefe;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-radius: 4px;
}
.block-container.block-container--none {
  background: none;
  border: none;
  color: #141414;
  padding: 0;
}
@media (min-width: 610px) {
  .block-container:not(.block-container--noStripRadius) > :first-child,
  .block-topRadiusContent,
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .blockLink:first-child {
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > :last-child,
  .block-bottomRadiusContent,
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .blockLink:last-child,
  .block-container:not(.block-container--noStripRadius) > .tabPanes:last-child > [role=tabpanel] > :last-child {
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:first-child,
  .block-topRadiusContent.dataList tbody:first-child .dataList-row:first-child > .dataList-cell:first-child,
  .block-topRadiusContent > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:first-child,
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:first-child,
  .block-topRadiusContent.dataList thead:first-child .dataList-row:first-child > .dataList-cell:first-child,
  .block-topRadiusContent > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:first-child {
    border-top-left-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:last-child,
  .block-topRadiusContent.dataList tbody:first-child .dataList-row:first-child > .dataList-cell:last-child,
  .block-topRadiusContent > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:last-child,
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:last-child,
  .block-topRadiusContent.dataList thead:first-child .dataList-row:first-child > .dataList-cell:last-child,
  .block-topRadiusContent > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:last-child {
    border-top-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .formRow:first-child > dt,
  .block-topRadiusContent.formRow > dt,
  .block-topRadiusContent > .formRow:first-child > dt {
    border-top-left-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .formRow:first-child > dd,
  .block-topRadiusContent.formRow > dd,
  .block-topRadiusContent > .formRow:first-child > dd {
    border-top-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .dataList:last-child tbody:last-child .dataList-row:last-child > .dataList-cell:first-child,
  .block-bottomRadiusContent.dataList tbody:last-child .dataList-row:last-child > .dataList-cell:first-child,
  .block-bottomRadiusContent > .dataList:last-child tbody:last-child .dataList-row:last-child > .dataList-cell:first-child {
    border-bottom-left-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .dataList:last-child tbody:last-child .dataList-row:last-child > .dataList-cell:last-child,
  .block-bottomRadiusContent.dataList tbody:last-child .dataList-row:last-child > .dataList-cell:last-child,
  .block-bottomRadiusContent > .dataList:last-child tbody:last-child .dataList-row:last-child > .dataList-cell:last-child {
    border-bottom-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .formRow:last-child > dt,
  .block-bottomRadiusContent.formRow > dt,
  .block-bottomRadiusContent > .formRow:last-child > dt {
    border-bottom-left-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .formRow:last-child > dd,
  .block-bottomRadiusContent.formRow > dd,
  .block-bottomRadiusContent > .formRow:last-child > dd {
    border-bottom-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child .formSubmitRow:not(.is-sticky) > dt,
  .block-container:not(.block-container--noStripRadius) > .formSubmitRow:not(.is-sticky):last-child > dt,
  .block-bottomRadiusContent > .formSubmitRow:not(.is-sticky) > dt {
    border-bottom-left-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child .formSubmitRow:not(.is-sticky) > dd,
  .block-container:not(.block-container--noStripRadius) > .formSubmitRow:not(.is-sticky):last-child > dd,
  .block-bottomRadiusContent > .formSubmitRow:not(.is-sticky) > dd {
    border-bottom-right-radius: 3px;
  }
  .block-container:not(.block-container--noStripRadius) > .block-body:last-child .formSubmitRow:not(.is-sticky) .formSubmitRow-bar,
  .block-container:not(.block-container--noStripRadius) > .formSubmitRow:not(.is-sticky):last-child .formSubmitRow-bar,
  .block-bottomRadiusContent > .formSubmitRow:not(.is-sticky) .formSubmitRow-bar {
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
  }
}
.block-header {
  padding: 6px 10px;
  margin: 0;
  font-weight: 400;
  text-decoration: none;
  font-size: 20px;
  color: #141414;
  font-weight: 700;
  background: #fefefe;
  border-bottom: 1px solid #dfdfdf;
}
.block-header:before,
.block-header:after {
  content: " ";
  display: table;
}
.block-header:after {
  clear: both;
}
.block-header a {
  color: inherit;
  text-decoration: none;
}
.block-header a:hover {
  text-decoration: underline;
}
.block-header.block-header--separated {
  border-top: 1px solid #dfdfdf;
}
.block-header .block-desc {
  color: rgba(20, 20, 20, 0.7);
}
.block-header .block-desc a {
  color: inherit;
  text-decoration: underline;
}
.block-minorHeader {
  padding: 6px 10px;
  margin: 0;
  font-weight: 400;
  text-decoration: none;
  font-size: 17px;
  color: #47a7eb;
}
.block-minorHeader:before,
.block-minorHeader:after {
  content: " ";
  display: table;
}
.block-minorHeader:after {
  clear: both;
}
.block-minorHeader a {
  color: inherit;
  text-decoration: none;
}
.block-minorHeader a:hover {
  text-decoration: underline;
}
.block-body + .block-minorHeader {
  border-top: 1px solid #dfdfdf;
}
.block-minorHeader .block-desc a {
  color: inherit;
  text-decoration: underline;
}
.block-minorHeader--spaced {
  margin-top: 3px;
}
.block-minorHeader--small {
  font-size: 13px;
}
.block-tabHeader {
  padding: 0;
  margin: 0;
  font-weight: 400;
  font-size: 15px;
  color: #ededed;
  background: #2577b1;
  border-bottom: 1px solid #d8d8d8;
  font-size: 0;
}
.block-tabHeader .tabs-tab,
.block-tabHeader .tabs-extra,
.block-tabHeader .hScroller-action {
  font-size: 15px;
}
.block-tabHeader .tabs-tab {
  padding: 6px 10px 3px;
  border-bottom: 3px solid transparent;
}
.block-tabHeader .tabs-tab:hover {
  color: #fefefe;
  background: rgba(254, 254, 254, 0.1);
}
.block-tabHeader .tabs-tab.is-active {
  background: none;
  color: #fefefe;
  border-color: #ededed;
}
.block-tabHeader .block-tabHeader-extra {
  float: right;
  color: inherit;
  font-size: 15px;
  padding: 6px 10px;
}
.block-tabHeader .hScroller-action {
  color: #ededed;
}
.block-tabHeader .hScroller-action:hover {
  color: #fefefe;
}
.block-tabHeader .hScroller-action.hScroller-action--start {
  background: #2577b1;
  background: linear-gradient(to right, #2577b1 66%, rgba(37, 119, 177, 0) 100%);
}
.block-tabHeader .hScroller-action.hScroller-action--end {
  background: #2577b1;
  background: linear-gradient(to right, rgba(37, 119, 177, 0) 0%, #2577b1 33%);
}
.block-minorTabHeader {
  padding: 0;
  margin: 0;
  font-weight: 400;
  font-size: 15px;
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #d8d8d8;
  font-size: 0;
}
.block-minorTabHeader .tabs-tab,
.block-minorTabHeader .tabs-extra,
.block-minorTabHeader .hScroller-action {
  font-size: 15px;
}
.block-minorTabHeader .tabs-tab {
  padding: 6px 10px 3px;
  border-bottom: 3px solid transparent;
}
.block-minorTabHeader .tabs-tab:hover {
  color: #47a7eb;
}
.block-minorTabHeader .tabs-tab.is-active {
  background: none;
  color: #47a7eb;
  border-color: #47a7eb;
}
.block-minorTabHeader .hScroller-action {
  color: #2577b1;
}
.block-minorTabHeader .hScroller-action:hover {
  color: #47a7eb;
}
.block-minorTabHeader .hScroller-action.hScroller-action--start {
  background: #fefefe;
  background: linear-gradient(to right, #fefefe 66%, rgba(254, 254, 254, 0) 100%);
}
.block-minorTabHeader .hScroller-action.hScroller-action--end {
  background: #fefefe;
  background: linear-gradient(to right, rgba(254, 254, 254, 0) 0%, #fefefe 33%);
}
.block-filterBar {
  padding: 6px 10px;
  font-size: 13px;
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #cbcbcb;
  background: linear-gradient(0deg, #fefefe, #fefefe);
}
.block-filterBar.block-filterBar--standalone {
  padding: 10px 10px;
  border: 1px solid #d8d8d8;
  border-radius: 3px;
}
@media (max-width: 610px) {
  .block-filterBar.block-filterBar--standalone {
    border-radius: 0;
    border-left: none;
    border-right: none;
  }
}
.block-filterBar .filterBar-filterToggle {
  background: #edf3f8;
}
.block-filterBar .filterBar-filterToggle:hover,
.block-filterBar .filterBar-menuTrigger:hover {
  text-decoration: none;
  background: #dbe8f2;
}
.block-filterBar .filterBar-menuTrigger {
  margin-right: -5px;
}
.block-textHeader {
  margin: 3px 0;
  padding: 0;
  font-weight: 400;
  font-size: 17px;
  color: #47a7eb;
}
.block-textHeader:before,
.block-textHeader:after {
  content: " ";
  display: table;
}
.block-textHeader:after {
  clear: both;
}
.block-textHeader a {
  color: inherit;
  text-decoration: none;
}
.block-textHeader a:hover {
  text-decoration: underline;
}
.block-textHeader.block-textHeader--scaled {
  font-size: inherit;
}
.block-textHeader .block-textHeader-highlight {
  color: #141414;
}
.block-textHeader .block-desc a {
  color: inherit;
  text-decoration: underline;
}
.block-textHeader:first-child {
  margin-top: 0;
}
.block-formSectionHeader {
  padding: 6px 10px;
  margin: 0;
  font-weight: 400;
  text-decoration: none;
  font-size: 17px;
  color: #47a7eb;
  border-top: 1px solid #d8d8d8;
  border-bottom: 1px solid #e7e7e7;
}
.block-formSectionHeader:before,
.block-formSectionHeader:after {
  content: " ";
  display: table;
}
.block-formSectionHeader:after {
  clear: both;
}
.block-formSectionHeader a {
  color: inherit;
  text-decoration: none;
}
.block-formSectionHeader a:hover {
  text-decoration: underline;
}
.block-formSectionHeader .block-desc a {
  color: inherit;
  text-decoration: underline;
}
.block-container > .block-formSectionHeader:first-child,
.block-body--collapsible .block-formSectionHeader:first-child,
.block-header + .block-formSectionHeader {
  border-top: none;
}
.block-formSectionHeader .block-formSectionHeader-aligner {
  display: inline-block;
  text-align: right;
  min-width: 33%;
  min-width: calc((33%) - (3.3px) - (10px) - (1px));
  max-width: 100%;
}
@media (max-width: 540px) {
  .block-formSectionHeader .block-formSectionHeader-aligner {
    display: inline;
    text-align: left;
    min-width: 0;
    padding-left: 0;
  }
}
@media (max-width: 540px) {
  .block-formSectionHeader {
    padding-left: 10px;
  }
}
.block-formSectionHeader .block-formSectionHeader-multiChecker {
  float: right;
}
.block-formSectionHeader--small {
  font-size: 15px;
}
.block-desc,
.blocks-desc {
  display: block;
  font-size: 12px;
  font-weight: 400;
}
.block-body {
  list-style: none;
  margin: 0;
  padding: 0;
}
.block-body.block-body--collapsible {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
}
.has-no-js .block-body.block-body--collapsible {
  display: block;
}
.block-body.block-body--collapsible.is-active {
  display: block;
  opacity: 1;
}
.block-body.block-body--collapsible.is-transitioning {
  display: block;
}
.block-body.block-body--collapsible.is-active {
  height: auto;
  overflow-y: visible;
}
.block-body.block-body--collapsible.is-transitioning {
  overflow-y: hidden;
}
.block-body.block-body--contained {
  overflow: auto;
  max-height: 300px;
  max-height: 70vh;
}
.block-row {
  margin: 0;
  padding: 6px 10px;
}
.block-row:before,
.block-row:after {
  content: " ";
  display: table;
}
.block-row:after {
  clear: both;
}
.block-row.block-row--alt {
  color: #141414;
  background: #f5f5f5;
}
.block-row.block-row--minor {
  font-size: 13px;
}
.block-row.block-row--separated {
  padding-top: 12px;
  padding-bottom: 12px;
}
.block-row.block-row--separated + .block-row {
  border-top: 1px solid #dfdfdf;
}
.block-row.block-row--connectAbove {
  padding-bottom: 12px;
}
.block-body > .block-row.block-row--connectAbove:last-child {
  padding-bottom: 6px;
}
.block-row.block-row--highlighted {
  color: #141414;
  background: #fefefe;
}
.block-row.block-row--clickable:hover {
  color: #141414;
  background: #fefefe;
}
.block-row.is-mod-selected {
  background: #fff8ee;
}
.block-row > pre:first-child {
  margin-top: 0;
}
.block-row > pre:last-child {
  margin-bottom: 0;
}
.block-separator {
  margin: 0;
  padding: 0;
  border: none;
  border-top: 1px solid #dfdfdf;
}
.block-footer {
  padding: 6px 10px;
  font-size: 12px;
  color: #505050;
  background: #f5f5f5;
  border-top: 1px solid #dfdfdf;
  background: linear-gradient(180deg, #f5f5f5, #fafafa);
}
.block-footer:before,
.block-footer:after {
  content: " ";
  display: table;
}
.block-footer:after {
  clear: both;
}
.block-footer:first-child {
  border: none;
}
[data-app=admin] .block-footer .block-footer-counter,
[data-app=admin] .block-footer .block-footer-select {
  line-height: 30px;
}
.block-footer:not(.block-footer--split) .block-footer-counter {
  float: left;
}
.block-footer:not(.block-footer--split) .block-footer-controls {
  float: right;
}
.block-footer.block-footer--split {
  display: flex;
  align-items: center;
}
.block-footer.block-footer--split .block-footer-main,
.block-footer.block-footer--split .block-footer-counter {
  flex-grow: 1;
}
.block-footer.block-footer--split .block-footer-select:not(:last-child) {
  margin: 0 1em;
}
.block-footer.block-footer--split .block-footer-opposite,
.block-footer.block-footer--split .block-footer-controls {
  margin-left: auto;
}
@media (max-width: 480px) {
  .block-outer {
    text-align: center;
  }
  .block-outer-main,
  .block-outer-opposite {
    float: none;
    text-align: center;
  }
  .block-outer-main + .block-outer-opposite {
    margin-top: 6px;
  }
}
.block-rowMessage {
  margin: 6px 0;
  padding: 6px 10px;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-radius: 4px;
}
.block-rowMessage:before,
.block-rowMessage:after {
  content: " ";
  display: table;
}
.block-rowMessage:after {
  clear: both;
}
.block-rowMessage:first-child {
  margin-top: 0;
}
.block-rowMessage:last-child {
  margin-bottom: 0;
}
.block-rowMessage.block-rowMessage--small {
  font-size: 13px;
  padding: 3px 5px;
}
.block-rowMessage.block-rowMessage--center {
  text-align: center;
}
.block-rowMessage.block-rowMessage--highlight {
  color: #141414;
  background: #fefefe;
}
.block-rowMessage--highlight.block-rowMessage--iconic:before {
  content: "\f05a";
}
.block-rowMessage.block-rowMessage--important {
  color: #505050;
  background: #ececec;
  border-left: 3px solid #f2930d;
}
.block-rowMessage.block-rowMessage--important a {
  color: #f2930d;
}
.block-rowMessage--important.block-rowMessage--iconic:before {
  content: "\f06a";
  color: ;
}
.block-rowMessage.block-rowMessage--success {
  border-left: 3px solid #63b265;
  background: #daf3d8;
  color: #3d793f;
}
.block-rowMessage.block-rowMessage--success a {
  color: inherit;
  text-decoration: underline;
}
.block-rowMessage--success.block-rowMessage--iconic:before {
  content: "\f058";
  color: #63b265;
}
.block-rowMessage.block-rowMessage--warning {
  border-left: 3px solid #dcda54;
  background: #fbf7e2;
  color: #84653d;
}
.block-rowMessage.block-rowMessage--warning a {
  color: inherit;
  text-decoration: underline;
}
.block-rowMessage--warning.block-rowMessage--iconic:before {
  content: "\f071";
  color: #dcda54;
}
.block-rowMessage.block-rowMessage--error {
  border-left: 3px solid #c84448;
  background: #fde9e9;
  color: #c84448;
}
.block-rowMessage.block-rowMessage--error a {
  color: inherit;
  text-decoration: underline;
}
.block-rowMessage--error.block-rowMessage--iconic:before {
  content: "\f057";
  color: #c84448;
}
.blockMessage {
  margin-bottom: 20px;
  padding: 6px 10px;
  color: #141414;
  background: #fefefe;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-radius: 4px;
}
.blockMessage:before,
.blockMessage:after {
  content: " ";
  display: table;
}
.blockMessage:after {
  clear: both;
}
.blockMessage.blockMessage--none {
  background: none;
  border: none;
  color: #141414;
  padding: 0;
}
.blockMessage.blockMessage--close {
  margin-top: 5px;
  margin-bottom: 5px;
}
.blockMessage.blockMessage--small {
  font-size: 13px;
  padding: 3px 5px;
}
.blockMessage.blockMessage--center {
  text-align: center;
}
.blockMessage.blockMessage--highlight {
  color: #141414;
  background: #fefefe;
}
.blockMessage--highlight.blockMessage--iconic:before {
  content: "\f05a";
}
.blockMessage.blockMessage--important {
  color: #505050;
  background: #ececec;
  border-left: 3px solid #f2930d;
}
.blockMessage.blockMessage--important a {
  color: #f2930d;
}
.blockMessage--important.blockMessage--iconic:before {
  content: "\f06a";
  color: ;
}
.blockMessage.blockMessage--success {
  border-left: 3px solid #63b265;
  background: #daf3d8;
  color: #3d793f;
}
.blockMessage.blockMessage--success a {
  color: inherit;
  text-decoration: underline;
}
.blockMessage--success.blockMessage--iconic:before {
  content: "\f058";
  color: #63b265;
}
.blockMessage.blockMessage--warning {
  border-left: 3px solid #dcda54;
  background: #fbf7e2;
  color: #84653d;
}
.blockMessage.blockMessage--warning a {
  color: inherit;
  text-decoration: underline;
}
.blockMessage--warning.blockMessage--iconic:before {
  content: "\f071";
  color: #dcda54;
}
.blockMessage.blockMessage--error {
  border-left: 3px solid #c84448;
  background: #fde9e9;
  color: #c84448;
}
.blockMessage.blockMessage--error a {
  color: inherit;
  text-decoration: underline;
}
.blockMessage--error.blockMessage--iconic:before {
  content: "\f057";
  color: #c84448;
}
.blockMessage--iconic,
.block-rowMessage--iconic {
  text-align: left;
  position: relative;
  padding-left: 4em;
  min-height: 4em;
}
.blockMessage--iconic:before,
.block-rowMessage--iconic:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 280%;
  position: absolute;
  top: 0;
  left: 6px;
}
.blockStatus {
  color: #141414;
  background: #f5f5f5;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-left: 3px solid #f2930d;
  border-radius: 4px;
  margin: 0;
  padding: 6px 0;
  font-size: 13px;
  text-align: left;
}
.blockStatus > dt {
  display: none;
}
.blockStatus.blockStatus--info {
  border-left-color: #47a7eb;
}
.blockStatus.blockStatus--simple {
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
}
.blockStatus.blockStatus--standalone {
  margin-bottom: 10px;
}
.blockStatus-message {
  display: block;
  padding: 0 6px;
  margin: .2em 0 0;
}
.blockStatus-message:first-of-type {
  margin-top: 0;
}
.blockStatus-message:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  min-width: .8em;
  color: #f2930d;
}
.blockStatus-message--deleted::before {
  content: "\f1f8\20";
}
.blockStatus-message--locked::before {
  content: "\f023\20";
}
.blockStatus-message--moderated::before {
  content: "\f132\20";
}
.blockStatus-message--warning:before {
  content: "\f071\20";
}
.blockStatus-message--ignored:before {
  content: "\f131\20";
}
.blockLink {
  display: block;
  padding: 6px 10px;
  text-decoration: none;
  cursor: pointer;
}
.blockLink.is-selected {
  font-weight: 700;
  background: #fefefe;
  border-left: 3px solid #47a7eb;
  padding-left: 7px;
}
.blockLink:hover {
  background: #fefefe;
  text-decoration: inherit;
}
.blockLink-desc {
  display: block;
  color: #8c8c8c;
  font-size: 12px;
  font-weight: 400;
}
.blockLinkSplitToggle {
  display: flex;
  padding: 0;
  text-decoration: none;
  cursor: pointer;
}
.blockLinkSplitToggle.is-selected {
  font-weight: 700;
  background: #fefefe;
}
.blockLinkSplitToggle:hover {
  background: #fefefe;
  text-decoration: inherit;
}
.blockLinkSplitToggle-link {
  display: block;
  padding: 6px 10px;
  text-decoration: none;
  flex-grow: 1;
}
.blockLinkSplitToggle-link:hover {
  text-decoration: none;
}
.blockLinkSplitToggle.is-selected .blockLinkSplitToggle-link {
  border-left: 3px solid #47a7eb;
  padding-left: 7px;
}
.blockLinkSplitToggle-toggle {
  display: inline-block;
  padding: 6px 10px;
  text-decoration: none;
  flex-grow: 0;
  line-height: 1;
}
.blockLinkSplitToggle-toggle:hover {
  text-decoration: none;
}
.blockLinkSplitToggle-toggle:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 80%;
  content: "\f078";
}
.blockLinkSplitToggle-toggle.is-active:after {
  content: "\f077";
}
.blockLink--iconic i:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  min-width: 1em;
  position: absolute;
  left: 10px;
  top: 8px;
  display: none !important;
}
.blockLink--iconic--started i:after {
  content: "\f15c";
}
.blockLink--iconic--contributed i:after {
  content: "\f086";
}
.blockLink--iconic--watched i:after {
  content: "\f02e";
}
.blockLink--iconic--unanswered i:after {
  content: "\f059";
}
.fauxBlockLink {
  position: relative;
}
.fauxBlockLink a,
.fauxBlockLink .fauxBlockLink-link {
  position: relative;
  z-index: 2;
}
.fauxBlockLink .fauxBlockLink-blockLink {
  position: static;
}
.fauxBlockLink .fauxBlockLink-blockLink:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}
.fauxBlockLink.fauxBlockLink--noHover .fauxBlockLink-blockLink:hover {
  text-decoration: none;
}
.blockMessage p:first-child,
.blockStatus p:first-child,
.block-row p:first-child {
  margin-top: 0;
}
.blockMessage p:last-child,
.blockStatus p:last-child,
.block-row p:last-child {
  margin-bottom: 0;
}
@media (max-width: 610px) {
  .block-container,
  .blockMessage {
    /* margin-left: -10px;
		margin-right: -10px; */
    border-radius: 0;
    border-left: none;
    border-right: none;
  }
  .blockStatus {
    margin-left: -10px;
    margin-right: -10px;
    border-radius: 0;
    border-right: none;
  }
  .blockMessage.blockMessage--none {
    margin-left: 0;
    margin-right: 0;
  }
}
.fixedMessageBar {
  color: #ffffff;
  background: #8c8c8c;
  border-top: 1px solid #737373;
  border-bottom: 1px solid #737373;
  padding: 10px;
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
}
.fixedMessageBar.is-active {
  display: block;
  opacity: 1;
}
.fixedMessageBar.is-transitioning {
  display: block;
}
.fixedMessageBar.is-active {
  height: auto;
  overflow-y: visible;
}
.fixedMessageBar.is-transitioning {
  overflow-y: hidden;
}
.fixedMessageBar:before,
.fixedMessageBar:after {
  content: " ";
  display: table;
}
.fixedMessageBar:after {
  clear: both;
}
.fixedMessageBar-inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.fixedMessageBar-message {
  order: 1;
}
.fixedMessageBar-close {
  float: right;
  margin-left: 1em;
  order: 2;
  color: inherit;
}
.fixedMessageBar-close:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
  display: inline-block;
  width: 0.6899999999999999em;
}
.fixedMessageBar-close:hover {
  text-decoration: none;
  color: #e6e6e6;
}
.button,
a.button {
  display: inline-block;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-decoration: none;
  cursor: pointer;
  border: 1px solid transparent;
  white-space: nowrap;
  -webkit-transition:  background-color 0.25s ease;
  transition:  background-color 0.25s ease;
  font-size: 13px;
  color: #141414;
  border-radius: 4px;
  padding-top: 5px;
  padding-right: 10px;
  padding-bottom: 5px;
  padding-left: 10px;
  text-align: center;
  color: #505050;
  background: #ececec;
  border: 1px solid #d8d8d8;
  border-color: #f9f9f9 #dfdfdf #dfdfdf #f9f9f9;
}
.button a,
a.button a {
  color: inherit;
  text-decoration: none;
}
.button.button--splitTrigger > .button-text,
a.button.button--splitTrigger > .button-text {
  border-right-color: #dfdfdf;
}
.button.button--splitTrigger > .button-menu,
a.button.button--splitTrigger > .button-menu {
  border-left-color: #f9f9f9;
}
.button:not(.button--splitTrigger):hover,
a.button:not(.button--splitTrigger):hover,
.button.button--splitTrigger > .button-text:hover,
a.button.button--splitTrigger > .button-text:hover,
.button.button--splitTrigger > .button-menu:hover,
a.button.button--splitTrigger > .button-menu:hover,
.button:not(.button--splitTrigger):focus,
a.button:not(.button--splitTrigger):focus,
.button.button--splitTrigger > .button-text:focus,
a.button.button--splitTrigger > .button-text:focus,
.button.button--splitTrigger > .button-menu:focus,
a.button.button--splitTrigger > .button-menu:focus,
.button:not(.button--splitTrigger):active,
a.button:not(.button--splitTrigger):active,
.button.button--splitTrigger > .button-text:active,
a.button.button--splitTrigger > .button-text:active,
.button.button--splitTrigger > .button-menu:active,
a.button.button--splitTrigger > .button-menu:active {
  background-color: #e5dede;
}
.button.button--primary,
a.button.button--primary {
  color: #fefefe;
  background: #47a7eb;
  min-width: 80px;
  border: 1px solid #a8a8a8;
  border-color: #5eb2ed #309ce8 #309ce8 #5eb2ed;
}
.button.button--primary.button--splitTrigger > .button-text,
a.button.button--primary.button--splitTrigger > .button-text {
  border-right-color: #309ce8;
}
.button.button--primary.button--splitTrigger > .button-menu,
a.button.button--primary.button--splitTrigger > .button-menu {
  border-left-color: #5eb2ed;
}
.button.button--primary:not(.button--splitTrigger):hover,
a.button.button--primary:not(.button--splitTrigger):hover,
.button.button--primary.button--splitTrigger > .button-text:hover,
a.button.button--primary.button--splitTrigger > .button-text:hover,
.button.button--primary.button--splitTrigger > .button-menu:hover,
a.button.button--primary.button--splitTrigger > .button-menu:hover,
.button.button--primary:not(.button--splitTrigger):focus,
a.button.button--primary:not(.button--splitTrigger):focus,
.button.button--primary.button--splitTrigger > .button-text:focus,
a.button.button--primary.button--splitTrigger > .button-text:focus,
.button.button--primary.button--splitTrigger > .button-menu:focus,
a.button.button--primary.button--splitTrigger > .button-menu:focus,
.button.button--primary:not(.button--splitTrigger):active,
a.button.button--primary:not(.button--splitTrigger):active,
.button.button--primary.button--splitTrigger > .button-text:active,
a.button.button--primary.button--splitTrigger > .button-text:active,
.button.button--primary.button--splitTrigger > .button-menu:active,
a.button.button--primary.button--splitTrigger > .button-menu:active {
  background-color: #27a0f6;
}
.button.button--cta,
a.button.button--cta {
  color: #ffffff;
  background: #47a7eb;
  border-color: #5eb2ed #309ce8 #309ce8 #5eb2ed;
}
.button.button--cta.button--splitTrigger > .button-text,
a.button.button--cta.button--splitTrigger > .button-text {
  border-right-color: #309ce8;
}
.button.button--cta.button--splitTrigger > .button-menu,
a.button.button--cta.button--splitTrigger > .button-menu {
  border-left-color: #5eb2ed;
}
.button.button--cta:not(.button--splitTrigger):hover,
a.button.button--cta:not(.button--splitTrigger):hover,
.button.button--cta.button--splitTrigger > .button-text:hover,
a.button.button--cta.button--splitTrigger > .button-text:hover,
.button.button--cta.button--splitTrigger > .button-menu:hover,
a.button.button--cta.button--splitTrigger > .button-menu:hover,
.button.button--cta:not(.button--splitTrigger):focus,
a.button.button--cta:not(.button--splitTrigger):focus,
.button.button--cta.button--splitTrigger > .button-text:focus,
a.button.button--cta.button--splitTrigger > .button-text:focus,
.button.button--cta.button--splitTrigger > .button-menu:focus,
a.button.button--cta.button--splitTrigger > .button-menu:focus,
.button.button--cta:not(.button--splitTrigger):active,
a.button.button--cta:not(.button--splitTrigger):active,
.button.button--cta.button--splitTrigger > .button-text:active,
a.button.button--cta.button--splitTrigger > .button-text:active,
.button.button--cta.button--splitTrigger > .button-menu:active,
a.button.button--cta.button--splitTrigger > .button-menu:active {
  background-color: #27a0f6;
}
.button.button--link,
a.button.button--link {
  background: #fefefe;
  color: #141414;
  border-color: #e5e5e5 #cbcbcb #cbcbcb #e5e5e5;
}
.button.button--link.button--splitTrigger > .button-text,
a.button.button--link.button--splitTrigger > .button-text {
  border-right-color: #cbcbcb;
}
.button.button--link.button--splitTrigger > .button-menu,
a.button.button--link.button--splitTrigger > .button-menu {
  border-left-color: #e5e5e5;
}
.button.button--link:hover,
a.button.button--link:hover,
.button.button--link:active,
a.button.button--link:active,
.button.button--link:focus,
a.button.button--link:focus {
  text-decoration: none;
  background: #fefefe;
}
.button.button--plain,
a.button.button--plain {
  background: none;
  color: #141414;
  border: none;
}
.button.button--plain:hover,
a.button.button--plain:hover,
.button.button--plain:active,
a.button.button--plain:active,
.button.button--plain:focus,
a.button.button--plain:focus {
  text-decoration: none;
  background: none;
}
.button.button--alt,
a.button.button--alt {
  background-color: #fefefe;
  color: #141414;
  border-color: #fafafa #e0e0e0 #e0e0e0 #fafafa;
}
.button.button--alt.button--splitTrigger > .button-text,
a.button.button--alt.button--splitTrigger > .button-text {
  border-right-color: #e0e0e0;
}
.button.button--alt.button--splitTrigger > .button-menu,
a.button.button--alt.button--splitTrigger > .button-menu {
  border-left-color: #fafafa;
}
.button.button--alt:hover,
a.button.button--alt:hover,
.button.button--alt:active,
a.button.button--alt:active,
.button.button--alt:focus,
a.button.button--alt:focus {
  background-color: #fefefe;
  color: #141414;
}
.button.button--longText,
a.button.button--longText {
  white-space: normal;
  text-align: left;
}
.button.is-disabled,
a.button.is-disabled {
  color: #8c8c8c;
  font-style: italic;
  background: #efefef;
  cursor: default;
  border-color: #fbfbfb #e2e2e2 #e2e2e2 #fbfbfb;
}
.button.is-disabled.button--splitTrigger > .button-text,
a.button.is-disabled.button--splitTrigger > .button-text {
  border-right-color: #e2e2e2;
}
.button.is-disabled.button--splitTrigger > .button-menu,
a.button.is-disabled.button--splitTrigger > .button-menu {
  border-left-color: #fbfbfb;
}
.button.is-disabled:hover,
a.button.is-disabled:hover,
.button.is-disabled:active,
a.button.is-disabled:active,
.button.is-disabled:focus,
a.button.is-disabled:focus {
  background: #efefef !important;
}
.button.button--scroll,
a.button.button--scroll {
  background: rgba(236, 236, 236, 0.75);
  padding: 5px 8px;
  box-shadow: 1px 2px 2px 0 rgba(0, 0, 0, 0.25);
}
.button.button--small,
a.button.button--small {
  font-size: 13px;
  padding: 3px 6px;
}
.button.button--smaller,
a.button.button--smaller {
  font-size: 12px;
  padding: 2px 5px;
}
.button.button--fullWidth,
a.button.button--fullWidth {
  display: block;
}
.button.button--icon > .button-text:before,
a.button.button--icon > .button-text:before,
.button.button--icon .button-icon,
a.button.button--icon .button-icon {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.button.button--icon > .button-text:before,
a.button.button--icon > .button-text:before,
.button.button--icon > .fa--xf:before,
a.button.button--icon > .fa--xf:before,
.button.button--icon .button-icon,
a.button.button--icon .button-icon {
  font-size: 120%;
  vertical-align: -.1em;
  display: inline-block;
  margin: -0.255em 6px -0.255em 0;
}
.button.button--icon > .fa--xf,
a.button.button--icon > .fa--xf {
  line-height: inherit;
}
.button.button--icon .button-icon,
a.button.button--icon .button-icon {
  height: 1em;
  vertical-align: 0;
}
.button.button--icon.button--iconOnly > .button-text:before,
a.button.button--icon.button--iconOnly > .button-text:before,
.button.button--icon.button--iconOnly > i.fa--xf:before,
a.button.button--icon.button--iconOnly > i.fa--xf:before,
.button.button--icon.button--iconOnly .button-icon,
a.button.button--icon.button--iconOnly .button-icon {
  margin-left: 0;
  margin-right: 0;
}
.button.button--icon.button--padded > .button-text:before,
a.button.button--icon.button--padded > .button-text:before,
.button.button--icon.button--padded > i.fa--xf:before,
a.button.button--icon.button--padded > i.fa--xf:before,
.button.button--icon.button--padded .button-icon,
a.button.button--icon.button--padded .button-icon {
  margin-top: 0;
  margin-bottom: 0;
}
.button.button--icon--add > .button-text:before,
a.button.button--icon--add > .button-text:before {
  content: "\f0fe";
  display: inline-block;
  width: 0.79em;
}
.button.button--icon--confirm > .button-text:before,
a.button.button--icon--confirm > .button-text:before {
  content: "\f00c";
  display: inline-block;
  width: 1em;
}
.button.button--icon--write > .button-text:before,
a.button.button--icon--write > .button-text:before {
  content: "\f044";
  display: inline-block;
  width: 1em;
}
.button.button--icon--import > .button-text:before,
a.button.button--icon--import > .button-text:before {
  content: "\f093";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--export > .button-text:before,
a.button.button--icon--export > .button-text:before {
  content: "\f019";
  display: inline-block;
  width: 1.125em;
}
.button.button--icon--download > .button-text:before,
a.button.button--icon--download > .button-text:before {
  content: "\f019";
  display: inline-block;
  width: 1.125em;
}
.button.button--icon--redirect > .button-text:before,
a.button.button--icon--redirect > .button-text:before {
  content: "\f08e";
  display: inline-block;
  width: 1.125em;
}
.button.button--icon--disable > .button-text:before,
a.button.button--icon--disable > .button-text:before {
  content: "\f011";
}
.button.button--icon--edit > .button-text:before,
a.button.button--icon--edit > .button-text:before {
  content: "\f044";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--save > .button-text:before,
a.button.button--icon--save > .button-text:before {
  content: "\f0c7";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--reply > .button-text:before,
a.button.button--icon--reply > .button-text:before {
  content: "\f3e5";
  display: inline-block;
  width: 1em;
}
.button.button--icon--quote > .button-text:before,
a.button.button--icon--quote > .button-text:before {
  content: "\f10d";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--purchase > .button-text:before,
a.button.button--icon--purchase > .button-text:before {
  content: "\f09d";
  display: inline-block;
  width: 1.11em;
}
.button.button--icon--payment > .button-text:before,
a.button.button--icon--payment > .button-text:before {
  content: "\f09d";
  display: inline-block;
  width: 1.08em;
}
.button.button--icon--convert > .button-text:before,
a.button.button--icon--convert > .button-text:before {
  content: "\f0e7";
  display: inline-block;
  width: 0.5em;
}
.button.button--icon--search > .button-text:before,
a.button.button--icon--search > .button-text:before {
  content: "\f002";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--sort > .button-text:before,
a.button.button--icon--sort > .button-text:before {
  content: "\f0dc";
  display: inline-block;
  width: 0.58em;
}
.button.button--icon--upload > .button-text:before,
a.button.button--icon--upload > .button-text:before {
  content: "\f093";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--attach > .button-text:before,
a.button.button--icon--attach > .button-text:before {
  content: "\f0c6";
  display: inline-block;
  width: 0.79em;
}
.button.button--icon--login > .button-text:before,
a.button.button--icon--login > .button-text:before {
  content: "\f023";
  display: inline-block;
  width: 0.9em;
}
.button.button--icon--rate > .button-text:before,
a.button.button--icon--rate > .button-text:before {
  content: "\f005";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--config > .button-text:before,
a.button.button--icon--config > .button-text:before {
  content: "\f013";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--refresh > .button-text:before,
a.button.button--icon--refresh > .button-text:before {
  content: "\f2f1";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--translate > .button-text:before,
a.button.button--icon--translate > .button-text:before {
  content: "\f0ac";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--vote > .button-text:before,
a.button.button--icon--vote > .button-text:before {
  content: "\f058";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--result > .button-text:before,
a.button.button--icon--result > .button-text:before {
  content: "\f080";
  display: inline-block;
  width: 1.15em;
}
.button.button--icon--history > .button-text:before,
a.button.button--icon--history > .button-text:before {
  content: "\f1da";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--cancel > .button-text:before,
a.button.button--icon--cancel > .button-text:before {
  content: "\f05e";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--close > .button-text:before,
a.button.button--icon--close > .button-text:before {
  content: "\f00d";
  display: inline-block;
  width: 0.79em;
}
.button.button--icon--preview > .button-text:before,
a.button.button--icon--preview > .button-text:before {
  content: "\f06e";
  display: inline-block;
  width: 1em;
}
.button.button--icon--conversation > .button-text:before,
a.button.button--icon--conversation > .button-text:before {
  content: "\f086";
  display: inline-block;
  width: 1em;
}
.button.button--icon--bolt > .button-text:before,
a.button.button--icon--bolt > .button-text:before {
  content: "\f0e7";
  display: inline-block;
  width: 0.5em;
}
.button.button--icon--list > .button-text:before,
a.button.button--icon--list > .button-text:before {
  content: "\f03a";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--prev > .button-text:before,
a.button.button--icon--prev > .button-text:before {
  content: "\f053";
  display: inline-block;
  width: 0.71em;
}
.button.button--icon--next > .button-text:before,
a.button.button--icon--next > .button-text:before {
  content: "\f054";
  display: inline-block;
  width: 0.71em;
}
.button.button--icon--markRead > .button-text:before,
a.button.button--icon--markRead > .button-text:before {
  content: "\f14a";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--user > .button-text:before,
a.button.button--icon--user > .button-text:before {
  content: "\f007";
  display: inline-block;
  width: 0.72em;
}
.button.button--icon--userCircle > .button-text:before,
a.button.button--icon--userCircle > .button-text:before {
  content: "\f2bd";
  display: inline-block;
  width: 1em;
}
.button.button--icon--notificationsOn > .button-text:before,
a.button.button--icon--notificationsOn > .button-text:before {
  content: "\f0f3";
  display: inline-block;
  width: 1em;
}
.button.button--icon--notificationsOff > .button-text:before,
a.button.button--icon--notificationsOff > .button-text:before {
  content: "\f1f6";
  display: inline-block;
  width: 1.15em;
}
.button.button--icon--show > .button-text:before,
a.button.button--icon--show > .button-text:before {
  content: "\f06e";
}
.button.button--icon--hide > .button-text:before,
a.button.button--icon--hide > .button-text:before {
  content: "\f070";
}
.button.button--icon--merge > .button-text:before,
a.button.button--icon--merge > .button-text:before {
  content: "\f066";
  display: inline-block;
  width: 0.86em;
}
.button.button--icon--move > .button-text:before,
a.button.button--icon--move > .button-text:before {
  content: "\f064";
  display: inline-block;
  width: 1em;
}
.button.button--icon--copy > .button-text:before,
a.button.button--icon--copy > .button-text:before {
  content: "\f0c5";
  display: inline-block;
  width: 1em;
}
.button.button--icon--approve > .button-text:before,
a.button.button--icon--approve > .button-text:before,
.button.button--icon--unapprove > .button-text:before,
a.button.button--icon--unapprove > .button-text:before {
  content: "\f132";
  display: inline-block;
  width: 0.72em;
}
.button.button--icon--delete > .button-text:before,
a.button.button--icon--delete > .button-text:before,
.button.button--icon--undelete > .button-text:before,
a.button.button--icon--undelete > .button-text:before {
  content: "\f2ed";
  display: inline-block;
  width: 0.79em;
}
.button.button--icon--stick > .button-text:before,
a.button.button--icon--stick > .button-text:before,
.button.button--icon--unstick > .button-text:before,
a.button.button--icon--unstick > .button-text:before {
  content: "\f08d";
  display: inline-block;
  width: 0.65em;
}
.button.button--icon--lock > .button-text:before,
a.button.button--icon--lock > .button-text:before {
  content: "\f023";
  display: inline-block;
  width: 0.65em;
}
.button.button--icon--unlock > .button-text:before,
a.button.button--icon--unlock > .button-text:before {
  content: "\f09c";
  display: inline-block;
  width: 0.93em;
}
.button.button--icon--bookmark > .button-text:before,
a.button.button--icon--bookmark > .button-text:before {
  content: "\f02e";
}
.button.button--icon--bookmark.is-bookmarked .button-text:before,
a.button.button--icon--bookmark.is-bookmarked .button-text:before {
  font-weight: 900;
  color: #f2930d;
}
.button.button--provider > .button-text:before,
a.button.button--provider > .button-text:before,
.button.button--provider .button-icon,
a.button.button--provider .button-icon {
  font-family: 'Font Awesome 5 Brands';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 120%;
  vertical-align: middle;
  display: inline-block;
  margin: -4px 6px -4px 0;
}
.button.button--provider .button-icon,
a.button.button--provider .button-icon {
  height: 1em;
  vertical-align: 0;
}
.button.button--provider--facebook,
a.button.button--provider--facebook {
  color: #ffffff;
  background-color: #3b5998;
  border-color: #4264aa #344e86 #344e86 #4264aa;
}
.button.button--provider--facebook.button--splitTrigger > .button-text,
a.button.button--provider--facebook.button--splitTrigger > .button-text {
  border-right-color: #344e86;
}
.button.button--provider--facebook.button--splitTrigger > .button-menu,
a.button.button--provider--facebook.button--splitTrigger > .button-menu {
  border-left-color: #4264aa;
}
.button.button--provider--facebook:hover,
a.button.button--provider--facebook:hover,
.button.button--provider--facebook:active,
a.button.button--provider--facebook:active,
.button.button--provider--facebook:focus,
a.button.button--provider--facebook:focus {
  background-color: #2a4c95;
}
.button.button--provider--facebook > .button-text:before,
a.button.button--provider--facebook > .button-text:before {
  content: "\f09a";
  display: inline-block;
  width: 0.58em;
}
.button.button--provider--twitter,
a.button.button--provider--twitter {
  color: #ffffff;
  background-color: #1da1f3;
  border-color: #35abf4 #0c95ea #0c95ea #35abf4;
}
.button.button--provider--twitter.button--splitTrigger > .button-text,
a.button.button--provider--twitter.button--splitTrigger > .button-text {
  border-right-color: #0c95ea;
}
.button.button--provider--twitter.button--splitTrigger > .button-menu,
a.button.button--provider--twitter.button--splitTrigger > .button-menu {
  border-left-color: #35abf4;
}
.button.button--provider--twitter:hover,
a.button.button--provider--twitter:hover,
.button.button--provider--twitter:active,
a.button.button--provider--twitter:active,
.button.button--provider--twitter:focus,
a.button.button--provider--twitter:focus {
  background-color: #009bfc;
}
.button.button--provider--twitter > .button-text:before,
a.button.button--provider--twitter > .button-text:before {
  content: "\f099";
  display: inline-block;
  width: 0.93em;
}
.button.button--provider--google,
a.button.button--provider--google {
  color: #444444;
  background-color: #ffffff;
  border-color: #ffffff #f2f2f2 #f2f2f2 #ffffff;
  border-color: #e9e9e9;
}
.button.button--provider--google.button--splitTrigger > .button-text,
a.button.button--provider--google.button--splitTrigger > .button-text {
  border-right-color: #f2f2f2;
}
.button.button--provider--google.button--splitTrigger > .button-menu,
a.button.button--provider--google.button--splitTrigger > .button-menu {
  border-left-color: #ffffff;
}
.button.button--provider--google:hover,
a.button.button--provider--google:hover,
.button.button--provider--google:active,
a.button.button--provider--google:active,
.button.button--provider--google:focus,
a.button.button--provider--google:focus {
  background-color: #f6f4f4;
}
.button.button--provider--google > .button-text:before,
a.button.button--provider--google > .button-text:before {
  display: none;
}
.button.button--provider--github,
a.button.button--provider--github {
  color: #ffffff;
  background-color: #666666;
  border-color: #737373 #595959 #595959 #737373;
}
.button.button--provider--github.button--splitTrigger > .button-text,
a.button.button--provider--github.button--splitTrigger > .button-text {
  border-right-color: #595959;
}
.button.button--provider--github.button--splitTrigger > .button-menu,
a.button.button--provider--github.button--splitTrigger > .button-menu {
  border-left-color: #737373;
}
.button.button--provider--github:hover,
a.button.button--provider--github:hover,
.button.button--provider--github:active,
a.button.button--provider--github:active,
.button.button--provider--github:focus,
a.button.button--provider--github:focus {
  background-color: #675151;
}
.button.button--provider--github > .button-text:before,
a.button.button--provider--github > .button-text:before {
  content: "\f09b";
  display: inline-block;
  width: 0.86em;
}
.button.button--provider--linkedin,
a.button.button--provider--linkedin {
  color: #ffffff;
  background-color: #0077b5;
  border-color: #0088cf #00669c #00669c #0088cf;
}
.button.button--provider--linkedin.button--splitTrigger > .button-text,
a.button.button--provider--linkedin.button--splitTrigger > .button-text {
  border-right-color: #00669c;
}
.button.button--provider--linkedin.button--splitTrigger > .button-menu,
a.button.button--provider--linkedin.button--splitTrigger > .button-menu {
  border-left-color: #0088cf;
}
.button.button--provider--linkedin:hover,
a.button.button--provider--linkedin:hover,
.button.button--provider--linkedin:active,
a.button.button--provider--linkedin:active,
.button.button--provider--linkedin:focus,
a.button.button--provider--linkedin:focus {
  background-color: #006aa1;
}
.button.button--provider--linkedin > .button-text:before,
a.button.button--provider--linkedin > .button-text:before {
  content: "\f08c";
  display: inline-block;
  width: 0.86em;
}
.button.button--provider--microsoft,
a.button.button--provider--microsoft {
  color: #ffffff;
  background-color: #00bcf2;
  border-color: #0dc9ff #00a8d9 #00a8d9 #0dc9ff;
}
.button.button--provider--microsoft.button--splitTrigger > .button-text,
a.button.button--provider--microsoft.button--splitTrigger > .button-text {
  border-right-color: #00a8d9;
}
.button.button--provider--microsoft.button--splitTrigger > .button-menu,
a.button.button--provider--microsoft.button--splitTrigger > .button-menu {
  border-left-color: #0dc9ff;
}
.button.button--provider--microsoft:hover,
a.button.button--provider--microsoft:hover,
.button.button--provider--microsoft:active,
a.button.button--provider--microsoft:active,
.button.button--provider--microsoft:focus,
a.button.button--provider--microsoft:focus {
  background-color: #00acde;
}
.button.button--provider--microsoft > .button-text:before,
a.button.button--provider--microsoft > .button-text:before {
  content: "\f17a";
  display: inline-block;
  width: 0.93em;
}
.button.button--provider--yahoo,
a.button.button--provider--yahoo {
  color: #ffffff;
  background-color: #410093;
  border-color: #4c00ac #36007a #36007a #4c00ac;
}
.button.button--provider--yahoo.button--splitTrigger > .button-text,
a.button.button--provider--yahoo.button--splitTrigger > .button-text {
  border-right-color: #36007a;
}
.button.button--provider--yahoo.button--splitTrigger > .button-menu,
a.button.button--provider--yahoo.button--splitTrigger > .button-menu {
  border-left-color: #4c00ac;
}
.button.button--provider--yahoo:hover,
a.button.button--provider--yahoo:hover,
.button.button--provider--yahoo:active,
a.button.button--provider--yahoo:active,
.button.button--provider--yahoo:focus,
a.button.button--provider--yahoo:focus {
  background-color: #38007f;
}
.button.button--provider--yahoo > .button-text:before,
a.button.button--provider--yahoo > .button-text:before {
  content: "\f19e";
  display: inline-block;
  width: 0.86em;
}
.button.button--splitTrigger,
a.button.button--splitTrigger {
  padding: 0;
  font-size: 0;
  display: inline-block;
}
.button.button--splitTrigger > .button-text,
a.button.button--splitTrigger > .button-text {
  border-right: 1px solid transparent;
}
.button.button--splitTrigger > .button-menu,
a.button.button--splitTrigger > .button-menu {
  border-left: 1px solid transparent;
}
.button.button--splitTrigger:before,
a.button.button--splitTrigger:before,
.button.button--splitTrigger:after,
a.button.button--splitTrigger:after {
  content: " ";
  display: table;
}
.button.button--splitTrigger:after,
a.button.button--splitTrigger:after {
  clear: both;
}
.button.button--splitTrigger button.button-text,
a.button.button--splitTrigger button.button-text {
  background: transparent;
  border: none;
  border-right: 1px solid transparent;
  color: inherit;
}
.button.button--splitTrigger > .button-text,
a.button.button--splitTrigger > .button-text,
.button.button--splitTrigger > .button-menu,
a.button.button--splitTrigger > .button-menu {
  font-size: 13px;
  color: #141414;
  border-radius: 4px;
  padding-top: 5px;
  padding-right: 10px;
  padding-bottom: 5px;
  padding-left: 10px;
  text-align: center;
  display: inline-block;
}
.button.button--splitTrigger > .button-text:hover:after,
a.button.button--splitTrigger > .button-text:hover:after,
.button.button--splitTrigger > .button-menu:hover:after,
a.button.button--splitTrigger > .button-menu:hover:after {
  opacity: 1;
}
.button.button--splitTrigger > .button-text,
a.button.button--splitTrigger > .button-text {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.button.button--splitTrigger > .button-menu,
a.button.button--splitTrigger > .button-menu {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  padding-right: 10px;
  padding-left: 10px;
}
.button.button--splitTrigger > .button-menu:after,
a.button.button--splitTrigger > .button-menu:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f0d7";
  font-weight: 900;
  unicode-bidi: isolate;
  opacity: .5;
}
.buttonGroup {
  display: inline-block;
  vertical-align: top;
}
.buttonGroup:before,
.buttonGroup:after {
  content: " ";
  display: table;
}
.buttonGroup:after {
  clear: both;
}
.buttonGroup.buttonGroup--aligned {
  vertical-align: middle;
}
.buttonGroup > .button {
  float: left;
}
.buttonGroup > .button:not(:first-child) {
  border-left: none;
}
.buttonGroup > .button:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.buttonGroup > .button:first-child:not(:last-child) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.buttonGroup > .button:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.buttonGroup > .buttonGroup-buttonWrapper {
  float: left;
}
.buttonGroup > .buttonGroup-buttonWrapper:not(:first-child) > .button {
  border-left: none;
}
.buttonGroup > .buttonGroup-buttonWrapper:not(:first-child):not(:last-child) > .button {
  border-radius: 0;
}
.buttonGroup > .buttonGroup-buttonWrapper:first-child:not(:last-child) > .button {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.buttonGroup > .buttonGroup-buttonWrapper:last-child:not(:first-child) > .button {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.toggleButton > input {
  display: none;
}
.toggleButton > span {
  color: #8c8c8c;
  font-style: italic;
  background: #efefef;
  cursor: default;
  border-color: #fbfbfb #e2e2e2 #e2e2e2 #fbfbfb;
}
.toggleButton > span.button--splitTrigger > .button-text {
  border-right-color: #e2e2e2;
}
.toggleButton > span.button--splitTrigger > .button-menu {
  border-left-color: #fbfbfb;
}
.toggleButton.toggleButton--small > span {
  font-size: 12px;
  padding: 3px;
}
.toggleButton > input:checked + span {
  color: #505050;
  background: #ececec;
  border: 1px solid #d8d8d8;
  border-color: #f9f9f9 #dfdfdf #dfdfdf #f9f9f9;
}
.toggleButton > input:checked + span.button--splitTrigger > .button-text {
  border-right-color: #dfdfdf;
}
.toggleButton > input:checked + span.button--splitTrigger > .button-menu {
  border-left-color: #f9f9f9;
}
.toggleButton > input:checked + span:not(.button--splitTrigger):hover,
.toggleButton > input:checked + span.button--splitTrigger > .button-text:hover,
.toggleButton > input:checked + span.button--splitTrigger > .button-menu:hover,
.toggleButton > input:checked + span:not(.button--splitTrigger):focus,
.toggleButton > input:checked + span.button--splitTrigger > .button-text:focus,
.toggleButton > input:checked + span.button--splitTrigger > .button-menu:focus,
.toggleButton > input:checked + span:not(.button--splitTrigger):active,
.toggleButton > input:checked + span.button--splitTrigger > .button-text:active,
.toggleButton > input:checked + span.button--splitTrigger > .button-menu:active {
  background-color: #e5dede;
}
.u-scrollButtons {
  position: fixed;
  bottom: 30px;
  right: 5px;
  z-index: 900;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  opacity: 0;
  display: none;
}
.has-hiddenscroll .u-scrollButtons {
  right: 20px;
}
.u-scrollButtons.is-transitioning {
  display: block;
}
.u-scrollButtons.is-active {
  display: block;
  opacity: 1;
}
.u-scrollButtons .button {
  display: block;
}
.u-scrollButtons .button + .button {
  margin-top: 5px;
}
meter.meterBar {
  margin: 3px auto 3px;
  width: 100%;
  height: 10px;
  background: none;
  background-color: #efefef;
}
meter.meterBar::-webkit-meter-bar {
  background: none;
  background-color: #efefef;
}
meter.meterBar::-webkit-meter-optimum-value {
  background: #63b265;
}
meter.meterBar::-webkit-meter-suboptimum-value {
  background: #dcda54;
}
meter.meterBar::-webkit-meter-even-less-good-value {
  background: #c84448;
}
:-moz-meter-optimum::-moz-meter-bar {
  background: #63b265;
}
:-moz-meter-sub-optimum::-moz-meter-bar {
  background: #dcda54;
}
:-moz-meter-sub-sub-optimum::-moz-meter-bar {
  background: #c84448;
}
.meterBarLabel {
  font-size: 13px;
}
.input {
  font-size: 15px;
  color: #141414;
  background: #fefefe;
  border-width: 1px;
  border-style: solid;
  border-top-color: #cbcbcb;
  border-right-color: #dfdfdf;
  border-bottom-color: #dfdfdf;
  border-left-color: #cbcbcb;
  border-radius: 4px;
  padding: 6px;
  display: block;
  width: 100%;
  line-height: 1.4;
  text-align: left;
  word-wrap: break-word;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.input::-webkit-input-placeholder {
  color: rgba(20, 20, 20, 0.4);
}
.input::-moz-placeholder {
  color: rgba(20, 20, 20, 0.4);
}
.input:-moz-placeholder {
  color: rgba(20, 20, 20, 0.4);
}
.input:-ms-input-placeholder {
  color: rgba(20, 20, 20, 0.4);
}
.input:focus,
.input.is-focused {
  outline: 0;
  background: #fefefe;
}
.input:focus::-webkit-input-placeholder,
.input.is-focused::-webkit-input-placeholder {
  color: rgba(20, 20, 20, 0.5);
}
.input:focus::-moz-placeholder,
.input.is-focused::-moz-placeholder {
  color: rgba(20, 20, 20, 0.5);
}
.input:focus:-moz-placeholder,
.input.is-focused:-moz-placeholder {
  color: rgba(20, 20, 20, 0.5);
}
.input:focus:-ms-input-placeholder,
.input.is-focused:-ms-input-placeholder {
  color: rgba(20, 20, 20, 0.5);
}
.input[readonly],
.input.is-readonly {
  color: #505050;
  background: #f6f6f6;
}
.input[disabled] {
  color: #8c8c8c;
  background: #efefef;
}
.input[type=number],
.input.input--number {
  text-align: right;
  max-width: 150px;
}
.input[type=number].input--numberNarrow,
.input.input--number.input--numberNarrow {
  width: 90px;
}
.input.input--date {
  max-width: 150px;
}
textarea.input {
  min-height: 0;
  max-height: 400px;
  max-height: 75vh;
  resize: vertical;
}
textarea.input.input--fitHeight {
  resize: none;
}
textarea.input.input--fitHeight.input--fitHeight--short {
  max-height: 200px;
  max-height: 35vh;
}
textarea.input.input--code {
  overflow-x: auto;
  text-align: left;
}
textarea.input.input--maxHeight-300px {
  max-height: 300px;
}
.has-js textarea.input[rows="1"][data-single-line] {
  overflow: hidden;
  resize: none;
}
select.input,
.input.input--select {
  padding-right: 1em !important;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4.9 10'%3E%3Cstyle%3E._xfG%7Bfill:%23141414;%7D%3C/style%3E%3Cpath class='_xfG' d='M1.4 4.7l1.1-1.5 1 1.5m0 .6l-1 1.5-1.1-1.5'/%3E%3C/svg%3E") !important;
  background-size: 1em !important;
  background-repeat: no-repeat !important;
  background-position: 100% !important;
  white-space: nowrap;
  word-wrap: normal;
  -webkit-appearance: none !important;
  -moz-appearance: none !important;
  appearance: none !important;
  overflow-x: hidden;
  overflow-y: auto;
}
select.input[disabled],
.input.input--select[disabled] {
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4.9 10'%3E%3Cstyle%3E._xfG%7Bfill:%238c8c8c;%7D%3C/style%3E%3Cpath class='_xfG' d='M1.4 4.7l1.1-1.5 1 1.5m0 .6l-1 1.5-1.1-1.5'/%3E%3C/svg%3E") !important;
}
select.input[size],
.input.input--select[size],
select.input[multiple],
.input.input--select[multiple] {
  background-image: none !important;
  padding-right: 6px !important;
}
.input.input--autoSize {
  width: auto;
}
.input.input--inline {
  display: inline;
  width: auto;
}
.input.input--code {
  font-family: Monaco, Menlo, Consolas, 'Roboto Mono', 'Andale Mono', 'Ubuntu Mono', monospace;
  direction: ltr;
  word-wrap: normal;
}
.input.input--title {
  font-size: 24px;
}
.input.input--avatarSizeS {
  min-height: 48px;
}
.input.input--passwordHideShow ::-ms-reveal,
.input.input--passwordHideShow ::-ms-clear {
  display: none !important;
}
@media (max-width: 568px) {
  .input {
    font-size: 16px;
  }
}
.fa--inputOverlay + .input {
  padding-left: 2em;
}
.fa--xf.fa--inputOverlay {
  position: absolute;
  padding: 6px;
  line-height: 1.4;
  color: #cbcbcb;
}
.fa--xf.fa--inputOverlay + .input {
  padding-left: 27px;
}
.iconic {
  display: inline-block;
  position: relative;
}
.iconic > input {
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
  clip: rect(0 0 0 0);
  overflow: hidden;
  position: absolute;
  left: 0;
  width: auto;
  height: auto;
}
.iconic > input + i {
  display: inline-block;
  min-width: 1em;
  height: .9em;
  text-align: left;
}
.iconic > input + i:before,
.iconic > input + i:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 1;
}
.iconic > input + i:after {
  opacity: 0;
}
.iconic > input:disabled + i:before {
  opacity: .3;
}
.iconic > input:disabled:checked + i:after {
  opacity: .3;
}
.iconic > input:checked + i:before {
  opacity: 0;
}
.iconic > input:checked + i:after {
  opacity: 1;
}
.iconic > input:focus + i:before,
.iconic > input:focus + i:after {
  outline: Highlight solid 2px;
  -moz-outline-radius: 5px;
}
@media (-webkit-min-device-pixel-ratio: 0) {
  .iconic > input:focus + i:before,
  .iconic > input:focus + i:after {
    outline: -webkit-focus-ring-color auto 5px;
  }
}
.iconic .iconic-label:before {
  content: '';
  display: inline-block;
  width: 0.5em;
}
.iconic.iconic--hideShow {
  min-width: 56px;
}
.iconic.iconic--hideShow > input[type=checkbox] + i:before {
  content: "\f06e";
}
.iconic.iconic--hideShow > input[type=checkbox] + i:after {
  content: "\f070";
}
.iconic.iconic--hideShow .iconic-label {
  font-size: 13px;
  vertical-align: text-top;
}
.iconic.iconic--hiddenLabel .iconic-label:before {
  display: none;
}
.iconic > input[type=checkbox] + i:before {
  content: "\f0c8";
  display: inline-block;
  width: 0.875em;
}
.iconic > input[type=checkbox] + i:after {
  content: "\f14a";
  display: inline-block;
  width: 0.875em;
}
.iconic > input[type=radio] + i:before {
  content: "\f111";
  display: inline-block;
  width: 1em;
}
.iconic > input[type=radio] + i:after {
  content: "\f058";
  display: inline-block;
  width: 1em;
}
.inputChoices > .inputChoices-choice {
  position: relative;
}
.inputChoices > .inputChoices-choice .iconic {
  position: static;
}
.inputChoices > .inputChoices-choice .iconic > input + i {
  position: absolute;
  left: 0;
}
.inputChoices > .inputChoices-choice .iconic.iconic--noLabel {
  display: inline;
}
.inputChoices > .inputChoices-choice .iconic-label:before {
  display: none;
}
.formRow .iconic > i,
.inputGroup .iconic > i,
.inputChoices .iconic > i,
.block-footer .iconic > i,
.dataList-cell .iconic > i,
.message-cell--extra .iconic > i,
.formRow.dataList-cell--fa > a > i,
.inputGroup.dataList-cell--fa > a > i,
.inputChoices.dataList-cell--fa > a > i,
.block-footer.dataList-cell--fa > a > i,
.dataList-cell.dataList-cell--fa > a > i,
.message-cell--extra.dataList-cell--fa > a > i {
  color: #47a7eb;
}
.formRow .iconic:hover > i,
.inputGroup .iconic:hover > i,
.inputChoices .iconic:hover > i,
.block-footer .iconic:hover > i,
.dataList-cell .iconic:hover > i,
.message-cell--extra .iconic:hover > i,
.formRow.dataList-cell--fa > a:hover > i,
.inputGroup.dataList-cell--fa > a:hover > i,
.inputChoices.dataList-cell--fa > a:hover > i,
.block-footer.dataList-cell--fa > a:hover > i,
.dataList-cell.dataList-cell--fa > a:hover > i,
.message-cell--extra.dataList-cell--fa > a:hover > i {
  color: #1265a1;
}
.u-inputSpacer {
  margin-top: 6px;
}
.inputGroup {
  display: flex;
  align-items: stretch;
  max-width: 100%;
}
.inputGroup .inputGroup-text {
  flex-grow: 0;
  display: flex;
  align-items: center;
  white-space: nowrap;
  vertical-align: middle;
  padding: 0 6px;
}
.inputGroup .inputGroup-text:first-child {
  padding-left: 0;
}
.inputGroup .inputGroup-text:last-child {
  padding-right: 0;
}
.inputGroup .inputGroup-splitter {
  display: inline-block;
  width: 6px;
  flex-shrink: 0;
}
.inputGroup .input {
  flex-shrink: 1;
  min-width: 0;
}
.inputGroup .button {
  flex-shrink: 0;
}
.inputGroup:not(.inputGroup--joined) .input + .input,
.inputGroup:not(.inputGroup--joined) .button + .input,
.inputGroup:not(.inputGroup--joined) .input + .button,
.inputGroup:not(.inputGroup--joined) .button + .button {
  margin-left: 6px;
}
.inputGroup .inputGroup-label {
  flex-shrink: 1;
  width: 100%;
  padding: 0 0 6px;
}
.inputGroup .inputGroup-label:after {
  content: ":";
}
.inputGroup .inputGroup-label.is-sentence:after {
  content: "";
}
@media (max-width: 540px) {
  .inputGroup .input:not(.input--autoSize):not(.input--numberNarrow) {
    width: 100%;
  }
}
.inputGroup.inputGroup--inline {
  display: inline-flex;
}
.inputGroup.inputGroup--auto .input {
  width: auto;
}
.inputGroup.inputGroup--joined .input {
  border-radius: 0;
}
.inputGroup.inputGroup--joined .input:first-child {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  border-right: none;
}
.inputGroup.inputGroup--joined .input:last-child {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
  border-left: none;
}
.inputGroup.inputGroup--joined .inputGroup-text {
  border-width: 1px;
  border-style: solid;
  border-top-color: #cbcbcb;
  border-right-color: #dfdfdf;
  border-bottom-color: #dfdfdf;
  border-left-color: #cbcbcb;
  background: #fefefe;
  text-align: center;
  padding: 3px 6px;
}
.inputGroup.inputGroup--joined .inputGroup-text.inputGroup-text--disabled,
.inputGroup.inputGroup--joined .inputGroup-text.is-disabled,
.inputGroup.inputGroup--joined .inputGroup-text[disabled] {
  color: #8c8c8c;
  background: #efefef;
}
.inputGroup.inputGroup--joined .inputGroup-text.inputGroup-text--disabled a,
.inputGroup.inputGroup--joined .inputGroup-text.is-disabled a,
.inputGroup.inputGroup--joined .inputGroup-text[disabled] a {
  text-decoration: none;
}
.inputGroup.inputGroup--joined .inputGroup-text:first-child {
  border-right: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.inputGroup.inputGroup--joined .inputGroup-text:last-child {
  border-left: 0;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.inputGroup.inputGroup--joined .input + .inputGroup-text,
.inputGroup.inputGroup--joined .input + .input,
.inputGroup.inputGroup--joined .inputGroup-text + .input {
  border-left: 1px solid #dfdfdf;
}
.inputGroup.inputGroup--joined .inputGroup-text + .inputGroup-text,
.inputGroup.inputGroup--joined .inputGroup-text + select.input {
  border-left: 0;
}
.inputGroup-container > .inputGroup {
  margin-top: 6px;
}
.inputGroup-container > .inputGroup:first-child {
  margin-top: 0;
}
.inputNumber .input--number {
  -moz-appearance: textfield !important;
}
.inputNumber .input--number::-webkit-inner-spin-button,
.inputNumber .input--number::-webkit-outer-spin-button {
  margin: 0 !important;
  -webkit-appearance: none !important;
}
@media (max-width: 540px) {
  .inputNumber .input--number {
    min-width: auto;
    max-width: 120px;
  }
}
.inputNumber-button {
  position: relative;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #47a7eb;
  font-size: 1.0em;
  font-style: normal !important;
  line-height: .75em;
  vertical-align: -15%;
  width: 45px;
  justify-content: center;
  text-align: center;
  cursor: pointer;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.inputNumber-button.inputNumber-button--smaller {
  vertical-align: 0;
  width: 35px;
}
.inputNumber-button--up::before {
  content: "\f067";
  display: inline-block;
  width: 0.88em;
}
.inputNumber-button--down::before {
  content: "\f068";
  display: inline-block;
  width: 0.8em;
}
.inputGroup.inputGroup--joined .inputNumber-button:hover,
.inputGroup.inputGroup--joined .inputNumber-button:active,
.inputGroup.inputGroup--joined .inputNumber-button:focus {
  background-color: #f5f2f2;
  color: #1265a1;
}
.input.input--number[readonly] ~ .inputNumber-button {
  color: #505050;
  background: #f6f6f6;
}
.input.input--number[disabled] ~ .inputNumber-button {
  cursor: default;
  color: #8c8c8c;
  background: #efefef;
}
.inputDate .inputDate-icon {
  position: relative;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #141414;
  font-size: 1.0em;
  font-style: normal !important;
  line-height: .75em;
  vertical-align: -15%;
  width: 45px;
  justify-content: center;
  text-align: center;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
@media (max-width: 540px) {
  .inputDate .inputDate-icon {
    vertical-align: 0;
    width: 25px;
  }
}
.inputDate .inputDate-icon::before {
  content: "\f133";
  display: inline-block;
  width: 0.88em;
}
.inputList {
  list-style: none;
  margin: 0;
  padding: 0;
}
.inputList > li {
  margin-top: 6px;
}
.inputList > li:first-child {
  margin-top: 0;
}
.inputPair:before,
.inputPair:after {
  content: " ";
  display: table;
}
.inputPair:after {
  clear: both;
}
.inputPair > .input,
.inputPair .inputPair-input {
  float: right;
  width: 49%;
  width: calc(50% - 2px);
}
.inputPair > .input:first-child,
.inputPair .inputPair-input:first-child {
  float: left;
}
.inputPair-container > .inputPair {
  margin-top: 6px;
}
.inputPair-container > .inputPair:first-child {
  margin-top: 0;
}
.inputLabelPair {
  margin: 6px 0;
  padding: 0;
}
.inputLabelPair:before,
.inputLabelPair:after {
  content: " ";
  display: table;
}
.inputLabelPair:after {
  clear: both;
}
.inputLabelPair > dt,
.inputLabelPair > dd {
  float: left;
  margin: 0;
  padding: 0;
}
.inputLabelPair > dt {
  width: 65%;
  padding-right: 6px;
  padding-top: .6em;
}
.inputLabelPair > dt > label:after {
  content: ":";
}
.inputLabelPair > dt > label.is-sentence:after {
  content: "";
}
.inputLabelPair > dd {
  width: 35%;
  text-align: right;
}
.inputLabelPair > dd .input {
  width: 100%;
  max-width: none;
}
@media (max-width: 480px) {
  .inputLabelPair > dt,
  .inputLabelPair > dd {
    width: 50%;
  }
}
.inputChoices {
  list-style: none;
  padding: 0;
  margin: 0;
}
.inputChoices > .inputChoices-choice {
  margin-bottom: 6px;
  padding-left: 1.5em;
}
.inputChoices > .inputChoices-choice:last-child {
  margin-bottom: 0;
}
.inputChoices > .inputChoices-choice > .inputChoices,
.inputChoices > .inputChoices-choice .inputChoices-spacer {
  margin-top: 6px;
}
.inputChoices.inputChoices--noChoice > .inputChoices-choice,
.inputChoices .inputChoices-plainChoice {
  padding-left: 0;
}
.inputChoices.inputChoices--inline > .inputChoices-choice {
  display: inline-block;
  margin-right: 6px;
  margin-bottom: 0;
}
.inputChoices.inputChoices--inline > .inputChoices-choice:last-child {
  margin-right: 0;
}
.inputChoices .inputChoices-label {
  padding-left: 0;
  font-size: 13px;
  color: #8c8c8c;
}
.inputChoices + .inputChoices:not(.inputChoices--inline) {
  margin-top: 6px;
}
.inputChoices-group + .inputChoices-group,
.inputChoices-choice + .inputChoices-group {
  margin-top: 12px;
}
.inputChoices-spacer + .inputChoices {
  margin-top: 6px;
}
.inputChoices-heading {
  color: #8c8c8c;
  padding-bottom: 3px;
  border-bottom: 1px solid #e7e7e7;
  margin-bottom: 6px;
  position: relative;
}
.inputChoices-heading.inputChoices-heading--checkAll .iconic {
  position: static;
}
.inputChoices-heading.inputChoices-heading--checkAll .iconic > input + i {
  position: absolute;
  right: 0;
  left: auto;
  width: auto;
}
.inputChoices-explain {
  display: block;
  font-style: normal;
  font-size: 13px;
  color: #8c8c8c;
}
.inputChoices-explain a {
  color: inherit;
  text-decoration: underline;
}
.inputChoices-explain.inputChoices-explain--after {
  margin-top: 6px;
}
.inputChoices-dependencies {
  list-style: none;
  padding: 0;
  margin: 0;
}
.inputChoices-dependencies > li {
  margin-top: 6px;
}
.inputChoices-dependencies > li > label {
  display: block;
  padding: 3px 0;
}
.inputChoices-dependencies > li > label.iconic--labelled > input + i {
  margin-left: 0;
}
@media (max-width: 480px) {
  .input.input--title {
    font-size: 17px;
  }
}
.formRow {
  display: table;
  table-layout: fixed;
  width: 100%;
  margin: 0;
  position: relative;
}
.formRow > dt,
.formRow > dd {
  display: table-cell;
  vertical-align: top;
  margin: 0;
}
.formRow > dt {
  border-right: 1px solid transparent;
  background: #f5f5f5;
  border-color: #dfdfdf;
  text-align: right;
  width: 33%;
  padding: 15px 10px 15px 10px;
}
.formRow > dd {
  width: 67%;
  padding: 15px 10px 15px 10px;
}
.formRow.formRow--input > dt {
  padding-top: 22px;
}
.formRow.formRow--button > dt {
  padding-top: 20px;
}
.formRow.formRow--inputLabelPair > dt {
  padding-top: 30px;
}
.formRow.formRow--valueToEdge > dd {
  padding-left: 0;
  padding-right: 0;
}
.formRow.formRow--noValuePadding > dd {
  padding: 0;
}
.formRow.formRow--limited {
  display: none;
}
.formRow.formRow--fullWidth {
  display: block;
}
.formRow.formRow--fullWidth > dt,
.formRow.formRow--fullWidth > dd {
  width: auto;
  display: block;
  padding: 7.5px 10px 15px;
}
.formRow.formRow--fullWidth > dt {
  background: none;
  border: none;
  text-align: left;
  padding-bottom: 0;
}
.formRow.formRow--fullWidth > dt .formRow-hint {
  display: inline;
}
.formRow.formRow--fullWidth.formRow--input > dt,
.formRow.formRow--fullWidth.formRow--button > dt {
  padding-top: 7.5px;
}
.formRow.formRow--fullWidth > dd {
  padding-top: 7.5px;
}
.formRow.formRow--fullWidth > dd > .inputChoices:first-child {
  padding-top: 0;
}
.formRow.formRow--fullWidth + .formRow,
.formRow + .formRow.formRow--fullWidth,
.formRow.formRow--fullWidth + * > .formRow:first-of-type,
.formRow + * > .formRow.formRow--fullWidth:first-of-type {
  border-top: 1px solid #dfdfdf;
}
.formRow.formRow--fullWidth.formRow--noLabel > dt {
  display: none;
}
.formRow.formRow--fullWidth.formRow--noLabel > dd {
  padding-top: 15px;
}
.formRow.formRow--fullWidth + .formRow--mergePrev,
.formRow.formRow--fullWidth + * > .formRow:first-of-type.formRow--mergePrev,
.formRow.formRow--fullWidth.formRow--mergeNext + .formRow.formRow--fullWidth,
.formRow.formRow--fullWidth.formRow--mergeNext + * > .formRow.formRow--fullWidth:first-of-type {
  border-top: 0;
}
.formRow.formRow--fullWidth + .formRow--mergePrev > dt,
.formRow.formRow--fullWidth + * > .formRow:first-of-type.formRow--mergePrev > dt,
.formRow.formRow--fullWidth.formRow--mergeNext + .formRow.formRow--fullWidth > dt,
.formRow.formRow--fullWidth.formRow--mergeNext + * > .formRow.formRow--fullWidth:first-of-type > dt {
  padding-top: 0;
}
.formRow.formRow--fullWidth.formRow--noGutter > dt,
.formRow.formRow--fullWidth.formRow--noGutter > dd {
  padding-left: 0;
  padding-right: 0;
}
.formRow.formRow--fullWidth.formRow--noPadding > dt,
.formRow.formRow--fullWidth.formRow--noPadding > dd {
  padding: 0;
}
.formRow.formRow--fullWidth.formRow--noPadding + .formRow.formRow--fullWidth > dt,
.formRow.formRow--fullWidth.formRow--noPadding + * > .formRow.formRow--fullWidth:first-of-type > dt {
  padding-top: 15px;
}
.formRow.formRow--inputMultiLine > dd > .input,
.formRow.formRow--inputMultiLine > dd > .inputGroup {
  margin-bottom: 6px;
}
.formRow.formRow--inputMultiLine > dd > .input:last-child,
.formRow.formRow--inputMultiLine > dd > .inputGroup:last-child {
  margin-bottom: 0;
}
.formRow .formRow-label:after {
  content: ":";
}
.formRow .formRow-label.is-sentence:after {
  content: "";
}
.formRow.formRow--noColon .formRow-label:after {
  content: "";
}
.formRow .formRow-explain {
  margin: 6px 0 0;
  display: block;
  font-style: normal;
  font-size: 13px;
  color: #8c8c8c;
}
.formRow .formRow-explain a {
  color: inherit;
  text-decoration: underline;
}
.formRow.formRow--explainOffset .formRow-explain {
  margin-top: 12px;
}
.formRow .formRow-hint {
  display: block;
  font-style: normal;
  font-size: 12px;
  color: #8c8c8c;
}
.formRow .formRow-hint a {
  color: inherit;
  text-decoration: underline;
}
.formRow .formRow-hint .formRow-hint-featured {
  display: block;
  color: #47a7eb;
}
.formRow + .formInfoRow {
  border-top: 1px solid #dfdfdf;
}
@media (max-width: 540px) {
  .formRow {
    display: block;
  }
  .formRow > dt,
  .formRow > dd {
    width: auto;
    display: block;
    padding: 7.5px 10px 15px;
  }
  .formRow > dt {
    background: none;
    border: none;
    text-align: left;
    padding-bottom: 0;
  }
  .formRow > dt .formRow-hint {
    display: inline;
  }
  .formRow.formRow--input > dt,
  .formRow.formRow--button > dt {
    padding-top: 7.5px;
  }
  .formRow > dd {
    padding-top: 7.5px;
  }
  .formRow > dd > .inputChoices:first-child {
    padding-top: 0;
  }
}
.formButtonGroup {
  display: flex;
  flex-wrap: wrap;
  margin-top: 10px;
  margin-bottom: -5px;
}
.formButtonGroup.formButtonGroup--close {
  margin-top: 0;
}
.formButtonGroup-primary {
  order: 2;
  margin-left: auto;
  margin-bottom: 5px;
}
.formButtonGroup--simple .formButtonGroup-primary {
  margin-left: 0;
}
.formButtonGroup-extra {
  order: 1;
  margin-bottom: 5px;
}
.formInfoRow {
  padding: 15px 10px;
}
.formInfoRow.formInfoRow--close {
  padding-top: 7.5px;
  padding-bottom: 7.5px;
}
.formInfoRow.formInfoRow--noPadding {
  padding: 0;
}
.formInfoRow.formInfoRow--confirm {
  text-align: center;
}
.formInfoRow.formInfoRow--confirm strong {
  display: block;
  margin: .5em 0;
  font-size: 20px;
}
.formInfoRow.formInfoRow--confirm strong:last-child {
  margin-bottom: 0;
}
.formInfoRow + .formRow {
  border-top: 1px solid #dfdfdf;
}
.formInfoRow.u-hidden:not(.is-active) + .formRow {
  border-top: none;
}
.formInfoRow > .blockMessage:first-child {
  margin-top: 0;
}
.formInfoRow > .blockMessage:last-child {
  margin-bottom: 0;
}
.formSubmitRow {
  position: relative;
}
.formSubmitRow > dt {
  display: none;
}
.formSubmitRow > dd {
  width: 100%;
  padding: 0;
}
.formSubmitRow.formSubmitRow--sticky.is-sticky .formSubmitRow-main {
  position: fixed;
  bottom: 0;
  z-index: 200;
}
.formSubmitRow.formSubmitRow--sticky.is-sticky .formSubmitRow-bar {
  box-shadow: 0px -5px 15px rgba(0, 0, 0, 0.15);
}
.formSubmitRow.formSubmitRow--simple > dt,
.formSubmitRow.formSubmitRow--standalone > dt {
  visibility: hidden;
}
.formSubmitRow.formSubmitRow--simple .formSubmitRow-controls,
.formSubmitRow.formSubmitRow--standalone .formSubmitRow-controls {
  text-align: center;
  padding-left: 0;
  margin-left: 0;
}
.formSubmitRow.formSubmitRow--standalone .formSubmitRow-bar {
  border: 1px solid #d8d8d8;
  border-radius: 3px;
}
@media (max-width: 610px) {
  .formSubmitRow.formSubmitRow--standalone .formSubmitRow-bar {
    border-radius: 0;
    border-left: none;
    border-right: none;
  }
}
.formSubmitRow.formSubmitRow--standalone.is-sticky .formSubmitRow-bar {
  border-bottom: 0;
}
.block-body--collapsible:not(.is-active) + .formSubmitRow:not(.formSubmitRow--simple, .formSubmitRow--standalone) > dt {
  visibility: hidden;
}
.formSubmitRow-main {
  position: relative;
}
.formSubmitRow-bar {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background: #fefefe;
  border-top: 1px solid #cbcbcb;
}
.formSubmitRow-controls {
  position: relative;
  padding-left: 33%;
  padding-top: 6px;
  padding-bottom: 6px;
  margin-left: 10px;
  margin-right: 10px;
}
.formSubmitRow-controls > .button:first-child:last-child {
  min-width: 120px;
}
@media (max-width: 540px) {
  .formSubmitRow-controls {
    padding-left: 0;
    text-align: center;
  }
}
.formRowSep {
  margin: -1px 10px 0;
  border: none;
  border-top: 1px solid #d8d8d8;
}
.formRowSep + .formRowSep,
.formRowSep:last-child {
  display: none;
}
.block-body > .formRowSep:first-child {
  display: none;
}
.toggleTarget {
  display: none;
  -webkit-transition:  all 0.25s ease, -xf-height 0.25s ease;
  transition:  all 0.25s ease, -xf-height 0.25s ease;
  overflow: hidden;
  height: 0;
  opacity: 0;
}
.toggleTarget.is-transitioning {
  display: block;
}
.toggleTarget.is-active {
  display: block;
  height: auto;
  opacity: 1;
}
.collapseTrigger {
  cursor: pointer;
}
.collapseTrigger:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 900;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f0da";
  display: inline-block;
  width: 0.63em;
  font-size: 80%;
  margin-right: .2em;
}
.collapseTrigger.is-active:before {
  content: "\f0d7";
  display: inline-block;
  width: 0.63em;
}
.collapseTrigger.collapseTrigger--block {
  display: block;
}
.collapseTrigger.collapseTrigger--block:before {
  float: right;
  margin-right: 0;
  margin-left: 5px;
  font-size: 100%;
  line-height: inherit;
}
.badge,
.badgeContainer:after {
  display: inline-block;
  padding: 2px 4px;
  margin: -2px 0;
  font-size: 80%;
  line-height: 1;
  font-weight: 400;
  color: #fefefe;
  background: #185886;
  border-radius: 2px;
}
.badgeContainer:after {
  content: attr(data-badge);
  display: none;
}
.badgeContainer.badgeContainer--visible:after {
  display: inline-block;
}
.badge.badge--highlighted,
.badgeContainer.badgeContainer--highlighted:after {
  display: inline-block;
  color: white;
  background: #e03030;
}
.tooltip {
  position: absolute;
  z-index: 300;
  line-height: 1.4;
  padding: 0 5px;
  display: none;
}
.tooltip.tooltip--basic {
  max-width: 300px;
}
.tooltip.tooltip--basic.tooltip--top {
  margin-bottom: 3px;
  padding-bottom: 5px;
}
.tooltip.tooltip--basic.tooltip--right {
  margin-left: 3px;
  padding-left: 5px;
}
.tooltip.tooltip--basic.tooltip--bottom {
  margin-top: 3px;
  padding-top: 5px;
}
.has-touchevents .tooltip.tooltip--basic.tooltip--bottom.tooltip--selectToQuote {
  margin-top: .75em;
}
.tooltip.tooltip--basic.tooltip--left {
  margin-right: 3px;
  padding-right: 5px;
}
.tooltip.tooltip--basic a {
  color: inherit;
  text-decoration: underline;
}
.tooltip.tooltip--description {
  max-width: 350px;
}
.tooltip.tooltip--selectToQuote a {
  color: inherit;
  text-decoration: none;
}
.tooltip.tooltip--selectToQuote a:hover {
  text-decoration: underline;
}
.tooltip.tooltip--preview {
  max-width: 100%;
  width: 400px;
}
.tooltip.tooltip--member {
  max-width: 100%;
  width: 450px;
  padding: 0 10px;
}
.tooltip.tooltip--reaction {
  max-width: 100%;
  padding: 0 15px;
  margin: 5px 0;
}
.tooltip.tooltip--bookmark,
.tooltip.tooltip--share {
  max-width: 100%;
  width: 340px;
  padding: 0 15px;
}
.tooltip.tooltip--bookmark.tooltip--top,
.tooltip.tooltip--member.tooltip--top,
.tooltip.tooltip--preview.tooltip--top,
.tooltip.tooltip--share.tooltip--top {
  padding-bottom: 10px;
}
.tooltip.tooltip--bookmark.tooltip--right,
.tooltip.tooltip--member.tooltip--right,
.tooltip.tooltip--preview.tooltip--right,
.tooltip.tooltip--share.tooltip--right {
  padding-left: 10px;
}
.tooltip.tooltip--bookmark.tooltip--bottom,
.tooltip.tooltip--member.tooltip--bottom,
.tooltip.tooltip--preview.tooltip--bottom,
.tooltip.tooltip--share.tooltip--bottom {
  padding-top: 10px;
}
.tooltip.tooltip--bookmark.tooltip--left,
.tooltip.tooltip--member.tooltip--left,
.tooltip.tooltip--preview.tooltip--left,
.tooltip.tooltip--share.tooltip--left {
  padding-right: 10px;
}
.tooltip--basic .tooltip-content {
  text-align: center;
  font-size: 12px;
  color: #ffffff;
  background: rgba(20, 20, 20, 0.8);
  border-radius: 4px;
  padding-top: 5px;
  padding-right: 5px;
  padding-bottom: 5px;
  padding-left: 5px;
}
.tooltip--description .tooltip-content {
  text-align: left;
}
.tooltip--preview .tooltip-content {
  color: #141414;
  background: #fefefe;
  padding: 6px;
  text-align: left;
  border: 1px solid #d8d8d8;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
}
.tooltip--bookmark .tooltip-content,
.tooltip--member .tooltip-content,
.tooltip--share .tooltip-content {
  color: #141414;
  background: #fefefe;
  padding: 0;
  text-align: left;
  border: 1px solid #d8d8d8;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
}
.tooltip--reaction .tooltip-content {
  color: #141414;
  background: #fefefe;
  padding: 0;
  text-align: center;
  border: 1px solid #d8d8d8;
  border-radius: 6px;
}
.tooltip-content-inner {
  position: relative;
}
.tooltip--basic .tooltip-content-inner {
  max-height: 200px;
  overflow: hidden;
}
.tooltip--preview .tooltip-content-inner {
  max-height: 200px;
  overflow: hidden;
}
.tooltip--preview .tooltip-content-inner .tooltip-content-cover {
  background: transparent;
  background: linear-gradient(to bottom, rgba(254, 254, 254, 0) 160px, #fefefe 200px);
}
.tooltip-content-inner .tooltip-content-cover {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border: 0 solid transparent;
}
.tooltip--basic.tooltip--top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border: 5px solid transparent;
  border-bottom-width: 0;
  border-top-color: rgba(20, 20, 20, 0.8);
}
.tooltip--basic.tooltip--bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border: 5px solid transparent;
  border-top-width: 0;
  border-bottom-color: rgba(20, 20, 20, 0.8);
}
.tooltip--basic.tooltip--right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border: 5px solid transparent;
  border-left-width: 0;
  border-right-color: rgba(20, 20, 20, 0.8);
}
.tooltip--basic.tooltip--left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border: 5px solid transparent;
  border-right-width: 0;
  border-left-color: rgba(20, 20, 20, 0.8);
}
.tooltip--preview.tooltip--top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-bottom-width: 0;
  border-top-color: #d8d8d8;
}
.tooltip--preview.tooltip--bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-top-width: 0;
  border-bottom-color: #d8d8d8;
}
.tooltip--preview.tooltip--right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-left-width: 0;
  border-right-color: #d8d8d8;
}
.tooltip--preview.tooltip--left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-right-width: 0;
  border-left-color: #d8d8d8;
}
.tooltip--preview .tooltip-arrow:after {
  position: absolute;
  content: '';
}
.tooltip--preview.tooltip--top .tooltip-arrow:after {
  bottom: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-bottom-width: 0;
  border-top-color: #fefefe;
}
.tooltip--preview.tooltip--bottom .tooltip-arrow:after {
  top: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-top-width: 0;
  border-bottom-color: #fefefe;
}
.tooltip--preview.tooltip--right .tooltip-arrow:after {
  left: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-left-width: 0;
  border-right-color: #fefefe;
}
.tooltip--preview.tooltip--left .tooltip-arrow:after {
  right: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-right-width: 0;
  border-left-color: #fefefe;
}
.tooltip--member.tooltip--top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-bottom-width: 0;
  border-top-color: #d8d8d8;
}
.tooltip--member.tooltip--bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-top-width: 0;
  border-bottom-color: #d8d8d8;
}
.tooltip--member.tooltip--right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-left-width: 0;
  border-right-color: #d8d8d8;
}
.tooltip--member.tooltip--left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-right-width: 0;
  border-left-color: #d8d8d8;
}
.tooltip--member .tooltip-arrow:after {
  position: absolute;
  content: '';
}
.tooltip--member.tooltip--top .tooltip-arrow:after {
  bottom: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-bottom-width: 0;
  border-top-color: #fefefe;
}
.tooltip--member.tooltip--bottom .tooltip-arrow:after {
  top: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-top-width: 0;
  border-bottom-color: #fefefe;
}
.tooltip--member.tooltip--right .tooltip-arrow:after {
  left: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-left-width: 0;
  border-right-color: #fefefe;
}
.tooltip--member.tooltip--left .tooltip-arrow:after {
  right: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-right-width: 0;
  border-left-color: #fefefe;
}
.tooltip--share.tooltip--top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-bottom-width: 0;
  border-top-color: #d8d8d8;
}
.tooltip--share.tooltip--bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-top-width: 0;
  border-bottom-color: #d8d8d8;
}
.tooltip--share.tooltip--right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-left-width: 0;
  border-right-color: #d8d8d8;
}
.tooltip--share.tooltip--left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-right-width: 0;
  border-left-color: #d8d8d8;
}
.tooltip--share .tooltip-arrow:after {
  position: absolute;
  content: '';
}
.tooltip--share.tooltip--top .tooltip-arrow:after {
  bottom: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-bottom-width: 0;
  border-top-color: #fefefe;
}
.tooltip--share.tooltip--bottom .tooltip-arrow:after {
  top: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-top-width: 0;
  border-bottom-color: #fefefe;
}
.tooltip--share.tooltip--right .tooltip-arrow:after {
  left: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-left-width: 0;
  border-right-color: #fefefe;
}
.tooltip--share.tooltip--left .tooltip-arrow:after {
  right: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-right-width: 0;
  border-left-color: #fefefe;
}
.tooltip--bookmark.tooltip--top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-bottom-width: 0;
  border-top-color: #d8d8d8;
}
.tooltip--bookmark.tooltip--bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -11px;
  border: 11px solid transparent;
  border-top-width: 0;
  border-bottom-color: #d8d8d8;
}
.tooltip--bookmark.tooltip--right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-left-width: 0;
  border-right-color: #d8d8d8;
}
.tooltip--bookmark.tooltip--left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -11px;
  border: 11px solid transparent;
  border-right-width: 0;
  border-left-color: #d8d8d8;
}
.tooltip--bookmark .tooltip-arrow:after {
  position: absolute;
  content: '';
}
.tooltip--bookmark.tooltip--top .tooltip-arrow:after {
  bottom: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-bottom-width: 0;
  border-top-color: #fefefe;
}
.tooltip--bookmark.tooltip--bottom .tooltip-arrow:after {
  top: 1px;
  left: -10px;
  border: 10px solid transparent;
  border-top-width: 0;
  border-bottom-color: #fefefe;
}
.tooltip--bookmark.tooltip--right .tooltip-arrow:after {
  left: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-left-width: 0;
  border-right-color: #fefefe;
}
.tooltip--bookmark.tooltip--left .tooltip-arrow:after {
  right: 1px;
  bottom: -10px;
  border: 10px solid transparent;
  border-right-width: 0;
  border-left-color: #fefefe;
}
.tooltip--member.tooltip--bottom .tooltip-arrow:after {
  border: 10px solid transparent;
  border-top-width: 0;
  border-bottom-color: #fefefe;
}
.tooltipCover {
  display: none;
  position: absolute;
  opacity: 0;
  z-index: 299;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.tooltipCover.is-active {
  display: block;
}
.menuTrigger {
  cursor: pointer;
}
.menuTrigger:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f0d7";
  font-weight: 900;
  margin-left: .2em;
  unicode-bidi: isolate;
}
.menuOutsideClicker {
  position: fixed;
  display: none;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 2;
}
.menuOutsideClicker.is-active {
  display: block;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.menu {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  position: absolute;
  z-index: 200;
  margin: 8px 0 0;
  min-width: 240px;
  max-width: 320px;
  border-radius: 3px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
}
.menu.is-active {
  display: block;
  opacity: 1;
}
.menu.is-transitioning {
  display: block;
}
.menu.menu--structural {
  margin-top: 0;
}
.menu.menu--structural.menu--left {
  border-top-left-radius: 0;
}
.menu.menu--structural.menu--right {
  border-top-right-radius: 0;
}
.menu.menu--superWide {
  width: 75%;
  max-width: calc(100% - 10px);
}
.menu.menu--veryWide {
  width: 500px;
  max-width: calc(100% - 10px);
}
.menu.menu--wide {
  width: 350px;
  max-width: calc(100% - 10px);
}
.menu.menu--medium {
  width: 300px;
  max-width: calc(100% - 10px);
}
.menu.menu--potentialFixed {
  z-index: 400;
}
.menu-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border: 0 solid transparent;
  top: -8px;
  left: 50%;
  margin-left: -8px;
  border: 8px solid transparent;
  border-top-width: 0;
  border-bottom-color: #47a7eb;
}
.menu--structural .menu-arrow {
  top: -8px;
}
.menu--up .menu-arrow {
  display: none;
}
.menu-content {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: left;
  font-size: 13px;
  color: #141414;
  background: #fefefe;
  border-radius: 3px;
  border-top: 3px solid #47a7eb;
}
.menu--structural.menu--left .menu-content {
  border-top-left-radius: 0;
}
.menu--structural.menu--right .menu-content {
  border-top-right-radius: 0;
}
.menu--potentialFixed .menu-content {
  overflow: auto;
  max-height: 450px;
  max-height: 80vh;
}
.menu-content > :last-child {
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.menu--pageJump {
  width: auto;
  min-width: 0;
}
.menu-header {
  padding: 6px 15px;
  margin: 0;
  font-weight: 400;
  text-decoration: none;
  font-size: 17px;
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #dfdfdf;
  background: linear-gradient(0deg, #fefefe, #fefefe);
}
.menu-header:before,
.menu-header:after {
  content: " ";
  display: table;
}
.menu-header:after {
  clear: both;
}
.menu-header a {
  color: inherit;
  text-decoration: none;
}
.menu-header a:hover {
  text-decoration: underline;
}
.menu-tabHeader {
  padding: 0;
  margin: 0;
  font-weight: 400;
  text-decoration: none;
  font-size: 15px;
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #dfdfdf;
  background: linear-gradient(0deg, #fefefe, #fefefe);
  font-size: 0;
}
.menu-tabHeader .tabs-tab,
.menu-tabHeader .tabs-extra,
.menu-tabHeader .hScroller-action {
  font-size: 15px;
}
.menu-tabHeader .tabs-tab {
  padding: 6px 15px 3px;
  border-bottom: 3px solid transparent;
}
.menu-tabHeader .tabs-tab:hover {
  color: #47a7eb;
}
.menu-tabHeader .tabs-tab.is-active {
  color: #47a7eb;
  border-color: #47a7eb;
}
.menu-tabHeader .hScroller-action {
  color: #2577b1;
}
.menu-tabHeader .hScroller-action:hover {
  color: #47a7eb;
}
.menu-tabHeader .hScroller-action.hScroller-action--start {
  background: #fefefe;
  background: linear-gradient(to right, #fefefe 66%, rgba(254, 254, 254, 0) 100%);
}
.menu-tabHeader .hScroller-action.hScroller-action--end {
  background: #fefefe;
  background: linear-gradient(to right, rgba(254, 254, 254, 0) 0%, #fefefe 33%);
}
.menu-scroller {
  overflow: auto;
  max-height: 300px;
  max-height: 60vh;
  -webkit-overflow-scrolling: touch;
}
.menu-row + .menu-scroller {
  border-top: 1px solid #dfdfdf;
}
.menu-row {
  margin: 0;
  padding: 6px 15px;
}
.menu-row:before,
.menu-row:after {
  content: " ";
  display: table;
}
.menu-row:after {
  clear: both;
}
.menu-row.menu-row--alt {
  color: #141414;
  background: #f5f5f5;
}
.menu-row.menu-row--highlighted {
  color: #141414;
  background: #fefefe;
}
.menu-row.menu-row--close {
  padding-left: 10px;
  padding-right: 10px;
}
.menu-row.menu-row--separated + .menu-row {
  border-top: 1px solid #dfdfdf;
}
.menu-row.menu-row--clickable:hover {
  background: #fefefe;
}
.menu-row:empty {
  padding: 0;
}
.menu-linkRow {
  display: block;
  padding: 6px 15px 6px 12px;
  border-left: 3px solid transparent;
  color: #141414;
  text-decoration: none;
}
.menu-linkRow.menu-linkRow--alt {
  color: #141414;
  background: #f5f5f5;
}
.menu-linkRow.is-selected,
.menu-linkRow:hover,
.menu-linkRow:focus {
  color: #185886;
  text-decoration: none;
  background: #fefefe;
  border-left-color: rgba(71, 167, 235, 0.5);
}
.menu-linkRow.is-selected:focus,
.menu-linkRow:hover:focus,
.menu-linkRow:focus:focus {
  outline: 0;
}
.menu-linkRow.is-selected.is-selected,
.menu-linkRow:hover.is-selected,
.menu-linkRow:focus.is-selected {
  border-left-color: #47a7eb;
}
.menu-linkRow i[aria-hidden=true] {
  font-size: 13px;
  display: inline-block;
  width: 23px;
}
.menu-linkRow i[aria-hidden=true]:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #8c8c8c;
  left: 10px;
}
.menu-linkRow i[aria-hidden=true] ~ .menu-linkRow-hint {
  padding-left: 23px;
}
.menu-linkRow:hover i[aria-hidden=true]:after {
  color: #185886;
}
.menu-linkRow-hint {
  font-style: inherit;
  font-size: 11px;
  color: #8c8c8c;
  display: block;
}
.menu-separator {
  margin: 0 7.5px;
  padding: 0;
  border: none;
  border-top: 1px solid #dfdfdf;
}
.menu-separator.menu-separator--hard {
  margin: 0;
}
.menu-separator + .menu-separator,
.menu-separator:last-child {
  display: none;
}
.menu-footer {
  padding: 6px 15px;
  font-size: 12px;
  color: #505050;
  background: #f5f5f5;
  border-top: 1px solid #dfdfdf;
  background: linear-gradient(180deg, #f5f5f5, #fafafa);
}
.menu-footer:before,
.menu-footer:after {
  content: " ";
  display: table;
}
.menu-footer:after {
  clear: both;
}
.menu-footer.menu-footer--close {
  padding-left: 10px;
  padding-right: 10px;
}
.menu-footer:not(.menu-footer--split) .menu-footer-counter {
  float: left;
}
.menu-footer:not(.menu-footer--split) .menu-footer-controls {
  float: right;
}
.menu-footer.menu-footer--split {
  display: flex;
  align-items: center;
}
.menu-footer.menu-footer--split .menu-footer-main,
.menu-footer.menu-footer--split .menu-footer-counter {
  flex-grow: 1;
}
.menu-footer.menu-footer--split .menu-footer-select:not(:last-child) {
  margin: 0 1em;
}
.menu-footer.menu-footer--split .menu-footer-opposite,
.menu-footer.menu-footer--split .menu-footer-controls {
  margin-left: auto;
}
.offCanvasMenu {
  display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 500;
  -webkit-transition:  none 0.5s ease;
  transition:  none 0.5s ease;
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
.offCanvasMenu a {
  -webkit-tap-highlight-color: initial;
}
.offCanvasMenu.is-transitioning {
  display: block;
}
.offCanvasMenu.is-active {
  display: block;
}
.offCanvasMenu .offCanvasMenu-hidden {
  display: none;
}
.offCanvasMenu .offCanvasMenu-shown {
  display: block;
}
.offCanvasMenu .offCanvasMenu-closer {
  float: right;
  cursor: pointer;
  text-decoration: none;
  -webkit-tap-highlight-color: initial;
  padding: 10px;
  margin: -10px;
}
.offCanvasMenu .offCanvasMenu-closer:hover {
  text-decoration: none;
}
.offCanvasMenu .offCanvasMenu-closer:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
}
.offCanvasMenu .block-container,
.offCanvasMenu .blockMessage {
  margin-left: 0;
  margin-right: 0;
  border-radius: 0;
  border-left: none;
  border-right: none;
}
.offCanvasMenu-shown {
  display: none;
}
.offCanvasMenu-backdrop {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.25);
  opacity: 0;
  -webkit-transition:  all 0.5s ease-in-out;
  transition:  all 0.5s ease-in-out;
}
.is-active .offCanvasMenu-backdrop {
  opacity: 1;
}
.offCanvasMenu-content {
  position: relative;
  width: 280px;
  max-width: 85%;
  height: 100%;
  padding-bottom: 44px;
  overflow: auto;
  -webkit-transition:  all 0.5s ease-in-out;
  transition:  all 0.5s ease-in-out;
  -webkit-overflow-scrolling: touch;
  box-shadow: 2px 0 5px 0 rgba(0, 0, 0, 0.25);
  -webkit-transform: translateX(-280px);
  -ms-transform: translateX(-280px);
  transform: translateX(-280px);
}
.is-active .offCanvasMenu-content {
  -webkit-transform: translateX(0);
  -ms-transform: translateX(0);
  transform: translateX(0);
}
.offCanvasMenu-header {
  padding: 10px;
  margin: 0;
  font-size: 20px;
  font-weight: 400;
}
.offCanvasMenu-header:before,
.offCanvasMenu-header:after {
  content: " ";
  display: table;
}
.offCanvasMenu-header:after {
  clear: both;
}
.offCanvasMenu-header a {
  color: inherit;
  text-decoration: none;
}
.offCanvasMenu-header a:hover {
  text-decoration: underline;
}
.offCanvasMenu-header.offCanvasMenu-header--separated {
  margin-bottom: 10px;
}
.offCanvasMenu-row {
  padding: 10px;
}
.offCanvasMenu-separator {
  padding: 0;
  margin: 0;
  border: none;
  border-top: 1px solid transparent;
}
.offCanvasMenu-link {
  display: block;
  padding: 10px;
  font-size: 17px;
  text-decoration: inherit;
}
.offCanvasMenu-link:hover {
  text-decoration: inherit;
}
.offCanvasMenu-link.offCanvasMenu-link--splitToggle {
  position: relative;
  text-decoration: inherit;
}
.offCanvasMenu-link.offCanvasMenu-link--splitToggle:before {
  content: '';
  position: absolute;
  left: 0;
  top: 6px;
  bottom: 6px;
  width: 0;
  border-left: 1px solid currentColor;
}
.offCanvasMenu-link.offCanvasMenu-link--splitToggle:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f078";
  display: inline-block;
  width: 1em;
}
.offCanvasMenu-link.offCanvasMenu-link--splitToggle.is-active:after {
  content: "\f077";
  display: inline-block;
  width: 1em;
}
.offCanvasMenu-linkHolder {
  display: flex;
}
.offCanvasMenu-linkHolder.is-selected a {
  color: inherit;
}
.offCanvasMenu-linkHolder.is-selected .offCanvasMenu-link:first-child {
  padding-left: 10px;
}
.offCanvasMenu-linkHolder .offCanvasMenu-link {
  flex-grow: 1;
}
.offCanvasMenu-linkHolder .offCanvasMenu-link.offCanvasMenu-link--splitToggle {
  flex-grow: 0;
}
.offCanvasMenu-linkHolder .offCanvasMenu-link:hover {
  background: none;
}
.offCanvasMenu-list,
.offCanvasMenu-listTmx {
  list-style: none;
  margin: 0;
  padding: 0;
}
.offCanvasMenu-list > li,
.offCanvasMenu-listTmx > li {
  border-top: 1px solid transparent;
}
.offCanvasMenu-list:first-child > li:first-child,
.offCanvasMenu-listTmx:first-child > li:first-child {
  border-top: none;
}
.offCanvasMenu-subList {
  list-style: none;
  margin: 0;
  padding: 0;
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
  padding-bottom: 15px;
}
.offCanvasMenu-subList.is-active {
  display: block;
  opacity: 1;
}
.offCanvasMenu-subList.is-transitioning {
  display: block;
}
.offCanvasMenu-subList.is-active {
  height: auto;
  overflow-y: visible;
}
.offCanvasMenu-subList.is-transitioning {
  overflow-y: hidden;
}
.offCanvasMenu-subList .offCanvasMenu-link {
  padding-left: 10px;
  padding-top: 6px;
  padding-bottom: 6px;
  font-size: 13px;
}
.offCanvasMenu--blocks .offCanvasMenu-content {
  background: #fefefe;
  background: -moz-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(12%, #f6f6f6), color-stop(100%, #e8e8e8));
  background: -webkit-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -o-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -ms-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e8e8e8', GradientType=0);
  color: #141414;
}
.offCanvasMenu--blocks .offCanvasMenu-header {
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #cbcbcb;
}
.offCanvasMenu--blocks .offCanvasMenu-separator {
  border-top-color: #d8d8d8;
}
.offCanvasMenu--blocks .offCanvasMenu-list > li,
.offCanvasMenu--blocks .offCanvasMenu-listTmx > li {
  border-top-color: #d8d8d8;
}
.offCanvasMenu--nav .offCanvasMenu-content {
  color: #141414;
  background: -moz-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(50%, #f1f1f1), color-stop(51%, #e1e1e1), color-stop(100%, #f6f6f6));
  background: -webkit-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -o-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -ms-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6', GradientType=0);
  font-family: Arial, sans-serif;
  border: 1px solid #a8a8a8;
  border-bottom-style: solid;
  border-bottom-color: #888888;
  border-radius: 5px;
  height: 38px;
}
.offCanvasMenu--nav .offCanvasMenu-content a {
  color: inherit;
}
.offCanvasMenu--nav .offCanvasMenu-header {
  background: rgba(20, 20, 20, 0.15);
  border-bottom: 1px solid rgba(20, 20, 20, 0.25);
}
.offCanvasMenu--nav .offCanvasMenu-list,
.offCanvasMenu--nav .offCanvasMenu-listTmx {
  border-bottom: 1px solid rgba(20, 20, 20, 0.25);
}
.offCanvasMenu--nav .offCanvasMenu-separator {
  border-top-color: rgba(20, 20, 20, 0.25);
}
.offCanvasMenu--nav .offCanvasMenu-link.offCanvasMenu-link--splitToggle:before {
  border-left-color: rgba(20, 20, 20, 0.16);
}
.offCanvasMenu--nav .offCanvasMenu-linkHolder {
  text-decoration: none;
}
.offCanvasMenu--nav .offCanvasMenu-linkHolder:hover {
  background: rgba(20, 20, 20, 0.09);
}
.offCanvasMenu--nav .offCanvasMenu-linkHolder.is-selected {
  color: #141414;
}
.offCanvasMenu--nav .offCanvasMenu-linkHolder.is-selected .offCanvasMenu-link.offCanvasMenu-link--splitToggle:before {
  border-left-color: rgba(20, 20, 20, 0.2);
}
.offCanvasMenu--nav .offCanvasMenu-subList {
  background: rgba(20, 20, 20, 0.15);
}
.offCanvasMenu--nav .offCanvasMenu-subList .offCanvasMenu-link:hover {
  text-decoration: none;
  background: rgba(20, 20, 20, 0.15);
}
.offCanvasMenu--nav .offCanvasMenu-list > li,
.offCanvasMenu--nav .offCanvasMenu-listTmx > li {
  border-top-color: rgba(20, 20, 20, 0.15);
}
.offCanvasMenu-list {
  display: none;
}
@media screen and (max-width: 480px) {
  .offCanvasMenu--nav .offCanvasMenu-content {
    height: 100%;
    border-left: none;
    border-top: none;
    border-radius: 0px 5px 5px 0px;
    background: #fff;
  }
}
.tabs {
  display: flex;
}
.tabs.tabs--wrappable {
  flex-wrap: wrap;
}
.tabs-tab {
  display: inline-block;
  cursor: pointer;
  white-space: nowrap;
  color: inherit;
  font-weight: inherit;
  text-decoration: none;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.tabs-tab:hover {
  text-decoration: none;
}
.tabs-extra {
  float: right;
  position: relative;
  margin-left: auto;
  padding: 0 0 0 6px;
  align-self: center;
  white-space: nowrap;
}
.tabs-extra a {
  color: inherit;
  text-decoration: none;
  display: block;
  padding: 6px;
}
.tabPanes {
  list-style: none;
  margin: 0;
  padding: 0;
}
.tabPanes > li {
  display: none;
}
.tabPanes > li.is-active {
  display: block;
}
.tabs--standalone {
  padding: 0;
  margin-bottom: 20px;
  font-weight: 400;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  font-size: 15px;
  color: #2577b1;
  background: #f5f5f5;
  font-size: 0;
}
.tabs--standalone .tabs-tab,
.tabs--standalone .tabs-extra,
.tabs--standalone .hScroller-action {
  font-size: 15px;
}
.tabs--standalone .tabs-tab {
  padding: 6px 10px 3px;
  border-bottom: 3px solid transparent;
}
.tabs--standalone .tabs-tab:hover {
  color: #47a7eb;
}
.tabs--standalone .tabs-tab.is-active {
  color: #47a7eb;
  border-color: #47a7eb;
}
.tabs--standalone .hScroller-action {
  color: #2577b1;
}
.tabs--standalone .hScroller-action:hover {
  color: #47a7eb;
}
.tabs--standalone .hScroller-action.hScroller-action--start {
  background: #f5f5f5;
  background: linear-gradient(to right, #f5f5f5 66%, rgba(245, 245, 245, 0) 100%);
}
.tabs--standalone .hScroller-action.hScroller-action--end {
  background: #f5f5f5;
  background: linear-gradient(to right, rgba(245, 245, 245, 0) 0%, #f5f5f5 33%);
}
@media (max-width: 610px) {
  .tabs--standalone {
    margin-left: -10px;
    margin-right: -10px;
    border-radius: 0;
    border-left: none;
    border-right: none;
  }
}
.overlay-container {
  display: none;
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 900;
  background: rgba(0, 0, 0, 0.35);
  -webkit-overflow-scrolling: touch;
  opacity: 0;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
}
.overlay-container.is-transitioning {
  display: block;
}
.overlay-container.is-active {
  display: block;
  opacity: 1;
}
.overlay {
  position: relative;
  margin: 40px auto 10px;
  margin-top: 4vh;
  width: 100%;
  max-width: 800px;
  background: #fefefe;
  background: -moz-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(12%, #f6f6f6), color-stop(100%, #e8e8e8));
  background: -webkit-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -o-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -ms-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e8e8e8', GradientType=0);
  color: #141414;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-radius: 4px;
  box-shadow: 0 5px 15px 0 rgba(0, 0, 0, 0.5);
  outline: none;
}
.overlay > .overlay-title:first-child,
.overlay .overlay-firstChild {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.overlay > .overlay-content > *:last-child,
.overlay .overlay-lastChild {
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 4px;
}
@media (max-width: 820px) {
  .overlay {
    max-width: calc(100% - 20px);
  }
}
.overlay-title {
  display: none;
  margin: 0;
  font-weight: 400;
  font-size: 24px;
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #dfdfdf;
  padding-top: 6px;
  padding-right: 10px;
  padding-bottom: 6px;
  padding-left: 10px;
  background: linear-gradient(0deg, #fefefe, #fefefe);
}
.overlay-title:before,
.overlay-title:after {
  content: " ";
  display: table;
}
.overlay-title:after {
  clear: both;
}
.overlay .overlay-title {
  display: block;
}
.overlay-titleCloser {
  float: right;
  cursor: pointer;
  margin-left: 5px;
  text-decoration: none;
  opacity: .5;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.overlay-titleCloser:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
}
.overlay-titleCloser:hover {
  text-decoration: none;
  opacity: 1;
}
.overlay-content:before,
.overlay-content:after {
  content: " ";
  display: table;
}
.overlay-content:after {
  clear: both;
}
body.is-modalOpen {
  overflow: hidden !important;
}
body.is-modalOpen .overlay-container,
body.is-modalOpen .offCanvasMenu {
  overflow-y: scroll !important;
}
@media (max-width: 480px) {
  .overlay-title {
    font-size: 20px;
  }
}
.block-container > .tabPanes > li > .blocks > .block > .block-container,
.block-container > .block-body > .blocks > .block > .block-container,
.block-container > .block-body > .block-row > .blocks > .block > .block-container,
.overlay-content > .blocks > .block > .block-container,
.block-container > .tabPanes > li > .block > .block-container,
.block-container > .block-body > .block > .block-container,
.block-container > .block-body > .block-row > .block > .block-container,
.overlay-content > .block > .block-container,
.block-container > .tabPanes > li > .blockMessage,
.block-container > .block-body > .blockMessage,
.block-container > .block-body > .block-row > .blockMessage,
.overlay-content > .blockMessage {
  margin-left: 0;
  margin-right: 0;
  border-radius: 4px;
  border-left: none;
  border-right: none;
}
.block-container > .tabPanes > li > .blocks > .block:first-child,
.block-container > .block-body > .blocks > .block:first-child,
.block-container > .block-body > .block-row > .blocks > .block:first-child,
.overlay-content > .blocks > .block:first-child,
.block-container > .tabPanes > li > .block:first-child,
.block-container > .block-body > .block:first-child,
.block-container > .block-body > .block-row > .block:first-child,
.overlay-content > .block:first-child,
.block-container > .tabPanes > li > .blockMessage:first-child,
.block-container > .block-body > .blockMessage:first-child,
.block-container > .block-body > .block-row > .blockMessage:first-child,
.overlay-content > .blockMessage:first-child {
  margin-top: 0;
}
.block-container > .tabPanes > li > .blocks > .block:first-child .block-outer:not(.block-outer--after),
.block-container > .block-body > .blocks > .block:first-child .block-outer:not(.block-outer--after),
.block-container > .block-body > .block-row > .blocks > .block:first-child .block-outer:not(.block-outer--after),
.overlay-content > .blocks > .block:first-child .block-outer:not(.block-outer--after),
.block-container > .tabPanes > li > .block:first-child .block-outer:not(.block-outer--after),
.block-container > .block-body > .block:first-child .block-outer:not(.block-outer--after),
.block-container > .block-body > .block-row > .block:first-child .block-outer:not(.block-outer--after),
.overlay-content > .block:first-child .block-outer:not(.block-outer--after),
.block-container > .tabPanes > li > .blockMessage:first-child .block-outer:not(.block-outer--after),
.block-container > .block-body > .blockMessage:first-child .block-outer:not(.block-outer--after),
.block-container > .block-body > .block-row > .blockMessage:first-child .block-outer:not(.block-outer--after),
.overlay-content > .blockMessage:first-child .block-outer:not(.block-outer--after) {
  border-bottom: 1px solid #dfdfdf;
  padding: 6px;
}
.block-container > .tabPanes > li > .blocks > .block:last-child,
.block-container > .block-body > .blocks > .block:last-child,
.block-container > .block-body > .block-row > .blocks > .block:last-child,
.overlay-content > .blocks > .block:last-child,
.block-container > .tabPanes > li > .block:last-child,
.block-container > .block-body > .block:last-child,
.block-container > .block-body > .block-row > .block:last-child,
.overlay-content > .block:last-child,
.block-container > .tabPanes > li > .blockMessage:last-child,
.block-container > .block-body > .blockMessage:last-child,
.block-container > .block-body > .block-row > .blockMessage:last-child,
.overlay-content > .blockMessage:last-child {
  margin-bottom: 0;
}
.block-container > .tabPanes > li > .blocks > .block:last-child .block-outer.block-outer--after,
.block-container > .block-body > .blocks > .block:last-child .block-outer.block-outer--after,
.block-container > .block-body > .block-row > .blocks > .block:last-child .block-outer.block-outer--after,
.overlay-content > .blocks > .block:last-child .block-outer.block-outer--after,
.block-container > .tabPanes > li > .block:last-child .block-outer.block-outer--after,
.block-container > .block-body > .block:last-child .block-outer.block-outer--after,
.block-container > .block-body > .block-row > .block:last-child .block-outer.block-outer--after,
.overlay-content > .block:last-child .block-outer.block-outer--after,
.block-container > .tabPanes > li > .blockMessage:last-child .block-outer.block-outer--after,
.block-container > .block-body > .blockMessage:last-child .block-outer.block-outer--after,
.block-container > .block-body > .block-row > .blockMessage:last-child .block-outer.block-outer--after,
.overlay-content > .blockMessage:last-child .block-outer.block-outer--after {
  border-top: 1px solid #dfdfdf;
  padding: 6px;
}
.block-container > .tabPanes > li > .blocks > .block:first-child > .block-container,
.block-container > .block-body > .blocks > .block:first-child > .block-container,
.block-container > .block-body > .block-row > .blocks > .block:first-child > .block-container,
.overlay-content > .blocks > .block:first-child > .block-container,
.block-container > .tabPanes > li > .block:first-child > .block-container,
.block-container > .block-body > .block:first-child > .block-container,
.block-container > .block-body > .block-row > .block:first-child > .block-container,
.overlay-content > .block:first-child > .block-container,
.block-container > .tabPanes > li > .blockMessage:first-child,
.block-container > .block-body > .blockMessage:first-child,
.block-container > .block-body > .block-row > .blockMessage:first-child,
.overlay-content > .blockMessage:first-child {
  border-top: none;
}
.block-container > .tabPanes > li > .blocks > .block:last-child > .block-container,
.block-container > .block-body > .blocks > .block:last-child > .block-container,
.block-container > .block-body > .block-row > .blocks > .block:last-child > .block-container,
.overlay-content > .blocks > .block:last-child > .block-container,
.block-container > .tabPanes > li > .block:last-child > .block-container,
.block-container > .block-body > .block:last-child > .block-container,
.block-container > .block-body > .block-row > .block:last-child > .block-container,
.overlay-content > .block:last-child > .block-container,
.block-container > .tabPanes > li > .blockMessage:last-child,
.block-container > .block-body > .blockMessage:last-child,
.block-container > .block-body > .block-row > .blockMessage:last-child,
.overlay-content > .blockMessage:last-child {
  border-bottom: none;
}
.block-container > .tabPanes > li > .blocks > .block:not(:first-child) > .block-container,
.block-container > .block-body > .blocks > .block:not(:first-child) > .block-container,
.block-container > .block-body > .block-row > .blocks > .block:not(:first-child) > .block-container,
.overlay-content > .blocks > .block:not(:first-child) > .block-container,
.block-container > .tabPanes > li > .block:not(:first-child) > .block-container,
.block-container > .block-body > .block:not(:first-child) > .block-container,
.block-container > .block-body > .block-row > .block:not(:first-child) > .block-container,
.overlay-content > .block:not(:first-child) > .block-container,
.block-container > .tabPanes > li > .blockMessage:not(:first-child),
.block-container > .block-body > .blockMessage:not(:first-child),
.block-container > .block-body > .block-row > .blockMessage:not(:first-child),
.overlay-content > .blockMessage:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.block-container > .tabPanes > li > .blocks > .block:not(:last-child) > .block-container,
.block-container > .block-body > .blocks > .block:not(:last-child) > .block-container,
.block-container > .block-body > .block-row > .blocks > .block:not(:last-child) > .block-container,
.overlay-content > .blocks > .block:not(:last-child) > .block-container,
.block-container > .tabPanes > li > .block:not(:last-child) > .block-container,
.block-container > .block-body > .block:not(:last-child) > .block-container,
.block-container > .block-body > .block-row > .block:not(:last-child) > .block-container,
.overlay-content > .block:not(:last-child) > .block-container,
.block-container > .tabPanes > li > .blockMessage:not(:last-child),
.block-container > .block-body > .blockMessage:not(:last-child),
.block-container > .block-body > .block-row > .blockMessage:not(:last-child),
.overlay-content > .blockMessage:not(:last-child) {
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.overlay-content > .blocks > .block > .block-container,
.overlay-content > .block > .block-container,
.overlay-content > .blockMessage {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.overlay-content > .blocks > .block > .block-container > :first-child,
.overlay-content > .block > .block-container > :first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.overlay-content > .blocks > .block > .block-container > .block-body:first-child > .formRow:first-child > dt,
.overlay-content > .block > .block-container > .block-body:first-child > .formRow:first-child > dt {
  border-top-left-radius: 0;
}
.overlay-content > .blocks > .block > .block-container > .block-body:first-child > .formRow:first-child > dd,
.overlay-content > .block > .block-container > .block-body:first-child > .formRow:first-child > dd {
  border-top-right-radius: 0;
}
.overlay-content > .blocks > .block > .block-container > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:first-child,
.overlay-content > .block > .block-container > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:first-child,
.overlay-content > .blocks > .block > .block-container > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:first-child,
.overlay-content > .block > .block-container > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:first-child {
  border-top-left-radius: 0;
}
.overlay-content > .blocks > .block > .block-container > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:last-child,
.overlay-content > .block > .block-container > .dataList:first-child tbody:first-child .dataList-row:first-child > .dataList-cell:last-child,
.overlay-content > .blocks > .block > .block-container > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:last-child,
.overlay-content > .block > .block-container > .dataList:first-child thead:first-child .dataList-row:first-child > .dataList-cell:last-child {
  border-top-right-radius: 0;
}
.overlay-content > .block:last-child > .block-container > .formSubmitRow:not(.is-sticky):last-child .formSubmitRow-bar {
  border-bottom-left-radius: 3px;
  border-bottom-right-radius: 3px;
}
.globalAction {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 900;
  opacity: 0;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  pointer-events: none;
}
.globalAction.is-active {
  opacity: 1;
}
.globalAction-bar {
  position: absolute;
  left: 0;
  top: 0;
  width: 33%;
  height: 3px;
  background: #f2930d;
  pointer-events: none;
  transform: translateX(-33vw);
  -webkit-animation: 1.5s ease-in-out infinite globalActionBar;
  animation: 1.5s ease-in-out infinite globalActionBar;
}
.globalAction-bar:before {
  content: '';
  position: absolute;
  right: 0;
  height: 100%;
  width: 100px;
  box-shadow: 0 0 10px 2px #f2930d;
  transform: rotate(2deg) translate(0px, -3px);
}
@-webkit-keyframes globalActionBar {
  from {
    transform: translateX(-33vw);
  }
  to {
    transform: translateX(100vw);
  }
}
@keyframes globalActionBar {
  from {
    transform: translateX(-33vw);
  }
  to {
    transform: translateX(100vw);
  }
}
.globalAction-block {
  position: fixed;
  top: 20px;
  right: 10px;
  pointer-events: none;
}
.globalAction-block i {
  display: inline-block;
  content: ' ';
  font-size: 10px;
  width: 1em;
  height: 2.5em;
  margin-right: .3em;
  background-color: #f2930d;
  box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
  -webkit-animation: 1s ease infinite globalActionPulse;
  animation: 1s ease infinite globalActionPulse;
  opacity: .35;
}
.globalAction-block i:last-child {
  margin-right: 0;
}
.globalAction-block i:nth-child(2) {
  animation-delay: .2s;
}
.globalAction-block i:nth-child(3) {
  animation-delay: .4s;
}
@media (max-width: 480px) {
  .globalAction-block {
    display: none;
  }
}
@-webkit-keyframes globalActionPulse {
  from {
    -webkit-transform: scaleY(1.5);
    -ms-transform: scaleY(1.5);
    transform: scaleY(1.5);
    opacity: 1;
  }
  to {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    transform: scaleY(1);
    opacity: .35;
  }
}
@keyframes globalActionPulse {
  from {
    -webkit-transform: scaleY(1.5);
    -ms-transform: scaleY(1.5);
    transform: scaleY(1.5);
    opacity: 1;
  }
  to {
    -webkit-transform: scaleY(1);
    -ms-transform: scaleY(1);
    transform: scaleY(1);
    opacity: .35;
  }
}
.avatar {
  display: inline-flex;
  justify-content: center;
  align-items: center;
  border-radius: 50%;
  vertical-align: top;
  overflow: hidden;
}
.avatar img {
  background-color: #fefefe;
}
.avatar.avatar--default.avatar--default--dynamic,
.avatar.avatar--default.avatar--default--text {
  font-family: 'Arial', sans-serif;
  font-weight: normal;
  text-align: center;
  text-decoration: none !important;
  line-height: 1;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.avatar.avatar--default.avatar--default--text {
  color: #8c8c8c !important;
  background: #e2e2e2 !important;
}
.avatar.avatar--default.avatar--default--text > span:before {
  content: '?';
}
.avatar.avatar--default.avatar--default--image {
  background-color: #fefefe;
  background-image: url();
  background-size: cover;
}
.avatar.avatar--default.avatar--default--image > span {
  display: none;
}
.avatar:hover {
  text-decoration: none;
}
.avatar.avatar--updateLink {
  position: relative;
}
.avatar.avatar--separated {
  border: 1px solid #fefefe;
}
.avatar.avatar--square {
  border-radius: 0;
}
.avatar.avatar--xxs {
  width: 24px;
  height: 24px;
  font-size: 14px;
}
.avatar.avatar--xs {
  width: 32px;
  height: 32px;
  font-size: 19px;
}
.avatar.avatar--s {
  width: 48px;
  height: 48px;
  font-size: 29px;
}
.avatar.avatar--m {
  width: 96px;
  height: 96px;
  font-size: 58px;
}
.avatar.avatar--l {
  width: 192px;
  height: 192px;
  font-size: 115px;
}
.avatar.avatar--o {
  width: 384px;
  height: 384px;
  font-size: 230px;
}
.avatar img:not(.cropImage) {
  text-indent: 100%;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  display: block;
  border-radius: inherit;
  width: 100%;
  height: 100%;
}
.avatar:not(a) {
  cursor: inherit;
}
.avatar-update {
  width: 100%;
  height: 30px;
  bottom: -30px;
  position: absolute;
  background: #000000;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.3) 100%);
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
  padding: 3px;
  overflow: hidden;
  font-family: Verdana, Helvetica, Arial, sans-serif;
  font-size: 12px;
  line-height: 1.4;
  display: none;
  align-items: center;
  justify-content: center;
}
.avatar-update a {
  color: inherit;
  text-decoration: none;
}
.avatar-update a:hover {
  text-decoration: underline;
}
.avatar--updateLink .avatar-update {
  display: flex;
}
.has-touchevents .avatar-update,
.avatar:hover .avatar-update {
  bottom: 0;
}
.avatar-update a {
  text-shadow: 0 0 2px rgba(0, 0, 0, 0.6);
  color: #fff;
}
.avatar-update a:hover {
  text-decoration: none;
}
.avatarWrapper {
  display: inline-block;
  position: relative;
}
.avatarWrapper-update {
  position: absolute;
  top: 50%;
  bottom: 0;
  left: 0;
  right: 0;
  display: flex;
  align-items: flex-end;
  justify-content: center;
  padding-bottom: .8em;
  color: #fff;
  text-decoration: none;
  opacity: 0;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
}
.avatarWrapper-update:before {
  content: '';
  position: absolute;
  top: -100%;
  bottom: 0;
  left: 0;
  right: 0;
  border-bottom-left-radius: 50%;
  border-bottom-right-radius: 50%;
  background: #000000;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 60%, rgba(0, 0, 0, 0.9) 100%);
  opacity: .75;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  pointer-events: none;
}
.avatarWrapper-update span {
  position: relative;
}
.avatarWrapper-update:hover {
  color: #fff;
  text-decoration: none;
}
.avatarWrapper-update:hover:before {
  opacity: 1;
}
.avatarWrapper:hover .avatarWrapper-update,
.has-touchevents .avatarWrapper-update {
  opacity: 1;
}
.avatarWrapper-update.avatarWrapper-update--small {
  font-size: 13px;
}
.dataList {
  max-width: 100%;
}
.dataList.dataList--separated {
  border-top: 1px solid #dfdfdf;
  border-bottom: 1px solid #dfdfdf;
}
.dataList.dataList--separatedTop {
  border-top: 1px solid #dfdfdf;
}
.dataList.dataList--separatedBottom {
  border-bottom: 1px solid #dfdfdf;
}
.dataList.dataList--contained {
  overflow-x: auto;
  max-height: 85vh;
}
@media (max-width: 610px) {
  .dataList {
    overflow-x: auto;
  }
}
.dataList-table {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
}
.dataList-rowGroup.is-hidden {
  display: none;
}
.dataList-row:hover:not(.dataList-row--noHover):not(.dataList-row--header):not(.is-spHovered),
.is-spActive .dataList-row.is-spChecked {
  background: rgba(254, 254, 254, 0.5);
}
.is-spActive .dataList-row.is-spHovered {
  background: rgba(254, 254, 254, 0.75);
}
.is-spActive .dataList-row:not(.dataList-row--noHover):not(.dataList-row--header):not(.is-spChecked) * {
  color: #8c8c8c;
}
.dataList-row.dataList-row--header .dataList-cell {
  font-size: 12px;
  color: #2577b1;
  font-weight: 700;
  background: rgba(254, 254, 254, 0.65);
  border-bottom: 1px solid #cbcbcb;
  text-transform: none;
  padding: 5px 10px;
  text-align: left;
}
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--action,
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--link {
  padding: 0;
}
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--action a,
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--link a,
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--action label,
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--link label,
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--action .dataList-blockLink,
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--link .dataList-blockLink {
  padding: 5px 10px;
}
.dataList-row.dataList-row--header .dataList-cell a {
  color: inherit;
  text-decoration: underline;
}
.dataList-row.dataList-row--header .dataList-cell.dataList-cell--min {
  text-align: center;
}
.dataList-row.dataList-row--subSection .dataList-cell {
  font-size: 17px;
  color: #2577b1;
  background: #fefefe;
  border-bottom: 1px solid #dfdfdf;
  padding: 5px 10px;
}
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--action,
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--link {
  padding: 0;
}
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--action a,
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--link a,
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--action label,
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--link label,
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--action .dataList-blockLink,
.dataList-row.dataList-row--subSection .dataList-cell.dataList-cell--link .dataList-blockLink {
  padding: 5px 10px;
}
.dataList-row.dataList-row--subSection .dataList-cell a {
  color: inherit;
}
.dataList-row.dataList-row--subSection:hover:not(.dataList-row--noHover) .dataList-cell {
  background: #fefefe;
}
.dataList-row.dataList-row--note .dataList-cell {
  text-align: center;
  font-style: italic;
}
.dataList-row.dataList-row--deleted .dataList-cell {
  opacity: .5;
}
.dataList-row.dataList-row--highlighted {
  font-weight: 700;
}
.dataList-row.dataList-row--custom > .dataList-cell:first-child {
  border-left: 3px solid red;
}
.dataList-row.dataList-row--custom .dataList-cell--link a {
  color: red;
}
.dataList-row.dataList-row--parentCustom > .dataList-cell:first-child {
  border-left: 3px solid orange;
}
.dataList-row.dataList-row--parentCustom .dataList-cell--link a {
  color: orange;
}
.dataList-row.dataList-row--protected > .dataList-cell:first-child {
  border-left: 3px solid #47a7eb;
}
.dataList-row.is-hidden {
  display: none;
}
.dataList-row.dataList-row--disabled .dataList-cell--link a {
  color: #8c8c8c;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
tbody:last-child .dataList-row:last-child .dataList-cell {
  border-bottom: none;
}
.dataList-cell {
  vertical-align: middle;
  padding: 10px 10px;
  border-bottom: 1px solid #e7e7e7;
}
.dataList-cell.dataList-cell--main {
  min-width: 180px;
}
.dataList-cell.dataList-cell--link,
.dataList-cell.dataList-cell--action {
  padding: 0;
}
.dataList-cell.dataList-cell--alt,
.dataList-cell.dataList-cell--action {
  background: #f5f5f5;
}
.dataList-cell.dataList-cell--highlighted {
  background: #fefefe;
}
.dataList-cell.dataList-cell--separated {
  border-left: 1px solid #e7e7e7;
}
.dataList-cell.dataList-cell--min,
.dataList-cell.dataList-cell--action,
.dataList-cell.dataList-cell--iconic,
.dataList-cell.dataList-cell-fa {
  width: 1%;
  white-space: nowrap;
  word-wrap: normal;
  text-align: center;
}
.dataList-cell.dataList-cell--action {
  font-size: 12px;
}
.dataList-cell.dataList-cell--action,
.dataList-cell.dataList-cell--link {
  cursor: pointer;
  text-decoration: none;
}
.dataList-cell.dataList-cell--action.dataList-cell--alt:hover,
.dataList-cell.dataList-cell--link.dataList-cell--alt:hover,
.dataList-cell.dataList-cell--action.dataList-cell--action:hover,
.dataList-cell.dataList-cell--link.dataList-cell--action:hover {
  background: #fefefe;
}
.dataList-cell.dataList-cell--action a,
.dataList-cell.dataList-cell--link a,
.dataList-cell.dataList-cell--action label,
.dataList-cell.dataList-cell--link label,
.dataList-cell.dataList-cell--action .dataList-blockLink,
.dataList-cell.dataList-cell--link .dataList-blockLink {
  padding: 10px 10px;
  display: block;
  height: 100%;
  text-decoration: none;
  cursor: pointer;
}
.dataList-cell.dataList-cell--action input,
.dataList-cell.dataList-cell--link input {
  cursor: pointer;
}
.dataList-cell.dataList-cell--iconic,
.dataList-cell.dataList-cell--fa {
  padding: 0;
  font-size: 125%;
  min-width: 2.5em;
  position: relative;
  text-align: center;
}
.dataList-cell.dataList-cell--iconic > a.iconic > i {
  display: inline-block;
  min-width: 1em;
  height: .9em;
  text-align: left;
}
.dataList-cell.dataList-cell--iconic > a.iconic > i:before,
.dataList-cell.dataList-cell--iconic > a.iconic > i:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  opacity: 1;
}
.dataList-cell.dataList-cell--iconic > .iconic {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.dataList-cell.dataList-cell--iconic > .iconic > i:before,
.dataList-cell.dataList-cell--iconic > .iconic > i:after {
  left: 50%;
  margin-left: -.5em;
  top: 50%;
  margin-top: -.5em;
}
.dataList-cell.dataList-cell--iconic > .iconic > input[type=checkbox] + i:before,
.dataList-cell.dataList-cell--iconic > .iconic > input[type=checkbox] + i:after {
  margin-top: -.7em;
  margin-left: -.4375em;
}
.dataList-cell.dataList-cell--iconic > .iconic > input[type=radio] + i:before,
.dataList-cell.dataList-cell--iconic > .iconic > input[type=radio] + i:after {
  margin-top: -.7em;
  margin-left: -.5em;
}
.dataList-cell.dataList-cell--iconic > .iconic.iconic--toggle > input[type=checkbox] + i:before {
  content: "\f204";
  display: inline-block;
  width: 1.125em;
}
.dataList-cell.dataList-cell--iconic > .iconic.iconic--toggle > input[type=checkbox] + i:after {
  content: "\f205";
  display: inline-block;
  width: 1.125em;
}
.dataList-cell.dataList-cell--iconic > .iconic.iconic--toggle > input[type=checkbox] + i:before,
.dataList-cell.dataList-cell--iconic > .iconic.iconic--toggle > input[type=checkbox] + i:after {
  font-size: 120%;
  margin-top: -.7em;
  margin-left: -.5625em;
}
.dataList-cell.dataList-cell--iconic > .iconic.iconic--delete > i:before {
  content: "\f2ed";
}
.dataList-cell.dataList-cell--iconic > .iconic.iconic--delete > i:before,
.dataList-cell.dataList-cell--iconic > .iconic.iconic--delete > i:after {
  margin-top: -.7em;
  margin-left: -.4375em;
}
.dataList-cell.dataList-cell--image {
  padding: 0;
}
.dataList-cell.dataList-cell--image a {
  padding: 0;
}
.dataList-cell.dataList-cell--image img,
.dataList-cell.dataList-cell--image .dataList-imagePlaceholder {
  display: block;
  margin: auto;
  font-size: 30px;
}
.dataList-cell.dataList-cell--imageSmall img,
.dataList-cell.dataList-cell--imageSmall .dataList-imagePlaceholder {
  height: 41px;
  max-width: 41px;
  line-height: 41px;
}
.dataList-cell.dataList-cell--imageSmall .avatar {
  width: 41px;
  height: 41px;
  font-size: 25px;
  border-radius: 2px;
}
.dataList-cell.dataList-cell--imageSmallWide img,
.dataList-cell.dataList-cell--imageSmallWide .dataList-imagePlaceholder {
  height: 41px;
  max-width: 82px;
  line-height: 41px;
}
.dataList-cell.dataList-cell--imageSmallWide .avatar {
  width: 41px;
  height: 41px;
  font-size: 25px;
  border-radius: 0;
}
.dataList-cell.dataList-cell--imageMedium img,
.dataList-cell.dataList-cell--imageMedium .dataList-imagePlaceholder {
  height: 54px;
  max-width: 54px;
  line-height: 54px;
}
.dataList-cell.dataList-cell--imageMedium .avatar {
  width: 54px;
  height: 54px;
  font-size: 32px;
  border-radius: 0;
}
.dataList-cell.dataList-cell--imageMediumWide img,
.dataList-cell.dataList-cell--imageMediumWide .dataList-imagePlaceholder {
  height: 54px;
  max-width: 108px;
  line-height: 54px;
}
.dataList-cell.dataList-cell--imageMediumWide .avatar {
  width: 54px;
  height: 54px;
  font-size: 32px;
  border-radius: 0;
}
.dataList-cell.dataList-cell--responsiveMenuTrigger,
.dataList-cell.dataList-cell--fauxResponsiveMenuTrigger {
  display: none;
}
.dataList-cell.dataList-cell--breakWord {
  word-break: break-word;
}
.dataList-cell.dataList-cell--hint,
.dataList-row--subSection .dataList-cell.dataList-cell--hint {
  text-align: right;
  font-size: 12px;
  color: #8c8c8c;
}
.dataList-cell.dataList-cell--d1 {
  text-indent: 0px;
}
.dataList-cell.dataList-cell--d2 {
  text-indent: 25px;
}
.dataList-cell.dataList-cell--d3 {
  text-indent: 50px;
}
.dataList-cell.dataList-cell--d4 {
  text-indent: 75px;
}
.dataList-cell.dataList-cell--d5 {
  text-indent: 100px;
}
.dataList-cell.dataList-cell--d6 {
  text-indent: 125px;
}
.dataList-cell.dataList-cell--d7 {
  text-indent: 150px;
}
.dataList-cell.dataList-cell--d8 {
  text-indent: 175px;
}
.dataList-cell.dataList-cell--d9 {
  text-indent: 200px;
}
.dataList-cell.dataList-cell--d10 {
  text-indent: 225px;
}
.dataList-cell .is-match {
  text-decoration: underline;
  color: red;
}
@media (max-width: 610px) {
  .dataList-cell.dataList-cell--responsiveMenuItem,
  .dataList-cell.dataList-cell--fauxResponsiveMenuItem {
    display: none !important;
  }
  .dataList-cell.dataList-cell--responsiveMenuTrigger,
  .dataList-cell.dataList-cell--fauxResponsiveMenuTrigger {
    display: table-cell;
  }
}
.dataList-imagePlaceholder:after {
  content: '?';
}
.dataList-mainRow,
.dataList-textRow,
.dataList-subRow {
  width: 0;
  min-width: 100%;
  line-height: 1.4;
  max-height: 1.4em;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
}
.dataList-mainRow:empty,
.dataList-textRow:empty,
.dataList-subRow:empty {
  display: none;
}
.dataList-mainRow {
  font-weight: 700;
}
.dataList-row--subSection .dataList-mainRow {
  font-weight: 400;
}
.dataList-secondRow {
  display: block;
  font-size: 11px;
}
.dataList-hint,
.dataList-subRow {
  color: #8c8c8c;
  font-size: 12px;
  font-weight: 400;
}
.dataList-hint {
  display: inline;
}
.dataList-row--footer .dataList-cell {
  padding: 5px 10px;
  border-bottom: none;
  font-size: 12px;
  color: #505050;
  background: #f5f5f5;
  border-top: 1px solid #dfdfdf;
}
.dataList--responsive .dataList-table,
.dataList--responsive tbody,
.dataList--responsive thead,
.dataList--responsive tfoot {
  display: block;
}
.dataList--responsive .dataList-row {
  display: block;
}
.dataList--responsive .dataList-row.dataList-row--headerResponsive {
  display: none;
}
.dataList--responsive .dataList-cell {
  display: block;
  width: auto;
}
.dataList--responsive .dataList-cell[data-cell-label] {
  display: flex;
  align-items: center;
}
.dataList--responsive .dataList-cell[data-cell-label] > * {
  min-width: 0;
  text-align: right;
}
.dataList--responsive .dataList-cell[data-cell-label]:before {
  content: attr(data-cell-label) ":";
  padding-right: 10px;
  margin-right: auto;
  word-break: normal;
}
.dataList--responsive .dataList-cell[data-cell-label] > .input:first-child:last-child {
  display: inline;
}
.dataList--responsive .dataList-cell[data-cell-label] a {
  min-width: 0;
}
.dataList--responsive .dataList-cell.dataList-cell--iconic {
  padding: 10px 10px;
}
.dataList--responsive .dataList-cell.dataList-cell--iconic:not([data-cell-label]):before {
  content: "";
  display: inline-block;
  height: 1em;
}
.dataList--responsive .dataList-cell.dataList-cell--link[data-cell-label]:before,
.dataList--responsive .dataList-cell.dataList-cell--action[data-cell-label]:before {
  padding: 10px 10px;
}
.dataList--responsive .dataList-cell.dataList-cell--iconic,
.dataList--responsive .dataList-cell.dataList-cell--fa {
  display: table-cell;
  width: 1%;
}
.dataList--responsive .dataList-row:not(.dataList-row--header):not(.dataList-row--subSection) {
  border-bottom: 1px solid #dfdfdf;
}
.dataList--responsive .dataList-row:not(.dataList-row--header):not(.dataList-row--subSection) .dataList-cell {
  border-bottom: none;
}
.dataList--responsive tbody:last-child .dataList-row:not(.dataList-row--header):not(.dataList-row--subSection):last-child {
  border-bottom: none;
}
.dataList--responsive .dataList-mainRow,
.dataList--responsive .dataList-textRow,
.dataList--responsive .dataList-subRow {
  width: auto;
  min-width: 0;
}
.filterBlock {
  padding: 6px;
  font-size: 12px;
  float: right;
  color: #141414;
  background: #fefefe;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-radius: 4px;
}
.filterBlock:before,
.filterBlock:after {
  content: " ";
  display: table;
}
.filterBlock:after {
  clear: both;
}
.filterBlock .filterBlock-input {
  width: 150px;
  display: inline;
  font-size: 12px;
}
.filterBlock .filterBlock-input.filterBlock-input--small {
  width: 100px;
}
.filterBlock select.filterBlock-input {
  width: auto;
}
.quickFilter {
  position: relative;
}
.quickFilter .input {
  width: 180px;
  font-size: 12px;
}
.quickFilter label {
  font-size: 12px;
}
.quickFilter input[type=checkbox] {
  vertical-align: -2px;
}
.quickFilter .js-filterClear {
  color: #47a7eb;
}
.quickFilter .js-filterClear:hover {
  color: #1265a1;
}
.quickFilter .js-filterClear:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f00d";
}
.filterBar:before,
.filterBar:after {
  content: " ";
  display: table;
}
.filterBar:after {
  clear: both;
}
.filterBar-filters {
  list-style: none;
  margin: 0;
  padding: 0;
  display: inline;
}
.filterBar-filters > li {
  display: inline;
}
.filterBar-filterToggle {
  display: inline-block;
  text-decoration: none;
  color: inherit;
  padding: 1px 8px;
  border-radius: 4px;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.filterBar-filterToggle:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 80%;
  content: " \f00d";
  opacity: .5;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
}
.filterBar-filterToggle:hover {
  text-decoration: none;
}
.filterBar-filterToggle:hover:after {
  opacity: 1;
}
.filterBar-filterToggle-label {
  opacity: .75;
}
.filterBar-menuTrigger {
  float: right;
  white-space: nowrap;
  border-radius: 4px;
  text-decoration: none;
  padding: 1px  5px;
}
.filterBar-menuTrigger:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f0d7";
  font-weight: 900;
  margin-left: .2em;
  unicode-bidi: isolate;
}
@media (max-width: 610px) {
  .filterBar-filterToggle-label {
    display: none;
  }
}
.contentRow {
  display: flex;
}
.contentRow.contentRow--alignMiddle {
  align-items: center;
}
.contentRow.is-deleted {
  opacity: .7;
}
.contentRow.is-deleted .contentRow-header,
.contentRow.is-deleted .contentRow-title {
  text-decoration: line-through;
}
.contentRow-figure {
  vertical-align: top;
  white-space: nowrap;
  word-wrap: normal;
  text-align: center;
}
.contentRow-figure img,
.contentRow-figure i.fa,
.contentRow-figure i.fal,
.contentRow-figure i.far,
.contentRow-figure i.fas,
.contentRow-figure i.fab,
.contentRow-figure .avatar {
  vertical-align: bottom;
}
.contentRow-figure.contentRow-figure--fixedBookmarkIcon {
  width: 48px;
}
.contentRow-figure.contentRow-figure--fixedBookmarkIcon img,
.contentRow-figure.contentRow-figure--fixedBookmarkIcon i.fa,
.contentRow-figure.contentRow-figure--fixedBookmarkIcon i.fal,
.contentRow-figure.contentRow-figure--fixedBookmarkIcon i.far,
.contentRow-figure.contentRow-figure--fixedBookmarkIcon i.fas,
.contentRow-figure.contentRow-figure--fixedBookmarkIcon i.fab,
.contentRow-figure.contentRow-figure--fixedBookmarkIcon .avatar {
  max-height: 48px;
}
.contentRow-figure.contentRow-figure--fixedSmall {
  width: 60px;
}
.contentRow-figure.contentRow-figure--fixedSmall img,
.contentRow-figure.contentRow-figure--fixedSmall i.fa,
.contentRow-figure.contentRow-figure--fixedSmall i.fal,
.contentRow-figure.contentRow-figure--fixedSmall i.far,
.contentRow-figure.contentRow-figure--fixedSmall i.fas,
.contentRow-figure.contentRow-figure--fixedSmall i.fab,
.contentRow-figure.contentRow-figure--fixedSmall .avatar {
  max-height: 60px;
}
.contentRow-figure.contentRow-figure--fixedMedium {
  width: 100px;
}
.contentRow-figure.contentRow-figure--fixedMedium img,
.contentRow-figure.contentRow-figure--fixedMedium i.fa,
.contentRow-figure.contentRow-figure--fixedMedium i.fal,
.contentRow-figure.contentRow-figure--fixedMedium i.far,
.contentRow-figure.contentRow-figure--fixedMedium i.fas,
.contentRow-figure.contentRow-figure--fixedMedium i.fab,
.contentRow-figure.contentRow-figure--fixedMedium .avatar {
  max-height: 100px;
}
.contentRow-figure.contentRow-figure--fixedMedium.contentRow-figure--fixedMedium--fluidWidth {
  width: auto;
  max-width: 200px;
}
.contentRow-figure.contentRow-figure--fixedLarge {
  width: 200px;
}
.contentRow-figure.contentRow-figure--fixedLarge img,
.contentRow-figure.contentRow-figure--fixedLarge i.fa,
.contentRow-figure.contentRow-figure--fixedLarge i.fal,
.contentRow-figure.contentRow-figure--fixedLarge i.far,
.contentRow-figure.contentRow-figure--fixedLarge i.fas,
.contentRow-figure.contentRow-figure--fixedLarge i.fab,
.contentRow-figure.contentRow-figure--fixedLarge .avatar {
  max-height: 200px;
}
.contentRow-figure.contentRow-figure--text {
  font-size: 24px;
}
.contentRow-figureContainer {
  position: relative;
}
.contentRow-figureContainer .contentRow-figureSeparated {
  position: absolute;
  right: -5px;
  bottom: -5px;
  width: 26px;
  height: 26px;
  font-size: 16px;
}
.contentRow-figureIcon {
  text-align: center;
  color: #47a7eb;
}
.contentRow-figureIcon img,
.contentRow-figureIcon i.fa,
.contentRow-figureIcon i.fal,
.contentRow-figureIcon i.far,
.contentRow-figureIcon i.fas,
.contentRow-figureIcon i.fab {
  width: 64px;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  border-radius: 4px;
}
.contentRow-figure--fixedBookmarkIcon .contentRow-figureIcon img,
.contentRow-figure--fixedBookmarkIcon .contentRow-figureIcon i.fa,
.contentRow-figure--fixedBookmarkIcon .contentRow-figureIcon i.fal,
.contentRow-figure--fixedBookmarkIcon .contentRow-figureIcon i.far,
.contentRow-figure--fixedBookmarkIcon .contentRow-figureIcon i.fas,
.contentRow-figure--fixedBookmarkIcon .contentRow-figureIcon i.fab {
  width: 48px;
}
.contentRow-main {
  flex: 1;
  min-width: 0;
  vertical-align: top;
  padding-left: 10px;
}
.contentRow-main:before {
  content: '';
  display: block;
  margin-top: -.18em;
}
.contentRow-main.contentRow-main--close {
  padding-left: 6px;
}
.contentRow-main:first-child {
  padding-left: 0;
}
.contentRow-header {
  margin: 0;
  padding: 0;
  font-weight: 700;
  font-size: 17px;
}
.contentRow-title {
  margin: 0;
  padding: 0;
  font-weight: 400;
  font-size: 17px;
}
.contentRow-title a {
  font-weight: 600;
}
.contentRow-snippet {
  font-size: 13px;
  /* font-style: italic; */
  margin: .25em 0;
}
.contentRow-muted {
  color: #8c8c8c;
}
.contentRow-lesser {
  font-size: 13px;
}
.contentRow-suffix {
  padding-left: 6px;
  white-space: nowrap;
  word-wrap: normal;
}
.contentRow-faderContainer {
  position: relative;
  overflow: hidden;
}
.contentRow-faderContent {
  max-height: 150px;
  overflow: hidden;
}
.contentRow-fader {
  position: absolute;
  top: 87px;
  left: 0;
  right: 0;
  height: 75px;
  background: transparent;
  background: linear-gradient(to bottom, rgba(254, 254, 254, 0) 0%, #fefefe 80%);
}
.contentRow-minor {
  font-size: 13px;
  color: #8c8c8c;
}
.contentRow-minor.contentRow-minor--hideLinks a {
  color: inherit;
  text-decoration: none;
}
.contentRow-minor.contentRow-minor--hideLinks a:hover {
  text-decoration: underline;
}
.contentRow-minor.contentRow-minor--smaller {
  font-size: 12px;
}
.contentRow-minor.contentRow-minor--singleLine {
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
}
.contentRow-spaced {
  margin: .5em 0;
}
.contentRow-spaced:last-child {
  margin-bottom: 0;
}
.contentRow-extra {
  float: right;
  padding-left: 6px;
  font-size: 11px;
}
.contentRow-extra.contentRow-extra--small {
  font-size: 13px;
  color: #8c8c8c;
}
.contentRow-extra.contentRow-extra--normal {
  font-size: 15px;
  color: #8c8c8c;
}
.contentRow-extra.contentRow-extra--large {
  font-size: 17px;
  color: #8c8c8c;
}
.contentRow-extra.contentRow-extra--larger {
  font-size: 20px;
  color: #8c8c8c;
}
.contentRow-extra.contentRow-extra--largest {
  font-size: 24px;
  color: #8c8c8c;
}
@media (max-width: 480px) {
  .contentRow-figure.contentRow-figure--fixedBookmarkIcon {
    width: 32px;
  }
  .contentRow-figure .avatar--s {
    width: 32px;
    height: 32px;
    font-size: 19px;
  }
  .contentRow--hideFigureNarrow .contentRow-figure {
    display: none;
  }
  .contentRow--hideFigureNarrow .contentRow-main {
    padding-left: 0;
  }
}
.pageNav-jump {
  display: inline-block;
  background: linear-gradient(0deg, #fefefe, #fefefe);
  color: #141414;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  font-size: 13px;
  white-space: nowrap;
  border-radius: 2px;
  padding: 5px 8px;
}
.pageNav-jump:hover,
.pageNav-jump:active {
  background: #f6f6f6;
  text-decoration: none;
}
.pageNav-jump.pageNav-jump--prev:before,
.pageNav-jump.pageNav-jump--next:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 900;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 80%;
  unicode-bidi: isolate;
}
.pageNav-jump.pageNav-jump--prev:before {
  content: "\f0d9\00a0";
  display: inline-block;
  width: 0.61em;
}
.pageNav-jump.pageNav-jump--next:after {
  content: "\00a0\f0da";
  display: inline-block;
  width: 0.61em;
}
.pageNav-main {
  list-style: none;
  margin: 0;
  padding: 0;
  display: inline-table;
}
.pageNav-page {
  display: table-cell;
  background: linear-gradient(0deg, #fefefe, #fefefe);
  color: #141414;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  font-size: 13px;
  white-space: nowrap;
}
.pageNav-page:hover,
.pageNav-page:active {
  background: #f6f6f6;
  text-decoration: none;
}
.pageNav-page:not(:last-child) {
  border-right: none;
}
.pageNav-page:not(:first-child) {
  border-left-color: #dfdfdf;
}
.pageNav-page:first-child {
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.pageNav-page:last-child {
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.pageNav-page > a {
  display: block;
  padding: 5px 8px;
  text-decoration: none;
  color: inherit;
}
.pageNav-page.pageNav-page--current {
  background: #ececec;
  color: #505050;
  border: 1px solid #d8d8d8;
  cursor: pointer;
}
.pageNav-page.pageNav-page--current:hover,
.pageNav-page.pageNav-page--current:active {
  background: #e4e4e4;
}
.pageNav-page.pageNav-page--current + .pageNav-page {
  border-left: none;
}
@media (max-width: 480px) {
  .pageNav--skipStart .pageNav-page.pageNav-page--earlier {
    display: none;
  }
  .pageNav--skipEnd .pageNav-page.pageNav-page--later {
    display: none;
  }
  .pageNav--skipEnd .pageNav-page.pageNav-page--skipEnd {
    border-left: none;
  }
}
.pageNavSimple {
  display: inline-flex;
}
.pageNavSimple-el {
  display: inline-block;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  border-radius: 2px;
  padding: 5px 10px;
  font-size: 13px;
  text-align: center;
  white-space: nowrap;
  margin-right: 4px;
}
.pageNavSimple-el:last-child {
  margin-right: 0;
}
.pageNavSimple-el.pageNavSimple-el--current {
  color: #505050;
  background: #ececec;
}
.pageNavSimple-el.pageNavSimple-el--current:hover,
.pageNavSimple-el.pageNavSimple-el--current:active {
  background: #e4e4e4;
  text-decoration: none;
}
.pageNavSimple-el.pageNavSimple-el--prev,
.pageNavSimple-el.pageNavSimple-el--next {
  background: linear-gradient(0deg, #fefefe, #fefefe);
  color: #141414;
  min-width: 75px;
}
@media (max-width: 350px) {
  .pageNavSimple-el.pageNavSimple-el--prev,
  .pageNavSimple-el.pageNavSimple-el--next {
    min-width: 0;
  }
}
.pageNavSimple-el.pageNavSimple-el--prev:hover,
.pageNavSimple-el.pageNavSimple-el--next:hover,
.pageNavSimple-el.pageNavSimple-el--prev:active,
.pageNavSimple-el.pageNavSimple-el--next:active {
  background: #f6f6f6;
  text-decoration: none;
}
.pageNavSimple-el.pageNavSimple-el--prev i:before,
.pageNavSimple-el.pageNavSimple-el--next i:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 900;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.pageNavSimple-el.pageNavSimple-el--prev i:before {
  content: "\f0d9";
  display: inline-block;
  width: 0.44em;
}
.pageNavSimple-el.pageNavSimple-el--next i:before {
  content: "\f0da";
  display: inline-block;
  width: 0.44em;
}
.pageNavSimple-el.pageNavSimple-el--first,
.pageNavSimple-el.pageNavSimple-el--last {
  border-color: transparent;
  padding-left: 5px;
  padding-right: 5px;
  color: rgba(20, 20, 20, 0.6);
}
.pageNavSimple-el.pageNavSimple-el--first:hover,
.pageNavSimple-el.pageNavSimple-el--last:hover,
.pageNavSimple-el.pageNavSimple-el--first:active,
.pageNavSimple-el.pageNavSimple-el--last:active {
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  background: #f6f6f6;
  color: #141414;
  text-decoration: none;
}
.pageNavSimple-el.pageNavSimple-el--first i:before,
.pageNavSimple-el.pageNavSimple-el--last i:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 900;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.pageNavSimple-el.pageNavSimple-el--first i:before {
  content: "\f04a";
  display: inline-block;
  width: 1em;
}
.pageNavSimple-el.pageNavSimple-el--last i:before {
  content: "\f04e";
  display: inline-block;
  width: 1em;
}
.pageNavSimple-el.is-disabled {
  border-color: transparent;
  background: none;
  color: #8c8c8c;
  text-decoration: none;
  pointer-events: none;
}
.pageNavSimple-el.is-disabled:hover {
  background: none;
  color: #8c8c8c;
}
.pageNavWrapper--simple .pageNav {
  display: none;
}
.pageNavWrapper--full .pageNavSimple {
  display: none;
}
.pageNavWrapper--mixed .pageNavSimple {
  display: none;
}
@media (max-width: 610px) {
  .pageNavWrapper--mixed .pageNav {
    display: none;
  }
  .pageNavWrapper--mixed .pageNavSimple {
    display: inline-flex;
  }
}
@media (max-width: 480px) {
  .block-outer:not(.block-outer--after) .pageNavWrapper:not(.pageNavWrapper--forceShow) {
    display: none;
  }
  .block-container + .block-outer .pageNavWrapper {
    display: block;
  }
}
.hScroller {
  overflow-y: hidden;
  position: relative;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  -webkit-overflow-scrolling: touch;
}
.hScroller.hScroller--scrollHidden .hScroller-action {
  opacity: 0;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
html:not(.has-touchevents) .hScroller.hScroller--scrollHidden:hover .hScroller-action {
  opacity: 1;
}
.hScroller-scroll {
  display: block;
  white-space: nowrap;
  word-wrap: normal;
  overflow-x: hidden;
}
.hScroller-scroll.is-calculated {
  overflow-x: scroll;
  padding-bottom: 30px;
  margin-bottom: -30px;
}
.hScroller-action {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 40px;
  padding: 0 5px;
  display: none;
  cursor: pointer;
}
.hScroller-action.is-active {
  display: block;
  display: flex;
  align-items: center;
}
.hScroller-action:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 120%;
}
.hScroller-action.hScroller-action--start {
  left: 0;
  justify-content: flex-start;
  text-align: left;
}
.hScroller-action.hScroller-action--start:after {
  content: "\f053";
  display: inline-block;
  width: 0.63em;
}
.hScroller-action.hScroller-action--end {
  right: 0;
  justify-content: flex-end;
  text-align: right;
}
.hScroller-action.hScroller-action--end:after {
  content: "\f054";
  display: inline-block;
  width: 0.63em;
}
.scrollMeasure {
  position: absolute;
  top: -1000px;
  width: 100px;
  height: 100px;
  overflow: scroll;
  visibility: hidden;
}
.flashMessage {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 900;
  font-size: 24px;
  color: #202020;
  background: rgba(226, 226, 226, 0.9);
  padding: 15px;
  text-align: center;
  box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.25);
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
}
.flashMessage.is-active {
  display: block;
  opacity: 1;
}
.flashMessage.is-transitioning {
  display: block;
}
.flashMessage.is-active {
  height: auto;
  overflow-y: visible;
}
.flashMessage.is-transitioning {
  overflow-y: hidden;
}
.autoCompleteList {
  list-style: none;
  margin: 0;
  padding: 0;
  cursor: default;
  font-size: 13px;
  color: #141414;
  background: #fefefe;
  min-width: 180px;
  max-width: 95%;
  border: 1px solid #d8d8d8;
  box-shadow: 0 3px 5px 0 rgba(0, 0, 0, 0.3);
  margin-top: 2px;
}
.autoCompleteList li {
  padding: 6px;
  line-height: 24px;
}
.autoCompleteList li:before,
.autoCompleteList li:after {
  content: " ";
  display: table;
}
.autoCompleteList li:after {
  clear: both;
}
.autoCompleteList li.is-selected {
  background: #fefefe;
}
.autoCompleteList li .autoCompleteList-icon {
  float: left;
  margin-right: 6px;
  width: 24px;
  height: 24px;
}
.tagList,
.tagList > dt,
.tagList > dd {
  display: inline;
  padding: 0;
  margin: 0;
}
.tagItem {
  display: inline-block;
  max-width: 100%;
  padding: 0 6px 1px;
  margin: 0 0 2px;
  border-radius: 4px;
  font-size: 12px;
  color: #505050;
  background: #f5f5f5;
  border: 1px solid #d8d8d8;
}
.tagItem:hover {
  text-decoration: none;
  color: #505050;
  background: #fefefe;
}
.recaptcha.input {
  box-sizing: content-box;
  max-width: 100%;
}
.recaptcha img {
  max-width: 100%;
}
.likesBar {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
  background: #f5f5f5;
  border: 1px solid #dfdfdf;
  border-left: 2px solid #47a7eb;
  padding: 6px;
  font-size: 12px;
  margin-top: 6px;
}
.likesBar.is-active {
  display: block;
  opacity: 1;
}
.likesBar.is-transitioning {
  display: block;
}
.likesBar.is-active {
  height: auto;
  overflow-y: visible;
}
.likesBar.is-transitioning {
  overflow-y: hidden;
}
.likeIcon:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f164";
  display: inline-block;
  width: 1em;
  color: #47a7eb;
  margin-right: .2em;
}
.reactionsBar {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
  background: #f5f5f5;
  border: 1px solid #dfdfdf;
  border-left: 2px solid #47a7eb;
  padding: 6px;
  font-size: 12px;
  margin-top: 6px;
}
.reactionsBar.is-active {
  display: block;
  opacity: 1;
}
.reactionsBar.is-transitioning {
  display: block;
}
.reactionsBar.is-active {
  height: auto;
  overflow-y: visible;
}
.reactionsBar.is-transitioning {
  overflow-y: hidden;
}
.reactionSummary {
  display: inline-block;
  list-style: none;
  margin: 0;
  padding: 0;
  line-height: 16px;
  height: 16px;
  margin: 0 -2px;
  vertical-align: text-top;
}
.reactionSummary > li {
  display: inline-block;
  height: 20px;
  width: 20px;
  padding: 2px;
  margin: -2px 0;
  background: #fefefe;
  border-radius: 50%;
  position: relative;
  margin-left: -6px;
}
.reactionSummary > li:nth-child(1) {
  z-index: 3;
  margin-left: 0;
}
.reactionSummary > li:nth-child(2) {
  z-index: 2;
}
.reactionSummary > li:nth-child(3) {
  z-index: 1;
}
.reactionSummary .reaction {
  position: absolute;
  top: 0;
}
.reactionSummary .reaction.reaction {
  display: block;
}
.reactionsBar .reactionSummary > li,
.message-responseRow .reactionSummary > li {
  background: #f5f5f5;
}
.reactionsBar .reactionSummary .reaction,
.message-responseRow .reactionSummary .reaction {
  top: 2px;
}
.reactTooltip {
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  max-width: 100%;
}
.reactTooltip .reaction {
  margin: 3px;
  -webkit-transition:  transform 0.25s ease;
  transition:  transform 0.25s ease;
}
.reactTooltip .reaction:hover {
  -webkit-transform: scale(1.2);
  -ms-transform: scale(1.2);
  transform: scale(1.2);
}
.colorChip {
  display: inline-block;
  border: 1px solid #d8d8d8;
  border-radius: 4px;
  padding: 1px;
  width: 100px;
}
.colorChip-inner {
  display: block;
  background-color: transparent;
  border-radius: 2px;
  height: 1em;
}
.colorChip-value {
  display: none;
}
pre.sf-dump {
  z-index: 100 !important;
}
.grecaptcha-badge {
  z-index: 500;
}
.showMobile {
  display: none;
}
.moveRight {
  float: right;
}
.moveRight:after {
  clear: both;
}
.centeredAd {
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: auto;
  margin-right: auto;
  max-width: 768px;
  background: #e8e8e8;
}
.p-title-pageAction {
  margin-right: 35px;
}
.button-text {
  position: relative;
}
.postCritter {
  position: absolute;
  top: -14px;
  left: 105px;
}
@media screen and (max-width: 767px) {
  .showMobile {
    display: block;
  }
  .showMobileInlineBlock {
    display: inline-block;
  }
  .showMobileInline {
    display: inline;
  }
  .hideMobile {
    display: none !important;
  }
}
.actionBar:before,
.actionBar:after {
  content: " ";
  display: table;
}
.actionBar:after {
  clear: both;
}
.actionBar-set.actionBar-set--internal {
  float: left;
  margin-left: -3px;
}
.actionBar-set.actionBar-set--internal > .actionBar-action:first-child {
  margin-left: 0;
}
.actionBar-set.actionBar-set--external {
  float: right;
  margin-right: -3px;
}
.actionBar-set.actionBar-set--external > .actionBar-action:last-child {
  margin-right: 0;
}
.actionBar-action {
  display: inline-block;
  padding: 3px;
  border: 1px solid transparent;
  border-radius: 4px;
  margin-left: 5px;
}
.actionBar-action:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 90%;
}
.actionBar-action.actionBar-action--menuTrigger {
  display: none;
}
.actionBar-action.actionBar-action--menuTrigger:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f0d7";
  font-weight: 900;
  margin-left: .2em;
  unicode-bidi: isolate;
}
.actionBar-action.actionBar-action--menuTrigger.is-menuOpen {
  text-decoration: none;
}
.actionBar-action.actionBar-action--inlineMod label {
  color: #141414;
  font-size: 120%;
  vertical-align: -2px;
}
.actionBar-action.actionBar-action--inlineMod input {
  vertical-align: -2px;
}
.actionBar-action.actionBar-action--mq:before {
  content: "\f067\20";
}
.actionBar-action.actionBar-action--mq.is-selected {
  background-color: #fefefe;
  border-color: #ededed;
}
.actionBar-action.actionBar-action--mq.is-selected:before {
  content: "\f068\20";
}
.actionBar-action.actionBar-action--postLink {
  text-decoration: inherit !important;
  color: inherit !important;
}
.actionBar-action.actionBar-action--reply:before {
  content: "\f3e5\20";
}
.actionBar-action.actionBar-action--like:before {
  content: "\f164\20";
}
.actionBar-action.actionBar-action--reaction:not(.has-reaction) .reaction-text {
  color: inherit;
}
@media (max-width: 480px) {
  .actionBar-action.actionBar-action--menuItem {
    display: none !important;
  }
  .actionBar-action.actionBar-action--menuTrigger {
    display: inline;
  }
}
.label {
  display: inline-block;
  padding: 1px .35em;
  border: 1px solid transparent;
  border-radius: 4px;
  font-size: 80%;
  line-height: 1.26;
  text-decoration: none;
}
.label:hover,
a:hover .label {
  text-decoration: none;
}
.label.label--fullSize {
  font-size: 100%;
}
.label.label--small {
  font-size: 13px;
}
.label.label--smallest {
  font-size: 11px;
}
.label.label--hidden {
  padding: inherit;
  border: none;
  font-size: inherit;
  line-height: inherit;
  text-decoration: inherit;
}
.label.label--hidden:hover {
  text-decoration: underline;
}
.label.label--subtle {
  color: #8c8c8c;
  background: #f5f5f5;
  border-color: #dcdcdc;
}
a.label.label--subtle:hover,
a:hover .label.label--subtle {
  background: #ebebeb;
  border-color: #d1d1d1;
}
.label.label--primary {
  color: #141414;
  background: #fefefe;
  border-color: #e5e5e5;
  border-color: #ededed;
}
a.label.label--primary:hover,
a:hover .label.label--primary {
  background: #f4f4f4;
  border-color: #dadada;
  border-color: #e3e3e3;
}
.label.label--accent {
  color: #505050;
  background: #ececec;
  border-color: #d3d3d3;
  border-color: #d8d8d8;
}
a.label.label--accent:hover,
a:hover .label.label--accent {
  background: #e2e2e2;
  border-color: #c8c8c8;
  border-color: #cecece;
}
.label.label--red {
  color: #ffffff;
  background: #e20000;
  border-color: #af0000;
}
a.label.label--red:hover,
a:hover .label.label--red {
  background: #ce0000;
  border-color: #9b0000;
}
.label.label--green {
  color: #ffffff;
  background: #008000;
  border-color: #004d00;
}
a.label.label--green:hover,
a:hover .label.label--green {
  background: #006c00;
  border-color: #003900;
}
.label.label--olive {
  color: #ffffff;
  background: #808000;
  border-color: #4d4d00;
}
a.label.label--olive:hover,
a:hover .label.label--olive {
  background: #6c6c00;
  border-color: #393900;
}
.label.label--lightGreen {
  color: #000000;
  background: #ccf9c8;
  border-color: #a1f49a;
  border-color: #bee8ba;
}
a.label.label--lightGreen:hover,
a:hover .label.label--lightGreen {
  background: #bbf7b6;
  border-color: #90f288;
  border-color: #b0e3ab;
}
.label.label--blue {
  color: #ffffff;
  background: #0008e3;
  border-color: #0006b0;
}
a.label.label--blue:hover,
a:hover .label.label--blue {
  background: #0007cf;
  border-color: #00059c;
}
.label.label--royalBlue {
  color: #ffffff;
  background: #4169e1;
  border-color: #214cce;
}
a.label.label--royalBlue:hover,
a:hover .label.label--royalBlue {
  background: #2f5bde;
  border-color: #1e46bd;
}
.label.label--skyBlue {
  color: #ffffff;
  background: #7cc3e0;
  border-color: #53b0d6;
}
a.label.label--skyBlue:hover,
a:hover .label.label--skyBlue {
  background: #6cbbdc;
  border-color: #42a9d2;
}
.label.label--gray {
  color: #ffffff;
  background: #808080;
  border-color: #676767;
}
a.label.label--gray:hover,
a:hover .label.label--gray {
  background: #767676;
  border-color: #5c5c5c;
}
.label.label--silver {
  color: #000000;
  background: #c0c0c0;
  border-color: #a7a7a7;
}
a.label.label--silver:hover,
a:hover .label.label--silver {
  background: #b6b6b6;
  border-color: #9c9c9c;
}
.label.label--yellow {
  color: #000000;
  background: #ffff91;
  border-color: #ffff5e;
  border-color: #e6e687;
}
a.label.label--yellow:hover,
a:hover .label.label--yellow {
  background: #ffff7d;
  border-color: #ffff4a;
  border-color: #e2e276;
}
.label.label--orange {
  color: #000000;
  background: #ffcb00;
  border-color: #cca200;
}
a.label.label--orange:hover,
a:hover .label.label--orange {
  background: #ebbb00;
  border-color: #b89200;
}
.label.label--error {
  color: #c84448;
  background: #fde9e9;
  border-color: #f9baba;
  border-color: #c84448;
}
a.label.label--error:hover,
a:hover .label.label--error {
  background: #fbd6d6;
  border-color: #f7a8a8;
  border-color: #bf383c;
}
.label-append {
  display: inline-block;
}
.labelLink,
.labelLink:hover {
  text-decoration: none;
}
.pika-single {
  z-index: 9999;
  display: block;
  position: relative;
  color: #141414;
  background: #fefefe;
  border: 1px solid;
  border-color: #cbcbcb;
  border-radius: 4px;
}
.pika-single.is-hidden {
  display: none;
}
.pika-single.is-bound {
  position: absolute;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.25);
}
.pika-single {
  *zoom: 1;
}
.pika-single:before,
.pika-single:after {
  content: " ";
  display: table;
}
.pika-single:after {
  clear: both;
}
.pika-lendar {
  float: left;
  width: 240px;
  margin: 8px;
}
.pika-title {
  position: relative;
  text-align: center;
}
.pika-title select {
  cursor: pointer;
  position: absolute;
  z-index: 9998;
  margin: 0;
  left: 0;
  top: 5px;
  filter: alpha(opacity=0);
  opacity: 0;
}
.pika-label {
  display: inline-block;
  *display: inline;
  position: relative;
  z-index: 9999;
  overflow: hidden;
  margin: 0;
  padding: 5px 3px;
  font-size: 14px;
  line-height: 20px;
  font-weight: bold;
  color: #2577b1;
  background-color: transparent;
}
.pika-prev,
.pika-next {
  display: block;
  cursor: pointer;
  position: relative;
  outline: none;
  background: none;
  border: 0;
  padding: 0;
  width: 20px;
  height: 30px;
  white-space: nowrap;
  overflow: hidden;
  opacity: .5;
  font-size: 0;
  color: #2577b1;
  background-color: transparent;
}
.pika-prev::before,
.pika-next::before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 17px;
  vertical-align: middle;
  display: inline-block;
  margin: -4px 6px -4px 0;
}
.pika-prev:hover,
.pika-next:hover {
  opacity: 1;
}
.pika-prev.is-disabled,
.pika-next.is-disabled {
  cursor: default;
  opacity: .2;
}
.pika-prev::before {
  content: "\f0d9";
}
.pika-next::before {
  content: "\f0da";
}
.pika-prev,
.is-rtl .pika-next {
  float: left;
  *left: 0;
}
.pika-next,
.is-rtl .pika-prev {
  float: right;
  *right: 0;
}
.pika-select {
  display: inline-block;
  *display: inline;
}
.pika-table {
  width: 100%;
  border-collapse: collapse;
  border-spacing: 0;
  border: 0;
}
.pika-table th,
.pika-table td {
  width: 14.285714285714286%;
  padding: 0;
}
.pika-table th {
  color: #2577b1;
  font-size: 12px;
  line-height: 25px;
  font-weight: bold;
  text-align: center;
}
.pika-table abbr {
  border-bottom: none;
}
.pika-button {
  cursor: pointer;
  display: block;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  outline: none;
  border: 0;
  margin: 0;
  width: 100%;
  padding: 5px;
  color: #141414;
  font-size: 12px;
  line-height: 15px;
  text-align: right;
  background: #fefefe;
}
.is-today .pika-button {
  color: #47a7eb;
  font-weight: bold;
}
.is-inrange .pika-button,
.is-startrange .pika-button,
.is-endrange .pika-button {
  color: #505050;
  background: #ececec;
}
.is-startrange .pika-button {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  border-left: 2px solid #d8d8d8;
}
.is-endrange .pika-button {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-right: 2px solid #d8d8d8;
}
.is-selected .pika-button {
  color: #ffffff;
  font-weight: bold;
  background: #47a7eb;
  box-shadow: inset 0 1px 3px transparent;
  border-radius: 3px;
}
.is-disabled .pika-button,
.is-outside-current-month .pika-button {
  pointer-events: none;
  cursor: default;
  color: #141414;
  opacity: .3;
}
.pika-button:hover {
  color: #141414;
  background: #f1f1f1;
  box-shadow: none;
  border-radius: 3px;
}
.pika-week {
  font-size: 11px;
  color: #2577b1;
}
.pika-time-container {
  clear: both;
}
.pika-time {
  margin: 7px auto 7px;
}
.reaction {
  display: flex;
  -webkit-touch-callout: none;
}
.reaction.reaction--imageHidden img {
  display: none;
}
.reaction.reaction--imageHidden.reaction--1 i {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.reaction.reaction--imageHidden.reaction--1 i:before {
  content: "\f164";
}
.reaction.reaction--small,
.reaction.reaction--medium {
  display: inline-block;
}
.reaction.reaction--small .reaction-text,
.reaction.reaction--medium .reaction-text {
  margin-left: 0;
}
.reaction.reaction--right {
  justify-content: flex-end;
}
.reaction.reaction--inline {
  display: inline-flex;
}
a.reaction:hover,
a.reaction:focus {
  text-decoration: none;
}
a.reaction:hover .reaction-text,
a.reaction:focus .reaction-text {
  text-decoration: underline;
}
.reactionScore {
  display: inline-block;
  padding: 2px 3px;
  min-width: 16px;
  text-align: center;
  vertical-align: text-bottom;
  border-radius: 4px;
  font-size: 11px;
  color: #505050;
  background: #f5f5f5;
  border: 1px solid #d8d8d8;
}
.reactionScore:hover {
  background: #fefefe;
}
.reaction-image {
  vertical-align: text-bottom;
}
.reaction--small .reaction-image {
  max-width: 16px;
  max-height: 16px;
}
.reaction--medium .reaction-image {
  max-width: 21px;
  max-height: 21px;
}
.reaction-sprite {
  vertical-align: text-bottom;
}
.reaction--1 .reaction-sprite {
  width: 32px;
  height: 32px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px 0px;
  background-size: 100%;
}
.reaction--small.reaction--1 .reaction-sprite {
  width: 16px;
  height: 16px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px 0px;
  background-size: 100%;
}
.reaction--medium.reaction--1 .reaction-sprite {
  width: 21px;
  height: 21px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px 0px;
  background-size: 100%;
}
.reaction--2 .reaction-sprite {
  width: 32px;
  height: 32px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -32px;
  background-size: 100%;
}
.reaction--small.reaction--2 .reaction-sprite {
  width: 16px;
  height: 16px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -16px;
  background-size: 100%;
}
.reaction--medium.reaction--2 .reaction-sprite {
  width: 21px;
  height: 21px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -21px;
  background-size: 100%;
}
.reaction--3 .reaction-sprite {
  width: 32px;
  height: 32px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -64px;
  background-size: 100%;
}
.reaction--small.reaction--3 .reaction-sprite {
  width: 16px;
  height: 16px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -32px;
  background-size: 100%;
}
.reaction--medium.reaction--3 .reaction-sprite {
  width: 21px;
  height: 21px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -42px;
  background-size: 100%;
}
.reaction--4 .reaction-sprite {
  width: 32px;
  height: 32px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -96px;
  background-size: 100%;
}
.reaction--small.reaction--4 .reaction-sprite {
  width: 16px;
  height: 16px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -48px;
  background-size: 100%;
}
.reaction--medium.reaction--4 .reaction-sprite {
  width: 21px;
  height: 21px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -63px;
  background-size: 100%;
}
.reaction--5 .reaction-sprite {
  width: 32px;
  height: 32px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -128px;
  background-size: 100%;
}
.reaction--small.reaction--5 .reaction-sprite {
  width: 16px;
  height: 16px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -64px;
  background-size: 100%;
}
.reaction--medium.reaction--5 .reaction-sprite {
  width: 21px;
  height: 21px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -84px;
  background-size: 100%;
}
.reaction--6 .reaction-sprite {
  width: 32px;
  height: 32px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -160px;
  background-size: 100%;
}
.reaction--small.reaction--6 .reaction-sprite {
  width: 16px;
  height: 16px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -80px;
  background-size: 100%;
}
.reaction--medium.reaction--6 .reaction-sprite {
  width: 21px;
  height: 21px;
  background: url('styles/default/xenforo/reactions/emojione/sprite_sheet_emojione.png') no-repeat 0px -105px;
  background-size: 100%;
}
.reaction-text {
  margin-left: 10px;
  align-self: center;
}
.reaction-text::after {
  content: " ";
  font-weight: 700;
  height: 1px;
  color: transparent;
  overflow: hidden;
  visibility: hidden;
}
.has-reaction .reaction-text {
  font-weight: 700;
}
.reaction--small .reaction-text {
  margin-left: 0;
}
.reaction--1 .reaction-text {
  color: #141414;
}
.reaction--2 .reaction-text {
  color: #E81C27;
}
.reaction--3 .reaction-text {
  color: #FDCA47;
}
.reaction--4 .reaction-text {
  color: #FDCA47;
}
.reaction--5 .reaction-text {
  color: #FDCA47;
}
.reaction--6 .reaction-text {
  color: #FF4D4D;
}
.is-active.tabs-tab--reaction1 {
  border-color: #141414 !important;
}
.is-active.tabs-tab--reaction2 {
  border-color: #E81C27 !important;
}
.is-active.tabs-tab--reaction3 {
  border-color: #FDCA47 !important;
}
.is-active.tabs-tab--reaction4 {
  border-color: #FDCA47 !important;
}
.is-active.tabs-tab--reaction5 {
  border-color: #FDCA47 !important;
}
.is-active.tabs-tab--reaction6 {
  border-color: #FF4D4D !important;
}
.smilie {
  vertical-align: text-bottom;
  max-width: none;
}
.smilie.smilie--emoji {
  width: 1.467em;
}
.smilie.is-clicked {
  transform: rotate(45deg);
  transition: all 0.25s;
}
.contentRow-figure--emoji .smilie.smilie--emoji {
  width: 22px;
}
.contentRow-figure--emoji img {
  max-width: 24px;
  max-height: 24px;
  vertical-align: top;
}
.smilie--sprite.smilie--sprite16 {
  width: 18px;
  height: 18px;
  background: url('images/smilies/smile_osx.png') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite17 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_e_wink.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite18 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_e_sad.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite21 {
  width: 22px;
  height: 22px;
  background: url('styles/default/xenforo/smilies/emojione/sprite_sheet_emojione.png') no-repeat 0px -66px;
  background-size: 100%;
}
.smilie--sprite.smilie--sprite25 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_eh.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite50 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_cool.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite52 {
  width: 20px;
  height: 20px;
  background: url('images/smilies/icon_razz.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite53 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_e_biggrin.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite54 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_eek.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite55 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_redface.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite56 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_rolleyes.gif') no-repeat 0px 0px;
}
.smilie--sprite.smilie--sprite57 {
  width: 15px;
  height: 17px;
  background: url('images/smilies/icon_wtf.gif') no-repeat 0px 0px;
}
.bbWrapper ol:not(.is-structureList),
.bbWrapper ul:not(.is-structureList) {
  margin-top: 1em;
  margin-bottom: 1em;
  overflow: hidden;
}
.bbWrapper ol:not(.is-structureList) ol:not(.is-structureList),
.bbWrapper ol:not(.is-structureList) ul:not(.is-structureList),
.bbWrapper ul:not(.is-structureList) ol:not(.is-structureList),
.bbWrapper ul:not(.is-structureList) ul:not(.is-structureList) {
  margin-top: 0;
  margin-bottom: 0;
}
.bbImage {
  max-width: 100%;
}
.bbImage.bbImageAligned--left,
.lbContainer--inline.bbImageAligned--left {
  float: left;
  margin: 5px 5px 5px 0;
}
.bbImage.bbImageAligned--right,
.lbContainer--inline.bbImageAligned--right {
  float: right;
  margin: 5px 0 5px 5px;
}
.bbMediaWrapper,
.bbMediaJustifier {
  width: 560px;
  max-width: 100%;
  margin: 0;
}
.bbMediaWrapper.fb_iframe_widget,
.bbMediaJustifier.fb_iframe_widget {
  display: block;
}
[style="text-align: center"] .bbMediaWrapper,
[style="text-align: center"] .bbMediaJustifier {
  margin-left: auto;
  margin-right: auto;
}
[style="text-align: left"] .bbMediaWrapper,
[style="text-align: left"] .bbMediaJustifier {
  margin-left: 0;
  margin-right: auto;
}
[style="text-align: right"] .bbMediaWrapper,
[style="text-align: right"] .bbMediaJustifier {
  margin-left: auto;
  margin-right: 0;
}
.bbMediaWrapper.bbImageAligned--left,
.bbMediaJustifier.bbImageAligned--left {
  float: left;
  margin: 5px 5px 5px 0;
}
.bbMediaWrapper.bbImageAligned--right,
.bbMediaJustifier.bbImageAligned--right {
  float: right;
  margin: 5px 0 5px 5px;
}
.bbMediaWrapper-inner {
  position: relative;
  padding-bottom: 56.25%;
  /* 16:9 ratio */
  height: 0;
}
.bbMediaWrapper-inner.bbMediaWrapper-inner--4to3 {
  padding-bottom: 75%;
  /* 4:3 ratio */
}
.bbMediaWrapper-inner.bbMediaWrapper-inner--104px {
  padding-bottom: 104px;
}
.bbMediaWrapper-inner.bbMediaWrapper-inner--110px {
  padding-bottom: 110px;
}
.bbMediaWrapper-inner.bbMediaWrapper-inner--500px {
  padding-bottom: 500px;
}
.bbMediaWrapper-inner iframe,
.bbMediaWrapper-inner object,
.bbMediaWrapper-inner embed,
.bbMediaWrapper-inner video,
.bbMediaWrapper-inner audio,
.bbMediaWrapper-inner .bbMediaWrapper-fallback {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.bbMediaWrapper-fallback {
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 100%;
  background: #f5f5f5;
  border: 1px solid #dfdfdf;
}
.bbOembed {
  margin: auto;
  width: 500px;
  max-width: 100%;
}
.bbOembed.bbOembed--loaded {
  display: block;
}
.bbOembed .reddit-card {
  margin: 0;
}
.bbTable {
  max-width: 100%;
  overflow: auto;
}
.bbTable > table {
  border: none;
  border-collapse: collapse;
  empty-cells: show;
  max-width: 100%;
}
.bbTable > table > thead > tr > th,
.bbTable > table > tbody > tr > th {
  background: #fefefe;
  border: 1px solid #d8d8d8;
  border-bottom-color: #47a7eb;
  border-bottom-width: 2px;
  padding: 3px;
}
.bbTable > table > thead > tr > td,
.bbTable > table > tbody > tr > td {
  background: #fefefe;
  border: 1px solid #d8d8d8;
  padding: 3px;
}
.bbCodePlainUnfurl.link {
  display: block;
}
/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: 'Font Awesome 5 Pro';
  font-style: normal;
  font-weight: 300;
  src: url('styles/fonts/fa/fa-light-300.woff2') format('woff2'), url('styles/fonts/fa/fa-light-300.woff') format('woff');
}
.fal {
  font-family: 'Font Awesome 5 Pro';
  font-weight: 300;
}
/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: 'Font Awesome 5 Pro';
  font-style: normal;
  font-weight: 400;
  src: url('styles/fonts/fa/fa-regular-400.woff2') format('woff2'), url('styles/fonts/fa/fa-regular-400.woff') format('woff');
}
.far {
  font-family: 'Font Awesome 5 Pro';
  font-weight: 400;
}
/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: 'Font Awesome 5 Pro';
  font-style: normal;
  font-weight: 900;
  src: url('styles/fonts/fa/fa-solid-900.woff2') format('woff2'), url('styles/fonts/fa/fa-solid-900.woff') format('woff');
}
.fa,
.fas {
  font-family: 'Font Awesome 5 Pro';
  font-weight: 900;
}
/*!
 * Font Awesome Pro by @fontawesome - https://fontawesome.com
 * License - https://fontawesome.com/license (Commercial License)
 */
@font-face {
  font-family: 'Font Awesome 5 Brands';
  font-style: normal;
  font-weight: 400;
  src: url('styles/fonts/fa/fa-brands-400.woff2') format('woff2'), url('styles/fonts/fa/fa-brands-400.woff') format('woff');
}
.fab {
  font-family: 'Font Awesome 5 Brands';
  font-weight: 400;
}
.fa,
.fas,
.far,
.fal,
.fab {
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  display: inline-block;
  font-style: normal;
  font-variant: normal;
  text-rendering: auto;
  line-height: 1;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -.0667em;
}
.fa-xs {
  font-size: .75em;
}
.fa-sm {
  font-size: .875em;
}
.fa-1x {
  font-size: 1em;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-6x {
  font-size: 6em;
}
.fa-7x {
  font-size: 7em;
}
.fa-8x {
  font-size: 8em;
}
.fa-9x {
  font-size: 9em;
}
.fa-10x {
  font-size: 10em;
}
.fa-fw {
  text-align: center;
  width: 1.25em;
}
.fa-ul {
  list-style-type: none;
  margin-left: 2.5em;
  padding-left: 0;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  left: -2em;
  position: absolute;
  text-align: center;
  width: 2em;
  line-height: inherit;
}
.fa-border {
  border-radius: .1em;
  border: solid 0.08em #eeeeee;
  padding: .2em .25em .15em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left,
.fas.fa-pull-left,
.far.fa-pull-left,
.fal.fa-pull-left,
.fab.fa-pull-left {
  margin-right: .3em;
}
.fa.fa-pull-right,
.fas.fa-pull-right,
.far.fa-pull-right,
.fal.fa-pull-right,
.fab.fa-pull-right {
  margin-left: .3em;
}
.fa-spin {
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  animation: fa-spin 1s infinite steps(8);
}
@keyframes fa-spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
.fa-rotate-90 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=1)";
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2)";
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=3)";
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)";
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  transform: scale(1, -1);
}
.fa-flip-both,
.fa-flip-horizontal.fa-flip-vertical {
  -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)";
  transform: scale(-1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical,
:root .fa-flip-both {
  filter: none;
}
.fa-stack {
  display: inline-block;
  height: 2em;
  line-height: 2em;
  position: relative;
  vertical-align: middle;
  width: 2em;
}
.fa-stack-1x,
.fa-stack-2x {
  left: 0;
  position: absolute;
  text-align: center;
  width: 100%;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #ffffff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-500px:before {
  content: "\f26e";
}
.fa-abacus:before {
  content: "\f640";
}
.fa-accessible-icon:before {
  content: "\f368";
}
.fa-accusoft:before {
  content: "\f369";
}
.fa-acorn:before {
  content: "\f6ae";
}
.fa-acquisitions-incorporated:before {
  content: "\f6af";
}
.fa-ad:before {
  content: "\f641";
}
.fa-address-book:before {
  content: "\f2b9";
}
.fa-address-card:before {
  content: "\f2bb";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-adn:before {
  content: "\f170";
}
.fa-adobe:before {
  content: "\f778";
}
.fa-adversal:before {
  content: "\f36a";
}
.fa-affiliatetheme:before {
  content: "\f36b";
}
.fa-air-freshener:before {
  content: "\f5d0";
}
.fa-alarm-clock:before {
  content: "\f34e";
}
.fa-algolia:before {
  content: "\f36c";
}
.fa-alicorn:before {
  content: "\f6b0";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-alipay:before {
  content: "\f642";
}
.fa-allergies:before {
  content: "\f461";
}
.fa-amazon:before {
  content: "\f270";
}
.fa-amazon-pay:before {
  content: "\f42c";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-american-sign-language-interpreting:before {
  content: "\f2a3";
}
.fa-amilia:before {
  content: "\f36d";
}
.fa-analytics:before {
  content: "\f643";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-android:before {
  content: "\f17b";
}
.fa-angel:before {
  content: "\f779";
}
.fa-angellist:before {
  content: "\f209";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angry:before {
  content: "\f556";
}
.fa-angrycreative:before {
  content: "\f36e";
}
.fa-angular:before {
  content: "\f420";
}
.fa-ankh:before {
  content: "\f644";
}
.fa-app-store:before {
  content: "\f36f";
}
.fa-app-store-ios:before {
  content: "\f370";
}
.fa-apper:before {
  content: "\f371";
}
.fa-apple:before {
  content: "\f179";
}
.fa-apple-alt:before {
  content: "\f5d1";
}
.fa-apple-crate:before {
  content: "\f6b1";
}
.fa-apple-pay:before {
  content: "\f415";
}
.fa-archive:before {
  content: "\f187";
}
.fa-archway:before {
  content: "\f557";
}
.fa-arrow-alt-circle-down:before {
  content: "\f358";
}
.fa-arrow-alt-circle-left:before {
  content: "\f359";
}
.fa-arrow-alt-circle-right:before {
  content: "\f35a";
}
.fa-arrow-alt-circle-up:before {
  content: "\f35b";
}
.fa-arrow-alt-down:before {
  content: "\f354";
}
.fa-arrow-alt-from-bottom:before {
  content: "\f346";
}
.fa-arrow-alt-from-left:before {
  content: "\f347";
}
.fa-arrow-alt-from-right:before {
  content: "\f348";
}
.fa-arrow-alt-from-top:before {
  content: "\f349";
}
.fa-arrow-alt-left:before {
  content: "\f355";
}
.fa-arrow-alt-right:before {
  content: "\f356";
}
.fa-arrow-alt-square-down:before {
  content: "\f350";
}
.fa-arrow-alt-square-left:before {
  content: "\f351";
}
.fa-arrow-alt-square-right:before {
  content: "\f352";
}
.fa-arrow-alt-square-up:before {
  content: "\f353";
}
.fa-arrow-alt-to-bottom:before {
  content: "\f34a";
}
.fa-arrow-alt-to-left:before {
  content: "\f34b";
}
.fa-arrow-alt-to-right:before {
  content: "\f34c";
}
.fa-arrow-alt-to-top:before {
  content: "\f34d";
}
.fa-arrow-alt-up:before {
  content: "\f357";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-arrow-from-bottom:before {
  content: "\f342";
}
.fa-arrow-from-left:before {
  content: "\f343";
}
.fa-arrow-from-right:before {
  content: "\f344";
}
.fa-arrow-from-top:before {
  content: "\f345";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-square-down:before {
  content: "\f339";
}
.fa-arrow-square-left:before {
  content: "\f33a";
}
.fa-arrow-square-right:before {
  content: "\f33b";
}
.fa-arrow-square-up:before {
  content: "\f33c";
}
.fa-arrow-to-bottom:before {
  content: "\f33d";
}
.fa-arrow-to-left:before {
  content: "\f33e";
}
.fa-arrow-to-right:before {
  content: "\f340";
}
.fa-arrow-to-top:before {
  content: "\f341";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-arrows-alt-h:before {
  content: "\f337";
}
.fa-arrows-alt-v:before {
  content: "\f338";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-artstation:before {
  content: "\f77a";
}
.fa-assistive-listening-systems:before {
  content: "\f2a2";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-asymmetrik:before {
  content: "\f372";
}
.fa-at:before {
  content: "\f1fa";
}
.fa-atlas:before {
  content: "\f558";
}
.fa-atlassian:before {
  content: "\f77b";
}
.fa-atom:before {
  content: "\f5d2";
}
.fa-atom-alt:before {
  content: "\f5d3";
}
.fa-audible:before {
  content: "\f373";
}
.fa-audio-description:before {
  content: "\f29e";
}
.fa-autoprefixer:before {
  content: "\f41c";
}
.fa-avianex:before {
  content: "\f374";
}
.fa-aviato:before {
  content: "\f421";
}
.fa-award:before {
  content: "\f559";
}
.fa-aws:before {
  content: "\f375";
}
.fa-axe:before {
  content: "\f6b2";
}
.fa-axe-battle:before {
  content: "\f6b3";
}
.fa-baby:before {
  content: "\f77c";
}
.fa-baby-carriage:before {
  content: "\f77d";
}
.fa-backpack:before {
  content: "\f5d4";
}
.fa-backspace:before {
  content: "\f55a";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-bacon:before {
  content: "\f7e5";
}
.fa-badge:before {
  content: "\f335";
}
.fa-badge-check:before {
  content: "\f336";
}
.fa-badge-dollar:before {
  content: "\f645";
}
.fa-badge-percent:before {
  content: "\f646";
}
.fa-badger-honey:before {
  content: "\f6b4";
}
.fa-balance-scale:before {
  content: "\f24e";
}
.fa-balance-scale-left:before {
  content: "\f515";
}
.fa-balance-scale-right:before {
  content: "\f516";
}
.fa-ball-pile:before {
  content: "\f77e";
}
.fa-ballot:before {
  content: "\f732";
}
.fa-ballot-check:before {
  content: "\f733";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-band-aid:before {
  content: "\f462";
}
.fa-bandcamp:before {
  content: "\f2d5";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-barcode-alt:before {
  content: "\f463";
}
.fa-barcode-read:before {
  content: "\f464";
}
.fa-barcode-scan:before {
  content: "\f465";
}
.fa-bars:before {
  content: "\f0c9";
}
.fa-baseball:before {
  content: "\f432";
}
.fa-baseball-ball:before {
  content: "\f433";
}
.fa-basketball-ball:before {
  content: "\f434";
}
.fa-basketball-hoop:before {
  content: "\f435";
}
.fa-bat:before {
  content: "\f6b5";
}
.fa-bath:before {
  content: "\f2cd";
}
.fa-battery-bolt:before {
  content: "\f376";
}
.fa-battery-empty:before {
  content: "\f244";
}
.fa-battery-full:before {
  content: "\f240";
}
.fa-battery-half:before {
  content: "\f242";
}
.fa-battery-quarter:before {
  content: "\f243";
}
.fa-battery-slash:before {
  content: "\f377";
}
.fa-battery-three-quarters:before {
  content: "\f241";
}
.fa-bed:before {
  content: "\f236";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-behance:before {
  content: "\f1b4";
}
.fa-behance-square:before {
  content: "\f1b5";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-bell-school:before {
  content: "\f5d5";
}
.fa-bell-school-slash:before {
  content: "\f5d6";
}
.fa-bell-slash:before {
  content: "\f1f6";
}
.fa-bells:before {
  content: "\f77f";
}
.fa-bezier-curve:before {
  content: "\f55b";
}
.fa-bible:before {
  content: "\f647";
}
.fa-bicycle:before {
  content: "\f206";
}
.fa-bimobject:before {
  content: "\f378";
}
.fa-binoculars:before {
  content: "\f1e5";
}
.fa-biohazard:before {
  content: "\f780";
}
.fa-birthday-cake:before {
  content: "\f1fd";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitcoin:before {
  content: "\f379";
}
.fa-bity:before {
  content: "\f37a";
}
.fa-black-tie:before {
  content: "\f27e";
}
.fa-blackberry:before {
  content: "\f37b";
}
.fa-blanket:before {
  content: "\f498";
}
.fa-blender:before {
  content: "\f517";
}
.fa-blender-phone:before {
  content: "\f6b6";
}
.fa-blind:before {
  content: "\f29d";
}
.fa-blog:before {
  content: "\f781";
}
.fa-blogger:before {
  content: "\f37c";
}
.fa-blogger-b:before {
  content: "\f37d";
}
.fa-bluetooth:before {
  content: "\f293";
}
.fa-bluetooth-b:before {
  content: "\f294";
}
.fa-bold:before {
  content: "\f032";
}
.fa-bolt:before {
  content: "\f0e7";
}
.fa-bomb:before {
  content: "\f1e2";
}
.fa-bone:before {
  content: "\f5d7";
}
.fa-bone-break:before {
  content: "\f5d8";
}
.fa-bong:before {
  content: "\f55c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-book-alt:before {
  content: "\f5d9";
}
.fa-book-dead:before {
  content: "\f6b7";
}
.fa-book-heart:before {
  content: "\f499";
}
.fa-book-medical:before {
  content: "\f7e6";
}
.fa-book-open:before {
  content: "\f518";
}
.fa-book-reader:before {
  content: "\f5da";
}
.fa-book-spells:before {
  content: "\f6b8";
}
.fa-book-user:before {
  content: "\f7e7";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-books:before {
  content: "\f5db";
}
.fa-books-medical:before {
  content: "\f7e8";
}
.fa-boot:before {
  content: "\f782";
}
.fa-booth-curtain:before {
  content: "\f734";
}
.fa-bow-arrow:before {
  content: "\f6b9";
}
.fa-bowling-ball:before {
  content: "\f436";
}
.fa-bowling-pins:before {
  content: "\f437";
}
.fa-box:before {
  content: "\f466";
}
.fa-box-alt:before {
  content: "\f49a";
}
.fa-box-ballot:before {
  content: "\f735";
}
.fa-box-check:before {
  content: "\f467";
}
.fa-box-fragile:before {
  content: "\f49b";
}
.fa-box-full:before {
  content: "\f49c";
}
.fa-box-heart:before {
  content: "\f49d";
}
.fa-box-open:before {
  content: "\f49e";
}
.fa-box-up:before {
  content: "\f49f";
}
.fa-box-usd:before {
  content: "\f4a0";
}
.fa-boxes:before {
  content: "\f468";
}
.fa-boxes-alt:before {
  content: "\f4a1";
}
.fa-boxing-glove:before {
  content: "\f438";
}
.fa-brackets:before {
  content: "\f7e9";
}
.fa-brackets-curly:before {
  content: "\f7ea";
}
.fa-braille:before {
  content: "\f2a1";
}
.fa-brain:before {
  content: "\f5dc";
}
.fa-bread-loaf:before {
  content: "\f7eb";
}
.fa-bread-slice:before {
  content: "\f7ec";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-briefcase-medical:before {
  content: "\f469";
}
.fa-broadcast-tower:before {
  content: "\f519";
}
.fa-broom:before {
  content: "\f51a";
}
.fa-browser:before {
  content: "\f37e";
}
.fa-brush:before {
  content: "\f55d";
}
.fa-btc:before {
  content: "\f15a";
}
.fa-bug:before {
  content: "\f188";
}
.fa-building:before {
  content: "\f1ad";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-bullseye-arrow:before {
  content: "\f648";
}
.fa-bullseye-pointer:before {
  content: "\f649";
}
.fa-burn:before {
  content: "\f46a";
}
.fa-buromobelexperte:before {
  content: "\f37f";
}
.fa-burrito:before {
  content: "\f7ed";
}
.fa-bus:before {
  content: "\f207";
}
.fa-bus-alt:before {
  content: "\f55e";
}
.fa-bus-school:before {
  content: "\f5dd";
}
.fa-business-time:before {
  content: "\f64a";
}
.fa-buysellads:before {
  content: "\f20d";
}
.fa-cabinet-filing:before {
  content: "\f64b";
}
.fa-calculator:before {
  content: "\f1ec";
}
.fa-calculator-alt:before {
  content: "\f64c";
}
.fa-calendar:before {
  content: "\f133";
}
.fa-calendar-alt:before {
  content: "\f073";
}
.fa-calendar-check:before {
  content: "\f274";
}
.fa-calendar-day:before {
  content: "\f783";
}
.fa-calendar-edit:before {
  content: "\f333";
}
.fa-calendar-exclamation:before {
  content: "\f334";
}
.fa-calendar-minus:before {
  content: "\f272";
}
.fa-calendar-plus:before {
  content: "\f271";
}
.fa-calendar-star:before {
  content: "\f736";
}
.fa-calendar-times:before {
  content: "\f273";
}
.fa-calendar-week:before {
  content: "\f784";
}
.fa-camera:before {
  content: "\f030";
}
.fa-camera-alt:before {
  content: "\f332";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-campfire:before {
  content: "\f6ba";
}
.fa-campground:before {
  content: "\f6bb";
}
.fa-canadian-maple-leaf:before {
  content: "\f785";
}
.fa-candle-holder:before {
  content: "\f6bc";
}
.fa-candy-cane:before {
  content: "\f786";
}
.fa-candy-corn:before {
  content: "\f6bd";
}
.fa-cannabis:before {
  content: "\f55f";
}
.fa-capsules:before {
  content: "\f46b";
}
.fa-car:before {
  content: "\f1b9";
}
.fa-car-alt:before {
  content: "\f5de";
}
.fa-car-battery:before {
  content: "\f5df";
}
.fa-car-bump:before {
  content: "\f5e0";
}
.fa-car-crash:before {
  content: "\f5e1";
}
.fa-car-garage:before {
  content: "\f5e2";
}
.fa-car-mechanic:before {
  content: "\f5e3";
}
.fa-car-side:before {
  content: "\f5e4";
}
.fa-car-tilt:before {
  content: "\f5e5";
}
.fa-car-wash:before {
  content: "\f5e6";
}
.fa-caret-circle-down:before {
  content: "\f32d";
}
.fa-caret-circle-left:before {
  content: "\f32e";
}
.fa-caret-circle-right:before {
  content: "\f330";
}
.fa-caret-circle-up:before {
  content: "\f331";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-caret-square-down:before {
  content: "\f150";
}
.fa-caret-square-left:before {
  content: "\f191";
}
.fa-caret-square-right:before {
  content: "\f152";
}
.fa-caret-square-up:before {
  content: "\f151";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-carrot:before {
  content: "\f787";
}
.fa-cart-arrow-down:before {
  content: "\f218";
}
.fa-cart-plus:before {
  content: "\f217";
}
.fa-cash-register:before {
  content: "\f788";
}
.fa-cat:before {
  content: "\f6be";
}
.fa-cauldron:before {
  content: "\f6bf";
}
.fa-cc-amazon-pay:before {
  content: "\f42d";
}
.fa-cc-amex:before {
  content: "\f1f3";
}
.fa-cc-apple-pay:before {
  content: "\f416";
}
.fa-cc-diners-club:before {
  content: "\f24c";
}
.fa-cc-discover:before {
  content: "\f1f2";
}
.fa-cc-jcb:before {
  content: "\f24b";
}
.fa-cc-mastercard:before {
  content: "\f1f1";
}
.fa-cc-paypal:before {
  content: "\f1f4";
}
.fa-cc-stripe:before {
  content: "\f1f5";
}
.fa-cc-visa:before {
  content: "\f1f0";
}
.fa-centercode:before {
  content: "\f380";
}
.fa-centos:before {
  content: "\f789";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-chair:before {
  content: "\f6c0";
}
.fa-chair-office:before {
  content: "\f6c1";
}
.fa-chalkboard:before {
  content: "\f51b";
}
.fa-chalkboard-teacher:before {
  content: "\f51c";
}
.fa-charging-station:before {
  content: "\f5e7";
}
.fa-chart-area:before {
  content: "\f1fe";
}
.fa-chart-bar:before {
  content: "\f080";
}
.fa-chart-line:before {
  content: "\f201";
}
.fa-chart-line-down:before {
  content: "\f64d";
}
.fa-chart-network:before {
  content: "\f78a";
}
.fa-chart-pie:before {
  content: "\f200";
}
.fa-chart-pie-alt:before {
  content: "\f64e";
}
.fa-chart-scatter:before {
  content: "\f7ee";
}
.fa-check:before {
  content: "\f00c";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-check-double:before {
  content: "\f560";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-cheese:before {
  content: "\f7ef";
}
.fa-cheese-swiss:before {
  content: "\f7f0";
}
.fa-cheeseburger:before {
  content: "\f7f1";
}
.fa-chess:before {
  content: "\f439";
}
.fa-chess-bishop:before {
  content: "\f43a";
}
.fa-chess-bishop-alt:before {
  content: "\f43b";
}
.fa-chess-board:before {
  content: "\f43c";
}
.fa-chess-clock:before {
  content: "\f43d";
}
.fa-chess-clock-alt:before {
  content: "\f43e";
}
.fa-chess-king:before {
  content: "\f43f";
}
.fa-chess-king-alt:before {
  content: "\f440";
}
.fa-chess-knight:before {
  content: "\f441";
}
.fa-chess-knight-alt:before {
  content: "\f442";
}
.fa-chess-pawn:before {
  content: "\f443";
}
.fa-chess-pawn-alt:before {
  content: "\f444";
}
.fa-chess-queen:before {
  content: "\f445";
}
.fa-chess-queen-alt:before {
  content: "\f446";
}
.fa-chess-rook:before {
  content: "\f447";
}
.fa-chess-rook-alt:before {
  content: "\f448";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-double-down:before {
  content: "\f322";
}
.fa-chevron-double-left:before {
  content: "\f323";
}
.fa-chevron-double-right:before {
  content: "\f324";
}
.fa-chevron-double-up:before {
  content: "\f325";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-chevron-square-down:before {
  content: "\f329";
}
.fa-chevron-square-left:before {
  content: "\f32a";
}
.fa-chevron-square-right:before {
  content: "\f32b";
}
.fa-chevron-square-up:before {
  content: "\f32c";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-child:before {
  content: "\f1ae";
}
.fa-chimney:before {
  content: "\f78b";
}
.fa-chrome:before {
  content: "\f268";
}
.fa-church:before {
  content: "\f51d";
}
.fa-circle:before {
  content: "\f111";
}
.fa-circle-notch:before {
  content: "\f1ce";
}
.fa-city:before {
  content: "\f64f";
}
.fa-claw-marks:before {
  content: "\f6c2";
}
.fa-clinic-medical:before {
  content: "\f7f2";
}
.fa-clipboard:before {
  content: "\f328";
}
.fa-clipboard-check:before {
  content: "\f46c";
}
.fa-clipboard-list:before {
  content: "\f46d";
}
.fa-clipboard-list-check:before {
  content: "\f737";
}
.fa-clipboard-prescription:before {
  content: "\f5e8";
}
.fa-clipboard-user:before {
  content: "\f7f3";
}
.fa-clock:before {
  content: "\f017";
}
.fa-clone:before {
  content: "\f24d";
}
.fa-closed-captioning:before {
  content: "\f20a";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-download-alt:before {
  content: "\f381";
}
.fa-cloud-drizzle:before {
  content: "\f738";
}
.fa-cloud-hail:before {
  content: "\f739";
}
.fa-cloud-hail-mixed:before {
  content: "\f73a";
}
.fa-cloud-meatball:before {
  content: "\f73b";
}
.fa-cloud-moon:before {
  content: "\f6c3";
}
.fa-cloud-moon-rain:before {
  content: "\f73c";
}
.fa-cloud-rain:before {
  content: "\f73d";
}
.fa-cloud-rainbow:before {
  content: "\f73e";
}
.fa-cloud-showers:before {
  content: "\f73f";
}
.fa-cloud-showers-heavy:before {
  content: "\f740";
}
.fa-cloud-sleet:before {
  content: "\f741";
}
.fa-cloud-snow:before {
  content: "\f742";
}
.fa-cloud-sun:before {
  content: "\f6c4";
}
.fa-cloud-sun-rain:before {
  content: "\f743";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-cloud-upload-alt:before {
  content: "\f382";
}
.fa-clouds:before {
  content: "\f744";
}
.fa-clouds-moon:before {
  content: "\f745";
}
.fa-clouds-sun:before {
  content: "\f746";
}
.fa-cloudscale:before {
  content: "\f383";
}
.fa-cloudsmith:before {
  content: "\f384";
}
.fa-cloudversify:before {
  content: "\f385";
}
.fa-club:before {
  content: "\f327";
}
.fa-cocktail:before {
  content: "\f561";
}
.fa-code:before {
  content: "\f121";
}
.fa-code-branch:before {
  content: "\f126";
}
.fa-code-commit:before {
  content: "\f386";
}
.fa-code-merge:before {
  content: "\f387";
}
.fa-codepen:before {
  content: "\f1cb";
}
.fa-codiepie:before {
  content: "\f284";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-coffee-togo:before {
  content: "\f6c5";
}
.fa-coffin:before {
  content: "\f6c6";
}
.fa-cog:before {
  content: "\f013";
}
.fa-cogs:before {
  content: "\f085";
}
.fa-coins:before {
  content: "\f51e";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-comment:before {
  content: "\f075";
}
.fa-comment-alt:before {
  content: "\f27a";
}
.fa-comment-alt-check:before {
  content: "\f4a2";
}
.fa-comment-alt-dollar:before {
  content: "\f650";
}
.fa-comment-alt-dots:before {
  content: "\f4a3";
}
.fa-comment-alt-edit:before {
  content: "\f4a4";
}
.fa-comment-alt-exclamation:before {
  content: "\f4a5";
}
.fa-comment-alt-lines:before {
  content: "\f4a6";
}
.fa-comment-alt-medical:before {
  content: "\f7f4";
}
.fa-comment-alt-minus:before {
  content: "\f4a7";
}
.fa-comment-alt-plus:before {
  content: "\f4a8";
}
.fa-comment-alt-slash:before {
  content: "\f4a9";
}
.fa-comment-alt-smile:before {
  content: "\f4aa";
}
.fa-comment-alt-times:before {
  content: "\f4ab";
}
.fa-comment-check:before {
  content: "\f4ac";
}
.fa-comment-dollar:before {
  content: "\f651";
}
.fa-comment-dots:before {
  content: "\f4ad";
}
.fa-comment-edit:before {
  content: "\f4ae";
}
.fa-comment-exclamation:before {
  content: "\f4af";
}
.fa-comment-lines:before {
  content: "\f4b0";
}
.fa-comment-medical:before {
  content: "\f7f5";
}
.fa-comment-minus:before {
  content: "\f4b1";
}
.fa-comment-plus:before {
  content: "\f4b2";
}
.fa-comment-slash:before {
  content: "\f4b3";
}
.fa-comment-smile:before {
  content: "\f4b4";
}
.fa-comment-times:before {
  content: "\f4b5";
}
.fa-comments:before {
  content: "\f086";
}
.fa-comments-alt:before {
  content: "\f4b6";
}
.fa-comments-alt-dollar:before {
  content: "\f652";
}
.fa-comments-dollar:before {
  content: "\f653";
}
.fa-compact-disc:before {
  content: "\f51f";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-compass-slash:before {
  content: "\f5e9";
}
.fa-compress:before {
  content: "\f066";
}
.fa-compress-alt:before {
  content: "\f422";
}
.fa-compress-arrows-alt:before {
  content: "\f78c";
}
.fa-compress-wide:before {
  content: "\f326";
}
.fa-concierge-bell:before {
  content: "\f562";
}
.fa-confluence:before {
  content: "\f78d";
}
.fa-connectdevelop:before {
  content: "\f20e";
}
.fa-container-storage:before {
  content: "\f4b7";
}
.fa-contao:before {
  content: "\f26d";
}
.fa-conveyor-belt:before {
  content: "\f46e";
}
.fa-conveyor-belt-alt:before {
  content: "\f46f";
}
.fa-cookie:before {
  content: "\f563";
}
.fa-cookie-bite:before {
  content: "\f564";
}
.fa-copy:before {
  content: "\f0c5";
}
.fa-copyright:before {
  content: "\f1f9";
}
.fa-corn:before {
  content: "\f6c7";
}
.fa-couch:before {
  content: "\f4b8";
}
.fa-cow:before {
  content: "\f6c8";
}
.fa-cpanel:before {
  content: "\f388";
}
.fa-creative-commons:before {
  content: "\f25e";
}
.fa-creative-commons-by:before {
  content: "\f4e7";
}
.fa-creative-commons-nc:before {
  content: "\f4e8";
}
.fa-creative-commons-nc-eu:before {
  content: "\f4e9";
}
.fa-creative-commons-nc-jp:before {
  content: "\f4ea";
}
.fa-creative-commons-nd:before {
  content: "\f4eb";
}
.fa-creative-commons-pd:before {
  content: "\f4ec";
}
.fa-creative-commons-pd-alt:before {
  content: "\f4ed";
}
.fa-creative-commons-remix:before {
  content: "\f4ee";
}
.fa-creative-commons-sa:before {
  content: "\f4ef";
}
.fa-creative-commons-sampling:before {
  content: "\f4f0";
}
.fa-creative-commons-sampling-plus:before {
  content: "\f4f1";
}
.fa-creative-commons-share:before {
  content: "\f4f2";
}
.fa-creative-commons-zero:before {
  content: "\f4f3";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-credit-card-blank:before {
  content: "\f389";
}
.fa-credit-card-front:before {
  content: "\f38a";
}
.fa-cricket:before {
  content: "\f449";
}
.fa-critical-role:before {
  content: "\f6c9";
}
.fa-croissant:before {
  content: "\f7f6";
}
.fa-crop:before {
  content: "\f125";
}
.fa-crop-alt:before {
  content: "\f565";
}
.fa-cross:before {
  content: "\f654";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-crow:before {
  content: "\f520";
}
.fa-crown:before {
  content: "\f521";
}
.fa-crutch:before {
  content: "\f7f7";
}
.fa-crutches:before {
  content: "\f7f8";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-css3-alt:before {
  content: "\f38b";
}
.fa-cube:before {
  content: "\f1b2";
}
.fa-cubes:before {
  content: "\f1b3";
}
.fa-curling:before {
  content: "\f44a";
}
.fa-cut:before {
  content: "\f0c4";
}
.fa-cuttlefish:before {
  content: "\f38c";
}
.fa-d-and-d:before {
  content: "\f38d";
}
.fa-d-and-d-beyond:before {
  content: "\f6ca";
}
.fa-dagger:before {
  content: "\f6cb";
}
.fa-dashcube:before {
  content: "\f210";
}
.fa-database:before {
  content: "\f1c0";
}
.fa-deaf:before {
  content: "\f2a4";
}
.fa-debug:before {
  content: "\f7f9";
}
.fa-deer:before {
  content: "\f78e";
}
.fa-deer-rudolph:before {
  content: "\f78f";
}
.fa-delicious:before {
  content: "\f1a5";
}
.fa-democrat:before {
  content: "\f747";
}
.fa-deploydog:before {
  content: "\f38e";
}
.fa-deskpro:before {
  content: "\f38f";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-desktop-alt:before {
  content: "\f390";
}
.fa-dev:before {
  content: "\f6cc";
}
.fa-deviantart:before {
  content: "\f1bd";
}
.fa-dewpoint:before {
  content: "\f748";
}
.fa-dharmachakra:before {
  content: "\f655";
}
.fa-dhl:before {
  content: "\f790";
}
.fa-diagnoses:before {
  content: "\f470";
}
.fa-diamond:before {
  content: "\f219";
}
.fa-diaspora:before {
  content: "\f791";
}
.fa-dice:before {
  content: "\f522";
}
.fa-dice-d10:before {
  content: "\f6cd";
}
.fa-dice-d12:before {
  content: "\f6ce";
}
.fa-dice-d20:before {
  content: "\f6cf";
}
.fa-dice-d4:before {
  content: "\f6d0";
}
.fa-dice-d6:before {
  content: "\f6d1";
}
.fa-dice-d8:before {
  content: "\f6d2";
}
.fa-dice-five:before {
  content: "\f523";
}
.fa-dice-four:before {
  content: "\f524";
}
.fa-dice-one:before {
  content: "\f525";
}
.fa-dice-six:before {
  content: "\f526";
}
.fa-dice-three:before {
  content: "\f527";
}
.fa-dice-two:before {
  content: "\f528";
}
.fa-digg:before {
  content: "\f1a6";
}
.fa-digital-ocean:before {
  content: "\f391";
}
.fa-digital-tachograph:before {
  content: "\f566";
}
.fa-diploma:before {
  content: "\f5ea";
}
.fa-directions:before {
  content: "\f5eb";
}
.fa-discord:before {
  content: "\f392";
}
.fa-discourse:before {
  content: "\f393";
}
.fa-disease:before {
  content: "\f7fa";
}
.fa-divide:before {
  content: "\f529";
}
.fa-dizzy:before {
  content: "\f567";
}
.fa-dna:before {
  content: "\f471";
}
.fa-do-not-enter:before {
  content: "\f5ec";
}
.fa-dochub:before {
  content: "\f394";
}
.fa-docker:before {
  content: "\f395";
}
.fa-dog:before {
  content: "\f6d3";
}
.fa-dog-leashed:before {
  content: "\f6d4";
}
.fa-dollar-sign:before {
  content: "\f155";
}
.fa-dolly:before {
  content: "\f472";
}
.fa-dolly-empty:before {
  content: "\f473";
}
.fa-dolly-flatbed:before {
  content: "\f474";
}
.fa-dolly-flatbed-alt:before {
  content: "\f475";
}
.fa-dolly-flatbed-empty:before {
  content: "\f476";
}
.fa-donate:before {
  content: "\f4b9";
}
.fa-door-closed:before {
  content: "\f52a";
}
.fa-door-open:before {
  content: "\f52b";
}
.fa-dot-circle:before {
  content: "\f192";
}
.fa-dove:before {
  content: "\f4ba";
}
.fa-download:before {
  content: "\f019";
}
.fa-draft2digital:before {
  content: "\f396";
}
.fa-drafting-compass:before {
  content: "\f568";
}
.fa-dragon:before {
  content: "\f6d5";
}
.fa-draw-circle:before {
  content: "\f5ed";
}
.fa-draw-polygon:before {
  content: "\f5ee";
}
.fa-draw-square:before {
  content: "\f5ef";
}
.fa-dreidel:before {
  content: "\f792";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-dribbble-square:before {
  content: "\f397";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-drum:before {
  content: "\f569";
}
.fa-drum-steelpan:before {
  content: "\f56a";
}
.fa-drumstick:before {
  content: "\f6d6";
}
.fa-drumstick-bite:before {
  content: "\f6d7";
}
.fa-drupal:before {
  content: "\f1a9";
}
.fa-duck:before {
  content: "\f6d8";
}
.fa-dumbbell:before {
  content: "\f44b";
}
.fa-dumpster:before {
  content: "\f793";
}
.fa-dumpster-fire:before {
  content: "\f794";
}
.fa-dungeon:before {
  content: "\f6d9";
}
.fa-dyalog:before {
  content: "\f399";
}
.fa-ear:before {
  content: "\f5f0";
}
.fa-ear-muffs:before {
  content: "\f795";
}
.fa-earlybirds:before {
  content: "\f39a";
}
.fa-ebay:before {
  content: "\f4f4";
}
.fa-eclipse:before {
  content: "\f749";
}
.fa-eclipse-alt:before {
  content: "\f74a";
}
.fa-edge:before {
  content: "\f282";
}
.fa-edit:before {
  content: "\f044";
}
.fa-egg:before {
  content: "\f7fb";
}
.fa-egg-fried:before {
  content: "\f7fc";
}
.fa-eject:before {
  content: "\f052";
}
.fa-elementor:before {
  content: "\f430";
}
.fa-elephant:before {
  content: "\f6da";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-h-alt:before {
  content: "\f39b";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-ellipsis-v-alt:before {
  content: "\f39c";
}
.fa-ello:before {
  content: "\f5f1";
}
.fa-ember:before {
  content: "\f423";
}
.fa-empire:before {
  content: "\f1d1";
}
.fa-empty-set:before {
  content: "\f656";
}
.fa-engine-warning:before {
  content: "\f5f2";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-envelope-open:before {
  content: "\f2b6";
}
.fa-envelope-open-dollar:before {
  content: "\f657";
}
.fa-envelope-open-text:before {
  content: "\f658";
}
.fa-envelope-square:before {
  content: "\f199";
}
.fa-envira:before {
  content: "\f299";
}
.fa-equals:before {
  content: "\f52c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-erlang:before {
  content: "\f39d";
}
.fa-ethereum:before {
  content: "\f42e";
}
.fa-ethernet:before {
  content: "\f796";
}
.fa-etsy:before {
  content: "\f2d7";
}
.fa-euro-sign:before {
  content: "\f153";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-exchange-alt:before {
  content: "\f362";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-exclamation-square:before {
  content: "\f321";
}
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-expand:before {
  content: "\f065";
}
.fa-expand-alt:before {
  content: "\f424";
}
.fa-expand-arrows:before {
  content: "\f31d";
}
.fa-expand-arrows-alt:before {
  content: "\f31e";
}
.fa-expand-wide:before {
  content: "\f320";
}
.fa-expeditedssl:before {
  content: "\f23e";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-external-link-alt:before {
  content: "\f35d";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-external-link-square-alt:before {
  content: "\f360";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-dropper:before {
  content: "\f1fb";
}
.fa-eye-evil:before {
  content: "\f6db";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-facebook:before {
  content: "\f09a";
}
.fa-facebook-f:before {
  content: "\f39e";
}
.fa-facebook-messenger:before {
  content: "\f39f";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-fantasy-flight-games:before {
  content: "\f6dc";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-fax:before {
  content: "\f1ac";
}
.fa-feather:before {
  content: "\f52d";
}
.fa-feather-alt:before {
  content: "\f56b";
}
.fa-fedex:before {
  content: "\f797";
}
.fa-fedora:before {
  content: "\f798";
}
.fa-female:before {
  content: "\f182";
}
.fa-field-hockey:before {
  content: "\f44c";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-figma:before {
  content: "\f799";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-alt:before {
  content: "\f15c";
}
.fa-file-archive:before {
  content: "\f1c6";
}
.fa-file-audio:before {
  content: "\f1c7";
}
.fa-file-certificate:before {
  content: "\f5f3";
}
.fa-file-chart-line:before {
  content: "\f659";
}
.fa-file-chart-pie:before {
  content: "\f65a";
}
.fa-file-check:before {
  content: "\f316";
}
.fa-file-code:before {
  content: "\f1c9";
}
.fa-file-contract:before {
  content: "\f56c";
}
.fa-file-csv:before {
  content: "\f6dd";
}
.fa-file-download:before {
  content: "\f56d";
}
.fa-file-edit:before {
  content: "\f31c";
}
.fa-file-excel:before {
  content: "\f1c3";
}
.fa-file-exclamation:before {
  content: "\f31a";
}
.fa-file-export:before {
  content: "\f56e";
}
.fa-file-image:before {
  content: "\f1c5";
}
.fa-file-import:before {
  content: "\f56f";
}
.fa-file-invoice:before {
  content: "\f570";
}
.fa-file-invoice-dollar:before {
  content: "\f571";
}
.fa-file-medical:before {
  content: "\f477";
}
.fa-file-medical-alt:before {
  content: "\f478";
}
.fa-file-minus:before {
  content: "\f318";
}
.fa-file-pdf:before {
  content: "\f1c1";
}
.fa-file-plus:before {
  content: "\f319";
}
.fa-file-powerpoint:before {
  content: "\f1c4";
}
.fa-file-prescription:before {
  content: "\f572";
}
.fa-file-signature:before {
  content: "\f573";
}
.fa-file-spreadsheet:before {
  content: "\f65b";
}
.fa-file-times:before {
  content: "\f317";
}
.fa-file-upload:before {
  content: "\f574";
}
.fa-file-user:before {
  content: "\f65c";
}
.fa-file-video:before {
  content: "\f1c8";
}
.fa-file-word:before {
  content: "\f1c2";
}
.fa-files-medical:before {
  content: "\f7fd";
}
.fa-fill:before {
  content: "\f575";
}
.fa-fill-drip:before {
  content: "\f576";
}
.fa-film:before {
  content: "\f008";
}
.fa-film-alt:before {
  content: "\f3a0";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-fingerprint:before {
  content: "\f577";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-fire-alt:before {
  content: "\f7e4";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-fire-smoke:before {
  content: "\f74b";
}
.fa-firefox:before {
  content: "\f269";
}
.fa-fireplace:before {
  content: "\f79a";
}
.fa-first-aid:before {
  content: "\f479";
}
.fa-first-order:before {
  content: "\f2b0";
}
.fa-first-order-alt:before {
  content: "\f50a";
}
.fa-firstdraft:before {
  content: "\f3a1";
}
.fa-fish:before {
  content: "\f578";
}
.fa-fish-cooked:before {
  content: "\f7fe";
}
.fa-fist-raised:before {
  content: "\f6de";
}
.fa-flag:before {
  content: "\f024";
}
.fa-flag-alt:before {
  content: "\f74c";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-flag-usa:before {
  content: "\f74d";
}
.fa-flame:before {
  content: "\f6df";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-flask-poison:before {
  content: "\f6e0";
}
.fa-flask-potion:before {
  content: "\f6e1";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-flipboard:before {
  content: "\f44d";
}
.fa-flower:before {
  content: "\f7ff";
}
.fa-flower-daffodil:before {
  content: "\f800";
}
.fa-flower-tulip:before {
  content: "\f801";
}
.fa-flushed:before {
  content: "\f579";
}
.fa-fly:before {
  content: "\f417";
}
.fa-fog:before {
  content: "\f74e";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-minus:before {
  content: "\f65d";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-folder-plus:before {
  content: "\f65e";
}
.fa-folder-times:before {
  content: "\f65f";
}
.fa-folder-tree:before {
  content: "\f802";
}
.fa-folders:before {
  content: "\f660";
}
.fa-font:before {
  content: "\f031";
}
.fa-font-awesome:before {
  content: "\f2b4";
}
.fa-font-awesome-alt:before {
  content: "\f35c";
}
.fa-font-awesome-flag:before {
  content: "\f425";
}
.fa-font-awesome-logo-full:before {
  content: "\f4e6";
}
.fa-fonticons:before {
  content: "\f280";
}
.fa-fonticons-fi:before {
  content: "\f3a2";
}
.fa-football-ball:before {
  content: "\f44e";
}
.fa-football-helmet:before {
  content: "\f44f";
}
.fa-forklift:before {
  content: "\f47a";
}
.fa-fort-awesome:before {
  content: "\f286";
}
.fa-fort-awesome-alt:before {
  content: "\f3a3";
}
.fa-forumbee:before {
  content: "\f211";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-fragile:before {
  content: "\f4bb";
}
.fa-free-code-camp:before {
  content: "\f2c5";
}
.fa-freebsd:before {
  content: "\f3a4";
}
.fa-french-fries:before {
  content: "\f803";
}
.fa-frog:before {
  content: "\f52e";
}
.fa-frosty-head:before {
  content: "\f79b";
}
.fa-frown:before {
  content: "\f119";
}
.fa-frown-open:before {
  content: "\f57a";
}
.fa-fulcrum:before {
  content: "\f50b";
}
.fa-function:before {
  content: "\f661";
}
.fa-funnel-dollar:before {
  content: "\f662";
}
.fa-futbol:before {
  content: "\f1e3";
}
.fa-galactic-republic:before {
  content: "\f50c";
}
.fa-galactic-senate:before {
  content: "\f50d";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-gas-pump:before {
  content: "\f52f";
}
.fa-gas-pump-slash:before {
  content: "\f5f4";
}
.fa-gavel:before {
  content: "\f0e3";
}
.fa-gem:before {
  content: "\f3a5";
}
.fa-genderless:before {
  content: "\f22d";
}
.fa-get-pocket:before {
  content: "\f265";
}
.fa-gg:before {
  content: "\f260";
}
.fa-gg-circle:before {
  content: "\f261";
}
.fa-ghost:before {
  content: "\f6e2";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-gift-card:before {
  content: "\f663";
}
.fa-gifts:before {
  content: "\f79c";
}
.fa-gingerbread-man:before {
  content: "\f79d";
}
.fa-git:before {
  content: "\f1d3";
}
.fa-git-square:before {
  content: "\f1d2";
}
.fa-github:before {
  content: "\f09b";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-gitkraken:before {
  content: "\f3a6";
}
.fa-gitlab:before {
  content: "\f296";
}
.fa-gitter:before {
  content: "\f426";
}
.fa-glass:before {
  content: "\f804";
}
.fa-glass-champagne:before {
  content: "\f79e";
}
.fa-glass-cheers:before {
  content: "\f79f";
}
.fa-glass-martini:before {
  content: "\f000";
}
.fa-glass-martini-alt:before {
  content: "\f57b";
}
.fa-glass-whiskey:before {
  content: "\f7a0";
}
.fa-glass-whiskey-rocks:before {
  content: "\f7a1";
}
.fa-glasses:before {
  content: "\f530";
}
.fa-glasses-alt:before {
  content: "\f5f5";
}
.fa-glide:before {
  content: "\f2a5";
}
.fa-glide-g:before {
  content: "\f2a6";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-globe-africa:before {
  content: "\f57c";
}
.fa-globe-americas:before {
  content: "\f57d";
}
.fa-globe-asia:before {
  content: "\f57e";
}
.fa-globe-europe:before {
  content: "\f7a2";
}
.fa-globe-snow:before {
  content: "\f7a3";
}
.fa-globe-stand:before {
  content: "\f5f6";
}
.fa-gofore:before {
  content: "\f3a7";
}
.fa-golf-ball:before {
  content: "\f450";
}
.fa-golf-club:before {
  content: "\f451";
}
.fa-goodreads:before {
  content: "\f3a8";
}
.fa-goodreads-g:before {
  content: "\f3a9";
}
.fa-google:before {
  content: "\f1a0";
}
.fa-google-drive:before {
  content: "\f3aa";
}
.fa-google-play:before {
  content: "\f3ab";
}
.fa-google-plus:before {
  content: "\f2b3";
}
.fa-google-plus-g:before {
  content: "\f0d5";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-wallet:before {
  content: "\f1ee";
}
.fa-gopuram:before {
  content: "\f664";
}
.fa-graduation-cap:before {
  content: "\f19d";
}
.fa-gratipay:before {
  content: "\f184";
}
.fa-grav:before {
  content: "\f2d6";
}
.fa-greater-than:before {
  content: "\f531";
}
.fa-greater-than-equal:before {
  content: "\f532";
}
.fa-grimace:before {
  content: "\f57f";
}
.fa-grin:before {
  content: "\f580";
}
.fa-grin-alt:before {
  content: "\f581";
}
.fa-grin-beam:before {
  content: "\f582";
}
.fa-grin-beam-sweat:before {
  content: "\f583";
}
.fa-grin-hearts:before {
  content: "\f584";
}
.fa-grin-squint:before {
  content: "\f585";
}
.fa-grin-squint-tears:before {
  content: "\f586";
}
.fa-grin-stars:before {
  content: "\f587";
}
.fa-grin-tears:before {
  content: "\f588";
}
.fa-grin-tongue:before {
  content: "\f589";
}
.fa-grin-tongue-squint:before {
  content: "\f58a";
}
.fa-grin-tongue-wink:before {
  content: "\f58b";
}
.fa-grin-wink:before {
  content: "\f58c";
}
.fa-grip-horizontal:before {
  content: "\f58d";
}
.fa-grip-lines:before {
  content: "\f7a4";
}
.fa-grip-lines-vertical:before {
  content: "\f7a5";
}
.fa-grip-vertical:before {
  content: "\f58e";
}
.fa-gripfire:before {
  content: "\f3ac";
}
.fa-grunt:before {
  content: "\f3ad";
}
.fa-guitar:before {
  content: "\f7a6";
}
.fa-gulp:before {
  content: "\f3ae";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-h1:before {
  content: "\f313";
}
.fa-h2:before {
  content: "\f314";
}
.fa-h3:before {
  content: "\f315";
}
.fa-hacker-news:before {
  content: "\f1d4";
}
.fa-hacker-news-square:before {
  content: "\f3af";
}
.fa-hackerrank:before {
  content: "\f5f7";
}
.fa-hamburger:before {
  content: "\f805";
}
.fa-hammer:before {
  content: "\f6e3";
}
.fa-hammer-war:before {
  content: "\f6e4";
}
.fa-hamsa:before {
  content: "\f665";
}
.fa-hand-heart:before {
  content: "\f4bc";
}
.fa-hand-holding:before {
  content: "\f4bd";
}
.fa-hand-holding-box:before {
  content: "\f47b";
}
.fa-hand-holding-heart:before {
  content: "\f4be";
}
.fa-hand-holding-magic:before {
  content: "\f6e5";
}
.fa-hand-holding-seedling:before {
  content: "\f4bf";
}
.fa-hand-holding-usd:before {
  content: "\f4c0";
}
.fa-hand-holding-water:before {
  content: "\f4c1";
}
.fa-hand-lizard:before {
  content: "\f258";
}
.fa-hand-middle-finger:before {
  content: "\f806";
}
.fa-hand-paper:before {
  content: "\f256";
}
.fa-hand-peace:before {
  content: "\f25b";
}
.fa-hand-point-down:before {
  content: "\f0a7";
}
.fa-hand-point-left:before {
  content: "\f0a5";
}
.fa-hand-point-right:before {
  content: "\f0a4";
}
.fa-hand-point-up:before {
  content: "\f0a6";
}
.fa-hand-pointer:before {
  content: "\f25a";
}
.fa-hand-receiving:before {
  content: "\f47c";
}
.fa-hand-rock:before {
  content: "\f255";
}
.fa-hand-scissors:before {
  content: "\f257";
}
.fa-hand-spock:before {
  content: "\f259";
}
.fa-hands:before {
  content: "\f4c2";
}
.fa-hands-heart:before {
  content: "\f4c3";
}
.fa-hands-helping:before {
  content: "\f4c4";
}
.fa-hands-usd:before {
  content: "\f4c5";
}
.fa-handshake:before {
  content: "\f2b5";
}
.fa-handshake-alt:before {
  content: "\f4c6";
}
.fa-hanukiah:before {
  content: "\f6e6";
}
.fa-hard-hat:before {
  content: "\f807";
}
.fa-hashtag:before {
  content: "\f292";
}
.fa-hat-santa:before {
  content: "\f7a7";
}
.fa-hat-winter:before {
  content: "\f7a8";
}
.fa-hat-witch:before {
  content: "\f6e7";
}
.fa-hat-wizard:before {
  content: "\f6e8";
}
.fa-haykal:before {
  content: "\f666";
}
.fa-hdd:before {
  content: "\f0a0";
}
.fa-head-side:before {
  content: "\f6e9";
}
.fa-head-side-brain:before {
  content: "\f808";
}
.fa-head-side-medical:before {
  content: "\f809";
}
.fa-head-vr:before {
  content: "\f6ea";
}
.fa-heading:before {
  content: "\f1dc";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-headphones-alt:before {
  content: "\f58f";
}
.fa-headset:before {
  content: "\f590";
}
.fa-heart:before {
  content: "\f004";
}
.fa-heart-broken:before {
  content: "\f7a9";
}
.fa-heart-circle:before {
  content: "\f4c7";
}
.fa-heart-rate:before {
  content: "\f5f8";
}
.fa-heart-square:before {
  content: "\f4c8";
}
.fa-heartbeat:before {
  content: "\f21e";
}
.fa-helicopter:before {
  content: "\f533";
}
.fa-helmet-battle:before {
  content: "\f6eb";
}
.fa-hexagon:before {
  content: "\f312";
}
.fa-highlighter:before {
  content: "\f591";
}
.fa-hiking:before {
  content: "\f6ec";
}
.fa-hippo:before {
  content: "\f6ed";
}
.fa-hips:before {
  content: "\f452";
}
.fa-hire-a-helper:before {
  content: "\f3b0";
}
.fa-history:before {
  content: "\f1da";
}
.fa-hockey-mask:before {
  content: "\f6ee";
}
.fa-hockey-puck:before {
  content: "\f453";
}
.fa-hockey-sticks:before {
  content: "\f454";
}
.fa-holly-berry:before {
  content: "\f7aa";
}
.fa-home:before {
  content: "\f015";
}
.fa-home-alt:before {
  content: "\f80a";
}
.fa-home-heart:before {
  content: "\f4c9";
}
.fa-home-lg:before {
  content: "\f80b";
}
.fa-home-lg-alt:before {
  content: "\f80c";
}
.fa-hood-cloak:before {
  content: "\f6ef";
}
.fa-hooli:before {
  content: "\f427";
}
.fa-hornbill:before {
  content: "\f592";
}
.fa-horse:before {
  content: "\f6f0";
}
.fa-horse-head:before {
  content: "\f7ab";
}
.fa-hospital:before {
  content: "\f0f8";
}
.fa-hospital-alt:before {
  content: "\f47d";
}
.fa-hospital-symbol:before {
  content: "\f47e";
}
.fa-hospital-user:before {
  content: "\f80d";
}
.fa-hospitals:before {
  content: "\f80e";
}
.fa-hot-tub:before {
  content: "\f593";
}
.fa-hotdog:before {
  content: "\f80f";
}
.fa-hotel:before {
  content: "\f594";
}
.fa-hotjar:before {
  content: "\f3b1";
}
.fa-hourglass:before {
  content: "\f254";
}
.fa-hourglass-end:before {
  content: "\f253";
}
.fa-hourglass-half:before {
  content: "\f252";
}
.fa-hourglass-start:before {
  content: "\f251";
}
.fa-house-damage:before {
  content: "\f6f1";
}
.fa-house-flood:before {
  content: "\f74f";
}
.fa-houzz:before {
  content: "\f27c";
}
.fa-hryvnia:before {
  content: "\f6f2";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-hubspot:before {
  content: "\f3b2";
}
.fa-humidity:before {
  content: "\f750";
}
.fa-hurricane:before {
  content: "\f751";
}
.fa-i-cursor:before {
  content: "\f246";
}
.fa-ice-cream:before {
  content: "\f810";
}
.fa-ice-skate:before {
  content: "\f7ac";
}
.fa-icicles:before {
  content: "\f7ad";
}
.fa-id-badge:before {
  content: "\f2c1";
}
.fa-id-card:before {
  content: "\f2c2";
}
.fa-id-card-alt:before {
  content: "\f47f";
}
.fa-igloo:before {
  content: "\f7ae";
}
.fa-image:before {
  content: "\f03e";
}
.fa-images:before {
  content: "\f302";
}
.fa-imdb:before {
  content: "\f2d8";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-inbox-in:before {
  content: "\f310";
}
.fa-inbox-out:before {
  content: "\f311";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-industry:before {
  content: "\f275";
}
.fa-industry-alt:before {
  content: "\f3b3";
}
.fa-infinity:before {
  content: "\f534";
}
.fa-info:before {
  content: "\f129";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-info-square:before {
  content: "\f30f";
}
.fa-inhaler:before {
  content: "\f5f9";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-integral:before {
  content: "\f667";
}
.fa-intercom:before {
  content: "\f7af";
}
.fa-internet-explorer:before {
  content: "\f26b";
}
.fa-intersection:before {
  content: "\f668";
}
.fa-inventory:before {
  content: "\f480";
}
.fa-invision:before {
  content: "\f7b0";
}
.fa-ioxhost:before {
  content: "\f208";
}
.fa-island-tropical:before {
  content: "\f811";
}
.fa-italic:before {
  content: "\f033";
}
.fa-itunes:before {
  content: "\f3b4";
}
.fa-itunes-note:before {
  content: "\f3b5";
}
.fa-jack-o-lantern:before {
  content: "\f30e";
}
.fa-java:before {
  content: "\f4e4";
}
.fa-jedi:before {
  content: "\f669";
}
.fa-jedi-order:before {
  content: "\f50e";
}
.fa-jenkins:before {
  content: "\f3b6";
}
.fa-jira:before {
  content: "\f7b1";
}
.fa-joget:before {
  content: "\f3b7";
}
.fa-joint:before {
  content: "\f595";
}
.fa-joomla:before {
  content: "\f1aa";
}
.fa-journal-whills:before {
  content: "\f66a";
}
.fa-js:before {
  content: "\f3b8";
}
.fa-js-square:before {
  content: "\f3b9";
}
.fa-jsfiddle:before {
  content: "\f1cc";
}
.fa-kaaba:before {
  content: "\f66b";
}
.fa-kaggle:before {
  content: "\f5fa";
}
.fa-key:before {
  content: "\f084";
}
.fa-key-skeleton:before {
  content: "\f6f3";
}
.fa-keybase:before {
  content: "\f4f5";
}
.fa-keyboard:before {
  content: "\f11c";
}
.fa-keycdn:before {
  content: "\f3ba";
}
.fa-keynote:before {
  content: "\f66c";
}
.fa-khanda:before {
  content: "\f66d";
}
.fa-kickstarter:before {
  content: "\f3bb";
}
.fa-kickstarter-k:before {
  content: "\f3bc";
}
.fa-kidneys:before {
  content: "\f5fb";
}
.fa-kiss:before {
  content: "\f596";
}
.fa-kiss-beam:before {
  content: "\f597";
}
.fa-kiss-wink-heart:before {
  content: "\f598";
}
.fa-kite:before {
  content: "\f6f4";
}
.fa-kiwi-bird:before {
  content: "\f535";
}
.fa-knife-kitchen:before {
  content: "\f6f5";
}
.fa-korvue:before {
  content: "\f42f";
}
.fa-lambda:before {
  content: "\f66e";
}
.fa-lamp:before {
  content: "\f4ca";
}
.fa-landmark:before {
  content: "\f66f";
}
.fa-landmark-alt:before {
  content: "\f752";
}
.fa-language:before {
  content: "\f1ab";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-laptop-code:before {
  content: "\f5fc";
}
.fa-laptop-medical:before {
  content: "\f812";
}
.fa-laravel:before {
  content: "\f3bd";
}
.fa-lastfm:before {
  content: "\f202";
}
.fa-lastfm-square:before {
  content: "\f203";
}
.fa-laugh:before {
  content: "\f599";
}
.fa-laugh-beam:before {
  content: "\f59a";
}
.fa-laugh-squint:before {
  content: "\f59b";
}
.fa-laugh-wink:before {
  content: "\f59c";
}
.fa-layer-group:before {
  content: "\f5fd";
}
.fa-layer-minus:before {
  content: "\f5fe";
}
.fa-layer-plus:before {
  content: "\f5ff";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-leaf-heart:before {
  content: "\f4cb";
}
.fa-leaf-maple:before {
  content: "\f6f6";
}
.fa-leaf-oak:before {
  content: "\f6f7";
}
.fa-leanpub:before {
  content: "\f212";
}
.fa-lemon:before {
  content: "\f094";
}
.fa-less:before {
  content: "\f41d";
}
.fa-less-than:before {
  content: "\f536";
}
.fa-less-than-equal:before {
  content: "\f537";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-level-down-alt:before {
  content: "\f3be";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-up-alt:before {
  content: "\f3bf";
}
.fa-life-ring:before {
  content: "\f1cd";
}
.fa-lightbulb:before {
  content: "\f0eb";
}
.fa-lightbulb-dollar:before {
  content: "\f670";
}
.fa-lightbulb-exclamation:before {
  content: "\f671";
}
.fa-lightbulb-on:before {
  content: "\f672";
}
.fa-lightbulb-slash:before {
  content: "\f673";
}
.fa-lights-holiday:before {
  content: "\f7b2";
}
.fa-line:before {
  content: "\f3c0";
}
.fa-link:before {
  content: "\f0c1";
}
.fa-linkedin:before {
  content: "\f08c";
}
.fa-linkedin-in:before {
  content: "\f0e1";
}
.fa-linode:before {
  content: "\f2b8";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-lips:before {
  content: "\f600";
}
.fa-lira-sign:before {
  content: "\f195";
}
.fa-list:before {
  content: "\f03a";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-location:before {
  content: "\f601";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-location-circle:before {
  content: "\f602";
}
.fa-location-slash:before {
  content: "\f603";
}
.fa-lock:before {
  content: "\f023";
}
.fa-lock-alt:before {
  content: "\f30d";
}
.fa-lock-open:before {
  content: "\f3c1";
}
.fa-lock-open-alt:before {
  content: "\f3c2";
}
.fa-long-arrow-alt-down:before {
  content: "\f309";
}
.fa-long-arrow-alt-left:before {
  content: "\f30a";
}
.fa-long-arrow-alt-right:before {
  content: "\f30b";
}
.fa-long-arrow-alt-up:before {
  content: "\f30c";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-loveseat:before {
  content: "\f4cc";
}
.fa-low-vision:before {
  content: "\f2a8";
}
.fa-luchador:before {
  content: "\f455";
}
.fa-luggage-cart:before {
  content: "\f59d";
}
.fa-lungs:before {
  content: "\f604";
}
.fa-lyft:before {
  content: "\f3c3";
}
.fa-mace:before {
  content: "\f6f8";
}
.fa-magento:before {
  content: "\f3c4";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-mail-bulk:before {
  content: "\f674";
}
.fa-mailbox:before {
  content: "\f813";
}
.fa-mailchimp:before {
  content: "\f59e";
}
.fa-male:before {
  content: "\f183";
}
.fa-mandalorian:before {
  content: "\f50f";
}
.fa-mandolin:before {
  content: "\f6f9";
}
.fa-map:before {
  content: "\f279";
}
.fa-map-marked:before {
  content: "\f59f";
}
.fa-map-marked-alt:before {
  content: "\f5a0";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-map-marker-alt:before {
  content: "\f3c5";
}
.fa-map-marker-alt-slash:before {
  content: "\f605";
}
.fa-map-marker-check:before {
  content: "\f606";
}
.fa-map-marker-edit:before {
  content: "\f607";
}
.fa-map-marker-exclamation:before {
  content: "\f608";
}
.fa-map-marker-minus:before {
  content: "\f609";
}
.fa-map-marker-plus:before {
  content: "\f60a";
}
.fa-map-marker-question:before {
  content: "\f60b";
}
.fa-map-marker-slash:before {
  content: "\f60c";
}
.fa-map-marker-smile:before {
  content: "\f60d";
}
.fa-map-marker-times:before {
  content: "\f60e";
}
.fa-map-pin:before {
  content: "\f276";
}
.fa-map-signs:before {
  content: "\f277";
}
.fa-markdown:before {
  content: "\f60f";
}
.fa-marker:before {
  content: "\f5a1";
}
.fa-mars:before {
  content: "\f222";
}
.fa-mars-double:before {
  content: "\f227";
}
.fa-mars-stroke:before {
  content: "\f229";
}
.fa-mars-stroke-h:before {
  content: "\f22b";
}
.fa-mars-stroke-v:before {
  content: "\f22a";
}
.fa-mask:before {
  content: "\f6fa";
}
.fa-mastodon:before {
  content: "\f4f6";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-meat:before {
  content: "\f814";
}
.fa-medal:before {
  content: "\f5a2";
}
.fa-medapps:before {
  content: "\f3c6";
}
.fa-medium:before {
  content: "\f23a";
}
.fa-medium-m:before {
  content: "\f3c7";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-medrt:before {
  content: "\f3c8";
}
.fa-meetup:before {
  content: "\f2e0";
}
.fa-megaphone:before {
  content: "\f675";
}
.fa-megaport:before {
  content: "\f5a3";
}
.fa-meh:before {
  content: "\f11a";
}
.fa-meh-blank:before {
  content: "\f5a4";
}
.fa-meh-rolling-eyes:before {
  content: "\f5a5";
}
.fa-memory:before {
  content: "\f538";
}
.fa-mendeley:before {
  content: "\f7b3";
}
.fa-menorah:before {
  content: "\f676";
}
.fa-mercury:before {
  content: "\f223";
}
.fa-meteor:before {
  content: "\f753";
}
.fa-microchip:before {
  content: "\f2db";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-alt:before {
  content: "\f3c9";
}
.fa-microphone-alt-slash:before {
  content: "\f539";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-microscope:before {
  content: "\f610";
}
.fa-microsoft:before {
  content: "\f3ca";
}
.fa-mind-share:before {
  content: "\f677";
}
.fa-minus:before {
  content: "\f068";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-minus-hexagon:before {
  content: "\f307";
}
.fa-minus-octagon:before {
  content: "\f308";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-mistletoe:before {
  content: "\f7b4";
}
.fa-mitten:before {
  content: "\f7b5";
}
.fa-mix:before {
  content: "\f3cb";
}
.fa-mixcloud:before {
  content: "\f289";
}
.fa-mizuni:before {
  content: "\f3cc";
}
.fa-mobile:before {
  content: "\f10b";
}
.fa-mobile-alt:before {
  content: "\f3cd";
}
.fa-mobile-android:before {
  content: "\f3ce";
}
.fa-mobile-android-alt:before {
  content: "\f3cf";
}
.fa-modx:before {
  content: "\f285";
}
.fa-monero:before {
  content: "\f3d0";
}
.fa-money-bill:before {
  content: "\f0d6";
}
.fa-money-bill-alt:before {
  content: "\f3d1";
}
.fa-money-bill-wave:before {
  content: "\f53a";
}
.fa-money-bill-wave-alt:before {
  content: "\f53b";
}
.fa-money-check:before {
  content: "\f53c";
}
.fa-money-check-alt:before {
  content: "\f53d";
}
.fa-monitor-heart-rate:before {
  content: "\f611";
}
.fa-monkey:before {
  content: "\f6fb";
}
.fa-monument:before {
  content: "\f5a6";
}
.fa-moon:before {
  content: "\f186";
}
.fa-moon-cloud:before {
  content: "\f754";
}
.fa-moon-stars:before {
  content: "\f755";
}
.fa-mortar-pestle:before {
  content: "\f5a7";
}
.fa-mosque:before {
  content: "\f678";
}
.fa-motorcycle:before {
  content: "\f21c";
}
.fa-mountain:before {
  content: "\f6fc";
}
.fa-mountains:before {
  content: "\f6fd";
}
.fa-mouse-pointer:before {
  content: "\f245";
}
.fa-mug-hot:before {
  content: "\f7b6";
}
.fa-mug-marshmallows:before {
  content: "\f7b7";
}
.fa-music:before {
  content: "\f001";
}
.fa-napster:before {
  content: "\f3d2";
}
.fa-narwhal:before {
  content: "\f6fe";
}
.fa-neos:before {
  content: "\f612";
}
.fa-network-wired:before {
  content: "\f6ff";
}
.fa-neuter:before {
  content: "\f22c";
}
.fa-newspaper:before {
  content: "\f1ea";
}
.fa-nimblr:before {
  content: "\f5a8";
}
.fa-nintendo-switch:before {
  content: "\f418";
}
.fa-node:before {
  content: "\f419";
}
.fa-node-js:before {
  content: "\f3d3";
}
.fa-not-equal:before {
  content: "\f53e";
}
.fa-notes-medical:before {
  content: "\f481";
}
.fa-npm:before {
  content: "\f3d4";
}
.fa-ns8:before {
  content: "\f3d5";
}
.fa-nutritionix:before {
  content: "\f3d6";
}
.fa-object-group:before {
  content: "\f247";
}
.fa-object-ungroup:before {
  content: "\f248";
}
.fa-octagon:before {
  content: "\f306";
}
.fa-odnoklassniki:before {
  content: "\f263";
}
.fa-odnoklassniki-square:before {
  content: "\f264";
}
.fa-oil-can:before {
  content: "\f613";
}
.fa-oil-temp:before {
  content: "\f614";
}
.fa-old-republic:before {
  content: "\f510";
}
.fa-om:before {
  content: "\f679";
}
.fa-omega:before {
  content: "\f67a";
}
.fa-opencart:before {
  content: "\f23d";
}
.fa-openid:before {
  content: "\f19b";
}
.fa-opera:before {
  content: "\f26a";
}
.fa-optin-monster:before {
  content: "\f23c";
}
.fa-ornament:before {
  content: "\f7b8";
}
.fa-osi:before {
  content: "\f41a";
}
.fa-otter:before {
  content: "\f700";
}
.fa-outdent:before {
  content: "\f03b";
}
.fa-page4:before {
  content: "\f3d7";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-pager:before {
  content: "\f815";
}
.fa-paint-brush:before {
  content: "\f1fc";
}
.fa-paint-brush-alt:before {
  content: "\f5a9";
}
.fa-paint-roller:before {
  content: "\f5aa";
}
.fa-palette:before {
  content: "\f53f";
}
.fa-palfed:before {
  content: "\f3d8";
}
.fa-pallet:before {
  content: "\f482";
}
.fa-pallet-alt:before {
  content: "\f483";
}
.fa-paper-plane:before {
  content: "\f1d8";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-parachute-box:before {
  content: "\f4cd";
}
.fa-paragraph:before {
  content: "\f1dd";
}
.fa-parking:before {
  content: "\f540";
}
.fa-parking-circle:before {
  content: "\f615";
}
.fa-parking-circle-slash:before {
  content: "\f616";
}
.fa-parking-slash:before {
  content: "\f617";
}
.fa-passport:before {
  content: "\f5ab";
}
.fa-pastafarianism:before {
  content: "\f67b";
}
.fa-paste:before {
  content: "\f0ea";
}
.fa-patreon:before {
  content: "\f3d9";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-pause-circle:before {
  content: "\f28b";
}
.fa-paw:before {
  content: "\f1b0";
}
.fa-paw-alt:before {
  content: "\f701";
}
.fa-paw-claws:before {
  content: "\f702";
}
.fa-paypal:before {
  content: "\f1ed";
}
.fa-peace:before {
  content: "\f67c";
}
.fa-pegasus:before {
  content: "\f703";
}
.fa-pen:before {
  content: "\f304";
}
.fa-pen-alt:before {
  content: "\f305";
}
.fa-pen-fancy:before {
  content: "\f5ac";
}
.fa-pen-nib:before {
  content: "\f5ad";
}
.fa-pen-square:before {
  content: "\f14b";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-pencil-alt:before {
  content: "\f303";
}
.fa-pencil-paintbrush:before {
  content: "\f618";
}
.fa-pencil-ruler:before {
  content: "\f5ae";
}
.fa-pennant:before {
  content: "\f456";
}
.fa-penny-arcade:before {
  content: "\f704";
}
.fa-people-carry:before {
  content: "\f4ce";
}
.fa-pepper-hot:before {
  content: "\f816";
}
.fa-percent:before {
  content: "\f295";
}
.fa-percentage:before {
  content: "\f541";
}
.fa-periscope:before {
  content: "\f3da";
}
.fa-person-booth:before {
  content: "\f756";
}
.fa-person-carry:before {
  content: "\f4cf";
}
.fa-person-dolly:before {
  content: "\f4d0";
}
.fa-person-dolly-empty:before {
  content: "\f4d1";
}
.fa-person-sign:before {
  content: "\f757";
}
.fa-phabricator:before {
  content: "\f3db";
}
.fa-phoenix-framework:before {
  content: "\f3dc";
}
.fa-phoenix-squadron:before {
  content: "\f511";
}
.fa-phone:before {
  content: "\f095";
}
.fa-phone-office:before {
  content: "\f67d";
}
.fa-phone-plus:before {
  content: "\f4d2";
}
.fa-phone-slash:before {
  content: "\f3dd";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-phone-volume:before {
  content: "\f2a0";
}
.fa-php:before {
  content: "\f457";
}
.fa-pi:before {
  content: "\f67e";
}
.fa-pie:before {
  content: "\f705";
}
.fa-pied-piper:before {
  content: "\f2ae";
}
.fa-pied-piper-alt:before {
  content: "\f1a8";
}
.fa-pied-piper-hat:before {
  content: "\f4e5";
}
.fa-pied-piper-pp:before {
  content: "\f1a7";
}
.fa-pig:before {
  content: "\f706";
}
.fa-piggy-bank:before {
  content: "\f4d3";
}
.fa-pills:before {
  content: "\f484";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-p:before {
  content: "\f231";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-pizza:before {
  content: "\f817";
}
.fa-pizza-slice:before {
  content: "\f818";
}
.fa-place-of-worship:before {
  content: "\f67f";
}
.fa-plane:before {
  content: "\f072";
}
.fa-plane-alt:before {
  content: "\f3de";
}
.fa-plane-arrival:before {
  content: "\f5af";
}
.fa-plane-departure:before {
  content: "\f5b0";
}
.fa-play:before {
  content: "\f04b";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-playstation:before {
  content: "\f3df";
}
.fa-plug:before {
  content: "\f1e6";
}
.fa-plus:before {
  content: "\f067";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-plus-hexagon:before {
  content: "\f300";
}
.fa-plus-octagon:before {
  content: "\f301";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-podcast:before {
  content: "\f2ce";
}
.fa-podium:before {
  content: "\f680";
}
.fa-podium-star:before {
  content: "\f758";
}
.fa-poll:before {
  content: "\f681";
}
.fa-poll-h:before {
  content: "\f682";
}
.fa-poll-people:before {
  content: "\f759";
}
.fa-poo:before {
  content: "\f2fe";
}
.fa-poo-storm:before {
  content: "\f75a";
}
.fa-poop:before {
  content: "\f619";
}
.fa-popcorn:before {
  content: "\f819";
}
.fa-portrait:before {
  content: "\f3e0";
}
.fa-pound-sign:before {
  content: "\f154";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-pray:before {
  content: "\f683";
}
.fa-praying-hands:before {
  content: "\f684";
}
.fa-prescription:before {
  content: "\f5b1";
}
.fa-prescription-bottle:before {
  content: "\f485";
}
.fa-prescription-bottle-alt:before {
  content: "\f486";
}
.fa-presentation:before {
  content: "\f685";
}
.fa-print:before {
  content: "\f02f";
}
.fa-print-search:before {
  content: "\f81a";
}
.fa-print-slash:before {
  content: "\f686";
}
.fa-procedures:before {
  content: "\f487";
}
.fa-product-hunt:before {
  content: "\f288";
}
.fa-project-diagram:before {
  content: "\f542";
}
.fa-pumpkin:before {
  content: "\f707";
}
.fa-pushed:before {
  content: "\f3e1";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-python:before {
  content: "\f3e2";
}
.fa-qq:before {
  content: "\f1d6";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-question:before {
  content: "\f128";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-question-square:before {
  content: "\f2fd";
}
.fa-quidditch:before {
  content: "\f458";
}
.fa-quinscape:before {
  content: "\f459";
}
.fa-quora:before {
  content: "\f2c4";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-quran:before {
  content: "\f687";
}
.fa-r-project:before {
  content: "\f4f7";
}
.fa-rabbit:before {
  content: "\f708";
}
.fa-rabbit-fast:before {
  content: "\f709";
}
.fa-racquet:before {
  content: "\f45a";
}
.fa-radiation:before {
  content: "\f7b9";
}
.fa-radiation-alt:before {
  content: "\f7ba";
}
.fa-rainbow:before {
  content: "\f75b";
}
.fa-raindrops:before {
  content: "\f75c";
}
.fa-ram:before {
  content: "\f70a";
}
.fa-ramp-loading:before {
  content: "\f4d4";
}
.fa-random:before {
  content: "\f074";
}
.fa-raspberry-pi:before {
  content: "\f7bb";
}
.fa-ravelry:before {
  content: "\f2d9";
}
.fa-react:before {
  content: "\f41b";
}
.fa-reacteurope:before {
  content: "\f75d";
}
.fa-readme:before {
  content: "\f4d5";
}
.fa-rebel:before {
  content: "\f1d0";
}
.fa-receipt:before {
  content: "\f543";
}
.fa-rectangle-landscape:before {
  content: "\f2fa";
}
.fa-rectangle-portrait:before {
  content: "\f2fb";
}
.fa-rectangle-wide:before {
  content: "\f2fc";
}
.fa-recycle:before {
  content: "\f1b8";
}
.fa-red-river:before {
  content: "\f3e3";
}
.fa-reddit:before {
  content: "\f1a1";
}
.fa-reddit-alien:before {
  content: "\f281";
}
.fa-reddit-square:before {
  content: "\f1a2";
}
.fa-redhat:before {
  content: "\f7bc";
}
.fa-redo:before {
  content: "\f01e";
}
.fa-redo-alt:before {
  content: "\f2f9";
}
.fa-registered:before {
  content: "\f25d";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-repeat:before {
  content: "\f363";
}
.fa-repeat-1:before {
  content: "\f365";
}
.fa-repeat-1-alt:before {
  content: "\f366";
}
.fa-repeat-alt:before {
  content: "\f364";
}
.fa-reply:before {
  content: "\f3e5";
}
.fa-reply-all:before {
  content: "\f122";
}
.fa-replyd:before {
  content: "\f3e6";
}
.fa-republican:before {
  content: "\f75e";
}
.fa-researchgate:before {
  content: "\f4f8";
}
.fa-resolving:before {
  content: "\f3e7";
}
.fa-restroom:before {
  content: "\f7bd";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-retweet-alt:before {
  content: "\f361";
}
.fa-rev:before {
  content: "\f5b2";
}
.fa-ribbon:before {
  content: "\f4d6";
}
.fa-ring:before {
  content: "\f70b";
}
.fa-rings-wedding:before {
  content: "\f81b";
}
.fa-road:before {
  content: "\f018";
}
.fa-robot:before {
  content: "\f544";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-rocketchat:before {
  content: "\f3e8";
}
.fa-rockrms:before {
  content: "\f3e9";
}
.fa-route:before {
  content: "\f4d7";
}
.fa-route-highway:before {
  content: "\f61a";
}
.fa-route-interstate:before {
  content: "\f61b";
}
.fa-rss:before {
  content: "\f09e";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-ruble-sign:before {
  content: "\f158";
}
.fa-ruler:before {
  content: "\f545";
}
.fa-ruler-combined:before {
  content: "\f546";
}
.fa-ruler-horizontal:before {
  content: "\f547";
}
.fa-ruler-triangle:before {
  content: "\f61c";
}
.fa-ruler-vertical:before {
  content: "\f548";
}
.fa-running:before {
  content: "\f70c";
}
.fa-rupee-sign:before {
  content: "\f156";
}
.fa-rv:before {
  content: "\f7be";
}
.fa-sack:before {
  content: "\f81c";
}
.fa-sack-dollar:before {
  content: "\f81d";
}
.fa-sad-cry:before {
  content: "\f5b3";
}
.fa-sad-tear:before {
  content: "\f5b4";
}
.fa-safari:before {
  content: "\f267";
}
.fa-salad:before {
  content: "\f81e";
}
.fa-sandwich:before {
  content: "\f81f";
}
.fa-sass:before {
  content: "\f41e";
}
.fa-satellite:before {
  content: "\f7bf";
}
.fa-satellite-dish:before {
  content: "\f7c0";
}
.fa-sausage:before {
  content: "\f820";
}
.fa-save:before {
  content: "\f0c7";
}
.fa-scalpel:before {
  content: "\f61d";
}
.fa-scalpel-path:before {
  content: "\f61e";
}
.fa-scanner:before {
  content: "\f488";
}
.fa-scanner-keyboard:before {
  content: "\f489";
}
.fa-scanner-touchscreen:before {
  content: "\f48a";
}
.fa-scarecrow:before {
  content: "\f70d";
}
.fa-scarf:before {
  content: "\f7c1";
}
.fa-schlix:before {
  content: "\f3ea";
}
.fa-school:before {
  content: "\f549";
}
.fa-screwdriver:before {
  content: "\f54a";
}
.fa-scribd:before {
  content: "\f28a";
}
.fa-scroll:before {
  content: "\f70e";
}
.fa-scroll-old:before {
  content: "\f70f";
}
.fa-scrubber:before {
  content: "\f2f8";
}
.fa-scythe:before {
  content: "\f710";
}
.fa-sd-card:before {
  content: "\f7c2";
}
.fa-search:before {
  content: "\f002";
}
.fa-search-dollar:before {
  content: "\f688";
}
.fa-search-location:before {
  content: "\f689";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-searchengin:before {
  content: "\f3eb";
}
.fa-seedling:before {
  content: "\f4d8";
}
.fa-sellcast:before {
  content: "\f2da";
}
.fa-sellsy:before {
  content: "\f213";
}
.fa-server:before {
  content: "\f233";
}
.fa-servicestack:before {
  content: "\f3ec";
}
.fa-shapes:before {
  content: "\f61f";
}
.fa-share:before {
  content: "\f064";
}
.fa-share-all:before {
  content: "\f367";
}
.fa-share-alt:before {
  content: "\f1e0";
}
.fa-share-alt-square:before {
  content: "\f1e1";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-sheep:before {
  content: "\f711";
}
.fa-shekel-sign:before {
  content: "\f20b";
}
.fa-shield:before {
  content: "\f132";
}
.fa-shield-alt:before {
  content: "\f3ed";
}
.fa-shield-check:before {
  content: "\f2f7";
}
.fa-shield-cross:before {
  content: "\f712";
}
.fa-ship:before {
  content: "\f21a";
}
.fa-shipping-fast:before {
  content: "\f48b";
}
.fa-shipping-timed:before {
  content: "\f48c";
}
.fa-shirtsinbulk:before {
  content: "\f214";
}
.fa-shish-kebab:before {
  content: "\f821";
}
.fa-shoe-prints:before {
  content: "\f54b";
}
.fa-shopping-bag:before {
  content: "\f290";
}
.fa-shopping-basket:before {
  content: "\f291";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-shopware:before {
  content: "\f5b5";
}
.fa-shovel:before {
  content: "\f713";
}
.fa-shovel-snow:before {
  content: "\f7c3";
}
.fa-shower:before {
  content: "\f2cc";
}
.fa-shredder:before {
  content: "\f68a";
}
.fa-shuttle-van:before {
  content: "\f5b6";
}
.fa-shuttlecock:before {
  content: "\f45b";
}
.fa-sickle:before {
  content: "\f822";
}
.fa-sigma:before {
  content: "\f68b";
}
.fa-sign:before {
  content: "\f4d9";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-sign-in-alt:before {
  content: "\f2f6";
}
.fa-sign-language:before {
  content: "\f2a7";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-sign-out-alt:before {
  content: "\f2f5";
}
.fa-signal:before {
  content: "\f012";
}
.fa-signal-1:before {
  content: "\f68c";
}
.fa-signal-2:before {
  content: "\f68d";
}
.fa-signal-3:before {
  content: "\f68e";
}
.fa-signal-4:before {
  content: "\f68f";
}
.fa-signal-alt:before {
  content: "\f690";
}
.fa-signal-alt-1:before {
  content: "\f691";
}
.fa-signal-alt-2:before {
  content: "\f692";
}
.fa-signal-alt-3:before {
  content: "\f693";
}
.fa-signal-alt-slash:before {
  content: "\f694";
}
.fa-signal-slash:before {
  content: "\f695";
}
.fa-signature:before {
  content: "\f5b7";
}
.fa-sim-card:before {
  content: "\f7c4";
}
.fa-simplybuilt:before {
  content: "\f215";
}
.fa-sistrix:before {
  content: "\f3ee";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-sith:before {
  content: "\f512";
}
.fa-skating:before {
  content: "\f7c5";
}
.fa-skeleton:before {
  content: "\f620";
}
.fa-sketch:before {
  content: "\f7c6";
}
.fa-ski-jump:before {
  content: "\f7c7";
}
.fa-ski-lift:before {
  content: "\f7c8";
}
.fa-skiing:before {
  content: "\f7c9";
}
.fa-skiing-nordic:before {
  content: "\f7ca";
}
.fa-skull:before {
  content: "\f54c";
}
.fa-skull-crossbones:before {
  content: "\f714";
}
.fa-skyatlas:before {
  content: "\f216";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-slack:before {
  content: "\f198";
}
.fa-slack-hash:before {
  content: "\f3ef";
}
.fa-slash:before {
  content: "\f715";
}
.fa-sledding:before {
  content: "\f7cb";
}
.fa-sleigh:before {
  content: "\f7cc";
}
.fa-sliders-h:before {
  content: "\f1de";
}
.fa-sliders-h-square:before {
  content: "\f3f0";
}
.fa-sliders-v:before {
  content: "\f3f1";
}
.fa-sliders-v-square:before {
  content: "\f3f2";
}
.fa-slideshare:before {
  content: "\f1e7";
}
.fa-smile:before {
  content: "\f118";
}
.fa-smile-beam:before {
  content: "\f5b8";
}
.fa-smile-plus:before {
  content: "\f5b9";
}
.fa-smile-wink:before {
  content: "\f4da";
}
.fa-smog:before {
  content: "\f75f";
}
.fa-smoke:before {
  content: "\f760";
}
.fa-smoking:before {
  content: "\f48d";
}
.fa-smoking-ban:before {
  content: "\f54d";
}
.fa-sms:before {
  content: "\f7cd";
}
.fa-snake:before {
  content: "\f716";
}
.fa-snapchat:before {
  content: "\f2ab";
}
.fa-snapchat-ghost:before {
  content: "\f2ac";
}
.fa-snapchat-square:before {
  content: "\f2ad";
}
.fa-snow-blowing:before {
  content: "\f761";
}
.fa-snowboarding:before {
  content: "\f7ce";
}
.fa-snowflake:before {
  content: "\f2dc";
}
.fa-snowflakes:before {
  content: "\f7cf";
}
.fa-snowman:before {
  content: "\f7d0";
}
.fa-snowmobile:before {
  content: "\f7d1";
}
.fa-snowplow:before {
  content: "\f7d2";
}
.fa-socks:before {
  content: "\f696";
}
.fa-solar-panel:before {
  content: "\f5ba";
}
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-alpha-down:before {
  content: "\f15d";
}
.fa-sort-alpha-up:before {
  content: "\f15e";
}
.fa-sort-amount-down:before {
  content: "\f160";
}
.fa-sort-amount-up:before {
  content: "\f161";
}
.fa-sort-down:before {
  content: "\f0dd";
}
.fa-sort-numeric-down:before {
  content: "\f162";
}
.fa-sort-numeric-up:before {
  content: "\f163";
}
.fa-sort-up:before {
  content: "\f0de";
}
.fa-soundcloud:before {
  content: "\f1be";
}
.fa-soup:before {
  content: "\f823";
}
.fa-sourcetree:before {
  content: "\f7d3";
}
.fa-spa:before {
  content: "\f5bb";
}
.fa-space-shuttle:before {
  content: "\f197";
}
.fa-spade:before {
  content: "\f2f4";
}
.fa-speakap:before {
  content: "\f3f3";
}
.fa-spider:before {
  content: "\f717";
}
.fa-spider-black-widow:before {
  content: "\f718";
}
.fa-spider-web:before {
  content: "\f719";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-spinner-third:before {
  content: "\f3f4";
}
.fa-splotch:before {
  content: "\f5bc";
}
.fa-spotify:before {
  content: "\f1bc";
}
.fa-spray-can:before {
  content: "\f5bd";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-square-full:before {
  content: "\f45c";
}
.fa-square-root:before {
  content: "\f697";
}
.fa-square-root-alt:before {
  content: "\f698";
}
.fa-squarespace:before {
  content: "\f5be";
}
.fa-squirrel:before {
  content: "\f71a";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-staff:before {
  content: "\f71b";
}
.fa-stamp:before {
  content: "\f5bf";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-and-crescent:before {
  content: "\f699";
}
.fa-star-christmas:before {
  content: "\f7d4";
}
.fa-star-exclamation:before {
  content: "\f2f3";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-star-half-alt:before {
  content: "\f5c0";
}
.fa-star-of-david:before {
  content: "\f69a";
}
.fa-star-of-life:before {
  content: "\f621";
}
.fa-stars:before {
  content: "\f762";
}
.fa-staylinked:before {
  content: "\f3f5";
}
.fa-steak:before {
  content: "\f824";
}
.fa-steam:before {
  content: "\f1b6";
}
.fa-steam-square:before {
  content: "\f1b7";
}
.fa-steam-symbol:before {
  content: "\f3f6";
}
.fa-steering-wheel:before {
  content: "\f622";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-sticker-mule:before {
  content: "\f3f7";
}
.fa-sticky-note:before {
  content: "\f249";
}
.fa-stocking:before {
  content: "\f7d5";
}
.fa-stomach:before {
  content: "\f623";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-stop-circle:before {
  content: "\f28d";
}
.fa-stopwatch:before {
  content: "\f2f2";
}
.fa-store:before {
  content: "\f54e";
}
.fa-store-alt:before {
  content: "\f54f";
}
.fa-strava:before {
  content: "\f428";
}
.fa-stream:before {
  content: "\f550";
}
.fa-street-view:before {
  content: "\f21d";
}
.fa-stretcher:before {
  content: "\f825";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-stripe:before {
  content: "\f429";
}
.fa-stripe-s:before {
  content: "\f42a";
}
.fa-stroopwafel:before {
  content: "\f551";
}
.fa-studiovinari:before {
  content: "\f3f8";
}
.fa-stumbleupon:before {
  content: "\f1a4";
}
.fa-stumbleupon-circle:before {
  content: "\f1a3";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-subway:before {
  content: "\f239";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-suitcase-rolling:before {
  content: "\f5c1";
}
.fa-sun:before {
  content: "\f185";
}
.fa-sun-cloud:before {
  content: "\f763";
}
.fa-sun-dust:before {
  content: "\f764";
}
.fa-sun-haze:before {
  content: "\f765";
}
.fa-sunrise:before {
  content: "\f766";
}
.fa-sunset:before {
  content: "\f767";
}
.fa-superpowers:before {
  content: "\f2dd";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-supple:before {
  content: "\f3f9";
}
.fa-surprise:before {
  content: "\f5c2";
}
.fa-suse:before {
  content: "\f7d6";
}
.fa-swatchbook:before {
  content: "\f5c3";
}
.fa-swimmer:before {
  content: "\f5c4";
}
.fa-swimming-pool:before {
  content: "\f5c5";
}
.fa-sword:before {
  content: "\f71c";
}
.fa-swords:before {
  content: "\f71d";
}
.fa-synagogue:before {
  content: "\f69b";
}
.fa-sync:before {
  content: "\f021";
}
.fa-sync-alt:before {
  content: "\f2f1";
}
.fa-syringe:before {
  content: "\f48e";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-table-tennis:before {
  content: "\f45d";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-tablet-alt:before {
  content: "\f3fa";
}
.fa-tablet-android:before {
  content: "\f3fb";
}
.fa-tablet-android-alt:before {
  content: "\f3fc";
}
.fa-tablet-rugged:before {
  content: "\f48f";
}
.fa-tablets:before {
  content: "\f490";
}
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-tachometer-alt:before {
  content: "\f3fd";
}
.fa-tachometer-alt-average:before {
  content: "\f624";
}
.fa-tachometer-alt-fast:before {
  content: "\f625";
}
.fa-tachometer-alt-fastest:before {
  content: "\f626";
}
.fa-tachometer-alt-slow:before {
  content: "\f627";
}
.fa-tachometer-alt-slowest:before {
  content: "\f628";
}
.fa-tachometer-average:before {
  content: "\f629";
}
.fa-tachometer-fast:before {
  content: "\f62a";
}
.fa-tachometer-fastest:before {
  content: "\f62b";
}
.fa-tachometer-slow:before {
  content: "\f62c";
}
.fa-tachometer-slowest:before {
  content: "\f62d";
}
.fa-taco:before {
  content: "\f826";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-tally:before {
  content: "\f69c";
}
.fa-tanakh:before {
  content: "\f827";
}
.fa-tape:before {
  content: "\f4db";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-tasks-alt:before {
  content: "\f828";
}
.fa-taxi:before {
  content: "\f1ba";
}
.fa-teamspeak:before {
  content: "\f4f9";
}
.fa-teeth:before {
  content: "\f62e";
}
.fa-teeth-open:before {
  content: "\f62f";
}
.fa-telegram:before {
  content: "\f2c6";
}
.fa-telegram-plane:before {
  content: "\f3fe";
}
.fa-temperature-frigid:before {
  content: "\f768";
}
.fa-temperature-high:before {
  content: "\f769";
}
.fa-temperature-hot:before {
  content: "\f76a";
}
.fa-temperature-low:before {
  content: "\f76b";
}
.fa-tencent-weibo:before {
  content: "\f1d5";
}
.fa-tenge:before {
  content: "\f7d7";
}
.fa-tennis-ball:before {
  content: "\f45e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-the-red-yeti:before {
  content: "\f69d";
}
.fa-theater-masks:before {
  content: "\f630";
}
.fa-themeco:before {
  content: "\f5c6";
}
.fa-themeisle:before {
  content: "\f2b2";
}
.fa-thermometer:before {
  content: "\f491";
}
.fa-thermometer-empty:before {
  content: "\f2cb";
}
.fa-thermometer-full:before {
  content: "\f2c7";
}
.fa-thermometer-half:before {
  content: "\f2c9";
}
.fa-thermometer-quarter:before {
  content: "\f2ca";
}
.fa-thermometer-three-quarters:before {
  content: "\f2c8";
}
.fa-theta:before {
  content: "\f69e";
}
.fa-think-peaks:before {
  content: "\f731";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbtack:before {
  content: "\f08d";
}
.fa-thunderstorm:before {
  content: "\f76c";
}
.fa-thunderstorm-moon:before {
  content: "\f76d";
}
.fa-thunderstorm-sun:before {
  content: "\f76e";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-ticket-alt:before {
  content: "\f3ff";
}
.fa-tilde:before {
  content: "\f69f";
}
.fa-times:before {
  content: "\f00d";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-times-hexagon:before {
  content: "\f2ee";
}
.fa-times-octagon:before {
  content: "\f2f0";
}
.fa-times-square:before {
  content: "\f2d3";
}
.fa-tint:before {
  content: "\f043";
}
.fa-tint-slash:before {
  content: "\f5c7";
}
.fa-tire:before {
  content: "\f631";
}
.fa-tire-flat:before {
  content: "\f632";
}
.fa-tire-pressure-warning:before {
  content: "\f633";
}
.fa-tire-rugged:before {
  content: "\f634";
}
.fa-tired:before {
  content: "\f5c8";
}
.fa-toggle-off:before {
  content: "\f204";
}
.fa-toggle-on:before {
  content: "\f205";
}
.fa-toilet:before {
  content: "\f7d8";
}
.fa-toilet-paper:before {
  content: "\f71e";
}
.fa-toilet-paper-alt:before {
  content: "\f71f";
}
.fa-tombstone:before {
  content: "\f720";
}
.fa-tombstone-alt:before {
  content: "\f721";
}
.fa-toolbox:before {
  content: "\f552";
}
.fa-tools:before {
  content: "\f7d9";
}
.fa-tooth:before {
  content: "\f5c9";
}
.fa-toothbrush:before {
  content: "\f635";
}
.fa-torah:before {
  content: "\f6a0";
}
.fa-torii-gate:before {
  content: "\f6a1";
}
.fa-tornado:before {
  content: "\f76f";
}
.fa-tractor:before {
  content: "\f722";
}
.fa-trade-federation:before {
  content: "\f513";
}
.fa-trademark:before {
  content: "\f25c";
}
.fa-traffic-cone:before {
  content: "\f636";
}
.fa-traffic-light:before {
  content: "\f637";
}
.fa-traffic-light-go:before {
  content: "\f638";
}
.fa-traffic-light-slow:before {
  content: "\f639";
}
.fa-traffic-light-stop:before {
  content: "\f63a";
}
.fa-train:before {
  content: "\f238";
}
.fa-tram:before {
  content: "\f7da";
}
.fa-transgender:before {
  content: "\f224";
}
.fa-transgender-alt:before {
  content: "\f225";
}
.fa-trash:before {
  content: "\f1f8";
}
.fa-trash-alt:before {
  content: "\f2ed";
}
.fa-trash-restore:before {
  content: "\f829";
}
.fa-trash-restore-alt:before {
  content: "\f82a";
}
.fa-treasure-chest:before {
  content: "\f723";
}
.fa-tree:before {
  content: "\f1bb";
}
.fa-tree-alt:before {
  content: "\f400";
}
.fa-tree-christmas:before {
  content: "\f7db";
}
.fa-tree-decorated:before {
  content: "\f7dc";
}
.fa-tree-large:before {
  content: "\f7dd";
}
.fa-tree-palm:before {
  content: "\f82b";
}
.fa-trees:before {
  content: "\f724";
}
.fa-trello:before {
  content: "\f181";
}
.fa-triangle:before {
  content: "\f2ec";
}
.fa-tripadvisor:before {
  content: "\f262";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-trophy-alt:before {
  content: "\f2eb";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-truck-container:before {
  content: "\f4dc";
}
.fa-truck-couch:before {
  content: "\f4dd";
}
.fa-truck-loading:before {
  content: "\f4de";
}
.fa-truck-monster:before {
  content: "\f63b";
}
.fa-truck-moving:before {
  content: "\f4df";
}
.fa-truck-pickup:before {
  content: "\f63c";
}
.fa-truck-plow:before {
  content: "\f7de";
}
.fa-truck-ramp:before {
  content: "\f4e0";
}
.fa-tshirt:before {
  content: "\f553";
}
.fa-tty:before {
  content: "\f1e4";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-turkey:before {
  content: "\f725";
}
.fa-turtle:before {
  content: "\f726";
}
.fa-tv:before {
  content: "\f26c";
}
.fa-tv-retro:before {
  content: "\f401";
}
.fa-twitch:before {
  content: "\f1e8";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-typo3:before {
  content: "\f42b";
}
.fa-uber:before {
  content: "\f402";
}
.fa-ubuntu:before {
  content: "\f7df";
}
.fa-uikit:before {
  content: "\f403";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-umbrella-beach:before {
  content: "\f5ca";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-undo:before {
  content: "\f0e2";
}
.fa-undo-alt:before {
  content: "\f2ea";
}
.fa-unicorn:before {
  content: "\f727";
}
.fa-union:before {
  content: "\f6a2";
}
.fa-uniregistry:before {
  content: "\f404";
}
.fa-universal-access:before {
  content: "\f29a";
}
.fa-university:before {
  content: "\f19c";
}
.fa-unlink:before {
  content: "\f127";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-untappd:before {
  content: "\f405";
}
.fa-upload:before {
  content: "\f093";
}
.fa-ups:before {
  content: "\f7e0";
}
.fa-usb:before {
  content: "\f287";
}
.fa-usd-circle:before {
  content: "\f2e8";
}
.fa-usd-square:before {
  content: "\f2e9";
}
.fa-user:before {
  content: "\f007";
}
.fa-user-alt:before {
  content: "\f406";
}
.fa-user-alt-slash:before {
  content: "\f4fa";
}
.fa-user-astronaut:before {
  content: "\f4fb";
}
.fa-user-chart:before {
  content: "\f6a3";
}
.fa-user-check:before {
  content: "\f4fc";
}
.fa-user-circle:before {
  content: "\f2bd";
}
.fa-user-clock:before {
  content: "\f4fd";
}
.fa-user-cog:before {
  content: "\f4fe";
}
.fa-user-crown:before {
  content: "\f6a4";
}
.fa-user-edit:before {
  content: "\f4ff";
}
.fa-user-friends:before {
  content: "\f500";
}
.fa-user-graduate:before {
  content: "\f501";
}
.fa-user-hard-hat:before {
  content: "\f82c";
}
.fa-user-headset:before {
  content: "\f82d";
}
.fa-user-injured:before {
  content: "\f728";
}
.fa-user-lock:before {
  content: "\f502";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-user-md-chat:before {
  content: "\f82e";
}
.fa-user-minus:before {
  content: "\f503";
}
.fa-user-ninja:before {
  content: "\f504";
}
.fa-user-nurse:before {
  content: "\f82f";
}
.fa-user-plus:before {
  content: "\f234";
}
.fa-user-secret:before {
  content: "\f21b";
}
.fa-user-shield:before {
  content: "\f505";
}
.fa-user-slash:before {
  content: "\f506";
}
.fa-user-tag:before {
  content: "\f507";
}
.fa-user-tie:before {
  content: "\f508";
}
.fa-user-times:before {
  content: "\f235";
}
.fa-users:before {
  content: "\f0c0";
}
.fa-users-class:before {
  content: "\f63d";
}
.fa-users-cog:before {
  content: "\f509";
}
.fa-users-crown:before {
  content: "\f6a5";
}
.fa-users-medical:before {
  content: "\f830";
}
.fa-usps:before {
  content: "\f7e1";
}
.fa-ussunnah:before {
  content: "\f407";
}
.fa-utensil-fork:before {
  content: "\f2e3";
}
.fa-utensil-knife:before {
  content: "\f2e4";
}
.fa-utensil-spoon:before {
  content: "\f2e5";
}
.fa-utensils:before {
  content: "\f2e7";
}
.fa-utensils-alt:before {
  content: "\f2e6";
}
.fa-vaadin:before {
  content: "\f408";
}
.fa-value-absolute:before {
  content: "\f6a6";
}
.fa-vector-square:before {
  content: "\f5cb";
}
.fa-venus:before {
  content: "\f221";
}
.fa-venus-double:before {
  content: "\f226";
}
.fa-venus-mars:before {
  content: "\f228";
}
.fa-viacoin:before {
  content: "\f237";
}
.fa-viadeo:before {
  content: "\f2a9";
}
.fa-viadeo-square:before {
  content: "\f2aa";
}
.fa-vial:before {
  content: "\f492";
}
.fa-vials:before {
  content: "\f493";
}
.fa-viber:before {
  content: "\f409";
}
.fa-video:before {
  content: "\f03d";
}
.fa-video-plus:before {
  content: "\f4e1";
}
.fa-video-slash:before {
  content: "\f4e2";
}
.fa-vihara:before {
  content: "\f6a7";
}
.fa-vimeo:before {
  content: "\f40a";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-vimeo-v:before {
  content: "\f27d";
}
.fa-vine:before {
  content: "\f1ca";
}
.fa-vk:before {
  content: "\f189";
}
.fa-vnv:before {
  content: "\f40b";
}
.fa-volcano:before {
  content: "\f770";
}
.fa-volleyball-ball:before {
  content: "\f45f";
}
.fa-volume:before {
  content: "\f6a8";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-mute:before {
  content: "\f6a9";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-slash:before {
  content: "\f2e2";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-vote-nay:before {
  content: "\f771";
}
.fa-vote-yea:before {
  content: "\f772";
}
.fa-vr-cardboard:before {
  content: "\f729";
}
.fa-vuejs:before {
  content: "\f41f";
}
.fa-walker:before {
  content: "\f831";
}
.fa-walking:before {
  content: "\f554";
}
.fa-wallet:before {
  content: "\f555";
}
.fa-wand:before {
  content: "\f72a";
}
.fa-wand-magic:before {
  content: "\f72b";
}
.fa-warehouse:before {
  content: "\f494";
}
.fa-warehouse-alt:before {
  content: "\f495";
}
.fa-watch:before {
  content: "\f2e1";
}
.fa-watch-fitness:before {
  content: "\f63e";
}
.fa-water:before {
  content: "\f773";
}
.fa-water-lower:before {
  content: "\f774";
}
.fa-water-rise:before {
  content: "\f775";
}
.fa-webcam:before {
  content: "\f832";
}
.fa-webcam-slash:before {
  content: "\f833";
}
.fa-weebly:before {
  content: "\f5cc";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-weight:before {
  content: "\f496";
}
.fa-weight-hanging:before {
  content: "\f5cd";
}
.fa-weixin:before {
  content: "\f1d7";
}
.fa-whale:before {
  content: "\f72c";
}
.fa-whatsapp:before {
  content: "\f232";
}
.fa-whatsapp-square:before {
  content: "\f40c";
}
.fa-wheat:before {
  content: "\f72d";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-whistle:before {
  content: "\f460";
}
.fa-whmcs:before {
  content: "\f40d";
}
.fa-wifi:before {
  content: "\f1eb";
}
.fa-wifi-1:before {
  content: "\f6aa";
}
.fa-wifi-2:before {
  content: "\f6ab";
}
.fa-wifi-slash:before {
  content: "\f6ac";
}
.fa-wikipedia-w:before {
  content: "\f266";
}
.fa-wind:before {
  content: "\f72e";
}
.fa-wind-warning:before {
  content: "\f776";
}
.fa-window:before {
  content: "\f40e";
}
.fa-window-alt:before {
  content: "\f40f";
}
.fa-window-close:before {
  content: "\f410";
}
.fa-window-maximize:before {
  content: "\f2d0";
}
.fa-window-minimize:before {
  content: "\f2d1";
}
.fa-window-restore:before {
  content: "\f2d2";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-windsock:before {
  content: "\f777";
}
.fa-wine-bottle:before {
  content: "\f72f";
}
.fa-wine-glass:before {
  content: "\f4e3";
}
.fa-wine-glass-alt:before {
  content: "\f5ce";
}
.fa-wix:before {
  content: "\f5cf";
}
.fa-wizards-of-the-coast:before {
  content: "\f730";
}
.fa-wolf-pack-battalion:before {
  content: "\f514";
}
.fa-won-sign:before {
  content: "\f159";
}
.fa-wordpress:before {
  content: "\f19a";
}
.fa-wordpress-simple:before {
  content: "\f411";
}
.fa-wpbeginner:before {
  content: "\f297";
}
.fa-wpexplorer:before {
  content: "\f2de";
}
.fa-wpforms:before {
  content: "\f298";
}
.fa-wpressr:before {
  content: "\f3e4";
}
.fa-wreath:before {
  content: "\f7e2";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-x-ray:before {
  content: "\f497";
}
.fa-xbox:before {
  content: "\f412";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-y-combinator:before {
  content: "\f23b";
}
.fa-yahoo:before {
  content: "\f19e";
}
.fa-yandex:before {
  content: "\f413";
}
.fa-yandex-international:before {
  content: "\f414";
}
.fa-yarn:before {
  content: "\f7e3";
}
.fa-yelp:before {
  content: "\f1e9";
}
.fa-yen-sign:before {
  content: "\f157";
}
.fa-yin-yang:before {
  content: "\f6ad";
}
.fa-yoast:before {
  content: "\f2b1";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-youtube-square:before {
  content: "\f431";
}
.fa-zhihu:before {
  content: "\f63f";
}
.sr-only {
  border: 0;
  clip: rect(0, 0, 0, 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  clip: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  position: static;
  width: auto;
}
.debugResolution .debugResolution-output:before {
  content: "Full 800px - 1200px";
}
@media (min-width: 1200px) {
  .debugResolution .debugResolution-output:before {
    content: "Max > 1200px";
  }
}
@media (max-width: 800px) {
  .debugResolution .debugResolution-output:before {
    content: "Wide < 800px";
  }
}
@media (max-width: 610px) {
  .debugResolution .debugResolution-output:before {
    content: "Medium < 610px";
  }
}
@media (max-width: 480px) {
  .debugResolution .debugResolution-output:before {
    content: "Narrow < 480px";
  }
}
.xfmgThumbnail {
  display: flex;
  position: relative;
  width: 100px;
  vertical-align: top;
  white-space: nowrap;
  word-wrap: normal;
  text-align: center;
}
.xfmgThumbnail.xfmgThumbnail.is-selected {
  border: 2px solid #47a7eb;
}
.xfmgThumbnail.xfmgThumbnail--fluid {
  width: inherit;
}
.xfmgThumbnail.xfmgThumbnail--smallest {
  width: 50px;
}
.xfmgThumbnail.xfmgThumbnail--small {
  width: 60px;
}
.xfmgThumbnail.xfmgThumbnail--noThumb {
  color: #141414;
  background: #f5f5f5;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
}
.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f141";
}
.xfmgThumbnail--upload.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f093" !important;
}
.xfmgThumbnail--audio.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f001";
}
.xfmgThumbnail--image.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f03e";
}
.xfmgThumbnail--video.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f03d";
}
.xfmgThumbnail--embed.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f167";
}
.xfmgThumbnail--album.xfmgThumbnail.xfmgThumbnail--noThumb .xfmgThumbnail-icon::before {
  content: "\f07c";
}
.xfmgThumbnail.xfmgThumbnail--notVisible .xfmgThumbnail-image {
  opacity: 0.3;
  z-index: 200;
}
.xfmgThumbnail.xfmgThumbnail--notVisible.xfmgThumbnail--notVisible--deleted .xfmgThumbnail-icon::before {
  content: "\f2ed";
}
.xfmgThumbnail.xfmgThumbnail--notVisible.xfmgThumbnail--notVisible--moderated .xfmgThumbnail-icon::before {
  content: "\f132";
}
.xfmgThumbnail-image {
  width: 100%;
  height: 100%;
  vertical-align: top;
}
.xfmgThumbnail-icon {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  color: #8c8c8c;
  -webkit-text-fill-color: #8c8c8c;
  -webkit-text-stroke-color: #595959;
  -webkit-text-stroke-width: 1px;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 60px;
}
.xfmgThumbnail--upload .xfmgThumbnail-icon.xfmgThumbnail-icon {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 60px;
}
.xfmgThumbnail--embed:not(.xfmgThumbnail--notVisible) .xfmgThumbnail-icon {
  font-family: 'Font Awesome 5 Brands';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 60px;
}
.xfmgThumbnail--smallest .xfmgThumbnail-icon,
.xfmgThumbnail--iconSmallest .xfmgThumbnail-icon {
  font-size: 25px;
}
.xfmgThumbnail--small .xfmgThumbnail-icon,
.xfmgThumbnail--iconSmall .xfmgThumbnail-icon {
  font-size: 30px;
}
@media (max-width: 610px) {
  .xfmgThumbnail-icon {
    font-size: 50px;
  }
}
@media (max-width: 480px) {
  .xfmgThumbnail-icon {
    font-size: 30px;
  }
}
.avatar.avatar--resourceIconDefault {
  color: #8c8c8c !important;
  background: #e2e2e2 !important;
  text-align: center;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.avatar.avatar--resourceIconDefault > span:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f013";
}

/********* public:app.less ********/
.u-anchorTarget {
  height: 37px;
  margin-top: -37px;
}
.p-pageWrapper {
  position: relative;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: #fefefe;
  background: -moz-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(12%, #f6f6f6), color-stop(100%, #e8e8e8));
  background: -webkit-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -o-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: -ms-linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  background: linear-gradient(top, #ffffff 0, #f6f6f6 12%, #e8e8e8 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#e8e8e8', GradientType=0);
}
.p-offCanvasAccountLink {
  display: none;
}
@media (max-width: 359px) {
  .p-offCanvasAccountLink {
    display: block;
  }
}
@media (max-width: 359px) {
  .p-offCanvasRegisterLink {
    display: block;
  }
}
.p-staffBar {
  font-size: 13px;
  color: #ececec;
  background: #505050;
  border-bottom: 1px solid #464646;
}
.p-staffBar a {
  color: inherit;
}
.p-staffBar .hScroller-action {
  color: #ececec;
}
.p-staffBar .hScroller-action:hover {
  color: #d3d3d3;
}
.p-staffBar .hScroller-action.hScroller-action--start {
  background: #505050;
  background: linear-gradient(to right, #505050 66%, rgba(80, 80, 80, 0) 100%);
}
.p-staffBar .hScroller-action.hScroller-action--end {
  background: #505050;
  background: linear-gradient(to right, rgba(80, 80, 80, 0) 0%, #505050 33%);
}
.p-staffBar-inner {
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 4px;
  padding-bottom: 4px;
}
@supports (padding: max(0px)) {
  .p-staffBar-inner {
    padding-left: max(10px, env(safe-area-inset-left));
    padding-right: max(10px, env(safe-area-inset-right));
  }
}
.p-staffBar-inner:before,
.p-staffBar-inner:after {
  content: " ";
  display: table;
}
.p-staffBar-inner:after {
  clear: both;
}
.p-staffBar-link {
  display: inline-block;
  vertical-align: top;
  color: inherit;
  padding: 4px 6px;
  margin-right: .35em;
}
.p-staffBar-link:last-child {
  margin-right: 0;
}
.p-staffBar-link:hover {
  text-decoration: none;
  background: #5f5f5f;
  border-radius: 2px;
}
.p-header {
  color: #141414;
  height: 120px;
}
.p-header a {
  color: inherit;
}
.p-header-inner {
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 10px;
  padding-right: 10px;
}
@supports (padding: max(0px)) {
  .p-header-inner {
    padding-left: max(10px, env(safe-area-inset-left));
    padding-right: max(10px, env(safe-area-inset-right));
  }
}
.p-header-content {
  padding: 6px 0;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
  max-width: 100%;
}
.p-header-logo {
  vertical-align: middle;
  margin-right: auto;
}
.p-header-logo a {
  color: inherit;
  text-decoration: none;
}
.p-header-logo.p-header-logo--text {
  font-size: 24px;
}
.p-header-logo.p-header-logo--image img {
  vertical-align: bottom;
  max-width: 100%;
  max-height: 200px;
}
@media (max-width: 610px) {
  .has-js .p-header {
    /* display: none; */
    height: 165px;
  }
}
@media (max-width: 480px) {
  .p-header-logo {
    max-width: 300px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 10px;
  }
  .p-header-logo.p-header-logo--text {
    font-size: 17px;
    font-weight: 400;
    overflow: hidden;
    white-space: nowrap;
    word-wrap: normal;
    text-overflow: ellipsis;
  }
}
.p-navSticky {
  z-index: 100;
}
.p-navSticky.is-sticky {
  z-index: 400;
  box-shadow: 0 0 8px 3px rgba(0, 0, 0, 0.3);
}
@supports (position: sticky) or (position: -webkit-sticky) {
  .p-navSticky {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
  }
  .p-navSticky.is-sticky-broken,
  .p-navSticky.is-sticky-disabled {
    position: static;
    top: auto;
  }
}
.p-navEl:before,
.p-navEl:after {
  content: " ";
  display: table;
}
.p-navEl:after {
  clear: both;
}
.p-navEl > a {
  border: none !important;
}
.p-navEl-linkHolder {
  float: left;
}
.p-navEl-link {
  float: left;
  -webkit-transition:  opacity 0.25s ease, background 0.25s ease;
  transition:  opacity 0.25s ease, background 0.25s ease;
}
.p-navEl-link.p-navEl-link--menuTrigger {
  cursor: pointer;
}
.p-navEl-link.p-navEl-link--menuTrigger:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f0d7";
  font-weight: 900;
  unicode-bidi: isolate;
  opacity: .5;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
}
.p-navEl-link.p-navEl-link--menuTrigger:hover:after {
  opacity: 1;
}
.p-navEl-splitTrigger {
  float: left;
  /* opacity: .5; */
  cursor: pointer;
  text-decoration: none;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.p-navEl-splitTrigger:after {
  /*
		.m-faBase();
		.m-faContent(@fa-var-caret-down, .58em);
		*/
}
.p-navEl-splitTrigger:hover {
  opacity: 1;
  text-decoration: none;
}
.p-nav {
  color: #141414;
  background: -moz-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ffffff), color-stop(50%, #f1f1f1), color-stop(51%, #e1e1e1), color-stop(100%, #f6f6f6));
  background: -webkit-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -o-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: -ms-linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  background: linear-gradient(top, #ffffff 0, #f1f1f1 50%, #e1e1e1 51%, #f6f6f6 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6', GradientType=0);
  font-family: Arial, sans-serif;
  border: 1px solid #a8a8a8;
  border-bottom-style: solid;
  border-bottom-color: #888888;
  border-radius: 5px;
  height: 38px;
}
.p-nav a {
  color: inherit;
}
.p-navSticky.is-sticky .p-nav .p-nav-list .p-navEl.is-selected,
.p-navSticky.is-sticky .p-nav .p-account {
  border-radius: 0;
}
.p-nav-inner {
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 0px;
  padding-right: 0px;
  display: flex;
  align-items: flex-end;
}
@supports (padding: max(0px)) {
  .p-nav-inner {
    padding-left: max(0px, env(safe-area-inset-left));
    padding-right: max(0px, env(safe-area-inset-right));
  }
}
.p-nav-inner:before,
.p-nav-inner:after {
  content: " ";
  display: table;
}
.p-nav-inner:after {
  clear: both;
}
.p-nav .p-nav-menuTrigger {
  display: none;
  vertical-align: middle;
  align-self: center;
  margin-left: 4px;
  margin-right: 5px;
  padding: 3px 8px;
}
.p-nav .p-nav-menuTrigger:hover {
  text-decoration: none;
}
.p-nav .p-nav-menuTrigger i:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 24px;
  content: "\f0c9";
  display: inline-block;
  width: 0.88em;
  vertical-align: bottom;
}
.p-nav .p-nav-menuTrigger .p-nav-menuText {
  display: none;
}
.p-nav-smallLogo {
  display: none;
  max-width: 100px;
  align-self: center;
}
.p-nav-smallLogo img {
  display: block;
  max-height: 27px;
}
.p-nav-scroller {
  margin-right: auto;
  max-width: 100%;
}
.p-nav-scroller .hScroller-scroll:not(.is-calculated) {
  overflow: hidden;
}
.p-nav-scroller .hScroller-action {
  color: #141414;
}
.p-nav-scroller .hScroller-action:hover {
  color: #000000;
}
.p-nav-scroller .hScroller-action.hScroller-action--start {
  background: transparent;
  background: linear-gradient(to right, transparent 66%, rgba(0, 0, 0, 0) 100%);
}
.p-nav-scroller .hScroller-action.hScroller-action--end {
  background: transparent;
  background: linear-gradient(to right, rgba(0, 0, 0, 0) 0%, transparent 33%);
}
.p-nav-list {
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 0;
}
.p-nav-list:before,
.p-nav-list:after {
  content: " ";
  display: table;
}
.p-nav-list:after {
  clear: both;
}
.p-nav-list:before,
.p-nav-list:after {
  display: inline-block;
  /* width: 10px; */
  content: '';
}
.p-nav-list > li {
  display: inline-block;
  vertical-align: bottom;
  font-size: 15px;
}
.p-nav-list > li:first-child {
  margin-left: 0;
}
.p-nav-list .p-navEl-link {
  padding: 0 15px;
}
.p-nav-list .p-navEl-link.p-navEl-link--splitMenu {
  padding-right: 3.75px;
}
.p-nav-list .p-navEl-link.p-navEl-link--menuTrigger {
  padding-right: 5px;
}
.p-nav-list .p-navEl-link.p-navEl-link--menuTrigger:after {
  padding-left: 8.75px;
}
.p-nav-list .p-navEl-splitTrigger {
  /* padding: 0 ((@padding) / 3); */
  padding: 0 15px;
}
.p-nav-list .p-navEl {
  font-size: 22px;
  color: #141414;
  text-decoration: none;
  border-bottom: 1px solid transparent;
  border-left: 1px solid transparent;
  border-right: 1px solid transparent;
  display: block;
  float: left;
  vertical-align: text-bottom;
  text-align: center;
  outline: 0 none;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.p-nav-list .p-navEl.is-selected {
  color: #141414;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.p-nav-list .p-navEl.is-selected .p-navEl-link {
  padding-right: 15px;
}
.p-nav-list .p-navEl.is-selected .p-navEl-link:hover {
  background: none;
  text-decoration: none;
}
.p-nav-list .p-navEl.is-selected .p-navEl-splitTrigger {
  display: none;
}
.p-nav-list .p-navEl:not(.is-selected):not(.is-menuOpen):hover,
.p-nav-list .p-navEl:not(.is-selected):not(.is-menuOpen) .p-navEl-link:hover,
.p-nav-list .p-navEl:not(.is-selected):not(.is-menuOpen) .p-navEl-splitTrigger:hover {
  text-decoration: none;
  background: #fefefe;
  border-bottom: 1px solid #a8a8a8;
  border-left: 1px solid #d8d8d8;
  border-right: 1px solid #d8d8d8;
}
.p-nav-list .p-navEl.is-menuOpen {
  color: #fefefe;
  text-decoration: none;
  background: rgba(71, 167, 235, 0.5);
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
}
.p-nav-list .p-navEl.is-menuOpen a {
  text-decoration: none;
  opacity: 1;
}
.p-nav-list .p-navEl-link,
.p-nav-list .p-navEl-splitTrigger {
  padding-top: 3px;
  padding-bottom: 3px;
}
.p-navSticky--primary.is-sticky .p-nav-list .p-navEl-link.p-navEl-link--splitMenu {
  padding-right: 3.75px;
}
.p-navSticky--primary.is-sticky .p-nav-list .p-navEl.is-selected .p-navEl-splitTrigger {
  display: inline;
  position: relative;
}
.p-navSticky--primary.is-sticky .p-nav-list .p-navEl.is-selected .p-navEl-splitTrigger:before {
  content: '';
  position: absolute;
  left: 0;
  top: 5px;
  bottom: 5px;
  width: 0;
  border-left: 1px solid rgba(20, 20, 20, 0.35);
}
@media (max-width: 610px) {
  .has-js .p-nav-inner {
    min-height: 36px;
  }
  .has-js .p-nav .p-nav-menuTrigger {
    display: inline-block;
  }
  .has-js .p-nav-smallLogo {
    /* display: inline-block; */
  }
  .has-js .p-nav-scroller {
    display: none;
  }
}
.p-nav-opposite {
  margin-left: auto;
  /* margin-right: 10px; */
  text-align: right;
  flex-shrink: 0;
}
.p-navgroup,
.p-account {
  float: left;
  /*
	background: fade(rgb(20, 20, 20), 15%);
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	*/
}
.p-navgroup:before,
.p-account:before,
.p-navgroup:after,
.p-account:after {
  content: " ";
  display: table;
}
.p-navgroup:after,
.p-account:after {
  clear: both;
}
.p-navgroup.p-discovery,
.p-account.p-discovery {
  margin-left: .5em;
}
.p-navgroup.p-discovery.p-discovery--noSearch,
.p-account.p-discovery.p-discovery--noSearch {
  margin-left: 0;
}
.p-navgroup-link {
  float: left;
  border-left: 1px solid transparent;
  border-right: 1px solid transparent;
  border-bottom: 1px solid transparent;
  font-size: 22px;
  padding: 3px 10px;
  /* border-left: 1px solid fade(rgb(20, 20, 20), 15%); */
}
.p-navgroup-link:first-of-type {
  /* border-top-left-radius: 4px;
		border-left: none; */
}
.p-navgroup-link:last-of-type {
  /* border-top-right-radius: 4px; */
}
.p-navgroup-link:hover {
  text-decoration: none;
  /* background: darken(fade(rgb(20, 20, 20), 15%), 5%); */
  background: #fff;
  border-left: 1px solid #d8d8d8;
  border-right: 1px solid #d8d8d8;
  border-bottom: 1px solid #a8a8a8;
}
.p-navgroup-link.p-navgroup-link--search {
  border: none;
  border-radius: 3px;
  padding: 0px;
  font-size: 18px;
  float: none;
}
.p-navgroup-link.p-navgroup-link--search:hover {
  background: none;
}
.p-navgroup-link.p-navgroup-link--search.is-menuOpen {
  background: none;
}
.p-navgroup-link.p-navgroup-link--user {
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
  max-width: 150px;
}
.p-navgroup-link.p-navgroup-link--user .avatar {
  width: 21px;
  height: 21px;
  font-size: 13px;
}
.p-navgroup-link.badgeContainer {
  opacity: .6;
  position: relative;
}
.p-navgroup-link.badgeContainer:after {
  position: absolute;
  left: 4px;
  top: 1px;
  padding: 1px 3px;
  margin: 0;
  font-size: 10px;
  line-height: 11px;
}
.p-navgroup-link.badgeContainer:hover,
.p-navgroup-link.badgeContainer.badgeContainer--highlighted {
  opacity: 1;
}
.p-navgroup-link.is-menuOpen {
  color: #fefefe;
  text-decoration: none;
  background: rgba(71, 167, 235, 0.5);
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
  opacity: 1;
}
.p-navgroup-link.p-navgroup-link--iconic i:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  display: inline-block;
  min-width: 1.2em;
  text-align: center;
}
.p-navgroup-link.p-navgroup-link--conversations i:after {
  content: "\f0e0";
  display: inline-block;
  width: 1em;
}
.p-navgroup-link.p-navgroup-link--alerts i:after {
  content: "\f0f3";
  display: inline-block;
  width: 0.88em;
}
.p-navgroup-link.p-navgroup-link--bookmarks i:after {
  content: "\f02e";
  display: inline-block;
  width: 0.75em;
}
.p-navgroup-link.p-navgroup-link--whatsnew i:after {
  content: "\f0e7";
  display: inline-block;
  width: 0.63em;
}
.p-navgroup-link.p-navgroup-link--search i:after {
  content: "\f002";
  display: inline-block;
  width: 1em;
}
.p-search-right {
  float: right;
}
.p-search-right:after {
  clear: both;
}
.p-navgroup-link--whatsnew {
  display: none;
}
.p-navgroup-link:first-of-type.p-navgroup-link--whatsnew + .p-navgroup-link {
  border-top-left-radius: 4px;
  border-left: none;
}
/* TMX NAV STYLING */
.tmx-menu-container {
  min-width: 200px;
}
.menu-content.tmx {
  overflow: visible;
}
.tmx-menu {
  /* display: none; */
}
.tmx-menu > li > ul,
.tmx-menu > li > ul > li > ul {
  display: none;
  background: #fff;
}
.tmx-menu > li > a > img,
.tmx-menu > li > ul img,
.tmx-menu > li > ul > li > a > img {
  max-width: 24px;
  height: auto;
  vertical-align: middle;
  padding-right: 5px;
  position: relative;
  top: -2px;
}
.tmx-menu {
  overflow: visible;
  padding: 0px;
  margin: 0px;
}
.tmx-menu > li,
.tmx-menu > li > ul > li,
.tmx-menu > li > ul > li > ul > li {
  position: relative;
  border-top: 1px solid #d8d8d8;
  list-style: none;
}
.tmx-menu > li,
.tmx-menu > li > a,
.tmx-menu > li > ul > li,
.tmx-menu > li > ul > li > a,
.tmx-menu > li > ul > li > ul > li,
.tmx-menu > li > ul > li > ul > li > a,
.secondaryContent.blockLinksList.xengallery > li,
.secondaryContent.blockLinksList.xengallery > li > a,
.secondaryContent.blockLinksList.xengallery > ul > li,
.secondaryContent.blockLinksList.xengallery > ul > li > a,
.col1.blockLinksList > li,
.col1.blockLinksList > li > a,
.col2.blockLinksList > li,
.col2.blockLinksList > li > a {
  font-size: 13px;
}
.tmx-menu > li > a,
.tmx-menu > li > ul > li > a,
.tmx-menu > li > ul > li > ul > li > a,
.secondaryContent.blockLinksList.xengallery > li > a,
.secondaryContent.blockLinksList.xengallery > ul > li > a,
.col1.blockLinksList > li > a,
.col2.blockLinksList > li > a {
  position: relative;
  top: 2px;
}
.tmx-menu > li:hover,
.tmx-menu > li > a:hover,
.tmx-menu > li > ul > li:hover,
.tmx-menu > li > ul > li > a:hover,
.tmx-menu > li > ul > li > ul > li:hover,
.tmx-menu > li > ul > li > ul > li > a:hover,
.secondaryContent.blockLinksList.xengallery > li:hover,
.secondaryContent.blockLinksList.xengallery > li > a:hover,
.secondaryContent.blockLinksList.xengallery > ul > li:hover,
.secondaryContent.blockLinksList.xengallery > ul > li > a:hover,
.col1.blockLinksList > li:hover,
.col1.blockLinksList > li > a:hover,
.col2.blockLinksList > li:hover,
.col2.blockLinksList > li > a:hover {
  background: #efefef !important;
}
.tmx-menu a:hover {
  color: #aa2222 !important;
  text-decoration: underline;
}
.tmx-menu > li > ul,
.tmx-menu > li > ul > li > ul {
  position: absolute;
  left: 200px;
  top: -2px;
  padding: 0px;
  width: 275px;
  border-radius: 0px 3px 3px 0px;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
}
.tmx-menu > li > ul > li > ul {
  left: 275px;
}
/*
.tmx-menu {
	font-size: 12px;
	background-color: #ffffff;
	border: 1px solid;
	overflow: visible;
	-webkit-box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.5);
	-khtml-box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.5);
	min-width: 225px;
	width: 225px;
	position: absolute;
	z-index: 7500;
	display: none;
}
*/
.tmx-menu > li:hover > ul,
.tmx-menu > li > ul > li:hover > ul {
  display: block;
}
@media (max-width: 800px) {
  .p-navgroup-link.p-navgroup-link--iconic .p-navgroup-linkText,
  .p-navgroup-link.p-navgroup-link--textual i {
    display: none;
  }
  .p-navgroup-link.p-navgroup-link--textual {
    overflow: hidden;
    white-space: nowrap;
    word-wrap: normal;
    text-overflow: ellipsis;
    max-width: 110px;
  }
  .p-navgroup-link.p-navgroup-link--iconic i:after {
    text-align: center;
  }
}
@media (max-width: 610px) {
  .p-navgroup-link--whatsnew {
    display: block;
  }
  .has-js .p-nav-opposite {
    align-self: center;
    margin-right: 4px;
  }
  .has-js .p-nav-opposite .p-navgroup {
    background: none;
    margin-left: 0;
  }
  .has-js .p-nav-opposite .p-navgroup-link {
    border: none;
    border-radius: 4px;
  }
  .has-js .p-nav-opposite .p-navgroup-link.is-menuOpen {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
  }
  .has-js .p-nav-opposite .p-navgroup-link.badgeContainer {
    opacity: 1;
  }
}
@media (max-width: 359px) {
  .p-navgroup-link.p-navgroup-link--user {
    display: none;
  }
}
@media (max-width: 374px) {
  .p-navgroup-link.p-navgroup-link--register {
    display: none;
  }
}
.p-sectionLinks {
  font-size: 13px;
  color: #141414;
  background: #f5f5f5;
  border-bottom: 1px solid #cbcbcb;
  display: none;
}
.p-sectionLinks .hScroller-action {
  color: #141414;
}
.p-sectionLinks .hScroller-action:hover {
  color: #185886;
}
.p-sectionLinks .hScroller-action.hScroller-action--start {
  background: #f5f5f5;
  background: linear-gradient(to right, #f5f5f5 66%, rgba(245, 245, 245, 0) 100%);
}
.p-sectionLinks .hScroller-action.hScroller-action--end {
  background: #f5f5f5;
  background: linear-gradient(to right, rgba(245, 245, 245, 0) 0%, #f5f5f5 33%);
}
.p-sectionLinks.p-sectionLinks--empty {
  height: 10px;
}
.p-sectionLinks-inner {
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 2px;
  padding-right: 2px;
}
.p-sectionLinks-inner:before,
.p-sectionLinks-inner:after {
  content: " ";
  display: table;
}
.p-sectionLinks-inner:after {
  clear: both;
}
@supports (padding: max(0px)) {
  .p-sectionLinks-inner {
    padding-left: max(2px, env(safe-area-inset-left));
    padding-right: max(2px, env(safe-area-inset-right));
  }
}
.p-sectionLinks-list {
  list-style: none;
  margin: 0;
  padding: 0;
  font-size: 0;
}
.p-sectionLinks-list a {
  color: inherit;
}
.p-sectionLinks-list > li {
  display: inline-block;
}
.p-sectionLinks-list .p-navEl-link {
  padding: 0 8px;
}
.p-sectionLinks-list .p-navEl-link.p-navEl-link--splitMenu {
  padding-right: 2px;
}
.p-sectionLinks-list .p-navEl-link.p-navEl-link--menuTrigger {
  padding-right: 2.66666667px;
}
.p-sectionLinks-list .p-navEl-link.p-navEl-link--menuTrigger:after {
  padding-left: 4.66666667px;
}
.p-sectionLinks-list .p-navEl-splitTrigger {
  /* padding: 0 ((@padding) / 3); */
  padding: 0 8px;
}
.p-sectionLinks-list .p-navEl {
  font-size: 13px;
}
.p-sectionLinks-list .p-navEl:hover {
  color: #185886;
}
.p-sectionLinks-list .p-navEl:hover a {
  text-decoration: ;
}
.p-sectionLinks-list .p-navEl.is-menuOpen {
  color: #fefefe;
  text-decoration: none;
  background: rgba(71, 167, 235, 0.65);
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
  box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.35);
}
.p-sectionLinks-list .p-navEl-link,
.p-sectionLinks-list .p-navEl-splitTrigger {
  padding-top: 6px;
  padding-bottom: 6px;
}
@media (max-width: 610px) {
  .has-js .p-sectionLinks {
    display: none;
  }
}
.p-body {
  display: flex;
  align-items: stretch;
  flex-grow: 1;
  min-height: 1px;
}
.p-body-inner {
  display: flex;
  flex-direction: column;
  width: 100%;
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 10px;
  padding-right: 10px;
  padding: 0px;
  padding-top: 10px;
  padding-bottom: 20px;
}
@supports (padding: max(0px)) {
  .p-body-inner {
    padding-left: max(10px, env(safe-area-inset-left));
    padding-right: max(10px, env(safe-area-inset-right));
  }
}
.p-body-inner:before,
.p-body-inner:after {
  content: " ";
  display: table;
}
.p-body-inner:after {
  clear: both;
}
.p-body-header {
  margin-bottom: 10px;
}
.p-body-main {
  display: table;
  table-layout: fixed;
  width: 100%;
  margin-bottom: auto;
  min-height: 1px;
}
.p-body-content {
  display: table-cell;
  vertical-align: top;
}
.p-body-main--withSideNav .p-body-content {
  padding-left: 10px;
}
.p-body-main--withSidebar .p-body-content {
  padding-right: 10px;
}
.p-body-main--withSidebar .p-body-content ins.adsbygoogle,
.p-body-main--withSideNav .p-body-content ins.adsbygoogle {
  max-width: calc(100vw - 10px - 10px - 10px - 250px - 10px);
}
@media (min-width: 1200px) {
  .p-body-main--withSidebar .p-body-content ins.adsbygoogle,
  .p-body-main--withSideNav .p-body-content ins.adsbygoogle {
    max-width: calc(1200px - 10px - 10px - 250px - 10px);
  }
}
@media (max-width: 800px) {
  .p-body-main--withSidebar .p-body-content ins.adsbygoogle,
  .p-body-main--withSideNav .p-body-content ins.adsbygoogle {
    max-width: 100vw;
  }
}
.p-body-pageContent > .tabs--standalone:first-child {
  margin-bottom: 10px;
}
.p-body-sideNav {
  display: table-cell;
  vertical-align: top;
  width: 250px;
}
.p-body-sideNavTrigger {
  display: none;
}
.p-body-sidebar {
  display: table-cell;
  vertical-align: top;
  width: 250px;
}
.p-body-sidebar .contentRow-figure .avatar--m {
  width: 64px;
  height: 64px;
  font-size: 38px;
}
.p-body-content > :first-child,
.p-body-pageContent > :first-child,
.p-body-sideNav > :first-child,
.p-body-sideNavContent > :first-child,
.p-body-sidebar > :first-child {
  margin-top: 0;
}
.p-body-content > :last-child,
.p-body-pageContent > :last-child,
.p-body-sideNav > :last-child,
.p-body-sideNavContent > :last-child,
.p-body-sidebar > :last-child {
  margin-bottom: 0;
}
@media (max-width: 800px) {
  .p-body-main,
  .p-body-content {
    display: block;
  }
  .p-body-sideNav {
    display: block;
    width: auto;
  }
  .p-body-sideNavTrigger {
    margin-bottom: 10px;
    text-align: center;
  }
  .p-body-sideNavTrigger .button:before {
    font-family: 'Font Awesome 5 Pro';
    font-size: inherit;
    font-style: normal;
    font-weight: 400;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 120%;
    vertical-align: middle;
    margin: -4px 6px -4px 0;
    content: "\f0c9";
    display: inline-block;
    width: 0.88em;
  }
  .has-js .p-body-sideNavTrigger {
    display: block;
  }
  .has-js .p-body-sideNavInner:not(.offCanvasMenu) {
    display: none;
    opacity: 0;
    -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
    transition:  all 0.25s ease, -xf-opacity 0.25s ease;
    overflow-y: hidden;
    height: 0;
    -webkit-transition-property: all, -xf-height;
    transition-property: all, -xf-height;
  }
  .has-js .p-body-sideNavInner:not(.offCanvasMenu).is-active {
    display: block;
    opacity: 1;
  }
  .has-js .p-body-sideNavInner:not(.offCanvasMenu).is-transitioning {
    display: block;
  }
  .has-js .p-body-sideNavInner:not(.offCanvasMenu).is-active {
    height: auto;
    overflow-y: visible;
  }
  .has-js .p-body-sideNavInner:not(.offCanvasMenu).is-transitioning {
    overflow-y: hidden;
  }
  .has-no-js .p-body-sideNavInner {
    margin-bottom: 20px;
  }
  .p-body-sidebar {
    display: flex;
    flex-wrap: wrap;
    align-items: stretch;
    margin: 20px -5px -20px;
    width: auto;
  }
  .p-body-sidebar > * {
    margin: 0 5px 20px;
    min-width: 250px;
    flex: 1 1 250px;
  }
  .p-body-sidebar > *:last-child {
    margin-bottom: 20px;
  }
  .p-body-sidebar:after {
    display: block;
    content: '';
    height: 0;
    margin: 0 5px;
    min-width: 250px;
    flex: 1 1 250px;
  }
  .p-body-sidebar .block-container {
    display: flex;
    flex-direction: column;
    height: 100%;
  }
  .p-body-sidebar .block-container .block-footer {
    margin-top: auto;
  }
  .p-body-main--withSideNav .p-body-content,
  .p-body-main--withSidebar .p-body-content {
    padding: 0;
  }
}
@media (max-width: 610px) {
  .p-body-sideNavContent {
    margin: 0 -10px;
    padding: 0 10px;
  }
  .offCanvasMenu .p-body-sideNavContent {
    margin: 0;
    padding: 0;
  }
  .p-body-sidebar {
    display: block;
    margin-left: 0;
    margin-right: 0;
  }
  .p-body-sidebar > * {
    margin-left: 0;
    margin-right: 0;
    min-width: 0;
  }
}
@media (max-width: 480px) {
  .p-body-inner {
    padding-bottom: 0px;
  }
}
.p-breadcrumbs {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-bottom: 5px;
  line-height: 1.5;
}
.p-breadcrumbs:before,
.p-breadcrumbs:after {
  content: " ";
  display: table;
}
.p-breadcrumbs:after {
  clear: both;
}
.p-breadcrumbs.p-breadcrumbs--bottom {
  margin-top: 20px;
  margin-bottom: 0;
}
.p-breadcrumbs > li {
  float: left;
  margin-right: .5em;
  font-size: 13px;
}
.p-breadcrumbs > li a {
  display: inline-block;
  vertical-align: bottom;
  max-width: 300px;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
}
.p-breadcrumbs > li:after,
.p-breadcrumbs > li:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 90%;
  color: #8c8c8c;
}
.p-breadcrumbs > li:after {
  content: "\f105";
  margin-left: .5em;
}
.p-breadcrumbs > li:last-child {
  margin-right: 0;
}
.p-breadcrumbs > li:last-child a {
  font-weight: 700;
}
@media (max-width: 610px) {
  .p-breadcrumbs > li a {
    max-width: 200px;
  }
}
@media (max-width: 480px) {
  .p-breadcrumbs {
    margin: 5px;
  }
  .p-breadcrumbs > li {
    display: none;
    font-size: 11px;
  }
  .p-breadcrumbs > li:last-child {
    display: block;
  }
  .p-breadcrumbs > li a {
    max-width: 90vw;
  }
  .p-breadcrumbs > li:after {
    display: none;
  }
  .p-breadcrumbs > li:before {
    content: "\f053";
    margin-right: .5em;
  }
}
.p-title {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  max-width: 100%;
  margin-bottom: -5px;
}
.p-title.p-title--noH1 {
  flex-direction: row-reverse;
}
.p-title-value {
  padding: 0;
  margin: 0 0 5px 0;
  font-size: 24px;
  font-weight: 400;
  min-width: 0;
  margin-right: auto;
}
.p-title-pageAction {
  margin-bottom: 5px;
}
.p-description {
  margin: 5px 0 0;
  padding: 0;
  font-size: 13px;
  color: #8c8c8c;
}
@media (max-width: 480px) {
  .p-title {
    margin-left: 5px;
  }
  .p-title-value {
    font-size: 20px;
  }
  .p-description {
    margin-left: 5px;
  }
}
.p-footer {
  font-size: 13px;
  color: #141414;
  margin-bottom: 10px;
}
.p-footer-inner {
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 10px;
  padding-right: 10px;
  padding-top: 6px;
  padding-bottom: 10px;
}
@supports (padding: max(0px)) {
  .p-footer-inner {
    padding-left: max(10px, env(safe-area-inset-left));
    padding-right: max(10px, env(safe-area-inset-right));
  }
}
.p-footer-row {
  margin-bottom: -10px;
}
.p-footer-row:before,
.p-footer-row:after {
  content: " ";
  display: table;
}
.p-footer-row:after {
  clear: both;
}
.p-footer-row-main {
  float: left;
  margin-bottom: 10px;
}
.p-footer-row-opposite {
  float: right;
  margin-bottom: 10px;
}
.p-footer-linkList {
  list-style: none;
  margin: 0;
  padding: 0;
}
.p-footer-linkList:before,
.p-footer-linkList:after {
  content: " ";
  display: table;
}
.p-footer-linkList:after {
  clear: both;
}
.p-footer-linkList > li {
  float: left;
  margin-right: .5em;
}
.p-footer-linkList > li:last-child {
  margin-right: 0;
}
.p-footer-linkList > li a {
  padding: 2px 4px;
  border-radius: 2px;
}
.p-footer-linkList > li a:hover {
  text-decoration: none;
  background-color: rgba(0, 0, 0, 0.1);
}
.p-footer-rssLink > span {
  position: relative;
  top: -1px;
  display: inline-block;
  width: 1.44em;
  height: 1.44em;
  line-height: 1.44em;
  text-align: center;
  font-size: .8em;
  background-color: #FFA500;
  border-radius: 2px;
}
.p-footer-rssLink .fa-rss {
  color: white;
}
.p-footer-copyright {
  margin-top: 20px;
  text-align: center;
  font-size: 11px;
}
.p-footer-debug {
  margin-top: 10px;
  text-align: right;
  font-size: 11px;
}
.p-footer-debug .pairs > dt {
  color: inherit;
}
.footerSiteMap {
  margin-left: auto;
  margin-right: auto;
  width: 96%;
}
.footerSiteMap > tbody > tr > td {
  vertical-align: top;
}
.footerLinks > li {
  list-style: none;
  padding-left: 0;
}
.footerLinks > li > h4 {
  font-weight: 700;
  font-size: 16px;
}
#footerSearch > form.menu-content {
  border: none;
}
#footerSearch > form > input {
  max-width: 200px;
  display: inline-block;
}
#footerSearch > form > .button.button--primary {
  background: #efefef;
  border-color: #a8a8a8;
}
.footerSocial > li > a {
  display: inline-block;
}
@media (max-width: 610px) {
  .p-footer-row-main,
  .p-footer-row-opposite {
    float: none;
  }
  .p-footer-copyright {
    text-align: left;
    padding: 0 4px;
  }
}
@media (max-width: 480px) {
  .footerSiteMap > tbody > tr > td {
    display: block;
    text-align: center;
  }
  .footerSiteMap > tbody > tr > td > ul {
    padding-left: 0px;
  }
  .footerSiteMap > tbody > tr.showMobile > td > a,
  #mobileFooterSocial > a {
    display: inline-block;
    padding: 5px;
    margin-bottom: 10px;
  }
  .p-footer-copyright {
    display: block;
    margin-bottom: 10px;
    text-align: center;
  }
  .p-footer-linkList > li {
    float: none;
    text-align: center;
  }
}
.inlineModButton {
  display: inline-block;
  position: relative;
}
.inlineModButton i:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f14a";
  display: inline-block;
  width: 0.88em;
  vertical-align: -1px;
  font-size: 1.2em;
  margin: -0.2em 0;
  line-height: 1;
}
.inlineModButton.inlineModButton--noIcon i {
  display: none;
}
.inlineModButton.is-mod-active {
  color: #f2930d;
}
.inlineModButton.is-mod-active .inlineModButton-count {
  display: inline;
}
.inlineModButton:not(.inlineModButton--withLabel) .inlineModButton-label {
  position: absolute;
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
  clip: rect(0 0 0 0);
  overflow: hidden;
}
.inlineModButton-count {
  display: none;
  position: absolute;
  top: -3px;
  left: -6px;
  color: #505050;
  background: #ececec;
  border: 1px solid #d8d8d8;
  border-radius: 2px;
  padding: 1px 2px;
  font-size: 9px;
  line-height: 1;
}
.inlineModButton--noIcon .inlineModButton-count {
  position: static;
  font-size: 80%;
  padding-top: 0;
  padding-bottom: 0;
}
.inlineModBar {
  color: #ededed;
  background: #185886;
  border-bottom: 1px solid #103c5b;
  padding-top: 3px;
  padding-bottom: 3px;
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
}
.inlineModBar.is-active {
  display: block;
  opacity: 1;
}
.inlineModBar.is-transitioning {
  display: block;
}
.inlineModBar.is-active {
  height: auto;
  overflow-y: visible;
}
.inlineModBar.is-transitioning {
  overflow-y: hidden;
}
.inlineModBar:before,
.inlineModBar:after {
  content: " ";
  display: table;
}
.inlineModBar:after {
  clear: both;
}
.inlineModBar .input,
.inlineModBar .button {
  padding-top: 3px;
  padding-bottom: 3px;
}
.inlineModBar.is-active:first-of-type {
  box-shadow: 0 0 8px 3px rgba(0, 0, 0, 0.3);
}
.inlineModBar-inner {
  max-width: 1200px;
  padding: 0 10px;
  margin: 0 auto;
  padding-left: 10px;
  padding-right: 10px;
  display: flex;
  align-items: center;
}
@supports (padding: max(0px)) {
  .inlineModBar-inner {
    padding-left: max(10px, env(safe-area-inset-left));
    padding-right: max(10px, env(safe-area-inset-right));
  }
}
.inlineModBar-controls {
  list-style: none;
  margin: 0;
  padding: 0;
  margin-right: auto;
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  min-height: 35px;
  max-width: 100%;
}
.inlineModBar-controls > li {
  float: left;
  display: inline-block;
  margin-right: 1em;
}
.inlineModBar-controls > li:last-child {
  margin-right: 0;
}
.inlineModBar-close {
  float: right;
  margin-left: 1em;
  order: 2;
}
.inlineModBar-title {
  font-weight: 700;
}
.button.inlineModBar-goButton {
  font-size: 15px;
  line-height: 1.5;
  min-width: 0;
}
.inlineModBarCover {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: -1;
  cursor: pointer;
}
.is-ignored {
  display: none !important;
}
.showIgnoredLink.is-hidden {
  display: none !important;
}
.block-outer .showIgnoredLink,
.showIgnoredLink.showIgnoredLink--subtle {
  font-size: 13px;
  color: #8c8c8c;
}
.block-outer .showIgnoredLink:hover,
.showIgnoredLink.showIgnoredLink--subtle:hover {
  color: #505050;
}
.username--invisible {
  color: #8c8c8c;
  /*&:after {
		.m-usernameIcon();
		.m-faContent(@fa-var-eye-slash);
	}*/
}
.username--banned {
  text-decoration: line-through;
  /*&:after {
		.m-usernameIcon();
		.m-faContent(@fa-var-ban);
	}*/
}
/*
.username--staff:after
{
	.m-usernameIcon();
	.m-faContent(@fa-var-address-card-o);
}

.username--moderator:after
{
	.m-usernameIcon();
	.m-faContent(@fa-var-shield);
}

.username--admin:after
{
	.m-usernameIcon();
	.m-faContent(@fa-var-id-badge);
}*/
.userBanner {
  font-size: 75%;
  font-weight: 400;
  font-style: normal;
  padding: 1px 6px;
  border: 1px solid transparent;
  border-radius: 2px;
  text-align: center;
  display: inline-block;
}
.userBanner strong {
  font-weight: inherit;
}
.userBanner.userBanner--hidden {
  background: none;
  border: none;
  box-shadow: none;
}
.userBanner.userBanner--staff,
.userBanner.userBanner--primary {
  color: #141414;
  background: #fefefe;
  border-color: #e5e5e5;
  border-color: #ededed;
}
.userBanner.userBanner--accent {
  color: #505050;
  background: #ececec;
  border-color: #d3d3d3;
  border-color: #d8d8d8;
}
.userBanner.userBanner--red {
  color: #ffffff;
  background: #d80000;
  border-color: #a50000;
}
.userBanner.userBanner--green {
  color: #ffffff;
  background: #008000;
  border-color: #004d00;
}
.userBanner.userBanner--olive {
  color: #ffffff;
  background: #808000;
  border-color: #4d4d00;
}
.userBanner.userBanner--lightGreen {
  color: #000000;
  background: #ccf9c8;
  border-color: #a1f49a;
  border-color: #bee8ba;
}
.userBanner.userBanner--blue {
  color: #ffffff;
  background: #0008e3;
  border-color: #0006b0;
}
.userBanner.userBanner--royalBlue {
  color: #ffffff;
  background: #4169e1;
  border-color: #214cce;
}
.userBanner.userBanner--skyBlue {
  color: #ffffff;
  background: #7cc3e0;
  border-color: #53b0d6;
}
.userBanner.userBanner--gray {
  color: #ffffff;
  background: #808080;
  border-color: #676767;
}
.userBanner.userBanner--silver {
  color: #000000;
  background: #c0c0c0;
  border-color: #a7a7a7;
}
.userBanner.userBanner--yellow {
  color: #000000;
  background: #ffff91;
  border-color: #ffff5e;
  border-color: #e6e687;
}
.userBanner.userBanner--orange {
  color: #000000;
  background: #ffcb00;
  border-color: #cca200;
}