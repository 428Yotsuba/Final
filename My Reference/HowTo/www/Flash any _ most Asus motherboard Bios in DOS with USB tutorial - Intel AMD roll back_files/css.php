@charset "UTF-8";
/* CSS Document */

.bbcode_container {
	margin:20px;
	margin-top:5px;
	display:block;
}

.bbcode_container .bbcode_desc {
	margin-bottom:2px;
	font-size:11px;
}
/*text-align should alwais be LTR for the CODE blocks*/
.bbcode_container div.bbcode_code,
.bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:scroll;
	direction:ltr;
	background:#f2f6f8 none repeat-x  ;
	font-size:12px;	
}

.bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;	
}

.bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

.bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	background: #121212 none   ;
	border-radius: ;
	border: 0  ;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}

.bbcode_container .bbcode_quote_container {
	background: transparent url(images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

.bbcode_quote div.quote_container {
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
	padding: 5px 10px 5px 10px;
}

.bbcode_quote .bbcode_postedby img {
	position: relative;
	top: 1px;
}

.bbcode_container div.bbcode_quote.printable {
	background:none;
	border:none;
}

.bbcode_container div.bbcode_quote div.message {
	/*font-style:italic;*/
	padding:8px 0px;
}

/* fix the bug where li's in quotes are floated */
.bbcode_container div.bbcode_quote div.message ol>li, .bbcode_container div.bbcode_quote div.message ul>li{
	float: none;
}

/* from components.css */
.bbcode_postedby {
	font:   normal 12px Tahoma,Calibri,Verdana,Geneva,sans-serif;
}

.bbcode_postedby img {
	margin:0;
}

.texteditor.content .cke_skin_kama textarea.cke_source,
.texteditor textarea {
	font:    13px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
}

.formcontrols .blockrow.texteditor textarea:focus {
	background-color: #121212; /*asus*/
        color: #ffffff; /*asus*/
}

.texteditor.forum .cke_skin_kama textarea.cke_source,
.texteditor.forum textarea {
	font:    13px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
}

.editor_smiliebox {
	float:right;
	width:75px;
	height:200px;
	_background-color:rgb(244, 244, 244);
	_border:solid 1px #6b91ab;
	padding:0 3px 3px 3px;
}

.editor_smiliebox .blocksubhead {
	padding:0;
	font-size:11px;
	font-weight:normal;
	text-align:center;
	background:#f2f6f8;
	border:solid 1px #6b91ab;
	border-width:1px 0;
}

.editor_smiliebox ul.smiliebox {
	height:190px;
	overflow:hidden;
}

.editor_smiliebox ul.smiliebox li {
	float:left;
	height:20px;
	width:20px;
	margin:2px;
	overflow:hidden;
	position:relative;
	text-align:center;
}

.editor_smiliebox ul.smiliebox li div.table {
	display:table;
	height:100%;
	margin:auto;
	/* IE8 needs the following, see https://connect.microsoft.com/IE/feedback/ViewFeedback.aspx?FeedbackID=425785#tabs */
	table-layout:fixed;
	width:20px;
}

.editor_smiliebox ul.smiliebox li div.tablecell {
	display:table-cell;
	vertical-align:middle;
}

.editor_smiliebox ul.smiliebox li img {
	height:auto;
	max-width:20px;
	width:auto !important;
	cursor: pointer;
}

.editor_smiliebox div.moresmilies {
	text-align:center;
	font-size:11px;
}

.editor_textbox_container {
	width:100%;
	float:left;
	margin:0;
}

.editor_textbox_container.smilie {
	margin-right:-165px;
}

.editor_textbox_smilie {
	margin-right:85px;
}

/* dropdown button */
.cke_skin_kama_container {
	visibility:visible; 
	background: #FFFFFF; // no stylevar
}

.cke_skin_kama_container body {
	min-width: 0;
}

.attachment a {
	padding: 1px 0;
	border: 1px solid #ffffff;
	display: block;
}

.attachment a:hover {
	padding: 1px 0;
	border-color: #316ac5;
	background-color: #dff1ff;
}


.editorpopupbody {
	padding: 5px;
	min-width: 200px;
	max-height:250px;
	overflow-y:auto;
	overflow-x:hidden;
}


.editorpopupbody li.attachment {
	white-space:nowrap;
}

.cke_skin_kama .cke_panel.cke_attach {
	width:250px;
	height:auto;
}

/* attachment click */
.previewthumbactive {
	position: absolute;
	background: url('images/misc/pencil.png') no-repeat top left;
	cursor: pointer;
	border:1px solid red;
	margin:0;
	z-index: 10;
}

img.previewthumb.active {
	cursor: pointer;
	border:1px solid red;
	margin:0;
}

div.attach_insert_all {
	cursor: pointer;
	background-color:rgb(244, 244, 244);
	padding: 2px;
}

/* ie8 width fix */
.cke_browser_ie8 .cke_editor {
	display: block !important;
}

/* disabled background override */
.cke_button .cke_disabled:hover {
	background-color: transparent !important;
}

/* icons */
.cke_skin_kama span:not(.cke_browser_ie) .cke_button .cke_icon {
	background: url('images/editor/sprite.png') no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon {
	position: relative;
	overflow: hidden;
	width: 16px;
	height: 16px
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image {
	position: absolute;
	width: 2448px;
	height: 60px;
	background: url('images/editor/sprite.png') no-repeat top left;
}

.cke_skin_kama .cke_browser_ie .cke_button .cke_icon_image.custom {
	background: none;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon {
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale');
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_on .cke_icon_image {
	top: 0px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_off .cke_icon_image {
	top: -20px;
}

.cke_skin_kama .cke_browser_ie .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

/* VBIV-11809 */
.cke_skin_kama .cke_browser_ie .cke_button .cke_button_textcolor .cke_buttonarrow {
	filter: ;
}

.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button a.cke_disabled .cke_icon_image {
	top: -40px;
	filter: ;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_openAttachmentWindow .cke_icon {
	background-position: 0 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_openAttachmentWindow .cke_icon_image {
	left: 0px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_enhancedsource .cke_icon
{
	background-position: -1597px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_enhancedsource .cke_icon_image
{
	left: -1597px;
}
.cke_skin_kama .cke_button_enhancedsource .cke_label
{
	/* This displays the "source" text next to the source button!*/
	/*display: inline !important;*/
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_pastefromword .cke_icon
{
	background-position: -2430px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_pastefromword .cke_icon_image
{
	left: -2430px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_removeFormat .cke_icon
{
	background-position: -1447px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_removeFormat .cke_icon_image
{
	left: -1447px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bold .cke_icon
{
	background-position: -50px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bold .cke_icon_image
{
	left: -50px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_italic .cke_icon
{
	background-position: -897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_italic .cke_icon_image
{
	left: -897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_underline .cke_icon
{
	background-position: -2247px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_underline .cke_icon_image
{
	left: -2247px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_subscript .cke_icon
{
	background-position: -2147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_subscript .cke_icon_image
{
	left: -2147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_superscript .cke_icon
{
	background-position: -2197px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_superscript .cke_icon_image
{
	left: -2197px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_table .cke_icon
{
	background-position: -2047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_table .cke_icon_image
{
	left: -2047px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_tableProperties .cke_icon
{
	background-position: -1797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_tableProperties .cke_icon_image
{
	left: -1797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_tableDelete .cke_icon
{
	background-position: -1847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_tableDelete .cke_icon_image
{
	left: -1847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertBefore .cke_icon
{
	background-position: -1997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertBefore .cke_icon_image
{
	left: -1997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowInsertAfter .cke_icon
{
	background-position: -1947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowInsertAfter .cke_icon_image
{
	left: -1947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbRowDelete .cke_icon
{
	background-position: -1897px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbRowDelete .cke_icon_image
{
	left: -1897px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertBefore .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertBefore .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnInsertAfter .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnInsertAfter .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbColumnDelete .cke_icon
{
	background-position: -1647px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_vbColumnDelete .cke_icon_image
{
	left: -1647px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_horizontalrule .cke_icon
{
	background-position: -2097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_horizontalrule .cke_icon_image
{
	left: -2097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_smiley .cke_icon
{
	background-position: -1497px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_smiley .cke_icon_image
{
	left: -1497px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_iespell .cke_icon
{
	background-position: -1547px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_iespell .cke_icon_image
{
	left: -1547px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_link .cke_icon
{
	background-position: -300px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_link .cke_icon_image
{
	left: -300px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Email .cke_icon
{
	background-position: -401px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Email .cke_icon_image
{
	left: -401px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_unlink .cke_icon
{
	background-position: -2346px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_unlink .cke_icon_image
{
	left: -2346px;
}
.cke_skin_kama span:not(.cke_browser_ie) .cke_button_image .cke_icon, .cke_skin_kama span:not(.cke_browser_ie) .cke_button_vbimage .cke_icon
{
	background-position: -747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_image .cke_icon_image, .cke_skin_kama .cke_browser_ie .cke_button_vbimage .cke_icon_image
{
	left: -747px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_videotag .cke_icon
{
	background-position: -2397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_videotag .cke_icon_image
{
	left: -2397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Quote .cke_icon
{
	background-position: -1347px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Quote .cke_icon_image
{
	left: -1347px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Code .cke_icon
{
	background-position: -151px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Code .cke_icon_image
{
	left: -151px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Html .cke_icon
{
	background-position: -451px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_Html .cke_icon_image
{
	left: -451px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_Php .cke_icon
{
	background-position: -1297px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_Php .cke_icon_image
{
	left: -1297px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PageBreak .cke_icon
{
	background-position: -1147px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PageBreak .cke_icon_image
{
	left: -1147px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_PreviewBreak .cke_icon
{
	background-position: -100px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_PreviewBreak .cke_icon_image
{
	left: -100px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_textcolor .cke_icon
{
	background-position: -201px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_textcolor .cke_icon_image
{
	left: -201px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_rtl .cke_browser_ie .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl .cke_rcombo {
	float:right;
}

.cke_skin_kama .cke_browser_ie6 .cke_rtl .cke_rcombo,
.cke_skin_kama .cke_browser_ie7 .cke_rtl .cke_rcombo  {
	float:none;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_numberedlist .cke_icon
{
	background-position: -797px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_numberedlist .cke_icon_image
{
	left: -797px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_bulletedlist .cke_icon
{
	background-position: -847px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_bulletedlist .cke_icon_image
{
	left: -847px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
	background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_outdent .cke_icon_image
{
	left: -1097px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
	background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_indent .cke_icon_image
{
	left: -697px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyleft .cke_icon
{
	background-position: -997px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyleft .cke_icon_image
{
	left: -997px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifycenter .cke_icon
{
	background-position: -947px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifycenter .cke_icon_image
{
	left: -947px;
}

.cke_skin_kama span:not(.cke_browser_ie) .cke_button_justifyright .cke_icon
{
	background-position: -1047px 0;
}
.cke_skin_kama .cke_browser_ie .cke_button_justifyright .cke_icon_image
{
	left: -1047px;
}

/* rtl icons */

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_undo .cke_icon
{
	background-position: -1397px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_undo .cke_icon_image
{
	left: -1397px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_redo .cke_icon
{
	background-position: -2297px 0; 
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_redo .cke_icon_image
{
	left: -2297px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_outdent .cke_icon
{
		background-position: -697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_outdent .cke_icon_image
{
		left: -697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_indent .cke_icon
{
		background-position: -1097px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_indent .cke_icon_image
{
		left: -1097px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertBefore .cke_icon
{
	background-position: -1697px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertBefore .cke_icon_image
{
	left: -1697px;
}

.cke_skin_kama .cke_rtl span:not(.cke_browser_ie) .cke_button_columnInsertAfter .cke_icon
{
	background-position: -1747px 0;
}
.cke_skin_kama .cke_browser_ie .cke_rtl .cke_button_columnInsertAfter .cke_icon_image
{
	left: -1747px;
}

.cke_skin_kama .cke_dialog .cke_dialog_ui_labeled_label {
	float:none;
}

.cke_skin_kama .cke_dialog input[type="file"] {
	border:1px inset;
}

.cke_skin_kama div.cke_bottom_restore_autosave {
	position:relative;
}

.cke_skin_kama div.cke_bottom_restore_autosave .cke_toolgroup {
	height:18px;
	position:absolute;
	top:4px;
	padding:0 3px 0 0;
}

.cke_skin_kama div.cke_bottom_restore_autosave a.restoretext {
	cursor:pointer;
	height:12px;
	background-image:none
}

.cke_skin_kama div.as_ind_container {
	position:relative;
}

.cke_skin_kama div.as_ind_container div {
	background-color:rgb(255, 255, 0);
	right:0;
	position:absolute;
	padding:2px;
	top:-12px;
	font-weight:bold;
}

.cke_skin_kama .cke_toolbox {
	margin-bottom: 5px;
}

/* VBIV-11874 Override CSS so that textarea popup resizes with the dialog */
.cke_skin_kama .cke_dialog .cke_dialog_ui_textarea.cke_pastetext {
	width:auto;
	height:auto;
}

.cke_dialog_tab:focus {
	outline:none;
} 


/* CSS Document */
.popupmenu {
	*z-index:999;
	position: relative;
}

.popupmenu a.popupctrl {
	background-image:url(images/misc/white_downward_arrow.png); /*asus*/
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:23px; /*asus*/
	_padding-right:25px;
}

.popupmenu a.popupctrl.nogadget {
	padding-right:0;
	background-image:none;
}

.popupgroup .popupmenu a.popupctrl {
	font-size:11px;
	padding:2px 4px;
	border: 0;
	background-color:transparent;
	text-decoration:none;
	padding-right:15px;
	margin-left:5px;
}

.popupgroup .popupmenu:hover a.popupctrl {
	border:0;
	background-color:transparent;
}

/* see PopupMenu.set_control_style() */
.popupgroup .popupmenu {
	float:left;
}

.blockfoot .popupctrl {
	text-decoration:none;
	padding:2px 6px;
	padding-right:15px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.blockhead .popupctrl {
	color: #ffffff;
}

.blockhead .popupctrl:hover {
	color: #ffffff;
}
.popupbody {
	background:#121212 none   ;
	border:1px solid #000000; 
	padding:2px;
	position:absolute;
	z-index:1000;
	top:1.5em;
	left:0;
	display:none;
	min-width:200px;
}

.popupmenu:hover ul.popuphover {
	display:block;
}

.popupbody li {
	border-top:solid 1px #121212;
}

.popupbody > li:first-child {
	border-top:none;
}

.popupbody li > a,
.popupbody li > label {
	display:block;
	color: #ffffff; /*asus*/
	/*padding:12.4465em 10px;*/ /*asus*/
        padding: 3px 0 3px 15px; /*asus*/
	background:  bottom repeat-x;
	text-decoration:none;
	text-align:left;
	white-space:nowrap;
	font:   normal 0.9em "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;;
}
.blockhead .popupbody li > a {
	color:#777777;
}

/* vbmenu_hilite and vbmenu_option are for the ajax popup menus (tags) */
.popupbody li > a:hover,
.popupbody li > label:hover,
.popupbody li.vbmenu_hilite > a {
	background-color:#9f0811;
	color: #ffffff; /*asus*/
}

.popupbody li.vbmenu_hilite, li.vbmenu_option {
	float: none;
	display:list-item;
	width: 100%;
}

.popupbody li.vbmenu_option > a:hover {
	background:  bottom repeat-x;
}

.popupbody li input.searchbox {
	width:180px;
	padding:0pxpx;
	font-size:10pt;
	font-style:italic;
	color:#777777;
}

.popupbody li input.searchbox:focus {
	font-style:normal;
	color:#777777;
}

.popupbody li.formsubmit {
	text-align:right;
	padding:0pxpx;
	background:transparent;
}

.popupbody li.formsubmit .submitoptions {
	float:left;
	text-align:left;
}

.popupbody li.formsubmit .submitoptions label {
	display:block;
}

.popupbody li.formsubmit.jumptopage > label {
	display:inline;
	background:none;
}

.popupbody li.formsubmit input[type="submit"],
.popupbody li.formsubmit input[type="reset"],
.popupbody li.formsubmit input[type="button"] {
	font:9pt "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	padding:2px;
	padding-bottom:1px;
}

.popupbody li.formsubmit input[type="submit"]:hover,
.popupbody li.formsubmit input[type="reset"]:hover,
.popupbody li.formsubmit input[type="button"]:hover {
	color:#ffffff;
}

.blockhead .popupmenu,
.blocksubhead .popupmenu {
	display:block;
	float: right;
	clear: left;
	text-transform: none;
}

/* MEMBER ACTION DROP-DOWN */
.memberaction.popupmenu {
	position: relative;
	top: 0;
	display: inline-block;
}
.postdetails .memberaction.popupmenu {
	position: static; /* Opera 10.10 Fix */
}
.memberaction.popupmenu a.popupctrl {
	background: none;
	padding: 0;
}
.memberaction_body.popupbody {
	width: 280px;
	background: ;
	-moz-border-radius-topleft: 5px;
	-moz-border-radius-topright: 5px;
	-moz-border-radius-bottomleft: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-top-right-radius: 5px;
	-webkit-border-top-left-radius: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-webkit-border-bottom-left-radius: 5px;	
	border-top-right-radius: 5px;
	border-top-left-radius: 5px;
	border-bottom-right-radius: 5px;
	border-bottom-left-radius: 5px;	
	-moz-box-shadow: 0px 4px 7px ;
	-webkit-box-shadow: 0px 4px 7px ;
	box-shadow: 0px 4px 7px ;
}
.memberaction_body.popupbody li {
	border: none;
	width: 140px;
}
.memberaction_body.popupbody li.left {
	float: left;
	clear: left;
}
.memberaction_body.popupbody li.right {
	float: right;
	clear: right;
}
.memberaction_body.popupbody li img {
        float: left;
        padding: 4px;
        position: relative;
        top: -2px;
}
.memberaction_body.popupbody li > a {
	padding: 4px;
}
.memberaction_body.popupbody hr {
	float: left;
	height: 96px;
	width: 0;
	display: inline;
} 

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
html{color:#000;background:#FFF;}body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,code,form,fieldset,legend,input,button,textarea,p,blockquote,th,td{margin:0;padding:0;}table{border-collapse:collapse;border-spacing:0;}fieldset,img{border:0;}address,caption,cite,code,dfn,em,strong,th,var,optgroup{font-style:inherit;font-weight:inherit;}del,ins{text-decoration:none;}li{list-style:none;}caption,th{text-align: left;}h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}q:before,q:after{content:'';}abbr,acronym{border:0;font-variant:normal;}sup{vertical-align:baseline;}sub{vertical-align:baseline;}/*legend{color:#000;}*//*asus*/input,button,textarea,select,optgroup,option{font-family:inherit;font-size:inherit;font-style:inherit;font-weight:inherit;}input,button,textarea,select{*font-size:100%;}body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small;}select,input,button,textarea,button{font:99% arial,helvetica,clean,sans-serif;}table{font-size:inherit;font:100%;}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%;} 


/* CSS Document */


/*THIS*/

html {
	background:#000000 none no-repeat  ;
	
}

/* REVERSE SOME YUI RESET STUFF */
em {}
strong {}

/* BASIC PAGE ELEMENTS */

body {
	width:1000px;
	min-width:650px;
	max-width:auto;
	margin: 0 auto 0 auto;
	font-size:13px;
	color:#777777;
	line-height:1.230;
}

body a {
	color:#ffffff;
	text-decoration:none;
}
body a:hover,
body a:hover .time,
body a:hover .shade,
body a:hover .understate {
	color:#e30000;
	text-decoration:underline;
}

body a.understate,
body a .understate {
	color:inherit;
	text-decoration:none;
	*clear:expression(style.color = parentNode.currentStyle.color, style.clear = "none", 0);
}

.body_wrapper {
	padding: 10px 0px 10px 0px;
	background:  none   ;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
}

input,
textarea,
button,
select {
	font-family:"Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
}

.button {
	padding: 2.5px 5px;
	font:    11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	border:0  ;
	color:#777777;
	background: none   ;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	webkit-border-radius:0px;
}

.button:hover {
	background: #9f0811 none   ;
	color: #777777;
}
body,
legend {
	font-family:"Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
}

.shade {
	color:#777777;
}

.time {
	color:#3e3e3e;
}

.nocss_label {
	display:none;
}

.normal {
	font-size:13px;
	font-weight:normal;
}

/* BLOCK STUFF */

.block {
	clear:both;
	padding:0;
	color:;
	font:    ;
}

.blockhead {
	font:  normal 18px "Cuprum",arial,serif;
	color:#ffffff;
	background: none   ;
	_background-image: none;
	padding:4px 10px 4px 10px;
	border:0  ;
	-moz-border-radius-topright: ;
	-moz-border-radius-topleft: ;
	-webkit-border-top-right-radius: ;
	-webkit-border-top-left-radius: ;
	border-top-right-radius: ;
	border-top-left-radius: ;
        margin: 20px 0; /*asus*/
}

.blockhead h2 {
	font-weight:bold;
}

.blockhead a { color:#ffffff; }
.blockhead a:hover { color:#ffffff; }

.blockhead img {
	margin-bottom: -4px;
}

.blocksubhead {
	font:  normal 12px ;
	color:#aeaeae;
	background:#121212 none   ;
	padding:4px 10px 4px 10px;
	/*border-top:1px solid #cecece;*/ /*asus*/
}



.blocksubhead img {
	vertical-align:middle;
}

.blocksubhead a { color:#777777; text-decoration:none; }
.blocksubhead a:hover { color:#c30000; }

.blockhead_info, .blocksubhead_info {
	float:right;
	font-weight:normal;
}

/*.blockhead + */.blockbody { /* not sure why I had this .blockhead + .blockbody selector... need to look out for breakage */
	background: none no-repeat  ;
	padding-left:0px;
	padding-right:0px;
}

.blockrow {
	background: none   ;
	padding:5px 10px 5px 10px;
	border:  ;
	color:;
	font:    ;
}
.blockrow a { color:; }
.blockrow a:hover { color:; }

.blockfoot, .blocksubfoot {
	display:block;
	clear:both;
	background: none   ;
	padding:5px 0px 5px 0px;
	border:0  rgb(102, 204, 0);
	color:;
	font:    ;

}
.blockfoot a { color:; }
.blockfoot a:hover { color:; }

.blockfoot,
.blocksubfoot {
	padding:5px 0px 5px 0px;
}

.blocksubfoot {
	text-align:right;
}
/* END BLOCK STUFF */

/* WYSIWYG */
.wysiwyg_block {
	margin-bottom: 10px;
}

.wysiwyg_block .blockrow:first-child {
	background: transparent url() repeat-x top left;
}

.wysiwyg_block iframe.textbox {
	border: 1px solid #6b91ab;
	background:  none   ;
	padding-bottom: 0;
}

.wysiwyg_block .formcontrols .blockrow {
	border-top: 0;
}

/* CSS TABLE STUFF */
.table { display:table; table-layout:fixed; }
.thead { width:100%; padding:0; display: table-row; }
.tr    { display:table-row; }
.td    { display:table-cell; }

/* PAGINATION LINKS */

.pagination span {
	display: block;
	float: left;
	clear: right;
}

.pagination span a {
	font:  normal 13px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	border: 1px solid #222;
	height: 15.99px;
	padding: 2px 4px;
	margin-left: 1px;
	background: none   ;
	text-decoration:none;
	color: #4a4a4a;
}

.pagination span a:hover {
	border: 1px solid #4a4a4a;
}

.pagination span.prev_next a, .pagination span.first_last a {
	position: relative;
	top: -2px;
}

.pagination span.prev_next a img, .pagination span.first_last a img {
	position: relative;
	display: inline;
	top: 3px;
}
.pagination dt.label {
	display:none;
}

.pagination span.selected a {
	background: #121212 none   ;
	color: #ffffff;
	border: 0  ;
	height: 15.99px;
	font-weight:bold;
	padding: 2px 4px;
	margin-left: 1px;
}

.pagination .separator,
.pagination .elipsis {
	background: none;
	border: 0;
}

.pagination .separator:hover {
	border: 0;
}

.pagination li.jumptopage {
	text-align:center;
}


.pagination span a.popupctrl {
	height: 15.99px;
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-right: 4px;
	padding-left: 18px;
}

.pagination .popupmenu:hover a.popupctrl {
	border: 1px solid #4a4a4a;
	color: #777777;
}

/* TEXT CONTROLS */

.textcontrols a,
a.textcontrol {
	position:relative;
	padding: 3px 5px;
	font:    11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	line-height: 1.230;
	text-decoration:none;
	border: 0  ;
	color: #777777;
	background: none   ;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

.textcontrols a img,
a.textcontrol img {
	position:absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover img,
a:hover.textcontrol img {
	position: absolute;
	bottom:2px;
	left:-2px;
}

.textcontrols a:hover,
a:hover.textcontrol {
	background:#9f0811 none   ;
	text-decoration:none;
	color: #ffffff;
}

.textcontrols a:hover,
a:hover.textcontrol {
	text-decoration:none;
}

.blockhead a.textcontrol {
	float:right;
	font:   11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	margin-top: -4.5px;
	text-transform: none;
}

.blockhead a.textcontrol:hover {
	color: #ffffff;
}

/* FORUMJUMP (navpopup) */

.navpopupmenu {
	text-align:right;
	float: right;
	display:block;
	padding: 0;
	padding-top: 3px;
	clear: left;
	margin-left: 10px;
	font-size: 12px;
	margin-top: 0;
}

* html .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu a.textcontrol, .navpopupmenu a.popupctrl, .navpopupmenu.popupmenu.nohovermenu a.textcontrol, .navpopupmenu.popupmenu.nohovermenu a.popupctrl {
	text-decoration:none;
	color: #777777;
	border: 0  ;
	background:  none   ;
	_background-image: none;
	font:    11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	padding: 3.3333333333333px 6.6666666666667px;
	-moz-border-radius: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}

.navpopupmenu a.textcontrol:hover, .navpopupmenu a.popupctrl:hover, .navpopupmenu.popupmenu.nohovermenu a.textcontrol:hover, .navpopupmenu.popupmenu.nohovermenu a.popupctrl:hover {
        background: #9f0811 none   ;
        color: #ffffff;
        _background-image: none;
}

.navpopupmenu .popupctrl .ctrlcontainer {
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-left: 15px;
	white-space:nowrap;
}

.navpopupbody {
	width:auto;
	max-height:350px;
	text-align:left;
	*overflow:auto;
	overflow-y:scroll;
	left:auto;
	right:0;
}

.navpopupbody li {
	overflow:hidden;
	min-width: 200px;
}

.navpopupbody li.optionlabel {
	text-align:center;
	font-weight:bold;
}

/**
* Not pretty, but it works...
*/
.navpopupbody .d1  a, option.d1  { text-indent:20px; }
.navpopupbody .d2  a, option.d2  { text-indent:40px; }
.navpopupbody .d3  a, option.d3  { text-indent:60px; }
.navpopupbody .d4  a, option.d4  { text-indent:80px; }
.navpopupbody .d5  a, option.d5  { text-indent:100px; }
.navpopupbody .d6  a, option.d6  { text-indent:120px; }
.navpopupbody .d7  a, option.d7  { text-indent:140px; }
.navpopupbody .d8  a, option.d8  { text-indent:160px; }
.navpopupbody .d9  a, option.d9  { text-indent:180px; }
.navpopupbody .d10 a, option.d10 { text-indent:200px; }
.navpopupbody .d11 a, option.d11 { text-indent:220px; }
.navpopupbody .d12 a, option.d12 { text-indent:240px; }
.navpopupbody .d13 a, option.d13 { text-indent:260px; }
.navpopupbody .d14 a, option.d14 { text-indent:280px; }
.navpopupbody .d15 a, option.d15 { text-indent:300px; }
.navpopupbody .d16 a, option.d16 { text-indent:320px; }
.navpopupbody .d17 a, option.d17 { text-indent:340px; }
.navpopupbody .d18 a, option.d18 { text-indent:360px; }
.navpopupbody .d19 a, option.d19 { text-indent:380px; }
.navpopupbody .d20 a, option.d20 { text-indent:400px; }

/* LEFT / RIGHT DT+DD */

dl.stats.totals {
	float:right;
	padding:5px;
}

dl.stats dt {
	display:inline;
	color:#777777;
}
dl.stats dt:after {
	content:":";
}
dl.stats dd {
	display:inline;
}

/* BLOCK STATS */
dl.statsblock dt {
	display:block;
	float:left;
	clear:left;
	width:25%;
}

dl.statsblock dd {
	display:block;
	float:left;
	margin-left:10px;
}

/* LIGHT-TABS */

dl.tabslight {
	border-bottom:solid 0px #6b91ab;
	padding-left:20px;
	margin-bottom:1em;
	height:25px;
	margin-top:15px;
}

dl.tabslight dt {
	display:none;
}

dl.tabslight dd {
	float:left;
}

dl.tabslight dd a {
	font-size:11px;
	/*font-weight:bold;*/ /*asus*/
	color:#777777;
	text-decoration:none;
	text-align:center;

	padding:0 10px;
	min-width:55;
	height:25;
	line-height:25px;
	display:block;

	border:0  ;
	background-color:#121212;

	margin-left:-0;
	margin-bottom:-0;

	-moz-border-radius-topleft:5px;
	-moz-border-radius-topright:11px;
	-webkit-border-top-left-radius:3px;
	-webkit-border-top-right-radius:11px;
	border-top-left-radius:3px;
	border-top-right-radius:11px;
}

html>/**/body dl.tabslight dd.selected a,
html>/**/body dl.tabslight dd.selected a:hover {
	position:relative;
	border-bottom: 0  transparent;
	background:#f1f3f8 none   ;
}
* dl.tabslight dd.selected a, * dl.tabslight dd.selected a:hover {
	border-bottom: 0  transparent;
	background:#f1f3f8 none   ;
}

dl.tabslight dd a:hover {
	color:#e30000;
	background:  repeat-x 0 -px;
}

/* COLUMN SORT LINKS */

.columnsort a,
.columnsort span {
	display:block;
	text-decoration:none;
	white-space:nowrap;
	text-align: left;
}

.columnsort a:hover {
	background-color:#9f0811;
	text-decoration:none;
	color: #ffffff; /*asus*/
}

tr.columnsort th {
	white-space:nowrap;
}

/* MISC */

div.collapse {
	position:relative;
}

a.collapse {
	float:right;
	right:10px;
	top:20px;
	position:absolute;
}

.blockhead a.collapse {
	top: 10px;
}

#forumrules {
	margin-bottom: 10px;
	border-bottom: 0  ;
	border-left: 0  ;
	border-right: 0  ;
	border-top: 1px solid #121212;
	background:  none   ;
}

#forumrules ul.youcandoblock {
	float:left;
	width:55%;
	margin-bottom: 10px;
	overflow:hidden;
}

#forumrules ul.bbcodeblock {
	float:right;
	width:42%;
	text-align:right;
	overflow:hidden;
}

#forumrules .rules_link {
	margin-top: 10px;
	width: 42%;
	padding-left: 55%;
}

.errorblock ul.blockrow.error > li {
	border-bottom:solid 1px #cedfeb;
	padding-bottom:10px;
	margin-bottom:10px;
}

.errorblock ul.blockrow.error li:last-child {
	border-bottom:none;
	padding-bottom:0;
	margin-bottom:0;
}

blockquote.preview {
	font:   13px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
}

blockquote.preview.forumcontent {
	font:   13px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
}

blockquote.preview .bbcode_container div.bbcode_code,
blockquote.preview .bbcode_container pre.bbcode_code {
	margin:0;
	padding:6px;
	border:1px inset;
	text-align:left;
	overflow:auto;
	direction:ltr;
	background:#f2f6f8  repeat-x;
	/*height:;*/
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code {
	margin:0;
	text-align:left;
	direction:ltr;
	font-size:12px;
}

blockquote.preview .bbcode_container code.bbcode_code code {
	white-space:nowrap;
}

blockquote.preview fieldset.postattachlist {
	background:  bottom repeat-x;
	border-top:solid 1px #cedfeb;
	padding-bottom:1em;
}

blockquote.preview .bbcode_container div.bbcode_quote {
	margin:0 10px;
	margin-bottom: 10px;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	background: #121212 none   ;
	border-radius: ;
	border: 0  ;
	font: italic  normal 13px Tahoma,Calibri,Verdana,Geneva,sans-serif;
	position: relative;
	top: 0;
}


blockquote.preview .bbcode_container .bbcode_quote_container {
	background: transparent url(images/misc/quote-left.png) no-repeat  left;
	display:block;
	width: 9px;
	height: 13px;
	position: absolute;
	top: 5;
	left: -9px;
}

blockquote.preview .bbcode_quote div.quote_container {
	border-top: 1px solid ;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
	padding: 5px 10px 5px 10px;
}

.attachments {
	border: 1px solid #cecece;
	background: #ececec none   ;
	margin: 20px 30px;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
	padding: 5px 10px 5px 10px;
	font-size: 12px;
}

.attachments fieldset {
	margin: 5px 0;
}

.attachments img.inlineimg {
	position: relative;
	top: 2px;
}


blockquote.preview .signature {
	margin-top:1.5em;
	border-top:solid 1px rgb(187,187,187);
	padding-top:0.5em;
}

.commalist li {
	display:inline;
}

.commalist li:after {
	content:",";
}

.commalist li:last-child:after {
	content:"";
}

ul.username li a,
ol.username li a,
a.username {}
.commalist li a.username {
	display:inline;
}


.standard_error {
	max-width:600px;
	margin:0 auto;
	padding:4em 0 6em;
}

a.extlink {
	width:10px;
	height:10px;
	text-indent:-9999px;
	position:absolute;
	margin-left:2px;
	background:transparent url(images/buttons/extlink.png) no-repeat  ;
}

.hidden {
	display:none;
}

/* Auto-clearing of floats */
.floatcontainer:after,
.formcontrols .blockrow:after,
dl.stats:after {
	content:".";
	display:block;
	height:0;
	clear:both;
	visibility:hidden;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:inline-block;
	font-weight:normal;
}
/* IE-Mac hide \*/
* html .floatcontainer,
.formcontrols .blockrow,
dl.stats {
	height:1%;
}
.floatcontainer,
.formcontrols .blockrow,
dl.stats {
	display:block;
}
.floatcontainer.hidden {
	display:none;
}
/* End IE-Mac hide */


/* INLINEMOD */

#inlinemod_formctrls {
	float:right;
}

#inlinemod_formctrls .popupctrl {
	text-decoration:none;
	background:  none   ;
	padding-right: 0;
	color: #777777;
	border: 0  ;
	font:    11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	float: left;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
}

#inlinemod_formctrls a.popupctrl:hover {
	background: #9f0811 none   ;
	color: #ffffff;
}

#inlinemod_formctrls a.popupctrl span.ctrlcontainer {
	display:inline-block;
	background: transparent url(images/misc/black_downward_arrow.png) no-repeat center left;
	padding-top: 3.3333333333333px;
	padding-right: 5px;
	padding-bottom: 3.3333333333333px;
	padding-left: 15px;
	font-size: 11px;
	float: left;
}

#inlinemod_formctrls .popupbody {
	left:auto;
	right:0px;
}


/* FORUM DISABLED */
div.forum_disabled {
	text-align:center;
	color:red;
	background-color:white;
	padding:10px;
	font-size:20px;
}

/**
* UN-RESET
*
* These definitions are designed to undo the effects of YUI Reset, but only when contained within a *.reset element.
* Code is based on YUI Base
*/

/*
Copyright (c) 2009, Yahoo! Inc. All rights reserved.
Code licensed under the BSD License:
http://developer.yahoo.net/yui/license.txt
version: 2.7.0
*/
/**
 * YUI Base
 * @module base
 * @namespace yui-
 * @requires reset, fonts
*/

.restore body {
	/* For breathing room between content and viewport. */
	margin:10px;
}

.restore h1 {
	/* 18px via YUI Fonts CSS foundation. */
	font-size: 138.5%;
}

.restore h2 {
	/* 16px via YUI Fonts CSS foundation. */
	font-size: 123.1%;
}

.restore h3 {
	/* 14px via YUI Fonts CSS foundation. */
	font-size: 108%;
}

.restore h1,
.restore h2,
.restore h3 {
	/* Top & bottom margin based on font size. */
	margin: 1em 0;
}

.restore h1,
.restore h2,
.restore h3,
.restore h4,
.restore h5,
.restore h6,
.restore strong,
.restore dt {
	/* Bringing boldness back to headers and the strong element. */
	font-weight: bold;
}
.restore optgroup {
	font-weight:normal;
}

.restore abbr,
.restore acronym {
	/* Indicating to users that more info is available. */
	border-bottom: 1px dotted #000;
	cursor: help;
}

.restore em {
	/* Bringing italics back to the em element. */
	font-style: italic;
}

.restore del {
	/* Striking deleted phrases. */
	text-decoration: line-through;
}

.restore blockquote,
.restore ul,
.restore ol,
.restore dl {
	/* Giving blockquotes and lists room to breath. */
	margin: 1em;
}

.restore ol,
.restore ul,
.restore dl {
	/* Bringing lists on to the page with breathing room. */
	margin-left: 2em;
}

.restore ol > li,
.restore ol.decimal > li {
	list-style:decimal outside;
}

.restore ol.upper-roman > li {
	list-style:upper-roman outside;
}

.restore ol.lower-roman > li {
	list-style:lower-roman outside;
}

.restore ol.upper-alpha > li {
	list-style:upper-alpha outside;
}

.restore ol.lower-alpha > li {
	list-style:lower-alpha outside;
}

.restore ul > li {
	/* Giving UL's LIs generated disc markers. */
	list-style: disc outside;
}

.restore dl dd {
	/* Giving UL's LIs generated numbers. */
	margin-left: 1em;
}

.restore th,
.restore td {
	/* Borders and padding to make the table readable. */
	border: 1px solid #000000;
	padding: 0.5em;
}

.restore th {
	/* Distinguishing table headers from data cells. */
	font-weight: bold;
	text-align: center;
}

.restore caption {
	/* Coordinated margin to match cell's padding. */
	margin-bottom: .5em;
	/* Centered so it doesn't blend in to other content. */
	text-align: center;
}

.restore sup {
	/* to preserve line-height and selector appearance */
	vertical-align: super;
}

.restore sub {
	/* to preserve line-height and selector appearance */
	vertical-align: sub;
}

.restore p,
.restore fieldset,
.restore table,
.restore pre {
	/* So things don't run into each other. */
	margin-bottom: 1em;
}
/* Opera requires 1px of passing to render with contemporary native chrome */
.restore button,
.restore input[type="checkbox"],
.restore input[type="radio"],
.restore input[type="reset"],
.restore input[type="submit"] {
	padding:1px;
}

.restore li > p {
	margin-bottom: 0em;
}

.unread {
	font-weight:bold;
}

/* Cloud tags */
li.tag {
	display:inline;
	margin-right:5pxpx;
}

li.tag label.mine {
	font-weight:bold;
}

li.tag a {
	text-decoration:none;
}

li.taglevel1 {
	font-size:xx-small;
}

li.taglevel2 {
	font-size:small;
}

li.taglevel3 {
	font-size:medium;
}

li.taglevel4,
li.taglevel5 {
	font-size:large;
}

li.taglevel5 {
	font-weight:bold;
}

li.tag.option {
	padding:10px;
}

/* Tag Controls */
/* Tagging Controls */

#thread_tags_list input#tag_add_input {
	display:block;
	width:90%;
	margin-top:2px;
	margin-bottom:0.5em;
}

#thread_tags_list  .description {
	color:#777777;
}

#thread_tags_list  .actionbuttons {
	text-align:right;
	margin-bottom:1em;
}

#tag_edit_list {
	list-style:none;
	margin:0;
	padding:0;
}

#tag_edit_list li {
	float:left;
	display:block;
	width:100px;
}

#tag_edit_list li.mine {
	font-weight:bold;
}

/* We don't use class="inlineimg" in vB4
img.inlineimg {
	padding:0 10px;
}
*/


/* Social Bookmarks */

#social_bookmarks_list li {
	display:block;
	float:left;
	padding-left:10px;
}

/* Imagereg */
#imagereg {
	vertical-align:middle;
	margin-bottom:5px;
}


#wol_navpopup.navpopupmenu {
	margin-bottom:6px;
}
.navlinks {
	background:  none   ;
	border-top: 1px solid #9e0000;
	padding: 10px 0;
	text-align: center;
	color: #5d5d5d;
	font-size: ;
        margin-top: 20px;
        margin-bottom: 20px;
width:100%;
clear:both;
}

.cleardiv {
	clear:both;
}

#ajax_post_errors {
	position:absolute;
	width:420px;
	z-index:500;
	padding:2px;
	background-color:#FFFFFF;
	-moz-border-radius-topright:;
	-moz-border-radius-topleft:;
	-webkit-border-top-right-radius:;
	-webkit-border-top-left-radius:;
	border-top-right-radius:;
	border-top-left-radius:;
}

#ajax_post_errors .blockrow {
	border-bottom:1px solid #121212;
	border-left:1px solid #121212;
	border-right:1px solid #121212;
}
#ajax_post_errors .blockfoot {
	text-align:center;
}

#ajax_post_errors_message ol {
	margin:1em;
	margin-left:2em;
}

#ajax_post_errors_message ol.numeric li,
#ajax_post_errors_message ol li {
	list-style-image:none;
	list-style-position:outside;
	list-style-type:decimal;
}

.highlight {
	background: #FFEB90 none repeat-x  ;
}

.clear {
	clear: both;
}

/* Facebook Section */
label#fb_pulishlabel {
	font-size: 12px;
	font-weight: normal;
	margin-right: 10px;
	vertical-align: middle;
}

#fb_likeframe {
	border: none;
	overflow: hidden;
	height: 27px;
	width: 260px;
	vertical-align: text-bottom;
}
#pagetitle #fb_likeframe {
	float: right;
}
.blogbit #fb_likeframe {
	margin-top: 7px;
}

/* Fix for Facebook Connect rtl scrollbar */

#recaptcha_area input {
 color:#fff;
}
#recaptcha_area {
	direction:ltr;
	display:inline;
}

#recaptcha_widget_div {
	float:left;
}

.member_blockrow .error 
{ 
        padding:4px 10px 4px 10px; 
}  

div.cms_table {
	overflow:auto;
	overflow-y:hidden;
	padding:1px;
}

table.cms_table_grid,
table.wysiwyg_cms_table_grid {
	border-collapse: collapse;
}

td.cms_table_grid_td,
td.wysiwyg_cms_table_grid_td {
	border:  solid ;
}

table.cms_table_outer_border,
table.wysiwyg_cms_table_outer_border {
	border-collapse: collapse;
	border:  solid ;
}

td.cms_table_td,
td.cms_table_outer_border_td {
	border:none;
}
#api_memberbar-zone {
margin-top: 0;
height: auto;
}


/* CSS Document */

/**
* CHROME: HEADER, NAVBAR, BREADCRUMB, FOOTER
*/

/*************************************************/
/* HEADER */

.above_body {
	background: none   ;
	_background-image: none;
	margin: 25px 0px 30px 0px;
	padding: 0px 0px 0px 0px;
	width: 100%;
	-moz-border-radius-bottomleft:;
	-moz-border-radius-bottomright:;
	-webkit-border-bottom-left-radius:;
	-webkit-border-bottom-right-radius:;
	border-bottom-left-radius:;
	border-bottom-right-radius:;
}

.doc_header {
	_background-image:none;
	border:  ;
	color:#a8a8a8;
	font:normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	position:relative;
	min-height:35px;
	/*padding-bottom:5px;*/
	/*margin-bottom:52px;*/
}
.doc_header a { color:; }
.doc_header a:hover { color:; }
.doc_header hr { display: none; }
.logo-image {
        float: left;
        clear: right;
        min-height: 2em;
        height: auto !important;
        height: 2em;
        padding:    ;
}

.toplinks {
	position:absolute;
	right:20px;
	top:0;
	color:#a8a8a8;
	font: normal normal normal 11px Arial, Tahoma, Calibri, Verdana, Geneva, sans-serif;
	text-align:right;
}

.toplinks ul.isuser li#fb_headerbox.hidden,
.toplinks ul.nouser li#fb_headerbox.hidden {
	display: none;
}
.toplinks ul.isuser li#fb_headerbox a,
.toplinks ul.nouser li#fb_headerbox a {
	padding-top: 0;
	background: none;
	cursor: pointer;
}
	li#fb_headerbox a#fb_link {
		position: relative;
	}
	li#fb_headerbox a#fb_link #fb_squarepic{
		position:absolute;
		right:-6px;
		top:5px;
		z-index:1;
		border:1px solid #B3CCE7;
		padding:1px;
	}
	li#fb_headerbox a#fb_link #fb_icon{
		position:absolute;
		right:10px;
		top:1px;
		z-index:2;
	}

.toplinks ul.isuser, .toplinks ul.nouser {
	display:block;
	float: right;
	clear: left;
	list-style: none;
}

.toplinks ul.isuser li {
	display:inline;
	position: relative; 
	color: #a8a8a8;
	float: right;
	clear: left;
	padding-right: 10px;
        background:;
}

.toplinks ul.isuser .popupbody li {
	display:block;
	float: none;
	clear: none;
	padding:0;
	margin:0;
}

.toplinks ul.isuser li.welcomelink {
	display: block;
	float: right;
	clear: left;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
}

.toplinks ul.isuser li.logoutlink {
	top: 0;
}

.toplinks ul.isuser li a {
	display: block;
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	font-weight:bold;
	color:#a8a8a8;
}

.toplinks ul.isuser li li a {
	float: none;
	margin-left: 0;
}

.toplinks ul.isuser li.welcomelink a {
	display:inline;
	float: none;
	clear: none;
	margin-left: 0;
}

.toplinks ul.isuser li a:hover {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 4px;
	background: ;
	color:rgb(255, 255, 255);
}

.toplinks ul.nouser li {
	display:inline;
}

.toplinks ul.nouser li a {
	float:left;
	clear:right;
	color:#a8a8a8;
}

.toplinks ul.nouser li a{
	display: block;
	float: right;
	clear: left;
	color:#a8a8a8;
	position: relative;
	padding: 6px 10px 0 10px;
	background: ;
	-moz-border-radius-bottomleft: ;
	-webkit-border-bottom-left-radius: ;
	border-bottom-left-radius: ;
	-moz-border-radius-bottomright:;
	-webkit-border-bottom-right-radius:;
	border-bottom-right-radius:;
	height:20px;
	font-weight:bold;
	font-size:12px;
	margin-right: 0px;
}

.toplinks ul.nouser li a:hover {
	background: ;
	color:rgb(255, 255, 255);
}

.toplinks ul.isuser li.popupmenu, .toplinks ul.isuser .notifications, .toplinks ul.isuser .nonotifications  {
	color: #9f9f9f;
	position: relative;
}

.toplinks ul.isuser li.popupmenu ul li {
	position: relative;
	top: 0;
	margin: 0;
	text-align: left;
}

.toplinks ul.isuser .notifications .popupbody {
	background: ;
	border: 1px solid ; /* makes it look consistent with the popup background */
}

.toplinks ul.isuser .notifications .popupbody li a{
	color: #9f9f9f;
	padding: 0 5px;
	font-weight: normal;
	background:;
	border-top:1px solid ; /* makes it look consistent with the popup background */
	/*position: relative;*/
	text-align: left;
	padding-left: 30px;
	line-height: 26px;
}

.toplinks ul.isuser .notifications .popupbody li a span {
	position: absolute;
	line-height: 26px;
	left: 5px;
}

.toplinks ul.isuser .notifications .popupbody li a:hover {
	background:#9f0811;
	color: #9f9f9f;
	text-decoration: underline;
}

.toplinks form {
	min-width: 220px;
	display:block;
	margin-right: 10px;
	text-align: left;
	float: right;
	clear: left;
	_width:20%;
}

.toplinks .logindetails {
	padding: 0 10px 10px 0; /*asus*/
	text-align: center;
	background: ;
	-moz-border-radius-bottomleft: ;
	-webkit-border-bottom-left-radius: ;
	border-bottom-left-radius: ;
	-moz-border-radius-bottomright:;
	-webkit-border-bottom-right-radius:;
	border-bottom-right-radius:;
	height: 26px;
}

.toplinks form input {
	margin: 3px 0 0;
	vertical-align: baseline;
	font-size: 11px;
	padding: 5px;
	border: 0;
}

.toplinks form input.textbox {
	color: #ffffff;
}

.toplinks form input.default-value {
	color: #828282;
	background-color: #454545;
}

.toplinks .remember {
	/*margin: -3.3333333333333px 0 0 20px;*/ /*asus*/
	font-size: 10px;
        color: ;
}

.toplinks .remember input {
	vertical-align: baseline;
}

.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}

.notifications a.popupctrl:link, .notifications a.popupctrl:visited,
.toplinks a:link, .toplinks a:visited {
	color: #a8a8a8;
	text-decoration:none;
}

.notifications>a:link, .notifications>a:visited {
        /* ie6 hack: broke this rule out on its own: the > selector makes ie6 ignore rule entirely. */
	color: #a8a8a8;
	text-decoration:none;
}

.notifications > a:hover,
.notifications a.popupctrl:hover {
	color: rgb(255, 255, 255);
}

.notifications {
	font-size:11px;
	color: #a8a8a8;
	-moz-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
	border-bottom-left-radius: 5px;
	-moz-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	border-bottom-right-radius: 5px;

}

.notifications a {
	text-decoration:none;
}

.notifications .popupbody {
	color:#9f9f9f;
}

.header hr,
.header h2 {
	display:none;
}

/*************************************************/
/* NAVBAR */

.navbar {
	position:relative;
	height:52px;
	background: none   ;
	margin:10px 0px 0px 0px;
	color:#555555;
	font:   0.95em "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;;
	border:0px solid rgb(255, 255, 255);
	-moz-border-radius-bottomleft:;
	-moz-border-radius-bottomright:;
	-webkit-border-bottom-left-radius:;
	-webkit-border-bottom-right-radius:;
	border-bottom-left-radius:;
	border-bottom-right-radius:;
}
.navbar a { color:#fff; }
.navbar a:hover {
        color:#ffffff;
        text-decoration: none; /*asus*/
}

.navtabs {
	background: none   ;
	padding: 0px 0px 0px 0px;
	height: 26px;
        _background-image:none;
}

.navtabs li:first-child {
	border-left: 0  ;
}

.navtabs ul {
/*	background: ; */
	position:absolute;
	top:26px;
	left:0px;
	width:100%;
        border-top:0  ;
	-moz-border-radius-bottomleft:;
	-moz-border-radius-bottomright:;
	-webkit-border-bottom-left-radius:;
	-webkit-border-bottom-right-radius:;
	border-bottom-left-radius:;
	border-bottom-right-radius:;
	margin-right:-65px;
/* This is to fix RTL menu issue under Opera */
        margin-top: 7px; /*asus*/
	direction:ltr;
        opacity:0.9; /*asus*/
        -moz-opacity: 0.9; /*asus*/
        filter:alpha(opacity=90); /*asus*/
}

.navtabs li {
	float:left;
	border-right: 0  ;
}

.navtabs ul li:first-child {
	margin-left: 10px; /*asus*/
	border-left: 0;
}

#navtabs .popupmenu ul li:first-child {
	margin-left: 0px;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}

.navtabs li a {
	height:26px;
	line-height:26px;
	/*padding: 10px 16px;*/ /*asus*/
        letter-spacing: 0.1em; /*asus*/
}

.navtabs li a.navtab {
	border-top: 0  ;
	border-left: 0  ;
	display:block;
	background: none   ;
        _background-image:none;
	min-width:45px;
	width:auto !important;
	width:45px;
	_min-width:60px;
	_width:auto !important;
	_width:60px;
	text-align:center;
	color: #777777;
	font:normal normal normal 0.95em "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;;
	text-decoration:none;
	line-height:26px;
}

.navtabs li a.navtab:hover {
	background: none    0 -px;
        _background-image:none;
	/*color:#e30000;*/
	color:#ffffff;
}

.navtabs li.selected {
	height:26px;
	color:#ffffff;
}

.navtabs li.selected a.navtab {
	color:#ffffff;
	background: none   ;
        _background-image:none;
	position:relative;
	top:-px;
	padding-top:px;
        text-transform: uppercase; /*asus*/
	z-index:10;
}
.navtabs li.selected li a,
.navbar_advanced_search li a {
	text-decoration:none;
        font-size: .80em; /*asus*/
	/*font:   0.95em "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;;*/
	line-height: 26px;
        text-transform: uppercase; /*asus*/
        letter-spacing: 1.5px; /*asus*/
}
.navtabs li.selected li a {
	color:#fff;
	padding:2px 5px;
}

.navbar_advanced_search li {
	height: 26px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:#fff;
}

.navbar_advanced_search li a:hover {
	color:#ffffff;
	text-decoration:underline;
}

.navtabs li.selected li a:hover {
	color: #e30000; /*asus*/
	/*text-decoration:underline; /*asus*/
}

.navtabs li.selected .popupbody li > a {
	padding:0pxpx 10px;
	text-indent: 0;
	color: #9f9f9f;
}

.navtabs li.selected li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border-radius:3px;
	border:solid 1px transparent;
	_border: none;
	background:transparent url(images/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/misc/arrow.gif');
	color: #fff;
}

.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: #9f0811 url(images/misc/arrow.png) right center no-repeat ;
	-moz-border-radius-bottomleft: ;
	-moz-border-radius-bottomright: ;
	-webkit-border-bottom-right-radius:;
	-webkit-border-bottom-left-radius: ;
	border-bottom-right-radius:;
	border-bottom-left-radius: ;
       _background-image:url('images/misc/arrow.gif');
}

.toplinks .nonotifications a.popupctrl {
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background: transparent url(images/misc/arrow.png) no-repeat right center;
        _background-image:url('images/misc/arrow.gif');
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active , .toplinks .notifications a.popupctrl.active{
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 15px;
	background:  url(images/misc/arrow.png) no-repeat right center;
        _background-image:url('images/misc/arrow.gif');
}

.toplinks .notifications a.popupctrl:hover {
	padding-top: 3px;
}

.navtabs li.selected li:hover a.popupctrl {
	background:  url(images/misc/arrow_white.png) no-repeat right center; /*asus*/
        _background-image:url('images/misc/arrow_white.gif'); /*asus*/
	border-color:;
	background-color:;
	text-decoration:none;
}

.navtabs li.selected li:hover a.popupctrl.active,
.navtabs li.selected li a.popupctrl.active {
	background:  url(images/misc/arrow_white.png) no-repeat right center; /*asus*/
        _background-image:url('images/misc/arrow_white.gif'); /*asus*/
	border-color:;
	background-color:;
	color:#fff;
	text-decoration:none;
}

.navtabs .popupbody {
	border: 1px solid #000000;
	background: ;
	width: auto;
}

.navtabs .popupbody li {
	float:none;
	border-top: 1px solid #333333; /*asus*/
}

.navtabs .popupbody li a:hover {
	background-color: #9f0811;
}

.nonotifications div.popupbody {
	min-width: 170px;
	width: auto !important;
	width: 170px;
	background: ;
	border: 1px solid ;
}

.nonotifications .popupbody p {
	color: #9f9f9f;
	text-align: left;
	background: ;
	border-top: 1px solid ;
	padding: 0;
	text-indent: 5px;
	line-height: 26px;
	display:block;
}

.toplinks .nonotifications .popupbody a {
	background: ;
	color: #9f9f9f;
	float: none;
	clear: none;
	padding: 0 5px;
	margin-left: 0;
	text-align: left;
	line-height: 26px;
}

.toplinks .nonotifications .popupbody a:hover {
	background:#9f0811;
	color: #9f9f9f;
	text-decoration: underline;
	padding: 0 5px;
}

.globalsearch {
	position:absolute;
	width:180px;
	right: 20px;
	top: 0px;
	float: right;
	clear: left;
	text-align:right;
	line-height: 1.0em;
	display:block;
}

.navbar_search {
	position:relative;
	width:180px;
	right: -20px;
	display:block;
}

.navbar_search input {
	font-size: 11px;
	vertical-align:middle;
	padding: 1px;
	/*border:1px solid #5a7f97;*/ /*asus*/
}

.globalsearch .textboxcontainer {
	height: 26px;
	border-left:0  ;
	display:inline-block;
	float: left;
	text-align:center;
}

.globalsearch .textboxcontainer span {
	border-top: 0  ;
	border-left: 0  ;
	display: inline-block;
	height: 22px;
	padding-left: 2px;
	padding-right: 2px;
	padding-top: 3px;
	margin-bottom: 1px;
	width: 147px;
        _width:140px; /* ie6 hack */
}

.globalsearch input.textbox {
        margin: -4px 0 0 -32px; /*asus*/
        height: 13px; /*asus*/
        padding: 7px 30px 5px 7px; /*asus*/
	width: 170px; /*asus*/
}

.toplinks form input.loginbutton {
	font-size: 11px;
	padding: 3px 5px 3px 5px; /*asus*/
	background-color:  ;
	/*border:solid 1px rgb(65,93,141);*/ /*asus*/
}

.globalsearch .buttoncontainer {
	height: 26px;
	border-left:0  ;
	display:inline-block;
	border-right:0  ;
	width: 25px;
	overflow: hidden;
	float: right;
}

.globalsearch .buttoncontainer span{
	border-top: 0  ;
	border-left: 0  ;
	height: 23px;
	padding-left: 4px;
	padding-top: 2.5px;
	display:inline-block;
}

.globalsearch .searchbutton {
        height: 17px; /*asus*/
	margin: 0; /*asus*/
	padding: 0; /*asus*/
        position: absolute; /*asus*/
        right: 8px; /*asus*/
        top: 3px; /*asus*/
	width: 17px; /*asus*/
}

/*************************************************/
/* BREADCRUMB */

.breadcrumb > ul {
	background:transparent url(images/misc/navbit-home.png) left top no-repeat;
	border:none;
}

.breadcrumb .navbit {
	float:left;
	background-image:url(images/misc/navbit-arrow-right.png);
	background-position:right center;
	background-repeat:no-repeat;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit:first-child {
	padding-left:0;
}

.breadcrumb .navbit.lastnavbit {
	background: transparent;
}

.breadcrumb .navbit.lastnavbit span {
	float:left;
	background: transparent;
	padding-right:10px;
	padding-left:3px;
}

.breadcrumb .navbit > a, .breadcrumb .lastnavbit > span {
	display:block;
	padding:2px 4px;
	float:left;
	background-color:transparent;
	border:1px solid transparent;
	-moz-border-radius:;
	-webkit-border-radius:;	
	border-radius:;	
}

.breadcrumb .navbit a:hover {
	/*border-color:#585858;*/ /*asus*/
	background-color:;
}

.breadcrumb .navbit a {
	text-decoration:none;
}

.breadcrumb .navbit a.popupctrl {
	background-image:url(images/misc/navbit-arrow-right.png);
	background-position:center center;
	padding:2px 6px;
	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;
}

.breadcrumb .navbit a.popupctrl:hover {
	background-color:#9f0811;
	color:#e30000;
}

.breadcrumb hr {
	display:none;
}

/*************************************************/
/* PAGE TITLE */
	
#pagetitle {
	padding:0px 0px 0px 0px;
	clear:both;
	padding-top: 5px;
	background: none   ;
	border:  ;
}
#pagetitle a { color:; }
#pagetitle a:hover { color:; }

#pagetitle h1 {
	color: inherit;
	font-size:22px;
	font-weight:;
        font-family: "Cuprum",arial,serif; /*asus*/
}

#pagetitle .description {
	color: inherit;
	font-size: 11.05px;
        margin: 10px 0; /*asus*/
}

/*************************************************/
/* NEW CONTENT LINK */
.newcontent_textcontrol {
	background: #9f0811 none   ;
	_background-image: none;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
	/*-moz-box-shadow: 0 3px 8px ;*/ /*asus*/
	/*-webkit-box-shadow: 0 3px 8px ;*/ /*asus*/
	/*box-shadow: 0 3px 8px ;*/ /*asus*/
	font:   normal 14px Arial, sans-serif;
	color: rgb(255, 255, 255);
	padding: 4px 15px 4px 15px;
	border: 0  ;
	display:block;
	float: left;
	clear: right;
}
.newcontent_textcontrol span {
	font-size:15px;
	font-weight:bold;
	display:inline;
}
.newcontent_textcontrol:hover {
	background: #e30000 none   ;
	_background-image: none;
	color: rgb(255, 255, 255);
	text-decoration: none;
}


/*************************************************/
/* FOOTER */

.footer {
	clear:both;
	margin-top:15px;
	text-align:right;
	display:block;
	/*width: 100%; VBIV-10173*/
	/*-moz-box-shadow: -2px 2px 2px ;*/ /* asus */
	/*-webkit-box-shadow: -2px 2px 2px ;*/ /* asus */
	/*box-shadow: -2px 2px 2px ;*/ /* asus */
	background: none   ;
	padding:5px 0px 5px 0px;
	border:0  ;
	color:;
	font:  normal 0.95em Lucida Grande, Tahoma, Calibri, Verdana, Geneva, sans-serif;
}
.footer a { color:#8b8b8b; }
.footer a:hover { color:#c51000; }


.footer_copyright,
.footer_morecopyright {
	padding-bottom:5px;
	color:#8b8b8b;
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	margin-top: 10px;
	text-align:center;
	display:block;
}

.footer_time {
	color:#8b8b8b;
	font:  normal 11px Tahoma, Calibri, Verdana, Geneva, sans-serif;
	padding-top:10px;
	text-align:center;
}

.footer_select {
	float:left;
	text-align:left;
	margin-left: 10px;
	margin-top: 0;
}

.footer_links {
	margin-right: 10px;
	margin-top: 2px;
}

.footer_links li {
	display:inline;
	margin-left:5px;
}

.below_body .time {
	color: #8b8b8b;
}

.notices {
	background: ;
	margin: 5px 0;
}

.notices li {
	background: #333 none   ;
	font-size: 12px;
	color: #ffffff; /*asus*/
	padding:5px 10px;
	margin-bottom:5px;
	/*-moz-box-shadow: -2px 2px 2px #c8c8c8;*/ /*asus*/
	/*-webkit-box-shadow: -2px 2px 2px #c8c8c8;*/ /*asus*/
	/*box-shadow: -2px 2px 2px #c8c8c8;*/ /*asus*/
	text-align: left;
	clear:both;
}

/* from components.css */
/* start styles for template: navbar */
/*doesn't seem to be used anywhere
.popup_inline_break {
	color:#262626;
	margin-left:5px;
	font-weight:bold;
	padding:4px 0px;
}*/
.breadcrumb > ul {
	background-image:none;
	padding-left:0px;
}
.breadcrumb .navbithome {
	float: left;
	padding: 3.5px 0;
}
/* end styles for template: navbar */

/*************************************************/
/* ADS GLOBAL */
.ad_global_header {
}
#ad_global_header1 {
        float:left;
        clear:right;
        padding:0 0 0 0;
        margin:0 0 0 0;
}
#ad_global_header2 {
        float:left;
        padding:0 0 0 0;
        margin:0 0 0 0;
}
#ad_global_below_navbar {
        width:100%;
        padding:0 0 0 0;
        margin:0 0 0 0;
}
#ad_global_above_footer {
        width:100%;
        padding:0 0 0 0;
        margin:0 0 0 0;
        text-align:left;
        clear:both;
}
#ad_board_below_whats_going_on {
        width:100%;
        padding:0 0 0 0;
        margin:0 0 0 0;
        text-align:left;
}
#ad_thread_first_post_content {
        float:right;
        margin:0 0 0 0;
}
#ad_thread_last_post_content {
        float:right;
        margin:0 0 0 0;
        z-index: 1000;
}
.google_adsense_footer {
        clear:both;
}
#navbar_password,#navbar_username,#navbar_password_hint {
background-color: #454545; color:#fff !important;
}


/* CSS Document */

/* Use border box for form elements */
.formcontrols input,select,textarea {
	box-sizing:border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing:border-box;
}
.formcontrols input.textbox {
	height:25px;
	*height:12px;
}
.formcontrols .blocksubhead {
	font-weight:bold;
}

.vbform .blockhead {
	margin-top:2em;
}

.vbform .blockhead:first-child {
	margin-top:0;
}
.settings_form_top_border {
	border-top: 0  ;
}
.blockbody.settings_form_border {
	border-right: 0  ;
	border-left: 0  ;
	border-bottom: 0  ;
}
.vbform {
	clear:both;
	width:auto;
	max-width:100%;
	_width:100%;
	margin:0 auto 2em;
}

.formcontrols {
	border-right: 0  ;
	border-left: 0  ;
	border-bottom: 0  ;
}

.formcontrols .blockrow {
	background:  bottom repeat-x;
	/*border-top:solid 1px #cedfeb;*/ /*asus*/
	padding:10px 5px;
}

/* div.section is needed to resolve IE7 percentage width bug */
.formcontrols .section {
	padding:0 15px;
}

.formcontrols > *:first-child,
.formcontrols .blocksubhead + .blockrow,
.formcontrols .section .blockrow:first-child {
	border-top:none;
}

/* BASIC CONTROL STYLING */

input, textarea, select, button {
	font:   11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	font-weight: normal;
}

.button {
	padding:2px 2px;
}

.button:hover {
	color:#ffffff;
}

.button[type="reset"]:hover {
	color:#ffffff;
}

.textbox,
textarea,
select {
	background:#000000 none   ;
	border:solid 1px #333333; /*asus*/
	padding:4px 5px;
	outline:0;
        color: #ffffff; /*asus*/
	/*-moz-border-radius:3px;*/ /*asus*/
	/*-webkit-border-radius:3px;*/ /*asus*/
	/*border-radius:3px;*/ /*asus*/
}

.textbox[disabled],
textarea[disabled] {
	font-style:italic;
	color:#777777;
}

.formcontrols .blockrow input.textbox:focus,
.formcontrols .blockrow textarea:focus {
	background: #121212; /*asus*/
        color: #ffffff; /*asus*/
}

/* INPUT / SELECT / TEXTAREA / GROUP */

form .rightcol {
	display:block;
	margin-left:212px;
	max-width:496px;
	*margin-left:0;
	float:none;
}

.blockbody.formcontrols .blockrow .rightcol * {
	margin-left:0;
	width:auto;
}

.blockbody.formcontrols .blockrow .rightcol .primary {
	width:50%;
}
.blockbody.formcontrols .blockrow .rightcol textarea.primary {
	width:70%;
}
.blockbody.formcontrols .blockrow .rightcol .description {
	width:auto;
}

.formcontrols .blockrow .primary {
	width:248px;
}
.formcontrols .blockrow .primary.full {
	width:496px;
	float:left;
}

.formcontrols .blockrow .group {
	width:100%;
}

.formcontrols .blockrow .group li {
	margin-top:5px;
}
.formcontrols .blockrow .group li:first-child {
	margin-top:0;
}
.formcontrols .blockrow .group .textbox {
	width:248px;
}

.formcontrols .blockrow .primary.center {

}

.formcontrols .blockrow .primary.center img.icon {
	border:1px solid rgb(65,93,141);
}

.formcontrols .blockrow .titleprefix {
	float:left;
	margin-right:0.5em;
}

.formcontrols .blockrow * .group {
	width:auto;
	float:none;
}

.formcontrols .blockrow input.textbox[size] {
	width:auto;
}

.editor_textbox textarea {
	width:500px;
	max-width:98%;
	min-width:98%;
	height:200px;
	float:none;
}

.editor_textbox textarea, #ie8#fix {
	width:98%;
}

.formcontrols .blockrow input.numeric,
.formcontrols .blockrow select.numeric {
	text-align:right;
}

/* LABELS */

.formcontrols .blockrow label,
.formcontrols .blockrow .group.multifield label,
.formcontrols .blockrow .groupoption label {
	display:block;
	margin-bottom:2px;
}

.formcontrols .blockrow label {
	width:212px;
	float:left;
	font-size:13px;

}
.formcontrols .blockrow label.full {
	width:auto;
	float:none;
	font-weight:bold;
}

.formcontrols .blockrow label.floatlabel {
	margin-left: 10px;

}

.formcontrols .blockrow * label {
	/* undoes the above two rules */
	display:block;
	margin-bottom:auto;
	width:auto;
	float:none;
}

.formcontrols .blockrow .group li label,
.formcontrols .blockrow .group dt label {
	width:212px;
	float:left;
}

.formcontrols .blockrow .group.full li label,
.formcontrols .blockrow .group.full dt label {
	width:auto;
}



.formcontrols .blockrow .label {
	margin-bottom:8px;

}

.formcontrols .blockrow.singlecheck label {
	float:left;
}

.formcontrols fieldset.blockrow legend {
	margin:0;
	font-size:13px;
	font-weight:bold;
	padding-bottom:10px\9; /*IE Hack*/
}

/* DESCRIPTIONS */

.formcontrols .blockrow .description {
	color:#777777;
	font-size:11px;
	max-width:496px;
	margin-left:212px;
	overflow:hidden;
	line-height:150%;
	margin-bottom:5px;
}

.formcontrols .blockrow .group.multifield + .description {
	padding-top:1.3em;
}

.blockrow.texteditor .description {
	float:none;
	width:auto;
	margin-top:2px;
}

.formcontrols .blockrow .group.numeric + .description {
	/* descriptions to the right of numeric groups */
}

.formcontrols .blockrow .singledescription {
	display:block;
	clear:left;
	margin-bottom:10px;
}

/* CHECKBOX / RADIO EXCLUSIVE GROUPS */

.formcontrols .blockrow .group.checkradio {
	width:auto;
}

.formcontrols .blockrow .group.checkradio li label {
	float:none;
}

.formcontrols .blockrow .group.checkradio.full {
	width:100%;
}


.formcontrols .blockrow .group.checkradio.partial {
	width:212px;
}

.formcontrols .blockrow .group.checkradio.horizontal {
	height:30px;
}
.formcontrols .blockrow .group.checkradio.horizontal li label {
	float:left;
	padding-right:10px;
}

.formcontrols .blockrow .group.checkradio > li {
	margin-bottom:0.5em; /* maybe questionable */
}

/* MULTI-FIELD GROUPS (dd, mm, yyyy fields etc.) */

.formcontrols .blockrow .group.multifield li {
	float:left;
	margin-right:1em;
	margin-top:0;
}

/* Display multi-field controls vertically */
.formcontrols .blockrow .group.multifield.stacked li {
	float:none;
	margin-top:2px;
}

.formcontrols .blockrow .group.multifield label {
	margin-bottom:2px;
	display:block;
	float:none;
	width:auto;
}

.formcontrols .blockrow .group.multifield select,
.formcontrols .blockrow .group.multifield input.textbox {
	float:none;
}

/* NUMERIC GROUP (rgb color etc.) */

.formcontrols .blockrow .group.numeric {
	width:auto;
	*width:24%;
	max-width:212px;
	margin-right:2%;
}

.formcontrols .blockrow .group.numeric li {
	clear:both;
}

.formcontrols .blockrow .group.numeric label {
	float:left;
	margin-top:1px;
}

.formcontrols .blockrow .group.numeric input.textbox {
	float:right;
	text-align:right;
	margin-left:20px;
	margin-bottom:2px;
}

.formcontrols .blockrow .group.numeric .description {
	clear:both;
	text-align:right;
	margin:auto;
	margin-bottom:0.2em;
}

/* NUMERIC INPUT */

.formcontrols .blockrow input.textbox.numeric {
	text-align:right;
}

/* ACTION BUTTONS */

.formcontrols input.button,
.actionbuttons {
	max-width:100%;
}

.blockfoot.actionbuttons.redirect_button {
	background-color:transparent;
	padding-top:5px;
}
.blockfoot.actionbuttons.redirect_button  .group {
	padding-right: 0px;
}
.actionbuttons .group {
	float:none;
	text-align:right;
	padding-right: 10px;
}

.vbform .actionbuttons .group {
	margin:0 auto;
	width:auto;
	max-width:100%;
	_width:100%;
}

.actionbuttons .small_text_buttons, .actionbuttons .small_text_buttons input.button {
    padding-left:10px;
    padding-right:10px;
}


.actionbuttons .group .button {
   	cursor:pointer;
	padding: 2.5px 5px;
	font:    11px "Lucida Grande","Lucida Sans","Lucida Sans Unicode",sans-serif;
	border:0  ;
	color: #ffffff; /*asus*/
	background: #2a2a2a; /*asus*/
}

.actionbuttons .group .button:hover {
	background: #9f0811 none   ;
	color: #ffffff;
}

/* *** SPECIAL ITEMS *** */

/* POST ICONS */

.formcontrols .blockrow #posticon_preview {
	width:16px;
	height:16px;
	margin-left:10px;
}

.formcontrols .blockrow.posticons table {
	width:496px;
}

.formcontrols .blockrow.posticons td {
	padding:2px;
}

/* RATING SELECT */

.formcontrols .blockrow select.rating option {
	background-image:url(images/rating/rating-15_3.png);
	background-repeat:no-repeat;
	background-position:left center;
	padding-left:85px
}

/* DEP GROUPS */
.formcontrols .blockrow dl.dep_group dd, .formcontrols .blockrow .dep_group .deps {
	margin-left:1.5em;
	margin-top:0.5em;
	margin-bottom:0.2em;
}

.formcontrols .blockrow dl.dep_group dd dl.dep_group {
	/*margin-top:1em;*/ /* Handles the margin above sub-dependent controls, remove? */
}

input[type="submit"][disabled]#blog_deletebtn:active, input[type="submit"][disabled]#blog_deletebtn {
	color:graytext;
}

/* ATTACH FILES */

.formcontrols .blockrow .group.attachments li {
	margin-bottom:0.5em;
}

.formcontrols .blockrow .group.attachments li img {
	vertical-align:middle;
}

.formcontrols .blockrow .group.attachments li:last-child {
	margin-top:1em;
}

/* Upper / Lower comparison and IM FIELDS (AIM, Skype...) */

.formcontrols .group.upperlower li,
.formcontrols .group.imfields li {
	width:45%;
	padding-bottom:0.3em;
}

.formcontrols .group.upperlower li input.textbox,
.formcontrols .group.imfields li input.textbox,
.formcontrols .group.imfields li select {
	width:100%;
}

.formcontrols .group.imfields li select {
	margin-bottom:-0.3em;
}

/* Group of text controls */
.groupcontrols {
	text-align:right;
	clear:both;	
}

.groupcontrols .textcontrol {
	margin-left:10px;
	margin-top:0;
}

/* Single Button */
.formcontrols .blockrow.singlebutton .button {
}

/* IE7 Float Fix */
.formcontrols .groupoption {
	display:block;
	clear:left;
}

/* DEBUG */
.group.radio,
.group.checkbox {
	background:#f2f6f8 none   ;
}

/* NEWEVENT.php TEMP */
.formcontrols .blockrow .group.checkradio .daycheckboxes li {
	float:left;
	padding-right:1em;
	padding-top:0.5em;
}

/*For the search, not worth creating a new css file*/
.savepreferences {
	float:left;text-align:left;width:49.5%;
}

/* Facebook Stuff */
.formcontrols #fbregbox.blockrow.hidden {
	visibility: hidden;
}

/* Fix for item 37360 */
#tag_list_cell .formcontrols .blockrow .group li label, #tag_list_cell .formcontrols .blockrow .group dt label { width: auto; }
#tag_edit_list li { clear: right; width: auto; margin-right: 10px;}
#tag_list_cell .formcontrols .blockrow .group li { margin-top: 0; }


.config_customize{
	background-color: transparent;
	padding: 0px;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
	overflow: auto;
	overflow-x: hidden;
	overflow-y: auto;
	margin-bottom: 5px;
}

.config_customize_header{
	width: 100%;
	clear: both;
	display: block;
	text-align: left;
	background-color: #666666;
	height: 31px;
}

.config_editlink {
	padding: 0px 20px 3px 20px;
	background-color: #444444;
	border: 1px solid #444444;
	font-weight: bold;
	font-size: 110%;
	color: #C0C0C0;
	height: 25px;
	margin: 3px 10px 3px 0px;
	text-align:center;
	-moz-border-radius: ;
	border-radius: ;
	-webkit-border-radius:  ;
	cursor:pointer;
	text-shadow: 2px 2px 2px #000000;
}

.config_editlink:hover{
	background-color: #666666;

}
.config_save {
	padding: 0px 20px 3px 20px;
	background-color: #77AA11;
	border: 1px solid #77AA11;
	font-weight: bold;
	font-size: 110%;
	color: #ffffff;
	height: 25px;
	margin: 3px 10px 3px 10px;
	margin: 3px 10px 3px 10px;
	text-align:center;
	-moz-border-radius: ;
	border-radius: ;
	-webkit-border-radius:  ;
	cursor:pointer;
	text-shadow: 3px 3px 3px #333333;
}

.config_save:hover{
	background-color: #AADD11;

}
.config_customize_pages {
	background-color: transparent;
	color: #222222;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}

.config_customize_page {
	background-color: transparent;
	color: #222222;
	display:block;
	padding: 15px;
	width:100%;
	clear:right;
	float:left;
	font-weight: bold;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-bottomleft: 10px;
	-webkit-border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
	border-bottom-left-radius: 10px;
}


.picker-holder
{
	display:block;
	text-align:center;
	margin:auto;
	top: 20px;
	background-color: #ffffff;
}


.picker{
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#eeeeee,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) ); 
	display:block;
}


.lightgraybackground{
	background-color: #ffffff;
	background: -moz-linear-gradient(#ffffff,#cccccc);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#cccccc) ); 
}


.centerbar
{
	position: absolute;
	width:2px;
	left: 50%;
}

.hbar
{
	height:2px;
	text-align:center;
	display:block;
	width:100%;
	margin-bottom: 4px;
}


.alert_box
{
	text-align:center;
	display:block;
	position:absolute;
	color: #222222;
	background-color: #aaaaaa;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	border: #000000 2px solid;
	z-index: 10;
}
.alert_box .hd
{
	text-align:center;
	display:none;
	color: #ffffff;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

.alert_box .bd
{
	color: #222222;
	background: -moz-linear-gradient(#ffffff, #888888);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#ffffff), to(#888888) );
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	-webkit-border-radius-topleft: 10px;
	-webkit-border-radius-topright: 10px;
}

.alert_box .ft
{
	text-align: right;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
}

.alert_box .ft input.btn {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
	float: right;
	font-weight:bold;
}


.ok_button {
	display:none;
	padding-top: 4px;
	padding-bottom: 4px;
	text-align: center;
	width:80px;
	margin: 4px 10px 4px 10px;
	color: #ffffff;
	background: -moz-linear-gradient(#888888, #000000);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(#888888), to(#000000) );
	border: 1px #ffffff solid;
	-moz-border-radius: ;
	-webkit-border-radius: ;
	border-radius: ;
	float: right;
	font-weight:bold;
}

.attach_popup
{
	display: none;
	border: 1px #000000 solid;
	margin: 0px;
	padding: 0px;
	background-color: #aaaaaa;
	-moz-border-radius: ;
	border-radius: ;
}


.assetpicker_body
{
	display:block;
	width: 100%;
	background-color: #bbbbbb;
	background: -moz-linear-gradient(#ffffff,#999999);
	background: -webkit-gradient( linear, 0 0, 0 100%, from(white), to(#aaaaaa) );
	padding: 5px;
}
.transparent
{
	background-color: transparent;

}

.grey_select_item
{
	background-color: #eeeeee;

}

.tall_select
{
	height: 30px;
} 