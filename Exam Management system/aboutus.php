<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>UMS</title>
    <<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">UT MANAGEMENT SYSTEM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-white" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="Timetable.php">TIME TABLE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="supervisor.php">SUPERVISOR</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="blockassigning.php">BLOCK ASSIGNING</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="result.php">RESULT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="logout.php">LOGOUT</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link px-3 text-white" href="aboutus.php">ABOUT US</a>
      </li>
    
       </div>
      </nav>
    <!--Team-->
    <section class="text-gray-700 body-font ">
        <div class="container px-5 py-24 mx-auto mt-16">
          <div class="flex flex-col text-center w-full mb-20">
            <h1 class="text-2xl font-medium title-font mb-4 text-gray-900 tracking-widest">Who we are?</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">We are the team of 4 Homosaphein, studing Computer Engineering in Anjuman-I-Islam Kalsekar Technical Campus, New-Panvel.
                This project(ut management system) was made under the Guidance of Prof.Mukhtar Ansari as a part of Web-Development Mini project. Thankyou for visiting us, your Doubts and Feedbacks are always welcomed.</p>
          </div>
          <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="public/farheen.jpeg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900">Farheen Master</h2>
                  <h3 class="text-gray-500 mb-3">UI Developer</h3>
                  <p class="mb-4">My strengths are my attitude that I like to take challenges that I CAN do it, self motivated person, self disciplined ,I can adopt to any kind of environment.
                    </p>
                  
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="public/hasan.jpeg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900">Hasan Shaikh</h2>
                  <h3 class="text-gray-500 mb-3">Back End Developer</h3>
                  <p class="mb-4">A self-motivated IT student with a knowledge and proficiency in JavaScript, HTML , CSS, and mobile responsive web development, 
                    as well as strong skills and ability in writing clean and efficient code.</p>
                  
                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="public/khusboo.jpeg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900">Khushboo Kanojiya</h2>
                  <h3 class="text-gray-500 mb-3">UI Developer</h3>
                  <p class="mb-4">A self-motivated IT student with a knowledge and proficiency in JavaScript, HTML , CSS, and mobile responsive web development.</p>

                </div>
              </div>
            </div>
            <div class="p-4 lg:w-1/2">
              <div class="h-full flex sm:flex-row flex-col items-center sm:justify-start justify-center text-center sm:text-left">
                <img alt="team" class="flex-shrink-0 rounded-lg w-48 h-48 object-cover object-center sm:mb-0 mb-4" src="public/talha.jpeg">
                <div class="flex-grow sm:pl-8">
                  <h2 class="title-font font-medium text-lg text-gray-900">Talha Shaikh</h2>
                  <h3 class="text-gray-500 mb-3">Back End Developer</h3>
                  <p class="mb-4">Passionate Programmer and Fervent Artist. He is having inclination towards various Computer domain.</p>
                  
                </div>s
              </div>
            </div>
          </div>
        </div>
      </section>
    <script>
        //Javascript to toggle the menu
        document.getElementById('nav-toggle').onclick = function () {
            document.getElementById("nav-content").classList.toggle("hidden");
        }
    </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>