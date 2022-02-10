<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ $post->title }}</title>
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body id=body>
  <navbar id="navbar">
    <a class="navbarbutton" href="C:\school-zooi-hz\who-am-i-website\index.html">Home</a>
    <a class="navbarbutton"  href="C:\school-zooi-hz\who-am-i-website\profile.html">My profile</a>
    <a class="navbarbutton"  href="C:\school-zooi-hz\who-am-i-website\dashboard.html">Dashboard</a>
    <a class="navbarbutton"  href="C:\school-zooi-hz\who-am-i-website\feed.html">Feed</a>
    <a class="navbarbutton"  href="C:\school-zooi-hz\who-am-i-website\FAQ.html">FAQ</a>
    <a id= "name" >welcome to Tijn's blog!</a>
  </navbar>

<main>
    <br>
  <p1 class="timestamp">{{ $post->timestamp }}</p1>
  <main>
<h1>
    <p>{{ $post->title }}</p>
</h1>
<p>{{ $post->body }}</p>
</main>
  <footer id="footer" class="grid-container">
    <div id="allcontactinfo">
      <a id="contactinfo"><a target="_blank"
          href="https://teams.microsoft.com/l/channel/19%3aca826369e55e492aa1efd2016b2fcbbe%40thread.skype/International?groupId=95bddebc-a340-4d88-81fc-b80e0bfc70c3&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
          id="footerlink">the HZ teams group</a><br>
        <a target="_blank" href="https://apps.hz.nl/angular/studievoortgang/studiestatus" id="footerlink">
          study progress </a> <br> <a id="footerlink" target="_blank" href="https://learn.hz.nl">our learn
          environment</a>
    </div>
    <div id="tweedecontactinfo">
      <a id="contactinfo"><a target="_blank"
          href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Course-and-Examination-Regulations-2021-2022.pdf"
          id="footerlink">examination regulations</a>
        <br>
        <a target="_blank"
          href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
          id="footerlink">implementation regulations</a>
        <br> <a target="_blank" href="https://github.com/HZ-HBO-ICT" id="footerlink">ICT github page
        </a>
      </a>
    </div>
  </footer>
</body>