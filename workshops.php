<!-- Header 
=============================================== -->
<?php 
	include_once 'header.php';
 ?>
 

<style>
    /* LIST OF WORKSHOPS */
    .split-list ul{
      float: left;
        padding: 4em 0;
    }
    .split-list li{
        list-style:none;
      padding-right: 2em;
      line-height: 1.5em;
        padding-bottom: 1em;
      @include font-size(12px);
     }
    
    .small {
        font-weight: normal;
        font-size: .8em;
        padding-left: 4.9em;
    }
    
    /*SCHEDULE */   
    *, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}
  
    #main { 
      list-style:none;  
       max-width: 75%;
      margin: 0 auto;
    }
    
    
    #main h3 {padding: 0; margin: 0;}

/*
    ul>li.date {
        width: 17%;
        padding: 15% 1% 0 0 ;
        float: left;
    }
*/

    .date {
      width: 19%;
      padding: 15% 1% 0 0 ;
      float: left;
    }

    .date h3 {
      font-size: 1.5em;
    }
    .date h4 {
        font-size: 1.5em;
      font-weight: 100; 
    }

    .date p {
      font-size: .8em;   
    }

     
    .description, .event-location {
        padding: 0 .2em;
        font-size: .8em;
        font-weight: 600;
    }
    
    .description {
        color: white;
    }
    
    .event-name {
        font-weight: 800;
    }
    
    .team {
         background-color: #3097A0;
    }
    
    .community {
         background-color: #8D537F;
    }
    
    .skill-set {   
        background-color: #9BA32F;
    }
    
    .career {
        background-color: #D17F95;
    }

    .networking {
        background-color: #2075A3;
    }
    .professionalism {
        background-color: #DD654D;
    }
    .other {
        background-color: #907B80;
    }
    
     
    .events {
      float: left;
      width: 80%;
      border-left: 1px solid #ccc;
      margin-top: 10%;
      padding-top: 3%;
    }
    
/*
    .events p {   
        padding:0; 
        margin-bottom: -.2em
    }
*/
    /* the dash line */    
    .events-detail {
      max-width: 90%;
    }   
    
    .events-detail li{
      list-style: none;
      padding: 10px;
      border-bottom: 1px dashed #ccc;
      line-height: 22px;
      transition: ease .4s all;
    }

    .events-detail li:hover {
      background: #e9e9e9;
    }

    .event-time {
        font-weight: 600;
        color: #B74F6F
        /*color: #F47998*/
    }
    
    .time p {
        padding-bottom: 1.5em;
    }

    .events-detail li a {
      text-decoration: none;
      color: #444;
      width: 100%;
      height: 100%;
      display: block;
    }

    .event-location {
        color: tomato;
       /*        margin-left: 70px;*/
    }

    
@media (max-width:767px) {
 ul>li.date {
      width: 100%;
      border-bottom: 1px solid #ccc;
      margin-bottom: 10px;
     
    }
    
    ul.split-list {
        text-align: center;
    }
    
     .events {
        border:none;
        width: 100%;
        margin-top: 0;
      }  
}
    
 @media all and (max-width: 641px) {
    ul>li.date {
      width: 100%;
      border-bottom: 1px solid #ccc;
      margin-bottom: 10px;
     padding-left: 0;
    }
     
     ul.split-list {
         text-align: center;
     }
     
      .events {
        border:none;
        width: 100%;
        margin-top: 0;
      }

      .events-detail {
        padding: 0;
      }

      li.date p {
        margin:0;
      }
}
    .panel-group {
        padding: 0;
        margin: 0;
        border: none;
    }

   
</style>
 
