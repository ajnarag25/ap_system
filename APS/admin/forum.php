<?php
include 'connection.php';
$sql = 'SELECT * FROM tbl_forum_topics INNER JOIN tbl_users ON tbl_forum_topics.user_id=tbl_users.user_id';
$result = mysqli_query($conn, $sql);
$forums = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<head>
  <?php 
include 'helpers/libraries.php';
?>
    <link rel="stylesheet" href="Login.css">
  <link rel="stylesheet" href="forum.css">


</head>
<svg style="display:none;">
<symbol id="users" viewBox="0 0 16 16">
    <path d="M8,0a8,8,0,1,0,8,8A8,8,0,0,0,8,0ZM8,15a7,7,0,0,1-5.19-2.32,2.71,2.71,0,0,1,1.7-1,13.11,13.11,0,0,0,1.29-.28,2.32,2.32,0,0,0,.94-.34,1.17,1.17,0,0,0-.27-.7h0A3.61,3.61,0,0,1,5.15,7.49,3.18,3.18,0,0,1,8,4.07a3.18,3.18,0,0,1,2.86,3.42,3.6,3.6,0,0,1-1.32,2.88h0a1.13,1.13,0,0,0-.27.69,2.68,2.68,0,0,0,.93.31,10.81,10.81,0,0,0,1.28.23,2.63,2.63,0,0,1,1.78,1A7,7,0,0,1,8,15Z"></path>
  </symbol>
  <symbol id="settings" viewBox="0 0 16 16">
    <rect x="9.78" y="5.34" width="1" height="7.97" />
    <polygon points="7.79 6.07 10.28 1.75 12.77 6.07 7.79 6.07" />
    <rect x="4.16" y="1.75" width="1" height="7.97" />
    <polygon points="7.15 8.99 4.66 13.31 2.16 8.99 7.15 8.99" />
    <rect x="1.28" width="1" height="4.97" />
    <polygon points="3.28 4.53 1.78 7.13 0.28 4.53 3.28 4.53" />
    <rect x="12.84" y="11.03" width="1" height="4.97" />
    <polygon points="11.85 11.47 13.34 8.88 14.84 11.47 11.85 11.47" />
  </symbol>
  <symbol id="home" viewBox="0 0 20 20">
<path d="M18.121,9.88l-7.832-7.836c-0.155-0.158-0.428-0.155-0.584,0L1.842,9.913c-0.262,0.263-0.073,0.705,0.292,0.705h2.069v7.042c0,0.227,0.187,0.414,0.414,0.414h3.725c0.228,0,0.414-0.188,0.414-0.414v-3.313h2.483v3.313c0,0.227,0.187,0.414,0.413,0.414h3.726c0.229,0,0.414-0.188,0.414-0.414v-7.042h2.068h0.004C18.331,10.617,18.389,10.146,18.121,9.88 M14.963,17.245h-2.896v-3.313c0-0.229-0.186-0.415-0.414-0.415H8.342c-0.228,0-0.414,0.187-0.414,0.415v3.313H5.032v-6.628h9.931V17.245z M3.133,9.79l6.864-6.868l6.867,6.868H3.133z"></path>
</symbol> 
<symbol id="jobs" viewBox="0 0 20 20">
              <path d="M17.283,5.549h-5.26V4.335c0-0.222-0.183-0.404-0.404-0.404H8.381c-0.222,0-0.404,0.182-0.404,0.404v1.214h-5.26c-0.223,0-0.405,0.182-0.405,0.405v9.71c0,0.223,0.182,0.405,0.405,0.405h14.566c0.223,0,0.404-0.183,0.404-0.405v-9.71C17.688,5.731,17.506,5.549,17.283,5.549 M8.786,4.74h2.428v0.809H8.786V4.74z M16.879,15.26H3.122v-4.046h5.665v1.201c0,0.223,0.182,0.404,0.405,0.404h1.618c0.222,0,0.405-0.182,0.405-0.404v-1.201h5.665V15.26z M9.595,9.583h0.81v2.428h-0.81V9.583zM16.879,10.405h-5.665V9.19c0-0.222-0.183-0.405-0.405-0.405H9.191c-0.223,0-0.405,0.183-0.405,0.405v1.215H3.122V6.358h13.757V10.405z"></path>
