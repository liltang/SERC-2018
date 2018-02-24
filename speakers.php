<!-- Header
=============================================== -->
<?php
	include_once 'header.php';
 ?>


<style>
    
/* Shine */
.hover14 figure {
	position: relative;
}
.hover14 figure::before {
	position: absolute;
	top: 0;
	left: -75%;
	z-index: 2;
	display: block;
	content: '';
	width: 50%;
	height: 100%;
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.hover14 figure:hover::before {
	-webkit-animation: shine .75s;
	animation: shine .75s;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
	}
}
@keyframes shine {
	100% {
		left: 125%;
	}
}    
 
    * {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
}
   

/* workshop speakers   */
.img {
  border-radius: 100%;
  color: #fafafa;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 200px;
  flex: 0 0 200px;
  height: 200px;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  overflow: hidden;
  position: relative;
  width: 200px;
}    
    
.img img {
  height: 100%;
}    

.img__overlay {
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  bottom: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: opacity 0.25s;
  transition: opacity 0.25s;
  z-index: 1;
}
.img__overlay:hover {
  opacity: 1;
}    
    

.img {
  -webkit-animation: fadeIn 0.5s;
  animation: fadeIn 0.5s;
  border: 4px solid #c0c0c0;
  margin: 20px;
}
.img__overlay {
  background-color: rgba(46, 204, 113, 0.4);
  background: linear-gradient(
    65deg,
    rgba(46, 204, 113, 0.4),
    rgba(243, 156, 18, 0.4)
  );
  color: #fafafa;
  font-size: 24px;
}
.img__overlay--red {
  background: linear-gradient(
    65deg,
    rgba(217, 30, 24, 0.4),
    rgba(102, 51, 153, 0.4) 60%
  );
  background-color: rgba(217, 30, 24, 0.4);
}
@-webkit-keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
    
    
    
    
    
    
    
.column {
	margin: 15px 15px 0;
	padding: 0;
}
.column:last-child {
	padding-bottom: 60px;
}
.column::after {
	content: '';
	clear: both;
/*	display: block;*/
}
.column div {
	position: relative;
	float: left;
/*	width: 300px;*/
	height: 200px;
	margin: 0 0 0 25px;
	padding: 0;
}
.column div:first-child {
	margin-left: 0;
}
.column div span {
	position: absolute;
/*	bottom: -20px;*/
	left: 0;
	z-index: -1;
	display: block;
	width: 300px;
	margin: 0;
	padding: 0;
	color: #444;
	font-size: 18px;
	text-decoration: none;
	text-align: center;
	-webkit-transition: .3s ease-in-out;
	transition: .3s ease-in-out;
	opacity: 0;
}
figure {
/*	width: 300px;*/
/*	height: 200px;*/
	margin: 0;
	padding: 0;
	background: #fff;
	overflow: hidden;
}
figure:hover+span {
/*	bottom: -36px;*/
	opacity: 1;
}    
    