<!-- List of Workshops and Sponsors 
=============================================== -->
<section id="sponsors" class="section">
<div class="wrapsection">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="maintitle">
				    <!-- Title -->
					<h3 class="section-title">List of <span class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">Workshops </span></h3>
					<!--<p class="lead">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident porro, vel quae ab quidem quas et modi inventore, voluptatem architecto deleniti dicta, dolore. 
					</p>-->
				</div>							
			</div>	      
                   <div class="col-md-12 col-sm-12 center-block mx-auto small">
                       <ul class="split-list">
                          <li>  
                                <span class= "description team">TEAM BUILDING </span> &nbsp
                               <span class="event-name">What Kind of Leader Are you?</span>
                          </li>
                          <li>
                              <span class= "description career">CAREER</span>&nbsp 
                              <span class="event-name">Evaluating Job Offer</span> 
                          </li>
                          <li>
                              <span class= "description skill-set">SKILL SET</span> &nbsp 
                              <span class="event-name">Rejection? Just do it <i class="fa fa-check" aria-hidden="true"></i></span>
                          </li>
                          <li>
                              <span class= "description skill-set">The STAR Method</span>&nbsp 
                              <span class="event-name">The Secret Behind Every Interview</span>
                          </li>
                          <li>
                              <span class= "description professionalism">PROFESSIONALISM</span>&nbsp 
                              <span class="event-name">“Self-awareness and Finding your Collaborative Style”</span>
                           </li>
                          <li>
                              <span class= "description networking">NETWORKING</span> &nbsp 
                              <span class="event-name">The Intricacies behind Meaningful Connections</span>
                          </li>
                          <li>
                              <span class= "description networking">NETWORKING</span>  &nbsp                        
                              <span class="event-name">Courageous Conversations</span>
                          </li>
                          <li>
                              <span class= "description career">CAREER</span>&nbsp 
                              <span class="event-name">“Cracking the Work-Life Balance Conundrum”</span>
                          </li>
                          <li>
                              <span class= "description team">TEAM BUILDING</span> &nbsp 
                              <span class="event-name">“Challenging your Competitor”</span>
                          </li>
                          <li>
                              <span class= "description skill-set">SKILL SET</span> &nbsp 
                              <span class="event-name">"Decomposing Requirements for a High Level Software Design."</span>
                          </li>
                            <li>
                              <span class= "description community">COMMUNITY</span> &nbsp 
                              <span class="event-name">“The Bamboo Ceiling” </span>
                           </li>
                          <li>
                              <span class= "description team">TEAM BUILDING</span> &nbsp 
                              <span class="event-name">TBA</span>
                           </li>
                        </ul>
                   </div>						
						
        </div> <!-- ./title -->	 
        <div class="row">
			<div class="col-md-12 col-sm-12 ">
				<div class="maintitle">
				    <!-- Title -->
					<h3 class="section-title">Detail <span class="wow bounceInRight" data-wow-duration="1.5s" data-wow-delay="0.2s">Schedule </span></h3>
					<!--<p class="lead">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident porro, vel quae ab quidem quas et modi inventore, voluptatem architecto deleniti dicta, dolore. 
					</p>-->
				</div>							
			</div>				
        </div> <!-- ./schedule tittle -->	       
        <div class="row">
             <div class="col-md-12 col-sm-12">
                 <ul id="main" >
                      <li class="date">
                        <h3>Opening</h3>  
                         
                      </li>
                      <li class= "events">
                        <ul class="events-detail">
                          <li data-toggle="collapse" data-target="#opening11">                          
                              <span class="event-time">00:00 - 00:00</span>
                              <span class="event-name">Kickoff Ceremony</span>
                              <br />
                              <span class= "description team">TBA</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Location TBA</span>
                            <div id="opening11" class="collapse">
                                 TBA
                            </div>     
                                                                                                                   
                          </li>
                          <li data-toggle="collapse" data-target="#opening12">                          
                              <span class="event-time">00:00 - 00:00 </span>
                              <span class="event-name">Keynote Speakers</span>
                              <br />
                              <span class= "description team">TBA</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Location TBA</span>
                            <div id="opening12" class="collapse">
                                TBA
                            </div>     
                                                                                                                  
                          </li>
                        </ul>                           
                      </li>
                  <!-- Block 1 STARTS -->  
                  <div >
                      <li class="date">
                       <h3>Workshop</h3>
                        <h4>Block 1</h4>                                 
                      </li>
                      <li  class= "events">
                        <ul class="events-detail">
                          <li data-toggle="collapse" data-target="#block11" >  
                              <p class="event-time time">9:45 a.m - 10:45 a.m </p>
                              <span class="event-name">What Kind of Leader Are you?</span>
                              <br />
                              <span class= "description team">TEAM BUILDING &nbsp</span>       
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 2709</span>
                              <div id="block11" class="collapse">
                                 In order for a company to be at the top of the leaderboards, their employees and managers must have great communication with each other, if they do not the business will plummet. A manager’s purpose in an organization is to make production go smoothly and efficiently. However, not all managers have the same approach to make this happen. This is a chance for you to think about what makes a great leader and how your style of leadership impacts a group
                              </div>                                                                                      
                          </li>     
                           <li data-toggle="collapse" data-target="#block12">
                              <span class="event-name">Evaluating Job Offer</span>
                              <br />
                               <span class= "description career">CAREER</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: TBA</span>
                              <div id="block12" class="collapse" >
                                 TBA
                              </div>                          
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block13">
                              <span class="event-name">Rejection? Just do it <i class="fa fa-check" aria-hidden="true"></i></span>
                              <br />
                               <span class= "description skill-set">SKILL SET</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3709</span>
                              <div id="block13" class="collapse" >
                                  Rejection, the one word than can turn your day from the best day ever to one of the worst. Reading that rejection letter or hearing the words: sorry you were not chosen to move on to the next round, puts a person in this state of mind of my best was not good enough. But, keep your head up high! Don’t let rejection stop you from achieving your goal, it happens to the best of us and it’s inevitable! In this workshop, learn how to deal with rejection, what to do next, and listen to someone who has faced this problem multiple times.
                              </div>  
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block14">
                              <span class="event-name">The Secret Behind Every Interview</span>
                              <br />
                               <span class= "description skill-set">The STAR Method</span>                          
                               <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3711</span>
                               <div id="block14" class="collapse" >
                                   Have you ever wondered, is there a secret to interview questions? Out of all the people being interviewed, how can you stand out and be on top of the candidates list? The STAR Method of interviewing is a practice that has been widespread throughout many industries in order to assess a candidate’s behavioral qualifications. Empower yourself to understand what recruiters are looking for when asking these questions. In this workshop, you’ll learn what to expect from an interview based on the STAR method, as well as how to devise strategies to surpass the competition.
                              </div>  
                          </li>                                
                           <li data-toggle="collapse" data-target="#block15">
                              <span class="event-name">“Self-awareness and Finding your Collaborative Style”</span>
                              <br />
                               <span class= "description professionalism">PROFESSIONALISM</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3708</span>
                              <div id="block15" class="collapse" >
                                   In your career, it is imperative that you learn to work effectively with your team. But how do create synergy when we are all so different in our own way? What happens when you have contrasting personalities with one person being quiet and reserved while the other individual is bold and headstrong? Where do you find yourself in that mix? Focal Point Data Risk will share their knowledge and advice on collaborative styles. Join this workshop to understand what style fits you best, as well as how to incorporate it into your professional career.
                              </div>  
                          </li>
                          <li data-toggle="collapse" data-target="#block16">
                              <span class="event-name">The Intricacies behind Meaningful Connections</span>
                              <br />
                               <span class= "description networking">NETWORKING</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3711</span>
                              <div id="block16" class="collapse" >
                                  Networking is a crucial step for getting hired, and in today’s globally connected job market it could be the deciding factor in getting a first interview. It is difficult to understand how to take advantage of the short time you will have at a recruiting event to make a good first  impression on a recruiter. In this interactive and engaging workshop, learn the do’s and don'ts of networking, as well as how to create meaningful connections with professionals  from multiple companies.
                              </div>  
                          </li>
                        </ul>                           
                      </li>
                  </div> <!--block 1 ends -->
                    <!-- BLOCK 2 -->
                    <div >
                      <li class="date">
                       <h3>Workshop</h3>
                        <h4>Block 2</h4>                                 
                      </li>
                      <li  class= "events">
                        <ul class="events-detail">
                          <li data-toggle="collapse" data-target="#block21" >  
                              <p class="event-time time">10:55 a.m - 11:55 a.m </p>
                              <span class="event-name">What Kind of Leader Are you?</span>
                              <br />
                              <span class= "description team">TEAM BUILDING</span>       
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 2709</span>
                              <div id="block21" class="collapse">
                                 In order for a company to be at the top of the leaderboards, their employees and managers must have great communication with each other, if they do not the business will plummet. A manager’s purpose in an organization is to make production go smoothly and efficiently. However, not all managers have the same approach to make this happen. This is a chance for you to think about what makes a great leader and how your style of leadership impacts a group
                              </div>                                                                                      
                          </li>     
                           <li data-toggle="collapse" data-target="#block22">
                              <span class="event-name">Evaluating Job Offer</span>
                              <br />
                               <span class= "description career">CAREER</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: TBA</span>
                              <div id="block22" class="collapse" >
                                 TBA
                              </div>                          
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block23">
                              <span class="event-name">Rejection? Just do it <i class="fa fa-check" aria-hidden="true"></i></span>
                              <br />
                               <span class= "description skill-set">SKILL SET</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3709</span>
                              <div id="block23" class="collapse" >
                                  Rejection, the one word than can turn your day from the best day ever to one of the worst. Reading that rejection letter or hearing the words: sorry you were not chosen to move on to the next round, puts a person in this state of mind of my best was not good enough. But, keep your head up high! Don’t let rejection stop you from achieving your goal, it happens to the best of us and it’s inevitable! In this workshop, learn how to deal with rejection, what to do next, and listen to someone who has faced this problem multiple times.
                              </div>  
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block24">
                              <span class="event-name">The Secret Behind Every Interview</span>
                              <br />
                               <span class= "description skill-set">The STAR Method</span>                          
                               <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3711</span>
                               <div id="block24" class="collapse" >
                                   Have you ever wondered, is there a secret to interview questions? Out of all the people being interviewed, how can you stand out and be on top of the candidates list? The STAR Method of interviewing is a practice that has been widespread throughout many industries in order to assess a candidate’s behavioral qualifications. Empower yourself to understand what recruiters are looking for when asking these questions. In this workshop, you’ll learn what to expect from an interview based on the STAR method, as well as how to devise strategies to surpass the competition.
                              </div>  
                          </li>                                
                           <li data-toggle="collapse" data-target="#block25">
                              <span class="event-name">“Self-awareness and Finding your Collaborative Style”</span>
                              <br />
                               <span class= "description professionalism">PROFESSIONALISM</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3708</span>
                              <div id="block25" class="collapse" >
                                   In your career, it is imperative that you learn to work effectively with your team. But how do create synergy when we are all so different in our own way? What happens when you have contrasting personalities with one person being quiet and reserved while the other individual is bold and headstrong? Where do you find yourself in that mix? Focal Point Data Risk will share their knowledge and advice on collaborative styles. Join this workshop to understand what style fits you best, as well as how to incorporate it into your professional career.
                              </div>  
                          </li>
                          <li data-toggle="collapse" data-target="#block26">
                              <span class="event-name">The Intricacies behind Meaningful Connections</span>
                              <br />
                               <span class= "description networking">NETWORKING</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3711</span>
                              <div id="block26" class="collapse" >
                                  Networking is a crucial step for getting hired, and in today’s globally connected job market it could be the deciding factor in getting a first interview. It is difficult to understand how to take advantage of the short time you will have at a recruiting event to make a good first  impression on a recruiter. In this interactive and engaging workshop, learn the do’s and don'ts of networking, as well as how to create meaningful connections with professionals  from multiple companies.
                              </div>  
                          </li>
                        </ul>                           
                      </li>
                  </div> <!--block 2 ends -->
                  <!-- LUNCH -->
                    <div >
                      <li class="date">
                        <h3>Lunch</h3>        
                      </li>
                      <li class= "events">
                        <ul class="events-detail">
                            <li data-toggle="collapse" data-target="#block31" >  
                              <p class="event-time time">12:00 p.m - 1:00 p.m </p>
                              <span class="event-name">First Come, First Serve</span>
                              <br />
                              <span class= "description other">LUNCHES AND RECEPTIONS</span>       
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: TBA</span>
                              <div id="block31" class="collapse">
                                 TBA
                              </div>                                                                                      
                          </li> 
                        </ul>                           
                      </li>
                  </div><!-- ./LUNCH -->  
                   <!-- BLOCK 3 -->
                    <div >
                      <li class="date">
                       <h3>Workshop</h3>
                        <h4>Block 3</h4>                                 
                      </li>
                      <li  class= "events">
                        <ul class="events-detail">
                          <li data-toggle="collapse" data-target="#block31" >  
                              <p class="event-time time">1:10 p.m - 2:10 p.m </p>
                              <span class="event-name">TBA</span>
                              <br />
                              <span class= "description team">TEAM BUILDING &nbsp</span>       
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: TBA</span>
                              <div id="block31" class="collapse">
                                 TBA
                              </div>                                                                                      
                          </li>     
                           <li data-toggle="collapse" data-target="#block32">
                              <span class="event-name">“The Bamboo Ceiling” </span>
                              <br />
                               <span class= "description community">COMMUNITY</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3708</span>
                              <div id="block32" class="collapse" >
                                 In Western professional culture, Asian-Americans can easily thrive in their positions, but fail to rise up the ranks. This is known as the “Bamboo Ceiling.”  Some facets of Asian-American culture can sometimes be considered professional weaknesses. Learn how to find success as an Asian leader, understand the barriers that separate us in the professional arena, and how to overcome these obstacles. Join us and see how to tackle this “Model Minority” stereotype.
                              </div>                          
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block33">
                              <span class="event-name">"Decomposing Requirements for a High Level Software Design."</span>
                              <br />
                               <span class= "description skill-set">SKILL SET</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 2708</span>
                              <div id="block33" class="collapse" >
                                  In your career of software design there are two ways of constructing a software: One way is to make it so simple that there are obviously no deficiencies, and the other way is to make it so complicated that there are no obvious deficiencies. Attend this workshop to learn a simple method to decompose the requirement of high level software design. Deloitte will share with you how to decompose the requirement of high level software design in a simple way. This is a great opportunity for you to learn about this sought-after skill that major software development companies use as well as network with professionals from Deloitte. 
                              </div>  
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block34">
                              <span class="event-name">Courageous Conversations</span>
                              <br />
                               <span class= "description networking">NETWORKING</span>                          
                               <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3708</span>
                               <div id="block34" class="collapse" >
                                  Being able to converse with others is a quintessential part of everyday life whether that be with friends, family, an employer, your co workers, etc. Exceptional conversations can be utilized to strengthen and construct valuable connections, which can lead to future job opportunities. In this workshop, you will learn the essential tactics to take on any conversation, even in the most unfavorable situations.

                              </div>  
                          </li>                                
                           <li data-toggle="collapse" data-target="#block35">
                              <span class="event-name"> “Cracking the Work-Life Balance Conundrum”</span>
                              <br />
                               <span class= "description career">CAREER</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3709</span>
                              <div id="block35" class="collapse" >
                                    It is said that a balanced life is one where we spread our energy and effort - emotional, intellectual, imaginative, spiritual and physical between key areas of importance. However, this is a very difficult task to achieve. Come and learn strategies and habits practiced by senior engineers that can help you manage time, stress and distractions to perform better at work and enjoy personal time.
                              </div>  
                          </li>
                          <li data-toggle="collapse" data-target="#block36">
                              <span class="event-name">“Challenging your Competitor”</span>
                              <br />
                               <span class= "description team">TEAM BUILDING</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3711</span>
                              <div id="block36" class="collapse" >
                                  You and your team were just assigned to come up with something creative to be implemented in the company. One problem, you are short on time and you need to impress your employers. Are you ready to put your team-building and problem-solving skills to the test? In this fun and interactive workshop, work collaboratively with a team to pitch tangible issues and potential solutions.
                              </div>  
                          </li>
                        </ul>                           
                      </li>
                  </div> <!-- ./block 3 ends -->  
                  <!-- BLOCK 4 -->                                                                        
                  <div >
                      <li class="date">
                       <h3>Workshop</h3>
                        <h4>Block 4</h4>                                 
                      </li>
                      <li  class= "events">
                        <ul class="events-detail">
                          <li data-toggle="collapse" data-target="#block41" >  
                              <p class="event-time time">2:20 p.m -3:20 p.m