</symbol>    
<symbol id="events"  viewBox="0 0 20 20">
              <path d="M16.557,4.467h-1.64v-0.82c0-0.225-0.183-0.41-0.409-0.41c-0.226,0-0.41,0.185-0.41,0.41v0.82H5.901v-0.82c0-0.225-0.185-0.41-0.41-0.41c-0.226,0-0.41,0.185-0.41,0.41v0.82H3.442c-0.904,0-1.64,0.735-1.64,1.639v9.017c0,0.904,0.736,1.64,1.64,1.64h13.114c0.904,0,1.64-0.735,1.64-1.64V6.106C18.196,5.203,17.461,4.467,16.557,4.467 M17.377,15.123c0,0.453-0.366,0.819-0.82,0.819H3.442c-0.453,0-0.82-0.366-0.82-0.819V8.976h14.754V15.123z M17.377,8.156H2.623V6.106c0-0.453,0.367-0.82,0.82-0.82h1.639v1.23c0,0.225,0.184,0.41,0.41,0.41c0.225,0,0.41-0.185,0.41-0.41v-1.23h8.196v1.23c0,0.225,0.185,0.41,0.41,0.41c0.227,0,0.409-0.185,0.409-0.41v-1.23h1.64c0.454,0,0.82,0.367,0.82,0.82V8.156z"></path>
                        
</symbol>         
<symbol id="forum"  viewBox="0 0 20 20">
              <path d="M14.999,8.543c0,0.229-0.188,0.417-0.416,0.417H5.417C5.187,8.959,5,8.772,5,8.543s0.188-0.417,0.417-0.417h9.167C14.812,8.126,14.999,8.314,14.999,8.543 M12.037,10.213H5.417C5.187,10.213,5,10.4,5,10.63c0,0.229,0.188,0.416,0.417,0.416h6.621c0.229,0,0.416-0.188,0.416-0.416C12.453,10.4,12.266,10.213,12.037,10.213 M14.583,6.046H5.417C5.187,6.046,5,6.233,5,6.463c0,0.229,0.188,0.417,0.417,0.417h9.167c0.229,0,0.416-0.188,0.416-0.417C14.999,6.233,14.812,6.046,14.583,6.046 M17.916,3.542v10c0,0.229-0.188,0.417-0.417,0.417H9.373l-2.829,2.796c-0.117,0.116-0.71,0.297-0.71-0.296v-2.5H2.5c-0.229,0-0.417-0.188-0.417-0.417v-10c0-0.229,0.188-0.417,0.417-0.417h15C17.729,3.126,17.916,3.313,17.916,3.542 M17.083,3.959H2.917v9.167H6.25c0.229,0,0.417,0.187,0.417,0.416v1.919l2.242-2.215c0.079-0.077,0.184-0.12,0.294-0.12h7.881V3.959z"></path>
</symbol> 
<symbol id="search" viewBox="0 0 16 16">
    <path d="M6.57,1A5.57,5.57,0,1,1,1,6.57,5.57,5.57,0,0,1,6.57,1m0-1a6.57,6.57,0,1,0,6.57,6.57A6.57,6.57,0,0,0,6.57,0Z" />
    <rect x="11.84" y="9.87" width="2" height="5.93" transform="translate(-5.32 12.84) rotate(-45)" />
  </symbol>           
                        </svg>
<header class="page-header">
  <nav>
    <a href="#0">
    </a>
    <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
      <svg width="20" height="20" aria-hidden="true">
        <use xlink:href="#down"></use>
      </svg>
    </button>
    <ul class="admin-menu">
      <li class="menu-heading">
        <h3>Admin</h3>
      </li>
      <li>
        <a href="adminpage.php">
        <svg>
            <use xlink:href="#home"></use>
          </svg>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a href="job.php">
        <svg>
            <use xlink:href="#jobs"></use>
          </svg>
          <span>Jobs</span>
        </a>
      </li>
      <li>
        <a href="event.php">
        <svg>
            <use xlink:href="#events"></use>
          </svg>
          <span>Events</span>
        </a>
      </li>
      <li>
        <a href="forum.php">
        <svg>
            <use xlink:href="#forum"></use>
          </svg>
          <span>Forum</span>
        </a>
      </li>
      <li>
      <a href="Users.php">
      <svg>
        <use xlink:href="#users"></use>
          </svg>
          <span>Users</span>
        </a>
      </li>
      <li>
        <div class="switch">
          <input type="checkbox" id="mode" checked>
          <label for="mode">
            <span></span>
            <span>Dark</span>
          </label>
        </div>
        <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
          <svg aria-hidden="true">
            <use xlink:href="#collapse"></use>
          </svg>
          <span>Collapse</span>
        </button>
      </li>
    </ul>
  </nav>
</header>
<section class="page-content">
    <section class="search-and-user">
    <div class="search">
      <form class="searchform" method="POST">
      <input type="search" placeholder="Search Pages..." name="searchquery">
      <button type="submit" aria-label="submit form">
        <svg aria-hidden="true">
          <use xlink:href="#search"></use>
        </svg>
      </button>
      <a href="forum.php?reset=1">Reset</a>
    </form>

    <div class="admin-profile">
      <span class="greeting">Hello admin</span>
      <div class="notifications">
        <span class="badge">1</span>
        <svg>
          <use xlink:href="#users"></use>
        </svg>
      </div>
    </div>
    </div>
  </section>
 
