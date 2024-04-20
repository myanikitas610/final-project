
<html>
  <head>
    <title>Mya Nikitas Portfolio</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
    </style>
  </head>
<body class="w3-light-grey">


<div class="w3-content w3-margin-top" style="max-width:1400px;">


  <div class="w3-row-padding">
  

    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://media.licdn.com/dms/image/C4E03AQHKV2xYKtOiAw/profile-displayphoto-shrink_400_400/0/1652816577693?e=1718841600&v=beta&t=SN2ju82uvZ2RVJhRA4ggydYxvkB4JaEby605nCbiWPw" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-white" style="text-shadow: 2px 2px 4px black;">
          <h2><strong>Mya Nikitas</strong></h2>
        </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-pink"></i>Student</p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-pink"></i>Matawan, NJ</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-pink"></i>myanikitas@gmail.com</p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-pink"></i>732-261-2012</p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-pink"></i>Skills</b></p>
          <h4>Programming</h4>
            <p>C++, Java, Javascript, HTML, CSS, Python</p>
          <h4>Front-end Coding</h4>
          <h4>Teaching</h4>
        </div>
      </div><br>
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
        <button class="w3-button w3-pink w3-round-large w3-xxlarge">Contact me!</button>
      </div>
      </div>
  
    </div>

  
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-pink"></i>Work Experience</h2>
        <div class="w3-container">
        </div>
        <div id="work-experience-section" class="w3-container">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
    $.ajax({
        url: 'http://localhost:8888/get_experience',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            renderWorkExperience(data);
        },
        error: function(xhr, status, error) {
            console.error('Error fetching work experience:', error);
        }
    });

    function renderWorkExperience(data) {
        var workExperienceSection = $('#work-experience-section');
        workExperienceSection.empty(); 
        if (data.length > 0) {
            var html = '<ul>';
            data.forEach(function(item) {
                html += '<li><h4>' + item.job_title + ' / ' + item.company_name + '</h4>';
                html += '<p><strong>Start Date:</strong> ' + item.start_date + '</p>';
                if (item.end_date) {
                    html += '<p><strong>End Date:</strong> ' + item.end_date + '</p>';
                }
                html += '<p><strong>Description:</strong> ' + item.description + '</p></li>';
            });
            html += '</ul>';
            workExperienceSection.html(html);
        } else {
            workExperienceSection.html('<p>No work experience available.</p>');
        }
    }
});


  </script>
  </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-pink"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Fordham University</b></h5>
          <h6 class="w3-text-pink"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2021 - <span class="w3-tag w3-pink w3-round">Current</span></h6>
          <p>Bachelor's Of Science - Computer Science</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Old Bridge High School</b></h5>
          <h6 class="w3-text-pink"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2017 - 2021</h6>
          <p>High School Diploma</p><br>
        </div>
      </div>

    </div>
    
  </div>
  

</div>

<footer class="w3-container w3-pink w3-center w3-margin-top">
  
 </footer>

</body>
</html>
