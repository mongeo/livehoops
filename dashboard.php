<html>
  <head>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <!--/Bootstrap -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    
    </style>
    <link href="css/sidebar.css" rel="stylesheet">
  </head>
  <body>
    <main>
      <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4  text-center"><img src=""><a class="navbar-brand" href="index.html"><img src="img/test.png" width=80%></span>
        </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Inference
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Player Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
          Teams
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
          Videos
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>Profile</strong>
      </a>
      <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
  <div class="b-example-divider"></div>
  <div class="container">
    <div class="container my-5"> 
      <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5"> 
        <h1 class="text-body-emphasis">LIVESTREAM</h1> 
        <p class="col-lg-6 mx-auto mb-4">
          Need to figure out how to embed and process livestream data here...(Static video used for example)
        </p> 

        </button> 
        <video width="320" height="240" controls>
          <source src="video/sample.mp4" type="video/mp4">
        </video>
      </div> 
    </div>

    <div class="container my-5">
      <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5"> 
          <div class="row">
            <div class="col h1">
              Team A
            </div>
            <div class="col h2">
              Points A
            </div>
            <div class="col h3">
              Game Time
            </div>
            <div class="col h2">
              Points B
            </div>
            <div class="col h1">
              TEAM B
            </div>
          </div> 
      </div>
    </div>

  <div class="container my-5">
    <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5"> 
      <table width="100%">
          <tr>
          <th>
            Player
          </th>
          <th>
            PTS
          </th>
          <th>
            ASST
          </th>
          <th>
            REB
          </th>
          <th>
            STL
          </th>
          <th>
            BLK
          </th>
        </tr>
        <tr>
          <td>
            Player1
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
        </tr>
        <tr>
          <td>
            Player1
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
        </tr>
        <tr>
          <td>
            Player1
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
          <td>
            0
          </td>
        </tr>
      </table>
    </div>
</div>
  </div>
    </main>
  </body>
</html>