@charset "UTF-8";

/********* public:attachments.less ********/
.attachment {
  display: inline-block;
  background: #f5f5f5;
  border: 1px solid #dfdfdf;
  border-radius: 2px;
  padding: 6px;
  width: 165px;
}
.attachment-icon {
  overflow: hidden;
  text-align: center;
  height: 400px;
  line-height: 400px;
  font-size: 0;
}
.attachment-icon a:hover {
  text-decoration: none;
}
.attachment-icon.attachment-icon--img a,
.attachment-icon.attachment-icon--img img {
  display: inline-block;
  vertical-align: middle;
}
.attachment-icon.attachment-icon--img img {
  max-height: 400px;
  max-width: 100%;
}
.attachment-icon i {
  display: block;
  height: 400px;
}
.attachment-icon i:before {
  display: inline-block;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f15b";
  font-size: 100px;
  vertical-align: middle;
  color: #47a7eb;
  border-radius: 100%;
}
.attachment-icon[data-extension="txt"] i:before,
.attachment-icon[data-extension="patch"] i:before,
.attachment-icon[data-extension="diff"] i:before {
  content: "\f15b";
}
.attachment-icon[data-extension="c"] i:before,
.attachment-icon[data-extension="cpp"] i:before,
.attachment-icon[data-extension="h"] i:before,
.attachment-icon[data-extension="htm"] i:before,
.attachment-icon[data-extension="html"] i:before,
.attachment-icon[data-extension="js"] i:before,
.attachment-icon[data-extension="json"] i:before,
.attachment-icon[data-extension="php"] i:before,
.attachment-icon[data-extension="pl"] i:before,
.attachment-icon[data-extension="py"] i:before,
.attachment-icon[data-extension="xml"] i:before {
  content: "\f1c9";
}
.attachment-icon[data-extension="7z"] i:before,
.attachment-icon[data-extension="gz"] i:before,
.attachment-icon[data-extension="rar"] i:before,
.attachment-icon[data-extension="tar"] i:before,
.attachment-icon[data-extension="zip"] i:before {
  content: "\f1c6";
}
.attachment-icon[data-extension="gif"] i:before,
.attachment-icon[data-extension="jpe"] i:before,
.attachment-icon[data-extension="jpeg"] i:before,
.attachment-icon[data-extension="jpg"] i:before,
.attachment-icon[data-extension="png"] i:before {
  content: "\f15c";
}
.attachment-icon[data-extension="aac"] i:before,
.attachment-icon[data-extension="mp3"] i:before,
.attachment-icon[data-extension="ogg"] i:before,
.attachment-icon[data-extension="wav"] i:before {
  content: "\f1c7";
}
.attachment-icon[data-extension="avi"] i:before {
  content: "\f1c8";
}
.attachment-icon[data-extension="xls"] i:before,
.attachment-icon[data-extension="xlsx"] i:before {
  content: "\f1c3";
}
.attachment-icon[data-extension="pdf"] i:before {
  content: "\f1c1";
}
.attachment-icon[data-extension="ppt"] i:before,
.attachment-icon[data-extension="pptx"] i:before {
  content: "\f1c4";
}
.attachment-icon[data-extension="doc"] i:before,
.attachment-icon[data-extension="docx"] i:before {
  content: "\f1c2";
}
.attachment-name {
  margin-top: 6px;
  overflow: hidden;
  white-space: nowrap;
  word-wrap: normal;
  text-overflow: ellipsis;
}
.attachment-details {
  font-size: 12px;
  color: #8c8c8c;
}
.attachment-details:before,
.attachment-details:after {
  content: " ";
  display: table;
}
.attachment-details:after {
  clear: both;
}
.attachment-details-size {
  float: left;
}
.attachment-details-views {
  float: right;
}
.attachmentList {
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  align-items: stretch;
  margin-bottom: -5px;
}
.attachmentList .attachment {
  margin-right: 5px;
  margin-bottom: 5px;
  min-width: 0;
  display: flex;
  flex-direction: column;
}
.attachmentList .attachment-icon {
  flex-grow: 1;
  display: flex;
  height: auto;
  line-height: 1;
  align-items: center;
}
.attachmentList .attachment-icon a {
  margin: auto;
}
.attachmentList .attachment-icon i {
  height: auto;
}
.attachUploadList {
  list-style: none;
  margin: 0;
  padding: 0;
  color: #141414;
  background: #f5f5f5;
  border: 1px solid #d8d8d8;
  border-radius: 2px;
  margin-bottom: 10px;
}
.attachUploadList.attachUploadList--spaced {
  margin-top: 10px;
}
.attachUploadList > li {
  border-bottom: 1px solid #dfdfdf;
  padding: 6px;
}
.attachUploadList > li:last-child {
  border-bottom: none;
}
.attachUploadList > li.is-uploadError .contentRow-title span {
  text-decoration: line-through;
  opacity: .5;
}
.attachUploadList > li.is-uploadError .contentRow-figure {
  opacity: .5;
}
.attachUploadList-insertAll,
.attachUploadList-insertRow {
  font-size: 13px;
  color: #8c8c8c;
}
.attachUploadList-insertAll span,
.attachUploadList-insertRow span {
  vertical-align: middle;
}
.attachUploadList-figure.contentRow-figure {
  width: 100px;
  min-height: 50px;
}
.attachUploadList-figure.contentRow-figure img,
.attachUploadList-figure.contentRow-figure video {
  max-height: 100px;
  max-width: 100px;
}
.attachUploadList-placeholder {
  display: block;
  width: 100px;
}
.attachUploadList-placeholder:before {
  display: inline-block;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f15b";
  font-size: 60px;
  vertical-align: middle;
  color: #47a7eb;
  border-radius: 100%;
}
.attachUploadList-progress {
  position: relative;
}
.attachUploadList-progress i {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  background: #f2930d;
  color: #ffffff;
  border-radius: 4px;
  padding-right: .2em;
  text-align: right;
  font-style: normal;
  white-space: nowrap;
  min-width: 2em;
  -webkit-transition:  width 0.25s ease;
  transition:  width 0.25s ease;
}
.attachUploadList-error {
  color: #f2930d;
}
@media (max-width: 480px) {
  .attachUploadList-figure.contentRow-figure {
    width: 50px;
  }
  .attachUploadList-figure.contentRow-figure img,
  .attachUploadList-figure.contentRow-figure video {
    max-height: 50px;
    max-width: 50px;
  }
  .attachUploadList-placeholder {
    display: block;
    width: 50px;
  }
  .attachUploadList-placeholder:before {
    font-size: 30px;
  }
}

/********* public:lightbox.less ********/
.lbContainer.lbContainer--inline {
  display: inline-block;
  max-width: 100%;
}
.lbContainer .lbContainer-zoomer {
  display: none;
}
.lbContainer.lbContainer--canZoom {
  position: relative;
}
.lbContainer.lbContainer--canZoom .lbContainer-zoomer {
  display: block;
  cursor: pointer;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}