</p>
                              <span class="event-name">TBA</span>
                              <br />
                              <span class= "description team">TEAM BUILDING &nbsp</span>       
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: TBA</span>
                              <div id="block41" class="collapse">
                                 TBA
                              </div>                                                                                       
                          </li>     
                           <li data-toggle="collapse" data-target="#block42">
                              <span class="event-name">“The Bamboo Ceiling” </span>
                              <br />
                               <span class= "description community">COMMUNITY</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3708</span>
                              <div id="block42" class="collapse" >
                                 In Western professional culture, Asian-Americans can easily thrive in their positions, but fail to rise up the ranks. This is known as the “Bamboo Ceiling.”  Some facets of Asian-American culture can sometimes be considered professional weaknesses. Learn how to find success as an Asian leader, understand the barriers that separate us in the professional arena, and how to overcome these obstacles. Join us and see how to tackle this “Model Minority” stereotype.
                              </div>                          
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block43">
                              <span class="event-name">"Decomposing Requirements for a High Level Software Design."</span>
                              <br />
                               <span class= "description skill-set">SKILL SET</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 2708</span>
                              <div id="block43" class="collapse" >
                                   In your career of software design there are two ways of constructing a software: One way is to make it so simple that there are obviously no deficiencies, and the other way is to make it so complicated that there are no obvious deficiencies. Attend this workshop to learn a simple method to decompose the requirement of high level software design. Deloitte will share with you how to decompose the requirement of high level software design in a simple way. This is a great opportunity for you to learn about this sought-after skill that major software development companies use as well as network with professionals from Deloitte
                              </div>  
                          </li>
                                 
                           <li data-toggle="collapse" data-target="#block44">
                              <span class="event-name"> “Cracking the Work-Life Balance Conundrum”</span>
                              <br />
                               <span class= "description career">CAREER</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3709</span>
                              <div id="block44" class="collapse" >
                                    It is said that a balanced life is one where we spread our energy and effort - emotional, intellectual, imaginative, spiritual and physical between key areas of importance. However, this is a very difficult task to achieve. Come and learn strategies and habits practiced by senior engineers that can help you manage time, stress and distractions to perform better at work and enjoy personal time.
                              </div>  
                          </li>                                
                           <li data-toggle="collapse" data-target="#block45">
                              <span class="event-name">Courageous Conversations</span>
                              <br />
                               <span class= "description networking">NETWORKING</span>                          
                               <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3708</span>
                               <div id="block45" class="collapse" >
                                  Being able to converse with others is a quintessential part of everyday life whether that be with friends, family, an employer, your co workers, etc. Exceptional conversations can be utilized to strengthen and construct valuable connections, which can lead to future job opportunities. In this workshop, you will learn the essential tactics to take on any conversation, even in the most unfavorable situations.

                              </div> 
                          </li>
                          <li data-toggle="collapse" data-target="#block46">
                              <span class="event-name">“Challenging your Competitor”</span>
                              <br />
                               <span class= "description team">TEAM BUILDING</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Room: 3711</span>
                              <div id="block46" class="collapse" >
                                  You and your team were just assigned to come up with something creative to be implemented in the company. One problem, you are short on time and you need to impress your employers. Are you ready to put your team-building and problem-solving skills to the test? In this fun and interactive workshop, work collaboratively with a team to pitch tangible issues and potential solutions.
                              </div>  
                          </li>
                        </ul>                           
                      </li>
                  </div>
                  <!-- ENDING -->                                                                                            
                  <div >
                      <li class="date">
                        <h3>Ending</h3>        
                      </li>
                      <li class= "events">
                        <ul class="events-detail">
                          <li data-toggle="collapse" data-target="#ending11">                                    
                              <p class="event-time">00:00 p.m - 00:00 p.m </p>
                              <span class="event-name">Banquet</span>
                              <br />
                              <span class= "description community">TBA</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Location TBA</span>
                              <div id="ending11" class="collapse" >
                                 TBA
                              </div>                                                                                        
                          </li>
                          <li data-toggle="collapse" data-target="#ending12">                          
                              <span class="event-time">00:00 p.m - 00:00 p.m </span>
                              <span class="event-name">Ending Keynotes</span>
                              <br />
                              <span class= "description networking">TBA</span>                          
                              <span class="event-location"><i class="fa fa-map-marker" aria-hidden="true"></i> Location TBA</span>
                              <div id="ending12" class="collapse" >
                                 TBA
                              </div>                                                                                           
                          </li>
                        </ul>                           
                      </li>
                  </div><!-- ENDING-->                                       
                 </ul> 
            </div> 
        </div> <!-- end of schedule row--> 
        
        

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="maintitle">
                    <!-- QA -->                
                   <!-- <p style="padding-top:7%" class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident porro, vel quae ab quidem quas et modi inventore, voluptatem architecto deleniti dicta, dolore. 
                    </p>-->
                </div>							
            </div>				
        </div> <!-- ./title -->	                   

	</div>