/* KEYNOTE    */
@import "https://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700";
.fa-spin-fast {
  -webkit-animation: fa-spin-fast 0.2s infinite linear;
  animation: fa-spin-fast 0.2s infinite linear;
}
@-webkit-keyframes fa-spin-fast {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin-fast {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.material-card {
  position: relative;
  height: 0;
  padding-bottom: calc(100% - 16px);
  margin-bottom: 6.6em;
}
.material-card h2 {
  position: absolute;
  top: calc(100% - 16px);
  left: 0;
  width: 100%;
  padding: 10px 16px;
  color: #fff;
  font-size: 1.4em;
  line-height: 1.6em;
  margin: 0;
  z-index: 10;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.material-card h2 span {
  display: block;
}
.material-card h2 strong {
  font-weight: 400;
  display: block;
  font-size: .8em;
}
.material-card h2:before,
.material-card h2:after {
  content: ' ';
  position: absolute;
  left: 0;
  top: -16px;
  width: 0;
  border: 8px solid;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.material-card h2:after {
  top: auto;
  bottom: 0;
}
@media screen and (max-width: 767px) {
  .material-card.mc-active {
    padding-bottom: 0;
    height: auto;
  }
}
.material-card.mc-active h2 {
  top: 0;
  padding: 10px 16px 10px 90px;
}
.material-card.mc-active h2:before {
  top: 0;
}
.material-card.mc-active h2:after {
  bottom: -16px;
}
.material-card .mc-content {
  position: absolute;
  right: 0;
  top: 0;
  bottom: 16px;
  left: 16px;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.material-card .mc-btn-action {
  position: absolute;
  right: 16px;
  top: 15px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 5px solid;
  width: 54px;
  height: 54px;
  line-height: 44px;
  text-align: center;
  color: #fff;
  cursor: pointer;
  z-index: 20;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.material-card.mc-active .mc-btn-action {
  top: 62px;
}
.material-card .mc-description {
  position: absolute;
  top: 100%;
  right: 30px;
  left: 30px;
  bottom: 54px;
  overflow: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all 1.2s;
  -moz-transition: all 1.2s;
  -ms-transition: all 1.2s;
  -o-transition: all 1.2s;
  transition: all 1.2s;
}
.material-card .mc-footer {
  height: 0;
  overflow: hidden;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.material-card .mc-footer h4 {
  position: absolute;
  top: 200px;
  left: 30px;
  padding: 0;
  margin: 0;
  font-size: 16px;
  font-weight: 700;
  -webkit-transition: all 1.4s;
  -moz-transition: all 1.4s;
  -ms-transition: all 1.4s;
  -o-transition: all 1.4s;
  transition: all 1.4s;
}
.material-card .mc-footer a {
  display: block;
  float: left;
  position: relative;
  width: 52px;
  height: 52px;
  margin-left: 5px;
  margin-bottom: 15px;
  font-size: 28px;
  color: #fff;
  line-height: 52px;
  text-decoration: none;
  top: 200px;
}
.material-card .mc-footer a:nth-child(1) {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -ms-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}
.material-card .mc-footer a:nth-child(2) {
  -webkit-transition: all 0.6s;
  -moz-transition: all 0.6s;
  -ms-transition: all 0.6s;
  -o-transition: all 0.6s;
  transition: all 0.6s;
}
.material-card .mc-footer a:nth-child(3) {
  -webkit-transition: all 0.7s;
  -moz-transition: all 0.7s;
  -ms-transition: all 0.7s;
  -o-transition: all 0.7s;
  transition: all 0.7s;
}
.material-card .mc-footer a:nth-child(4) {
  -webkit-transition: all 0.8s;
  -moz-transition: all 0.8s;
  -ms-transition: all 0.8s;
  -o-transition: all 0.8s;
  transition: all 0.8s;
}
.material-card .mc-footer a:nth-child(5) {
  -webkit-transition: all 0.9s;
  -moz-transition: all 0.9s;
  -ms-transition: all 0.9s;
  -o-transition: all 0.9s;
  transition: all 0.9s;
}
/*
.material-card .img-container {
  overflow: hidden;
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 3;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
}
.material-card.mc-active .img-container {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  left: 0;
  top: 12px;
  width: 60px;
  height: 60px;
  z-index: 20;
}
*/
.material-card.mc-active .mc-content {
  padding-top: 5.6em;
}
@media screen and (max-width: 767px) {
  .material-card.mc-active .mc-content {
    position: relative;
    margin-right: 16px;
  }
}
.material-card.mc-active .mc-description {
  top: 50px;
  padding-top: 5.6em;
  opacity: 1;
  filter: alpha(opacity=100);
}
@media screen and (max-width: 767px) {
  .material-card.mc-active .mc-description {
    position: relative;
    top: auto;
    right: auto;
    left: auto;
    padding: 50px 30px 70px 30px;
    bottom: 0;
  }
}
.material-card.mc-active .mc-footer {
  overflow: visible;
  position: absolute;
  top: calc(100% - 16px);
  left: 16px;
  right: 0;
  height: 82px;
  padding-top: 15px;
  padding-left: 25px;
}
.material-card.mc-active .mc-footer a {
  top: 0;
}
.material-card.mc-active .mc-footer h4 {
  top: -32px;
}
.material-card.Red h2 {
  background-color: #F44336;
}
.material-card.Red h2:after {
  border-top-color: #F44336;
  border-right-color: #F44336;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Red h2:before {
  border-top-color: transparent;
  border-right-color: #B71C1C;
  border-bottom-color: #B71C1C;
  border-left-color: transparent;
}
.material-card.Red.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #F44336;
  border-bottom-color: #F44336;
  border-left-color: transparent;
}
.material-card.Red.mc-active h2:after {
  border-top-color: #B71C1C;
  border-right-color: #B71C1C;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Red .mc-btn-action {
  background-color: #F44336;
}
.material-card.Red .mc-btn-action:hover {
  background-color: #B71C1C;
}
.material-card.Red .mc-footer h4 {
  color: #B71C1C;
}
.material-card.Red .mc-footer a {
  background-color: #B71C1C;
}
.material-card.Red.mc-active .mc-content {
  background-color: #FFEBEE;
}
.material-card.Red.mc-active .mc-footer {
  background-color: #FFCDD2;
}
.material-card.Red.mc-active .mc-btn-action {
  border-color: #FFEBEE;
}
.material-card.Blue-Grey h2 {
  background-color: #607D8B;
}
.material-card.Blue-Grey h2:after {
  border-top-color: #607D8B;
  border-right-color: #607D8B;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Blue-Grey h2:before {
  border-top-color: transparent;
  border-right-color: #263238;
  border-bottom-color: #263238;
  border-left-color: transparent;
}
.material-card.Blue-Grey.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #607D8B;
  border-bottom-color: #607D8B;
  border-left-color: transparent;
}
.material-card.Blue-Grey.mc-active h2:after {
  border-top-color: #263238;
  border-right-color: #263238;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Blue-Grey .mc-btn-action {
  background-color: #607D8B;
}
.material-card.Blue-Grey .mc-btn-action:hover {
  background-color: #263238;
}
.material-card.Blue-Grey .mc-footer h4 {
  color: #263238;
}
.material-card.Blue-Grey .mc-footer a {
  background-color: #263238;
}
.material-card.Blue-Grey.mc-active .mc-content {
  background-color: #ECEFF1;
}
.material-card.Blue-Grey.mc-active .mc-footer {
  background-color: #CFD8DC;
}
.material-card.Blue-Grey.mc-active .mc-btn-action {
  border-color: #ECEFF1;
}
.material-card.Pink h2 {
  background-color: #E91E63;
}
.material-card.Pink h2:after {
  border-top-color: #E91E63;
  border-right-color: #E91E63;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Pink h2:before {
  border-top-color: transparent;
  border-right-color: #880E4F;
  border-bottom-color: #880E4F;
  border-left-color: transparent;
}
.material-card.Pink.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #E91E63;
  border-bottom-color: #E91E63;
  border-left-color: transparent;
}
.material-card.Pink.mc-active h2:after {
  border-top-color: #880E4F;
  border-right-color: #880E4F;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Pink .mc-btn-action {
  background-color: #E91E63;
}
.material-card.Pink .mc-btn-action:hover {
  background-color: #880E4F;
}
.material-card.Pink .mc-footer h4 {
  color: #880E4F;
}
.material-card.Pink .mc-footer a {
  background-color: #880E4F;
}
.material-card.Pink.mc-active .mc-content {
  background-color: #FCE4EC;
}
.material-card.Pink.mc-active .mc-footer {
  background-color: #F8BBD0;
}
.material-card.Pink.mc-active .mc-btn-action {
  border-color: #FCE4EC;
}
.material-card.Purple h2 {
  background-color: #9C27B0;
}
.material-card.Purple h2:after {
  border-top-color: #9C27B0;
  border-right-color: #9C27B0;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Purple h2:before {
  border-top-color: transparent;
  border-right-color: #4A148C;
  border-bottom-color: #4A148C;
  border-left-color: transparent;
}
.material-card.Purple.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #9C27B0;
  border-bottom-color: #9C27B0;
  border-left-color: transparent;
}
.material-card.Purple.mc-active h2:after {
  border-top-color: #4A148C;
  border-right-color: #4A148C;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Purple .mc-btn-action {
  background-color: #9C27B0;
}
.material-card.Purple .mc-btn-action:hover {
  background-color: #4A148C;
}
.material-card.Purple .mc-footer h4 {
  color: #4A148C;
}
.material-card.Purple .mc-footer a {
  background-color: #4A148C;
}
.material-card.Purple.mc-active .mc-content {
  background-color: #F3E5F5;
}
.material-card.Purple.mc-active .mc-footer {
  background-color: #E1BEE7;
}
.material-card.Purple.mc-active .mc-btn-action {
  border-color: #F3E5F5;
}
.material-card.Deep-Purple h2 {
  background-color: #673AB7;
}
.material-card.Deep-Purple h2:after {
  border-top-color: #673AB7;
  border-right-color: #673AB7;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Deep-Purple h2:before {
  border-top-color: transparent;
  border-right-color: #311B92;
  border-bottom-color: #311B92;
  border-left-color: transparent;
}
.material-card.Deep-Purple.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #673AB7;
  border-bottom-color: #673AB7;
  border-left-color: transparent;
}
.material-card.Deep-Purple.mc-active h2:after {
  border-top-color: #311B92;
  border-right-color: #311B92;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Deep-Purple .mc-btn-action {
  background-color: #673AB7;
}
.material-card.Deep-Purple .mc-btn-action:hover {
  background-color: #311B92;
}
.material-card.Deep-Purple .mc-footer h4 {
  color: #311B92;
}
.material-card.Deep-Purple .mc-footer a {
  background-color: #311B92;
}
.material-card.Deep-Purple.mc-active .mc-content {
  background-color: #EDE7F6;
}
.material-card.Deep-Purple.mc-active .mc-footer {
  background-color: #D1C4E9;
}
.material-card.Deep-Purple.mc-active .mc-btn-action {
  border-color: #EDE7F6;
}
.material-card.Indigo h2 {
  background-color: #3F51B5;
}
.material-card.Indigo h2:after {
  border-top-color: #3F51B5;
  border-right-color: #3F51B5;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Indigo h2:before {
  border-top-color: transparent;
  border-right-color: #1A237E;
  border-bottom-color: #1A237E;
  border-left-color: transparent;
}
.material-card.Indigo.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #3F51B5;
  border-bottom-color: #3F51B5;
  border-left-color: transparent;
}
.material-card.Indigo.mc-active h2:after {
  border-top-color: #1A237E;
  border-right-color: #1A237E;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Indigo .mc-btn-action {
  background-color: #3F51B5;
}
.material-card.Indigo .mc-btn-action:hover {
  background-color: #1A237E;
}
.material-card.Indigo .mc-footer h4 {
  color: #1A237E;
}
.material-card.Indigo .mc-footer a {
  background-color: #1A237E;
}
.material-card.Indigo.mc-active .mc-content {
  background-color: #E8EAF6;
}
.material-card.Indigo.mc-active .mc-footer {
  background-color: #C5CAE9;
}
.material-card.Indigo.mc-active .mc-btn-action {
  border-color: #E8EAF6;
}
.material-card.Blue h2 {
  background-color: #2196F3;
}
.material-card.Blue h2:after {
  border-top-color: #2196F3;
  border-right-color: #2196F3;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Blue h2:before {
  border-top-color: transparent;
  border-right-color: #0D47A1;
  border-bottom-color: #0D47A1;
  border-left-color: transparent;
}
.material-card.Blue.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #2196F3;
  border-bottom-color: #2196F3;
  border-left-color: transparent;
}
.material-card.Blue.mc-active h2:after {
  border-top-color: #0D47A1;
  border-right-color: #0D47A1;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Blue .mc-btn-action {
  background-color: #2196F3;
}
.material-card.Blue .mc-btn-action:hover {
  background-color: #0D47A1;
}
.material-card.Blue .mc-footer h4 {
  color: #0D47A1;
}
.material-card.Blue .mc-footer a {
  background-color: #0D47A1;
}
.material-card.Blue.mc-active .mc-content {
  background-color: #E3F2FD;
}
.material-card.Blue.mc-active .mc-footer {
  background-color: #BBDEFB;
}
.material-card.Blue.mc-active .mc-btn-action {
  border-color: #E3F2FD;
}
.material-card.Light-Blue h2 {
  background-color: #03A9F4;
}
.material-card.Light-Blue h2:after {
  border-top-color: #03A9F4;
  border-right-color: #03A9F4;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Light-Blue h2:before {
  border-top-color: transparent;
  border-right-color: #01579B;
  border-bottom-color: #01579B;
  border-left-color: transparent;
}
.material-card.Light-Blue.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #03A9F4;
  border-bottom-color: #03A9F4;
  border-left-color: transparent;
}
.material-card.Light-Blue.mc-active h2:after {
  border-top-color: #01579B;
  border-right-color: #01579B;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Light-Blue .mc-btn-action {
  background-color: #03A9F4;
}
.material-card.Light-Blue .mc-btn-action:hover {
  background-color: #01579B;
}
.material-card.Light-Blue .mc-footer h4 {
  color: #01579B;
}
.material-card.Light-Blue .mc-footer a {
  background-color: #01579B;
}
.material-card.Light-Blue.mc-active .mc-content {
  background-color: #E1F5FE;
}
.material-card.Light-Blue.mc-active .mc-footer {
  background-color: #B3E5FC;
}
.material-card.Light-Blue.mc-active .mc-btn-action {
  border-color: #E1F5FE;
}
.material-card.Cyan h2 {
  background-color: #00BCD4;
}
.material-card.Cyan h2:after {
  border-top-color: #00BCD4;
  border-right-color: #00BCD4;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Cyan h2:before {
  border-top-color: transparent;
  border-right-color: #006064;
  border-bottom-color: #006064;
  border-left-color: transparent;
}
.material-card.Cyan.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #00BCD4;
  border-bottom-color: #00BCD4;
  border-left-color: transparent;
}
.material-card.Cyan.mc-active h2:after {
  border-top-color: #006064;
  border-right-color: #006064;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Cyan .mc-btn-action {
  background-color: #00BCD4;
}
.material-card.Cyan .mc-btn-action:hover {
  background-color: #006064;
}
.material-card.Cyan .mc-footer h4 {
  color: #006064;
}
.material-card.Cyan .mc-footer a {
  background-color: #006064;
}
.material-card.Cyan.mc-active .mc-content {
  background-color: #E0F7FA;
}
.material-card.Cyan.mc-active .mc-footer {
  background-color: #B2EBF2;
}
.material-card.Cyan.mc-active .mc-btn-action {
  border-color: #E0F7FA;
}
.material-card.Teal h2 {
  background-color: #009688;
}
.material-card.Teal h2:after {
  border-top-color: #009688;
  border-right-color: #009688;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Teal h2:before {
  border-top-color: transparent;
  border-right-color: #004D40;
  border-bottom-color: #004D40;
  border-left-color: transparent;
}
.material-card.Teal.mc-active h2:before {
  border-top-color: transparent;
  border-right-color: #009688;
  border-bottom-color: #009688;
  border-left-color: transparent;
}
.material-card.Teal.mc-active h2:after {
  border-top-color: #004D40;
  border-right-color: #004D40;
  border-bottom-color: transparent;
  border-left-color: transparent;
}
.material-card.Teal .mc-btn-action {
  background-color: #009688;
}
.material-card.Teal .mc-btn-action:hover {
  background-color: #004D40;
}
.material-card.Teal .mc-footer h4 {
  color: #004D40;
}
.material-card.Teal .mc-footer a {
  background-color: #004D40;
}
.material-card.Teal.mc-active .mc-content {
  background-color: #E0F2F1;
}
.material-card.Teal.mc-active .mc-footer {
  background-color: #B2DFDB;
}
.material-card.Teal.mc-active .mc-btn-action {
  border-color: #E0F2F1;
}
    
    