/* Some overrides by XF for lightGallery */
.lg-on {
  overflow: hidden !important;
}
.xfLb.lg-outer .lg-item {
  background: none;
}
.xfLb.lg-outer .lg-item.lg-complete:after {
  display: none;
}
.xfLb.lg-outer .lg-item:after {
  font-family: 'Font Awesome 5 Pro';
  font-size: 3em;
  content: "\f110";
  color: white;
  position: absolute;
  left: 0;
  top: 45%;
  width: 100%;
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
.xfLb.lg-zoomed .lg-icon#lg-actual-size:after {
  content: "\f010";
}
.xfLb.lg-fullscreen-on .lg-icon.lg-fullscreen:after {
  content: "\f066";
}
.xfLb .lg-icon {
  color: #c8c8c8;
  text-shadow: 0 0 2px rgba(0, 0, 0, 0.8);
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.xfLb .lg-icon.lg-next:before {
  content: "\f054";
}
.xfLb .lg-icon.lg-prev:after {
  content: "\f053";
}
.xfLb .lg-icon.lg-toogle-thumb:after {
  content: "\f00a";
}
.xfLb .lg-icon#lg-actual-size.lg-icon--dimmed {
  opacity: 0.5;
  pointer-events: none;
}
.xfLb .lg-icon#lg-actual-size:after {
  content: "\f00e";
}
.xfLb .lg-icon#lg-new-window:after {
  content: "\f08e";
}
.xfLb .lg-icon#lg-zoom-in {
  display: none;
}
.xfLb .lg-icon#lg-zoom-in:after {
  content: "\f00e";
}
.xfLb .lg-icon#lg-zoom-out {
  display: none;
}
.xfLb .lg-icon#lg-zoom-out:after {
  content: "\f010";
}
.xfLb .lg-icon.lg-fullscreen:after {
  content: "\f065";
}
.lg-show-autoplay.xfLb .lg-icon.lg-autoplay-button:after {
  content: "\f28b";
}
.xfLb .lg-icon.lg-autoplay-button:after {
  content: "\f144";
}
.xfLb .lg-icon#lg-download:after {
  content: "\f019";
}
.xfLb .lg-icon.lg-close:after {
  content: "\f00d";
}
.xfLb .lg-sub-html h4 a,
.xfLb .lg-sub-html p a {
  color: inherit;
  text-decoration: underline;
}
.lg-sub-html {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
  -moz-transition: -moz-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
  -o-transition: -o-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
  transition: transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
}
.lg-hide-items .lg-sub-html {
  opacity: 0;
  -webkit-transform: translate3d(0, 10px, 0);
  transform: translate3d(0, 10px, 0);
}
/*! lightgallery - v1.6.0 - 2017-08-08
* http://sachinchoolur.github.io/lightGallery/
* Copyright (c) 2017 Sachin N; Licensed GPLv3 */
.lg-actions .lg-next,
.lg-actions .lg-prev {
  background-color: rgba(0, 0, 0, 0.45);
  border-radius: 2px;
  color: #999;
  cursor: pointer;
  display: block;
  font-size: 22px;
  margin-top: -10px;
  padding: 8px 10px 9px;
  position: absolute;
  top: 50%;
  z-index: 1080;
  border: none;
  outline: none;
}
.lg-actions .lg-next.disabled,
.lg-actions .lg-prev.disabled {
  pointer-events: none;
  opacity: 0.5;
}
.lg-actions .lg-next:hover,
.lg-actions .lg-prev:hover {
  color: #FFF;
}
.lg-actions .lg-next {
  right: 20px;
}
.lg-actions .lg-next:before {
  content: "\e095";
}
.lg-actions .lg-prev {
  left: 20px;
}
.lg-actions .lg-prev:after {
  content: "\e094";
}
@-webkit-keyframes lg-right-end {
  0% {
    left: 0;
  }
  50% {
    left: -30px;
  }
  100% {
    left: 0;
  }
}
@-moz-keyframes lg-right-end {
  0% {
    left: 0;
  }
  50% {
    left: -30px;
  }
  100% {
    left: 0;
  }
}
@-ms-keyframes lg-right-end {
  0% {
    left: 0;
  }
  50% {
    left: -30px;
  }
  100% {
    left: 0;
  }
}
@keyframes lg-right-end {
  0% {
    left: 0;
  }
  50% {
    left: -30px;
  }
  100% {
    left: 0;
  }
}
@-webkit-keyframes lg-left-end {
  0% {
    left: 0;
  }
  50% {
    left: 30px;
  }
  100% {
    left: 0;
  }
}
@-moz-keyframes lg-left-end {
  0% {
    left: 0;
  }
  50% {
    left: 30px;
  }
  100% {
    left: 0;
  }
}
@-ms-keyframes lg-left-end {
  0% {
    left: 0;
  }
  50% {
    left: 30px;
  }
  100% {
    left: 0;
  }
}
@keyframes lg-left-end {
  0% {
    left: 0;
  }
  50% {
    left: 30px;
  }
  100% {
    left: 0;
  }
}
.lg-outer.lg-right-end .lg-object {
  -webkit-animation: lg-right-end 0.3s;
  -o-animation: lg-right-end 0.3s;
  animation: lg-right-end 0.3s;
  position: relative;
}
.lg-outer.lg-left-end .lg-object {
  -webkit-animation: lg-left-end 0.3s;
  -o-animation: lg-left-end 0.3s;
  animation: lg-left-end 0.3s;
  position: relative;
}
.lg-toolbar {
  z-index: 1082;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  background-color: rgba(0, 0, 0, 0.45);
}
.lg-toolbar .lg-icon {
  color: #999;
  cursor: pointer;
  float: right;
  font-size: 24px;
  height: 47px;
  line-height: 27px;
  padding: 10px 0;
  text-align: center;
  width: 50px;
  text-decoration: none !important;
  outline: medium none;
  -webkit-transition: color 0.2s linear;
  -o-transition: color 0.2s linear;
  transition: color 0.2s linear;
}
.lg-toolbar .lg-icon:hover {
  color: #FFF;
}
.lg-toolbar .lg-close:after {
  content: "\e070";
}
.lg-toolbar .lg-download:after {
  content: "\e0f2";
}
.lg-sub-html {
  background-color: rgba(0, 0, 0, 0.45);
  bottom: 0;
  color: #EEE;
  font-size: 16px;
  left: 0;
  padding: 10px 40px;
  position: fixed;
  right: 0;
  text-align: center;
  z-index: 1080;
}
.lg-sub-html h4 {
  margin: 0;
  font-size: 13px;
  font-weight: bold;
}
.lg-sub-html p {
  font-size: 12px;
  margin: 5px 0 0;
}
#lg-counter {
  color: #999;
  display: inline-block;
  font-size: 16px;
  padding-left: 20px;
  padding-top: 12px;
  vertical-align: middle;
}
.lg-toolbar,
.lg-prev,
.lg-next {
  opacity: 1;
  -webkit-transition: -webkit-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
  -moz-transition: -moz-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
  -o-transition: -o-transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
  transition: transform 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.35s cubic-bezier(0, 0, 0.25, 1) 0s, color 0.2s linear;
}
.lg-hide-items .lg-prev {
  opacity: 0;
  -webkit-transform: translate3d(-10px, 0, 0);
  transform: translate3d(-10px, 0, 0);
}
.lg-hide-items .lg-next {
  opacity: 0;
  -webkit-transform: translate3d(10px, 0, 0);
  transform: translate3d(10px, 0, 0);
}
.lg-hide-items .lg-toolbar {
  opacity: 0;
  -webkit-transform: translate3d(0, -10px, 0);
  transform: translate3d(0, -10px, 0);
}
body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-object {
  -webkit-transform: scale3d(0.5, 0.5, 0.5);
  transform: scale3d(0.5, 0.5, 0.5);
  opacity: 0;
  -webkit-transition: -webkit-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
  -moz-transition: -moz-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
  -o-transition: -o-transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
  transition: transform 250ms cubic-bezier(0, 0, 0.25, 1) 0s, opacity 250ms cubic-bezier(0, 0, 0.25, 1) !important;
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
body:not(.lg-from-hash) .lg-outer.lg-start-zoom .lg-item.lg-complete .lg-object {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  opacity: 1;
}
.lg-outer .lg-thumb-outer {
  background-color: #0D0A0A;
  bottom: 0;
  position: absolute;
  width: 100%;
  z-index: 1080;
  max-height: 350px;
  -webkit-transform: translate3d(0, 100%, 0);
  transform: translate3d(0, 100%, 0);
  -webkit-transition: -webkit-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
  -moz-transition: -moz-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
  -o-transition: -o-transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
  transition: transform 0.25s cubic-bezier(0, 0, 0.25, 1) 0s;
}
.lg-outer .lg-thumb-outer.lg-grab .lg-thumb-item {
  cursor: -webkit-grab;
  cursor: -moz-grab;
  cursor: -o-grab;
  cursor: -ms-grab;
  cursor: grab;
}
.lg-outer .lg-thumb-outer.lg-grabbing .lg-thumb-item {
  cursor: move;
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: -o-grabbing;
  cursor: -ms-grabbing;
  cursor: grabbing;
}
.lg-outer .lg-thumb-outer.lg-dragging .lg-thumb {
  -webkit-transition-duration: 0s !important;
  transition-duration: 0s !important;
}
.lg-outer.lg-thumb-open .lg-thumb-outer {
  -webkit-transform: translate3d(0, 0%, 0);
  transform: translate3d(0, 0%, 0);
}
.lg-outer .lg-thumb {
  padding: 10px 0;
  height: 100%;
  margin-bottom: -5px;
}
.lg-outer .lg-thumb-item {
  border-radius: 5px;
  cursor: pointer;
  float: left;
  overflow: hidden;
  height: 100%;
  border: 2px solid #FFF;
  border-radius: 4px;
  margin-bottom: 5px;
}
@media (min-width: 1025px) {
  .lg-outer .lg-thumb-item {
    -webkit-transition: border-color 0.25s ease;
    -o-transition: border-color 0.25s ease;
    transition: border-color 0.25s ease;
  }
}
.lg-outer .lg-thumb-item.active,
.lg-outer .lg-thumb-item:hover {
  border-color: #a90707;
}
.lg-outer .lg-thumb-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}
.lg-outer.lg-has-thumb .lg-item {
  padding-bottom: 120px;
}
.lg-outer.lg-can-toggle .lg-item {
  padding-bottom: 0;
}
.lg-outer.lg-pull-caption-up .lg-sub-html {
  -webkit-transition: bottom 0.25s ease;
  -o-transition: bottom 0.25s ease;
  transition: bottom 0.25s ease;
}
.lg-outer.lg-pull-caption-up.lg-thumb-open .lg-sub-html {
  bottom: 100px;
}
.lg-outer .lg-toogle-thumb {
  background-color: #0D0A0A;
  border-radius: 2px 2px 0 0;
  color: #999;
  cursor: pointer;
  font-size: 24px;
  height: 39px;
  line-height: 27px;
  padding: 5px 0;
  position: absolute;
  right: 20px;
  text-align: center;
  top: -39px;
  width: 50px;
}
.lg-outer .lg-toogle-thumb:after {
  content: "\e1ff";
}
.lg-outer .lg-toogle-thumb:hover {
  color: #FFF;
}
.lg-outer .lg-video-cont {
  display: inline-block;
  vertical-align: middle;
  max-width: 1140px;
  max-height: 100%;
  width: 100%;
  padding: 0 5px;
}
.lg-outer .lg-video {
  width: 100%;
  height: 0;
  padding-bottom: 56.25%;
  overflow: hidden;
  position: relative;
}
.lg-outer .lg-video .lg-object {
  display: inline-block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 100% !important;
}
.lg-outer .lg-video .lg-video-play {
  width: 84px;
  height: 59px;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -42px;
  margin-top: -30px;
  z-index: 1080;
  cursor: pointer;
}
.lg-outer .lg-has-html5 .lg-video-play {
  height: 64px;
  margin-left: -32px;
  margin-top: -32px;
  width: 64px;
  opacity: 0.8;
}
.lg-outer .lg-has-html5:hover .lg-video-play {
  opacity: 1;
}
.lg-outer .lg-video-object {
  width: 100% !important;
  height: 100% !important;
  position: absolute;
  top: 0;
  left: 0;
}
.lg-outer .lg-has-video .lg-video-object {
  visibility: hidden;
}
.lg-outer .lg-has-video.lg-video-playing .lg-object,
.lg-outer .lg-has-video.lg-video-playing .lg-video-play {
  display: none;
}
.lg-outer .lg-has-video.lg-video-playing .lg-video-object {
  visibility: visible;
}
.lg-progress-bar {
  background-color: #333;
  height: 5px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: 1083;
  opacity: 0;
  -webkit-transition: opacity 0.08s ease 0s;
  -moz-transition: opacity 0.08s ease 0s;
  -o-transition: opacity 0.08s ease 0s;
  transition: opacity 0.08s ease 0s;
}
.lg-progress-bar .lg-progress {
  background-color: #a90707;
  height: 5px;
  width: 0;
}
.lg-progress-bar.lg-start .lg-progress {
  width: 100%;
}
.lg-show-autoplay .lg-progress-bar {
  opacity: 1;
}
.lg-autoplay-button:after {
  content: "\e01d";
}
.lg-show-autoplay .lg-autoplay-button:after {
  content: "\e01a";
}
.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-img-wrap,
.lg-outer.lg-css3.lg-zoom-dragging .lg-item.lg-complete.lg-zoomable .lg-image {
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
}
.lg-outer.lg-use-transition-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
  -webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
  -moz-transition: -moz-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
  -o-transition: -o-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
  transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
}
.lg-outer.lg-use-left-for-zoom .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
  -webkit-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
  -moz-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
  -o-transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
  transition: left 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, top 0.3s cubic-bezier(0, 0, 0.25, 1) 0s;
}
.lg-outer .lg-item.lg-complete.lg-zoomable .lg-img-wrap {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
}
.lg-outer .lg-item.lg-complete.lg-zoomable .lg-image {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  -webkit-transition: -webkit-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
  -moz-transition: -moz-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
  -o-transition: -o-transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
  transition: transform 0.3s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.15s !important;
  -webkit-transform-origin: 0 0;
  -moz-transform-origin: 0 0;
  -ms-transform-origin: 0 0;
  transform-origin: 0 0;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
}
#lg-zoom-in:after {
  content: "\e311";
}
#lg-actual-size {
  font-size: 20px;
}
#lg-actual-size:after {
  content: "\e033";
}
#lg-zoom-out {
  opacity: 0.5;
  pointer-events: none;
}
#lg-zoom-out:after {
  content: "\e312";
}
.lg-zoomed #lg-zoom-out {
  opacity: 1;
  pointer-events: auto;
}
.lg-outer .lg-pager-outer {
  bottom: 60px;
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
  z-index: 1080;
  height: 10px;
}
.lg-outer .lg-pager-outer.lg-pager-hover .lg-pager-cont {
  overflow: visible;
}
.lg-outer .lg-pager-cont {
  cursor: pointer;
  display: inline-block;
  overflow: hidden;
  position: relative;
  vertical-align: top;
  margin: 0 5px;
}
.lg-outer .lg-pager-cont:hover .lg-pager-thumb-cont {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.lg-outer .lg-pager-cont.lg-pager-active .lg-pager {
  box-shadow: 0 0 0 2px white inset;
}
.lg-outer .lg-pager-thumb-cont {
  background-color: #fff;
  color: #FFF;
  bottom: 100%;
  height: 83px;
  left: 0;
  margin-bottom: 20px;
  margin-left: -60px;
  opacity: 0;
  padding: 5px;
  position: absolute;
  width: 120px;
  border-radius: 3px;
  -webkit-transition: opacity 0.15s ease 0s, -webkit-transform 0.15s ease 0s;
  -moz-transition: opacity 0.15s ease 0s, -moz-transform 0.15s ease 0s;
  -o-transition: opacity 0.15s ease 0s, -o-transform 0.15s ease 0s;
  transition: opacity 0.15s ease 0s, transform 0.15s ease 0s;
  -webkit-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0);
}
.lg-outer .lg-pager-thumb-cont img {
  width: 100%;
  height: 100%;
}
.lg-outer .lg-pager {
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 50%;
  box-shadow: 0 0 0 8px rgba(255, 255, 255, 0.7) inset;
  display: block;
  height: 12px;
  -webkit-transition: box-shadow 0.3s ease 0s;
  -o-transition: box-shadow 0.3s ease 0s;
  transition: box-shadow 0.3s ease 0s;
  width: 12px;
}
.lg-outer .lg-pager:hover,
.lg-outer .lg-pager:focus {
  box-shadow: 0 0 0 8px white inset;
}
.lg-outer .lg-caret {
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px dashed;
  bottom: -10px;
  display: inline-block;
  height: 0;
  left: 50%;
  margin-left: -5px;
  position: absolute;
  vertical-align: middle;
  width: 0;
}
.lg-fullscreen:after {
  content: "\e20c";
}
.lg-fullscreen-on .lg-fullscreen:after {
  content: "\e20d";
}
.lg-outer #lg-dropdown-overlay {
  background-color: rgba(0, 0, 0, 0.25);
  bottom: 0;
  cursor: default;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1081;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
  -o-transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
  transition: visibility 0s linear 0.18s, opacity 0.18s linear 0s;
}
.lg-outer.lg-dropdown-active .lg-dropdown,
.lg-outer.lg-dropdown-active #lg-dropdown-overlay {
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -moz-transform: translate3d(0, 0px, 0);
  -o-transform: translate3d(0, 0px, 0);
  -ms-transform: translate3d(0, 0px, 0);
  -webkit-transform: translate3d(0, 0px, 0);
  transform: translate3d(0, 0px, 0);
  opacity: 1;
  visibility: visible;
}
.lg-outer.lg-dropdown-active #lg-share {
  color: #FFF;
}
.lg-outer .lg-dropdown {
  background-color: #fff;
  border-radius: 2px;
  font-size: 14px;
  list-style-type: none;
  margin: 0;
  padding: 10px 0;
  position: absolute;
  right: 0;
  text-align: left;
  top: 50px;
  opacity: 0;
  visibility: hidden;
  -moz-transform: translate3d(0, 5px, 0);
  -o-transform: translate3d(0, 5px, 0);
  -ms-transform: translate3d(0, 5px, 0);
  -webkit-transform: translate3d(0, 5px, 0);
  transform: translate3d(0, 5px, 0);
  -webkit-transition: -webkit-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
  -moz-transition: -moz-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
  -o-transition: -o-transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
  transition: transform 0.18s linear 0s, visibility 0s linear 0.5s, opacity 0.18s linear 0s;
}
.lg-outer .lg-dropdown:after {
  content: "";
  display: block;
  height: 0;
  width: 0;
  position: absolute;
  border: 8px solid transparent;
  border-bottom-color: #FFF;
  right: 16px;
  top: -16px;
}
.lg-outer .lg-dropdown > li:last-child {
  margin-bottom: 0px;
}
.lg-outer .lg-dropdown > li:hover a,
.lg-outer .lg-dropdown > li:hover .lg-icon {
  color: #333;
}
.lg-outer .lg-dropdown a {
  color: #333;
  display: block;
  white-space: pre;
  padding: 4px 12px;
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
}
.lg-outer .lg-dropdown a:hover {
  background-color: rgba(0, 0, 0, 0.07000000000000001);
}
.lg-outer .lg-dropdown .lg-dropdown-text {
  display: inline-block;
  line-height: 1;
  margin-top: -3px;
  vertical-align: middle;
}
.lg-outer .lg-dropdown .lg-icon {
  color: #333;
  display: inline-block;
  float: none;
  font-size: 20px;
  height: auto;
  line-height: 1;
  margin-right: 8px;
  padding: 0;
  vertical-align: middle;
  width: auto;
}
.lg-outer #lg-share {
  position: relative;
}
.lg-outer #lg-share:after {
  content: "\e80d";
}
.lg-outer #lg-share-facebook .lg-icon {
  color: #3b5998;
}
.lg-outer #lg-share-facebook .lg-icon:after {
  content: "\e901";
}
.lg-outer #lg-share-twitter .lg-icon {
  color: #00aced;
}
.lg-outer #lg-share-twitter .lg-icon:after {
  content: "\e904";
}
.lg-outer #lg-share-googleplus .lg-icon {
  color: #dd4b39;
}
.lg-outer #lg-share-googleplus .lg-icon:after {
  content: "\e902";
}
.lg-outer #lg-share-pinterest .lg-icon {
  color: #cb2027;
}
.lg-outer #lg-share-pinterest .lg-icon:after {
  content: "\e903";
}
.lg-group:after {
  content: "";
  display: table;
  clear: both;
}
.lg-outer {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  text-align: left;
  opacity: 0;
  -webkit-transition: opacity 0.15s ease 0s;
  -o-transition: opacity 0.15s ease 0s;
  transition: opacity 0.15s ease 0s;
}
.lg-outer * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.lg-outer.lg-visible {
  opacity: 1;
}
.lg-outer.lg-css3 .lg-item.lg-prev-slide,
.lg-outer.lg-css3 .lg-item.lg-next-slide,
.lg-outer.lg-css3 .lg-item.lg-current {
  -webkit-transition-duration: inherit !important;
  transition-duration: inherit !important;
  -webkit-transition-timing-function: inherit !important;
  transition-timing-function: inherit !important;
}
.lg-outer.lg-css3.lg-dragging .lg-item.lg-prev-slide,
.lg-outer.lg-css3.lg-dragging .lg-item.lg-next-slide,
.lg-outer.lg-css3.lg-dragging .lg-item.lg-current {
  -webkit-transition-duration: 0s !important;
  transition-duration: 0s !important;
  opacity: 1;
}
.lg-outer.lg-grab img.lg-object {
  cursor: -webkit-grab;
  cursor: -moz-grab;
  cursor: -o-grab;
  cursor: -ms-grab;
  cursor: grab;
}
.lg-outer.lg-grabbing img.lg-object {
  cursor: move;
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: -o-grabbing;
  cursor: -ms-grabbing;
  cursor: grabbing;
}
.lg-outer .lg {
  height: 100%;
  width: 100%;
  position: relative;
  overflow: hidden;
  margin-left: auto;
  margin-right: auto;
  max-width: 100%;
  max-height: 100%;
}
.lg-outer .lg-inner {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
  white-space: nowrap;
}
.lg-outer .lg-item {
  display: none !important;
}
.lg-outer.lg-css3 .lg-prev-slide,
.lg-outer.lg-css3 .lg-current,
.lg-outer.lg-css3 .lg-next-slide {
  display: inline-block !important;
}
.lg-outer.lg-css .lg-current {
  display: inline-block !important;
}
.lg-outer .lg-item,
.lg-outer .lg-img-wrap {
  display: inline-block;
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
}
.lg-outer .lg-item:before,
.lg-outer .lg-img-wrap:before {
  content: "";
  display: inline-block;
  height: 50%;
  width: 1px;
  margin-right: -1px;
}
.lg-outer .lg-img-wrap {
  position: absolute;
  padding: 0 5px;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
.lg-outer .lg-item.lg-complete {
  background-image: none;
}
.lg-outer .lg-item.lg-current {
  z-index: 1060;
}
.lg-outer .lg-image {
  display: inline-block;
  vertical-align: middle;
  max-width: 100%;
  max-height: 100%;
  width: auto !important;
  height: auto !important;
}
.lg-outer.lg-show-after-load .lg-item .lg-object,
.lg-outer.lg-show-after-load .lg-item .lg-video-play {
  opacity: 0;
  -webkit-transition: opacity 0.15s ease 0s;
  -o-transition: opacity 0.15s ease 0s;
  transition: opacity 0.15s ease 0s;
}
.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-object,
.lg-outer.lg-show-after-load .lg-item.lg-complete .lg-video-play {
  opacity: 1;
}
.lg-outer .lg-empty-html {
  display: none;
}
.lg-outer.lg-hide-download #lg-download {
  display: none;
}
.lg-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1040;
  background-color: #000;
  opacity: 0;
  -webkit-transition: opacity 0.15s ease 0s;
  -o-transition: opacity 0.15s ease 0s;
  transition: opacity 0.15s ease 0s;
}
.lg-backdrop.in {
  opacity: 1;
}
.lg-css3.lg-no-trans .lg-prev-slide,
.lg-css3.lg-no-trans .lg-next-slide,
.lg-css3.lg-no-trans .lg-current {
  -webkit-transition: none 0s ease 0s !important;
  -moz-transition: none 0s ease 0s !important;
  -o-transition: none 0s ease 0s !important;
  transition: none 0s ease 0s !important;
}
.lg-css3.lg-use-css3 .lg-item {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
}
.lg-css3.lg-use-left .lg-item {
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
}
.lg-css3.lg-fade .lg-item {
  opacity: 0;
}
.lg-css3.lg-fade .lg-item.lg-current {
  opacity: 1;
}
.lg-css3.lg-fade .lg-item.lg-prev-slide,
.lg-css3.lg-fade .lg-item.lg-next-slide,
.lg-css3.lg-fade .lg-item.lg-current {
  -webkit-transition: opacity 0.1s ease 0s;
  -moz-transition: opacity 0.1s ease 0s;
  -o-transition: opacity 0.1s ease 0s;
  transition: opacity 0.1s ease 0s;
}
.lg-css3.lg-slide.lg-use-css3 .lg-item {
  opacity: 0;
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide {
  -webkit-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide {
  -webkit-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  opacity: 1;
}
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-prev-slide,
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-next-slide,
.lg-css3.lg-slide.lg-use-css3 .lg-item.lg-current {
  -webkit-transition: -webkit-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
  -moz-transition: -moz-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
  -o-transition: -o-transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
  transition: transform 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
}
.lg-css3.lg-slide.lg-use-left .lg-item {
  opacity: 0;
  position: absolute;
  left: 0;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide {
  left: -100%;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide {
  left: 100%;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
  left: 0;
  opacity: 1;
}
.lg-css3.lg-slide.lg-use-left .lg-item.lg-prev-slide,
.lg-css3.lg-slide.lg-use-left .lg-item.lg-next-slide,
.lg-css3.lg-slide.lg-use-left .lg-item.lg-current {
  -webkit-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
  -moz-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
  -o-transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
  transition: left 1s cubic-bezier(0, 0, 0.25, 1) 0s, opacity 0.1s ease 0s;
}

/********* public:message.less ********/
.message + .message,
.message.message--bordered {
  border-top: 1px solid #d8d8d8;
}
.message.is-mod-selected,
.block--messages .message.is-mod-selected {
  background: #fff8ee;
}
.message.is-mod-selected .message-cell--user,
.block--messages .message.is-mod-selected .message-cell--user {
  background: #fff8ee;
}
.message.is-mod-selected .message-userArrow:after,
.block--messages .message.is-mod-selected .message-userArrow:after {
  border-right-color: #fff8ee;
}
.message-inner {
  display: flex;
}
.message-cell {
  display: block;
  vertical-align: top;
  padding: 10px;
}
.message--quickReply .message-cell > .formRow:last-child > dd {
  padding-bottom: 0;
}
.message-cell.message-cell--closer {
  padding: 6px;
}
.message-cell.message-cell--closer.message-cell--main {
  padding-left: 9px;
}
.message-cell.message-cell--closer.message-cell--user {
  flex: 0 0 212px;
}
.message--simple .message-cell.message-cell--closer.message-cell--user {
  flex: 0 0 82px;
}
.message-cell.message-cell--closer.message-cell--action {
  flex: 0 0 52px;
}
.message-cell.message-cell--user,
.message-cell.message-cell--action {
  position: relative;
  background: #f5f5f5;
  border-right: 1px solid #d8d8d8;
  min-width: 0;
}
.message-cell.message-cell--user {
  flex: 0 0 220px;
}
.message--simple .message-cell.message-cell--user {
  flex: 0 0 82px;
}
.message-cell.message-cell--action {
  flex: 0 0 60px;
}
.message-cell.message-cell--main {
  padding-left: 15px;
  flex: 1 1 auto;
  width: 100%;
  min-width: 0;
}
.message-cell.message-cell--main.is-editing {
  padding: 0;
}
.message-cell.message-cell--main .block {
  margin: 0;
}
.message-cell.message-cell--main .block-container {
  margin: 0;
  border: none;
}
.message-cell.message-cell--alert {
  font-size: 13px;
  flex: 1 1 auto;
  width: 100%;
  min-width: 0;
  color: #505050;
  background: #ececec;
}
.message-cell.message-cell--alert a {
  color: #f2930d;
}
.message-cell.message-cell--extra {
  flex: 0 0 200px;
  border-left: 1px solid #d8d8d8;
  background: #f5f5f5;
}
.message-cell.message-cell--extra .formRow-explain {
  margin: 6px 0 0;
  font-size: 13px;
  color: #8c8c8c;
  font-size: 80%;
}
.message-cell.message-cell--extra .formRow-explain a {
  color: inherit;
  text-decoration: underline;
}
.message-main {
  height: 100%;
  display: flex;
  flex-direction: column;
}
.message-content {
  flex: 1 1 auto;
  min-height: 1px;
}
.message-footer {
  margin-top: auto;
}
@media (max-width: 610px) {
  .message:not(.message--forceColumns) .message-inner {
    display: block;
  }
  .message:not(.message--forceColumns) .message-cell {
    display: block;
  }
  .message:not(.message--forceColumns) .message-cell:before,
  .message:not(.message--forceColumns) .message-cell:after {
    content: " ";
    display: table;
  }
  .message:not(.message--forceColumns) .message-cell:after {
    clear: both;
  }
  .message:not(.message--forceColumns) .message-cell.message-cell--user {
    width: auto;
    border-right: none;
    border-bottom: 1px solid #d8d8d8;
  }
  .message:not(.message--forceColumns) .message-cell.message-cell--main {
    padding-left: 10px;
  }
  .message:not(.message--forceColumns) .message-cell.message-cell--extra {
    width: auto;
    border-left: none;
    border-top: 1px solid #d8d8d8;
  }
  .message--simple:not(.message--forceColumns) .message-cell.message-cell--user,
  .message--quickReply:not(.message--forceColumns) .message-cell.message-cell--user {
    display: none;
  }
}
.message-userArrow {
  position: absolute;
  top: 20px;
  right: -1px;
  border: 10px solid transparent;
  border-left-width: 0;
  border-right-color: #d8d8d8;
}
.message-userArrow:after {
  position: absolute;
  top: -9px;
  right: -10px;
  content: "";
  border: 9px solid transparent;
  border-left-width: 0;
  border-right-color: #fefefe;
}
.message-avatar {
  text-align: center;
}
.message-avatar .avatar {
  vertical-align: bottom;
}
.message-avatar-wrapper {
  position: relative;
  display: inline-block;
  vertical-align: bottom;
  margin-bottom: .5em;
}
.message-avatar-wrapper .message-avatar-online {
  position: absolute;
  left: 50%;
  margin-left: -.615em;
  bottom: -.5em;
}
.message-avatar-wrapper .message-avatar-online:before {
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\f2bd";
  line-height: 1;
  font-weight: bold;
  color: #7fb900;
  background: #f5f5f5;
  border: #f5f5f5 solid 2px;
  border-radius: 50%;
  display: inline-block;
}
.message-name {
  font-weight: 700;
  font-size: inherit;
  text-align: center;
  margin: 0;
}
.message-userTitle {
  font-size: 12px;
  font-weight: normal;
  text-align: center;
  margin: 0;
}
.message-userBanner.userBanner {
  display: block;
  margin-top: 3px;
}
.message-userExtras {
  margin-top: 3px;
  font-size: 12px;
}
.message--deleted .message-userDetails {
  display: none;
}
.message--deleted .message-avatar .avatar {
  width: 48px;
  height: 48px;
  font-size: 29px;
}
@media (max-width: 610px) {
  .message:not(.message--forceColumns) .message-userArrow {
    top: auto;
    right: auto;
    bottom: -1px;
    left: 24px;
    border: none;
    border: 10px solid transparent;
    border-top-width: 0;
    border-bottom-color: #d8d8d8;
  }
  .message:not(.message--forceColumns) .message-userArrow:after {
    top: auto;
    right: auto;
    left: -9px;
    bottom: -10px;
    border: none;
    border: 9px solid transparent;
    border-top-width: 0;
    border-bottom-color: #fefefe;
  }
  .message:not(.message--forceColumns).is-mod-selected .message-userArrow:after {
    border-color: transparent;
    border-bottom-color: #fff8ee;
  }
  .message:not(.message--forceColumns) .message-user {
    display: flex;
  }
  .message:not(.message--forceColumns) .message-avatar {
    margin-bottom: 0;
  }
  .message:not(.message--forceColumns) .message-avatar .avatar {
    width: 48px;
    height: 48px;
    font-size: 29px;
  }
  .message:not(.message--forceColumns) .message-avatar .avatar + .message-avatar-online {
    left: auto;
    right: 0;
  }
  .message:not(.message--forceColumns) .message-userDetails {
    flex: 1;
    min-width: 0;
    padding-left: 10px;
  }
  .message:not(.message--forceColumns) .message-name {
    text-align: left;
  }
  .message:not(.message--forceColumns) .message-userTitle,
  .message:not(.message--forceColumns) .message-userBanner.userBanner {
    display: inline-block;
    text-align: left;
    margin: 0;
  }
  .message:not(.message--forceColumns) .message-userExtras {
    display: none;
  }
  .message:not(.message--forceColumns) .message--deleted .message-userDetails {
    display: block;
  }
}
.message-content {
  position: relative;
}
.message-content .js-selectToQuoteEnd {
  height: 0;
  font-size: 0;
  overflow: hidden;
}
.message--multiQuoteList .message-content {
  min-height: 80px;
  max-height: 120px;
  overflow: hidden;
}
.message--multiQuoteList .message-content .message-body {
  pointer-events: none;
}
.message-attribution {
  color: #8c8c8c;
  font-size: 12px;
  padding-bottom: 3px;
  border-bottom: 1px solid #e7e7e7;
}
.message-attribution:before,
.message-attribution:after {
  content: " ";
  display: table;
}
.message-attribution:after {
  clear: both;
}
.message-attribution.message-attribution--plain {
  border-bottom: none;
  font-size: inherit;
  padding-bottom: 0;
}
.message-attribution.message-attribution--split {
  display: flex;
  align-items: flex-end;
}
.message-attribution.message-attribution--split .message-attribution-opposite {
  margin-left: auto;
}
.message-attribution-main {
  float: left;
}
.message-attribution-opposite {
  float: right;
}
.message-attribution-opposite.message-attribution-opposite--list {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}
.message-attribution-opposite.message-attribution-opposite--list > li {
  margin-left: 14px;
}
.message-attribution-opposite.message-attribution-opposite--list > li:first-child {
  margin-left: 0;
}
.message-attribution-opposite.message-attribution-opposite--list a {
  display: inline-block;
  margin: -3px -7px;
  padding: 3px 7px;
}
.message-attribution-opposite a {
  color: inherit;
}
.message-attribution-opposite a:hover {
  text-decoration: none;
  color: #185886;
}
.message-attribution-source {
  font-size: 12px;
  margin-bottom: 3px;
}
.message-attribution-user {
  font-weight: 700;
}
.message-attribution-user .avatar {
  display: none;
}
.message-attribution-user .attribution {
  display: inline;
  font-size: inherit;
  font-weight: inherit;
  margin: 0;
}
.message-newIndicator {
  font-size: 90%;
  color: #ffffff;
  background: #f2930d;
  border-radius: 2px;
  padding-top: 1px;
  padding-right: 4px;
  padding-bottom: 1px;
  padding-left: 4px;
}
.message-minorHighlight {
  font-size: 13px;
  color: #47a7eb;
}
.message-fields {
  margin: 10px 0;
}
.message-body {
  margin: 10px 0;
  font-family: Verdana, Helvetica, Arial, sans-serif;
}
.message-body:before,
.message-body:after {
  content: " ";
  display: table;
}
.message-body:after {
  clear: both;
}
.message--simple .message-body {
  margin-top: 6px;
  margin-bottom: 6px;
}
.message-body:last-child {
  margin-bottom: 0;
}
.message-body .message-title {
  font-size: 17px;
  font-weight: 400;
  margin: 0 0 10px 0;
  padding: 0;
}
.message-body a {
  color: #1a0dab;
}
.message-body a:hover {
  color: #aa2222;
}
.message-attachments {
  margin: .5em 0;
}
.message-attachments-list {
  list-style: none;
  margin: 0;
  padding: 0;
}
.message-lastEdit {
  margin-top: .5em;
  color: #8c8c8c;
  font-size: 11px;
  text-align: right;
}
.message-signature {
  margin-top: 10px;
  font-size: 12px;
  color: #8c8c8c;
  border-top: 1px solid #dfdfdf;
  padding-top: 3px;
}
.message-actionBar .actionBar-set {
  margin-top: 10px;
  font-size: 13px;
}
.message--simple .message-actionBar .actionBar-set {
  margin-top: 6px;
}
.message .likesBar {
  margin-top: 10px;
  padding: 6px;
}
.message .reactionsBar {
  margin-top: 10px;
  padding: 6px;
}
.message-historyTarget {
  margin-top: 10px;
}
.message-gradient {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  height: 60px;
  background: #fefefe;
  background: linear-gradient(to bottom, rgba(254, 254, 254, 0) 0%, #fefefe 90%);
}
.message-responses {
  margin-top: 6px;
  font-size: 13px;
}
.message-responses .editorPlaceholder .input {
  font-size: inherit;
}
.message-responseRow {
  margin-top: -1px;
  background: #f5f5f5;
  border: 1px solid #dfdfdf;
  padding: 6px;
}
.message-responseRow.message-responseRow--likes,
.message-responseRow.message-responseRow--reactions {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
}
.message-responseRow.message-responseRow--likes.is-active,
.message-responseRow.message-responseRow--reactions.is-active {
  display: block;
  opacity: 1;
}
.message-responseRow.message-responseRow--likes.is-transitioning,
.message-responseRow.message-responseRow--reactions.is-transitioning {
  display: block;
}
.message-responseRow.message-responseRow--likes.is-active,
.message-responseRow.message-responseRow--reactions.is-active {
  height: auto;
  overflow-y: visible;
}
.message-responseRow.message-responseRow--likes.is-transitioning,
.message-responseRow.message-responseRow--reactions.is-transitioning {
  overflow-y: hidden;
}
@media (max-width: 610px) {
  .message:not(.message--forceColumns) .message-attribution-user .avatar {
    display: inline-flex;
    width: 21px;
    height: 21px;
    font-size: 13px;
  }
  .message:not(.message--forceColumns) .message-content {
    min-height: 1px;
  }
}
@media (max-width: 480px) {
  .message-signature {
    display: none;
  }
}
.message-menuGroup {
  display: inline-block;
}
.message-menuTrigger {
  display: inline-block;
}
.message-menuTrigger:after {
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
  text-align: right;
}
.message-menuTrigger:hover:after {
  color: black;
}
.message-menu-section--editDelete .menu-linkRow {
  font-weight: 700;
  font-size: 15px;
}
.message-menu-link--delete i:after {
  content: "\f2ed";
}
.message-menu-link--edit i:after {
  content: "\f044";
}
.message-menu-link--report i:after {
  content: "\f119";
}
.message-menu-link--warn i:after {
  content: "\f071";
}
.message-menu-link--spam i:after {
  content: "\f05e";
}
.message-menu-link--ip i:after {
  content: "\f0e8";
}
.message-menu-link--history i:after {
  content: "\f1da";
}
.message-menu-link--follow i:after {
  content: "\f234";
}
.message-menu-link--ignore i:after {
  content: "\f235";
}
.message-menu-link--share i:after {
  content: "\f1e0";
}
.comment-inner {
  display: table;
  table-layout: fixed;
  width: 100%;
}
.comment-avatar {
  display: table-cell;
  width: 24px;
  vertical-align: top;
}
.comment-avatar .avatar,
.comment-avatar img {
  vertical-align: bottom;
}
.comment-main {
  display: table-cell;
  padding-left: 10px;
  vertical-align: top;
}
.comment-contentWrapper {
  margin-bottom: 6px;
}
.comment-user {
  font-weight: 700;
}
.comment-body {
  display: inline;
}
.comment-input {
  display: block;
  height: 2.34em;
  margin-bottom: 6px;
}
.comment-actionBar .actionBar-set {
  margin-top: 6px;
  color: #8c8c8c;
}
.comment-likes,
.comment-reactions {
  display: none;
  opacity: 0;
  -webkit-transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  transition:  all 0.25s ease, -xf-opacity 0.25s ease;
  overflow-y: hidden;
  height: 0;
  -webkit-transition-property: all, -xf-height;
  transition-property: all, -xf-height;
  margin-top: 6px;
  font-size: 12px;
}
.comment-likes.is-active,
.comment-reactions.is-active {
  display: block;
  opacity: 1;
}
.comment-likes.is-transitioning,
.comment-reactions.is-transitioning {
  display: block;
}
.comment-likes.is-active,
.comment-reactions.is-active {
  height: auto;
  overflow-y: visible;
}
.comment-likes.is-transitioning,
.comment-reactions.is-transitioning {
  overflow-y: hidden;
}
.formSubmitRow.formSubmitRow--messageQr .formSubmitRow-controls {
  text-align: center;
  padding-left: 0;
  padding-right: 0;
  margin-left: 10px;
  margin-right: 10px;
}
@media (max-width: 540px) {
  .formSubmitRow.formSubmitRow--messageQr .formSubmitRow-controls {
    text-align: right;
  }
}
.messageNotice {
  margin: 6px 0;
  padding: 6px 10px;
  color: #505050;
  background: #ececec;
  font-size: 12px;
  border-left: 2px solid #f2930d;
}
.messageNotice:not(.messageNotice--highlighted) a,
.messageNotice:not(.messageNotice--highlighted) a:hover {
  color: #f2930d;
}
.messageNotice:before {
  display: inline-block;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  padding-right: .2em;
  font-size: 125%;
  color: #f2930d;
}
.messageNotice.messageNotice--highlighted {
  color: #141414;
  background: #fefefe;
  border-left-color: #47a7eb;
}
.messageNotice.messageNotice--highlighted:before {
  color: #47a7eb;
}
.messageNotice.messageNotice--deleted:before {
  content: "\f2ed";
  display: inline-block;
  width: 0.88em;
}
.messageNotice.messageNotice--moderated:before {
  content: "\f132";
  display: inline-block;
  width: 1em;
}
.messageNotice.messageNotice--warning:before {
  content: "\f071";
  display: inline-block;
  width: 1em;
}
.messageNotice.messageNotice--ignored:before {
  content: "\f131";
  display: inline-block;
  width: 1.25em;
}
@media (min-width: 610px) {
  .block:not(.block--messages) .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .message:first-child .message-cell:first-child,
  .block:not(.block--messages) .block-topRadiusContent.message .message-cell:first-child,
  .block:not(.block--messages) .block-topRadiusContent > .message:first-child .message-cell:first-child {
    border-top-left-radius: 3px;
  }
  .block:not(.block--messages) .block-container:not(.block-container--noStripRadius) > .block-body:first-child > .message:first-child .message-cell:last-child,
  .block:not(.block--messages) .block-topRadiusContent.message .message-cell:last-child,
  .block:not(.block--messages) .block-topRadiusContent > .message:first-child .message-cell:last-child {
    border-top-right-radius: 3px;
  }
  .block:not(.block--messages) .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .message:last-child .message-cell:first-child,
  .block:not(.block--messages) .block-bottomRadiusContent.message .message-cell:first-child,
  .block:not(.block--messages) .block-bottomRadiusContent > .message:last-child .message-cell:first-child {
    border-bottom-left-radius: 3px;
  }
  .block:not(.block--messages) .block-container:not(.block-container--noStripRadius) > .block-body:last-child > .message:last-child .message-cell:last-child,
  .block:not(.block--messages) .block-bottomRadiusContent.message .message-cell:last-child,
  .block:not(.block--messages) .block-bottomRadiusContent > .message:last-child .message-cell:last-child {
    border-bottom-right-radius: 3px;
  }
}
.block--messages .block-container {
  background: none;
  border: none;
}
.block--messages .message,
.block--messages .block-row {
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
.block--messages .message + .message,
.block--messages .block-row + .message,
.block--messages .message + .block-row,
.block--messages .block-row + .block-row {
  margin-top: 6px;
}
.block--messages .message-spacer + .message,
.block--messages .message-spacer + .block-row {
  margin-top: 6px;
}
.block--messages .message-cell:first-child {
  border-radius: 0;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.block--messages .message-cell:last-child {
  border-radius: 0;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.block--messages .message-cell:first-child:last-child {
  border-radius: 3px;
}
@media (max-width: 610px) {
  .block--messages .message:not(.message--forceColumns) .message-cell:first-child {
    border-radius: 0;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
  .block--messages .message:not(.message--forceColumns) .message-cell:last-child {
    border-radius: 0;
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
  }
  .block--messages .message:not(.message--forceColumns) .message-cell:first-child:last-child {
    border-radius: 3px;
  }
  .block--messages .message--simple:not(.message--forceColumns) .message-cell--user + .message-cell {
    border-radius: 0;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
  }
}
@media (max-width: 610px) {
  .block--messages .message,
  .block--messages .block-row {
    border-left: none;
    border-right: none;
    border-radius: 0;
    margin-bottom: 10px;
  }
  .block--messages .message-cell {
    border-radius: 0;
  }
  .block--messages .message-cell:first-child,
  .block--messages .message-cell:last-child {
    border-radius: 0;
  }
  .block--messages .message--simple .message-cell--user + .message-cell {
    border-radius: 0;
  }
  .block--messages .message-container {
    padding: 6px 0 0 0;
  }
  .block--messages .message-container .message-container-header {
    text-align: center;
  }
  .block--messages .message-container .message {
    border-bottom: 0;
  }
}
.message-userContent {
  min-height: 100px;
}
@media (max-width: 700px) {
  .message-userContent {
    min-height: auto;
  }
}
.buildSignatures {
  margin-top: 25px !important;
  padding-top: 10px;
  border-top: 1px solid #a8a8a8;
  width: 100%;
  display: block;
  padding-bottom: 10px;
  font-size: 13px;
}
.buildSignatures .pairs.pairs--justified {
  display: table;
}
@media (max-width: 700px) {
  .buildSignatures {
    width: 100%;
  }
}

/********* public:notices.less ********/
.notices {
  list-style: none;
  margin: 0;
  padding: 0;
}
.notices.notices--block .notice {
  margin-bottom: 10px;
}
.notices.notices--floating {
  margin: 0 20px 0 auto;
  width: 300px;
  max-width: 100%;
  z-index: 800;
}
@media (max-width: 340px) {
  .notices.notices--floating {
    margin-right: 10px;
  }
}
.notices.notices--floating .notice {
  margin-bottom: 20px;
}
.notices.notices--scrolling {
  display: flex;
  align-items: stretch;
  overflow: hidden;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
  margin-bottom: 10px;
}
.notices.notices--scrolling.notices--isMulti {
  margin-bottom: 30px;
}
.notices.notices--scrolling .notice {
  width: 100%;
  flex-grow: 0;
  flex-shrink: 0;
  border: none;
}
.noticeScrollContainer {
  margin-bottom: 10px;
}
.noticeScrollContainer .lSSlideWrapper {
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
}
.noticeScrollContainer .notices.notices--scrolling {
  border: none;
  margin-bottom: 0;
}
.notice {
  position: relative;
  border-width: 1px;
  border-style: solid;
  border-top-color: #dfdfdf;
  border-right-color: #d8d8d8;
  border-bottom-color: #cbcbcb;
  border-left-color: #d8d8d8;
}
.notice:before,
.notice:after {
  content: " ";
  display: table;
}
.notice:after {
  clear: both;
}
.notice.notice--primary {
  color: #141414;
  background: #fefefe;
}
.notice.notice--accent {
  color: #505050;
  background: #ececec;
}
.notice.notice--accent a:not(.button--notice) {
  color: #f2930d;
}
.notice.notice--dark {
  color: #fefefe;
  border: none;
  background: #141414;
}
.notice.notice--dark a:not(.button--notice) {
  color: #b4b4b4;
}
.notice.notice--light {
  color: #141414;
  background: #fefefe;
}
.notice.notice--light a:not(.button--notice) {
  color: #828282;
}
.notice.notice--enablePush {
  display: none;
}
@media (max-width: 800px) {
  .notice.notice--enablePush {
    padding: 3px 3px 10px;
    font-size: 13px;
  }
}
@media (max-width: 800px) {
  .notice.notice--cookie .notice-content {
    padding: 3px 3px 10px;
    font-size: 12px;
  }
  .notice.notice--cookie .notice-content .button--notice {
    font-size: 12px;
    padding: 3px 6px;
  }
  .notice.notice--cookie .notice-content .button--notice .button-text {
    font-size: 12px;
  }
}
.notices--block .notice {
  font-size: 15px;
  border-radius: 4px;
}
.notices--floating .notice {
  font-size: 11px;
  border-radius: 4px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
}
.notices--floating .notice.notice--primary {
  background-color: rgba(254, 254, 254, 0.8);
}
.notices--floating .notice.notice--accent {
  background-color: rgba(236, 236, 236, 0.8);
}
.notices--floating .notice.notice--dark {
  background-color: rgba(20, 20, 20, 0.8);
}
.notices--floating .notice.notice--light {
  background-color: rgba(254, 254, 254, 0.8);
}
.has-js .notices--floating .notice {
  display: none;
}
.notice.notice--hasImage .notice-content {
  margin-left: 68px;
  min-height: 68px;
}
@media (max-width: 800px) {
  .notice.notice--hidewide:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
@media (max-width: 610px) {
  .notice.notice--hidemedium:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
@media (max-width: 480px) {
  .notice.notice--hidenarrow:not(.is-vis-processed) {
    display: none;
    visibility: hidden;
  }
}
.notice-image {
  float: left;
  padding: 10px 0 10px 10px;
}
.notice-image img {
  max-width: 48px;
  max-height: 48px;
}
.notice-content {
  padding: 10px;
}
.notice-content a.notice-dismiss {
  float: right;
  color: inherit;
  font-size: 16px;
  line-height: 1;
  height: 1em;
  box-sizing: content-box;
  padding: 0 0 5px 5px;
  opacity: .5;
  -webkit-transition:  opacity 0.25s ease;
  transition:  opacity 0.25s ease;
  cursor: pointer;
}
.notice-content a.notice-dismiss:before {
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
.notice-content a.notice-dismiss:hover {
  text-decoration: none;
  opacity: 1;
}
.notices--floating .notice-content a.notice-dismiss {
  font-size: 14px;
}

/********* public:share_controls.less ********/
.shareButtons:before,
.shareButtons:after {
  content: " ";
  display: table;
}
.shareButtons:after {
  clear: both;
}
.shareButtons--iconic .shareButtons-buttons {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(35px, 1fr));
}
.shareButtons-label {
  float: left;
  margin-right: 3px;
  color: #8c8c8c;
  min-height: 35px;
  line-height: 35px;
}
.shareButtons-button {
  float: left;
  margin-right: 3px;
  padding: 6px;
  color: #8c8c8c;
  font-size: 20px;
  line-height: 20px;
  white-space: nowrap;
  min-width: 35px;
  border-radius: 2px;
  background-color: transparent;
  -webkit-transition:  all 0.25s ease;
  transition:  all 0.25s ease;
}
.shareButtons-button:last-of-type {
  margin-right: 0;
}
.shareButtons-button:hover {
  text-decoration: none;
  color: white;
}
.shareButtons-button > i {
  display: inline-block;
  vertical-align: middle;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.shareButtons-button.shareButtons-button--brand > i {
  font-family: 'Font Awesome 5 Brands';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.shareButtons-button > span {
  font-weight: 400;
  font-size: 15px;
}
.shareButtons--iconic .shareButtons-button {
  text-align: center;
}
.shareButtons--iconic .shareButtons-button > i {
  min-width: 20px;
}
.shareButtons--iconic .shareButtons-button > span {
  position: absolute;
  height: 1px;
  width: 1px;
  margin: -1px;
  padding: 0;
  border: 0;
  clip: rect(0 0 0 0);
  overflow: hidden;
}
.shareButtons-button.shareButtons-button--facebook:hover {
  background-color: #3B5998;
}
.shareButtons-button.shareButtons-button--facebook > i:before {
  content: "\f39e";
}
.shareButtons-button.shareButtons-button--twitter:hover {
  background-color: #1DA1F3;
}
.shareButtons-button.shareButtons-button--twitter > i:before {
  content: "\f099";
}
.shareButtons-button.shareButtons-button--pinterest:hover {
  background-color: #bd081c;
}
.shareButtons-button.shareButtons-button--pinterest > i:before {
  content: "\f231";
}
.shareButtons-button.shareButtons-button--tumblr:hover {
  background-color: #35465c;
}
.shareButtons-button.shareButtons-button--tumblr > i:before {
  content: "\f173";
}
.shareButtons-button.shareButtons-button--reddit:hover {
  background-color: #FF4500;
}
.shareButtons-button.shareButtons-button--reddit > i:before {
  content: "\f281";
}
.shareButtons-button.shareButtons-button--whatsApp:hover {
  background-color: #25D366;
}
.shareButtons-button.shareButtons-button--whatsApp > i:before {
  content: "\f232";
}
.shareButtons-button.shareButtons-button--email:hover {
  background-color: #1289ff;
}
.shareButtons-button.shareButtons-button--email > i:before {
  content: "\f0e0";
}
.shareButtons-button.shareButtons-button--link {
  cursor: pointer;
}
.shareButtons-button.shareButtons-button--link:hover {
  background-color: #787878;
}
.shareButtons-button.shareButtons-button--link > i:before {
  content: "\f0c1";
}
.shareButtons-button.is-hidden {
  display: none;
}
.shareInput {
  margin-bottom: 5px;
}
.shareInput:last-child {
  margin-bottom: 0;
}
.shareInput-label {
  font-size: 13px;
}
.shareInput-label:after {
  content: ":";
}
.shareInput-label.is-sentence:after {
  content: "";
}
.shareInput-button {
  color: #141414;
  cursor: pointer;
}
.shareInput-button > i {
  display: inline-block;
  vertical-align: middle;
  font-family: 'Font Awesome 5 Pro';
  font-size: inherit;
  font-style: normal;
  font-weight: 400;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.shareInput-button > i:before {
  content: "\f0c5";
}
.shareInput-button.is-hidden {
  display: none;
}
.shareInput-input {
  font-size: 13px;
}
@media (max-width: 568px) {
  .shareInput-input {
    font-size: 16px;
  }
}
.shareInput-button.is-hidden + .shareInput-input {
  border-radius: 4px;
}

/********* public:extra.less ********/
.responsiveGoogleAdHorizontal {
  position: relative;
  width: 728px;
  height: 90px;
  padding: 0;
  margin: 0;
  margin-bottom: 10px;
  margin-left: auto;
  margin-right: auto;
}
.is-unread .structItem-title > a {
  font-weight: 600;
}
.attachment-icon i:before {
  font-size: 30px;
}
ul.js-newsFeedTarget ul.listPlain > li {
  vertical-align: middle;
}
ul.js-newsFeedTarget ul.listPlain > li > a > img {
  max-height: 100px;
  max-width: 100px;
  margin: 5px;
}
.message-userExtras > .custom-Mac,
.message-userExtras > .custom-Classic,
.message-userExtras > .custom-Mobile {
  color: #ffffff;
}
.vbTable.vbBorder {
  border-top: 1px solid #a8a8a8;
  border-left: 1px solid #a8a8a8;
}
.vbTable td {
  padding: 10px;
}
.vbTable.vbBorder td {
  border-right: 1px solid #a8a8a8;
  border-bottom: 1px solid #a8a8a8;
}
@media (max-width: 500px) {
  #mobileFooterSearch,
  #mobileFooterSearch > form {
    border-top: none;
    text-align: center;
  }
  #mobileFooterSearch > form > input {
    width: auto;
    display: inline-block;
  }
  .responsiveGoogleAdHorizontal {
    width: 300px;
    height: 315px;
    margin-left: auto;
    margin-right: auto;
  }
  .p-header-content > .responsiveGoogleAdHorizontal {
    height: 100px;
  }
}