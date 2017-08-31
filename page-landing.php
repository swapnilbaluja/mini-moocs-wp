<?php get_header(); ?>
<style type="text/css">
    .navbar{
        background-color: transparent;
    }
    body{
        display: block;
    }
</style>    
<div id="main-view">
    <div class="dot-map">
        <img src=<?php echo get_template_directory_uri(). '/img/dot-map2.png'; ?> />
    </div>
    <div class="slide one">
        <div class="content">
            <div class="header">MINI MOOCS</div>
            <div class="sub-header">Innovative Research in Pedagogy for Mini-MOOCs Blended with Instruction Strategies to Enhance Quality of Higher Education</div>
            <button class="btn1" onclick="scrollpage('.two')">Learn More</button>
        </div>
    </div>
    <div class="slide two">
        <div class="content">
            <header>About us</header>
            <h2>Newton Bhabha Research Project by Royal Academy of Engineering, UK and Thapar University with a Total Budget of 100 Lac INR</h2>
            <p> The objective of the project is to enhance the capacity of the teachers to improve the education delivery experience. The Project involves design and development of four mini-MOOCs. Two of these will be on :</p>
            <ul>
                <li>How to design MOOC Content </li>
                <li>MOOC Life Cycle (Inception to Delivery)</li>
            </ul>
            <button class="icon" onclick="scrollpage('.three')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="4" x2="12" y2="20"></line><polyline points="18 14 12 20 6 14"></polyline></svg>
            </button>
        </div>
    </div>
    <div class="slide three">
        <div class="content">
            <p> Then there will be two more modules to demonstrate the best practices with the help of two popular topics. Innovative Pedagogy to deliver these mini-MOOCs will be designed and evaluated. It will help to suggest the best practices for further Mini-MOOCs to be developed. In the first phase Lead UK and Lead Indian institution will partner to develop these modules. In the next action India has been divided into 11 zones and mentor institutions have been chosen, who will be trained on these techniques and they will be further guided to develop more mini-MOOCs. These institutions will also act as a laboratory to implement these four developed modules in their classrooms and give the feedback to further enhance the pedagogy for future Mini-MOOCs. These institutions will further train 10-15 institutions in their zone. </p>
            <button class="icon" onclick="scrollpage('.four')">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="4" x2="12" y2="20"></line><polyline points="18 14 12 20 6 14"></polyline></svg>
            </button>
        </div>
    </div>
    <div class="slide four">
        <div class="content">
            <p> Project will involve train-the -trainer workshops for the management, faculty and the designers. It will result in a significant hand-holding of Tier-2/3 Institutions who want to progress in providing the quality in higher education and want to embrace the latest techniques in education delivery. It will result in driving technology enhanced education adoption in Universities. It will also help in creating a network of instructors committed to take the higher education in India to next level of excellence. The project has direct consequences on the National projects like Skill India, Digital India and Start-Up India. The learning from the project can easily be translated to new frontiers to upscale the impact of the project. </p>
        </div>
    </div> 
</div>    

<?php get_footer(); ?>