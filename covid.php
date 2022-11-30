<!DOCTYPE html>
<html>
<head>
<title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS2/style2.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&display=swap" rel="stylesheet">

  
</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">COVID-AID</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="Index1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Aboutus2.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="covid.php">Covid-19 Info</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lgin.php">Login</a>
        </li>

      </ul>
        <button class="btn btn-outline-success" type="submit">Donate</button>
      </form>
    </div>
  </div>
</nav>










<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>












<div class="container">
  <div class="card">
    <div class="card-header">
      <img src="IMAGES/ox2.jpeg" alt="rover" />
    </div>
    <div class="card-body">
    <button type="submit" class="btn btn-success">Donate</button>
      <h4 class="py-2">
       Oxygen-Relief Programme
      </h4>
      <p>
        A campaign to respond to the acute shortage of oxygen supply in hospitals and covid care centres.
      </p>
      <a href="Aboutus2.php">Know More</a>
      <div class="user">
        <img src="https://yt3.ggpht.com/a/AGF-l7-0J1G0Ue0mcZMw-99kMeVuBmRxiPjyvIYONg=s900-c-k-c0xffffffff-no-rj-mo" alt="user" />
        <div class="user-info">
          <h5>July Dec</h5>
          <small>2h ago</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <img src="IMAGES/mw.jpeg" alt="ballons" />
    </div>
    <div class="card-body">
    <button type="submit" class="btn btn-success">Donate</button>
      <h4 class="py-2">
        Relief to Migrant Workers
      </h4>
      <p>
        A mission to support the migrant workers in tough times of the Covid-19 Crisis.
      </p>
      <a href="Aboutus2.php">Know More</a>
      <div class="user py-1">
        <img src="https://lh3.googleusercontent.com/ogw/ADGmqu8sn9zF15pW59JIYiLgx3PQ3EyZLFp5Zqao906l=s32-c-mo" alt="user" />
        <div class="user-info">
          <h5>Eyup Ucmaz</h5>
          <small>Yesterday</small>
        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header">
      <img src="IMAGES/me.jpeg" alt="city" />
    </div>
    <div class="card-body">
    <button type="submit" class="btn btn-success">Donate</button>
      <h4 class="py-2">
        Providing Medical Equipments
      </h4>
      <p>
         Procuring essential medical equipments for local people,hospitals and covid care centres.
      </p>
      <a href="Aboutus2.php">Know More</a>
      
      <div class="user">
        <img src="https://studyinbaltics.ee/wp-content/uploads/2020/03/3799Ffxy.jpg" alt="user" />
        <div class="user-info">
          <h5>Carrie Brewer</h5>
          <small>1w ago</small>
        </div>
      </div>
    </div>
  </div>
</section>


  <style>

@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  box-sizing: border-box;
}

.container {
  display: flex;
  width: 1040px;
  justify-content: space-evenly;
  flex-wrap: wrap;
}
.card {
  margin: 10px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 2px 20px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  width: 300px;
}
.card-header img {
  width: 100%;
  height: 200px;
  object-fit: cover;
}
.card-body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 20px;
  min-height: 250px;
}

.tag {
  background: #cccccc;
  border-radius: 50px;
  font-size: 12px;
  margin: 0;
  color: #fff;
  padding: 2px 10px;
  text-transform: uppercase;
  cursor: pointer;
}
.tag-teal {
  background-color: #47bcd4;
}
.tag-purple {
  background-color: #5e76bf;
}
.tag-pink {
  background-color: #cd5b9f;
}

.card-body p {
  font-size: 13px;
  margin: 0 0 40px;
}
.user {
  display: flex;
  margin-top: auto;
}

.user img {
  border-radius: 50%;
  width: 40px;
  height: 40px;
  margin-right: 10px;
}
.user-info h5 {
  margin: 0;
}
.user-info small {
  color: #545d7a;
}

  </style>