</style>

<!-- Sponsors
=============================================== -->
<section id="sponsors" class="section">
<div class="wrapsection">
	<div class="container">
        <div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="maintitle">
				    <!-- Title -->
					<h3 id= "sponsors" style= "padding-bottom: 2em " class="section-title">Keynote <span class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">Speakers</span></h3>				
				</div>
			</div>
        </div> <!-- ./sponsors title -->
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
                <article class="material-card Red">
                    <h2>
                        <span>Les A. PIEGL</span>
                        <strong>
                            <i class="fa fa-fw fa-star"></i>
                            Professor and Faculty at USF
                        </strong>
                    </h2>
                    <div class="mc-content">
                        <div class="img-container hover14 column">
                           <div>
                            <figure><a href="keynote_piegl.php"><img class="img-responsive" width="718" height="718" src="img/Piegl.jpg" alt="Dr. Piegl's Photo"></a></figure>
                          </div>
                        </div>
                    </div>                
                </article>
            </div> <!-- ./1ST KEYNOTE -->
           <div class="col-md-6 col-sm-6 col-xs-12">
            <article class="material-card Pink">
                <h2>
                    <span>Trang Luong</span>
                    <strong>
                        <i class="fa fa-fw fa-star"></i>
                        Graduate Research Assistant at USF
                    </strong>
                </h2>
                <div class="mc-content">
                    <div class="img-container hover14 column">                      
                        <div>
                            <figure><a href="keynote_trang.php"><img class="img-responsive" width="718" height="818" src="img/trang.png" alt="Trang Luong's Photo"></a></figure>
                          </div>
                    </div>
                </div>
                
            </article>
        </div> <!-- ./2ND KEYNOTE-->
         
    </div>
        
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="maintitle">
                    <h3 id= "sponsors"  style= "padding: 3em 0em" class="section-title">Workshop <span class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">Speakers</span></h3>
                       
                </div>
            </div>
        </div> <!-- workshop speakers title -->
        <div class="row">
            <div class="col-lg-3 col-md-6  col-sm-6 col-xs-12">
               <a class="img" href="speaker_jamies.php">
                  <div class="img__overlay img__overlay--red">Jamies Chilton</div>
                  <img src="img/Jamie_Chilton.png"/>
                </a>          
           </div>
           <div class="col-lg-3 col-md-6  col-sm-6 col-xs-12">
               <a class="img" href="speaker_focal.php"> 
                  <div class="img__overlay img__overlay--yellow text-center-text">Focal Point Data Risk</div>
                  <img src="img/logo_focalpoint.jpg"/>
                </a>         
           </div>
              <div class="col-lg-3 col-md-6  col-sm-6 col-xs-12">
               <a class="img" href="speaker_navy.php">
                  <div class="img__overlay img__overlay--red text-centered">The Navy</div>
                  <img src="img/logo_navy.jpg"/>
                </a>          
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="speaker_harris.php"> 
                  <div class="img__overlay img__overlay--yellow">Harris Corp.</div>
                  <img src="img/logo_harris.jpg"/>
                </a>         
           </div>
        </div>
        <!-- Second Row -->
        <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="speaker_lily.php">
                  <div class="img__overlay img__overlay--red">Lily Tang </div>
                  <img src="img/lily.png"/>
                </a>          
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="speaker_rj.php"> 
                  <div class="img__overlay img__overlay--yellow">Raymond James</div>
                  <img src="img/logo_raymondjames.PNG"/>
                </a>         
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="speaker_usfworld.php">
                  <div class="img__overlay img__overlay--red">USF World</div>
                  <img src="img/logo_usfworld.png"/>
                </a>          
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="#"> 
                  <div class="img__overlay img__overlay--yellow">Convergence Consulting Group</div>
                  <img src="img/CCG.png"/>
                </a>         
           </div>
        </div>
        <!-- Third Row -->
        <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="#">
                  <div class="img__overlay img__overlay--red">Citi </div>
                  <img src="img/Citibank.png"/>
                </a>          
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="#"> 
                  <div class="img__overlay img__overlay--yellow">Nielsen</div>
                  <img src="img/nielsen.png"/>
                </a>         
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="#">
                  <div class="img__overlay img__overlay--red">The Army</div>
                  <img src="img/Army-logo.jpg"/>
                </a>          
           </div>
           <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
               <a class="img" href="#"> 
                  <div class="img__overlay img__overlay--yellow">Cuono Engineering PLLC</div>
                  <img src="img/ce%20engineering-no.jpg"/>
                </a>         
           </div>
        </div>
	</div>
</div>
</section>


 <!-- Footer
=============================================== -->
<?php
	include_once 'footer.php';
 ?>