</div>


  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
 
<script>
    
/* List of workshops list style */    
$(function($) {
    var num_cols = 2,
    container = $('.split-list'),
    listItem = 'li',
    listClass = 'sub-list';
    container.each(function() {
        var items_per_col = new Array(),
        items = $(this).find(listItem),
        min_items_per_col = Math.floor(items.length / num_cols),
        difference = items.length - (min_items_per_col * num_cols);
        for (var i = 0; i < num_cols; i++) {
            if (i < difference) {
                items_per_col[i] = min_items_per_col + 1;
            } else {
                items_per_col[i] = min_items_per_col;
            }
        }
        for (var i = 0; i < num_cols; i++) {
            $(this).append($('<ul ></ul>').addClass(listClass));
            for (var j = 0; j < items_per_col[i]; j++) {
                var pointer = 0;
                for (var k = 0; k < i; k++) {
                    pointer += items_per_col[k];
                }
                $(this).find('.' + listClass).last().append(items[j + pointer]);
            }
        }
    });
});    
    
/**
 * Vertically center Bootstrap 3 modals so they aren't always stuck at the top
 https://www.abeautifulsite.net/vertically-centering-bootstrap-modals
 */
$(function() {
    function reposition() {
        var modal = $(this),
            dialog = modal.find('.modal-dialog');
        modal.css('display', 'block');
        
        // Dividing by two centers the modal exactly, but dividing by three 
        // or four works better for larger screens.
        dialog.css("margin-top", Math.max(0, ($(window).height() - dialog.height()) / 2));
    }
    // Reposition when a modal is shown
    $('.modal').on('show.bs.modal', reposition);
    // Reposition when the window is resized
    $(window).on('resize', function() {
        $('.modal:visible').each(reposition);
    });
});

</script>