<div class="container-alumni">
  <h1>Forum List</h1>
  <table class="table">
    <thead>
      <th>#</th>
    <th>Topic</th>
      <th>Description</th>
      <th>Created By</th>
      <th>Comments</th>
      <th>Action</th>
    </thead>
    <tbody>
    <?php
    foreach($forums as $forum):
    $sql2 = 'SELECT * FROM tbl_forum_comments WHERE topic_id='.$forum['id'];
    $result2 = mysqli_query($conn, $sql2);
    $comments_count = mysqli_num_rows($result2);
?>
<tr>
  <td> <?php echo $forum['id'] ?> </td>
  <td> <?php echo $forum['title'] ?> </td>
  <td> <?php echo $forum['description'] ?> </td>
  <td> <?php echo $forum['fullname'] ?> </td>
  <td> <?php echo $comments_count ?> </td>
  <td>

  <div class='dropdown'>
  <button class='dropbtn'>Action</button>
  <div class='dropdown-content'>

  <!-- Button trigger modal -->
<button type='button' class='btn btn-link' data-toggle='modal' data-target='#edit<?php echo $forum['id'] ?>Modal'>
  Edit Forum</button>

  <a href='delete_forum.php?id=<?php echo $forum['id'] ?>'>Delete Forum</a>
  </div>
  <!-- Modal -->
<div class='modal fade' id='edit<?php echo $forum['id'] ?>Modal' tabindex='-1' role='dialog' aria-labelledby='#edit<?php echo $forum['id'] ?>ModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='edit<?php echo $forum['id'] ?>ModalLabel'>Edit Forum</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
        <form method='POST' action='edit_forum.php' class="p-3">
        <input type='hidden' name='id' value='<?php echo $forum['id'] ?>'>
              <div class='form-group'>
                <label for='title'>Title</label>
                  <input type='text' class='form-control' id='title' placeholder='Enter Title' name='title' value='<?php echo $forum['title'] ?>' required>
                </div>
                <div class='form-group'>
                  <label for='description'>Text Description</label>
                    <textarea class='form-control' id='description' rows='3' placeholder='Enter Description' name='description' required><?php echo $forum['description'] ?></textarea>
                  </div>
                       <div class='modal-footer'>
                         <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                            <button type='submit' class='btn btn-primary'>Save changes</button>
          </div>
            </form>
    </div>
  </div>
</div>
        </td>

  </tr>
<?php endforeach; ?>
    </tbody>

  </table>
  <br>

  <p> Showing  <?php echo mysqli_num_rows($result);?> entries </p>

</div>

  </body>
 
<script>
    const html = document.documentElement;
const body = document.body;
const menuLinks = document.querySelectorAll(".admin-menu a");
const collapseBtn = document.querySelector(".admin-menu .collapse-btn");
const toggleMobileMenu = document.querySelector(".toggle-mob-menu");
const switchInput = document.querySelector(".switch input");
const switchLabel = document.querySelector(".switch label");
const switchLabelText = switchLabel.querySelector("span:last-child");
const collapsedClass = "collapsed";
const lightModeClass = "light-mode";

/*TOGGLE HEADER STATE*/
collapseBtn.addEventListener("click", function () {
  body.classList.toggle(collapsedClass);
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "collapse menu"
    ? this.setAttribute("aria-label", "expand menu")
    : this.setAttribute("aria-label", "collapse menu");
});

/*TOGGLE MOBILE MENU*/
toggleMobileMenu.addEventListener("click", function () {
  body.classList.toggle("mob-menu-opened");
  this.getAttribute("aria-expanded") == "true"
    ? this.setAttribute("aria-expanded", "false")
    : this.setAttribute("aria-expanded", "true");
  this.getAttribute("aria-label") == "open menu"
    ? this.setAttribute("aria-label", "close menu")
    : this.setAttribute("aria-label", "open menu");
});

/*SHOW TOOLTIP ON MENU LINK HOVER*/
for (const link of menuLinks) {
  link.addEventListener("mouseenter", function () {
    if (
      body.classList.contains(collapsedClass) &&
      window.matchMedia("(min-width: 768px)").matches
    ) {
      const tooltip = this.querySelector("span").textContent;
      this.setAttribute("title", tooltip);
    } else {
      this.removeAttribute("title");
    }
  });
}

/*TOGGLE LIGHT/DARK MODE*/
if (localStorage.getItem("dark-mode") === "false") {
  html.classList.add(lightModeClass);
  switchInput.checked = false;
  switchLabelText.textContent = "Light";
}

switchInput.addEventListener("input", function () {
  html.classList.toggle(lightModeClass);
  if (html.classList.contains(lightModeClass)) {
    switchLabelText.textContent = "Light";
    localStorage.setItem("dark-mode", "false");
  } else {
    switchLabelText.textContent = "Dark";
    localStorage.setItem("dark-mode", "true");
  }
});
</script>